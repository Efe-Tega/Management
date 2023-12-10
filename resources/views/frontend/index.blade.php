@extends('frontend.main_master')
@section('main')
    @php
        $homeContent = App\Models\HomeContent::find(1);
        $celebrity = App\Models\Celebrity::all();
    @endphp
    <!--Hero Section start-->
    <div class="hero-section section position-relative">
        <!--Hero Slider start-->
        <div class="hero-slider section">
            <!--Hero Item start-->
            <div class="hero-item" style="background-image: url({{ asset('frontend/assets/images/hero/hero-1.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!--Hero Content start-->
                            <div class="hero-property-content text-center">
                                <h1 class="title">
                                    <a href="#">
                                        Celebrity Booking
                                    </a>
                                </h1>

                                <span class="location">
                                    <a href="{{ route('celebrity.list') }}"><button class="btn btn-primary rounded">book
                                            now</button></a>
                                </span>
                            </div>
                            <!--Hero Content end-->
                        </div>
                    </div>
                </div>
            </div>
            <!--Hero Item end-->

            <!--Hero Item start-->
            <div class="hero-item" style="background-image: url({{ asset('frontend/assets/images/hero/hero-3.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!--Hero Content start-->
                            <div class="hero-property-content text-center">
                                <h1 class="title">
                                    <a href="#">
                                        Celebrity Booking
                                    </a>
                                </h1>

                            </div>
                            <!--Hero Content end-->
                        </div>
                    </div>
                </div>
            </div>
            <!--Hero Item end-->
        </div>
        <!--Hero Slider end-->
    </div>
    <!--Hero Section end-->

    <!--Welcome Khonike-->
    <div
        class="feature-section feature-section-border-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
        <div class="container">
            <div class="row row-25 align-items-center">

                <!--Feature Image start-->
                <div class="col-lg-5 col-12 order-1 order-lg-2 mb-40">
                    <div class="feature-image"><img src="{{ $homeContent->about_image }}" alt="" class="rounded">
                    </div>
                </div>
                <!--Feature Image end-->

                <div class="col-lg-7 col-12 order-2 order-lg-1 mb-40">

                    <div class="row">
                        <div class="col">
                            <div class="about-content">
                                <h3>Welcome to <span> CAA </span></h3>
                                <h1>{{ $homeContent->title }}</h1>
                                <p>
                                    {!! Str::limit($homeContent->short_description, 500) !!} &nbsp;
                                    <span style="color:blue;"><a href="{{ route('about') }}">Read More</a></span>

                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--Welcome Khonike end-->

    <!--Feature property section start-->
    <div
        class="property-section section bg-gray pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">
            <!--Section Title start-->
            <div class="row">
                <div class="col-md-12 mb-10 mb-xs-30">
                    <div class="section-title center">
                        <h1>Featured Celebrity</h1>
                    </div>
                </div>
            </div>
            <!--Section Title end-->


            <!--New property section start-->
            <div
                class="property-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
                <div class="container-fluid">

                    <div class="row">
                        <!-- CELEBRITY LIST-->
                        @foreach ($celebrity as $item)
                            <!--Property start-->
                            <div class="property-item col-lg-4 col-md-6 col-12 mb-40">
                                <div class="property-inner">
                                    <div class="image">
                                        <a href="{{ route('celebrity.details', $item->id) }}"><img
                                                src="{{ url('upload/celebrity/' . $item->image) }}" alt=""></a>

                                    </div>
                                    <div class="content">
                                        <div class="left">
                                            <h3 class="title"><a href="">
                                                    {{ $item->name }}
                                                </a></h3>
                                            <span>
                                                {!! Str::limit($item->short_description, 100) !!}
                                                <span style="color:blue;"><a
                                                        href="{{ route('celebrity.details', $item->id) }}">Read
                                                        More</a></span>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!--Property end-->

                    </div>


                </div>
            </div>
            <!--New property section end-->

        </div>
    </div>
    <!--Feature property section end-->
@endsection
