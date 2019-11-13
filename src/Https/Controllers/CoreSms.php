<?php


namespace Arc92\Chapar\Https\Controllers;


use Illuminate\Support\Facades\Config;
use ReflectionClass;

abstract class CoreSms
{
    protected $smsProviderObj;
    private $reflection;

    public function __construct()
    {
        $this->reflection = new ReflectionClass(get_called_class());
    }




    protected function getConfigCredentials()
    {

        $providerName = $this->reflection->getShortName();
        $configName = strtolower('chapar' . '.' . $providerName . '.' . 'credentials');
        $credentials  = Config::get(strtolower($configName));

        return $credentials;
    }
}
