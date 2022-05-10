<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServceRequest;
use App\Http\Requests\UpdateServceRequest;
use App\Models\Vision;
use Illuminate\Http\Request;

class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visions = Vision::translatedIn(app()->getLocale())
            ->latest()
            ->take(10)
            ->get();

        // return $visions;
        return view('backend.visions.index', compact('visions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.visions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServceRequest $request)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/visions';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        Vision::create($data);

        return redirect()->route('visions.index')
            ->withSuccessMessage(__('alerts.New record has been added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vision = Vision::translatedIn(app()->getLocale())
            ->findOrFail($id);
        return view('backend.visions.show', compact('vision'));
    }

    public function edit($id)
    {
        $vision = Vision::translatedIn(app()->getLocale())
            ->findOrFail($id);


        return view('backend.visions.edit', compact('vision'));
    }

    public function update(UpdateServceRequest $request, $id)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/visions';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Vision::findOrFail($id)->update($data);
        return redirect()->route('visions.index')->withSuccessMessage(__('alerts.Record has been updated'));
    }

    public function destroy($id)
    {
        Vision::find($id)->delete();

        return redirect()->route('visions.index')->withSuccessMessage(__('alerts.Record has been deleted'));
    }
}
