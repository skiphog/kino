<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Article::class, function (Faker\Generator $faker) {
    static $date;
    static $number = 1;

    return [
        'title'       => 'Заголовок #' . $number,
        'description' => 'Описание #' . $number,
        'text'        => 'Текст статьи #' . $number++,
        'created_at'  => $date ?: $date = \Carbon\Carbon::now()->format('Y-m-d'),
        'updated_at'  => $date
    ];
});
