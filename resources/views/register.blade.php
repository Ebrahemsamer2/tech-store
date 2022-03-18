@extends('layout.main')

@section('title', 'Register')

@section('content')
        <!-- Main -->
        <main class="main--wrapper">

            <!-- page banner area start -->
            <section class="page-banner-area" data-background="{{ asset('assets/img/bg/page-banner.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-sm-12">
                            <div class="banner-text text-center pt-90 pb-25">
                                <h2 class="f-800 cod__black-color">-30% On Sign Up</h2>
                                <p class="mb-60">Lorem Ipsum is simply dummy texting of the printings and typesettingi amet industry Simply Dummyhas    been of the printing and typesetting amet industry.</p>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">My Account.</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page banner area end -->

            <!-- reg area start -->
            <section class="reg-area pt-60 pb-75">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="reg-wrapper">
                                <ul class="nav" id="myTab" role="tablist">
                                    <li class="nav-item mr-40">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign In</a>
                                    </li>
                                    <li class="nav-item ml-40">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Registration</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <form action="#">
                                            <div class="field">
                                                <label>Username or Email ID</label>
                                                <input type="text" placeholder="Username or Email Address" required>
                                            </div>
                                            <div class="field">
                                                <label>Password</label>
                                                <input type="password" placeholder="Password" required>
                                            </div>
                                            <button type="submit">Login</button>
                                            <span>
                                                <input type="checkbox" class="check">
                                                Remember me
                                            </span>
                                            <a href="#" class="lost-pass">Lost Your Password?</a>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <form action="#">
                                            <div class="field">
                                                <label>Username</label>
                                                <input type="text" placeholder="Username" required>
                                            </div>
                                            <div class="field">
                                                <label>Email ID</label>
                                                <input type="text" placeholder="Email Address" required>
                                            </div>
                                            <div class="field">
                                                <label>Password</label>
                                                <input type="password" placeholder="Password" required>
                                            </div>
                                            <button type="submit">Login</button>
                                            <span>
                                                <input type="checkbox" class="check">
                                                Remember me
                                            </span>
                                            <a href="#" class="lost-pass">Lost Your Password?</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- reg area end -->

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