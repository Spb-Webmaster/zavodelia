<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'image',
        'video',
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
        'video' => 'collection',
    ];

    public function getVideoVisibleAttribute()
    {
        if ($this->video) {
            foreach ($this->video as $g) {

                if ($g['video_video_video']) { // если хоть одно фото, то нужно!
                    return true;
                }
                if ($g['video_video_youtube']) { // если хоть одно фото, то нужно!
                    return true;
                }
                if ($g['video_video_rutube']) { // если хоть одно фото, то нужно!
                    return true;
                }

            }
        }
        return false;

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
