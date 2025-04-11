<?php
namespace Domain\User\ViewModels;


use App\Models\Responce;
use App\Models\Training;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class UserViewModel
{
    use Makeable;


/*
    public function trainings():collection {
      return  Training::query()->where('published', 1)
          ->orderBy('sorting', 'desc')
          ->get();
    }

    public function training($slug):model|null

    {
      $company =   Training::query()
          ->where('slug', $slug)
          ->where('published', 1)
          ->first();

      return $company;
    }*/

}
