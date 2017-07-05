<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /**
     * Поля, которые можно заполнять в базе данных
     * @var array
     */
    protected $fillable = [
        'title',
        'img',
        'created_at'
    ];

    /**
     * Поля, которые будут возвращаться как объект Carbon
     * @var array
     */
    protected $dates = ['created_at'];

    /**
     * Таблица не имеет полей timestamps created_at и updated_at
     * @var bool
     */
    public $timestamps = false;

    /**
     * Альбом имеет много песен
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
