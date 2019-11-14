<?php

namespace Arc92\Chapar;

use Ghasedak\GhasedakApi;

/*
 * Official documentation: https://ghasedak.io/docs
 *
 * */
class Ghasedak extends CoreSms
{
    public function __construct()
    {
        parent::__construct();
        $this->smsProviderObj = new GhasedakApi($this->getConfigCredentials()['key']);
    }

    public function send(string $sender, string $receiver, string $message,int $sendDate = null, $checkId = null)
    {
        $result = $this->smsProviderObj->SendSimple($receiver, $message, $sender,$sendDate, $checkId);
        return $result;
    }

    public function sendGroup(array $senders, array $receiver, array $message, int $sendDate, $checkId = null)
    {
        $result = $this->smsProviderObj->SendBulk($senders, $receiver, $message, $sendDate, $checkId);
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
