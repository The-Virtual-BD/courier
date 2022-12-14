<?php

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



Route::group(['middleware' => ['auth', 'verified']], function () {
    // Dashboard route
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    // Profile route
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    // Flights
    Route::resource('flights',FlightController::class);
});
require __DIR__ . '/auth.php';
