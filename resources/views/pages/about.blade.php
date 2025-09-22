@extends('layouts.master')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{asset('img')}}/general/shine-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>Antalya Apart Hotel</h5>
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
                    <div class="section-subtitle">Shine Apart Hotel</div>
                    <div class="section-title">Comfortable Stay in Antalya</div>
                    <p>Welcome to Shine Apart Hotel, located in the heart of Antalya. We offer a comfortable accommodation
                        experience with our 12 modern and spacious apartment units. Each room features a fully equipped
                        kitchen, allowing you to prepare your own meals and enjoy a relaxed vacation with your family.</p>
                    <p>Our apart hotel is ideally positioned close to Antalya's most beautiful beaches and historical sites,
                        making it perfect for both vacation and business trips. With our modern amenities and friendly
                        atmosphere, we help you create unforgettable memories.</p>
                    <!-- reservation -->
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:+905324241981">+90 532 424 19 81</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img
                        src="{{asset('img')}}/rooms/B-1-3.jpg" alt="" class="mt-90 mb-30"> </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img
                        src="{{asset('img')}}/rooms/B-1-6.jpg" alt=""> </div>
            </div>
        </div>
    </section>
  
    <!-- Pricing -->
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
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{asset('img')}}/all/shine-d-04.jpg"
            data-overlay-dark="3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h6>Testimonials</h6>
                                <h4>What Client's Say?</h4>
                                <div class="line"></div>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <span class="quote"><img src="{{asset('img')}}/quot.png" alt=""></span>
                                    <p>The hotel is conveniently located near the airport, making it an ideal choice for
                                        travelers. The staff was incredibly helpful and ensured a comfortable stay. The
                                        rooms were clean and well-maintained. Highly recommended!</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{asset('img')}}/team/4.jpg" alt=""> </div>
                                        <div class="cont">
                                            <span>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                            </span>
                                            <h6>Sarah Johnson</h6>
                                            <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote"><img src="{{asset('img')}}/quot.png" alt=""></span>
                                    <p>I had a pleasant stay at the hotel. The staff was friendly and always ready to
                                        assist. The room was spacious and equipped with all necessary amenities. The
                                        proximity to local attractions was a plus.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{asset('img')}}/team/1.jpg" alt=""> </div>
                                        <div class="cont">
                                            <span>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                            </span>
                                            <h6>Michael Chen</h6>
                                            <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="{{asset('img')}}/quot.png" alt=""></span>
                                    <p>The rooms were comfortable and provided a homely feel. The hotel's hospitality was
                                        commendable, with staff going out of their way to make guests feel welcome. The
                                        location was also convenient for exploring the city.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{asset('img')}}/team/5.jpg" alt=""> </div>
                                        <div class="cont">
                                            <span>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                            </span>
                                            <h6>Emma Rodriguez</h6>
                                            <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="{{asset('img')}}/quot.png" alt=""></span>
                                    <p>The hotel offers good value for money. The facilities are adequate, and the staff is
                                        courteous. It's a suitable place for both short and long stays, with easy access to
                                        transportation and local sites.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{asset('img')}}/team/2.jpg" alt=""> </div>
                                        <div class="cont">
                                            <span>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                                <i class="star-rating"></i>
                                            </span>
                                            <h6>David Thompson</h6>
                                            <span>Guest review</span>
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

    <!-- Facilties -->
    <section class="facilties section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Our Services</div>
                    <div class="section-title">Apart Hotel Facilities</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-world"></span>
                        <h5>Airport Transfer</h5>
                        <p>Comfortable airport transfer service to make your arrival and departure hassle-free.</p>
                        <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-car"></span>
                        <h5>Free Parking</h5>
                        <p>Complimentary parking space available for all our guests during their stay.</p>
                        <div class="facility-shape"> <span class="flaticon-car"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-bed"></span>
                        <h5>Fully Equipped Kitchen</h5>
                        <p>Each apartment features a complete kitchen with modern appliances for your convenience.</p>
                        <div class="facility-shape"> <span class="flaticon-bed"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-swimming"></span>
                        <h5>Beach Access</h5>
                        <p>Easy access to Antalya's beautiful beaches, just minutes away from our location.</p>
                        <div class="facility-shape"> <span class="flaticon-swimming"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-wifi"></span>
                        <h5>Free WiFi</h5>
                        <p>High-speed internet connection available throughout the property at no extra cost.</p>
                        <div class="facility-shape"> <span class="flaticon-wifi"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-breakfast"></span>
                        <h5>Tour Assistance</h5>
                        <p>Personal assistance with local tour bookings and recommendations for the best Antalya experience.
                        </p>
                        <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection