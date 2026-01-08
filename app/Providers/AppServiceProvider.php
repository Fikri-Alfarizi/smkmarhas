<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        // Share programs data with the navbar and footer partials
        // Share programs data with the navbar and footer partials
        // \Illuminate\Support\Facades\View::composer(['partials.navbar', 'partials.footer'], function ($view) {
        //    $view->with('navbarPrograms', \App\Models\Program::select('name', 'slug')->get());
        // });
    }
}
