<?php

namespace App\Helpers\ActiveMenu;

use Illuminate\Support\ServiceProvider;
use App\Helpers\ActiveMenu\ActiveMenu;

class ActiveMenuServiceProvider extends ServiceProvider
{
    //protected $defer = true; //Only load when needed

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
        $this->app->bind(
            'App\Helpers\ActiveMenu\Contracts\ActiveMenuContract',
            'App\Helpers\ActiveMenu\ActiveMenu'
        );
        /*$this->app->bind('App\Helpers\ActiveMenu\Contracts\ActiveMenuContract', function () {

            return new ActiveMenu();

        });
        */
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    /*
    public function provides()
    {
        return ['App\Helpers\ActiveMenu\Contracts\ActiveMenuContract'];
    }
    */
}
