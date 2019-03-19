<?php

use Faker\Generator as Faker;

$factory->define(App\Module::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'professor' => $faker->name,
        'description' => $faker->paragraph,
        'thumbnail' => 'public/thumbnails/module_thumb.default.jpeg',
        'presentation' => null,
        'audio' => null,
        'video' => null,
    ];
});
