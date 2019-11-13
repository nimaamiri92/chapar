<?php


namespace Arc92\Chapar\Https\Controllers;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Facade;

/*
 * @method string Send()
 * */
class ChaparFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        $SmsProviderCompanyData = Config::get('chapar');

        foreach ($SmsProviderCompanyData as $each){
            if($each['active'])
               return $each['namespace'];
        }
    }
}
