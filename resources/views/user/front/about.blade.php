@extends('layouts.user.app')

@section('title', 'About us')
@section('page')

    <div class="about-one section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-img">
                        <img src="images/about/1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content m-t-50">
                        <h3>In Brief</h3>
                        <p>
                            At {{ ucfirst(strtolower(config('app.name'))) }} we believe there’s a world of opportunities
                            in
                            the financial markets. We’ve been giving people the power to trade and invest their way since
                            2008.
                        </p>

                        <h3>Who we are</h3>
                        <p>
                            {{ ucfirst(strtolower(config('app.name'))) }} was created in 2008 to offer seamless trading
                            and investments in financial markets across the
                            globe.
                            As part of Finalto Limited, a constituent of Playtech, a FTSE 250 listed company, we have the
                            knowledge, the scale and the resources to continually raise the bar for our clients in the world
                            of financial trading.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-ceo py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ceo-content">
                        <div class="d-flex align-items-start">
                            {{-- <img src="images/avatar/6.jpg" alt="" class="img-fluid mr-4 rounded-circle"> --}}
                            <div class="media-body text-center">
                                <h3>Why Us?</h3>
                                {{-- <span>CEO of Tradee</span> --}}
                                <p class="m-2">For us, bringing you the world’s financial markets is personal. You can
                                    trade over 2,200 instruments on our multi-asset platform, giving you unparalleled
                                    control over the way you trade. And we back this up with a VIP service that treats you
                                    like an individual, with help and support whenever you need it.</p>

                                <h3>Professional Trading.</h3>
                                {{-- <span>CEO of Tradee</span> --}}
                                <p class="m-2">
                                    As an elective professional trader with a Markets.com professional account you are able
                                    to access a range of unique advantages, such as increased leverage, preferential trading
                                    conditions and your own dedicated personal account manager.
                                </p>

                                <h3>
                                    Pricing
                                </h3>
                                <p class="m-2">
                                    We’re always transparent on pricing, so that you can make decisions about your trades
                                    with all the information you need. Upfront pricing information allows you to know what
                                    your trades will cost, before you execute your trade. At Markets.com you always trade on
                                    your terms.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
