<?php
namespace Domain\Product\ViewModels;


use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class ProductViewModel
{
    use Makeable;

    public function products():collection {
      return  Product::query()->where('published', 1)
          ->orderBy('sorting', 'desc')
          ->get();
    }

    public function product($slug):model|null

    {
      $product =   Product::query()
          ->where('slug', $slug)
          ->where('published', 1)
          ->first();

      return $product;
    }

}
