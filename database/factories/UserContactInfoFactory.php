<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserContactInfo;
use Faker\Generator as Faker;

$factory->define(UserContactInfo::class, function (Faker $faker) {
    return [
        'phone_number' => $faker->numberBetween(0, 99999999999),
        'emergency_contact_number' => $faker->numberBetween(0, 99999999999),
        'address' => $faker->address,
        'user_id' => App\User::inRandomOrder()->first()->id,
    ];
});