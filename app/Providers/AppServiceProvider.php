<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //Custom Validation classes
        Validator::extend('CEP', function($attribute, $value, $parameters, $validator){
            if(!empty($value))
            {
                
            }

            //Mensagem erro = "O candidato deve residir no estado de Minas Gerais ou São Paulo.";
            return false;
        });

        Validator::extend('idadeSuficiente', function($attribute, $value, $parameters, $validator){
            if(!empty($value))
            {
                
            }

            //Mensagem erro = "O candidato deve ter entre 15 e 18 anos de idade.";
            return false;
        });
    }
}
