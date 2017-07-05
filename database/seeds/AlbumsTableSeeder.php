<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            [
                'title'      => '45',
                'img'        => '',
                'created_at' => '1982-01-01',
            ],
            [
                'title'      => '46',
                'img'        => '',
                'created_at' => '1983-01-01',
            ],
            [
                'title'      => 'Начальник Камчатки',
                'img'        => '',
                'created_at' => '1984-01-01',
            ],
            [
                'title'      => 'Это не любовь',
                'img'        => '',
                'created_at' => '1985-01-01',
            ],
            [
                'title'      => 'Ночь',
                'img'        => '',
                'created_at' => '1986-01-01',
            ],
            [
                'title'      => 'Группа крови',
                'img'        => '',
                'created_at' => '1988-01-01',
            ],
            [
                'title'      => 'Звезда по имени Солнце',
                'img'        => '',
                'created_at' => '1989-01-01',
            ],
            [
                'title'      => 'Последний герой',
                'img'        => '',
                'created_at' => '1989-01-01',
            ],
            [
                'title'      => 'Чёрный альбом',
                'img'        => '',
                'created_at' => '1990-01-01',
            ],
        ]);
    }
}
