<?php

namespace GeoffTech\FilamentTimezone;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        // $this->loadViewsFrom(__DIR__ . '/../resources/views', 'filament-timezone');
    }
}
