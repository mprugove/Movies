<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(3),
        'year'=>$faker->numberBetween(1950, 2019),
        'rating'=>$faker->numberBetween(0, 10),
        'country'=>$faker->country
    ];
});
