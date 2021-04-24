<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset the application';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('storage:clear');
        $this->call('storage:link');
        $this->call('db:wipe');
        $this->call('migrate', ['--seed' => true]);
    }
}
