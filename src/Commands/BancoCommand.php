<?php

namespace Fintech\Banco\Commands;

use Illuminate\Console\Command;

class BancoCommand extends Command
{
    public $signature = 'banco';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
