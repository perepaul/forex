@extends('layouts.user.app')

@section('title', 'Home')
@section('page')


<div class="intro">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6 col-lg-6 col-12">
                <div class="intro-content">
                    <h1 class="text-white">Instant access to investing, anytime and anywhere</h1>
                    <p class="text-white">Invest in the world's most popular and sought-after assets. Everything you are
                        looking for in an ultimate investment platform — on the device of your choice.</p>

                    <div class="intro-btn">
                        <a href="{{ route('register') }}" class="btn btn-primary">GET STARTED FOR FREE</a>
                        {{-- <a href="#" class="btn btn-outline-primary">Browse Now</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-12 p-lg-5">
                <img src="{{ asset('images/header-image-blue.png') }}" alt="" class="img-responsive" style="height:auto; width: 100%" />
            </div>
        </div>
    </div>
    {{-- <div class="shape"></div> --}}
</div>

<x-user.signal-marquee> </x-user.signal-marquee>

<div class="getstart section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-title">
                    <h2>Get started in a few minutes</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="getstart-content">
                    <span><i class="fas fa-user-circle"></i></span>
                    <h3>Create an account</h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="getstart-content">
                    <span><i class="fas fa-check"></i></span>
                    <h3>Get Verified</h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="getstart-content">
                    <span><i class="fas fa-exchange-alt"></i></span>
                    <h3>Start Trading & Earning</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-padding">
    <div class="container">
        <div class="text-center p-5 mb-3">
            <h2>Why invest with {{ ucfirst(strtolower(config('app.name'))) }}?</h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="text-left mb-3">
                    <i class="fa fa-trophy text-primary fa-2x"></i>
                </div>
                <h4 class="mb-1">Award-winning platform</h4>
                <p>Award-winning software recognized by the industry's most respected experts.</p>
            </div>
            <div class="col-md-3">
                <div class="text-left mb-3">
                    <i class="fa fa-cog text-primary fa-2x"></i>
                </div>
                <h4 class="mb-1">Affordable plans</h4>
                <p>Our plans are designed and structured so that everyone can invest and earn with us.</p>
            </div>
            <div class="col-md-3">
                <div class="text-left mb-3">
                    <i class="fa fa-lock text-primary fa-2x"></i>
                </div>
                <h4 class="mb-1">Secure Investments</h4>
                <p>Your money is safe with us,deposit, trade and earn profits, withdraw all happening in a very secure
                    place.</p>
            </div>
            <div class="col-md-3">
                <div class="text-left circle mb-3">
                    <i class="fa fa-comment-dots text-primary fa-2x"></i>
                </div>
                <h4 class="mb-1">Support 24/7</h4>
                <p>A team of professionals speaking your mother tongue are always here to support you.</p>
            </div>

        </div>
    </div>
</div>


<div class="demo">
    <div class="container">
        <div class="row">
            @foreach ($plans as $plan)
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable {{$loop->even ? 'green':''}}">
                    <div class="pricingTable-header">
                        <h3 class="title">{{$plan->name}}</h3>
                        {{-- <div class="price-value">
                            <span class="amount">$10.00</span>
                            <span class="duration">Per Month</span>
                        </div> --}}
                    </div>
                    <ul class="pricing-content">
                        @foreach ($plan->features as $feature)
                        <li>{{ $feature->value }}</li>
                        {{-- <li class="disable">15 Subdomains</li> --}}
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<div class="brand section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="pb-5 text-center">
                    <h3>Trusted by over <strong>10,000 users</strong></h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div class="trusted-logo">
                            <a href="#"><img class="img-fluid" src="images/brand/1.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="trusted-logo">
                            <a href="#"><img class="img-fluid" src="images/brand/2.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="trusted-logo">
                            <a href="#"><img class="img-fluid" src="images/brand/3.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="trusted-logo">
                            <a href="#"><img class="img-fluid" src="images/brand/4.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="trusted-logo">
                            <a href="#"><img class="img-fluid" src="images/brand/5.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="appss section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-7 col-lg-6 col-md-6">
                <div class="appss-content">
                    <h2>Trade anytime, anywhere, with any device</h2>
                    <ul>
                        <li><i class="la la-check"></i> Your information is synchronized to all your devices</li>
                        <li><i class="la la-check"></i> Night Trader? we've got you covered with night mode 😄</li>
                        <li><i class="la la-check"></i> Available on all devices</li>
                        <li><i class="la la-check"></i> Deposit and enjoy bonuses</li>
                        <li><i class="la la-check"></i> Trade and earn profits with relative ease 👍</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="appss-img">
                    <img class="img-fluid" src="images/app.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog bg-light section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center">
                    <h2>Our Clients Says</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="blog-grid">
                    <div class="card">
                        <div class="card-body">
                            <a href="blog-single.html">
                            </a>
                            <p class="card-text">
                                "Fell in love with the platform the moment I saw it. Its clean and simple design was
                                what sealed the deal for me."
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="meta-info">
                                <a href="#" class="author"><img src="images/avatar/5.jpg" alt=""> Admin</a>
                                <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July, 2019</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="blog-grid">
                    <div class="card">
                        <div class="card-body">
                            <a href="blog-single.html">
                                {{-- <h4 class="card-title">How to securely store your HD wallet seeds?</h4> --}}
                            </a>
                            <p class="card-text">
                                “As an experienced investor returning after a break of several years, I was recommended
                                to try <strong><em>{{ ucfirst(strtolower(config('app.name'))) }}</em></strong>. The
                                staff have been extremely helpful.”
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="meta-info">
                                <a href="#" class="author"><img src="images/avatar/6.jpg" alt=""> Tim</a>
                                <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July, 2019</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="blog-grid">
                    <div class="card">
                        <div class="card-body">
                            <a href="blog-single.html">
                                {{-- <h4 class="card-title">Exclusive Interview With Xinxi Wang Of Litecoin</h4> --}}
                            </a>
                            <p class="card-text">
                                "I’ve learned a lot about the financial markets while working with this company. Now I
                                can invest and earn money."
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="meta-info">
                                <a href="#" class="author"><img src="images/avatar/7.jpg" alt=""> Jessica</a>
                                <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July, 2019</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
    .pricingTable {
        background: repeating-linear-gradient(#fff, #fff 25px, #f9f9f9 25px, #f9f9f9 50px);
        font-family: 'Outfit', sans-serif;
        text-align: center;
        padding: 30px 0 20px;
        border-radius: 30px;
        overflow: hidden;
        position: relative;
    }

    .pricingTable:before {
        content: '';
        background-color: #222;
        height: 74px;
        width: 100%;
        border-bottom: 5px solid #E8173B;
        position: absolute;
        left: 0;
        top: 0;
    }

    .pricingTable .pricingTable-header {
        margin: 0 0 20px;
    }

    .pricingTable .title {
        color: #fff;
        background-color: #E8173B;
        font-size: 30px;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: uppercase;
        padding: 25px 35px;
        margin: 0 0 15px;
        display: inline-block;
        clip-path: polygon(15% 0%, 85% 0%, 100% 50%, 85% 100%, 15% 100%, 0% 50%);
    }

    .pricingTable .price-value .amount {
        color: #E8173B;
        font-size: 45px;
        font-weight: 600;
        line-height: 50px;
        display: block;
    }

    .pricingTable .price-value .duration {
        font-size: 20px;
        display: block;
    }

    .pricingTable .pricing-content {
        padding: 0;
        margin: 0 0 20px;
        list-style: none;
        display: inline-block;
    }

    .pricingTable .pricing-content li {
        color: #777;
        font-size: 16px;
        text-align: left;
        line-height: 25px;
        text-transform: capitalize;
        padding: 0 0 0 25px;
        margin: 0 0 15px;
        position: relative;
    }

    .pricingTable .pricing-content li:last-child {
        margin: 0;
    }

    .pricingTable .pricing-content li:before {
        content: "\f00c";
        color: #E8173B;
        font-family: "Font Awesome 5 free";
        font-size: 14px;
        font-weight: 900;
        position: absolute;
        top: 0;
        left: 0;
    }

    .pricingTable .pricing-content li.disable:before {
        content: "\f00d";
        color: #777;
    }

    .pricingTable .pricingTable-signup a {
        color: #fff;
        background-color: #E8173B;
        font-size: 22px;
        font-weight: 600;
        line-height: 45px;
        text-transform: uppercase;
        padding: 7px 20px;
        border-radius: 30px;
        transition: all 0.3s ease 0s;
    }

    .pricingTable .pricingTable-signup a:hover {
        text-shadow: -4px 4px rgba(0, 0, 0, 0.2);
        box-shadow: -5px 5px rgba(0, 0, 0, 0.2);
    }

    .pricingTable.blue:before {
        border-color: #2282FC;
    }

    .pricingTable.blue .title,
    .pricingTable.blue .pricingTable-signup a {
        background-color: #2282FC;
    }

    .pricingTable.blue .price-value .amount,
    .pricingTable.blue .pricing-content li:before {
        color: #2282FC;
    }

    .pricingTable.green:before {
        border-color: #0CBB5B;
    }

    .pricingTable.green .title,
    .pricingTable.green .pricingTable-signup a {
        background-color: #0CBB5B;
    }

    .pricingTable.green .price-value .amount,
    .pricingTable.green .pricing-content li:before {
        color: #0CBB5B;
    }

    .pricingTable .pricing-content li.disable:before {
        color: #777;
    }

    @media only screen and (max-width: 990px) {
        .pricingTable {
            margin: 0 0 40px;
        }
    }
</style>
@endpush
