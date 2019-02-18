<?php

namespace \ActivityLog\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class ActivityLogServiceProvider
 *
 * @package DANYALDK\ActivityLog\Providers
 */
class ActivityLogServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \DANYALDK\ActivityLog\Commands\CopyMigration::class
            ]);
        }
    }

    public function register(): void
    {

    }
}