<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    // function __construct()
    // {
    //     $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'store']]);
    //     $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    // }

    public function index()
    {

        $products = Product::translatedIn(app()->getLocale())
            ->latest()
            ->take(10)
            ->get();

        return view('backend.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.products.create',compact('categories'));
    }


    public function store(StoreProductRequest $request)
    {

        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/products';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        Product::create($data);

        return redirect()->route('products.index')
            ->withSuccessMessage(__('alerts.New record has been added'));

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $product = Product::translatedIn(app()->getLocale())
            ->findOrFail($id);
        $categories = Category::all();

        return view('backend.products.edit', compact(['product','categories']));
    }


    public function update(UpdateProductRequest $request, $id)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/products';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Product::findOrFail($id)->update($data);
        return redirect()->route('products.index')->withSuccessMessage(__('alerts.Record has been updated'));
    }


    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->route('products.index')->withSuccessMessage(__('alerts.Record has been deleted'));
    }


    // public function deleteimage($id)
    // {
    //     $images = Image::findOrFail($id);
    //     if (File::exists("images/" . $images->image)) {
    //         File::delete("images/" . $images->image);
    //     }

    //     Image::find($id)->delete();
    //     return back();
    // }
}
