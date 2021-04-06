<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Twilio\Rest\Client as RestClient;

class SmsHelper
{
    /**
     * @param \Twilio\Rest\Client $sms
     * Twilio instance
     */
    private $sms;

    public function __construct()
    {
        $this->sms = new RestClient(config('twilio.sid'),config('twilio.token'));
    }
    public function send($to,$body)
    {
        $data = ['from'=>config('twilio.from'),'body'=>$body];
        $this->sms->messages->create($to,$data);
    }
}
