<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;



$factory->define(Product::class, function (Faker $faker) use ($factory) {
    $category_ids = App\Category::pluck('id');

    return [
        'name' => $faker->name,
        'category_id' => $category_ids->random(),
        'description' => $faker->text,
        'image' => $faker->numberBetween(1, 5) . '.jpg',
        'price' => $faker->randomNumber(2),
        'gears' => $faker->numberBetween(1, 24),
        'frame' => $faker->numberBetween(1, 24),
        'brand' => $faker->lastName,
        'color' => $faker->colorName,
        'year' => $faker->year,

    ];
});
