@component('mail::message')
# Hi {{$user->name ?? 'Dear'}},

{!! $message !!}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
