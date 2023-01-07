<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CustomLambdaEvents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vapor:handle {payload}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $payload = json_decode(
            base64_decode($this->argument('payload'))
        );

        logger("Lambda Event Custom Payload");
        logger($payload);

        return Command::SUCCESS;
    }
}
