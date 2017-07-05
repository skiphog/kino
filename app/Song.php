<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    /**
     * Поля, которые можно заполнять в базе данных
     * @var array
     */
    protected $fillable = [
        'album_id',
        'name',
    ];

    /**
     * Таблица не имеет полей timestamps created_at и updated_at
     * @var bool
     */
    public $timestamps = false;

    /**
     * Песня относится только к одному альбому
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
