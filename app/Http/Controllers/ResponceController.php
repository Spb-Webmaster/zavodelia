<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponceController extends Controller
{
    public function responces() {

        //$items = ProductViewModel::make()->products();
        $items = [];



        return view('page.responce.items', [
            'items' => $items,
        ]);
    }
}
