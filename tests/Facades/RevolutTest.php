<?php

namespace Vdbelt\LaravelRevolut\Tests\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Vdbelt\LaravelRevolut\Facades\Revolut;
use Vdbelt\LaravelRevolut\RevolutClient;
use Vdbelt\LaravelRevolut\Tests\TestCase;

/**
 * This is the RevolutTest facade test class.
 */
class RevolutTest extends TestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'revolut';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Revolut::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return RevolutClient::class;
    }
}