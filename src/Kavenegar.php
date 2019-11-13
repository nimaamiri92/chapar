<?php


namespace Arc92\Chapar;


use Kavenegar\KavenegarApi;

class Kavenegar extends CoreSms
{
    public function __construct()
    {
        parent::__construct();
        $this->smsProviderObj = new KavenegarApi($this->getConfigCredentials()['key']);
    }

    public function send(string $sender, string $receiver, string $message)
    {
        $result = $this->smsProviderObj->Send($sender, $receiver, $message);
        return $result;
    }

    public function sendGroup(array $senders, array $receiver, string $message)
    {
        $result = $this->smsProviderObj->SendArray($senders, $receiver, $message);
        return $result;
    }

    public function delivery($messageId)
    {
        $result = $this->smsProviderObj->Status($messageId);
        return $result;
    }

    public function accountInfo()
    {
        $result = $this->smsProviderObj->AccountInfo();
        return $result;
    }

}
