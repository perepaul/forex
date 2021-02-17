<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.multipurposethemes.com/admin/joblly-admin-template-dashboard/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Feb 2021 14:47:07 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/joblly-admin-template-dashboard/images/favicon.ico">

    <title>Joblly - Log in </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('css/admin/vendors_css.css')}}">

	<!-- Style-->
	<link rel="stylesheet" href="{{asset('css/admin/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/admin/skin_color.css')}}">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url({{asset('images/admin/bg-1.jpg')}})">
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Welcome Back Admin</h2>
								<p class="mb-0">Sign in to continue to {appname}.</p>
							</div>
							<div class="p-40">
								<form action="/login" method="post">
                                    @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input type="email" class="form-control pl-15 bg-transparent" placeholder="Email" name="email" value="{{old('email')}}">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" placeholder="Password" name="password">
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" name="remember">
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>

										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{asset('js/admin/vendors.min.js')}}"></script>
    @include('partials.alerts')


</body>

</html>
