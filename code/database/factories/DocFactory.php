<?php

use Faker\Generator as Faker;

$factory->define(App\Doc::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'author' => $faker->name,
        'description' => $faker->paragraph,
        'thumbnail' => 'public/thumbnails/doc_thumb.default.jpg',
        'filename' => 'public/files/book.example.jpg',
    ];
});
