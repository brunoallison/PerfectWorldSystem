<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(\App\Repositories\AuthRepository::class, \App\Repositories\AuthRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ForbidRepository::class, \App\Repositories\ForbidRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\IplimitRepository::class, \App\Repositories\IplimitRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PointRepository::class, \App\Repositories\PointRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UsecashlogRepository::class, \App\Repositories\UsecashlogRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UsecashnowRepository::class, \App\Repositories\UsecashnowRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\GoldRepository::class, \App\Repositories\GoldRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\StatusRepository::class, \App\Repositories\StatusRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserWebRepository::class, \App\Repositories\UserWebRepositoryEloquent::class);
    }
}
