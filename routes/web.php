<?php

use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Training\TrainingController;
use App\MoonShine\Controllers\MoonshineContact;
use App\MoonShine\Controllers\MoonshineProduct;
use App\MoonShine\Controllers\MoonshineSetting;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'index')
        ->name('home');
});

Route::controller(ContactController::class)->group(function () {

    Route::get('/contacts', 'contacts')
        ->name('contacts');
});

/**
 * о компании
 */

Route::controller(CompanyController::class)->group(function () {

    Route::get('/company', 'companies')
        ->name('companies');
    Route::get('/company/{slug}', 'company')
        ->name('company');
});

/**
 * о компании
 */

/**
 * обучение
 */

Route::controller(TrainingController::class)->group(function () {

    Route::get('/training', 'trainings')
        ->name('trainings');
    Route::get('/training/{slug}', 'training')
        ->name('training');
});

/**
 * обучение
 */
/**
 * продукция
 */

Route::controller(ProductController::class)->group(function () {

    Route::get('/product', 'products')
        ->name('products');
    Route::get('/product/{slug}', 'product')
        ->name('product');
});

/**
 * продукция
 */


/**
 * Из админки moonshine
 */

Route::controller(MoonshineSetting::class)->group(function () {
    Route::post('/moonshine/setting', 'setting');

});
Route::controller(MoonshineContact::class)->group(function () {
    Route::post('/moonshine/contacts', 'contacts');

});
Route::controller(MoonshineProduct::class)->group(function () {
    Route::post('/moonshine/product', 'product');

});
/*Route::controller(MoonshineIndex::class)->group(function () {
    Route::post('/moonshine/index', 'index');

});*/


/**
 *
 *
 *
 */
