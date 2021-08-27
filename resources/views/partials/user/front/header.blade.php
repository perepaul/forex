<div class="header landing">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="navigation">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="brand-logo">
                            <a href="{{route('index')}}">
                                <img src="{{logo()}}" alt="" class="logo-primary" width="180">
                                <img src="{{logo()}}" alt="" class="logo-white" width="180">
                               {{-- <h4>Qualitypips</h4> --}}
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                            <ul class="navbar-nav">

                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Home
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="./index.html">Home 1</a>
                                        <a class="dropdown-item" href="./index2.html">Home 2</a>
                                        <a class="dropdown-item" href="./index3.html">Home 3</a>
                                        <a class="dropdown-item" href="./index4.html">Home 4</a>
                                        <a class="dropdown-item" href="./index5.html">Home 5</a>
                                        <a class="dropdown-item" href="./index6.html">Home 6</a>
                                        <a class="dropdown-item" href="./index7.html">Home 7</a>
                                    </div>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('index')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('faq')}}">FAQ</a>
                                </li>
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Company
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="about.html">About us</a>
                                        <a class="dropdown-item" href="team.html">Team</a>
                                        <a class="dropdown-item" href="blog.html">Blog</a>
                                        <a class="dropdown-item" href="career.html">Career</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Support
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="contact.html">Contact us</a>
                                        <a class="dropdown-item" href="helpdesk.html">Help Desk</a>
                                        <a class="dropdown-item" href="privacy-policy.html">Privacy</a>
                                        <a class="dropdown-item" href="faq.html">FAQ</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard.html">Dashboard</a>
                                </li> --}}

                            </ul>
                            <div class="header-right">
                                <div class="signin-btn">
                                    @auth('web')
                                    <a class="btn btn-primary" href="{{route('dashboard')}}">Dashboard</a>
                                    @else
                                    <a class="btn btn-primary" href="{{route('login')}}">Sign in</a>
                                    @endauth
                                </div>

                                <div class="dark-light-toggle text-right ml-5 mr-5  ">
                                    <span class="dark"><i class="icofont-moon"></i></span>
                                    <span class="light"><i class="icofont-sun-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
