<?php

namespace Fintech\Banco\Tests;

use Fintech\Banco\BancoServiceProvider;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use DatabaseMigrations;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

    }

    /**
     * @param $app
     * @return string[]
     */
    protected function getPackageProviders($app): array
    {
        return [
            BancoServiceProvider::class,
        ];
    }

    /**
     * @param $app
     * @return void
     */
    public function getEnvironmentSetUp($app): void
    {
        config()->set('app.env', 'testing');
        config()->set('database.default', 'testing');

        $migrations = [
        ];

        foreach ($migrations as $migration) {
            $migration->up();
        }
    }
}
