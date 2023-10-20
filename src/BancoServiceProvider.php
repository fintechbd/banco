<?php

namespace Fintech\Banco;

use Illuminate\Support\ServiceProvider;
use Fintech\Banco\Commands\InstallCommand;
use Fintech\Banco\Commands\BancoCommand;

class BancoServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/banco.php', 'fintech.banco'
        );

        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/banco.php' => config_path('fintech/banco.php'),
        ]);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'banco');

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/banco'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'banco');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/banco'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
                BancoCommand::class,
            ]);
        }
    }
}
