<?php


namespace Arc92\Chapar;

use Arc92\Chapar\Chapar;
use Illuminate\Support\ServiceProvider;


class ChaparServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__. '/routes/web.php');
        $this->mergeConfigFrom(__DIR__ . '/config/chapar.php','chapar');
        $this->publishes([
            __DIR__ . '/config/chapar.php' =>   config_path('chapar.php')
        ]);
    }
}
