<?php

namespace DANYALDK\ActivityLog\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class ActivityLogServiceProvider
 *
 * @author Danyal <mig@danyal.dk>
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
