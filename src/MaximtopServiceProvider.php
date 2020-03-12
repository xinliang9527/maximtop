<?php

namespace Yankewei\LaravelSensitive;

use Illuminate\Support\ServiceProvider;
use Xinliang\Maximtop\Maximtop;

class SensitiveServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Maximtop::class, function ($app) {
            return new Maximtop();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Maximtop::class, 'maximtop'];
    }
}
