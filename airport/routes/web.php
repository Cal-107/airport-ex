<?php

use App\Http\Controllers\PassengerController;
use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// ---> Passenger section
Route::resource('passengers', PassengerController::class);

//--> Flight section
Route::resource('flights', FlightController::class);
