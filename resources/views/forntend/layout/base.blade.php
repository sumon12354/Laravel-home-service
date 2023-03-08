<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Demandium - Online Service Provider for your House Needs</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('forntend') }}/assets/img/favicon.png">
    <link href="{{ asset('forntend') }}/assets/css/style.css" rel="stylesheet" media="screen">
    <link href="{{ asset('forntend') }}/assets/css/chblue.css" rel="stylesheet" media="screen">
    <link href="{{ asset('forntend') }}/assets/css/theme-responsive.css" rel="stylesheet" media="screen">
    <link href="{{ asset('forntend') }}/assets/css/dtb/jquery.dataTables.min.css" rel="stylesheet" media="screen">
    <link href="{{ asset('forntend') }}/assets/css/select2.min.css" rel="stylesheet" media="screen">
    <link href="{{ asset('forntend') }}/assets/css/toastr.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/jquery.js"></script>
    <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/jquery-ui.1.10.4.min.js"></script>
    <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/toastr.min.js"></script>
    <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/modernizr.js"></script>
</head>

<body>
    <div id="layout">
        <div class="info-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-left">
                            <li><a href="tel:+880 1755883434"><i class="fa fa-phone"></i> +880 1755883434</a></li>
                            <li><a href="mailto:contact@demandium.in"><i class="fa fa-envelope"></i>
                                    contact@demandium.in</a></li>
                        </ul>
                        <ul class="visible-xs visible-sm">
                            <li class="text-left"><a href="tel:+880 1755883434"><i class="fa fa-phone"></i>
                                    +880 1755883434</a></li>
                            <li class="text-right"><a href="index.php/changelocation.html"><i
                                        class="fa fa-map-marker"></i> Dhaka, Bangladesh</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-right">
                            <li><i class="fa fa-comment"></i> Live Chat</li>
                            <li><a href="index.php/changelocation.html"><i class="fa fa-map-marker"></i> Dhaka,
                                    Bangladesh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="header" class="header-v3">
            <nav class="flat-mega-menu">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <li class="title">
                        <a href="{{ route('forntend.home') }}"><img src="{{asset('forntend/demand.png')}}"></a>
                    </li>
                    <li> <a href="{{ route('servicescategory') }}">Services Category</a>

                    </li>
                    <li> <a href="{{ route('aboutus') }}">About Us</a>
                    </li>
                    <li> <a href="{{ route('privacypoly') }}">Privacy Policy</a>
                    </li>       
                    <li> <a href="{{ route('teramcondition') }}">Terms & Conditions</a>
                    </li>
                    <li> <a href="{{ route('contactus') }}">Contact Us</a>
                    </li>
                    <li> <a href="{{ route('alladdtocart') }}">Book to Cart</a>

                    </li>


                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->utype === 'ADM')
                                <li class="login-form"> <a href="#" title="Admin">My Account (Admin)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{ route('admin.admindashboard') }}">Dasboard</a></li>
                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            @elseif(Auth::user()->utype === 'SVP')
                                <li class="login-form"> <a href="#" title="S Provider">My Account (S Provider)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{ route('sprovider.dashboard') }}">Dasboard</a></li>
                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li class="login-form"> <a href="#" title="Customer">My Account (Customer)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{ route('customer.dashboard') }}">Dasboard</a></li>
                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                            <form id="logout-form" method="post" action="{{ route('logout') }}" style="display: none">
                                @csrf
                            </form>
                        @else
                            <li class="login-form"> <a href="{{ route('register') }}" title="Register">Register</a></li>
                            <li class="login-form"> <a href="{{ route('login') }}" title="Login">Login</a></li>
                        @endif

                        @endif
                        <li class="search-bar">
                        </li>
                    </ul>
                </nav>
            </header>

            @yield('base-content')

            <footer id="footer" class="footer-v1">
                <div class="container">
                    <div class="row visible-md visible-lg">
                        <div class="col-md-3 col-xs-6 col-sm-6">
                            <h3>APPLIANCE SERVICES </h3>
                            <ul>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/12.html">TV</a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/14.html">Geyser</a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/13.html">Refrigerator</a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/21.html">Washing Machine</a>
                                </li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/22.html">Microwave Oven</a>
                                </li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/10.html">Water Purifier</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6">
                            <h3>AC SERVICES </h3>
                            <ul>
                                <li><i class="fa fa-check"></i> <a
                                        href="service-details/ac-installation.html">Installation</a></li>
                                <li><i class="fa fa-check"></i> <a
                                        href="service-details/ac-uninstallation.html">Uninstallation</a></li>
                                <li><i class="fa fa-check"></i> <a href="service-details/ac-repair.html">AC Repair</a>
                                </li>
                                <li><i class="fa fa-check"></i> <a href="service-details/ac-gas-refill.html">Gas
                                        Refill</a>
                                </li>
                                <li><i class="fa fa-check"></i> <a href="service-details/ac-wet-servicing.html">Wet
                                        Servicing</a></li>
                                <li><i class="fa fa-check"></i> <a href="service-details/ac-dry-servicing.html">Dry
                                        Servicing </a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6">
                            <h3>HOME NEEDS </h3>
                            <ul>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/19.html">Laundry </a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/4.html">Electrical</a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/8.html">Pest Control </a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/7.html">Carpentry </a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/3.html">Plumbing </a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/20.html">Painting </a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6">
                            <h3>CONTACT US</h3>
                            <ul class="contact_footer">
                                <li class="location">
                                    <i class="fa fa-map-marker"></i> <a href="#"> Dhaka, Bangladesh</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i> <a
                                        href="mailto:contact@surfsidemedia.in">contact@demandium.in</a>
                                </li>
                                <li>
                                    <i class="fa fa-headphones"></i> <a href="tel:+911234567890">+880 1755883434</a>
                                </li>
                            </ul>
                            <h3 style="margin-top: 10px">FOLLOW US</h3>
                            <ul class="social">
                                <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a>
                                </li>
                                <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                                <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row visible-sm visible-xs">
                        <div class="col-md-6">
                            <h3 class="mlist-h">CONTACT US</h3>
                            <ul class="contact_footer mlist">
                                <li class="location">
                                    <i class="fa fa-map-marker"></i> <a href="#">Dhaka, Bangadesh</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i> <a
                                        href="mailto:contact@surfsidemedia.in">contact@demandium.in</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> <a href="tel:+911234567890">+880 1755883434</a>
                                </li>
                            </ul>
                            <ul class="social mlist-h">
                                <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a>
                                </li>
                                <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                                <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-down">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="nav-footer">
                                    <li><a href="{{ route('aboutus') }}">About Us</a> </li>
                                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                                    <li><a href="{{ route('teramcondition') }}">Terms of Use</a></li>
                                    <li><a href="{{ route('privacypoly') }}">Privacy</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <p class="text-xs-center crtext">&copy; 2023 Demandium. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/nav/jquery.sticky.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/totop/jquery.ui.totop.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/accordion/accordion.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/rs-plugin/js/jquery.themepunch.tools.min.js">
        </script>
        <script type="text/javascript"
            src="{{ asset('forntend') }}/assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/maps/gmap3.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/fancybox/jquery.fancybox.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/carousel/carousel.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/filters/jquery.isotope.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/twitter/jquery.tweet.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/flickr/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/theme-options/theme-options.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/theme-options/jquery.cookies.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/bootstrap/bootstrap-slider.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/dtb/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/dtb/jquery.table2excel.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/dtb/script.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/select2.min.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/validation-rule.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/bootstrap3-typeahead.min.js"></script>
        <script type="text/javascript" src="{{ asset('forntend') }}/assets/js/main.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('.tp-banner').show().revolution({
                    dottedOverlay: "none",
                    delay: 5000,
                    startwidth: 1170,
                    startheight: 480,
                    minHeight: 250,
                    navigationType: "none",
                    navigationArrows: "solo",
                    navigationStyle: "preview1"
                });
            });
        </script>
    
</body>

    </html>
