<div class="col-xxl-6 col-xl-6 col-lg-6 m-auto">
    <div class="card welcome-profile">
        <div class="card-body">
            <img src="{{profile_picture()}}" alt="">
            <h4>Hi, {{ auth('web')->user()->name }}!</h4>
            <p>Welcome aboard, complete the following tasks to get a fully functioning account.</p>

            <ul>
                <li>
                    @if (auth('web')->user()->isActive())
                        <a href="javascript:void(0)">
                            <span class="verified"><i class="icofont-check-alt"></i></span>
                            Verify account
                        </a>
                    @elseif(auth()->user()->isPending())
                    <a href="javascript:void(0)">
                        <span class="verified"><i class="icofont-exclamation"></i></span>
                        Your account will be verified soon!
                    </a>
                    @else
                        <a href="{{route('verify')}}">
                            <span class="not-verified"><i class="icofont-close-line"></i></span>
                            Verify account
                        </a>
                    @endif
                </li>
                <li>
                    @if ($plan = auth('web')->user()->plan)
                    <a href="#">
                        <span class="verified"><i class="icofont-check-alt"></i></span>
                        Subscribed to &nbsp; <strong>{{$plan->name}}</strong>
                    </a>
                    @else
                    <a href="{{route('subscribe')}}">
                        <span class="not-verified"><i class="icofont-close-line"></i></span>
                        Subscribe to a plan
                    </a>
                    @endif
                </li>

                <li>
                    @if (auth('web')->user()->deposits()->count() > 0)
                    <a href="#">
                        <span class="verified"><i class="icofont-check-alt"></i></span>
                        Deposited
                    </a>
                    @else
                    <a href="{{route('deposit')}}">
                        <span class="not-verified"><i class="icofont-close-line"></i></span>
                        Make a Deposit
                    </a>
                    @endif
                </li>


                {{-- <li>
                    @if (auth('web')->user()->is2faEnabled())
                    <a href="#">
                        <span class="verified"><i class="icofont-check-alt"></i></span>
                        Two-factor authentication (2FA)
                    </a>
                    @else
                    <a href="{{route('two-factor-auth')}}">
                        <span class="not-verified"><i class="icofont-close-line"></i></span>
                        Two-factor authentication (2FA)
                    </a>
                    @endif
                </li> --}}
            </ul>
        </div>
    </div>
</div>
