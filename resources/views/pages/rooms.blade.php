@extends('layouts.master')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{asset('img')}}/general/shine-2.jpg">
        <div class="container">
            <div class="row">
			<div class="col-md-12 caption mt-90">
			    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
				<h5>Shine Apart Hotel</h5>
				<h1>Our Apartments</h1>
			</div>
			</div>
        </div>
    </div>
    <!-- <section class="rooms1 section-padding bg-cream" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{asset('img')}}/rooms/1.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                        <div class="con">
                            <h6><a href="room-details.html">₺800 / Night</a></h6>
                            <h5><a href="room-details.html">Studio Apartment</a> </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-end">
                                    <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{asset('img')}}/rooms/2.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                        <div class="con">
                            <h6><a href="room-details.html">₺1200 / Night</a></h6>
                            <h5><a href="room-details.html">Family Apartment</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-end">
                                    <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{asset('img')}}/rooms/3.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                        <div class="con">
                            <h6><a href="room-details.html">₺1000 / Night</a></h6>
                            <h5><a href="room-details.html">Deluxe Apartment</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-end">
                                    <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{asset('img')}}/rooms/4.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                        <div class="con">
                            <h6><a href="room-details.html">₺1500 / Night</a></h6>
                            <h5><a href="room-details.html">Executive Apartment</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-end">
                                    <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{asset('img')}}/rooms/7.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                        <div class="con">
                            <h6><a href="room-details.html">₺900 / Night</a></h6>
                            <h5><a href="room-details.html">Standard Apartment</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-end">
                                    <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
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