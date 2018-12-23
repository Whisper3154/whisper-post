<?php

namespace App\Modules\Postdebug\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'postdebug');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'postdebug');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'postdebug');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
