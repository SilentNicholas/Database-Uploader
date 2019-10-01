<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->randomNumber(),
        'DTD' => $faker->randomNumber(),
        'count_places' => $faker->randomDigit(),
        'total_weight' => rand(10, 100),
        'total_count' => $faker->randomDigit(),
        'currency_code' => strtoupper($faker->lexify('???')),
        'MEB_description' => $faker->word(),
        'ETD_code' => strtoupper($faker->lexify('??')),
        'ETD_number' => $faker->randomNumber(),
        'ETD_date' => $faker->dateTime(),
        'sender' => strtoupper($faker->lexify('??')),
        'sender_name' => $faker->firstName() . ' ' . $faker->lastName(),
        'sender_address' => $faker->address(),
        'recipient' => strtoupper($faker->lexify('??')),
        'recipient_name' => $faker->firstName() . ' ' . $faker->lastName(),
        'recipient_address' => $faker->address(),
        'telephone' => $faker->phoneNumber(),
        'arrival_date' => $faker->dateTime(),
        'MEB_type' => rand(0, 1),
        'count' => $faker->randomDigit()
    ];
});
