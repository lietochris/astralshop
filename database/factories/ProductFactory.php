<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'price' => $faker->randomFloat(2,500,3000),
        'stock' => $faker->numberBetween(1,100),
        'discount' => $faker->randomFloat(2, 0, 0.9),
        'description' => $faker->text
    ];
});
