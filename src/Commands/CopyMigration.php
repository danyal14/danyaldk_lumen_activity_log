<?php

namespace DANYALDK\ActivityLog\Commands;

use Illuminate\Console\Command;

/**
 * Class CopyMigration
 *
 * @author Danyal <mig@danyal.dk>
 * @package DANYALDK\ActivityLog\Commands
 */
class CopyMigration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'danyaldk:copy:migration';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Copy database migration for activity log';

    public function handle()
    {
        exec('cp vendor/danyaldk/lumen-activity-log/src/database/migrations/2019_02_11_104702_activity_log.php database/migrations/',$output, $return);
        if (!$return) {
            $this->info('Migration is copied successfully');
        } else {
            $this->error('Migration is copied faild.');
        }
    }
}
