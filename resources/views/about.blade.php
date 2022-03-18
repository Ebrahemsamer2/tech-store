@extends('layout.main')

@section('title', 'About Us')

@section('content')
        <!-- Main -->
        <main class="main--wrapper">

            <!-- page banner area start -->
            <section class="page-banner-area" data-background="{{ asset('assets/img/bg/page-banner.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-sm-12">
                            <div class="banner-text text-center pt-90 pb-25">
                                <h2 class="f-800 cod__black-color">About Us</h2>
                                <p class="mb-60">Lorem Ipsum is simply dummy texting of the printings and typesettingi amet industry Simply Dummyhas    been of the printing and typesetting amet industry.</p>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us.</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page banner area end -->

            <!-- about area start -->
            <section class="about-area pt-80 pb-45">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="about-single mb-30">
                                <div class="about-img">
                                    <img src="{{ asset('assets/img/offer/about__thumb__20.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="about-text">
                                    <h6 class="f-700 cod__black-color"><a href="#">What We Really Do?</a></h6>
                                    <p class="f-400">Lorem Ipsum dummy texting printing
                                        and typesettingi amet industry Simply Dummy
                                        printing and typesetting.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="about-single mb-30">
                                <div class="about-img">
                                    <img src="{{ asset('assets/img/offer/about__thumb__21.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="about-text">
                                    <h6 class="f-700 cod__black-color"><a href="#">Our Vision & Goal</a></h6>
                                    <p class="f-400">Lorem Ipsum dummy texting printing
                                        and typesettingi amet industry Simply Dummy
                                        printing and typesetting.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="about-single mb-30">
                                <div class="about-img">
                                    <img src="{{ asset('assets/img/offer/about__thumb__22.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="about-text">
                                    <h6 class="f-700 cod__black-color"><a href="#">History of Begining</a></h6>
                                    <p class="f-400">Lorem Ipsum dummy texting printing
                                        and typesettingi amet industry Simply Dummy
                                        printing and typesetting.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="about-single mb-30">
                                <div class="about-img">
                                    <img src="{{ asset('assets/img/offer/about__thumb__23.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="about-text">
                                    <h6 class="f-700 cod__black-color"><a href="#">2000+ Happy Customer</a></h6>
                                    <p class="f-400">Lorem Ipsum dummy texting printing
                                        and typesettingi amet industry Simply Dummy
                                        printing and typesetting.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about area end -->

            <!-- what shop-max offer -->
            <section class="offer gray-bg pt-50 pb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="offer__section--text pt-25 mb-30">
                                <h4 class="offer-title f-800 black-color position-relative mb-40">What Shopmax Offer?</h4>
                                <p>Lorem Ipsum is simply dummy texting of the printings and typesettingi amet industry. Simply Dummy
                                    has been the industry's standard dummy text ever since 1500s exting of the printing and
                                    typesetting amet industry.</p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="features mb-25">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="features-box d-flex align-items-center justify-content-between mb-10">
                                            <div class="features--box__text">
                                                <h5 class="f-700 pure__black-color"><a href="#">Easy & Free Return</a></h5>
                                                <p>All Over Worldwide</p>
                                            </div>
                                            <div class="features--box__icon">
                                                <i><img src="{{ asset('assets/img/icon/money-back-gurantee.svg') }}" alt=""></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="features-box d-flex align-items-center justify-content-between mb-10">
                                            <div class="features--box__text">
                                                <h5 class="f-700 pure__black-color"><a href="#">Money Guarantee</a></h5>
                                                <p>Seal Of Trusts</p>
                                            </div>
                                            <div class="features--box__icon">
                                                <i><img src="{{ asset('assets/img/icon/money-back-gurantee.svg') }}" alt=""></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="features-box d-flex align-items-center justify-content-between mb-10">
                                            <div class="features--box__text">
                                                <h5 class="f-700 pure__black-color"><a href="#">Online Need Helps</a></h5>
                                                <p>24/7 Online Support</p>
                                            </div>
                                            <div class="features--box__icon">
                                                <i><img src="{{ asset('assets/img/icon/money-back-gurantee.svg') }}" alt=""></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="features-box d-flex align-items-center justify-content-between mb-10">
                                            <div class="features--box__text">
                                                <h5 class="f-700 pure__black-color"><a href="#">Gift Card & Voucher</a></h5>
                                                <p>Item per Month</p>
                                            </div>
                                            <div class="features--box__icon">
                                                <i><img src="{{ asset('assets/img/icon/money-back-gurantee.svg') }}" alt=""></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- what shop-max offer end -->
            
            <!-- about area start -->
            <section class="about-two pb-45">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-single mb-30">
                                <div class="about-img mb-20">
                                    <img src="{{ asset('assets/img/offer/about__thumb__24.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <p>Lorem Ipsum is simply dummy texting of the printings and typesettingi amet industry. Simply Dummy
                                    has been the industry's standard dummy text ever since 1500s exting of the printing and typesetting
                                    amet industry typesetting.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-single mb-30">
                                <div class="about-img mb-20">
                                    <img src="{{ asset('assets/img/offer/about__thumb__24.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <p>Lorem Ipsum is simply dummy texting of the printings and typesettingi amet industry. Simply Dummy
                                    has been the industry's standard dummy text ever since 1500s exting of the printing and typesetting
                                    amet industry typesetting.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about area end -->

            <!-- Subscribe -->
            <div class="subscribe subscribe--area grenadier-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="newsletter newsletter--box d-flex justify-content-between align-items-center pos-rel">
                                <div class="left d-flex justify-content-between align-items-center">
                                    <div class="newsletter__title">
                                        <span class="notification--icon"><img src="{{ asset('assets/img/icon/notification-icon.png') }}"
                                                alt="notification"></span>
                                        <span class="notification__title--heading f-800 white-color">Subscribe for Join Us!</span>
                                    </div>
                                    <div class="newsletter--message d-none d-xl-block">
                                        <p class="newsletter__message__title mb-0">.... & receive $20 coupne for first Shopping &
                                            free delivery.</p>
                                    </div>
                                </div>
                                <form class="right newsletter--form pos-rel">
                                    <input class="newsletter--input" type="text" placeholder="Enter Your Email Address ...">
                                    <button class="btn newsletter--button" type="button"><img src="{{ asset('assets/img/icon/plan-icon.png') }}"
                                            alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Subscribe End -->

        </main>
        <!-- Main End -->
@endsection