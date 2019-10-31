<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(8),
        'body' => $faker->paragraph(),
        'user_id' => rand(1, 5),
        'category_id' => rand(1, 50)
    ];
});
