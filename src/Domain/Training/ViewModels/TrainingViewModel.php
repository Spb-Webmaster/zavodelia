<?php
namespace Domain\Training\ViewModels;


use App\Models\Training;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class TrainingViewModel
{
    use Makeable;

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
    }

}
