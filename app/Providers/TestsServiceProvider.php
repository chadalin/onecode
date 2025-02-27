<?php

namespace App\Providers;
use App\Test\Tests;

use Illuminate\Support\ServiceProvider;

class TestsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singLeton('tests',function(){
            
            return new Tests(config('example'));
        }
        
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
