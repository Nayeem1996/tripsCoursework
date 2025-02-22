<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TripCoordinator;
use Faker\Generator as Faker;

$factory->define(TripCoordinator::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'employment_start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'remember_token' => Str::random(10),
    ];
});
