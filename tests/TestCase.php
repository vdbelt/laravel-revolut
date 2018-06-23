<?php

namespace Vdbelt\LaravelRevolut\Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Vdbelt\LaravelRevolut\LaravelRevolutServiceProvider;

/**
 * This is the abstract test case class.
 */
abstract class TestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return LaravelRevolutServiceProvider::class;
    }
}