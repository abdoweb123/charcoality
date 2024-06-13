<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class runJobs extends Command
{
    protected $signature = 'Run:Jobs';

    protected $description = 'Run Job in queue';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Artisan::call('queue:restart');
        Artisan::call('queue:work');
    }
}
