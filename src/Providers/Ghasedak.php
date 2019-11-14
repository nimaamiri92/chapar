<?php

namespace Arc92\Chapar\Providers;

use Ghasedak\GhasedakApi;

/*
 * Official documentation: https://ghasedak.io/docs
 *
 * */
class Ghasedak extends Core
{
    public function __construct()
    {
        parent::__construct();
        $this->smsProvider = new GhasedakApi($this->getConfigCredentials()['key']);
    }

    public function send(string $sender, string $receiver, string $message,int $sendDate = null, $checkId = null)
    {
        $result = $this->smsProvider->SendSimple($receiver, $message, $sender,$sendDate, $checkId);
        return $result;
    }

    public function sendGroup(array $senders, array $receiver, array $message, int $sendDate, $checkId = null)
    {
        $result = $this->smsProvider->SendBulk($senders, $receiver, $message, $sendDate, $checkId);
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
