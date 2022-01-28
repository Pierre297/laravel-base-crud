<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comic;
use Faker\Generator as Faker;

$factory->define(Comic::class, function (Faker $faker) {
    return [
        'title' => $faker->name(),
        'subtitle' => $faker->text(10),
        'release_date' => $faker->date()
    ];
});
