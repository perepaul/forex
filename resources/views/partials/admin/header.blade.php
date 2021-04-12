<header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">
		<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
			<i data-feather="menu"></i>
		</a>
		<!-- Logo -->
		<a href="{{route('admin.index')}}" class="logo">
		  <!-- logo-->
		  <div class="logo-lg">
			  <span class="light-logo"><img src="{{logo()}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{logo()}}" alt="logo"></span>
		  </div>
		</a>
	</div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item d-md-none">
				<a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
					<i data-feather="menu"></i>
			    </a>
			</li>
		</ul>
	  </div>

      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  {{-- <li class="btn-group nav-item d-lg-flex d-none align-items-center">
			<p class="mb-0 text-fade pr-10 pt-5">Friday, 4th December 2020</p>
		  </li> --}}
		  <li class="btn-group nav-item d-lg-inline-flex d-none">
			<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
				<i data-feather="maximize"></i>
			</a>
		  </li>
          <!-- Control Sidebar Toggle Button -->
		  {{-- <li class="btn-group nav-item d-inline-flex">
			<a href="#" data-toggle="control-sidebar" class="waves-effect waves-light nav-link full-screen" title="Setting">
				<i data-feather="settings"></i>
			</a>
		  </li> --}}
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light dropdown-toggle" title="Change theme">
			  <i data-feather="moon" class="light change-theme"></i>
			  <i data-feather="sun" class="dark d-none change-theme"></i>
			</a>
		  </li>
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
				<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
            </a>
            <ul class="dropdown-menu animated flipInX">
              <li class="user-body">
				 <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
				 <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
				 {{-- <a class="dropdown-item" href="{{route('admin.settings')}}"><i class="ti-settings text-muted mr-2"></i> Settings</a> --}}
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
