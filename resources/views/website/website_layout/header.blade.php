<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>The Whole Way Round</title>
    <link rel="icon" href="website/img/logo-tranparent.png" type="image/png">

    <meta name="keywords" content="Ride Global"/>
    <meta name="description" content="Ride Global - The Whole Way Round">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link href="website/img/logo-tranparent.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/website/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/website/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/website/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="/website/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/website/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/website/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/website/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/website/css/theme.css">
    <link rel="stylesheet" href="/website/css/theme-elements.css">
    <link rel="stylesheet" href="/website/css/theme-blog.css">
    <link rel="stylesheet" href="/website/css/theme-shop.css">

    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" href="/website/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="/website/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="/website/vendor/rs-plugin/css/navigation.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="/website/css/demos/demo-event.css">
    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="/website/css/skins/skin-event.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/website/css/custom.css">

    <!-- Head Libs -->
    <script src="/website/vendor/modernizr/modernizr.min.js"></script>
    <style>
        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown:hover .dropdown-content {display: block;}

    </style>
</head>

<body data-target="#header" data-spy="scroll" data-offset="100">
<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 100}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="Porto" width="102" height="100" src="/website/img/logo-white.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link font-weight-semibold" data-hash href="/">
                                                Home
                                            </a>
                                        </li>
										<li>
                                            <a class="nav-link font-weight-semibold" data-hash data-hash-offset="80" href="about-us">
                                                About Us
                                            </a>
                                        </li>
										<li>
                                            <a class="nav-link font-weight-semibold" data-hash data-hash-offset="80" href="rides">
                                                Rides
                                            </a>
                                        </li>
										 <li>
                                            <a class="nav-link font-weight-semibold" data-hash data-hash-offset="80" href="team">
                                                Our Team
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link font-weight-semibold" data-hash data-hash-offset="80" href="causes">
                                                Causes
                                            </a>
                                        </li>

                                        <li>
                                            <a class="nav-link font-weight-semibold" data-hash data-hash-offset="80" href="contact-us">
                                                Contact Us
                                            </a>
                                        </li>
{{--                                        @dd($result)--}}
{{--                                        @if($result->is_login)--}}
                                        @if(session()->has('user'))
                                            <li>
                                                <a class="nav-link font-weight-semibold" data-hash data-hash-offset="80" href="rider-logout">
                                                    Logout
                                                </a>
                                            </li>
                                        @else
                                            <li class="dropdown">
                                                <a class="nav-link font-weight-semibold dropbtn" data-hash data-hash-offset="80" href="#">
                                                    Login
                                                </a>
                                                <div class="dropdown-content">
                                                    <a href="/rider-login">Rider</a>
                                                    <a href="/login">Host</a>

                                                </div>
                                            </li>
                                            <li>
                                                <a class="nav-link font-weight-semibold" data-hash data-hash-offset="80" href="host">
                                                    Host A Ride
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link font-weight-semibold" data-hash data-hash-offset="80" href="rider-register">
                                                    Join A Ride
                                                </a>
                                            </li>
                                        @endif




{{--                                        <li>--}}
{{--                                            <a class="nav-link font-weight-semibold" data-hash data-hash-offset="80" href="host">--}}
{{--                                                My Rides--}}
{{--                                            </a>--}}
{{--                                        </li>--}}


                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
	<main role="main">

