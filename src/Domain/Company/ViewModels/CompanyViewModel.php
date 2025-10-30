<?php
namespace Domain\Company\ViewModels;


use App\Models\Company;
use App\Models\Training;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class CompanyViewModel
{
    use Makeable;

    public function companies():collection {
      return  Company::query()->where('published', 1)
          ->orderBy('sorting', 'desc')
          ->get();
    }

    public function company($slug):model|null

    {
      $company =   Company::query()
          ->where('slug', $slug)
          ->where('published', 1)
          ->first();

      return $company;
    }
    public function photos():array|null
    {


      return [];
    }

}
