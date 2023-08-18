<?php

namespace Ogrre\Laravel\PoleEmploi;

use Illuminate\Support\Facades\Facade;

class PoleEmploiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'PE';
    }
}
