<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ParkingSpot;
use Faker\Generator as Faker;
$count = 1;
$factory->define(ParkingSpot::class, function (Faker $faker) use ($count){
    $enum = ['north', 'east', 'south', 'west'];
    return array(
        'number' => $faker->unique(20, 20)->numberBetween(1, 20),
        'status' => (bool)random_int(0, 1),
        'section' => $enum[random_int(0,3)],
    );
});
