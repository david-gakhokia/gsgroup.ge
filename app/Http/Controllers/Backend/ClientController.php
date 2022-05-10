<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\ClientTranslation;
use Astrotomic\Translatable\Validation\RuleFactory;


class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::translatedIn(app()->getLocale())
            ->latest()
            ->take(10)
            ->get();

        return view('backend.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('backend.clients.create');
    }

    public function store( StoreClientRequest $request)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/clients';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
// return $data;
        Client::create($data);

        return redirect()->route('clients.index')->withSuccessMessage(__('alerts.New record has been added'));
    }


    public function show($id)
    {
        $client = Client::findOrFail($id);

        return view('backend.clients.show', compact('client'));
    }

    public function edit($id)
    {

        $client = Client::translatedIn(app()->getLocale())
            ->findOrFail($id);
        return view('backend.clients.edit', compact('client'));
    }



    public function update(UpdateClientRequest $request,  $id)
    {
        $data = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/clients';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        Client::find($id)->update($data);
        return redirect()->route('clients.index')->withSuccessMessage(__('alerts.Record has been updated'));
    }

    public function destroy($id)
    {
        Client::find($id)->delete();

        return redirect()->route('clients.index')->withSuccessMessage(__('alerts.Record has been deleted'));
    }


    public function deleteAll(Request $request)
    {
        $ids = $request->ids;

        return $ids;
        Client::whereIn('id', explode(",", $ids))->delete();
        return response()->json(['success' => "Products Deleted successfully."]);
    }
}
