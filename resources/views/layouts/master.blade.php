<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title', 'Shine Apart Hotel')</title>
    <meta name="description" content="Experience comfort and relaxation at Shine Apart Hotel in Antalya Turkey. Our hotel offers elegant rooms and exceptional service for an unforgettable stay on Turkey's beautiful coast.">
    <meta name="author" content="Shine Apart Hotel">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="{{asset('img')}}/favicon.png" type="image/png" sizes="32x32">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400&family=Barlow:wght@400&family=Gilda+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css')}}/plugins.css" />
    <link rel="stylesheet" href="{{asset('css')}}/style.css" />
</head>
<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="logo" href="{{route('index')}}"> <img src="{{asset('img')}}/logo.png" class="logo-img" alt=""> </a>
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                   
                    <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('rooms')}}">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('gallery')}}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('services')}}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

        <!-- Reservation & Booking Form -->
        <section class="testimonials" data-scroll-index="1">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{asset('img')}}/slider/2.jpg" data-overlay-dark="2">
            <div class="container">
                <div class="row">
                    <!-- Reservation -->
                    <div class="col-md-5 mb-30 mt-30">
                        <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></p>
                        <h5>Each of our apartment units features a fully equipped kitchen, private bathroom, free WiFi, and modern amenities for a comfortable stay.</h5>
                        <div class="reservations mb-30">
                            <div class="icon color-1"><span class="flaticon-call"></span></div>
                            <div class="text">
                                <p class="color-1">Reservation</p> <a class="color-1" href="tel:+905324241981">+90 532 424 19 81</a>
                            </div>
                        </div> 
                        <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>
                    </div>
                    <!-- Booking From -->
                    <div class="col-md-5 offset-md-2">
                        <div class="booking-box">
                            <div class="head-box">
                                <h6>Apartments</h6>
                                <h4>Apart Hotel Booking Form</h4>
                            </div>
                            <div class="booking-inner clearfix">
                                <form action="rooms2.html" class="form1 clearfix">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Check in</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input datepicker" placeholder="Check in">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Check out</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input datepicker" placeholder="Check out">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <label>Adults</label>
                                                <div class="select1_inner">
                                                    <select class="select2 select" style="width: 100%">
                                                        <option value="0">Adults</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <label>Children</label>
                                                <div class="select1_inner">
                                                    <select class="select2 select" style="width: 100%">
                                                        <option value="0">Children</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-form1-submit mt-15">Check Availability</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-column footer-about">
                            <h3 class="footer-title">About Shine Apart Hotel</h3>
                            <p class="footer-about-text">Welcome to Shine Apart Hotel in Antalya. We offer comfortable accommodation with fully equipped kitchens in each of our 12 modern apartment units.</p>

                            <div class="footer-language"> <i class="lni ti-world"></i>
                                    <select onchange="location = this.value;">
                                        <option value="#0">English</option>
                                        <option value="#0">Turkish</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="footer-column footer-explore clearfix">
                            <h3 class="footer-title">Explore</h3>
                            <ul class="footer-explore-list list-unstyled">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('rooms')}}">Rooms</a></li>
                                <li><a href="{{route('gallery')}}">Gallery</a></li>
                                <li><a href="{{route('services')}}">Services</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-column footer-contact">
                            <h3 class="footer-title">Contact</h3>
                            <p class="footer-contact-text">Ermenek, 5. Sk. No:5, 07230 Muratpaşa/Antalya</p>
                            <div class="footer-contact-info">
                                <p class="footer-contact-phone"><span class="flaticon-call"></span>+90 532 424 19 81</p>
                                <p class="footer-contact-mail">reservation@shinehotels.com.tr</p>
                            </div>
                            <div class="footer-about-social-list">
                                <a href="#"><i class="ti-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="ti-youtube"></i></a>
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-inner">
                            <p class="footer-bottom-copy-right">© Copyright 2025 by <a href="#">Shine Apart Hotel</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="{{asset('js')}}/jquery-3.7.1.min.js"></script>
    <script src="{{asset('js')}}/jquery-migrate-3.5.0.min.js"></script>
    <script src="{{asset('js')}}/modernizr-2.6.2.min.js"></script>
    <script src="{{asset('js')}}/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('js')}}/jquery.isotope.v3.0.2.js"></script>
    <script src="{{asset('js')}}/pace.js"></script>
    <script src="{{asset('js')}}/popper.min.js"></script>
    <script src="{{asset('js')}}/bootstrap.min.js"></script>
    <script src="{{asset('js')}}/scrollIt.min.js"></script>
    <script src="{{asset('js')}}/jquery.waypoints.min.js"></script>
    <script src="{{asset('js')}}/owl.carousel.min.js"></script>
    <script src="{{asset('js')}}/jquery.stellar.min.js"></script>
    <script src="{{asset('js')}}/jquery.magnific-popup.js"></script>
    <script src="{{asset('js')}}/YouTubePopUp.js"></script>
    <script src="{{asset('js')}}/select2.js"></script>
    <script src="{{asset('js')}}/datepicker.js"></script>
    <script src="{{asset('js')}}/smooth-scroll.min.js"></script>
    <script src="{{asset('js')}}/custom.js"></script>
</body>
</html>