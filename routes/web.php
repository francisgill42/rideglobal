<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\HostCreated;

//login
Route::get('/admin/login', [App\Http\Controllers\LoginController::Class,'index']);
Route::post('/admin/login/creds', [App\Http\Controllers\LoginController::Class,'login']);
Route::get('/admin/test', function(){
    return view('text');
});

Route::get('/mail', [App\Http\Controllers\Auth\RegisterController::Class,'mail']);


Route::get('/email', function (){
	
	Mail::to('abc@email.com')->send(new HostCreated());
    return new HostCreated(); 
});


Route::get('login-page', function (){
    return ("hello");
});

Route::get('/admin/home', [App\Http\Controllers\DashboardController::Class,'index']);


// Country Routes
Route::get('/showcountry', [App\Http\Controllers\countryController::Class,'index']);
Route::post('/store-country', [App\Http\Controllers\countryController::Class,'store']);
Route::get('/getAll-country', [App\Http\Controllers\countryController::Class,'getAll']);
Route::get('/showcountry/{id}', [App\Http\Controllers\countryController::Class,'show']);
Route::post('/edit-country/{id}', [App\Http\Controllers\countryController::Class,'edit']);
Route::post('/delete-country/{id}', [App\Http\Controllers\countryController::Class,'destroy']);


//City
Route::get('showcity', [App\Http\Controllers\CityController::Class,'index'] );
Route::post('/store-city', [App\Http\Controllers\CityController::Class,'add'] );
Route::post('/update-city/{id}', [App\Http\Controllers\CityController::Class,'edit'] );
Route::post('/delete-city/{id}', [App\Http\Controllers\CityController::Class,'destroy'] );
Route::get('/getAll-city', [App\Http\Controllers\CityController::Class,'getAll'] );
Route::post('/getCity', [App\Http\Controllers\CityController::Class,'getAll'] );
Route::post('getcityByCountry',  [App\Http\Controllers\CityController::Class,'getcityByCountry'] );


//host
Route::get('/showhost', [App\Http\Controllers\HostController::Class,'index']);
Route::post('/store-host', [App\Http\Controllers\HostController::Class,'add']);
Route::post('/host/edit/{id}', [App\Http\Controllers\HostController::Class,'edit']);
Route::post('/host/delete/{id}', [App\Http\Controllers\HostController::Class,'destroy']);
Route::get('/admin/host/getAll', [App\Http\Controllers\HostController::Class,'getAll'] );
Route::post('/getByCountryId', [App\Http\Controllers\HostController::Class,'getByCountryId']);
Route::post('/host-register', [App\Http\Controllers\Auth\RegisterController::Class,'hostCreate']);


//Rides
Route::get('/showrides', [App\Http\Controllers\RidesController::Class,'index']);
Route::get('/rides',[App\Http\Controllers\SearchRidesController::Class,'index']);
Route::post('/store-ride', [App\Http\Controllers\RidesController::Class,'store'] );
Route::post('/edit-ride/{id}', [App\Http\Controllers\RidesController::Class,'edit']);
Route::post('/delete-ride/{id}', [App\Http\Controllers\countryController::Class,'edit']);


// Riders Routes
Route::get('showriders', [App\Http\Controllers\riderController::Class,'index']);
Route::get('/rider-register',[App\Http\Controllers\RiderRegistrationController::Class,'index']);
Route::post('/rider-registration',[App\Http\Controllers\RiderRegistrationController::Class,'register']);
Route::post('/rider-login-check',[App\Http\Controllers\RiderRegistrationController::Class,'login']);
Route::get('/rider-logout',[App\Http\Controllers\RiderRegistrationController::Class,'logout']);


//Website
Route::get('/',[App\Http\Controllers\MainPageController::Class,'index']);


Route::get('/rider-login',[App\Http\Controllers\MainPageController::Class,'RiderLogin']);

Route::get('/causes', [App\Http\Controllers\MainPageController::Class,'Causes']);

Route::get('/contact-us', [App\Http\Controllers\MainPageController::Class,'Contact']);

Route::post('/contact', [App\Http\Controllers\ContactController::Class,'store']);

Route::get('/about-us', [App\Http\Controllers\MainPageController::Class,'aboutUs']);

Route::get('/team', [App\Http\Controllers\MainPageController::Class,'Team']);

Route::get('/host',[App\Http\Controllers\HostRideController::Class,'index']);

Route::post('/submit-contact-form', [App\Http\Controllers\MainPageController::Class,'SendMail']);


Route::get('/admin', function () {
    return redirect('admin/home');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::post('/logout',[App\Http\Controllers\DashboardController::class, 'logout']);