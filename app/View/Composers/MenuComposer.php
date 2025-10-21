<?php

namespace App\View\Composers;



use Domain\Company\ViewModels\CompanyViewModel;
use Domain\Prosthesis\ViewModels\ProsthesisViewModel;
use Domain\Training\ViewModels\TrainingViewModel;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class MenuComposer
{
    public function compose(View $view): void
    {
        $companies = CompanyViewModel::make()->companies();
        $trainings = TrainingViewModel::make()->trainings();
        $prosthetics = ProsthesisViewModel::make()->prosthetics();

        $view->with([
            'companies' => $companies,
            'trainings' => $trainings,
            'prosthetics' => $prosthetics,

        ]);

    }

}
