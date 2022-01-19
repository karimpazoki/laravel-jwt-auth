<?php

namespace Kaafochino\LaravelJwtAuth\Tests;

use Kaafochino\LaravelJwtAuth\LaravelJwtAuthServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelJwtAuthServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }
}