<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
        <div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
            <ul>

                <li data-transition="fade">
                    <img src="/website/img/img-3.png"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption custom-font-size-1 text-color-light font-weight-semibold text-uppercase"
                         data-x="['left','left','left','left']"
                         data-hoffset="['80','80','80','80']"
                         data-y="['center','center','center','center']"
                         data-voffset="['-100','-100','-100','-50']"
                         data-start="500"
                         data-paddingleft="['0', '0', '0', '0']"
                         style="z-index: 5; font-size: 18px;"
                         data-transform_in="y:[-300%];opacity:0;s:500;"><span style="font-size:1.3em">@yield('country') countries & @yield('riders') members</span></div>

                     <h1 class="tp-caption text-color-light font-weight-extra-bold text-uppercase"
                        data-x="['left','left','left','left']"
                        data-hoffset="['75','75','75','75']"
                        data-y="['center','center','center','center']"
                        data-voffset="['-45','-45','-45','5']"
                        data-fontsize="['80', '80', '70', '60']"
                        data-start="800"
                        data-paddingleft="['0', '0', '0', '0']"
                        style="z-index: 5; font-size: 80px;letter-spacing:0px"
                        data-transform_in="y:[-300%];opacity:0;s:500;">RIDE GLOBAL</h1>

				<h5 class="tp-caption text-color-light text-uppercase"
                        data-x="['left','left','left','left']"
                        data-hoffset="['75','75','75','75']"
                        data-y="['center','center','center','center']"
                        data-voffset="['20','10','10','50']"
                        data-fontsize="['25', '25', '25', '25']"
                        data-start="800"
                        data-paddingleft="['0', '0', '0', '0']"
                        style="z-index: 5; font-size: 80px; letter-spacing:0px"
                        data-transform_in="y:[-300%];opacity:0;s:500;">Sunday September 5, 2021</h5>

                    <div class="tp-caption text-color-light"
                         data-x="['left','left','left','left']"
                         data-hoffset="['75','75','75','75']"
                         data-y="['center','center','center','center']"
                         data-voffset="['60','40','40','95']"
                         data-start="1500"
                         data-paddingleft="['0', '0', '0', '0']"
                         data-fontsize="26"
                         style="z-index: 5;"
                         data-transform_in="y:[-300%];opacity:0;s:500;"><span> In Memory Of Those Lost Through Pandemic</span></div>

                    <div class="tp-caption text-uppercase"
                         data-x="['left','left','left','left']"
                         data-hoffset="['80','80','80','80']"
                         data-y="['center','center','center','center']"
                         data-voffset="['100','70','70','140']"
                         data-start="1500"
                         data-paddingleft="['0', '0', '0', '0']"
                         data-fontsize="['12', '12', '12', '18']"
                         data-lineheight="['12', '12', '12', '22']"
                         style="z-index: 5; color: #6acdca;"
                         data-transform_in="y:[-300%];opacity:0;s:500;"><i class="fas fa-map-marker-alt"></i><span style="font-size:1.3em !important"> New Zealand -to- Alaska</span></div>
                @if(session()->has('user'))

                @else
                        <div class="tp-caption text-uppercase"
                             data-x="['left','left','left','left']"
                             data-hoffset="['50','50','50','50']"
                             data-y="['center','center','center','center']"
                             data-voffset="['160','160','160','220']"
                             data-start="1500"
                             data-paddingleft="['0', '0', '0', '0']"
                             data-fontsize="['12', '12', '12', '18']"
                             data-lineheight="['12', '12', '12', '22']"
                             style="z-index: 5; color: #6acdca;"
                             data-transform_in="y:[-300%];opacity:0;s:500;">
                            <a   class="btn btn-primary font-weight-bold text-color-light text-uppercase outline-none ml-4" href="/host" style="font-size:1.4em">HOST A RIDE</a>
                            <a  class="btn btn-primary font-weight-bold text-color-light text-uppercase outline-none ml-4" href="/rider-register" style="font-size:1.4em">JOIN A RIDE</a>

                        </div>
                @endif


                    <!-- <div class="tp-caption text-uppercase"
                         data-x="['right','right','right','right']"
                         data-hoffset="['80','80','80','80']"
                         data-y="['center','center','center','center']"
                         data-voffset="['-40','-40','-40','10']"
                         data-start="1500"
                         style="z-index: 5;"
                         data-transform_in="opacity:0;s:500;">

                        <a href="#" class="play-video-custom custom-rev-next">
                            <img src="img/demos/event/play-icon.png" class="img-fluid" width="90" height="90" />
                        </a>

                    </div> -->

                </li>
                <li data-transition="fade">
                    <img src="/website/video/event.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="rs-background-video-layer"
                         data-forcerewind="on"
                         data-volume="mute"
                         data-videowidth="100%"
                         data-videoheight="100%"
                         data-videomp4="video/event.mp4"
                         data-videopreload="preload"
                         data-videoloop="none"
                         data-forceCover="1"
                         data-aspectratio="16:9"
                         data-autoplay="true"
                         data-autoplayonlyfirsttime="false"
                         data-nextslideatend="true">
                    </div>

                    <div class="tp-dottedoverlay tp-opacity-overlay"></div>

                </li>
            </ul>
        </div>
    </div>

