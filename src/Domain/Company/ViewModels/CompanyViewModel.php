<?php
namespace Domain\Company\ViewModels;


use App\Models\Company;
use App\Models\Training;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
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
    public function photos($path):array|null
    {
        // Укажите путь к вашей директории
        $directory = storage_path('app/public/'. $path);



        // Получите все файлы в директории
        $files = File::allFiles($directory);



        if($files) {
            // Создайте массив для хранения имен файлов
            $fileNames = [];

            // Перебор коллекции файлов и получение имен
            foreach ($files as $file) {

                $fileNames[] = $path . $file->getFilename();
            }

            return $fileNames;
        }


      return [];
    }

}
