<?php

use Faker\Generator as Faker;

$factory->define(App\Doc::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'author' => $faker->name,
        'description' => $faker->paragraph,
        'thumbnail' => 'https://fakeimg.pl/250x400',
        'filename' => 'https://fakeimg.pl/250x400',
    ];
});
