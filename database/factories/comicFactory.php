<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\comic;
use Faker\Generator as Faker;

$factory->define(comic::class, function (Faker $faker) {
    return [
        'title'=> $faker->word(),
        'author' => $faker->word(),
        'release_date'=> $faker->date(),
        'pages' => $faker -> numberBetween(1, 500)
    ];
});
