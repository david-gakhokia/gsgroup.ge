<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index', 'show']]);
    //     $this->middleware('permission:post-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:post-edit', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    // }

    public function index(Request $request)
    {
        $posts = Post::translatedIn(app()->getLocale())
            ->latest()
            ->take(10)
            ->get();
        return view('backend.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('backend.posts.create');
    }

    public function store(StorePostRequest $request)
    {
        // Post::create($request->validated() + [
        //     'user_id' => auth()->id(),
        // ]);

        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/posts';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        Post::create($data);

        return redirect()->route('posts.index')
        ->withSuccessMessage(__('alerts.New record has been added'));
    }



    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('backend.posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, $id)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/posts';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Post::findOrFail($id)->update($data);
        return redirect()->route('posts.index')->withSuccessMessage(__('alerts.Record has been updated'));
    }

    public function destroy($id)
    {
        Post::find($id)->delete();

        return redirect()->route('posts.index')
        ->withSuccessMessage(__('alerts.Record has been deleted'));
    }
}
