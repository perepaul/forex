@extends('layouts.user.auth')
@section('title','Login')
@section('page-title','Login to continue')

@section('page')

    <form method="post" name="myform" class="signin_validate row g-3" action="{{ route('login') }}">
        @csrf
        <div class="col-12">
            <input type="email" class="form-control" placeholder="hello@example.com" name="email">
        </div>
        <div class="col-12">
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="col-6">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="remember">
                <label class="form-check-label" for="flexSwitchCheckDefault">Remember
                    me</label>
            </div>
        </div>
        <div class="col-6 text-right">
            <a href="{{url('/forgot-password')}}">Forgot Password?</a>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </div>

    </form>
    <p class="mt-3 mb-0">Don't have an account? <a class="text-primary" href="{{ route('register') }}">Sign
            up</a></p>
@endsection
 @push('js')
    @include('partials.alerts')
 @endpush
