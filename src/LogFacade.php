<?php
/**
 * This file is part of ruogu.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */

namespace Ruogoo\Log;

use Illuminate\Support\Facades\Facade;

/**
 * Class LogFacade
 * @see LogServiceProvider
 * @package Ruogoo\Log
 */
class LogFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ruogu.log';
    }
}
