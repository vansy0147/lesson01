<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product_brands;
use Faker\Generator as Faker;

$factory->define(Product_brands::class, function (Faker $faker) {
    return [
        'name' =>$faker->name
    ];
});
