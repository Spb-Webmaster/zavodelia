<?php

namespace App\Providers;


use App\View\Composers\MenuComposer;
use App\View\Composers\ProductComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        View::composer(['include.templates.menu._partial.menu', 'include.templates.menu.footer_menu'], MenuComposer::class);
        View::composer(['layouts.layout'], ProductComposer::class);




    }
}
