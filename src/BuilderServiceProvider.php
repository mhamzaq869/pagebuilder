<?php

namespace Code\Builder;

use Illuminate\Support\ServiceProvider;

class BuilderServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views','Builder');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}
