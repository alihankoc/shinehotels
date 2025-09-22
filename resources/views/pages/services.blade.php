@extends('layouts.master')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{asset('img')}}/general/shine-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Apart Hotel Facilities</h5>
                    <h1>Our Services</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Services -->
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="restaurant.html"><img src="{{asset('img')}}/rooms/kitchen.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Discover</h6>
                            </div>
                            <h4>Fully Equipped Kitchen</h4>
                            <p>Each apartment features a complete kitchen with modern appliances for your convenience. Prepare your own meals and enjoy the comfort of home cooking during your stay in Antalya.</p>
                            <div class="butn-dark"> <a href="restaurant.html"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>Beach Access</h4>
                            <p>Easy access to Antalya's beautiful beaches, just minutes away from our location. Enjoy the Mediterranean sun and crystal clear waters during your stay.</p>
                            <div class="butn-dark"> <a href="spa-wellness.html"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="spa-wellness.html"><img src="{{asset('img')}}/general/beach.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="spa-wellness.html"><img src="{{asset('img')}}/general/wifi.webp" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Modern</h6>
                            </div>
                            <h4>Free WiFi</h4>
                            <p>High-speed internet connection available throughout the property at no extra cost. Stay connected with your loved ones and work remotely if needed.</p>
                            <div class="butn-dark"> <a href="spa-wellness.html"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>Tour Assistance</h4>
                            <p>Personal assistance with local tour bookings and recommendations for the best Antalya experience. Our friendly staff will help you discover the hidden gems of the city.</p>
                            <div class="butn-dark"> <a href="spa-wellness.html"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="spa-wellness.html"><img src="{{asset('img')}}/general/tour-assist.jpeg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="#"><img src="{{asset('img')}}/general/airport-transfer.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Transport</h6>
                            </div>
                            <h4>Airport Transfer</h4>
                            <p>Comfortable airport transfer service to make your arrival and departure hassle-free. Our professional drivers ensure a safe and pleasant journey to and from Antalya Airport.</p>
                            <div class="butn-dark"> <a href="#"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Convenience</h6>
                            </div>
                            <h4>Free Parking</h4>
                            <p>Complimentary parking space available for all our guests during their stay. No need to worry about finding parking spots in the city center.</p>
                            <div class="butn-dark"> <a href="#"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="#"><img src="{{asset('img')}}/general/parking.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-title"><span>Extra Services</span></div>
                    <p class="color-2">Enjoy the best prices for your comfortable stay in Antalya. Our apart hotel offers
                        excellent value for money with fully equipped kitchens and modern amenities.</p>
                    <p class="color-2">We provide additional services to make your stay more convenient, including
                        housekeeping, airport transfers, and local tour arrangements.</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p class="color-2">For information</p> <a href="tel:+905324241981">+90 532 424 19 81</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme">

                        <div class="pricing-card">
                            <img src="{{asset('img')}}/general/airport-transfer.jpg" alt="">
                            <div class="desc">
                                <div class="name">Airport Transfer</div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Comfortable vehicle</li>
                                    <li><i class="ti-check"></i> Professional driver</li>
                                    <li><i class="ti-check"></i>Multiple stops included</li>
                                </ul>
                            </div>
                        </div>

                        <div class="pricing-card">
                            <img src="{{asset('img')}}/general/tour-assist.jpeg" alt="">
                            <div class="desc">
                                <div class="name">Tour Assistance</div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Local tour recommendations</li>
                                    <li><i class="ti-check"></i> Booking assistance</li>
                                    <li><i class="ti-check"></i>Guided tours included</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection