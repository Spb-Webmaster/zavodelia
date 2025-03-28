<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'desc',
        'image2',
        'desc2',
        'gallery',
        'file',
        'published',
        'params',
        'sorting',
        'metatitle',
        'description',
        'keywords',
    ];


    protected $casts = [
        'params' => 'collection',
    ];


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
