@extends('layout.main')

@section('title', $product->name)

@section('content')
    
    <!-- Shop-details start -->
    <section class="shop-details-area pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="shop-bred pt-35 pb-35">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index-2.html">Phones & Tablet</a></li>
                                <li class="breadcrumb-item"><a href="index-2.html">Headphone</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6 order-1 order-lg-1">
                    <div class="pro-img">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5"><img src="{{ asset('assets/img/allproducts/pro-details.jpg') }}" class="img-fluid" alt=""></div>

                            <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
                                <img src="{{ asset('assets/img/allproducts/pro-details.jpg') }}" class="img-fluid" alt="">
                            </div>

                            <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="contact-tab5">
                                <img src="{{ asset('assets/img/allproducts/pro-details.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <ul class="nav" id="myTab1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home5" aria-selected="true">
                                    <img src="{{ asset('assets/img/allproducts/pro-details-small-1.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile5" aria-selected="false">
                                    <img src="{{ asset('assets/img/allproducts/pro-details-small-2.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab5" data-toggle="tab" href="#contact5" role="tab" aria-controls="contact5" aria-selected="false">
                                    <img src="{{ asset('assets/img/allproducts/pro-details-small-3.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-3 order-lg-2">
                    <div class="pro-content">
                        <span>{{ $product->category->name }}</span>
                        <h5 class="title">{{ $product->name }}</h5>
                        <div class="pro-rating pb-40">
                            <a href="#" class="active"><i class="fas fa-star"></i></a>
                            <a href="#" class="active"><i class="fas fa-star"></i></a>
                            <a href="#" class="active"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#" class="review">(2 customer reviews)</a>
                        </div>
                        <div class="pro-social mb-45">
                            <a href="#"><img src="{{ asset('assets/img/payment/pro-details-social.jpg') }}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="about-pro">
                            <ul class="mb-40">
                                @foreach(explode(',',$product->features) as $feature)
                                <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                            <p>{{ $product->short_description }}</p>
                        </div>
                        <div class="pro-code pt-25">
                            <ul>
                                <li>Tag: <span>HEADPHONE</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 order-2 order-lg-3">
                    <div class="cart-wrapper">
                        <div class="cart-title">
                            <h6>Availability: <span>In Stock</span></h6>
                        </div>
                        <div class="price mt-15 mb-20">
                            <span>$3,200.55</span>
                            <h4>${{ $product->getPrice() }}</h4>
                        </div>
                        <form action="#">
                            <div class="field">
                                <label>Quantity:</label>
                                <input value='1' min="1" type="number" name='quantity'>
                            </div>
                        </form>
                        <a 
                        onclick="event.preventDefault();document.querySelector('#add_to_cart_form').submit();"
                        href="#" 
                        class="cart-button">Add To Cart</a>
                        <a href="#" class="buy-button">Buy Now</a>

                        <form method='POST' action='{{ route("cart.store") }}' id='add_to_cart_form'>
                            @csrf
                            <input name='id' type='hidden' value="{{ $product->id }}">
                            <input name='name' type='hidden' value="{{ $product->name }}">
                            <input name='price' type='hidden' value="{{ $product->price }}">
                        </form>

                        <div class="last pt-15">
                            <a 
                            onclick="event.preventDefault();document.querySelector('#saveincart_wishlist_{{$product->id}}').submit();"
                            href="#">Add To Wishlist | </a>

                            <a 
                            onclick="event.preventDefault();document.querySelector('#saveincart_later_{{$product->id}}').submit();"
                            href="#">Save For Later</a>
                        
                            <form class='mb-0' id='saveincart_wishlist_{{$product->id}}' method='POST' action="{{ route('cart.saveincart', ['wishlist', $product->id]) }}">@csrf</form>
                            <form class='mb-0' id='saveincart_later_{{$product->id}}' method='POST' action="{{ route('cart.saveincart', ['later', $product->id]) }}">@csrf</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop-details end -->

    <!-- Shop-details tab start -->
    <section class="shop-details-desc">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="desc-wrapper">
                        <ul class="nav custom-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab11" data-toggle="tab" href="#home11" role="tab" aria-controls="home11" aria-selected="true">Specification</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab11" data-toggle="tab" href="#profile11" role="tab" aria-controls="profile11" aria-selected="false">Description </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab11" data-toggle="tab" href="#contact11" role="tab" aria-controls="contact11" aria-selected="false">Reviews(3)</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade" id="home11" role="tabpanel" aria-labelledby="home-tab11">
                                <div class="desc-content mt-60">
                                    <div class="row">
                                        <div class="col-md-12 mb-30">
                                            <div class="spe-wrapper">
                                                <ul>
                                                    <li class="title">Additional information</li>
                                                    <li>Weight</li>
                                                    <li>1.4 oz</li>
                                                    <li>Dimensions</li>
                                                    <li>62 × 56 × 12 in</li>
                                                    <li>Size</li>
                                                    <li>XL, XXL, LG, SM, MD</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="profile11" role="tabpanel" aria-labelledby="profile-tab11">
                                <div class="desc-content mt-60">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Perfactly Done</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec
                                                massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpUt id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum meta ultricies ex vulputate ac. Ut id
                                                cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus ntincidunt eu.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Freshly Design</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae    egestas massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat.Ut id cursus tellus, non tempor quam. Morbi.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Fabolous Sound</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae    egestas massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat.Ut id cursus tellus, non tempor quam. Morbi.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Inteligent Bettery</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec
                                                    massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id
                                                    cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus
                                                    nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact11" role="tabpanel" aria-labelledby="contact-tab11">
                                <div class="desc-content mt-60">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Perfactly Done</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec
                                                massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpUt id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum meta ultricies ex vulputate ac. Ut id
                                                cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus ntincidunt eu.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Freshly Design</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae    egestas massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat.Ut id cursus tellus, non tempor quam. Morbi.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Fabolous Sound</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae    egestas massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat.Ut id cursus tellus, non tempor quam. Morbi.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Inteligent Bettery</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec
                                                    massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id
                                                    cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus
                                                    nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop-details tab end -->

    <!-- Product  -->
    <div class="product pt-75 product-h-two">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-12">
                    <div class="section-header">
                        <div class="row align-items-center">
                            <div class="col-xl-9 col-sm-6">
                                <div class="product-section2">
                                    <h6 class="product--section__title2"><span>Best Related</span> On Latest Coming</h6>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="all__product--link text-right">
                                    <a class="all-link" href="{{ route('products.index') }}">Discover All Products<span
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
                        @foreach($related_products as $product)
                        <div class="product__single">
                            <div class="product__box">
                                <div class="product__content--top">
                                    <span class="cate-name">{{ $product->category->name }}</span>
                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></h6>
                                </div>
                                <div class="product__thumb">
                                    <a href="{{ route('products.show', $product) }}" class="img-wrapper">
                                        <img 
                                        class="img" 
                                        src="{{ $product->getImage() }}" 
                                        alt="">
                                    </a>
                                </div>
                                <div class="product__content--rating d-flex justify-content-between">
                                    <div class="rating">
                                        <ul class="list-inline">
                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                            <li class="rating-active"><i class="fas fa-star"></i></li>
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
        </div>
    </div>
    <!-- Product end -->
@endsection