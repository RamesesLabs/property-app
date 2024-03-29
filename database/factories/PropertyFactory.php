<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Property::class, function (Faker $faker) {
    return [
        'property_name' => $faker->sentence(2),
        'address' => $faker->streetAddress(),
        'city' => $faker->city(1),
        'state' => $faker->state(),
        'zipcode' => $faker->postcode(),
        'completed' => false,
        'comments' => $faker->paragraph(4)
    ];
});
