<?php

namespace App\Providers;
use DateTime;

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
                $cep = preg_replace("/[^0-9]/", "", $value);
                $url = "http://viacep.com.br/ws/$cep/xml/";
                $xml = simplexml_load_file($url);
                $uf = preg_replace("/[^A-Z]/", "", $xml->uf);

                if($uf == "MG" || $uf == "SP")
                    return true;
            }

            //Mensagem erro = "O candidato deve residir no estado de Minas Gerais ou São Paulo.";
            return false;
        });

        Validator::extend('idadeSuficiente', function($attribute, $value, $parameters, $validator){
            if(!empty($value))
            {
                //criandp objetos
                $now = new DateTime("now");
                $datetime2 = new DateTime($value);
                
                //Calculando
                $age = $now->diff($datetime2);

                //O candidato deve ter entre 15 e 18 anos de idade."
                if($age->y >= 15 && $age->y <= 18)
                    return true;
            }   

            //Mensagem erro = "O candidato deve ter entre 15 e 18 anos de idade.";
            return false;
        });
    }
}
