<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subscribers;
use Faker\Generator as Faker;

$factory->define(Subscribers::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'state' => 'active',
    ];
});
