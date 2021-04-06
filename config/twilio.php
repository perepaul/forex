<?php
return [
    'sid'=>env('TWILIO_SID',null),
    'token'=>env('TWILIO_AUTH_TOKEN',null),
    'from'=>env('TWILIO_NUMBER',null)
];
