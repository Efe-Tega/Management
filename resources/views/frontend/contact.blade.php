@extends('frontend.main_master')
@section('main')
    @php
        $contactDetails = App\Models\User::find(1);
    @endphp
    <!--Page Banner Section start-->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="page-banner-title">Contact us</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Page Banner Section end-->

    <!--New property section start-->
    <div
        class="contact-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">

                <div class="col-12 mb-50">
                    <div class="embed-responsive embed-responsive-21by9">
                        <div id="contact-map" class="embed-responsive-item contact-map" data-lat="40.730610"
                            data-Long="-73.935242"></div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">

                        <div class="contact-info col-md-4 col-12 mb-30">
                            <i class="pe-7s-map"></i>
                            <h4>address</h4>
                            <p>
                                {{ $contactDetails->address }}
                            </p>
                        </div>

                        <div class="contact-info col-md-4 col-12 mb-30">
                            <i class="pe-7s-phone"></i>
                            <h4>Phone</h4>
                            <p><a href="#">
                                    {{ $contactDetails->number }}
                                </a></p>
                        </div>

                        <div class="contact-info col-md-4 col-12 mb-30">
                            <i class="pe-7s-global"></i>
                            <h4>Email</h4>
                            <p><a href="#">
                                    {{ $contactDetails->site_email }}
                                </a></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--New property section end-->

    <!--New property section start-->
    <div
        class="contact-section section bg-gray pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">

            <!--Section Title start-->
            <div class="row">
                <div class="col-md-12 mb-60 mb-xs-30">
                    <div class="section-title center">
                        <h1>Leave a Message</h1>
                    </div>
                </div>
            </div>
            <!--Section Title end-->

            <div class="row">

                <div class="contact-form-wrap col-12">
                    <div class="contact-form">
                        <form id="contact-form" action="assets/php/mail.php">
                            <div class="row">
                                <div class="col-md-6 col-12 mb-30"><input name="name" type="text" placeholder="Name">
                                </div>
                                <div class="col-md-6 col-12 mb-30"><input name="email" type="email" placeholder="Email">
                                </div>
                                <div class="col-md-6 col-12 mb-30"><input name="phone" type="text" placeholder="Phone">
                                </div>
                                <div class="col-md-6 col-12 mb-30"><input name="subject" type="text"
                                        placeholder="Subject"></div>
                                <div class="col-12 mb-30">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12 text-center"><button class="btn">submit</button></div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--New property section end-->
@endsection
