<?php

use Illuminate\Support\Str;
use App\Helpers\SmsHelper;

if(!function_exists('admin_url')){
    function admin_url(){
        return config('app.admin_subdomain').'.'.config('app.base_url');
    }
}

function user_url()
{
    return config('app.base_url');
}

function format_money($amount,$sign = '$')
{
    return $sign.number_format($amount,2);
}

function generateReference($length = 10)
{
    $characters = 'ABCDEFGHJKMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 12; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return str_limit($randomString,$length,'');
}

function isEmptyOrNullString(string $string)
{
    return is_null($string) || $string === '';
}

function str_limit($string,$limit,$end = '...')
{
    return Str::limit($string, $limit, $end);
}

function sms($to,$body)
{
    //+2349018123268
    $sms = new SmsHelper();
    $sms->send($to,$body);
}

function attachment_path($dir='')
{
    return public_path('assets/tmp/'.$dir);
}

function logo()
{
    return asset('images/logo.png');
}



