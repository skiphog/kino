<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Article::class, function (Faker\Generator $faker) {
    static $date;

    return [
        'title'       => $faker->words(3, true),
        'description' => $faker->words(5, true),
        'text'        => $faker->paragraphs(20, true),
        'created_at'  => $date ?: $date = \Carbon\Carbon::now()->format('Y-m-d'),
        'updated_at'  => $date
    ];
});
