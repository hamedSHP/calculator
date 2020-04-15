<?php


namespace Devdojo\Calculator;


use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom( __DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }

    public function register()
    {
        $this->app->make('Devdojo\Calculator\CalculatorController');
    }
}
