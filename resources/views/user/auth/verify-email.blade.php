@extends('layouts.user.auth')

@section('title','Verify Email')
@section('page-title','Verify your email')

@section('page')

    <div class="text-center">
        <p class="text-lg">👍</p>
        <p>We have sent you an email, click on the link to very verify your email address </p>
    </div>
    <div class="text-center">
        <form action="/email/verification-notification" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary btn-block">Resend <i class="fa fa-envelope"></i></button>
        </form>
    </div>
@endsection
