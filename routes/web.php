<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\ReservationController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\TokenController;
use App\Http\Controllers\Backend\TestController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\VisionController;
use App\Http\Controllers\Backend\NetworkController;
use App\Http\Controllers\Backend\ExclusiveController;
use App\Http\Controllers\Backend\PrivacyPolicyController;





// Start Frontend Routes

//Home Page
Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/project/{id}', [HomeController::class, 'show']);
Route::get('privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy-policy');


// End Front Routes


// Start Backend Routes

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {


    Route::resource('permissions', PermissionController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);


    Route::resource('posts', PostController::class);
    Route::resource('pages', PageController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('projects', ProjectController::class);

    Route::resource('exclusives', ExclusiveController::class);

    Route::resource('visions', VisionController::class);



    Route::resource('reservations', ReservationController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('messages', MessageController::class);

    // Privacy-Policy
    Route::get('privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy-policy');
    Route::post('privacy-policy', [PrivacyPolicyController::class, 'store'])->name('privacy-policy.store');

    // Settings Route

    Route::group(['prefix' => 'setting'], function () {

        // General
        Route::get('general', [SettingController::class, 'general'])->name('setting.general');
        Route::post('general', [SettingController::class, 'store'])->name('setting.store');


        // Networks
        Route::get('networks', [NetworkController::class, 'index'])->name('setting.networks');
        Route::post('networks', [NetworkController::class, 'store'])->name('networks.store');
        Route::get('network/edit/{id}', [NetworkController::class, 'edit'])->name('network.edit');
        Route::post('network/update/{id}', [NetworkController::class, 'update'])->name('networks.update');
        Route::delete('network/destroy{id}', [NetworkController::class, 'destroy'])->name('network.destroy');
    });


    // Api Tokens
    Route::get('tokens', [TokenController::class, 'index'])->name('tokens');
    // Route::get('/token/create', [TokenController::class, 'showTokenForm'])->name('token.showForm');
    Route::post('/token/create', [TokenController::class, 'create'])->name('token.create');
    Route::delete('/token/delete/{token}', [TokenController::class, 'destroy'])->name('token.destroy');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('currency', [DashboardController::class, 'currency'])->name('currency');


    Route::resource('test', TestController::class);
});
