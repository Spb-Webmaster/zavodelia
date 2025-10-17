<?php

namespace App\Http\Controllers\Prosthesis;

use App\Http\Controllers\Controller;
use Domain\Product\ViewModels\ProductViewModel;
use Domain\Prosthesis\ViewModels\ProsthesisViewModel;

class ProsthesisController extends Controller
{

    /**
     * (категория) протезы
     */
    public function prosthetics() {

        $items = ProsthesisViewModel::make()->prosthetics();


        return view('page.prosthesis.items', [
            'items' => $items,
        ]);

    }

    /**
     * @param $slug
     *  Страница раздела протезы
     */
    public function prosthesis($slug) {

        $items = ProsthesisViewModel::make()->prosthetics();
        $item = ProsthesisViewModel::make()->prosthesis($slug);


        if(!$item) {
            abort(404);
        }
        return view('page.prosthesis.item', [
            'items' => $items,
            'item' => $item,
        ]);

    }
}
