<?php

namespace App\View\Composers;



use Domain\Company\ViewModels\CompanyViewModel;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class MenuComposer
{
    public function compose(View $view): void
    {

        $companies = CompanyViewModel::make()->companies();

        $view->with([
            'companies' => $companies,

        ]);

    }

}
