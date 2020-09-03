{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#419eaa">

    @yield('meta-data')
	@include('includes.header')
	<style>
		.image 
		{
			width: 100%;
    		height: 100vh;				
    		background-repeat: no-repeat;
    		background-size: cover;
    		position: relative;
    		animation-name: animate;
    		animation-direction: alternate-reverse;
    		animation-duration: 3s;
    		animation-fill-mode: forwards;
    		animation-iteration-count: infinite;
    		animation-play-state: running;
    		animation-timing-function: ease-in-out;
		}
		@keyframes animate {
    		0% {
    		    background-image: url(/images/inquiry/1.jpg);
    		}
    		100% {
    		    background-image: url(/images/inquiry/2.jpg);
    		}
		}

		.bg-green 
		{
			background-color: #419eaa;
			color: white;
		}
	</style>
</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=1049909768686087&autoLogAppEvents=1"></script>
  
    @include('includes.navbar')

    <div class="main">
		<div class="container image">
			<div class="row">
				<div class="col-md-6 p-0">
					<div class="card">
						<div class="card-header bg-green text-center">
						  Business Inquiry
						</div>
						<div class="card-body">
							<form>
								<div class="form-row">
								  <div class="form-group col-md-6">
									<label for="inputEmail4">Email</label>
									<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
								  </div>
								  <div class="form-group col-md-6">
									<label for="inputPassword4">Password</label>
									<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
								  </div>
								</div>
								<div class="form-group">
								  <label for="inputAddress">Address</label>
								  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
								</div>
								<div class="form-group">
								  <label for="inputAddress2">Address 2</label>
								  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
								</div>
								<div class="form-row">
								  <div class="form-group col-md-6">
									<label for="inputCity">City</label>
									<input type="text" class="form-control" id="inputCity">
								  </div>
								  <div class="form-group col-md-4">
									<label for="inputState">State</label>
									<select id="inputState" class="form-control">
									  <option selected>Choose...</option>
									  <option>...</option>
									</select>
								  </div>
								  <div class="form-group col-md-2">
									<label for="inputZip">Zip</label>
									<input type="text" class="form-control" id="inputZip">
								  </div>
								</div>
								<div class="form-group">
								  <div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck">
									<label class="form-check-label" for="gridCheck">
									  Check me out
									</label>
								  </div>
								</div>
								<button type="submit" class="btn btn-primary">Sign in</button>
							  </form>
						</div>
						<div class="card-footer text-muted">
						  2 days ago
						</div>
					</div>
				</div>
				<div class="col-md-6 p-0 text-center">
					<div>
						<h1 class="text-light">
							helo
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>


    @include('includes.footer')
</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{url('assets/inquiry/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/inquiry/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/inquiry/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/inquiry/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/inquiry/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/inquiry/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/inquiry/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/inquiry/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/inquiry/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/inquiry/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/inquiry/css/main.css')}}">
<!--===============================================================================================-->
<style>
	.image {
		
			animation-name: animate;
    		animation-direction: alternate-reverse;
    		animation-duration: 3s;
    		animation-fill-mode: forwards;
    		animation-iteration-count: infinite;
    		animation-play-state: running;
    		animation-timing-function: ease-in-out;
		}
		@keyframes animate {
    		0% {
    		    background-image: url(/images/inquiry/1.jpg);
			}
    		100% {
    		    background-image: url(/images/inquiry/2.jpg);
    		}
		}

		.bg-green 
		{
			background-color: #419eaa;
			color: white;
		}
		canvas {
			position: absolute;
		}
