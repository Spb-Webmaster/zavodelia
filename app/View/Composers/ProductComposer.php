<?php

namespace App\View\Composers;



use Domain\Company\ViewModels\CompanyViewModel;
use Domain\Product\ViewModels\ProductViewModel;
use Domain\Prosthesis\ViewModels\ProsthesisViewModel;
use Domain\Training\ViewModels\TrainingViewModel;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class ProductComposer
{
    public function compose(View $view): void
    {
        $products = ProductViewModel::make()->products();
        $photos = CompanyViewModel::make()->photos('images/zavod/');
        $prosthetics = ProsthesisViewModel::make()->prosthetics();


        $view->with([
            'products' => $products,
            'photos' => $photos,
            'prosthetics' => $prosthetics,

        ]);

    }

}
