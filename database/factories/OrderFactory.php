<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $tax = $faker->randomFloat(2,100,300);
    return [
        'user_id' => $faker->numberBetween(1,10),
        'payout_id' => $faker->numberBetween(1,10),
        'address_id' => $faker->numberBetween(1,10),
        'status' => $faker->randomElement(["Pendiente", "Pagado"]),
        'tax' => $tax,
        'total' => $tax + $faker->randomFloat(2,800,3000)
    ];
});
