<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/greeting/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'ar'])) {
        abort(400);
    }
 
    App::setLocale($locale);

    return __('messages.welcome');
 
    // ...
});