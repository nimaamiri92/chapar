<?php


namespace Arc92\Chapar\Https\Controllers;


use Kavenegar\KavenegarApi;

class Kavenegar extends CoreSms
{
    public function __construct()
    {
        parent::__construct();
        $this->smsProviderObj = new KavenegarApi( $this->getConfigCredentials()['key']);
    }

    public  function send(string $sender,string $receiver,string $message){
        $result     = $this->smsProviderObj->Send($sender,$receiver,$message);
    }

    public function sendGroup(array $senders,array $receiver,string $message)
    {
        $result = $this->smsProviderObj->SendArray($senders,$receiver,$message);
    }


}
