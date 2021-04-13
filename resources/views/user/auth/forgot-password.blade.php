@extends('layouts.user.auth')
@section('title','Forgot Password');
@section('page-title','Forgot password');
@section('page')

    <div class="pb-3 text-center">
        <p>To reset your password, enter your email address and we'll send you a link to reset it.</p>
    </div>
    <form method="post" name="myform" class="signin_validate row g-3" action="{{ url('forgot-password') }}">
        @csrf
        <div class="col-12">
            <input type="email" class="form-control" placeholder="hello@example.com" name="email">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Send Link <i class="fa fa-envelope"></i></button>
        </div>

    </form>
    <div class="privacy-link">
        <i class="fa fa-chevron-left"></i>
        <a href="{{route('login')}}" class="text-primary">Back to Login</a>
        <br />
    </div>
@endsection
