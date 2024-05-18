<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Route;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Route::prefix('admin')
        //     ->group(base_path('routes/admin.php'));
        view()->composer('*',function($view) 
        {
            $view->with([
                'category'=>Category::orderBy('name','ASC')-> get(),
            ]);
        });
    }
}
