<?php

namespace App\Http\Controllers;

use App\ParkingSpot;

class ParkingSpotController extends Controller
{
    protected function parking_spot_list()
    {
        $parking_spots = ParkingSpot::all();
        return view('parking_spot_list', compact('parking_spots'));
    }

    protected function create_parking_spot()
    {
        $parking_spot = new ParkingSpot();
        $parking_spot_length = ParkingSpot::count();
        $parking_spot->section = ($parking_spot_length % 2 == 0) ? 'south' : 'north';
        $parking_spot->status = true;
        $parking_spot->save();
        return view('create_parking_spot', compact('parking_spot'));
    }
}
