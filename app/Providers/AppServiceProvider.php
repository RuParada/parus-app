<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use Response;
use DB;

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
        Blade::directive('dump',function($var){
            if (is_array($var)) {
                foreach ($var as $key => $value) {
                    echo '<h1><code>'.$key.' => '.$value.'</code></h1>';
                }
            } else {
                echo '<code style="text-align:center">'.$var.'</code>';

            }
        });

        //
        Response::macro('myResult', function($var){
            return Response::make($var);
        });

        //
        DB::listen(function($query){
            dump($query->sql);
            dump($query->bindings);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
