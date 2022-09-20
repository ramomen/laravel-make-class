<?php

namespace Ramomen\LaravelMakeClass;

use Illuminate\Support\ServiceProvider;

class LaravelMakeClassProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->commands(MakeClass::class);
    }
}
