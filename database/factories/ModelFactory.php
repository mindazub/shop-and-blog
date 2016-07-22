<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'brand' => $faker->name,
        'model_number' => $faker->word . $faker->randomNumber($nbDigits = NULL),
        'description' => $faker->paragraph(3),
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'special_price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'quantity' => $faker->randomNumber($nbDigits = NULL),
        'availability' => 1
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'user_id' => factory(App\User::class)->create()->id,
        'title' => $faker->sentence,
        'excerpt' => $faker->paragraph(3),
        'body' => $faker->paragraph(8)
    ];

});

