<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Events\ResetPasswordEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',


        'username',
        'avatar',
        'city',
        'phone',
        'birthdate',
        'telegram',
        'whatsapp',
        'instagram',
        'social',
        'website',
        'published',
        'params',
        'manager'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'params' => 'collection',
        ];
    }


    /**
     * @return mixed|string|null
     * Можно всегда выводить $user->user
     */
    public function getUserAttribute()
    {

        if (isset($this->username)) {
            return $this->username;
        }
        return $this->name;


    }

    /**
     * Замена стандартного сброса пароля
     */

    public function sendPasswordResetNotification($token)
    {

        settype($data, "array");
        $data['email'] = $this->getEmailForPasswordReset();
        $data['token'] = $token;

        /**
         * Событие отправка сообщения о сбросе пароля
         */

        ResetPasswordEvent::dispatch($data);
    }

    protected static function boot()
    {
        parent::boot();

        # Проверка данных  перед сохранением
        static::saving(function ($Moonshine) {

            $Moonshine->phone = phone($Moonshine->phone);

        });


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
