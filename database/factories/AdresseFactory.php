<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Adresse;
use Faker\Generator as Faker;

$factory->define(Adresse::class, function (Faker $faker) {
    return array(
        'city' => $faker->city,
        'street' => $faker->streetName,
        'number' => $faker->random_int(1, 423),
    );
});
