@extends('layouts.app')

@section('content')
    @include('layouts.top')

    <!-- start contact area -->
    <section class="contact-page contact p-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s">
                        <h6>contact us</h6>
                        <h2>Get every single update here</h2>
                        <form action="#!">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="your name*" required class="inputs">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="your email*" required class="inputs">
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" placeholder="phone*" required class="inputs">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="website*" required class="inputs">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">submit now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="content address wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s">
                        <h3>Get Answers Advices</h3>
                        <ul>
                            <li class="d-flex">
                                <div class="icon">
                                    <i class="far fa-map"></i>
                                </div>
                                <div class="text">
                                    <h5>Address</h5>
                                    <p>Jl.Raya Bantul, No.211,</p>
                                    <p>Pendowoharjo, Bantul, Yogyakarta</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="text">
                                    <h5>phone</h5>
                                    <p>+62 823-3616-0182</p>
                                    <p>+62 877-7544-4470</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <h5>E-mail</h5>
                                    <p>demo@example.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact area -->

    <!-- Map section start -->
    <section class="contact-page location">
        <div class="google-map-wrapper" data-latitude='40.7656561' data-longitude='-73.7691858' data-zoom='11'></div>
        <div id="map"></div>
    </section>
    <!-- Map section end -->
@endsection
