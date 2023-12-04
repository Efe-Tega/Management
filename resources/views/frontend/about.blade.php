@extends('frontend.main_master')
@section('main')
    <!--Page Banner Section start-->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="page-banner-title">About us</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">About us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Page Banner Section end-->


    <div
        class="feature-section feature-section-border-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
        <div class="container">
            <div class="row row-25 align-items-center">

                <!--Feature Image start-->
                <div class="col-lg-5 col-12 order-1 order-lg-2 mb-40">
                    <div class="feature-image"><img src="{{ asset('frontend/assets/images/others/feature.jpg') }}"
                            alt=""></div>
                </div>
                <!--Feature Image end-->

                <div class="col-lg-7 col-12 order-2 order-lg-1 mb-40">

                    <div class="row">
                        <div class="col">
                            <div class="about-content">
                                <h3>{{ $homeContent->intro }}</h3>
                                <h1>{{ $homeContent->title }}</h1>
                                <p>
                                    {!! $homeContent->short_description !!}
                                </p>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!--Testimonial Section start-->
    <div
        class="testimonial-section section bg-gray pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">

            <!--Section Title start-->
            <div class="row">
                <div class="col-md-12 mb-60 mb-xs-30">
                    <div class="section-title center">
                        <h1>What Client's Say</h1>
                    </div>
                </div>
            </div>
            <!--Section Title end-->

            <div class="row">

                <!--Review start-->
                <div class="review-slider section">
                    <div class="review col">
                        <div class="review-inner">
                            <div class="image"><img src="{{ asset('frontend/assets/images/review/review-2.jpeg') }}"
                                    alt=""></div>
                            <div class="content">
                                <p>I was able to meet my favorite celebrity through CelebAura Agency, and I'm so happy.
                                    Never thought it was possible tho, not to mention their service is top notch
                                </p>
                                <h6>Melissa Katherina</h6>
                            </div>
                        </div>
                    </div>

                    <div class="review col">
                        <div class="review-inner">
                            <div class="image"><img src="{{ asset('frontend/assets/images/review/review-1.jpg') }}"
                                    height="70px" alt="">
                            </div>
                            <div class="content">
                                <p>Well, all I can say is good job to CelebAura Agency, please keep up the good works
                                    and be the good egg among bad eggs</p>
                                <h6>John Carlson </h6>
                            </div>
                        </div>
                    </div>



                    <div class="review col">
                        <div class="review-inner">
                            <div class="image"><img src="{{ asset('frontend/assets/images/review/review-3.jpeg') }}"
                                    alt=""></div>
                            <div class="content">
                                <p>It's honestly and totally worth the shot, met with my favorite celebrity which I have
                                    been trying to acheive for years but CelebAura Agency made it possible with ease.
                                    I'm really impressed!</p>
                                <h6>Emma Romero</h6>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Review end-->

            </div>
        </div>
    </div>
    <!--Testimonial Section end-->
@endsection
