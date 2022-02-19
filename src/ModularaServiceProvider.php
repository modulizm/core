<?php

namespace Vittozich\Modulara;

use Illuminate\Support\ServiceProvider;

class ModularaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/modulara.php' => config_path('modulara.php')
        ]);
    }

    public function register()
    {

    }
}