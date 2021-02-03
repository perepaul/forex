@extends('layouts.user.front')

@section('content')
    <div id="main-wrapper">
        <div class="authincation">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="mini-logo text-center my-4">
                            <a href="intro.html"><img src="{{asset('images/logo.png')}}" alt=""></a>
                            <h4 class="card-title mt-3">Sign in to Tradee</h4>
                        </div>
                        <div class="auth-form card">
                            <div class="card-body p-sm-2">
                                @yield('page')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
