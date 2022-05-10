<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlaceRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{

    // function __construct()
    // {
    //     $this->middleware('permission:place-list|place-create|place-edit|place-delete', ['only' => ['index', 'store']]);
    //     $this->middleware('permission:place-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:place-edit', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:place-delete', ['only' => ['destroy']]);
    // }


    public function index()
    {
        $places = Place::translatedIn(app()->getLocale())
            ->latest()
            ->take(10)
            ->get();

        return view('backend.places.index', compact('places'));
    }

    public function edit($id)
    {

        $place = Place::translatedIn(app()->getLocale())
            ->findOrFail($id);
        return view('backend.places.edit', compact('place'));
    }

    public function store(StorePlaceRequest $request)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/places';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        Place::create($data);

        return redirect()->route('places.index')
            ->withSuccessMessage(__('alerts.New record has been added'));
    }

    public function show($id)
    {
        //
    }

    public function update(StorePlaceRequest $request,  $id)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/places';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Place::find($id)->update($data);
        return redirect()->route('places.index')->withSuccessMessage(__('alerts.Record has been updated'));
    }




    public function destroy($id)
    {
        Place::find($id)->delete();

        return redirect()->route('places.index')->withSuccessMessage(__('alerts.Record has been deleted'));
    }
}
