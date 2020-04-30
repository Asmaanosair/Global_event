<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>GLOBAL EVENTS</title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>



    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('site/assets/img/favicon.ico')}}"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="{{asset('site/assets/img/favicon.ico')}}"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('site/assets/img/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('site/assets/img/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('site/assets/img/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('site/assets/img/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('site/assets/img/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('site/assets/img/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('site/assets/img/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('site/assets/img/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('site/assets/img/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('site/assets/img/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('site/assets/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('site/assets/img/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('site/assets/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('site/assets/img/favicon/manifest.json')}}">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/libs/bootstrap/css/bootstrap.min.css')}}" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('site/assets/libs/fontawesome/css/font-awesome.min.css')}}" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('site/assets/libs/maginificpopup/magnific-popup.css')}}" media="all"/>

    <!-- Time Circle -->
    <link rel="stylesheet" href="{{asset('site/assets/libs/timer/TimeCircles.css')}}" media="all"/>

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/libs/owlcarousel/owl.carousel.min.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('site/assets/libs/owlcarousel/owl.theme.default.min.css')}}" media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cRaleway:300,400,400i,500,600,700,900"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="{{asset('site/assets/css/style-default.min.css')}}" media="all"/>

    <!-- MODERNIZER CSS  -->
    <script src="{{asset('site/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="home">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="lgx-container ">
    <!-- ***  ADD YOUR SITE CONTENT HERE *** -->


    <!--HEADER-->
    <header>
        <div id="lgx-header" class="lgx-header">
            <div class="lgx-header-position lgx-header-position-white lgx-header-position-fixed "> <!--lgx-header-position-fixed lgx-header-position-white lgx-header-fixed-container lgx-header-fixed-container-gap lgx-header-position-white-->
                <div class="lgx-container"> <!--lgx-container-fluid-->
                    <nav class="navbar navbar-default lgx-navbar">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="lgx-logo">
                                <a href="index.html" class="lgx-scroll">
                                    <img src="{{asset('img/'.$con->logo)}}" alt="Eventhunt Logo"/>
                                </a>
                            </div>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <div class="lgx-nav-right navbar-right">
                                <div class="lgx-cart-area">
                                    <a class="lgx-btn lgx-btn-red" href="{{url('/Contact')}}">Contact Us</a>
                                </div>
                            </div>
                            <ul class="nav navbar-nav lgx-nav navbar-right">
                                <li><a href="{{url('/')}}" class="active">Home</a><li>
                                <li><a class="lgx-scroll" href="{{url('/About')}}">About</a><li>
                                <li>
                                    <a href="{{url('/Our_Services')}}" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                                    <ul class="dropdown-menu multi-level">
                                        @foreach($serve as $row)
                                        <li><a href="{{url('Service/'.$row->id.'_'.str_replace(' ', '_',$row->title))}}">{{$row->title}}</a></li>

                                            @endforeach

                                    </ul>
                                <li>
                                <li><a class="lgx-scroll" href="{{url('/Events')}}">Events</a></li>
                                <li><a class="lgx-scroll" href="{{url('/Gallery')}}">Activity gellary</a></li>
                                <li><a class="lgx-scroll" href="global-event-profile.pdf">Company Profile</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </nav>
                </div>
                <!-- //.CONTAINER -->
            </div>
        </div>
    </header>
    <!--HEADER END-->





@yield("content")















