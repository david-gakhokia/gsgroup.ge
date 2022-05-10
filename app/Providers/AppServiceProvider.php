<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

use App\Models\Message;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        // View::share('key', 'value');

        // View::share(['*'], function ($view) {

        //     $messages = Message::get();
        //     $view->with([
        //         'messages ' => $messages
        //     ]);
        // });

        // view()->composer(['*'], function ($view) {
        //     $messages = Message::all();
        //     $view->with('messages', $messages);
        // });


    }
}
