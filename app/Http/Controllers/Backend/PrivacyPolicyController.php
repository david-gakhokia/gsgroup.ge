<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrivacyPolicyRequest;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $privacy_policy = PrivacyPolicy::translatedIn(app()->getLocale())->first();
        return view('backend.pages.privacy-policy', ['privacy_policy' => $privacy_policy]);
    }


    public function store(StorePrivacyPolicyRequest $request)
    {
        $firstData = PrivacyPolicy::count();

        if ($firstData == 0) {

            $data = $request->all();

            if ($cover = $request->file('cover')) {
                $destinationPath = 'uploads/settings';
                $logoImage = date('YmdHis') . "." . $cover->getClientOriginalExtension();
                $cover->move($destinationPath, $logoImage);
                $data['cover'] = "$logoImage";
            }


            PrivacyPolicy::create($data);

            return back()
                ->withSuccessMessage(__('alerts.New record has been added'));
        } else {

            $firstData = PrivacyPolicy::first();

            $data = PrivacyPolicy::find($firstData->id);

            $data = $request->all();

            if ($cover = $request->file('cover')) {
                $destinationPath = 'uploads/settings';
                $profileImage = date('YmdHis') . "." . $cover->getClientOriginalExtension();
                $cover->move($destinationPath, $profileImage);
                $data['cover'] = "$profileImage";
            }


            PrivacyPolicy::findOrFail($firstData->id)->update($data);
            return back()->withSuccessMessage(__('alerts.Record has been updated'));
        }
    }

}
