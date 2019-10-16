<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Project::class, function (Faker $faker) {
    return [
        'project_name' => $faker->sentence(2),
        'property_name' => $faker->sentence(2),
        'address' => $faker->streetAddress(),
        'city' => $faker->city(1),
        'state' => $faker->state(),
        'zipcode' => $faker->postcode(),
        'completed' => false,
        'comments' => $faker->paragraph(4)
    ];
});
