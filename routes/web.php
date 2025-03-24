<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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
 * Из админки moonshine
 */

Route::controller(MoonshineSetting::class)->group(function () {
    Route::post('/moonshine/setting', 'setting');

});
/*Route::controller(MoonshineIndex::class)->group(function () {
    Route::post('/moonshine/index', 'index');

});*/


/**
 *
 *
 *
 */
