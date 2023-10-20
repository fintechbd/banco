<?php

namespace Fintech\Banco\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    public $signature = 'banco:install';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
