<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Domain\Company\ViewModels\CompanyViewModel;

class CompanyController extends Controller
{

    public function companies() {

        $items = CompanyViewModel::make()->companies();

        return view('page.company.items', [
            'items' => $items,
        ]);

    }

    public function company($slug) {

        $items = CompanyViewModel::make()->companies();

        $item = CompanyViewModel::make()->company($slug);

        return view('page.company.item', [
            'items' => $items,
            'item' => $item,
        ]);

    }

}
