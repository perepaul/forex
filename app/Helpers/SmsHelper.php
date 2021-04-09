<?php

namespace App\Helpers;

use MessageBird\Objects\Message;
use MessageBird\Client;


class SmsHelper
{

    private $sms;

    public function send($to, $body)
    {
        $MessageBird = new Client(config('messagebird.key'));
        $Message = new Message();
        $Message->originator = 'PIPLOTS';
        $Message->recipients = $to;
        $Message->body = $body;

        $MessageBird->messages->create($Message);
    }
}
