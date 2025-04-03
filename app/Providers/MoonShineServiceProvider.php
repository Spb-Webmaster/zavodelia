<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\PageResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Pages\SettingPage;
use App\MoonShine\Pages\ContactPage;
use App\MoonShine\Resources\CompanyResource;
use App\MoonShine\Resources\TrainingResource;
use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Pages\ProductPage;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        // $config->authEnable();

        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                PageResource::class,
                CompanyResource::class,
                TrainingResource::class,
                ProductResource::class,
            ])
            ->pages([
                ...$config->getPages(),
                SettingPage::class,
                ContactPage::class,
                ProductPage::class,
            ])
        ;
    }
}
