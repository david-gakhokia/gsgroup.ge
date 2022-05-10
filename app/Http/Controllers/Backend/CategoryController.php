<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::translatedIn(app()->getLocale())
            ->with('children')
            ->whereNull('parent_id')
            ->orderBy('rank', 'ASC')
            ->take(20)
            ->get();

        return view('backend.categories.index', compact('categories'));
    }


    public function create()
    {
        //
    }

    public function store(StoreCategoryRequest $request)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/categories';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Category::create($data);

        return redirect()->route('categories.index')->withSuccessMessage(__('alerts.New record has been added'));

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        $category = Category::translatedIn(app()->getLocale())
            ->findOrFail($id);

        $categories = Category::translatedIn(app()->getLocale())
            ->where([['parent_id', null], ['id', '!=', $id]])
            ->get()
            ->all();

        return view('backend.categories.edit', compact('category','categories'));
    }


    public function update(UpdateCategoryRequest $request, $id)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/categories';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Category::findOrFail($id)->update($data);

        return redirect()->route('categories.index')
            ->withSuccessMessage(__('alerts.Record has been updated'));
    }


    public function destroy($id)
    {
        Category::find($id)->delete();


        // $category = Category::find($id);

        // if ($category->children) {
        //     foreach ($category->children()->with('products')->get() as $child) {
        //         foreach ($child->products as $post) {
        //             $post->update(['category_id' => NULL]);
        //         }
        //     }

        //     $category->children()->delete();
        // }

        // foreach ($category->products as $post) {
        //     $post->update(['category_id' => NULL]);
        // }

        // $category->delete();

        return redirect()->route('categories.index')->withSuccessMessage(__('alerts.Record has been deleted'));
    }

}
