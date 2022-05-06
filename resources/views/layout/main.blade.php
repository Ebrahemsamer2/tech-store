<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/mystyle.css') }}">

        @yield('custom_styles')
    </head>
    <body>

        <!-- Header -->
        <header class="header">
            <div class="top header__top gray-bg d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-5">
                            <div class="message--header__top">
                                <p class="message m-0 dove__gray-color">Free Shipping Worldwide - On All Order Over $1000</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="menu--header__top text-right">
                                <nav class="nav--top__list">
                                    <ul class="list-inline">
                                        <li><a class="nav--top__link dove__gray-color text-capitalize position-relative" href="#">store Locator</a></li>
                                        <li><a class="nav--top__link dove__gray-color text-capitalize position-relative" href="#">Track Orders</a></li>
                                        <li><a class="nav--top__link dove__gray-color text-capitalize position-relative" href="#">Credit Card</a></li>
                                        <li class="nav--top__dropdown position-relative"><a class="nav--top__link lang--top__link dove__gray-color text-capitalize position-relative" href="#">English & Dollar<span class="lnr lnr-chevron-down"></span></a>
                                            <ul class="dropdown-show">
                                                <li><a class="dove__gray-color text-capitalize" href="#"><span class="lang">canada</span><span class="currency">USD</span></a></li>
                                                <li><a class="dove__gray-color text-capitalize" href="#"><span class="lang">Bangladesh</span><span class="currency">TAKA</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle header__middle bg--header__middle pt-35 pb-35 header-middle-two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-md-4">
                            <div class="logo">
                                <a class="logo__link" href="index.html">
                                    <img src="{{ asset('assets/img/logo/h1__logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 d-none d-xl-block">
                            <div class="main-menu main-menu2">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="dropdown">
                                            <a href="{{ route('home.index') }}">Home</a>
                                        </li>
                                        <li>
                                            <a class="cod__gray-color" href="{{ route('products.index') }}">Shop</a>
                                        </li>
                                        <li>
                                            <a class="cod__gray-color" href="{{ route('categories.index') }}">Categories</a>
                                        </li>
                                        <li>
                                            <a class="cod__gray-color" href="{{ route('about') }}">About</a>
                                        </li>
                                        <li>
                                            <a class="cod__gray-color" href="{{ route('contact') }}">Contact</a>
                                        </li>
                                        <li>
                                            <a class="cod__gray-color" href="{{ route('register') }}">Register</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-8">
                            <div class="user-access2">
                                <ul class="list-inline">
                                    <li>
                                        <div class="user-access--box">
                                            <div class="user-access--icon">
                                                <span class="lnr lnr-phone-handset"></span>
                                            </div>
                                            <div class="user-access--content">
                                                <h5>Support</h5>
                                                <span>1800 5555 3636</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-access--box">
                                            <div class="user-access--icon">
                                                <span class="lnr lnr-user"></span>
                                            </div>
                                            <div class="user-access--content">
                                                <h5>Account</h5>
                                                <a>Login / Register</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom header__bottom grenadier-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-5 col-10">
                            <div class="dept__menu position-relative">
                                <nav>
                                    <ul class="dept__menu--list dept__menu--list2">
                                        <li><a class="dept__menu-mlink dept__menu-mlink2 f-900 cod__gray-color" href="#">Shop By Departments</a>
                                            <ul class="dept__menu--dropdown {{ Route::currentRouteName() == 'home.index' ? 'open' : '' }}">
                                                <li class="dropdown"><a class="dept__menu--dlink" href="#">Lamps & Lighting</a>
                                                    <ul class="sub__menu sub__dept--menu">
                                                        <li><a href="#">Desktop</a></li>
                                                        <li class="dropdown"><a href="#">Laptop</a>
                                                            <ul class="sub__menu level2">
                                                                <li><a href="#">Desktop</a></li>
                                                                <li><a href="#">Laptop</a></li>
                                                                <li><a href="#">Mobile</a></li>
                                                                <li><a href="#">Tablet</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Mobile</a></li>
                                                        <li><a href="#">Tablet</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a class="dept__menu--dlink" href="#">Mattress & Bedding</a>
                                                    <ul class="sub__menu sub__dept--menu">
                                                        <li><a href="#">Desktop</a></li>
                                                        <li class="dropdown"><a href="#">Laptop</a>
                                                            <ul class="sub__menu level2">
                                                                <li><a href="#">Desktop</a></li>
                                                                <li><a href="#">Laptop</a></li>
                                                                <li><a href="#">Mobile</a></li>
                                                                <li><a href="#">Tablet</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Mobile</a></li>
                                                        <li><a href="#">Tablet</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a class="dept__menu--dlink" href="#">Home wares</a>
                                                    <ul class="sub__menu sub__dept--menu">
                                                        <li><a href="#">Desktop</a></li>
                                                        <li class="dropdown"><a href="#">Laptop</a>
                                                            <ul class="sub__menu level2">
                                                                <li><a href="#">Desktop</a></li>
                                                                <li><a href="#">Laptop</a></li>
                                                                <li><a href="#">Mobile</a></li>
                                                                <li><a href="#">Tablet</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Mobile</a></li>
                                                        <li><a href="#">Tablet</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a class="dept__menu--dlink" href="#">Housekeeping</a>
                                                    <ul class="sub__menu sub__dept--menu">
                                                        <li><a href="#">Desktop</a></li>
                                                        <li class="dropdown"><a href="#">Laptop</a>
                                                            <ul class="sub__menu level2">
                                                                <li><a href="#">Desktop</a></li>
                                                                <li><a href="#">Laptop</a></li>
                                                                <li><a href="#">Mobile</a></li>
                                                                <li><a href="#">Tablet</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Mobile</a></li>
                                                        <li><a href="#">Tablet</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dept__menu--dlink" href="#">Showpiece & Wall Art</a></li>
                                                <li><a class="dept__menu--dlink" href="#">Dining & Cabinetry</a></li>
                                                <li class="dropdown"><a class="dept__menu--dlink" href="#">Ceiling Light</a>
                                                    <ul class="sub__menu sub__dept--menu">
                                                        <li><a href="#">Desktop</a></li>
                                                        <li class="dropdown"><a href="#">Laptop</a>
                                                            <ul class="sub__menu level2">
                                                                <li><a href="#">Desktop</a></li>
                                                                <li><a href="#">Laptop</a></li>
                                                                <li><a href="#">Mobile</a></li>
                                                                <li><a href="#">Tablet</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Mobile</a></li>
                                                        <li><a href="#">Tablet</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a class="dept__menu--dlink" href="#">Festive & Outdoor</a>
                                                    <ul class="sub__menu sub__dept--menu">
                                                        <li><a href="#">Desktop</a></li>
                                                        <li class="dropdown"><a href="#">Laptop</a>
                                                            <ul class="sub__menu level2">
                                                                <li><a href="#">Desktop</a></li>
                                                                <li><a href="#">Laptop</a></li>
                                                                <li><a href="#">Mobile</a></li>
                                                                <li><a href="#">Tablet</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Mobile</a></li>
                                                        <li><a href="#">Tablet</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dept__menu--dlink" href="#">Comfoters & Sheets</a></li>
                                                <li><a class="dept__menu--dlink" href="#">Hardware & Software</a></li>
                                                <li><a class="dept__menu--dlink" href="#">Phone & Tablets</a></li>
                                                <li class="dropdown"><a class="dept__menu--dlink" href="#">View More Category</a>
                                                    <ul class="sub__menu sub__dept--menu">
                                                        <li><a href="#">Desktop</a></li>
                                                        <li class="dropdown"><a href="#">Laptop</a>
                                                            <ul class="sub__menu level2">
                                                                <li><a href="#">Desktop</a></li>
                                                                <li><a href="#">Laptop</a></li>
                                                                <li><a href="#">Mobile</a></li>
                                                                <li><a href="#">Tablet</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Mobile</a></li>
                                                        <li><a href="#">Tablet</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-7 col-2 d-flex align-items-center">
                            <div class="search--header__middle h2search--header__middle d-none d-lg-block">
                                <form class="search--header__form position-relative" action="#">
                                    <div class="header--search__box">
                                        <input class="header--search__query" type="text"
                                            placeholder="Search For Products...">
                                        <button class="header--search__btn"><i class="icofont-search-2"></i></button>
                                    </div>
                                    <div class="header--search__cate">
                                        <select name="header-search" id="header--search__main">
                                            <option value="1">All Categories</option>
                                            <option value="1">Lamps & Lighting</option>
                                            <option value="1">Mattress & Bedding</option>
                                            <option value="1">Housekeeping</option>
                                            <option value="1">Showpiece & Wall Art</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="cart--header__middle cart--header__two">
                                <div class="cart--header__list cart--header__list2 d-none d-xl-block">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fal fa-user-plus"></i></a></li>
                                        <li>
                                            <a href="#">
                                                <i class="fal fa-heart">
                                                    @if(\Cart::instance('wishlist')->count())
                                                        <span class="cart__count">{{ \Cart::instance('wishlist')->count() }}</span>
                                                    @endif
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="mini__cart--link" href="#">
                                                <i class="fal fa-bags-shopping">
                                                    @if(\Cart::instance('default')->count())
                                                        <span class="cart__count">{{ \Cart::instance('default')->count() }}</span>
                                                    @endif
                                                </i>
                                                <span class="cart__amount">
                                                    ${{ getPrice( \Cart::instance('default')->subtotal() ) }}
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mini__cart--box">
                                    <ul>
                                        @foreach(\Cart::instance('default')->content() as $item)
                                        <li class="mb-20">
                                            <div class="cart-image">
                                                <a href="#">
                                                    <img 
                                                    src="{{ $item->model->thumbnail?asset('storage/images/products/$item->model->thumbnail'):asset('storage/images/product-placeholder.png') }}" 
                                                    alt="">
                                                </a>
                                            </div>
                                            <div class="cart-text">
                                                <a 
                                                title="{{ $item->name }}"
                                                href="#" 
                                                class="title f-400 cod__black-color">{{ \Str::limit($item->name, 10) }}</a>
                                                <span class="cart-price f-400 dusty__gray-color">{{ $item->qty }} x <span class="price f-800 cod__black-color">${{ $item->model->getPrice() }}</span></span>
                                            </div>
                                            <div class="del-button">
                                                <a 
                                                onclick="event.preventDefault();document.querySelector('#remove_cart_item_header_{{$item->id}}').submit()"
                                                href="#">
                                                    <i class="icofont-close-line"></i>
                                                </a>

                                                <form id='remove_cart_item_header_{{$item->id}}' action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                            </div>
                                        </li>
                                        @endforeach
                                        <li>
                                            <div class="total-text d-flex justify-content-between">
                                                <span class="f-800 cod__black-color">Total Bag </span>
                                                <span class="f-800 cod__black-color">${{ getPrice(\Cart::subtotal()) }}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ route('checkout.index') }}" class="checkout">Checkout</a>
                                                <a href="{{ route('cart.index') }}" class="viewcart">View Cart</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header end /-->

        <!-- Main -->
        <main class="main--wrapper">
            
            <x-flashmessage />
            @yield('content')

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
        
         <!-- Footer -->
         <footer class="footer--area black-bg footer-three footer-two">
            <div class="footer--top pt-70">
                <div class="container">
                    <div class="row footer-border pb-15">
                        <div class="col-xl-4 col-lg-6 col-md-8 mb-30">
                            <div class="footer-widget">
                                <div class="footer-title">
                                    <h6 class="f-800">Contact Information</h6>
                                </div>
                                <div class="contacts-address">
                                    <div class="contacts-icon">
                                        <i class="icofont-headphone-alt-3"></i>
                                    </div>
                                    <div class="contacts-address--text">
                                        <span>Got Questions? Call Us 24/7</span>
                                        <h5 class="f-800">1800 665 222 / 1800 555 200</h5>
                                    </div>
                                </div>
                                <div class="contacts-address--footer">
                                    <p>502 New Design Str, Melbourne, Australia <a href="mailto:contact@martfury.co">contact@martfury.co</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-8 mb-30 order-md-3 order-lg-2">
                            <div class="footer-widget">
                                <div class="footer-title">
                                    <h6 class="f-800">Get to Know Us</h6>
                                </div>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Press Releases</a></li>
                                        <li><a href="#">Cart Cares</a></li>
                                        <li><a href="#">Gift a Smile</a></li>
                                        <li><a href="#">Your Account</a></li>
                                        <li><a href="#">Returns Center</a></li>
                                        <li><a href="#">100% Purchase Protection</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 mb-30 col-lg-6 col-md-4 order-md-2 order-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-title">
                                    <h6 class="f-800">Connect with Us</h6>
                                </div>
                                <div class="footer-menu h1foote-menu2">
                                    <ul>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Instagram</a></li>
                                        <li><a href="#">Youtube</a></li>
                                        <li><a href="#">Pintrest</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-4 mb-30 order-md-4 order-lg-4 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-title">
                                    <h6 class="f-800">Let Us Help You</h6>
                                </div>
                                <div class="footer-menu h1foote-menu2">
                                    <ul>
                                        <li><a href="#">Your Account</a></li>
                                        <li><a href="#">Returns Centre</a></li>
                                        <li><a href="#">100% Purchase Protection</a></li>
                                        <li><a href="#">Cartbit App Download</a></li>
                                        <li><a href="#">Help</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom footer-bottom-two black-bg pt-20 pb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-copyright">
                                <p class="m-0">Copyright {{ date('Y') }} RealProgrammer.net All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-payment--sponsors text-right">
                                <a href="#" class="payment-images"><img src="{{ asset('assets/img/payment/payment-thumb.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- JS here -->
        <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/one-page-nav-min.js') }}"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui-slider-range.js') }}"></script>
        <script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/Elemental.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

        @yield('custom_scripts')
    </body>
</html>
