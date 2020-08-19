<?php


namespace BlackParadise\Admin;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider {
{
    protected $configPath = 'black-paradise.config';
    /**
     * Boot
     */
    public function boot()
    {

    }
    /**
     * Register
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/dashboard.php',
            $this->configPath
        );
    }
}