<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article; 
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->word,
        'body'=> $faker->realText,
        'status'=> $faker->numberBetween(0,1),
        'created_at'=> now(),
        'updated_at'=> now(),
    ];
});
