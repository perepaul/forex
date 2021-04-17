<?php

use Illuminate\Support\Str;
use App\Helpers\SmsHelper;
use App\Models\AccountCurrency;

if(!function_exists('admin_url')){
    function admin_url(){
        return config('app.admin_subdomain').'.'.config('app.base_url');
    }
}

function user_url()
{
    return config('app.base_url');
}

function format_money($amount,$symbol = null)
{
    $sign = '$';
    $s = currency_symbol();
    if(!is_null($symbol)) {
        $sign = $symbol;
    }elseif(!is_null($s)){
        $sign = $s;
    }

    if($sign == 'none')
    {
        return number_format($amount,2);
    }

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

function favicon()
{
    return asset('images/favicon.png');
}

function currency_symbol()
{
    $currency = user_currency() ?? default_currency();
    return optional($currency)->symbol;
}

function user_currency()
{
    if(!auth('web')->check()){
        return null;
    }
    return auth('web')->user()->currency;
}

function default_currency(){
    return AccountCurrency::where('default',1)->first();
}

function currency_iso(){
    $currency = user_currency() ?? default_currency();
    return optional($currency)->iso;
}



