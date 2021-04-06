<?php

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
    return \Illuminate\Support\Str::limit($randomString,$length,'');
}

function isEmptyOrNullString(string $string)
{
    return is_null($string) || $string === '';
}



