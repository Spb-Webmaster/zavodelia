<?php

namespace Domain\Prosthesis\ViewModels;

use App\Models\Product;
use App\Models\Prosthesis;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Support\Traits\Makeable;

class ProsthesisViewModel
{
    use Makeable;

    public function prosthetics():collection {
        return  Prosthesis::query()->where('published', 1)
            ->orderBy('sorting', 'desc')
            ->get();
    }

    public function prosthesis($slug):model|null

    {
        return  Prosthesis::query()
            ->where('slug', $slug)
            ->where('published', 1)
            ->first();

    }
}
