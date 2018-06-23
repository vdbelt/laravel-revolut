<?php

namespace Vdbelt\LaravelRevolut\Tests;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Vdbelt\LaravelRevolut\Facades\Revolut;

class ServiceProviderTest extends TestCase
{
    use ServiceProviderTrait;

    public function testRevolutIsInjectable()
    {
        $this->assertIsInjectable(Revolut::class);
    }
}