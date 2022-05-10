<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function index(Request $request)
    {
        $pages = Page::with('user');
        if (Auth::user()->hasRole('admin')){
            $pages = Page::get();
            return view('backend.pages.index', compact('pages'));
        }

        if (Auth::user()->hasRole('moderator')) {
            $pages = Page::get();
            return view('backend.pages.index', compact('pages'));
        }

        else {
            $pages = $pages->where('user_id', Auth::user()->id);
            $pages = $pages->get();

            return view('backend.pages.index', compact('pages'));
        }
    }


    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id = Auth::user()->id;

        $user_id = $id;

        $validateData = $request->validate(
            [
                'title' => 'required',
                'text' => 'required',
                'currency' => 'required',
            ]
        );

        Page::insert([
            'title' => $request->title,
            'user_id' => $user_id,
            'text' => $request->text,
            'currency' => $request->currency
        ]);

        return redirect()->route('pages.index')
        ->with('success', 'Page created successfully.');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::find($id)->delete();

        return redirect()->route('pages.index')
        ->with('success', 'Page deleted successfully.');
    }
}
