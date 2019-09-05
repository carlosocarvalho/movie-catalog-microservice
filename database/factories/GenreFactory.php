<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Genre;
use Faker\Generator as Faker;

$factory->define(Genre::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
    ];
});
