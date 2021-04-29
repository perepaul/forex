@extends('layouts.user.front')

@section('content')
    <div id="main-wrapper">
        <div class="authincation">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="mini-logo text-center my-4">
                            <a href="{{route('index')}}"><img src="{{logo()}}" alt="" width="140"></a>
                            <h4 class="card-title mt-3">@yield('page-title')</h4>
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
