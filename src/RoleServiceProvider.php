<?php

namespace Mod\Role;

use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/lang', 'role');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'role');
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        $this->publishes([
            __DIR__.'/public/js' => public_path('js'),
        ], 'js');
        $this->publishes([
            __DIR__.'/public/css' => public_path('css'),
        ], 'css');
        $this->publishes([
            __DIR__.'/public/assets' => public_path('assets'),
        ], 'assets');
        $this->publishes([
            __DIR__.'/config/permissionGroup.php' => config_path('permissionGroup.php'),
        ], 'pGroup');
        $this->publishes([
            __DIR__.'/seeders/PermissionsTableSeeder.php' => database_path('seeders/PermissionsTableSeeder.php'),
        ], 'seeder');
    }
}
