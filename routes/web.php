<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('/lang/{locale}', function (string $locale) {
    
    if (! in_array($locale, ['en', 'ar'])) {
        abort(404);
    }
 
    Session::put('locale',$locale);

    return back();

    // ...
});

Route::get('/test',function(){

    return __('messages.welcome');

})->middleware(['auth',SetLocale::class]);


// Need Authontication
Route::group(['middleware'=>['auth',SetLocale::class]],function(){

    Route::get('/dashboard',function(){
        
        return auth()->user()->can('Edit Employee');

    });

    Route::resource('/employee',EmployeeController::class);
    Route::resource('/company',CompanyController::class);
    
});

// No Need To Authontication
Route::group(['middleware'=>SetLocale::class],function(){

    Route::get('/docksh',function(){
        return 'docksh';
    });
    
});

