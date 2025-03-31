<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Domain\Training\ViewModels\TrainingViewModel;

class TrainingController extends Controller
{
    /**
     * @return / (категория) раздел обучение
     */
    public function trainings() {

        $items = TrainingViewModel::make()->trainings();


        return view('page.training.items', [
            'items' => $items,
        ]);

    }

    /**
     * @param $slug
     * @return / страница раздела обучение
     */
    public function training($slug) {

        $items = TrainingViewModel::make()->trainings();
        $item = TrainingViewModel::make()->training($slug);


        return view('page.training.item', [
            'items' => $items,
            'item' => $item,
        ]);

    }

}
