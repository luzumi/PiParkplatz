<?php

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/info', 'InfoController@info')->name('info');

Route::get('/create_car', 'CarController@create_car')->name('create_car');

Route::post('/create_car', 'CarController@save')->name('save_created_car');

Route::get('/show_car', 'CarController@show_a_car')->name('show_a_car');

Route::post('/show_this_car', 'CarController@show_this_car')->name('show_this_car');

Route::get('/car_list', 'CarController@car_list')->name('car_list');

Route::get('/parking_list', 'ParkingSpotController@parking_spot_list')->name('parking_list');

Route::get('/create_parking_spot', 'ParkingSpotController@create_parking_spot')->name('create_parking_spot');

