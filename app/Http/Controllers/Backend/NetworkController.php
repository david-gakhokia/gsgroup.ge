<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Network;
use Illuminate\Http\Request;

class NetworkController extends Controller
{

    public function index()
    {

        $networks = Network::all();
        return view('backend.settings.networks.index', compact('networks'));
    }

    public function store(Request $request)
    {

        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/networks';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Network::create($data);

        return back()->withSuccessMessage(__('alerts.Record has been updated'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $network = Network::findOrFail($id);

        return view('backend.settings.networks.edit', compact('network'));
    }


    public function update (Request $request, $id)
    {


        $data = $request->all();


        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/networks';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Network::findOrFail($id)->update($data);


        return redirect()->route('setting.networks')->withSuccessMessage(__('alerts.Record has been updated'));
    }

    public function destroy($id)
    {
        Network::find($id)->delete();
        return back()->withSuccessMessage(__('alerts.Record has been deleted'));
    }
}
