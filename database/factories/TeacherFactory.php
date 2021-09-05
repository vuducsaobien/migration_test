<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TeacherModel as MainModel;
use Faker\Generator as Faker;

$factory->define(MainModel::class, function (Faker $faker) {
    return [
        'name'  => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'price' => $faker->randomFloat(2, 0, 20) * 1000,
    ];
});
