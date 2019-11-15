<?php


namespace Arc92\Chapar\Providers;


use Melipayamak\MelipayamakApi;

class MeliPayamak extends Core
{
    public function __construct()
    {
        parent::__construct();
        $credential = $this->getConfigCredentials();
        $api = new MelipayamakApi($credential['username'],$credential['password']);
        $this->smsProvider = $api->sms();
    }

    public function send(string $sender, string $receiver, string $message,$isFlash=false)
    {
        $result = $this->smsProvider->send($receiver, $sender, $message,$isFlash);
        return $result;
    }

    public function delivery($recId)
    {
        $result = $this->smsProvider->isDelivered($recId);
        return $result;
    }

    public function accountInfo()
    {
        $result = $this->smsProvider->getCredit();
        return $result;
    }
}
