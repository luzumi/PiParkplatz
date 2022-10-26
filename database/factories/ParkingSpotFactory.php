<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ParkingSpot;
use Faker\Generator as Faker;

$factory->define(ParkingSpot::class, function (Faker $faker) {
    $enum = ['north', 'east', 'south', 'west'];
    return array(
        'number' => random_int(1,20),
        'status' => (bool)random_int(0, 1),
        'section' => $enum[random_int(0,3)],
    );
});
