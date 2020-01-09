<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fields;
use Faker\Generator as Faker;

$factory->define(Fields::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'type' => $faker->text(10),
    ];
});
