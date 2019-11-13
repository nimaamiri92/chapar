<?php


namespace Arc92\Chapar;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Facade;


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
