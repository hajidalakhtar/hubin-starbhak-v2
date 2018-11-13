<!doctype html>
<html lang="en">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>STARBHAK | HUBIN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
		{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

		{{-- <script src="{{ asset('assets/css/bootstrap.min.css') }}" ></script> --}}
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> --}}

    <!-- Animation library for notifications   -->
		{{-- <script src="{{ asset('assets/css/animate.min.css') }}" ></script> --}}
		<link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">

    {{-- <link href="assets/css/animate.min.css" rel="stylesheet"/> --}}

    <!--  Light Bootstrap Table core CSS    -->
		{{-- <script src="{{ asset('assets/css/light-bootstrap-dashboard.css?v=1.4.0') }}" ></script> --}}
		<link href="{{ asset('assets/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet">

    {{-- <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/> --}}


    <!--  CSS for Demo Purpose, don't include it in your project     -->
		{{-- <script src="{{ asset('assets/css/demo.css') }}" ></script> --}}
		<link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet">

    {{-- <link href="assets/css/demo.css" rel="stylesheet" /> --}}


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet">

    {{-- <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" /> --}}

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{ asset('assets/img/sidebar-5.jpg') }}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="home" class="simple-text">
                  {{ Auth::user()->name }}
                </a>
            </div>

            <ul class="nav">
							@yield('sidebar')

                {{-- <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Company List</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li> --}}

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
											<li class="nav-item dropdown">
													<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
															{{ Auth::user()->name }} <span class="caret"></span>
													</a>

													<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
															<a class="dropdown-item" href="{{ route('logout') }}"
																 onclick="event.preventDefault();
																							 document.getElementById('logout-form').submit();">
																	{{-- {{ __('Logout') }} --}}
<p class="text-center" style="margin:10px;">Logout</p>
															</a>

															<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																	@csrf
															</form>
													</div>
											</li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
													@yield('content')

                        </div>
                    </div>

            </div>
        </div>



        <footer class="footer">
            <div class="container-fluid text-center">
                   <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.smktarunabhakti.net">STARBHAK</a> V-TEAM
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
		<script src="{{ asset('assets/js/jquery.3.2.1.min.js') }}" ></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}" ></script>

    {{-- <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script> --}}
	{{-- <script src="assets/js/bootstrap.min.js" type="text/javascript"></script> --}}

	<!--  Charts Plugin -->
	<script src="{{ asset('assets/js/chartist.min.js') }}" ></script>

	{{-- <script src="assets/js/chartist.min.js"></script> --}}

    <!--  Notifications Plugin    -->
		<script src="{{ asset('assets/js/bootstrap-notify.js') }}" ></script>

	  {{-- <script src="assets/js/bootstrap-notify.js"></script> --}}

    <!--  Google Maps Plugin    -->

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
		<script src="{{ asset('assets/js/light-bootstrap-dashboard.js?v=1.4.0') }}" ></script>

	{{-- <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script> --}}

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{ asset('assets/js/demo.js') }}" ></script>

	{{-- <script src="assets/js/demo.js"></script> --}}

	<script type="text/javascript">
    	// $(document).ready(function(){

     //    	demo.initChartist();

     //    	$.notify({
     //        	icon: 'pe-7s-gift',
     //        	message: ""

     //        },{
     //            type: 'info',
     //            timer: 4000
     //        });

    	// });
	</script>

</html>
