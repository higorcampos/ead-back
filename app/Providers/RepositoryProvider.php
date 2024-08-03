<?php

namespace App\Providers;

use App\Repositories\User\UserRepositoryContract;
use App\Repositories\User\UserRepositoryEloquent;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserRepositoryContract::class, UserRepositoryEloquent::class);
    }


    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [
            UserRepositoryContract::class,
        ];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}