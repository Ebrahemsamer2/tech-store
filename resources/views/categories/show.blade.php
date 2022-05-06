@extends('layout.main')

@section('title', $category->name)

@section('content')
    <!-- Main -->
    <main class="main--wrapper">

        <!-- shop area start -->
        <div class="product shop-page pt-80 pb-80 fix">
            <div class="container">
                <div class="border-b">
                    <div class="row">
                        <div class="col-lg-5 col-md-4">
                            <div class="shop-bar d-flex align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8">
                            <div class="bar-wrapper">
                                <div class="select-text">
                                    <span>Showing 1–11 of 23 Results</span>
                                </div>
                                <div class="shop-select">
                                    <select name="select" id="shop-select-one">
                                        <option value="1">Deafult Sorting</option>
                                        <option value="2">Deafult Sorting</option>
                                        <option value="3">Deafult Sorting</option>
                                        <option value="4">Deafult Sorting</option>
                                    </select>
                                </div>
                                <div class="shop-select">
                                    <select name="select" id="shop-select-two">
                                        <option value="1">Categories</option>
                                        <option value="2">Categories 01</option>
                                        <option value="3">Categories 02</option>
                                        <option value="4">Categories 03</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-sm-12">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="product__single col-sm-3">
                                <div class="product__box">
                                    <div class="product__thumb">
                                        <a href="{{ route('products.show', $product) }}" class="img-wrapper">
                                            <img 
                                            class="img" 
                                            src="{{ $product->getImage() }}" 
                                            alt="{{ $product->name }}">
                                        </a>
                                    </div>
                                    <div class="product__content--top">
                                        <span class="cate-name">{{ $product->category->name }}</span>
                                        <h6 class="product__title mine__shaft-color f-700 mb-0">
                                            <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                                            </h6>
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
                                            <h5 class="grenadier-color f-600">${{ $product->getPrice() }}</h5>
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
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-sm-12">
                        <div class="common-pagination">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop area end -->

        <!-- Subscribe -->
        <div class="subscribe subscribe--area grenadier-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="newsletter newsletter--box d-flex justify-content-between align-items-center pos-rel">
                            <div class="left d-flex justify-content-between align-items-center">
                                <div class="newsletter__title">
                                    <span class="notification--icon"><img src="{{ asset('assets/img/icon/notification-icon.png') }}" alt="notification"></span>
                                    <span class="notification__title--heading f-800 white-color">Subscribe for Join Us!</span>
                                </div>
                                <div class="newsletter--message d-none d-xl-block">
                                    <p class="newsletter__message__title mb-0">.... & receive $20 coupne for first Shopping &
                                        free delivery.</p>
                                </div>
                            </div>
                            <form class="right newsletter--form pos-rel">
                                <input class="newsletter--input" type="text" placeholder="Enter Your Email Address ...">
                                <button class="btn newsletter--button" type="button"><img src="{{ asset('assets/img/icon/plan-icon.png') }}" alt=""></button>
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