<?php

namespace CozyFex\GitHubHook\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cozyfex:github:hook:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GitHub Hook';

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
    public function handle(): int
    {
        copy(__DIR__.'/../Services/GitHubHookService.php', base_path('vendor/highsolutions/github-hook/src/Services/GitHubHookService.php'));

        $this->info('[highsolutions/github-hook] is override.');
        $this->info('[cozyfex/github-hook] is completed.');

        return 0;
    }
}
