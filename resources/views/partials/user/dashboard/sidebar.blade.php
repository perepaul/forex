<div class="sidebar">
    <div class="brand-logo">
        <a href="{{ route('dashboard') }}"><img src="{{favicon()}}" alt="" width="87">
        </a>
    </div>
    <div class="menu">
        <ul>
            <li>
                <a href="{{ route('dashboard') }}" data-toggle="tooltip" data-placement="right" title="Home">
                    <span><i class="icofont-dashboard"></i></span>
                </a>
            </li>
            <li>
                <a href="{{ route('trade') }}" data-toggle="tooltip" data-placement="right" title="Trade">
                    <span><i class="icofont-exchange"></i></span>
                </a>
            </li>
            <li>
                <a href="{{ route('wallet') }}" data-toggle="tooltip" data-placement="right" title="Wallet">
                    <span><i class="icofont-wallet"></i></span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile') }}" data-toggle="tooltip" data-placement="right" title="Settings">
                    <span><i class="icofont-user"></i></span>
                </a>
            </li>
            <li class="logout">
                <a href="{{ route('logout') }}" data-toggle="tooltip" data-placement="right" title="Signout"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span><i class="icofont-power"></i></span>
                </a>
            </li>
        </ul>

        <p class="copyright">
            &#169; <a href="#">Qkit</a>
        </p>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="post">
        @csrf
    </form>
</div>
