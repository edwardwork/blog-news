<?php

use Faker\Generator as Faker;

$factory->define(\App\News::class, function (Faker $faker) {
    return [
        'category_id' => $faker->randomElement([1, 2, 3, 4, 5]),
        'title' => $faker->text(20),
        'body' => $faker->paragraph,
        'is_active' => $faker->randomElement([true, false]),
    ];
});
