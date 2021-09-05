<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\StudentTeacherModel as MainModel;
use App\Models\StudentModel;
use App\Models\TeacherModel;
use Faker\Generator as Faker;

$factory->define(MainModel::class, function (Faker $faker) {
    $students = StudentModel::pluck('id')->toArray();
    $teachers = TeacherModel::pluck('id')->toArray();

    return [
        'student_id' => $faker->randomElement($students),
        'teacher_id' => $faker->randomElement($teachers),
        'column_4'   => $faker->randomFloat(2, 0, 20),
    ];
});
