<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ReservationController extends Controller
{

    public function index()
    {
        $reservations = Reservation::all();
        $tables = Table::all();

        return view('backend.reservations.index', compact('reservations', 'tables'));
    }

    public function create()
    {
        $tables = Table::all();

        return view('backend.reservations.create', compact('tables'));
    }

    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required|max:20',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'date' => 'required',
            'time' => 'required',
            'person' => 'required',
            'status' => 'required',
        ]);

        //  Store data in database
        Reservation::create($request->all());

        //  Send mail to admin
        Mail::send('backend.reservations.email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'date'  => $request->get('date'),
                'time'  => $request->get('time'),
                'person'  => $request->get('person'),
                'status'  => $request->get('status')
            ),
            function ($message) use ($request) {

                $message->from($request->email);
                $message->to('reservation@kerdzebi.ge', '$email')->subject('Order Form Kerdzebi.ge');
            }
        );

        return redirect()->route('reservations.index')->withSuccessMessage(__('alerts.New record has been added'));
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $reservation = Reservation::find($id);
        $tables = Table::get()->all();

        return view('backend.reservations.edit', compact('reservation', 'tables'));
    }


    public function update(Request $request, $id)
    {

        $validateData = $request->validate(
            [
                'name' => 'required|max:20',
                'email' => 'required|email',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
                'date' => 'required',
                'time' => 'required',
                'person' => 'required',
                'table_id' => 'required',
                'status' => 'required',
            ],
            [
                'name.required' => __('dashboard.Name'),
                'email.required' => 'input Email',
                'phone.required' => 'input Phone',
                'date.required' => 'input Date',
                'time.required' => 'input Time',
                'person.required' => 'input Person',
                'table_id.required' => 'input Table',
                'status.required' => 'Select Status',
            ]
        );

        Reservation::findOrFail($id)->update($validateData);

        return redirect()->route('reservations.index')->withSuccessMessage(__('alerts.Record has been updated'));
    }


    public function destroy($id)
    {

        Reservation::find($id)->delete();

        return redirect()->back()->withSuccessMessage(__('alerts.Record has been deleted'));
    }
}