<!--FOOTER-->
    <footer>
        <div id="lgx-footer" class="lgx-footer lgx-footer-black"> <!--lgx-footer-black-->
            <div class="lgx-inner-footer">
                <div class="container">
                    <div class="lgx-footer-area">
                        <div class="lgx-footer-single">
                            <a class="logo" href="{{url('/')}}"><img src="{{asset('img/'.$con->logo)}}" alt="Logo" style="width: 85%;"></a>
                        </div> <!--//footer-area-->
                        <div class="lgx-footer-single">
                            <h3 class="footer-title">Quik links </h3>
                            <ul class="nav navbar-nav lgx-nav navbar-right">
                                <li><a href="{{url('/')}}" class="active">Home</a><li>
                                <li><a href="{{url('/About')}}">About</a><li>
                                <li>
                                    <a href="{{url('/Our_Services')}}" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                                    <ul class="dropdown-menu multi-level">


                                        @foreach($serve as $row)
                                            <li><a href="{{url('Service/'.$row->id.'_'.str_replace(' ', '_',$row->title))}}">{{$row->title}}</a></li>

                                        @endforeach

                                    </ul>
                                <li>
                                <li><a class="lgx-scroll" href="{{url('/Events')}}">Events</a></li>
                                <li><a class="lgx-scroll" href="{{url('/Gallery')}}">Acitivty Gellary</a></li>
                                <li><a class="lgx-scroll" href="{{url('/Contact')}}">Contact</a></li>
                            </ul>
                        </div>
                        <div class="lgx-footer-single">
                            <h3 class="footer-title">Social Connection</h3>
                            <p class="text">
                                You should connect social area <br> for Any update
                            </p>
                            <ul class="list-inline lgx-social-footer">
                                <li><a href="{{$con->fb}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="{{$con->tw}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="{{$con->insta}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="{{$con->yt}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <!-- Modal-->
                    <div id="lgx-modal-map" class="modal fade lgx-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="lgxmapcanvas map-canvas-default" id="map_canvas"> </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- //.Modal-->

                    <div class="lgx-footer-bottom">
                        <div class="lgx-copyright">
                            <p> <span>©</span> 2019 Global Event is powered by <a href="http://www.knocktarget.com/">Knock Target</a></p>
                        </div>
                    </div>

                </div>
                <!-- //.CONTAINER -->
            </div>
            <!-- //.footer Middle -->
        </div>
    </footer>
    <!--FOOTER END-->


</div>
<!--//.LGX SITE CONTAINER-->
<!-- *** ADD YOUR SITE SCRIPT HERE *** -->
<!-- JQUERY  -->
<script src="{{asset('site/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

<!-- BOOTSTRAP JS  -->
<script src="{{asset('site/assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Smooth Scroll  -->
<script src="{{asset('site/assets/libs/jquery.smooth-scroll.js')}}"></script>

<!-- SKILLS SCRIPT  -->
<script src="{{asset('site/assets/libs/jquery.validate.js')}}"></script>

<!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvRGGtL6OrpP5xVMxq_0NgiMiRhm3ycI"></script>

<!-- CUSTOM GOOGLE MAP -->
<script type="text/javascript" src="{{asset('site/assets/libs/gmap/jquery.googlemap.js')}}"></script>

<!-- adding magnific popup js library -->
<script type="text/javascript" src="{{asset('site/assets/libs/maginificpopup/jquery.magnific-popup.min.js')}}"></script>

<!-- Owl Carousel  -->
<script src="{{asset('site/assets/libs/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- COUNTDOWN   -->
<script src="{{asset('site/assets/libs/countdown.js')}}"></script>
<script src="{{asset('site/assets/libs/timer/TimeCircles.js')}}"></script>

<!-- Counter JS -->
<script src="{{asset('site/assets/libs/waypoints.min.js')}}"></script>
<script src="{{asset('site/assets/libs/counterup/jquery.counterup.min.js')}}"></script>

<!-- SMOTH SCROLL -->
<script src="{{asset('site/assets/libs/jquery.smooth-scroll.min.js')}}"></script>
<script src="{{asset('site/assets/libs/jquery.easing.min.js')}}"></script>

<!-- type js -->
<script src="{{asset('site/assets/libs/typed/typed.min.js')}}"></script>

<!-- header parallax js -->
<script src="{{asset('site/assets/libs/header-parallax.js')}}"></script>

<!-- instafeed js -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>-->
<script src="{{asset('site/assets/libs/instafeed.min.js')}}"></script>

<!-- CUSTOM SCRIPT  -->
<script src="{{asset('site/assets/js/custom.script.js')}}"></script>







</body>
</html>
