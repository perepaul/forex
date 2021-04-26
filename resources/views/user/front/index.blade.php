@extends('layouts.user.app')

@section('title','Home')
@section('page')


    <div class="intro bg-primary">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-6 col-12">
                    <div class="intro-content">
                        <h1 class="text-white">Instant access to investing, anytime and anywhere
                        </h1>
                        <p class="text-white">Invest in the world's most popular and sought-after assets. Everything you are looking for in an ultimate investment platform — on the device of your choice.</p>

                        <div class="intro-btn">
                            <a href="{{route('register')}}" class="btn btn-outline-primary">GET STARTED FOR FREE</a>
                            {{-- <a href="#" class="btn btn-outline-primary">Browse Now</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12 d-none d-lg-block">
                    <div class="intro-form-exchange">
                        {{-- <form method="post" name="myform" class="currency_validate trade-form row g-3">
                            <div class="col-12">
                                <label class="form-label">Send</label>
                                <div class="input-group">
                                    <select class="form-control" name="method">
                                        <option value="bank">USD</option>
                                        <option value="master">Euro</option>
                                    </select>
                                    <input type="text" name="currency_amount" class="form-control" placeholder="0.0214 BTC">
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Receive</label>
                                <div class="input-group">
                                    <select class="form-control" name="method">
                                        <option value="bank">BTC</option>
                                        <option value="master">ETH</option>
                                    </select>
                                    <input type="text" name="currency_amount" class="form-control" placeholder="0.0214 BTC">
                                </div>
                            </div>

                            <p class="mb-0">1 USD ~ 0.000088 BTC <a href="#">Expected rate <br>No extra
                                    fees</a></p>
                            <button type="button" class="btn btn-primary ">
                                Buy Now
                            </button>

                        </form> --}}
                        <x-user.signal-marquee></x-user.signal-marquee>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape"></div>
    </div>

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
                <h2>Why invest with {{ucfirst(strtolower(config('app.name')))}}?</h2>
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
                    <p>Your money is safe with us,deposit, trade and earn profits, withdraw all happening in a very secure place.</p>
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

    {{-- <div class="price-grid section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-btc">
                        <a href="price-details.html">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc BTC"></i>
                                    <span>Bitcoin</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-eth">
                        <a href="price-details.html">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc ETH"></i>
                                    <span>Ethereum</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart2"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-usdt">
                        <a href="price-details.html">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc USDT"></i>
                                    <span>Tether</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart3"></div>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-dark">
                        <a href="price-details.html">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc XRP"></i>
                                    <span>Ripple</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart4"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-dark">
                        <a href="price-details.html">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc LTC"></i>
                                    <span>Litecoin</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart5"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-dark">
                        <a href="price-details.html">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc ADA"></i>
                                    <span>Cardano</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart6"></div>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </div> --}}

    {{-- <div class="portfolio section-padding bg-gradient-primary">
        <div class="container">
            <div class="row py-lg-5 justify-content-center">
                <div class="col-xl-7">
                    <div class="section-title text-center">
                        <h2 class="text-white">Create your cryptocurrency portfolio today</h2>
                        <p class="text-white">Tradee has a variety of features that make it the best place to start trading
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-4 col-lg-6">
                    <div class="portfolio_list">
                        <div class="media">
                            <span class="port-icon"> <i class="fas fa-user-circle"></i></span>
                            <div class="media-body">
                                <h4>Manage your portfolio</h4>
                                <p>Buy and sell popular digital currencies, keep track of them in the one place.
                                </p>
                            </div>
                        </div>
                        <div class="media">
                            <span class="port-icon"> <i class="fas fa-shopping-bag"></i></span>
                            <div class="media-body">
                                <h4>Recurring buys</h4>
                                <p>Invest in cryptocurrency slowly over time by scheduling buys daily, weekly, or monthly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="portfolio_img">
                        <img src="images/portfolio.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="portfolio_list">
                        <div class="media">
                            <span class="port-icon"> <i class="fas fa-shield-virus"></i></span>
                            <div class="media-body">
                                <h4>Vault protection</h4>
                                <p>For added security, store your funds in a vault with time delayed withdrawals.
                                </p>
                            </div>
                        </div>
                        <div class="media">
                            <span class="port-icon"> <i class="fas fa-mobile"></i></span>
                            <div class="media-body">
                                <h4>Mobile apps</h4>
                                <p>Stay on top of the markets with the Tradee app for <a href="#">Android</a> or
                                    <a href="#">iOS</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="trade-app section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title text-center">
                        <h2>Trade. Anywhere</h2>
                        <p> All of our products are ready to go, easy to use and offer great value to any kind of business
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card trade-app-content">
                        <div class="card-body">
                            <span><i class="fas fa-mobile"></i></span>
                            <h4 class="card-title">Mobile</h4>
                            <p>All the power of Tradee's cryptocurrency exchange, in the palm of your hand. Download the
                                Tradee mobile crypto trading app today</p>

                            <a href="#"> Know More </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card trade-app-content">
                        <div class="card-body">
                            <span><i class="fas fa-desktop"></i></span>
                            <h4 class="card-title">Desktop</h4>
                            <p>Powerful crypto trading platform for those who mean business. The Tradee crypto trading
                                experience, tailor-made for your Windows or MacOS device.</p>

                            <a href="#"> Know More </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card trade-app-content">
                        <div class="card-body">
                            <span><i class="fas fa-database"></i></span>
                            <h4 class="card-title">API</h4>
                            <p>The Tradee API is designed to provide an easy and efficient way to integrate your trading
                                application into our platform.</p>

                            <a href="#"> Know More </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

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
                        {{-- <div class="mt-4">
                            <a href="#" class="btn btn-primary my-1 waves-effect">
                                <img src="images/android.svg" alt="">
                            </a>
                            <a href="#" class="btn btn-primary my-1 waves-effect">
                                <img src="images/apple.svg" alt="">
                            </a>
                        </div> --}}
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
                                    "Fell in love with the platform the moment I saw it. Its clean and simple design was what sealed the deal for me."
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
                                    “As an experienced investor returning after a break of several years, I was recommended to try <strong><em>{{ucfirst(strtolower(config('app.name')))}}</em></strong>. The staff have been extremely helpful.”
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
                                    "I’ve learned a lot about the financial markets while working with this company. Now I can invest and earn money."
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

    {{-- <div class="get-touch section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title">
                        <h2>Get in touch. Stay in touch.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="get-touch-content">
                        <span><i class="fas fa-headset"></i></span>
                        <h4>24 / 7 Support</h4>
                        <p>Got a problem? Just get in touch. Our support team is available 24/7.
                        </p>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="get-touch-content">
                        <span><i class="fas fa-blog"></i></span>
                        <h4>Tradee Blog</h4>
                        <p>News and updates from the world’s leading cryptocurrency exchange.
                        </p>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="get-touch-content">
                        <span><i class="fas fa-briefcase"></i></span>
                        <h4>Careers</h4>
                        <p>Help build the future of technology. Start your new career at Tradee.
                        </p>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="get-touch-content">
                        <span><i class="fas fa-users"></i></span>
                        <h4>Community</h4>
                        <p>Tradee is global. Join the discussion in our worldwide communities.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
