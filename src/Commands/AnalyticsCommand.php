<?php

namespace Vormkracht10\Analytics\Commands;

use Illuminate\Console\Command;

class AnalyticsCommand extends Command
{
    public $signature = 'laravel-google-analytics';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}