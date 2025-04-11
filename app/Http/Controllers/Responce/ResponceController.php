<?php

namespace App\Http\Controllers\Responce;

use App\Http\Controllers\Controller;
use Domain\Responce\ViewModels\ResponceViewModel;

class ResponceController extends Controller
{
    public function responces() {

        $items = ResponceViewModel::make()->responces(1); /** тольлко опубликованные  */

        return view('page.responce.items', [
            'items' => $items,
        ]);
    }
}
