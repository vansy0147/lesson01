<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Users;
use Faker\Generator as Faker;
use Illuminate\Support\Str;



$factory->define(Users::class, function (Faker $faker) {
    return [
        'username'=>$faker->Username,
        'email'=>$faker->Email,
        'password'=>$faker->Password,
        'gender'=>$faker->Boolean
    ];
});
