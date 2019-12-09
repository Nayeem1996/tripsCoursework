<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment_string' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'trip_id' => App\Trip::inRandomOrder()->first()->id,
        'user_id' => App\User::inRandomOrder()->first()->id,
    ];
});
