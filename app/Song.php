<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Song
 *
 * @property int $id
 * @property int $album_id
 * @property string $name
 * @property-read \App\Album $album
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Song whereAlbumId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Song whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Song whereName($value)
 * @mixin \Eloquent
 */
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
