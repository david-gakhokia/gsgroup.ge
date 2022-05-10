<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Place;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{

    // function __construct()
    // {
    //     $this->middleware('permission:table-list|table-create|table-edit|table-delete', ['only' => ['index', 'store']]);
    //     $this->middleware('permission:table-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:table-edit', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:table-delete', ['only' => ['destroy']]);
    // }

    public function index()
    {
        $tables = Table::all();
        $places = Place::all();

        return view('backend.tables.index',compact('tables','places'));

    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|numeric',
                'status' => 'required',
                'place_id' => '',
            ]
        );

        Table::insert([
            'name' => $request->name,
            'status' => $request->status,
            'place_id' => $request->place_id,
        ]);

        return redirect()->route('tables.index')
            // ->withSuccessMessage(__('alerts.New record has been added'));
            ->with('success', __('alerts.New record has been added'));
    }




    public function show($id)
    {
        return view('backend.tables.show', ['table' => Table::findOrFail($id)])->with('id', $id);
    }


    public function edit($id)
    {
        $table = Table::findOrFail($id);
        $places = Place::all();

        return view('backend.tables.edit', compact('table','places'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();

        Table::findOrFail($id)->update($data);

        return redirect()->route('tables.index')
            // ->withSuccessMessage(__('alerts.New record has been added'));
            ->with('success', __('alerts.Record has been updated'));

    }

    public function destroy($id)
    {

        Table::findOrFail($id)->delete();

        return redirect()->back()
            ->with('success', __('alerts.User deleted successfully'));

    }
}
