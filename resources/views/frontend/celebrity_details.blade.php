@extends('frontend.main_master')
@section('main')
    <div id="main-wrapper">

        <!--Page Banner Section start-->
        <div class="page-banner-section section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="page-banner-title">Celebrity Details</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Celebrity Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Banner Section end-->

        <!--Agent Section start-->
        <div
            class="agent-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row row-25">
                    <!--Agent Image-->
                    <div class="col-lg-5 col-12 mb-30">
                        <div class="agent-image">
                            <img src="{{ url('upload/celebrity/' . $celebrity->image) }}" alt="{{ $celebrity->name }}">
                        </div>
                    </div>

                    <!--Agent Content-->
                    <div class="col-lg-7 col-12">
                        <div class="agent-content">
                            <h3 class="title">
                                {{ $celebrity->name }}
                            </h3>
                            <p>
                                {!! $celebrity->short_description !!}
                            </p>
                            <div class="row">
                                <div class="col-md-6 col-12 mb-30">
                                    <h4 style="color: #004395;">Persoanl Info</h4>
                                    <ul>
                                        <li>
                                            <span>Name:</span>
                                            {{ $celebrity->name }}
                                        </li>
                                        <li>
                                            <span>Occupation:</span><a href="#">
                                                {{ $celebrity->occupation }}
                                            </a>
                                        </li>
                                        <li>
                                            <span>Known For:</span><a href="#">
                                                {{ $celebrity->known_for }}
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="col-md-6 col-12 mb-30">
                                    <h4 style="color: #004395;">Agency Event Price Info</h4>
                                    <ul>
                                        <li>
                                            <span>Meet and Greet:</span> <span>
                                                {{ $celebrity->birthday_fee }}
                                            </span>
                                        </li>
                                        <li><span>Vacation:</span> <span>
                                                {{ $celebrity->acceptance_fee }}
                                            </span></li>
                                        <li><span>VIP Card and Access:</span> <span>
                                                {{ $celebrity->music_fee }}
                                            </span></li>
                                        <li><span>Endoresment:</span> <span>
                                                {{ $celebrity->endorsement }}
                                            </span></li>
                                        <li><span>Virtual Event:</span> <span>
                                                {{ $celebrity->virtual_event }}
                                            </span></li>
                                        <li><span>Event Invitation:</span> <span>
                                                {{ $celebrity->wedding_fee }}
                                            </span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Agent Section end-->

        <!--Add Properties section start-->
        <div
            class="add-properties-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="add-property-wrap col">
                        <h1 class="">Tell us about your Event</h1>
                        <span class="mb-5">During normal business hours, we respond to most inquires in 4
                            hours</span>

                        <div class="add-property-form tab-content">
                            <div class="tab-pane show active" id="basic_info">
                                <div class="tab-body">

                                    <!-- Client Form -->
                                    <form action="{{ route('post.message') }}" method="POST" enctype="multipart/form-data"
                                        onclick="">
                                        @csrf
                                        <div class="row">
                                            <input type="hidden" name="celebId" value="{{ $celebrity->id }}">

                                            <div class="col-6 mb-30 mt-5">
                                                <label for="property_title">Celebrity</label>
                                                <input type="text" id="property_title" name="celebrity_name" required
                                                    value="{{ $celebrity->name }}" />
                                            </div>
                                            <div class="col-6 mb-30 mt-5">
                                                <label for="property_title">Event Date</label>
                                                <input type="date" id="property_title" name="event_date"
                                                    value="MM/DD/YYYY" placeholder="" />
                                            </div>



                                            <div class="col-md-4 col-6 mb-30">
                                                <label>Type of Event</label>
                                                <select name="event_type" class="nice-select">
                                                    <option value="">Select Event</option>
                                                    <option value="Birthday">Birthday</option>
                                                    <option value="Meet and Greet">Meet and Greet</option>
                                                    <option value="Convention/Trade Show">Convention/Trade Show
                                                    </option>
                                                    <option value="Cooking Demo">Cooking Demo</option>
                                                    <option value="Endorsement/Spokesperson">
                                                        Endorsement/Spokesperson</option>
                                                    <option value="Funeral">Funeral</option>
                                                    <option value="Musical Performance">Musical Performance</option>
                                                    <option value="Personal Appearance">Personal Appearance</option>
                                                    <option value="Satellite Media Tour">Satellite Media Tour
                                                    </option>
                                                    <option value="Speaking Engagement">Speaking Engagement</option>
                                                    <option value="Virtual Event">Virtual Event</option>
                                                    <option value="Wedding">Wedding</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4 col-6 mb-30">
                                                <label for="property_address">Event Location</label>
                                                <input type="text" id="property_address" name="event_location"
                                                    placeholder="Enter Location" />
                                            </div>

                                            <div class="col-md-4 col-12 mb-30">
                                                <textarea id="property_address" class="form-control" name="event_message" aria-invalid="false"
                                                    placeholder="Additional information about your event**"></textarea>
                                            </div>

                                            <hr>
                                            <h1 class="mb-5">Tell us more about yourself</h1>

                                            <div class="col-md-4 col-6 mb-30">
                                                <label for="property_address">Name</label>
                                                <input type="text" id="property_address" name="client_name"
                                                    placeholder="Enter Fullname" required />
                                            </div>

                                            <div class="col-md-4 col-6 mb-30">
                                                <label for="property_address">Phone Number</label>
                                                <input type="text" id="property_address" name="phone"
                                                    placeholder="Enter number" required />
                                            </div>

                                            <div class="col-md-4 col-6 mb-30">
                                                <label for="property_address">Email</label>
                                                <input type="email" id="property_address" name="email"
                                                    placeholder="example@gmail.com" required />
                                            </div>

                                            <div class="col-md-4 col-6 mb-30">
                                                <label for="property_address">Occupation</label>
                                                <input type="text" id="property_address" name="job_title"
                                                    placeholder="" required />
                                            </div>

                                            <div class="col-md-4 col-6 mb-30">
                                                <label for="property_address">Current Address</label>
                                                <input type="text" id="property_address" name="address"
                                                    placeholder="" required />
                                            </div>

                                            <div class="col-md-4 col-6 mb-30">
                                                <label for="property_address">Sex</label>
                                                <input type="text" id="property_address" name="gender"
                                                    placeholder="" required />
                                            </div>

                                            <div class="col-md-4 col-12 mb-30">
                                                <label for="property_address">Airport</label>
                                                <input type="text" id="property_address" name="airport"
                                                    placeholder="Enter Nearest Airport" required />
                                            </div>


                                            <div class="nav d-flex justify-content-end col-12 mb-30 pl-15 pr-15">
                                                <button type="submit" name="submit" class="btn">Submit Booking
                                                    Request</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Add Properties section end-->

        <!--Footer section start-->
        @include('frontend.body.footer')
        <!--Footer section end-->
    </div>
@endsection
