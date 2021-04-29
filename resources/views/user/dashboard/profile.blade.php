@extends('layouts.user.dashboard')

@section('title', 'Profile')

@section('content')
    <div class="content-body pt-3">
        <div class="container">
            @if(auth('web')->user()->isPending())
            <div class="alert alert-info" role="alert">
                We've received your information, we will validate them and get back to you via email.
            </div>
            @endif
            <div class="row">
                <x-user.todo></x-user.todo>
                {{-- <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Download App</h4>
                        </div>
                        <div class="card-body">
                            <div class="app-link">
                                <h5>Get Verified On Our Mobile App</h5>
                                <p>Verifying your identity on our mobile app more secure, faster, and reliable.</p>
                                <a href="#" class="btn btn-primary">
                                    <img src="./images/android.svg" alt="">
                                </a>
                                <br>
                                <div class="mt-3"></div>
                                <a href="#" class="btn btn-primary">
                                    <img src="./images/apple.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Information </h4>
                            <a href="{{ route('profile-edit') }}" class="btn btn-primary">Edit</a>
                        </div>
                        <div class="card-body">
                            <form class="row">
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="user-info">
                                        <span>USER ID</span>
                                        <h4>{{ sprintf('%06d', auth()->user('web')->id) }}</h4>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="user-info">
                                        <span>EMAIL ADDRESS</span>
                                        <h4>{{ auth('web')->user()->email }}</h4>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="user-info">
                                        <span>COUNTRY</span>
                                        <h4>{{ auth('web')->user()->country }}</h4>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="user-info">
                                        <span>JOINED SINCE</span>
                                        <h4>{{ auth('web')->user()->created_at->format('d M, Y') }}</h4>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="user-info">
                                        <span>Balance</span>
                                        <h4>{{ format_money(auth('web')->user()->balance) }}</h4>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="user-info">
                                        <span>Plan</span>
                                        <h4>
                                            {!! auth('web')->user()->plan->name ?? '<a href="" class="btn btn-secondary">Subscribe</a>' !!}
                                        </h4>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-xxl-8 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Verification Status </h4>
                        </div>
                        <div class="card-body">
                            <h5>Account Status :
                                @if (auth('web')->user()->status && auth('web')->user()->plan)
                                    <span class="text-success">Active <i class="icofont-check"></i></span>
                                @elseif(auth()->user()->status)
                                    <span class="text-warning">Active <i class="icofont-warning"></i></span>
                                @else
                                    <span class="text-danger">Pending <i class="icofont-warning"></i></span>
                                @endif
                            </h5>
                            @if (auth('web')->user()->status && auth('web')->user()->plan)
                                <p>Your account is verified. you can start funding, trading, and withdrawal.</p>
                            @elseif (auth('web')->user()->status)
                                <p>Your account is verified, but you need to subscribe to a plan to enable funding, trading,
                                    and withdrawal.</p>
                            @else
                                <p>Your account is unverified. Get verified to enable funding, trading, and withdrawal.</p>
                            @endif
                            @if (!auth('web')->user()->status)
                                <a href="{{ route('verify') }}" class="btn btn-primary"> Get Verified</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Subscription &amp; Upgrade </h4>
                        </div>
                        <div class="card-body">
                            @if ($plan = auth()->user()->plan)
                                <p>You are subscribed to <strong>{{ $plan->name }}</strong></p>
                                <a href="#" class="btn btn-primary">Upgrade</a>
                            @else
                                <p>You are currently not subscribed to any plan. Subscribe now and get bonuses.</p>
                                <a href="{{ route('subscribe') }}" class="btn btn-primary">Subscribe</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