</style>
@include('includes.header')
</head>
<body>
	<div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=1049909768686087&autoLogAppEvents=1"></script>
  
    @include('includes.navbar')

	<div class="container-contact100">
		<div class="wrap-contact100 shadow">
			<div class="contact100-more flex-col-c-m image" id="particles-js">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+1 800 1236879
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							contact@example.com
						</span>
					</div>
				</div>
			</div>
			<form class="pt-5 pr-4 pb-5">
				<span class="contact100-form-title">
					Make An Inquiry 
				</span>
				<div class="form-row">
					<div class="form-group col-md-6">
					  <label>First Name</label>
					  <input type="text" class="form-control" placeholder="First Name">
					</div>
					<div class="form-group col-md-6">
					  <label>Last Name</label>
					  <input type="text" class="form-control" placeholder="Last Name">
					</div>
				</div>
				<label>Date of Birth of Applicant</label>
				<div class="form-row">
					<div class="form-group col-md-3">
				  
					  <select class="form-control" name="month[]">
						  <option selected>Month</option>
						  <option value="January">January</option>
						  <option value="February">February</option>
						  <option value="March">March</option>
						  <option value="April">April</option>
						  <option value="May">May</option>
						  <option value="June">June</option>
						  <option value="July">July</option>
						  <option value="August">August</option>
						  <option value="September">September</option>
						  <option value="October">October</option>
						  <option value="November">November</option>
						  <option value="December">December</option>
					  </select>
					  
				  
					</div>
					<div class="form-group col-md-2">
					  <select class="form-control" name="day[]">
						  <option selected>Day</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						  <option value="9">9</option>
						  <option value="10">10</option>
						  <option value="11">11</option>
						  <option value="12">12</option>
						  <option value="13">13</option>
						  <option value="14">14</option>
						  <option value="15">15</option>
						  <option value="16">16</option>
						  <option value="17">17</option>
						  <option value="18">18</option>
						  <option value="19">19</option>
						  <option value="20">20</option>
						  <option value="21">21</option>
						  <option value="22">22</option>
						  <option value="23">23</option>
						  <option value="24">24</option>
						  <option value="25">25</option>
						  <option value="26">26</option>
						  <option value="27">27</option>
						  <option value="28">28</option>
						  <option value="29">29</option>
						  <option value="30">30</option>
						  <option value="31">31</option>
					  </select>
					</div>
					
					<div class="form-group col-md-3">
					  <select class="form-control" name="year[]">
						<option selected>Year </option>
                		<option value="2020"> 2020 </option>
                		<option value="2019"> 2019 </option>
                		<option value="2018"> 2018 </option>
                		<option value="2017"> 2017 </option>
                		<option value="2016"> 2016 </option>
                		<option value="2015"> 2015 </option>
                		<option value="2014"> 2014 </option>
                		<option value="2013"> 2013 </option>
                		<option value="2012"> 2012 </option>
                		<option value="2011"> 2011 </option>
                		<option value="2010"> 2010 </option>
                		<option value="2009"> 2009 </option>
                		<option value="2008"> 2008 </option>
                		<option value="2007"> 2007 </option>
                		<option value="2006"> 2006 </option>
                		<option value="2005"> 2005 </option>
                		<option value="2004"> 2004 </option>
                		<option value="2003"> 2003 </option>
                		<option value="2002"> 2002 </option>
                		<option value="2001"> 2001 </option>
                		<option value="2000"> 2000 </option>
                		<option value="1999"> 1999 </option>
                		<option value="1998"> 1998 </option>
                		<option value="1997"> 1997 </option>
                		<option value="1996"> 1996 </option>
                		<option value="1995"> 1995 </option>
                		<option value="1994"> 1994 </option>
                		<option value="1993"> 1993 </option>
                		<option value="1992"> 1992 </option>
                		<option value="1991"> 1991 </option>
                		<option value="1990"> 1990 </option>
                		<option value="1989"> 1989 </option>
                		<option value="1988"> 1988 </option>
                		<option value="1987"> 1987 </option>
                		<option value="1986"> 1986 </option>
                		<option value="1985"> 1985 </option>
                		<option value="1984"> 1984 </option>
                		<option value="1983"> 1983 </option>
                		<option value="1982"> 1982 </option>
                		<option value="1981"> 1981 </option>
                		<option value="1980"> 1980 </option>
                		<option value="1979"> 1979 </option>
                		<option value="1978"> 1978 </option>
                		<option value="1977"> 1977 </option>
                		<option value="1976"> 1976 </option>
                		<option value="1975"> 1975 </option>
                		<option value="1974"> 1974 </option>
                		<option value="1973"> 1973 </option>
                		<option value="1972"> 1972 </option>
                		<option value="1971"> 1971 </option>
                		<option value="1970"> 1970 </option>
                		<option value="1969"> 1969 </option>
                		<option value="1968"> 1968 </option>
                		<option value="1967"> 1967 </option>
                		<option value="1966"> 1966 </option>
                		<option value="1965"> 1965 </option>
                		<option value="1964"> 1964 </option>
                		<option value="1963"> 1963 </option>
                		<option value="1962"> 1962 </option>
                		<option value="1961"> 1961 </option>
                		<option value="1960"> 1960 </option>
                		<option value="1959"> 1959 </option>
                		<option value="1958"> 1958 </option>
                		<option value="1957"> 1957 </option>
                		<option value="1956"> 1956 </option>
                		<option value="1955"> 1955 </option>
                		<option value="1954"> 1954 </option>
                		<option value="1953"> 1953 </option>
                		<option value="1952"> 1952 </option>
                		<option value="1951"> 1951 </option>
                		<option value="1950"> 1950 </option>
                		<option value="1949"> 1949 </option>
                		<option value="1948"> 1948 </option>
                		<option value="1947"> 1947 </option>
                		<option value="1946"> 1946 </option>
                		<option value="1945"> 1945 </option>
                		<option value="1944"> 1944 </option>
                		<option value="1943"> 1943 </option>
                		<option value="1942"> 1942 </option>
                		<option value="1941"> 1941 </option>
                		<option value="1940"> 1940 </option>
                		<option value="1939"> 1939 </option>
                		<option value="1938"> 1938 </option>
                		<option value="1937"> 1937 </option>
                		<option value="1936"> 1936 </option>
                		<option value="1935"> 1935 </option>
                		<option value="1934"> 1934 </option>
                		<option value="1933"> 1933 </option>
                		<option value="1932"> 1932 </option>
                		<option value="1931"> 1931 </option>
                		<option value="1930"> 1930 </option>
                		<option value="1929"> 1929 </option>
                		<option value="1928"> 1928 </option>
                		<option value="1927"> 1927 </option>
                		<option value="1926"> 1926 </option>
                		<option value="1925"> 1925 </option>
                		<option value="1924"> 1924 </option>
                		<option value="1923"> 1923 </option>
                		<option value="1922"> 1922 </option>
                		<option value="1921"> 1921 </option>
                		<option value="1920"> 1920 </option>
					</select>
				</div>
				</div>
				  <div class="form-group">
					<label for="inputEmail4">Email</label>
					<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				  </div>
				  <div class="form-group">
					<label>Phone Number</label>
					<input type="tel" class="form-control">
				  </div>
				<div class="form-group">
				  <label for="inputAddress">Address</label>
				  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
				</div>
				<div class="form-group">
				  <label for="inputAddress2">Address 2</label>
				  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
				</div>
				<div class="form-row">
				  <div class="form-group col-md-6">
					<label for="inputCity">City</label>
					<input type="text" class="form-control" id="inputCity">
				  </div>
				  <div class="form-group col-md-4">
					<label for="inputState">State</label>
					<select id="inputState" class="form-control">
					  <option selected>Choose...</option>
					  <option>...</option>
					</select>
				  </div>
				  <div class="form-group col-md-2">
					<label for="inputZip">Zip</label>
					<input type="text" class="form-control" id="inputZip">
				  </div>
				</div>
				<div class="form-group">
				  <div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck">
					<label class="form-check-label" for="gridCheck">
					  Check me out
					</label>
				  </div>
				</div>
				<button type="submit" class="btn btn-primary">Sign in</button>
			  </form>
			{{-- <form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="last-name" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="first-name">Date of Birth of Applicant</label>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<select class="input100" name="month[]">
						<option selected></option>
						<option value="January">January</option>
						<option value="February">February</option>
						<option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
					</select>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<select class="input100" name="month[]">
						<option selected></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send Message
					</button>
				</div>
			</form> --}}
		</div>
	</div>


	@include('includes.footer')
	<div id="dropDownSelect1"></div>
	<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<script type="text/javascript">
particlesJS("particles-js", {"particles":{"number":{"value":60,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},},"opacity":{"value":0.25,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":true,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.3,"width":1},"move":{"enable":true,"speed":3,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.js" integrity="sha512-BgV3bZfMmUklIZI+dP0SILdmQ0RBY2gxegFFyfgo4Ui56WhKF4Pny9LsV/l96jxDDA+2w47zAXA4IyHo2UT/Qg==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js" integrity="sha512-jq8sZI0I9Og0nnZ+CfJRnUzNSDKxr/5Bvha5bn7AHzTnRyxUfpUArMzfH++mwE/hb2efOo1gCAgI+1RMzf8F7g==" crossorigin="anonymous"></script> --}}
<!--===============================================================================================-->
	<script src="{{url('assets/inquiry/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/inquiry/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/inquiry/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{url('assets/inquiry/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/inquiry/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="{{url('assets/inquiry/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{url('assets/inquiry/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/inquiry/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/inquiry/js/main.js')}}"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
