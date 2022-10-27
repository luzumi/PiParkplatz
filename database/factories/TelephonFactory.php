<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Telephone;
use Faker\Generator as Faker;

$factory->define(Telephone::class, function (Faker $faker) {

    return array(
        'user_id' => $faker->unique(20, 20)->numberBetween(1, 20),
        'number' => $faker->phoneNumber(),
    );
});
