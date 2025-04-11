<?php

namespace Domain\Responce\ViewModels;


use App\Models\Responce;
use App\Models\Training;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class ResponceViewModel
{
    use Makeable;


    public function responces($published = null)
    {

        $responces = Responce::query();
        if ($published) {
            $result = $responces->where('published', $published)->paginate(config('site.constants.paginate'));

        } else {

            $result = $responces->get();

        }

        if ($result) {
            return $result;
        }
        return [];


    }

    public function responce_save($request, $user = null)
    {
        $responce = Responce::query();
        settype($result, "array");
        if ($user) {
           $result =  $responce->create([
                'title' => 'Отзыв от ' . $user->name,
                'user_id' => $user->id,
                'desc' => textarea($request->feedback),
                'published' => 0,

            ]);

        } else {

            $user = auth()->user();
            $result =  $responce->create([
                'title' => 'Отзыв от ' . $user->name,
                'user_id' => $user->id,
                'desc' => textarea($request->feedback),
                'published' => 0,

            ]);

        }

        return $result;

    }


}
