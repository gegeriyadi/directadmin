<?php

namespace Gegeriyadi\DirectAdmin\Facades;

use Illuminate\Support\Facades\Facade;

class DirectAdmin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'gegeriyadi-directadmin';
    }
}
