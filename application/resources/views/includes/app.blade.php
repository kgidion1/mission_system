<?php /**
 * Created by PhpStorm.
 * User: TO-002
 * Date: 16/04/2017
 * Time: 2:32 AM
 */ ?>

<!DOCTYPE html>
<html lang="en" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content=".">
    <meta name="keywords" content="">
    <meta name="author" content="MISSION MANAGEMENT SYSTEM">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mission Mgnt - Home</title>
    <link rel="apple-touch-icon" sizes="60x60" href="{!! asset('app-assets/images/ico/apple-icon-60.png') !!}">
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('app-assets/images/ico/apple-icon-76.png') !!}">
    <link rel="apple-touch-icon" sizes="120x120" href="{!! asset('app-assets/images/ico/apple-icon-120.png') !!}">
    <link rel="apple-touch-icon" sizes="152x152" href="{!! asset('app-assets/images/ico/apple-icon-152.png') !!}">
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('images.png') !!}">
    <link rel="shortcut icon" type="image/png" href="{!! asset('images.png') !!}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{!! asset('css/bootstrap-datepicker3.css') !!}" />
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/css/bootstrap.min.css') !!}">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/fonts/icomoon.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/fonts/flag-icon-css/css/flag-icon.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/vendors/css/sliders/slick/slick.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/vendors/css/extensions/pace.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/vendors/css/forms/icheck/icheck.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/custom.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/vendors/css/charts/morris.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/vendors/css/extensions/unslider.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/vendors/css/weather-icons/climacons.min.css') !!}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/css/bootstrap-extended.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/css/app.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/css/colors.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/assets/css/style.css') !!}">
    <!-- END ROBUST CSS-->

    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/css/core/menu/menu-types/horizontal-top-icon-menu.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/css/core/menu/menu-types/vertical-overlay-menu.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/css/core/colors/palette-climacon.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app-assets/css/pages/users.min.css') !!}">
    <!-- END Page Level CSS-->

    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/bower_components/sweetalert2/dist/sweetalert2.min.css') !!}">
    <!-- for IE support -->
    <script src="{!! asset('js/bower_components/es6-promise/es6-promise.auto.min.js') !!}"></script>
    <script src="{!! asset('js/bower_components/sweetalert2/dist/sweetalert2.min.js') !!}"></script>

    <!-- END Custom CSS-->

    <style type="text/css">
        .nav li.active a {
            color: #fff !important;
            background: #4A148C !important;
        }
    </style>
</head>
<body data-open="hover" data-menu="horizontal-top-icon-menu" data-col="2-columns" class="horizontal-layout horizontal-top-icon-menu 2-columns ">

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu undefined navbar-light fixed-navbar navbar-border">
        <div class="navbar-wrapper">
            <div class="navbar-header" style="background: #8E24AA; height: 4.05rem;">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="navbar-brand nav-link">
                            <img alt="branding logo" src="{!! asset('app-assets/images/logo/robust-logo-light.png') !!}" data-expand="{!! asset('app-assets/images/logo/robust-logo-light.png') !!}" data-collapse="{!! asset('app-assets/images/logo/robust-logo-small.png') !!}" class="brand-logo">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content container-fluid">
                <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link nav-menu-main" href="{{ url('/home') }}"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
                        </li>
                        <li class="nav-item"><a class="nav-link nav-menu-main" href="{{ url('/church/viewChurches') }}"><i class="fa fa-book"></i>Churches</a></li>
                        <li class="nav-item"><a class="nav-link nav-menu-main" href="{{ url('/missioners/viewMissioners') }}"><i class="fa fa-users"></i>Missioners</a></li>
                        <li class="nav-item"><a class="nav-link nav-menu-main" href="{{ url('/users/viewUsers') }}"><i class="fa fa-user"></i>Users</a></li>
                        <li class="dropdown nav-item"><a data-toggle="dropdown" class=" nav-link"></span><i class="fa fa-ellipsis-v"></i> More Features</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Send SMS</a></li>
                                <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Events</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-xs-right">
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else    
                            <li class="dropdown dropdown-user nav-item">
                                <a href="#" data-toggle="dropdown" class="nav-link dropdown-user-link">
                                    <span class="avatar avatar-online">
                                        <img src="{!! asset('app-assets/images/portrait/small/avatar-s-10.png') !!}" alt="avatar"><i></i>
                                    </span>
                                    <span class="user-name">{{ Auth::user()->username }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ url('/logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        @endif    
                    </ul>
                </div>
            </div>
        </div>
    </nav>

        @yield('content')



    <footer class="footer undefined footer-dark">
        <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">MISSION MGNT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Powered By : <a href="#">Hive Technologies Ltd</a></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <!-- build:js app-assets/js/vendors.min.js-->
    <!-- <script src="app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script> -->
    <script type="text/javascript" src="{!! asset('js/jquery.js') !!}" ></script>
    <script src="{!! asset('js/app-assets/js/core/libraries/bootstrap.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/app-assets/vendors/js/ui/tether.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/app-assets/vendors/js/ui/unison.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/app-assets/vendors/js/ui/jquery.matchHeight-min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/app-assets/vendors/js/extensions/pace.min.js') !!}" type="text/javascript"></script>
    <!-- /build-->
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script type="text/javascript" src="{!! asset('js/app-assets/vendors/js/ui/jquery.sticky.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/app-assets/vendors/js/charts/jquery.sparkline.min.js') !!}"></script>
    <!-- <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po" type="text/javascript"></script> -->
    <script src="{!! asset('js/app-assets/vendors/js/charts/gmaps.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/app-assets/vendors/js/forms/icheck/icheck.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/app-assets/vendors/js/extensions/jquery.knob.min.js') !!}" type="text/javascript"></script>

    <script src="{!! asset('js/app-assets/vendors/js/extensions/unslider-min.js') !!}" type="text/javascript"></script>

    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <!-- build:js app-assets/js/app.min.js-->
    <script src="{!! asset('js/app-assets/js/core/app-menu.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/app-assets/js/core/app.js') !!}" type="text/javascript"></script>

    <!-- /build-->
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->

    <script src="{!! asset('js/app-assets/js/scripts/pages/dashboard-fitness.min.js') !!}" type="text/javascript"></script>
    <script type="text/javascript" src="{!! asset('js/bootstrap-datepicker.min.js') !!}" ></script>


    <!-- END PAGE LEVEL JS-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-96096445-1', 'auto');
        ga('send', 'pageview');

    </script>

    <script type="text/javascript">
        $('.datepicker').datepicker({
            startDate: '-3d'
        });
    </script>
</body>
</html>