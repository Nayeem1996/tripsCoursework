<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Trips;
use Faker\Generator as Faker;

$factory->define(Trips::class, function (Faker $faker) {
    return [
        'trip_title' => $faker->lexify("Trip thrrough ??????"),
        'city' => $faker->city(),
        'tripStartDate' => $faker->date(),
        'tripEnded' => $faker->boolean($chanceOfGettingTrue = 50),
        'tripPrice' => $faker->numberBetween(0, 1000),
        
        
        //To use a defined list of types:
           //'type' =>$faker-> randomElement(['Type1', 'type2', 'type3']);
    ];
});
