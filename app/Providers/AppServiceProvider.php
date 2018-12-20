<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //nao é necessario criar varias estancias. vamos usar como indentificador classe GuzzleHttp\Client
        $this->app->singleton('GuzzleHttp\Client', function(){
            return new Client([
                'base_uri' => 'https://jsonplaceholder.typicode.com',
            ]);
        });
    }
}
