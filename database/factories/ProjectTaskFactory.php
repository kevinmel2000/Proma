<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\ProjectTask::class, function (Faker $faker) {

    $complete = rand(0, 1);
    $completed_date = null;
    if ($complete) {
        $completed_date = date('Y-m-d H:i:s');
    }

    return [
        'project_id' => rand(1, 9),
        'description' => $faker->paragraph(rand(5, 10)),
        'due_date' => $faker->dateTime('+' . rand(2, 12) . ' months'),
        'complete' => $complete,
        'completed_date' => $completed_date
    ];
});