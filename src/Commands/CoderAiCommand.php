<?php

namespace DiegoVasconcelos\CoderAi\Commands;

use Illuminate\Console\Command;

class CoderAiCommand extends Command
{
    public $signature = 'laravel-coder-ai';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
