<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
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
        // $this->configureRateLimiting();
        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
            Route::prefix('admin')
                ->middleware(['admin'])
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));
        });
    }
}
