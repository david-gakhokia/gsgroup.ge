<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class TestController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('rank')
        ->where('status', '=', 1)
        ->where('parent_id', '=',Null)
        ->get();

        $sub_categories = Category::orderBy('rank')
            ->where('status', '=', 1)
            // ->where('parent_id', '=',Null)
            ->with('children')
            ->get();


        return view('test', compact(['sub_categories', 'categories']));
    }
}
