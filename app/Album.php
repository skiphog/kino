<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Album
 *
 * @property int $id
 * @property string $title
 * @property string $img
 * @property \Carbon\Carbon $created_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Song[] $songs
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Album whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Album whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Album whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Album whereTitle($value)
 * @mixin \Eloquent
 */
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
