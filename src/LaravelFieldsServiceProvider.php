<?php
namespace Tuyenlaptrinh\LaravelFields;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LaravelFieldsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::componentNamespace('Tuyenlaptrinh\\LaravelFields\\View\\Components', 'fields');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-fields');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-fields.php', 'fields');
    }
}
