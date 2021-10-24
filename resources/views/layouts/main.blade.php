<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Techro is a modern and fully responsive Template by WebThemez.">
    <meta name="author" content="webThemez.com">
    <title> TPQ Banyu Urip | {{ $title }}</title>
    <link rel="favicon" href="assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styles1.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
    
</head>


<body>
    
    @include('partials.navbar')

    <div class="container">
        @yield('container')
    </div>

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="assets/js/modernizr-latest.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.cslider.js"></script>
    <script src="assets/js/custom.js"></script>

    <footer id="footer">

        <div class="footer1">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 panel contact">
                        <h3 class="panel-title">Info Kontak</h4>
						<div class="panel-body">
                            <p>Hubungi kami melalui</p>
                            <ul>
                                <li><i class="fa fa-phone"></i>  081-457-378-273</li>
                                <li><i class="fa fa-envelope"></i>  tpqbanyuurip@gmail.com</a></li>
                                <li><i class="fa fa-flag"></i>  Jl. Raya Banyu Urip No.888 Surabaya</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 panel">
                        <h3 class="panel-title">Ikuti Kami</h3>
                        <div class="panel-body">
                            <p class="follow-me-icons">
                                <a href=""><i class="fa fa-twitter fa-2"></i></a>
                                <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                                <a href=""><i class="fa fa-github fa-2"></i></a>
                                <a href=""><i class="fa fa-facebook fa-2"></i></a>
                                <a href=""><i class="fa fa-youtube fa-2"></i></a>
                                <a href=""><i class="fa fa-pinterest fa-2"></i></a>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /row of panels -->
            </div>
        </div>

        <div class="footer2">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="simplenav">
                                <a href="{{ url('/')}}">Beranda</a> | 
								<a href="{{ url('/about')}}">Tentang</a> |
								<a href="{{ url('/login')}}">Login</a> 
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="text-right">
                                Copyright &copy;TPQ Banyu Urip 2021 All rights reserved.</a>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /row of panels -->
            </div>
        </div>

    </footer>

</body>
</html>