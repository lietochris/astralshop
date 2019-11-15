<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,10),
        'zipcode' => $faker->postcode,
        'state' => $faker->word,
        'town' => $faker->word,
        'suburb' => $faker->word,
        'street' => $faker->streetAddress,
        'phone' => $faker->phoneNumber,
        'additional_directions' => $faker->text
    ];
});
