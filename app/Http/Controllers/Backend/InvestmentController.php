<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvestmentRequest;
use App\Http\Requests\UpdateInvestmentRequest;
use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{

    public function index()
    {
        $investments =Investment::translatedIn(app()->getLocale())
        ->latest()
        ->take(10)
        ->get();

        return view('backend.investments.index', compact('investments'));
    }


    public function create()
    {
        return view('backend.investments.create');
    }


    public function store(StoreInvestmentRequest $request)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/investments';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        Investment::create($data);

        return redirect()->route('investments.index')
        ->withSuccessMessage(__('alerts.New record has been added'));
    }


    public function show($id)
    {
        $investment = Investment::translatedIn(app()->getLocale())
            ->findOrFail($id);
        return view('backend.investments.show', compact('investment'));
    }

    public function edit($id)
    {
        $investment = Investment::translatedIn(app()->getLocale())
            ->findOrFail($id);

        return view('backend.investments.edit');
    }

    public function update(UpdateInvestmentRequest $request, $id)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/investments';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Investment::findOrFail($id)->update($data);
        return redirect()->route('investments.index')->withSuccessMessage(__('alerts.Record has been updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Investment::find($id)->delete();
        return redirect()->route('investments.index')->withSuccessMessage(__('alerts.Record has been deleted'));
    }
}
