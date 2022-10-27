<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'manufacturer'=>$faker->company,
        'model'=>$faker->companySuffix,
        'color'=>$faker->colorName,
        'sign'=>$faker->regexify("[A-Z][A-Z][ ][A-Z][A-Z][ ][0-9][0-9][0-9]"),
    ];
});
