<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;


class TokenController extends Controller
{

    public function index(Request $request)
    {
        $user = $request->user();

        // return $user->tokens;

        return view('backend.tokens.index',
        [
            'tokens' => $user->tokens
        ]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $tokenName = $request->post('name');

        $user = $request->user();
        $token = $user->createToken($tokenName);

        return view('backend.tokens.show', [
            'tokenName' => $tokenName,
            'token' => $token->plainTextToken
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


    public function destroy(PersonalAccessToken $token)
    {
        $token->delete();

        return back();
    }
}
