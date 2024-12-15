<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Layout\MainLayout;
use App\View\Components\UI\VebinarCard;
use App\View\Components\UI\Input;
use App\View\Components\UI\Textarea;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
     
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('layout', MainLayout::class);
        Blade::component('vebinar-card', VebinarCard::class);
        Blade::component('input', Input::class);
        Blade::component('textarea', Textarea::class);
    }
}
