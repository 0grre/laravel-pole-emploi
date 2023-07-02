<?php

namespace Ogrre\Laravel\PoleEmploi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \App\Furious\Furious
 */
class PoleEmploiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'PE';
    }
}
