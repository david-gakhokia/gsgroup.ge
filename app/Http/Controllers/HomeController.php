<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Exclusive;
use App\Models\Live;
use App\Models\Order;
use App\Models\Post;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\Project;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Table;
use App\Models\Vision;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{


    public function index()
    {
        $clients = Client::translatedIn(app()->getLocale())
        ->where('status', 1)
        ->get();
        $visions = Vision::translatedIn(app()->getLocale())
        ->where('status', 1)
        ->get();
        $projects = Project::translatedIn(app()->getLocale())
        ->where('status', 1)
        ->get();

        $exclusives = Exclusive::translatedIn(app()->getLocale())
        ->where('status', 1)
        ->get();

        $services = Service::translatedIn(app()->getLocale())
            ->take(10)
            ->get();



        return view('frontend.home', compact(['clients','services','visions','projects', 'exclusives', 'privacy_policy']));
    }


    public function test()
    {
        $posts = Post::translatedIn(app()->getLocale())

            ->take(10)
            ->get();
        $setting = Setting::translatedIn(app()->getLocale())
            ->first();

        return view('frontend.test', ['setting' => $setting], compact('posts'));
    }
    public function company()
    {
        $employees = Employee::translatedIn(app()->getLocale())

            ->take(10)
            ->get();
        return view('frontend.company', compact('employees'));
    }

    public function news()
    {
        $posts = Post::translatedIn(app()->getLocale())
            ->take(10)
            ->get();
        return view('frontend.posts.index', compact('posts'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function privacy_policy()
    {

        $privacy_policy = PrivacyPolicy::translatedIn(app()->getLocale())
            ->first();

        return view('frontend.privacy-policy',compact('privacy_policy'));
    }


    public function repair()
    {
        return view('frontend.repair');
    }

    public function tour()
    {
        return view('frontend.tour');
    }

    public function show($id)
    {
        $project = Project::translatedIn(app()->getLocale())
            ->findOrFail($id);
        return view('frontend.projects.show', compact('project'));
    }

    public function investments()
    {
        return view('frontend.investments');
    }


    public function live()
    {
        $lives = Live::translatedIn(app()->getLocale())
            ->take(10)
            ->get();
        return view('frontend.live', compact('lives'));


    }


    public function projects()
    {
        return view('frontend.projects.index');
    }

    public function wyndham()
    {
        return view('frontend.projects.wyndham-residence-batumi');
    }

    public function terms_of_use()
    {
        return view('frontend.terms-of-use');
    }

    public function blog()
    {
        return view('frontend.posts.index');
    }

    public function blog_show()
    {
        return view('frontend.posts.show');
    }

    public function products()
    {
        $products = Product::all();
        return view('frontend.products.index', compact('products'));
    }
    public function product_show($id)
    {
        $product = Product::translatedIn(app()->getLocale())
            ->findOrFail($id);
        $categories = Category::all();

        return view('frontend.products.show', compact(['product', 'categories']));
    }

    public function prices()
    {
        return view('frontend.prices');
    }

    public function prices_show()
    {
        return view('frontend.prices.show');
    }


    public function about()
    {
        $clients = Client::all();
        return view('frontend.about', compact('clients'));
    }





    public function menu()
    {
        $categories = Category::with('children')
            ->orderBy('rank')
            ->whereNull('parent_id')
            ->get();
        return view('frontend.menu')->with(['categories'  => $categories]);
    }

    public function category($id)
    {
        $category = Category::where('id', '=', $id)->first();
        $products = Product::where('category_id', '=', $id)->get()->all();
        return view('frontend.category', compact(['products', 'category']));
    }



    public function reservation()
    {
        $reservations = Reservation::all();
        $tables = Table::all();

        return view('frontend.reservation', compact('reservations', 'tables'));
    }

    public function orders(Request $request)
    {
        $locale = $request->query('language');
        $orders = DB::table('orders')
            // ->where('user_id', '=', $request->session()->get('wdUserId'))
            ->where('product_translations.locale', '=', $locale)
            ->join('products', 'products.id', '=', 'orders.product_id')
            ->join('product_translations', 'product_translations.product_id', '=', 'products.id')
            ->select('orders.*', 'product_translations.name', 'products.price', 'products.image')
            ->get();
        return view('frontend.orders', compact('orders'));
    }

    public function create(Request  $request)
    {
        $product_id = $request->input('product_id');
        $table_id = $request->session()->get('tableId');
        $quantity = $request->input('quantity');
        $user_id = 5;
        // $request->session()->get('wdUserId');
        // $generatedId =  Str::random();
        // $user_id = $request->session()->get('wdUserId');
        // if (!$user_id) {
        //     $request->session()->put('wdUserId', $generatedId);
        //     $user_id = $generatedId;
        // }
        Order::insert([
            'product_id' => $product_id,
            'table_id' => $table_id,
            'user_id' => $user_id,
            // 'user_id' => $user_id,
            // 'place_id' => $place_id,
            'quantity' => $quantity,
        ]);

        return back()->withErrors(['Order Added', 'The Message']);
    }

    public function updateQuantity(Request $request)
    {
        $id = $request->input('id');
        $quantity = $request->input('quantity');
        Order::find($id)->update([
            'quantity' => $quantity,
        ]);

        return $quantity;
    }


    public function destroy($id)
    {
        Order::find($id)->delete();
        return back()->withSuccessMessage(__('alerts.Record has been deleted'));
    }

    public function clearCart(Request $request)
    {
        Order::where('user_id', $request->session()->get('wdUserId'))->delete();
        return redirect()->back()->with('success', 'კალათა წარმატებით გასუფთავდა!');
    }
}
