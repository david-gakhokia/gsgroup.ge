<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLiveRequest;
use App\Http\Requests\UpdateLiveRequest;
use App\Models\Live;
use Illuminate\Http\Request;

class LiveController extends Controller
{

    public function index()
    {
        $lives = Live::translatedIn(app()->getLocale())
            ->latest()
            ->take(10)
            ->get();

        return view('backend.lives.index', compact('lives'));
    }


    public function create()
    {
        return view('backend.lives.create');
    }


    public function store(StoreLiveRequest $request)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/lives';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        Live::create($data);

        return redirect()->route('lives.index')
            ->withSuccessMessage(__('alerts.New record has been added'));
    }


    public function show($id)
    {
        $live = Live::translatedIn(app()->getLocale())
            ->findOrFail($id);
        return view('backend.lives.show', compact('live'));
    }


    public function edit($id)
    {
        $live = Live::translatedIn(app()->getLocale())
            ->findOrFail($id);

        return view('backend.lives.edit', compact('live'));
    }


    public function update(UpdateLiveRequest $request, $id)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/lives';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Live::findOrFail($id)->update($data);
        return redirect()->route('lives.index')->withSuccessMessage(__('alerts.Record has been updated'));
    }


    public function destroy($id)
    {
        Live::find($id)->delete();

        return redirect()->route('lives.index')->withSuccessMessage(__('alerts.Record has been deleted'));
    }
}
