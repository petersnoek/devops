<?php

use Faker\Generator as Faker;
use App\Label;

$factory->define(App\Label::class, function (Faker $faker) {
    return [
        'label' => $faker->name(),
        'created_at' => now(),
    ];
});
