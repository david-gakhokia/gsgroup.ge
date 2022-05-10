<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderController extends Controller
{


    public function Adminindex(Request $request)
    {
        // return 'hi';
        // $orders = Order::get();
        $locale = $request->query('language');

        $orders = DB::table('orders')

            ->where('product_translations.locale', '=', $locale)
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->join('tables', 'orders.table_id', '=', 'tables.id')
            ->join('places', 'tables.place_id', '=', 'places.id')
            ->select('orders.*', 'products.name as pname', 'products.price', 'products.image', 'tables.place_id', 'tables.name', 'places.name as plname')
            ->get();
        return view('backend.orders.index', compact('orders'));
    }

    public function index(Request $request)
    {
        $locale = $request->query('language');
        $orders = DB::table('orders')
        ->where('product_translations.locale', '=', $locale)
            ->join('products', 'products.id', '=', 'orders.product_id')
            ->join('product_translations', 'product_translations.product_id', '=', 'products.id')
            ->select('orders.*', 'product_translations.name', 'products.price', 'products.image')
            ->get();

        // return $orders;
        return view('backend.orders.index', compact('orders'));
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
        return view('backend.orders.index', compact('orders'));
    }


    public function create(Request  $request)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $table_id = $request->session()->get('tableId');
        $request->session()->get('wdUserId');
        $generatedId =  Str::random();
        $user_id = $request->session()->get('wdUserId');
        if (!$user_id) {
            $request->session()->put('wdUserId', $generatedId);
            $user_id = $generatedId;
        }
        Order::insert([
            'product_id' => $product_id,
            'table_id' => $table_id,
            'user_id' => $user_id,
            // 'place_id' => $place_id,
            'quantity' => $quantity,

        ]);

        return redirect()->back()->withErrors(['Order Added', 'The Message']);
    }

}
