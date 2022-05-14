<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExclusiveRequest;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\StoreServceRequest;
use App\Http\Requests\UpdateExclusiveRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Requests\UpdateServceRequest;
use App\Models\Exclusive;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class ExclusiveController extends Controller
{

    public function index()
    {
        $exclusives = Exclusive::translatedIn(app()->getLocale())
            ->latest()
            ->take(10)
            ->get();

        // return $exclusives;
        return view('backend.exclusives.index', compact('exclusives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.exclusives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExclusiveRequest $request)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/exclusives';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        Exclusive::create($data);

        return redirect()->route('exclusives.index')
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
        $exclusive = Exclusive::translatedIn(app()->getLocale())
            ->findOrFail($id);
        return view('backend.exclusives.show', compact('exclusive'));
    }

    public function edit($id)
    {
        $exclusive = Exclusive::translatedIn(app()->getLocale())
            ->findOrFail($id);


        return view('backend.exclusives.edit', compact('exclusive'));
    }

    public function update(UpdateExclusiveRequest $request, $id)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/exclusives';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Exclusive::findOrFail($id)->update($data);
        return redirect()->route('exclusives.index')->withSuccessMessage(__('alerts.Record has been updated'));
    }

    public function destroy($id)
    {
        Exclusive::find($id)->delete();

        return redirect()->route('exclusives.index')->withSuccessMessage(__('alerts.Record has been deleted'));
    }
}
