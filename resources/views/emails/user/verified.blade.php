@component('mail::message')
# Hello {{$user->name}}

@if($user->status == 1)
Your account as been verified successfully


Cheers,<br>
{{ config('app.name') }}
@elseif($user->status == 0)
Your account verification was unsuccessful, please provide more information about you, or contact support.

Thanks,<br>
{{ config('app.name') }}
@endif



@endcomponent
