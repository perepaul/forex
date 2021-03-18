<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class SmsHelper
{
    private $token = '3c90a268-ec56-4091-9a52-0d3937705eec';

    public function sendSms(array $recipients = ['+2349018123268'], string $message = "testing message")
    {
        // return $this->getAuthToken();
        $client = new Client();
        $response = $client->request('POST', 'https://auth.routee.net/oauth/token/', [
            'http_errors'=>true,
            'auth' => [config('routee.appId'), config('routee.appSecret'), 'basic'],
            'headers' => ['content-type: application/x-www-form-urlencoded','authorization: Basic '.$this->credentialHash()],
            'form_params' => ['grant_type' => 'client_credentials']
        ]);
        return $response;
    }

    private function getAuthToken()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://auth.routee.net/oauth/token",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "grant_type=client_credentials",
            CURLOPT_HTTPHEADER => array(
                "authorization: Basic ".$this->credentialHash(),
                "content-type: application/x-www-form-urlencoded"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }


        return $response;
    }

    private function credentialHash()
    {
        return base64_encode(config('routee.appId') . ':' . config('routee.appSecret'));
    }
}
