<?php

namespace Raid\Core\Dispatcher\Providers;

use Illuminate\Support\ServiceProvider;
use Raid\Core\Dispatcher\Traits\Provider\WithDispatcherProvider;

class DispatcherServiceProvider extends ServiceProvider
{
    use WithDispatcherProvider;

    /**
     * The commands to be registered.
     */
    protected array $commands = [];

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
    }
}
