<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transactions;
use Faker\Generator as Faker;

$factory->define(Transactions::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'qrcode_owner_id' => $faker->randomDigitNotNull,
        'qrcode_id' => $faker->randomDigitNotNull,
        'payment_method' => $faker->word,
        'amount' => $faker->randomDigitNotNull,
        'message' => $faker->text,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
