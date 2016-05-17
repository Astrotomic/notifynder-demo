<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (\Config::get('database.default') === 'sqlite') {
            $path = \Config::get('database.connections.sqlite.database');
            if (!file_exists($path) && is_dir(dirname($path))) {
                touch($path);
            }
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
