<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.calls');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required|max:20',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'status' => '',

        ]);

        //  Store data in database
        Reservation::create($request->all());

        //  Send mail to admin
        Mail::send(
            'backend.reservations.email',
            array(
                'name' => $request->get('name'),
                'phone' => $request->get('phone'),
                'status'  => $request->get('status')
            ),
            function ($message) use ($request) {
                $message->to('nextgroupbatumi@gmail.com')->subject('Calls Request From nextgroup.ge');
            }
        );

        return back()->with('success', __('alerts.New record has been added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
