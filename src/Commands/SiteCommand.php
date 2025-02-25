<?php

namespace Thora\Site\Commands;

use Illuminate\Console\Command;

class SiteCommand extends Command
{
    public $signature = 'site';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
