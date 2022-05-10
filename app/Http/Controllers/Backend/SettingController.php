<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSettingRequest;
use App\Models\Network;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function general()
    {
        $setting = Setting::translatedIn(app()->getLocale())
            ->first();
        return view('backend.settings.general', ['setting' => $setting]);
    }

    public function networks()
    {
        $networks = Network::all();
        return view('backend.settings.networks.index',compact('networks'));
    }

    public function save_network(Request $request)
    {

        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/settings';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Network::create($data);

        return back()->withSuccessMessage(__('alerts.Record has been updated'));
    }


    public function store(StoreSettingRequest $request)
    {
        $firstData = Setting::count();

        if ($firstData == 0) {

            $data = $request->all();


            if ($logo = $request->file('logo')) {
                $destinationPath = 'uploads/settings';
                $logoImage = date('YmdHis') . "." . $logo->getClientOriginalExtension();
                $logo->move($destinationPath, $logoImage);
                $data['logo'] = "$logoImage";
            }

            if ($image = $request->file('image')) {
                $destinationPath = 'uploads/settings';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $data['image'] = "$profileImage";
            }


            Setting::create($data);

            return back()
            ->withSuccessMessage(__('alerts.New record has been added'));
        }
        else{

            $firstData = Setting::first();

            $data = Setting::find($firstData->id);

            $data = $request->all();

            if ($logo = $request->file('logo')) {
                $destinationPath = 'uploads/settings';
                $profileImage = date('YmdHis') . "." . $logo->getClientOriginalExtension();
                $logo->move($destinationPath, $profileImage);
                $data['logo'] = "$profileImage";
            }

            if ($image = $request->file('image')) {
                $destinationPath = 'uploads/settings';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $data['image'] = "$profileImage";
            }

            Setting::findOrFail($firstData->id)->update($data);
            return back()->withSuccessMessage(__('alerts.Record has been updated'));
        }
    }

    public function show_network($id)
    {
        $network = Network::findOrFail($id);

        return view('backend.settings.networks.show', compact('network'));
    }

    public function edit_network($id)
    {
        $network = Network::findOrFail($id);

        return view('backend.settings.networks.edit', compact('network'));
    }


    public function destroy($id)
    {
        Network::find($id)->delete();
        return back()->withSuccessMessage(__('alerts.Record has been deleted'));
    }
}
