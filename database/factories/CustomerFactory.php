<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CustomerModel;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(CustomerModel::class, function (Faker $faker) {
    return [
        // String
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'description'    => $faker->text,
        'remember_token' => Str::random(10),
        'password'       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',   // password

        // Time
        'time_1' => now(),
        'time_2' => $faker->dateTimeThisMonth(),
        'time_3' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
        'time_4' => $faker->dateTimeInInterval($startDate = '-7 days', $interval = '+ 5 days', $timezone = null),

        // Number
        'price' => $faker->randomFloat(2, 0, 20),
    ];
});
