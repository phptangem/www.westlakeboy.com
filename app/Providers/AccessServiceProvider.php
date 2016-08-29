<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Access\Access;
class AccessServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    /**
     * Register service provider bindings
     *
     */

    public function registerBindings()
    {
        $this->app->bind(
            \App\Repositories\Frontend\Access\User\UserRepositoryContract::class,
            \App\Repositories\Frontend\Access\User\EloquentUserRepository::class
        );
    }

    /**
     * Register the application bindings
     *
     */
    public function registerAccess()
    {
        $this->app->bind('access', function($app){
            return new Access($app);
        });
    }
}
