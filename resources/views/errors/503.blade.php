<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coming Soon 4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('maintenance/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('maintenance/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('maintenance/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('maintenance/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('maintenance/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('maintenance/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('maintenance/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('maintenance/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>


	<div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1">
		<span></span>
		<div class="flex-col-c p-t-50 p-b-50">
			<h3 class="l1-txt1 txt-center p-b-10">
				Coming Soon
			</h3>

			<p class="txt-center l1-txt2 p-b-60">
				My website is under construction
			</p>





			<button class="flex-c-m s1-txt2 size3 how-btn"  data-toggle="modal" data-target="#subscribe">
			Muhammad Faisal Gunanda
			</button>
		</div>

		<span class="s1-txt3 txt-center">

		</span>

	</div>

	<!-- Modal Login -->
	<div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="modal-subscribe where1-parent bg0 bor2 size4 p-t-54 p-b-100 p-l-15 p-r-15">
				<button class="btn-close-modal how-btn2 fs-26 where1 trans-04">
					<i class="zmdi zmdi-close"></i>
				</button>

				<div class="wsize1 m-lr-auto">
					<h3 class="m1-txt1 txt-center p-b-36">
						<span class="bor1 p-b-6">Subscribe</span>
					</h3>

					<p class="m1-txt2 txt-center p-b-40">
						Follow us for update now!
					</p>

					<form class="contact100-form validate-form">
						<div class="wrap-input100 m-b-10 validate-input" data-validate = "Name is required">
							<input class="s1-txt4 placeholder0 input100" type="text" name="name" placeholder="Name">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 m-b-20 validate-input" data-validate = "Email is required: ex@abc.xyz">
							<input class="s1-txt4 placeholder0 input100" type="text" name="email" placeholder="Email">
							<span class="focus-input100"></span>
						</div>

						<div class="w-full">
							<button class="flex-c-m s1-txt2 size5 how-btn1 trans-04">
								Get Updates
							</button>
						</div>
					</form>

					<p class="s1-txt5 txt-center wsize2 m-lr-auto p-t-20">
						And don’t worry, we hate spam too! You can unsubcribe at anytime.
					</p>
				</div>
			</div>

		</div>
	</div>



<!--===============================================================================================-->
	<script src="{{asset('maintenance/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('maintenance/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{asset('maintenance/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('maintenance/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('maintenance/vendor/countdowntime/moment.min.js') }}"></script>
	<script src="{{asset('maintenance/vendor/countdowntime/moment-timezone.min.js') }}"></script>
	<script src="{{asset('maintenance/vendor/countdowntime/moment-timezone-with-data.min.js') }}"></script>
	<script src="{{asset('maintenance/vendor/countdowntime/countdowntime.js') }}"></script>
	<script>
		$('.cd100').countdown100({
			// Set Endtime here
			// Endtime must be > current time
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 35,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "America/Los_Angeles"
			// ex:  timeZone: "America/New_York", can be empty
			// go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('maintenance/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('maintenance/js/main.js') }}"></script>

</body>
</html>
