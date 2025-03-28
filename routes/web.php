<?php

use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\MoonShine\Controllers\MoonshineContact;
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



Route::controller(CompanyController::class)->group(function () {

    Route::get('/company', 'companies')
        ->name('companies');
    Route::get('/company/{slug}', 'company')
        ->name('company');
});



/**
 * Из админки moonshine
 */

Route::controller(MoonshineSetting::class)->group(function () {
    Route::post('/moonshine/setting', 'setting');

});
Route::controller(MoonshineContact::class)->group(function () {
    Route::post('/moonshine/contacts', 'contacts');

});
/*Route::controller(MoonshineIndex::class)->group(function () {
    Route::post('/moonshine/index', 'index');

});*/


/**
 *
 *
 *
 */
