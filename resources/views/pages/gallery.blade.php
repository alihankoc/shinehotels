@extends('layouts.master')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{asset('img')}}/slider/3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Shine Apart Hotel</h5>
                    <h1>Our Image Gallery</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Gallery -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Scenes from our hotel</div>
                </div>
                <!-- 3 columns -->
                <div class="col-md-4 gallery-item">
                    <a href="{{asset('img')}}/slider/7.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{asset('img')}}/slider/7.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{asset('img')}}/slider/5.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{asset('img')}}/slider/5.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{asset('img')}}/slider/4.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{asset('img')}}/slider/4.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <!-- 2 columns -->
                <div class="col-md-6 gallery-item">
                    <a href="{{asset('img')}}/slider/2.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{asset('img')}}/slider/2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 gallery-item">
                    <a href="{{asset('img')}}/slider/1.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{asset('img')}}/slider/1.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <!-- 3 columns -->
                <div class="col-md-4 gallery-item">
                    <a href="{{asset('img')}}/rooms/8.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{asset('img')}}/rooms/8.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{asset('img')}}/rooms/5.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{asset('img')}}/rooms/5.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{asset('img')}}/rooms/10.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{asset('img')}}/rooms/10.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Gallery -->
@endsection