@extends('layouts.user.app')

@section('title', 'FAQ')
@section('page')
    <div class="terms_condition">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="terms_condition-content">
                        <h3 class="mb-5">Frequently Asked Questions </h3>
                        <div class="terms_condition-text">
                            <h5>Do you have a demo account for testing?</h5>
                            <p>
                                Yes, we hava a demo package. Your bonus wallet will be credited as soon as you subscribe to
                                a plan. please note that the demo balance and profits are non-withdrawable, they are for
                                educational purposes only!
                            </p>
                        </div>


                        <div class="terms_condition-text">
                            <h5>How long does it take for deposit to reflect on my account? </h5>
                            <p>
                                It takes about 30mins to 1Hour depending on the deposit option you choose, but can take upd
                                to 24 hours with some deposit options.
                            </p>
                        </div>


                        <div class="terms_condition-text">
                            <h5>Why should I trust you? </h5>
                            <p>
                                You can trust us, because we are licensed by international finacial regulatory bodies, and
                                we use
                            </p>
                            <ul>
                                <li>
                                    <i class="fa fa-circle"></i>
                                    <p>Https protocol to secure your connection to our servers </p>
                                </li>
                                <li>
                                    <i class="fa fa-circle"></i>
                                    <p>We handle your money with high security </p>
                                </li>
                                <li>
                                    <i class="fa fa-circle"></i>
                                    <p>Each account has the option for two factor authentication for maximum security
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-circle"></i>
                                    <p>More than 2 million satisfied users.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="terms_condition-text">
                            <h5>How can i deposit funds into my account?</h5>
                            <p>
                                We have a variety of options. Login to your account, click on wallet, then deposits, there
                                you will see multiple options that you can use.
                            </p>
                        </div>

                        <div class="terms_condition-text">
                            <h5>What are the additional fees?</h5>
                            <p>
                                There are no additional fees.
                            </p>
                        </div>
                        <div class="terms_condition-text">
                            <h5>What trading strategies should I use?</h5>
                            <p>
                                Currency traders make decisions using both technical factors and economic fundamentals.
                                Technical traders use charts, trend lines, support and resistance levels, and numerous
                                patterns and mathematical analysis to identify trading opportunities, whereas
                                fundamentalists predict price movements by interpreting a wide variety of economic
                                information, including news, government-issued indicators and reports, and even rumors. The
                                most dramatic price movements, however, occur when unexpected events happen. The event can
                                range from a Central Bank raising domestic interest rates to the outcome of a political
                                election or even an act of war. Nonetheless, more often it is the expectation of an event
                                that drives the market rather than the event itself.
                            </p>
                        </div>

                        <div class="terms_condition-text">
                            <h5>I still have more questions?</h5>
                            <p>
                                Please refer to our live chat agents, they will answer your questions or <a href="{{route('contact')}}"> click here to send a message to our support team.</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
