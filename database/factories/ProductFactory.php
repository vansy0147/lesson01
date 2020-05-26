<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use App\Product_brands;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $product_brands =Product_brands::all()->pluck('id')->toArray();
    return [
        'name'=>$faker->name,
        'desc'=>$faker->text,
        'price'=>$faker->randomDigit,
        'product_brand_id'=>$faker->randomElement($product_brands)
    ];
});
