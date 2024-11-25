<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\SystemSetting;

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
        // Bind categories to the header view only
        view()->composer('frontend.layout.header', function ($view) {

            $systemSetting = SystemSetting::first();

            $view->with('systemSetting' , $systemSetting);

        });

        // Bind categories to the footer view only
        view()->composer('frontend.layout.footer', function ($view) {

            $systemSetting = SystemSetting::first();

            $view->with('systemSetting' , $systemSetting);

        });
    }
}
