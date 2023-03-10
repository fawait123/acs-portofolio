<!DOCTYPE html>
<html lang="en">

<head>
    @stack('customhtml')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon" />

    <!-- josefin sans font -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- heebo font -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <title>ACS | Agile Code Studio.</title>

    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/all.min.css">

    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('assets') }}/font/flaticon.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">

    <!-- menu -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/menu.css">

    <!-- odometer -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/odometer.css">

    <!-- venobox -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/venobox.css">

    <!-- swiper-slider -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/swiper-bundle.min.css">

    <!-- scroll animation -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">
</head>

<body>
    <!-- start preloader area -->
    <div class="preloader">
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
    <!-- end preloader area -->

    <!-- start top-tp button area -->
    <button class="top-btn">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- end top-tp button area -->

    <!-- start header area -->
    <header>
        <!-- start menubar area -->
        <section class="menubar"
            style="background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(56,163,201,0.9810049019607843) 47%, rgba(113,44,145,1) 100%);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar p-0">
                            <!-- header logo -->
                            <a class="navbar-brand p-0" href="{{ route('welcome') }}">
                                <img src="{{ asset('assets/logo.png') }}" style="width: 80px" alt="Logo" />
                            </a>
                            <div class="header-menu position-static">
                                <ul class="menu">
                                    @include('layouts.navigation')
                                </ul>
                            </div>
                            <div class="right-part">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="flaticon-loupe"></i></button>
                                    </li>
                                    @if (auth('canvas')->user())
                                        <li><a href="{{ route('canvas') }}">Home</a></li>
                                    @else
                                        <li><a href="{{ route('canvas.login') }}">Login</a></li>
                                    @endif
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- end menubar area -->
    </header>
    <!-- end header area -->

    @yield('content')

    <!-- start footer area -->
    <footer class="footer" data-img="{{ asset('assets') }}/images/footer-bg.jpg">
        <!-- start footer-top area -->
        <section class="footer-top pt-100 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="content">
                            <div class="title">
                                <h5>Get in Touch</h5>
                            </div>
                            <p class="desc">Lorem ipsum dolor sit am co adipisicing elit, sed do eiusmod tempor</p>
                            <ul class="address">
                                <li class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>24/A New California</p>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fas fa-phone-alt"></i>
                                    <p>+1 800 123 4567</p>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="far fa-envelope"></i>
                                    <p>demo@example.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="content">
                            <div class="title">
                                <h5>quick links</h5>
                            </div>
                            <ul class="navigation">
                                <li><a href="index.html">home</a></li>
                                <li><a href="service.html">service</a></li>
                                <li><a href="team.html">our team</a></li>
                                <li><a href="#portfolio" class="scroll-down">project</a></li>
                                <li><a href="service-detail.html">android</a></li>
                                <li><a href="service-detail.html">development</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="content">
                            <div class="title">
                                <h5>follow us</h5>
                            </div>
                            <ul class="follow">
                                <li><a href="#!">facebook</a></li>
                                <li><a href="#!">twitter</a></li>
                                <li><a href="#!">google+</a></li>
                                <li><a href="#!">youtube</a></li>
                                <li><a href="#!">instagram</a></li>
                                <li><a href="#!">dribbble</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="content">
                            <div class="title">
                                <h5>subscribe</h5>
                            </div>
                            <p>Lorem ipsum dolor si consectetur adipisicing elit, sed eiusmotempor incididunt ut labore
                                et</p>
                            <div class="form-area">
                                <input type="email" placeholder="your email" class="inputs">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </div>
                            <ul class="d-flex social">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer-top area -->

        <!-- start footer-bottom area -->
        <section class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bg">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p>Copyright &copy; 2021 Al Right Reserved</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="d-flex justify-content-end">
                                        @include('layouts.navigation')
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer-bottom area -->
    </footer>
    <!-- end footer area -->

    <!-- start modal area -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">search here</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="search-area">
                        <input type="search" placeholder="search..." class="inputs">
                        <button class="search-btn"><i class="flaticon-loupe"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal area -->

    <!-- start custom cursor area -->
    <div class="custom-cursor">
        <div id="cursor">
            <div id="cursor-ball"></div>
        </div>
    </div>
    <!-- end custom cursor area -->

    <!-- jquery -->
    <script src="{{ asset('assets') }}/plugins/jquery-3.4.1.min.js"></script>

    <!-- bootstrap -->
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>

    <!-- menu -->
    <script src="{{ asset('assets') }}/plugins/menu.min.js"></script>

    <!-- odometer -->
    <script src="{{ asset('assets') }}/plugins/appear.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/odometer.min.js"></script>

    <!-- mixitup -->
    <script src="{{ asset('assets') }}/plugins/mixitup.min.js"></script>

    <!-- directional hover -->
    <script src="{{ asset('assets') }}/plugins/jquery.directional-hover.min.js"></script>

    <!-- cursor move -->
    <script src="{{ asset('assets') }}/plugins/tweenmax.js"></script>

    <!-- venobox -->
    <script src="{{ asset('assets') }}/plugins/venobox.min.js"></script>

    <!-- swiper-slider -->
    <script src="{{ asset('assets') }}/plugins/swiper-bundle.min.js"></script>

    <!-- wow js -->
    <script src="{{ asset('assets') }}/plugins/wow.min.js"></script>

    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>

    <!-- script -->
    <script src="{{ asset('assets') }}/js/script.js"></script>

    @stack('customjs')
</body>

</html>
