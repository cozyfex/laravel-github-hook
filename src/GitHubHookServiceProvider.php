<?php

namespace CozyFex\GitHubHook;

use CozyFex\GitHubHook\Commands\InstallCommand;
use Illuminate\Support\ServiceProvider;

class GitHubHookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }
}
