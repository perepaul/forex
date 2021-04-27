@extends('layouts.user.auth')
@section('title','Register')
@section('page-title','Create an account')

@section('page')
    <form method="post" name="myform" class="signin_validate row g-3" action="{{ route('register') }}" autocomplete='off'>
        @csrf
        <div class="col-12">
            <input type="text" class="form-control" placeholder="Name" name="name">
        </div>
        <div class="col-12">
            <input type="email" class="form-control" placeholder="hello@example.com" name="email"
                autocomplete="new-password">
        </div>
        <div class="col-12">
            <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="new-password">
        </div>
        <div class="col-12">
            <input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation"
                autocomplete="new-password">
        </div>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">
                    I agree to the <a href="{{route('terms')}}" class="text-primary">User
                        Agreement</a> and <a href="{{route('privacy')}}" class="text-primary">Privacy Policy</a>.
                </label>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Create account</button>
        </div>
    </form>
    <div class="text-center">
        <p class="mt-3 mb-0"> <a class="text-primary" href="{{ route('login') }}">Sign in</a> to your
            account</p>
    </div>
@endsection
