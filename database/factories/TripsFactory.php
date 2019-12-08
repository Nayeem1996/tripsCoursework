<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Trip;
use Faker\Generator as Faker;

$factory->define(Trip::class, function (Faker $faker) {
    return [
        'trip_title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'city' => $faker->city,
        'trip_detail' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'trip_start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'trip_ended' => $faker->boolean($chanceOfGettingTrue = 50),
        'trip_price' => $faker->numberBetween(0, 5000),
        'trip_coordinator_id' => App\TripCoordinator::inRandomOrder()->first()->id,
    ];
});
