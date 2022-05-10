<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use RealRashid\SweetAlert\Facades\Alert;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function($request,$next){
            if (session('success_message')){
                // Alert::success(session('success_message'));
                toast(session('success_message'), 'success');
            }

            if (session('error_message')) {
                toast(session('error_message'), 'error');
            }


            return $next($request);
        });

    }
}
