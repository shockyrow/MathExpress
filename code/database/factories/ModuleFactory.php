<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Module::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'user_id' => $faker->numberBetween(0, User::count()-1),
        'thumbnail' => 'public/thumbnails/module_thumb.default.jpeg',
        'presentation' => null,
        'audio' => null,
        'video' => null,
    ];
});
