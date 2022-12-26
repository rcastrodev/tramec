<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\VariableProduct;
use Faker\Generator as Faker;

$factory->define(VariableProduct::class, function (Faker $faker) {
    $product = Product::inRandomOrder()->first();
    return [
        'product_id' => $product->id, 
        'code'       => "BL {$faker->numberBetween(100,1500)}",
        'rules'      => "LH {$faker->numberBetween(100,1500)}",
        'step'       => $faker->randomFloat(2, 10, 99),
        'diameter'   => $faker->randomFloat(2, 10, 99),
        'thickness'  => $faker->randomFloat(2, 10, 99),
        'long'       => $faker->randomFloat(2, 10, 99),
        'load'       => $faker->randomFloat(2, 10, 99),
        'weight'       => $faker->randomFloat(2, 10, 99),
    ];
});

