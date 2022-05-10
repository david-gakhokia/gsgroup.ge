<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        $all_message = Message::all();

        // return $mes;
        return view('backend.messages.index' , compact('all_message'));
    }


    public function create()
    {
        $messages = Message::all();

        return view('backend.messages.create', compact('messages'));
    }


    public function store(StoreMessageRequest $request)

    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/messages';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        Message::create($data);

        return redirect()->route('messages.index')
        ->withSuccessMessage(__('alerts.New record has been added'));
    }


    public function show($id)
    {
        $message = Message::findOrFail($id);

        return view('backend.messages.show', compact('message'));
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        Message::find($id)->delete();

        return redirect()->route('messages.index')->withSuccessMessage(__('alerts.Record has been deleted'));
    }
}
