<?php

namespace Vdbelt\LaravelRevolut\Facades;

use Illuminate\Support\Facades\Facade;

class Revolut extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'revolut';
    }
}
