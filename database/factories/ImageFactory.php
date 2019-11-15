<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween(1,10),
        'url' => $faker->imageUrl()
    ];
});
