<?php

namespace App\Http\Controllers;

use App\ParkingSpot;
use Illuminate\Notifications\Notifiable;

class ParkingSpotController extends Controller
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'status', 'section',
    ];


    protected function parking_spot_list()
    {
        $parking_spots = ParkingSpot::all();
        return view('parking_spot_list', compact('parking_spots'));
    }

    protected function create_parking_spot()
    {
        $enum = ['north', 'east', 'south', 'west'];
        $parking_spot = new ParkingSpot();
        $parking_spot->number = (ParkingSpot::count() + 1);
        $parking_spot->section = ($enum[rand(0,3)]);
        $parking_spot->status = (rand(0,10)%2 === 0);
        $parking_spot->save();
        return view('create_parking_spot', compact('parking_spot'));
    }
}
