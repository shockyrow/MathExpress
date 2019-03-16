<?php

use Faker\Generator as Faker;

$factory->define(App\Doc::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'author' => $faker->name,
        'description' => $faker->paragraph,
        'thumbnail' => 'public/thumbnails/default_doc_thumb.jpg',
        'filename' => 'public/thumbnails/default_doc_thumb.jpg',
    ];
});
