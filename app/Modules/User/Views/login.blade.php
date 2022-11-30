
<!DOCTYPE html>
<html lang="en">

<head>
	<title> MyDigiPool Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-------------------------------------------------------------------------------->
	<link rel="icon" type="image/png" href="{{asset('assets')}}/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/util.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/main.css">
	<link href="{{asset('css')}}/main.css"rel="stylesheet">
	<!-------------------------------------------------------------------------------->

</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{route('handleAdminLogin')}}" method="post">
				{{csrf_field()}}
					<span class="login100-form-title p-b-43">
						Login
					</span>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" placeholder="Email" type="text" name="email">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" placeholder="Password" type="password" name="password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
                        <a href="{{route('index2')}}"></a>
                        <button class="login100-form-btn" type="submit">
							Login
						</button>

					</div>



				</form>

				<div class="login100-more" style="background-image: url('{{asset('assets')}}/images/bg2.JPEG')";>
				</div>
			</div>
		</div>
	</div>

	<!-------------------------------------------------------------------------------->
	<script src="{{asset('public')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="{{asset('public')}}/vendor/animsition/js/animsition.min.js"></script>
	<script src="{{asset('public')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{asset('public')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{asset('public')}}/vendor/select2/select2.min.js"></script>
	<script src="{{asset('public')}}/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{asset('public')}}/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="{{asset('public')}}/vendor/countdowntime/countdowntime.js"></script>
	<script src="{{asset('public')}}/js/main.js"></script>
	<!-------------------------------------------------------------------------------->

</body>
</html>
