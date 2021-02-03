@extends('layouts.user.auth')

@section('page')
@if(session()->has('errors'))
    @dd($errors)
@endif

    <div class="pb-3 text-center">
        <p>Now you can create a new secure password.</p>
    </div>
    <form method="post" name="myform" class="signin_validate row g-3" action="{{ url('/reset-password') }}">
        @csrf
        <input type="hidden" name="token" value="{{request()->route('token')}}">
        <div class="col-12">
            <input type="email" class="form-control" placeholder="hello@example.com" name="email" value="{{$request->email}}">
        </div>
         <div class="col-12">
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
         <div class="col-12">
            <input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation">
        </div>
    
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Reset <i class="fa fa-lock"></i></button>
        </div>

    </form>
    <div class="privacy-link">
        <i class="fa fa-chevron-left"></i>
        <a href="{{route('login')}}" class="text-primary">Back to Login</a>
        <br />
    </div>
@endsection
