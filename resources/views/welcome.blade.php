@extends('layouts.app')


@section('content')
    <!-- start banner area -->
    <section class="home1 banner" data-img="{{ asset('assets') }}/images/home1/banner/bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-7 order-1 order-lg-0">
                                <div class="text-area">
                                    <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">We Design
                                        Amazing App Prototypes</h1>
                                    <h1 class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">For Startups
                                    </h1>
                                    <p class="wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">Lorem ipsum
                                        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. enim ad </p>
                                    <ul class="d-flex wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
                                        <li>
                                            <a href="#!">
                                                <img src="{{ asset('assets/appstore.png') }}" style="width: 160px;"
                                                    alt="Apple Store">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <img src="{{ asset('assets/playstore.png') }}" style="width: 160px;"
                                                    alt="Play Store">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 order-0 order-lg-1">
                                <div class="image-area text-end wow fadeInRight" data-wow-delay="0.3s"
                                    data-wow-duration="1s">
                                    <img src="{{ asset('assets/svg/header3.svg') }}" style="width: 580px" alt="Banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner area -->

    <!-- start feature area -->
    <section class="home1 feature p-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                        <h2>apps features</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim to eismud </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                                <div class="icon">
                                    <i class="flaticon-setup"></i>
                                </div>
                                <span>01</span>
                                <h5>social marketing</h5>
                                <p>Lorem ipsum dolor sit amet, co adipisicing elit, sed do eiusmod tempor incididunt uty
                                    labore et dolore magna aliqua. Ut enimd minim veniam, quis nostrud</p>
                                <a href="service-detail.html"><i class="flaticon-arrow-pointing-to-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                <div class="icon">
                                    <i class="flaticon-mobile-app-developing"></i>
                                </div>
                                <span>02</span>
                                <h5>prepare daily report</h5>
                                <p>Lorem ipsum dolor sit amet, co adipisicing elit, sed do eiusmod tempor incididunt uty
                                    labore et dolore magna aliqua. Ut enimd minim veniam, quis nostrud</p>
                                <a href="service-detail.html"><i class="flaticon-arrow-pointing-to-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                                <div class="icon">
                                    <i class="flaticon-technology"></i>
                                </div>
                                <span>03</span>
                                <h5>analysis your data</h5>
                                <p>Lorem ipsum dolor sit amet, co adipisicing elit, sed do eiusmod tempor incididunt uty
                                    labore et dolore magna aliqua. Ut enimd minim veniam, quis nostrud</p>
                                <a href="service-detail.html"><i class="flaticon-arrow-pointing-to-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end feature area -->

    <!-- start counter area -->
    <section class="home1 counter p-100" data-img="{{ asset('assets') }}/images/home1/count/bg.jpg">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="item item1 text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <div class="icon">
                                <i class="flaticon-cloud"></i>
                            </div>
                            <h4>download</h4>
                            <h2 class="odometer odometer-auto-theme" data-count="9652">0000</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item item2 text-center wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                            <div class="icon">
                                <i class="flaticon-pointed-star"></i>
                            </div>
                            <h4>good reviews</h4>
                            <h2 class="odometer odometer-auto-theme" data-count="4789">0000</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item item3 text-center wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                            <div class="icon">
                                <i class="flaticon-customer-service"></i>
                            </div>
                            <h4>customers</h4>
                            <h2 class="odometer odometer-auto-theme" data-count="960">000</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item item4 text-center wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
                            <div class="icon">
                                <i class="flaticon-briefing"></i>
                            </div>
                            <h4>projects</h4>
                            <h2 class="odometer odometer-auto-theme" data-count="6400">0000</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end counter area -->

    <!-- start about area -->
    <section class="home1 about p-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="image text-center wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s">
                                <img src="{{ asset('assets') }}/images/home1/about/img1.png" alt="About">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="content wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s">
                                <h3>Amazing Consulting Provider Agency to Our Best </h3>
                                <p>We work with the public sector to build thriving communities. And we ork with
                                    regulators and financial institutions to build trust and integrity in ets uis aliqua
                                    sunt nisi consectetur anim.</p>
                                <ul>
                                    <li class="d-flex">
                                        <div class="icon">
                                            <i class="flaticon-ribbon"></i>
                                        </div>
                                        <div class="text">
                                            <h6>Pixel Perfect Modern Layout</h6>
                                            <p>Medixer Care will be administered through plan-based omizable incorporate
                                                partnership between family.</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon">
                                            <i class="flaticon-24-hours"></i>
                                        </div>
                                        <div class="text">
                                            <h6>24/7 support</h6>
                                            <p>Medixer Care will be administered through plan-based omizable incorporate
                                                partnership between family.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 pt-120">
                    <div class="row align-items-center">
                        <div class="col-lg-7 order-1 order-lg-0">
                            <div class="content wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s">
                                <h3>Optimize Your Business Data as You Want, Easily!</h3>
                                <p>We work with the public sector to build thriving communities. And we ork with
                                    regulators and financial institutions to build trust and integrity in ets uis aliqua
                                    sunt nisi consectetur anim.</p>
                                <ul>
                                    <li class="d-flex">
                                        <div class="icon">
                                            <i class="flaticon-mobile-app-developing"></i>
                                        </div>
                                        <div class="text">
                                            <h6>Fully Responsive Across Devices</h6>
                                            <p>Medixer Care will be administered through plan-based omizable incorporate
                                                partnership between family.</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon">
                                            <i class="flaticon-setup"></i>
                                        </div>
                                        <div class="text">
                                            <h6>High Performance Theme</h6>
                                            <p>Medixer Care will be administered through plan-based omizable incorporate
                                                partnership between family.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 order-0 order-lg-1">
                            <div class="image text-center wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s">
                                <img src="{{ asset('assets') }}/images/home1/about/img2.png" alt="About">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about area -->

    <!-- start portfolio area -->
    <section class="home1 portfolio pt-120 pb-90" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                        <h2>agency portfolio</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim to eismud </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <ul class="project-menu d-flex justify-content-center wow fadeInUp" data-wow-delay="0.3s"
                        data-wow-duration="1s">
                        <li class="active"><a href="#!" data-mixitup-control data-filter="all">all</a></li>
                        <li><a href="#!" data-mixitup-control data-filter=".ios">IOS</a></li>
                        <li><a href="#!" data-mixitup-control data-filter=".and">android</a></li>
                        <li><a href="#!" data-mixitup-control data-filter=".mar">marketing</a></li>
                        <li><a href="#!" data-mixitup-control data-filter=".des">designer</a></li>
                        <li><a href="#!" data-mixitup-control data-filter=".app">app</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row filters">
                <div class="col-xl-3 col-lg-4 col-md-6 mix ios des">
                    <div class="item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                        <img src="{{ asset('assets') }}/images/home1/project/img1.jpg" alt="Project">
                        <div class="overlay">
                            <div class="text">
                                <h6>app development</h6>
                                <p>IOS</p>
                            </div>
                            <a href="project-detail.html"><i class="flaticon-right-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mix and app">
                    <div class="item wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                        <img src="{{ asset('assets') }}/images/home1/project/img2.jpg" alt="Project">
                        <div class="overlay">
                            <div class="text">
                                <h6>app development</h6>
                                <p>android</p>
                            </div>
                            <a href="project-detail.html"><i class="flaticon-right-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mix and mar">
                    <div class="item wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                        <img src="{{ asset('assets') }}/images/home1/project/img3.jpg" alt="Project">
                        <div class="overlay">
                            <div class="text">
                                <h6>app marketing</h6>
                                <p>marketing</p>
                            </div>
                            <a href="project-detail.html"><i class="flaticon-right-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mix des app">
                    <div class="item wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
                        <img src="{{ asset('assets') }}/images/home1/project/img4.jpg" alt="Project">
                        <div class="overlay">
                            <div class="text">
                                <h6>app making</h6>
                                <p>app</p>
                            </div>
                            <a href="project-detail.html"><i class="flaticon-right-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mix ios and">
                    <div class="item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                        <img src="{{ asset('assets') }}/images/home1/project/img5.jpg" alt="Project">
                        <div class="overlay">
                            <div class="text">
                                <h6>app developemnt</h6>
                                <p>IOS</p>
                            </div>
                            <a href="project-detail.html"><i class="flaticon-right-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mix des mar">
                    <div class="item wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                        <img src="{{ asset('assets') }}/images/home1/project/img6.jpg" alt="Project">
                        <div class="overlay">
                            <div class="text">
                                <h6>app making</h6>
                                <p>app</p>
                            </div>
                            <a href="project-detail.html"><i class="flaticon-right-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mix app ios">
                    <div class="item wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                        <img src="{{ asset('assets') }}/images/home1/project/img7.jpg" alt="Project">
                        <div class="overlay">
                            <div class="text">
                                <h6>app developemnt</h6>
                                <p>android</p>
                            </div>
                            <a href="project-detail.html"><i class="flaticon-right-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mix ios and">
                    <div class="item wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
                        <img src="{{ asset('assets') }}/images/home1/project/img8.jpg" alt="Project">
                        <div class="overlay">
                            <div class="text">
                                <h6>app marketing</h6>
                                <p>marketing</p>
                            </div>
                            <a href="project-detail.html"><i class="flaticon-right-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end portfolio area -->

    <!-- start team area -->
    <section class="home1 team p-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                        <h2>professional team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim to eismud </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                                <div class="image">
                                    <img src="{{ asset('assets/images/team/fawait.JPG') }}" alt="Developer">
                                </div>
                                <a href="team-detail.html">
                                    <h6>Achmad Fawait</h6>
                                </a>
                                <p>Fullstack Developer</p>
                                <ul class="d-flex justify-content-center">
                                    <li><a href="https://www.facebook.com/fawait.joky/" target="blank"><i
                                                class="fab fa-facebook-f" target="blank"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" target="blank"></i></a></li>
                                    <li><a href="https://www.instagram.com/fawait_slankngean/?hl=id" target="blank"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/achmad-fawait-a9717b171/"><i
                                                class="fab fa-linkedin-in" target="blank"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                <div class="image">
                                    <img src="{{ asset('assets') }}/images/home1/team/img2.jpg" alt="Team">
                                </div>
                                <a href="team-detail.html">
                                    <h6>warrison Samuel</h6>
                                </a>
                                <p>CEO & founder</p>
                                <ul class="d-flex justify-content-center">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                                <div class="image">
                                    <img src="{{ asset('assets') }}/images/home1/team/img3.jpg" alt="Team">
                                </div>
                                <a href="team-detail.html">
                                    <h6>harrison Samuel</h6>
                                </a>
                                <p>support member</p>
                                <ul class="d-flex justify-content-center">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end team area -->

    <!-- start mobile area -->
    <section class="home1 mobile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="image">
                                    <img src="{{ asset('assets') }}/images/home1/mobile.png" alt="Mobile">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="content">
                                    <h3>Get Mobile App Only Here</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris</p>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#!">
                                                <img src="{{ asset('assets/appstore.png') }}" style="width: 160px"
                                                    alt="Apple Store">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <img src="{{ asset('assets/playstore.png') }}" style="width: 160px"
                                                    alt="Play Store">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end mobile area -->

    <!-- start video area -->
    <section class="home1 video" data-img="{{ asset('assets') }}/images/home1/video-bg.jpg">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content text-center">
                            <a class="vid-icon venobox" data-autoplay="true" data-vbtype="video"
                                href="https://www.youtube.com/watch?v=LCmsrVOXzZc">
                                <i class="fas fa-play"></i>
                            </a>
                            <p>working video</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end video area -->

    <!-- start client area -->
    <section class="home1 client p-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                        <h2>customers love</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim to eismud </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-5 position-relative">
                            <div class="wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1s">
                                <div class="shape"></div>
                                <div class="client-img-slider swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image">
                                                <img src="{{ asset('assets') }}/images/home1/client/img1.jpg"
                                                    alt="Client">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image">
                                                <img src="{{ asset('assets') }}/images/home1/client/img2.jpg"
                                                    alt="Client">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image">
                                                <img src="{{ asset('assets') }}/images/home1/client/img3.jpg"
                                                    alt="Client">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1s">
                                <div class="client-slider swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="item swiper-slide">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmd
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ve
                                                quisnostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis autein irure dolor in reprehenderit in voluptate velit
                                                esse cilleu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            </p>
                                            <h6>Zachary Farmer</h6>
                                            <p class="designation">developer</p>
                                        </div>
                                        <div class="item swiper-slide">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmd
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ve
                                                quisnostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis autein irure dolor in reprehenderit in voluptate velit
                                                esse cilleu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            </p>
                                            <h6>graham bell</h6>
                                            <p class="designation">designer</p>
                                        </div>
                                        <div class="item swiper-slide">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmd
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ve
                                                quisnostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis autein irure dolor in reprehenderit in voluptate velit
                                                esse cilleu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            </p>
                                            <h6>packary Farmer</h6>
                                            <p class="designation">manager</p>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end client area -->

    <!-- start brand area -->
    <section class="home1 brand p-100">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brand-logo text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                        <a href="#!"><img src="{{ asset('assets') }}/images/home1/brand/brand-logo1.png"
                                class="img-fluid" alt="Brand Logo" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="brand-logo text-center wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                        <a href="#!"><img src="{{ asset('assets') }}/images/home1/brand/brand-logo2.png"
                                class="img-fluid" alt="Brand Logo" /></a>
                    </div>
                </div>
                <div class="col mt-sm-30">
                    <div class="brand-logo text-center wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                        <a href="#!"><img src="{{ asset('assets') }}/images/home1/brand/brand-logo3.png"
                                class="img-fluid" alt="Brand Logo" /></a>
                    </div>
                </div>
                <div class="col mt-sm-30">
                    <div class="brand-logo text-center wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1s">
                        <a href="#!"><img src="{{ asset('assets') }}/images/home1/brand/brand-logo4.png"
                                class="img-fluid" alt="Brand Logo" /></a>
                    </div>
                </div>
                <div class="col mt-sm-30">
                    <div class="brand-logo text-center wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
                        <a href="#!"><img src="{{ asset('assets') }}/images/home1/brand/brand-logo5.png"
                                class="img-fluid" alt="Brand Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end brand area -->

    <!-- start blog area -->
    <section class="home1 blog p-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                        <h2>News Blog</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim to eismud </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        @foreach ($posts as $post)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-blog wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                                    <div class="image">
                                        <a href="{{ route('blog.single', $post->id) }}">
                                            <img src="{{ asset($post->featured_image) }}" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="content">

                                        <a href="{{ route('blog.single', $post->id) }}">
                                            <h6>{{ $post->title }}</h6>
                                        </a>
                                        <ul class="d-flex align-item-center">
                                            <li><a href="#!"><i
                                                        class="fas fa-user"></i>{{ $post->user->name ?? '' }}</a></li>
                                            <li><a href="#!"><i
                                                        class="fas fa-comment"></i>{{ date('M', strtotime($post->created_at)) }},
                                                    {{ date('d Y', strtotime($post->created_at)) }}</a>
                                            </li>
                                        </ul>
                                        <p>{{ $post->summary }}</p>
                                        <a href="{{ route('blog.single', $post->id) }}" class="read-more">read more</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog area -->
@endsection
