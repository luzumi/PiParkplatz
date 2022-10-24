<?php

namespace App\Http\Controllers;

use App\Car;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use \Carbon\Carbon;

class CarController extends Controller
{
    protected function car_list(){
        $cars = Car::all();
        return view('car_list', compact('cars'));
    }

    protected function create_car(){
        $car = new Car();
        $car->typ = 'Mazda 6';
        $car->kennzeichen = 'HB ZN 78';
        $car->status = true;
        $car->save();
        return view('create_car', compact('car'));
    }
}
