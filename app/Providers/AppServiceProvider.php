<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SiswaRepository;
use App\Repositories\SiswaRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SiswaRepositoryInterface::class, SiswaRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
