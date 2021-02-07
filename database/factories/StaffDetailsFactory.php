<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StaffDetails;
use App\Model;
use Faker\Generator as Faker;



$factory->define(StaffDetails::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'telephone' => $faker->phoneNumber
    ];
});
