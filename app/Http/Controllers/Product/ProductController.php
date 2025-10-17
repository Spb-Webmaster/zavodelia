<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Domain\Product\ViewModels\ProductViewModel;

class ProductController extends Controller
{
    /**
     * @return / (категория) продукция (Product)
     */
    public function products() {

        $items = ProductViewModel::make()->products();


        return view('page.product.items', [
            'items' => $items,
        ]);

    }

    /**
     * @param $slug
     * @return / страница раздела продукция (Product)
     */
    public function product($slug) {

        $items = ProductViewModel::make()->products();
        $item = ProductViewModel::make()->product($slug);

        if(!$item) {
            abort(404);
        }

        return view('page.product.item', [
            'items' => $items,
            'item' => $item,
        ]);

    }

}
