<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'tags' => $faker->colorName,
        'answerCount' => $faker->numberBetween(0, 10),
        'viewCount' => $faker->numberBetween(0, 100),
        'answerState' => $faker->numberBetween(0,2),
    ];
});
