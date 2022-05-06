@extends('layout.main')

@section('title', 'Home')

@section('content')
        <!-- Main -->
        <main class="main--wrapper">
            <!-- hero  -->
            <section class="hero hero__area hero-two pt-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="hero__active slider-active">
                                <div class="single__hero single-slider hero__bg pt-140 pb-160"
                                    data-background="{{ asset('assets/img/bg/h2__hero__bg.png') }}">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="hero__caption">
                                                    <span class="offer--title__hero white-color f-800"
                                                        data-animation="fadeInDown" data-delay=".2s">End Season
                                                        Sale</span>
                                                    <h2 class="product--name__hero white-color f-200 mb-50"
                                                        data-animation="fadeInUp" data-delay=".5s">Wooden Furniture</h2>
                                                    <p class="product--price__hero white-color mb-20"
                                                        data-animation="fadeInLeft" data-delay=".7s"><span
                                                            class="f-300">Wide Rang Start From</span><span
                                                            class="price f-800"><sup>$</sup>252.00</span></p>
                                                    <a href="#" class="btn orange-bg-btn f-700"
                                                        data-animation="fadeInDown" data-delay=".9s">Start Buying</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single__hero single-slider hero__bg pt-140 pb-160"
                                    data-background="{{ asset('assets/img/bg/h2__hero__bg.png') }}">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="hero__caption">
                                                    <span class="offer--title__hero white-color f-800"
                                                        data-animation="fadeInDown" data-delay=".2s">End Season
                                                        Sale</span>
                                                    <h2 class="product--name__hero white-color f-200 mb-50"
                                                        data-animation="fadeInUp" data-delay=".5s">Wooden Furniture</h2>
                                                    <p class="product--price__hero white-color mb-20"
                                                        data-animation="fadeInLeft" data-delay=".7s"><span
                                                            class="f-300">Wide Rang Start From</span><span
                                                            class="price f-800"><sup>$</sup>260.00</span></p>
                                                    <a href="#" class="btn orange-bg-btn f-700"
                                                        data-animation="fadeInDown" data-delay=".9s">Start Buying</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single__hero single-slider hero__bg pt-140 pb-160"
                                    data-background="{{ asset('assets/img/bg/h2__hero__bg.png') }}">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="hero__caption">
                                                    <span class="offer--title__hero white-color f-800"
                                                        data-animation="fadeInDown" data-delay=".2s">End Season
                                                        Sale</span>
                                                    <h2 class="product--name__hero white-color f-200 mb-50"
                                                        data-animation="fadeInUp" data-delay=".5s">Wooden Furniture</h2>
                                                    <p class="product--price__hero white-color mb-20"
                                                        data-animation="fadeInLeft" data-delay=".7s"><span
                                                            class="f-300">Wide Rang Start From</span><span
                                                            class="price f-800"><sup>$</sup>260.00</span></p>
                                                    <a href="#" class="btn orange-bg-btn f-700"
                                                        data-animation="fadeInDown" data-delay=".9s">Start Buying</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single__hero single-slider hero__bg pt-140 pb-160"
                                    data-background="{{ asset('assets/img/bg/h2__hero__bg.png') }}">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="hero__caption">
                                                    <span class="offer--title__hero white-color f-800"
                                                        data-animation="fadeInDown" data-delay=".2s">End Season
                                                        Sale</span>
                                                    <h2 class="product--name__hero white-color f-200 mb-50"
                                                        data-animation="fadeInUp" data-delay=".5s">Wooden Furniture</h2>
                                                    <p class="product--price__hero white-color mb-20"
                                                        data-animation="fadeInLeft" data-delay=".7s"><span
                                                            class="f-300">Wide Rang Start From</span><span
                                                            class="price f-800"><sup>$</sup>260.00</span></p>
                                                    <a href="#" class="btn orange-bg-btn f-700"
                                                        data-animation="fadeInDown" data-delay=".9s">Start Buying</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="hero__offer--box mb-20">
                                <img src="{{ asset('assets/img/offer/h2hero-offer1.jpg') }}" alt="" class="hero__offer--thumb img">
                                <div class="hero__offer--content">
                                    <h2 class="f-700">TV - 50% Flate</h2>
                                    <a href="shop-details.html" class="shop-link">Shop Now</a>
                                </div>
                            </div>
                            <div class="hero__offer--box mb-20">
                                <img src="{{ asset('assets/img/offer/h2hero-offer2.jpg') }}" alt="" class="hero__offer--thumb img">
                                <div class="hero__offer--content">
                                    <h2 class="f-700">TV - 50% Flate</h2>
                                    <a href="shop-details.html" class="shop-link">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero end -->

            <!-- Categories Slider -->
            <section class="categories-slider pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="categories-slider--active owl-carousel">
                                <div class="single-categories">
                                    <div class="icon gray-bg-icon">
                                        <i class="fal fa-hat-witch"></i>
                                    </div>
                                    <h6><a href="#">Accessories</a></h6>
                                </div>
                                <div class="single-categories">
                                    <div class="icon gray-orange-bg">
                                        <i class="fal fa-desktop-alt"></i>
                                    </div>
                                    <h6><a href="#">Speakers</a></h6>
                                </div>
                                <div class="single-categories">
                                    <div class="icon gray-bg-icon">
                                        <i class="fal fa-camera-alt"></i>
                                    </div>
                                    <h6><a href="#">Cameras</a></h6>
                                </div>
                                <div class="single-categories">
                                    <div class="icon gray-orange-bg">
                                        <i class="fal fa-dragon"></i>
                                    </div>
                                    <h6><a href="#">Consoles</a></h6>
                                </div>
                                <div class="single-categories">
                                    <div class="icon gray-bg-icon">
                                        <i class="fal fa-laptop"></i>
                                    </div>
                                    <h6><a href="#">Computers</a></h6>
                                </div>
                                <div class="single-categories">
                                    <div class="icon gray-orange-bg">
                                        <i class="fal fa-headset"></i>
                                    </div>
                                    <h6><a href="#">Headphone</a></h6>
                                </div>
                                <div class="single-categories">
                                    <div class="icon gray-bg-icon">
                                        <i class="fal fa-keyboard"></i>
                                    </div>
                                    <h6><a href="#">Gadgets</a></h6>
                                </div>
                                <div class="single-categories">
                                    <div class="icon gray-orange-bg">
                                        <i class="fal fa-desktop-alt"></i>
                                    </div>
                                    <h6><a href="#">Accessories</a></h6>
                                </div>
                                <div class="single-categories">
                                    <div class="icon gray-bg-icon">
                                        <i class="fal fa-dragon"></i>
                                    </div>
                                    <h6><a href="#">Consoles</a></h6>
                                </div>
                                <div class="single-categories">
                                   <div class="icon gray-orange-bg">
                                       <i class="fal fa-laptop"></i>
                                   </div>
                                    <h6><a href="#">Computers</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Categories Slider End -->

            <!-- Product  -->
            <div class="product pt-60 product-h-two">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-12">
                            <div class="section-header">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-sm-6">
                                        <div class="product-section2">
                                            <h6 class="product--section__title2"><span>New Arrival</span> On
                                                Trending</h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="all__product--link text-right">
                                            <a class="all-link" href="shop-collection.html">Discover All Products<span
                                                    class="lnr lnr-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-20">
                            <div class="product__active owl-carousel">
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__05.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__34.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__14.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__35.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__36.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__34.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__37.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__35.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__38.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__35.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offer-banner offer--banner__bg mb-30" data-background="{{ asset('assets/img/offer/offer__thumb__13.jpg') }}">
                                <div class="offer--banner__text">
                                    <span class="f-200 white-color">Student Table Lamps</span>
                                    <h4 class="white-color f-900 mb-40">55% Flate</h4>
                                    <a href="shop-collection.html">View Collection<i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offer-banner offer--banner__bg mb-30" data-background="{{ asset('assets/img/offer/offer__thumb__14.jpg') }}">
                                <div class="offer--banner__text">
                                    <span class="f-200 white-color">Flower Pot Decorative</span>
                                    <h4 class="white-color f-900 mb-40">75% Flate</h4>
                                    <a href="shop-collection.html">View Collection<i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product end -->

            <!-- Product  -->
            <div class="product pt-40 pb-50 product-h-two">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-12">
                            <div class="section-header section-header-two">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-sm-6">
                                        <div class="product-section2">
                                            <h6 class="product--section__title2"><span>Best Seller’s</span> Featured Items</h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="all__product--link text-right">
                                            <a class="all-link" href="shop-collection.html">Discover All Products<span
                                                    class="lnr lnr-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-40">
                       <div class="col-xl-5 d-none d-xl-block">
                            <div class="small__banner mb-30">
                                <div class="small__banner--thumb position-relative">
                                    <a href="#"><img src="{{ asset('assets/img/offer/offer__thumb__15.jpg') }}" alt=""></a>
                                    <div class="small__banner--content">
                                       <h3 class="f-800 cod__black-color">MI Mega Powerbank</h3>
                                        <span class="f-300 cod__black-color">44mm Grey Aluminium Consoles</span>
                                        <a href="#" class="f-700 white-color grenadier-bg ">Start Buying</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="product__active--two owl-carousel">
                                <div class="product__single">
                                    <div class="product-wrapper">
                                        <div class="product__box">
                                            <div class="product__content--top">
                                                <span class="cate-name">SAMSUNG</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                        Systems Purple Degree</a></h6>
                                            </div>
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="img-wrapper">
                                                    <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__35.jpg') }}" alt="">
                                                    <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__38.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content--rating d-flex justify-content-between">
                                                <div class="rating">
                                                    <ul class="list-inline">
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price">
                                                    <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="#"><span class="lnr lnr-heart"></span></a>
                                            <a href="#"><span class="lnr lnr-eye"></span></a>
                                            <a href="#"><span class="lnr lnr-cart"></span></a>
                                            <a href="#"><span class="lnr lnr-sync"></span></a>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product__box">
                                            <div class="product__content--top">
                                                <span class="cate-name">SAMSUNG</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                        Systems Purple Degree</a></h6>
                                            </div>
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="img-wrapper">
                                                    <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                                    <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__14.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content--rating d-flex justify-content-between">
                                                <div class="rating">
                                                    <ul class="list-inline">
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price">
                                                    <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="#"><span class="lnr lnr-heart"></span></a>
                                            <a href="#"><span class="lnr lnr-eye"></span></a>
                                            <a href="#"><span class="lnr lnr-cart"></span></a>
                                            <a href="#"><span class="lnr lnr-sync"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product-wrapper">
                                        <div class="product__box">
                                            <div class="product__content--top">
                                                <span class="cate-name">SAMSUNG</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                        Systems Purple Degree</a></h6>
                                            </div>
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="img-wrapper">
                                                    <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__36.jpg') }}" alt="">
                                                    <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content--rating d-flex justify-content-between">
                                                <div class="rating">
                                                    <ul class="list-inline">
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price">
                                                    <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="#"><span class="lnr lnr-heart"></span></a>
                                            <a href="#"><span class="lnr lnr-eye"></span></a>
                                            <a href="#"><span class="lnr lnr-cart"></span></a>
                                            <a href="#"><span class="lnr lnr-sync"></span></a>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product__box">
                                            <div class="product__content--top">
                                                <span class="cate-name">SAMSUNG</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                        Systems Purple Degree</a></h6>
                                            </div>
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="img-wrapper">
                                                    <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__34.jpg') }}" alt="">
                                                    <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__38.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content--rating d-flex justify-content-between">
                                                <div class="rating">
                                                    <ul class="list-inline">
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price">
                                                    <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="#"><span class="lnr lnr-heart"></span></a>
                                            <a href="#"><span class="lnr lnr-eye"></span></a>
                                            <a href="#"><span class="lnr lnr-cart"></span></a>
                                            <a href="#"><span class="lnr lnr-sync"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product-wrapper">
                                        <div class="product__box">
                                            <div class="product__content--top">
                                                <span class="cate-name">SAMSUNG</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                        Systems Purple Degree</a></h6>
                                            </div>
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="img-wrapper">
                                                    <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__37.jpg') }}" alt="">
                                                    <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__34.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content--rating d-flex justify-content-between">
                                                <div class="rating">
                                                    <ul class="list-inline">
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price">
                                                    <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="#"><span class="lnr lnr-heart"></span></a>
                                            <a href="#"><span class="lnr lnr-eye"></span></a>
                                            <a href="#"><span class="lnr lnr-cart"></span></a>
                                            <a href="#"><span class="lnr lnr-sync"></span></a>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product__box">
                                            <div class="product__content--top">
                                                <span class="cate-name">SAMSUNG</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                        Systems Purple Degree</a></h6>
                                            </div>
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="img-wrapper">
                                                    <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__38.jpg') }}" alt="">
                                                    <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__36.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content--rating d-flex justify-content-between">
                                                <div class="rating">
                                                    <ul class="list-inline">
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price">
                                                    <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="#"><span class="lnr lnr-heart"></span></a>
                                            <a href="#"><span class="lnr lnr-eye"></span></a>
                                            <a href="#"><span class="lnr lnr-cart"></span></a>
                                            <a href="#"><span class="lnr lnr-sync"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product-wrapper">
                                        <div class="product__box">
                                            <div class="product__content--top">
                                                <span class="cate-name">SAMSUNG</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                        Systems Purple Degree</a></h6>
                                            </div>
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="img-wrapper">
                                                    <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__35.jpg') }}" alt="">
                                                    <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__38.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content--rating d-flex justify-content-between">
                                                <div class="rating">
                                                    <ul class="list-inline">
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price">
                                                    <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="#"><span class="lnr lnr-heart"></span></a>
                                            <a href="#"><span class="lnr lnr-eye"></span></a>
                                            <a href="#"><span class="lnr lnr-cart"></span></a>
                                            <a href="#"><span class="lnr lnr-sync"></span></a>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product__box">
                                            <div class="product__content--top">
                                                <span class="cate-name">SAMSUNG</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                        Systems Purple Degree</a></h6>
                                            </div>
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="img-wrapper">
                                                    <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                                    <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__35.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content--rating d-flex justify-content-between">
                                                <div class="rating">
                                                    <ul class="list-inline">
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li class="rating-active"><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price">
                                                    <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="#"><span class="lnr lnr-heart"></span></a>
                                            <a href="#"><span class="lnr lnr-eye"></span></a>
                                            <a href="#"><span class="lnr lnr-cart"></span></a>
                                            <a href="#"><span class="lnr lnr-sync"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product end -->

            <!-- Product deals start -->
            <section class="product-deals">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="deal-wrapper d-flex justify-content-between align-items-center" data-background="{{ asset('assets/img/bg/h2-deals--bg.jpg') }}">
                                <div class="title">
                                    <h3 class="f-200 text-white">Certified Deals On Apple iPhone</h3>
                                </div>
                                <div class="action">
                                    <a href="#" class="f-600 text-white">Shop Now <i class="fas fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Product deals end -->

            <!-- Product  -->
            <div class="product pt-70 product-h-two">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-12">
                            <div class="section-header">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-sm-6">
                                        <div class="product-section2">
                                            <h6 class="product--section__title2"><span>Trending </span> On This Week</h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="all__product--link text-right">
                                            <a class="all-link" href="shop-collection.html">Discover All Products<span
                                                    class="lnr lnr-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product__active owl-carousel">
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__05.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__34.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__14.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__35.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__36.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__34.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__37.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__35.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__38.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="{{ asset('assets/img/allproducts/products__thumb__35.jpg') }}" alt="">
                                                <img class="img secondary-img" src="{{ asset('assets/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product end -->
        </main>
        <!-- Main End -->
@endsection