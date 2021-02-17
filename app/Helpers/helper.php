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



