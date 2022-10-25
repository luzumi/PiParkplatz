<?php

namespace App\Http\Controllers;

use App\ParkingSpot;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    protected function info()
    {
        $info = simplexml_load_file("http://www.lipsum.com/feed/xml?amount=5&what=paras&start=11110")->lipsum;
        return view('info', compact('info'));
    }
}
