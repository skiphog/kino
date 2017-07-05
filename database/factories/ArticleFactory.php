<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Carbon\Carbon;

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    static $date;

    return [
        'title'       => $faker->words(3, true),
        'description' => $faker->words(5, true),
        'text'        => $faker->paragraphs(20, true),
        'created_at'  => ($date instanceof Carbon) ?
            $date = $date->modify('+15 days') : $date = Carbon::now()->modify('-15 months'),
        'updated_at'  => $date
    ];
});
