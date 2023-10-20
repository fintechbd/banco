<?php

namespace Fintech\Banco\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fintech\Banco\Banco
 */
class Banco extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Fintech\Banco\Banco::class;
    }
}
