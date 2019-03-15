<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'tags' => $faker->colorName,
        'answerCount' => $faker->numberBetween(0, 100),
        'viewCount' => $faker->numberBetween(0, 100),
        'isAnswered' => $faker->boolean
    ];
});
