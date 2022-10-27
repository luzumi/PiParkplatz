<?php

/** @var Factory $factory */

use App\Addresse;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Addresse::class, function (Faker $faker) {
    return array(
        'user_id' => $faker->unique(20, 20)->numberBetween(1, 20),
        'city' => $faker->city,
        'street' => $faker->streetName,
        'number' => $faker->randomNumber(1, 423),
    );
});
