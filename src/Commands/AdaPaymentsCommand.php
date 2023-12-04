<?php

namespace Lidonation\AdaPayments\Commands;

use Illuminate\Console\Command;

class AdaPaymentsCommand extends Command
{
    public $signature = 'laravel-adapayments';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
