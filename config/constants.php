<?php

return [
    'bitcoin_qr' => 'images/btc.jpeg',
    'bitcoin_wallet_address' => env('BTC_ADDRESS', '32LHqKThS4Jw2eSH5kBBeYw5ihuh88trUZ'),
    'ethereum_qr' => 'images/eth.png',
    'ethereum_wallet_address' => env('ETH_ADDRESS', '0xE1Fd78a627DFD6b49A7e92a596FEa80c7Ca21dE1'),
    'deposit_image' => 'assets/deposits',
    'address' => env('ADDRESS', 'some random address'),
    'admin_notification_email' => env('ADMIN_NOTIFICATION_EMAIL', 'perepaul15@gmail.com'),
    'contact_email' => env('CONTACT_EMAIL', 'contact@qualitypips.com'),
    'phone_number' => env('PHONE_NUMBER', '+14352337159'),
    'chat_scripts' => env('CHAT_SCRIPTS', "<script type='text/javascript'> var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date(); (function(){
    var s1=document.createElement('script'),s0=document.getElementsByTagName('script')[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/60aa82eea4114e480ad070de/1f6d0uts8';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();</script>"),
];
