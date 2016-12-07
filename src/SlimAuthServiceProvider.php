<?php
/**
 * Created by PhpStorm.
 * User: sanjayam
 * Date: 07/Dec/2016
 * Time: 10:15 AM
 */

namespace SlimAuth;


use Illuminate\Support\ServiceProvider;

class SlimAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Resources/views', 'slimAuth');
        require __DIR__ . '/Routes/web.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('slimAuth', function ($app) {
            return new SlimAuth;
        });
    }
}