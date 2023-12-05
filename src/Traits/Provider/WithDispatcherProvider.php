<?php

namespace Raid\Core\Dispatcher\Traits\Provider;

trait WithDispatcherProvider
{
    /**
     * Register the dispatcher migration.
     */
    private function registerMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
