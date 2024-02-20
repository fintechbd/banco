<?php

namespace Fintech\Banco;

use Fintech\Banco\Commands\BancoCommand;
use Fintech\Banco\Commands\InstallCommand;
use Illuminate\Support\ServiceProvider;

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
        $this->app->register(RepositoryServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
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
