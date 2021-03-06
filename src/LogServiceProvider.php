<?php
/**
 * This file is part of ruogu.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */

namespace Ruogoo\Log;

use Illuminate\Support\ServiceProvider;

class LogServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('ruogu.log', function ($app) {
            return new Logger($app['log']);
        });
    }

    public function provides()
    {
        return ['ruogu.log'];
    }
}
