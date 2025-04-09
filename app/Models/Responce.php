<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responce extends Model
{
    //responces
    protected $table = 'responces';

    protected $fillable = [
        'title',
        'url',
        'slug',
        'image',
        'desc',
        'published',
        'params',
        'sorting',
        'metatitle',
        'description',
        'keywords',
        'user_id',
    ];


    protected $casts = [
        'params' => 'collection',

    ];

    /** автор публикации отзыва */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    protected static function boot()
    {
        parent::boot();

        # Проверка данных  перед сохранением
        #  static::saving(function ($Moonshine) {   });


        static::created(function () {
            cache_clear();
        });

        static::updated(function () {
            cache_clear();
        });

        static::deleted(function () {
            cache_clear();
        });


    }
}
