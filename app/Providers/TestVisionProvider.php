<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestVisionProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('test',function(){
        
        return new Vision;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
