<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Training\TrainingController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\UserBlockedMiddleware;
use App\Http\Middleware\UserPublishedMiddleware;
use App\MoonShine\Controllers\MoonshineContact;
use App\MoonShine\Controllers\MoonshineProduct;
use App\MoonShine\Controllers\MoonshineSetting;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'index')
        ->name('home');
});



/**
 * Auth
 */

Route::controller(SignInController::class)->group(function () {

    Route::get('/login', 'page')
        ->middleware(RedirectIfAuthenticated::class)
    ->name('login');

    Route::post('/login', 'handle')
        ->name('login.handle');

});

Route::controller(SignUpController::class)->group(function () {

    Route::get('/sign-up', 'page')
        ->middleware(RedirectIfAuthenticated::class)
        ->name('register');
    Route::post('/sign-up', 'handle')->middleware(ProtectAgainstSpam::class)->name('register.handle');

});

Route::controller(ForgotPasswordController::class)->group(function () {

    Route::get('/forgot-password', 'page')
        ->middleware(RedirectIfAuthenticated::class)
        ->name('forgot');

    Route::post('/forgot-password', 'handle')
        ->middleware(RedirectIfAuthenticated::class)
        ->name('forgot.handel');

});

Route::controller(ResetPasswordController::class)->group(function () {

    Route::get('/reset-password/{token}', 'page')
        ->middleware(RedirectIfAuthenticated::class)
        ->name('password.reset');

    Route::post('/reset-password', 'handle')
        ->middleware(RedirectIfAuthenticated::class)
        ->name('password.handle');

});

Route::controller(LogoutController::class)->group(function () {

    Route::post('/logout', 'page')->name('logout');

});
/**
 *  Auth
 */


/**
 *  DashboardController - общее
 */
Route::controller(DashboardController::class)->group(function () {

    Route::get('/cabinet', 'page')
        ->middleware(UserPublishedMiddleware::class)
        ->name('cabinet');


    /** свой профиль подробно, без редактирования */

    Route::get('/cabinet/profile', 'profile')
        ->middleware(UserPublishedMiddleware::class)
        ->name('cabinet.profile');

    Route::get('/cabinet/profile/photos', 'profile_photos')
        ->middleware(UserPublishedMiddleware::class)
        ->name('cabinet.profile_photos');

    Route::get('/cabinet/profile/videos', 'profile_videos')
        ->middleware(UserPublishedMiddleware::class)
        ->name('cabinet.profile_videos');

    Route::get('/cabinet/profile/videos/{user_id}/video/{id}', 'profile_video')
        ->middleware(UserPublishedMiddleware::class)
        ->name('cabinet.profile_video');

    Route::get('/cabinet/profile/articles', 'profile_articles')
        ->middleware(UserPublishedMiddleware::class)
        ->name('cabinet.profile_articles');

    Route::get('/cabinet/profile/articles/{user_id}/article/{id}', 'profile_article')
        ->middleware(UserPublishedMiddleware::class)
        ->name('cabinet.profile_article');

    /** свой профиль подробно, без редактирования */


    Route::get('/cabinet-blocked', 'blocked')
        ->middleware(UserBlockedMiddleware::class)
        ->name('blocked');


    Route::post('/cabinet/setting.handel', 'settingHandel')
        ->middleware(UserPublishedMiddleware::class)
        ->name('setting.handel');

    Route::post('/cabinet/setting-password.handel', 'settingPasswordHandel')
        ->middleware(UserPublishedMiddleware::class)
        ->name('setting.password.handel');

});


Route::controller(AjaxController::class)->group(function () {

    /** загрузка аватара*/
    Route::post('/cabinet/upload-avatar', 'uploadAvatar')->name('uploadAvatar');


});


/**
 * контакты
 */
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
