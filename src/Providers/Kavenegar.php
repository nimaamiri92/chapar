<?php


namespace Arc92\Chapar\Providers;


use Kavenegar\KavenegarApi;


/*
 * Official documentation: https://kavenegar.com/rest.html#result-general
 *
 * */
class Kavenegar extends Core
{
    public function __construct()
    {
        parent::__construct();
        $this->smsProvider = new KavenegarApi($this->getConfigCredentials()['key']);
    }

    public function send(string $sender, string $receiver, string $message)
    {
        $result = $this->smsProvider->Send($sender, $receiver, $message);
        return $result;
    }

    public function sendGroup(array $senders, array $receiver, string $message)
    {
        $result = $this->smsProvider->SendArray($senders, $receiver, $message);
        return $result;
    }

    public function delivery($messageId)
    {
        $result = $this->smsProvider->Status($messageId);
        return $result;
    }

    public function accountInfo()
    {
        $result = $this->smsProvider->AccountInfo();
        return $result;
    }

}
