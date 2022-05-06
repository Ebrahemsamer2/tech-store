@extends('layout.main')

@section('title', 'Categories')

@section('content')
    <!-- Main -->
    <main class="main--wrapper">

        <!-- page banner area start -->
        <section class="page-banner-area blog-page mt-25" data-background="{{ asset('assets/img/bg/blog-page-banner.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="banner-text text-center pt-50 pb-45">
                            <h2 class="f-800 cod__black-color">Shop Category</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page banner area end -->

        <!-- shop cat area start -->
        <div class="top__featured--area pt-65 pb-50">
            <div class="container">
               <div class="row mb-40">
                   <div class="col-sm-9 offset-sm-3 col-8">
                       <div class="shop-cat">
                           <div class="show-text d-none d-sm-block">
                               <span class="f-400">Showing 1–12 of 20 results</span>
                           </div>
                           <div class="select-text">
                               <select name="select">
                                   <option value="1">Short By New</option>
                                   <option value="2">Short By 01 </option>
                                   <option value="3">Short By 02 </option>
                                   <option value="4">Short By 03 </option>
                               </select>
                           </div>
                       </div>
                   </div>
               </div>
                <div class="row">
                    @foreach($categories as $category)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-categories mb-30">
                            <div class="categories-box position-relative">
                                <div class="categories-thumb">
                                    <a href="{{ route('categories.show', $category) }}">
                                        <img 
                                        class="img" 
                                        src="{{ $category->getImage() }}" 
                                        alt="{{ $category->name }}">
                                    </a>
                                    <h6 class="f-800 pure__black-color cate-title">
                                        <a href="#">{{ $category->name }}</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row mt-20">
                    <div class="col-sm-12">
                        <div class="common-pagination">
                        {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop cat area end -->

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