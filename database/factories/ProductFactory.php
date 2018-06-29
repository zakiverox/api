<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
      'name' =>$faker->word,
      'detail'=>$faker->paragraph,
      'hjual'=>$faker->numberBetween(100,1000),
      'stok'=>$faker->randomDigit
    ];
});
