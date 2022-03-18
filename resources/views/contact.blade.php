@extends('layout.main')

@section('title', 'Contact Us')

@section('content')
    <!-- Main -->
    <main class="main--wrapper">

        <!-- contact google map start -->
        <section class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d387193.30602252256!2d-74.25987168979924!3d40.69714940431937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1593511321262!5m2!1sen!2sbd"></iframe>
        </section>
        <!-- contact google map end -->

        <!-- contact area start -->
        <section class="contact-area pt-80 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="contact-form">
                            <h4 class="title">Send A Message</h4>
                            <form action="#">
                                <div class="field">
                                    <input type="text" placeholder="Enter Name">
                                    <input type="email" placeholder="Email Address">
                                </div>
                                <input type="text" placeholder="Name Of Subject">
                                <textarea placeholder="Desciption"></textarea>
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-1 col-lg-5">
                        <div class="contact-text">
                            <div class="single-text mb-30">
                                <i class="icofont-telephone"></i>
                                <h5>Contact customer service</h5>
                                <p>Need assistance? Our customer service is here to
                                    assist you Monday through Friday from
                                    9 am EST to 10 pm EST.</p>
                                    <h5>+4.509.120.6705</h5>
                            </div>
                            <div class="single-text">
                                <i class="icofont-bug"></i>
                                <h5>Wummo Bug FAQs</h5>
                                <p>You might find the answer you’re looking for in our
                                    frequently asked questions.</p>
                                    <a href="#"><i class="icofont-plus"></i>View FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->

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