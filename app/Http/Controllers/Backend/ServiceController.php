<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServceRequest;
use App\Http\Requests\UpdateServceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::translatedIn(app()->getLocale())
            ->latest()
            ->take(10)
            ->get();

        // return $services;
        return view('backend.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.create');

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
            $destinationPath = 'uploads/services';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        Service::create($data);

        return redirect()->route('services.index')
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
        $service = Service::translatedIn(app()->getLocale())
            ->findOrFail($id);
        return view('backend.services.show', compact('services'));
    }

    public function edit($id)
    {
        $service = Service::translatedIn(app()->getLocale())
            ->findOrFail($id);


        return view('backend.services.edit', compact('service'));
    }

    public function update(UpdateServceRequest $request, $id)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/services';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Service::findOrFail($id)->update($data);
        return redirect()->route('services.index')->withSuccessMessage(__('alerts.Record has been updated'));
    }

    public function destroy($id)
    {
        Service::find($id)->delete();

        return redirect()->route('services.index')->withSuccessMessage(__('alerts.Record has been deleted'));
    }
}
