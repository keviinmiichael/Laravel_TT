<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
		'code' => $faker->randomElement($array = array(1,2,3,4,5,6)),
		"category_id" => $faker->randomElement($array = array(11,12,13,14,15)),
		'created_at' => $faker->dateTimeThisMonth($max = 'now'),
		'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
    ];
});
