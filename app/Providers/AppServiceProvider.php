<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade; 

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
        Blade::component('components.layout', 'layout');
        Blade::component('components.forms', 'forms');
        Blade::component('components.forms.input', 'forms.input');
        Blade::component('components.forms.check', 'forms.check');
        Blade::component('components.forms.submit', 'forms.submit');
        Blade::component('components.forms.error', 'forms.error');
    }
}
