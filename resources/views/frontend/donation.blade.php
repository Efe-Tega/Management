@extends('frontend.main_master')
@section('main')
    <style>

    </style>


    <!--Page Banner Section start-->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="page-banner-title">Save Ukraine to War</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Donation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Page Banner Section end-->

    <!--Save Section start-->
    <div class="agent-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">
            <div class="col-lg-7 col-12 order-2 order-lg-1 mb-40">

                <div class="row">
                    <div class="col">
                        <div class="about-content bg-white">
                            <h3> <span> #Save Ukraine To Stop War </span></h3>
                            <p>
                                By donating, you'll help provide food, shelter and healthcare to the people of Ukraine, you
                                also help cushion the effect of the Earthquake in Turkey and Syria's displaced families.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="agent-carousel section slider-space-30">
                    <!--Help satrt-->
                    <div class="col">
                        <div class="agent">
                            <div class="image">
                                <a class="img" href="agent-details.html"><img
                                        src="{{ asset('frontend/assets/images/agent/agent-1.jpg') }}" alt="" /></a>

                            </div>
                            <div class="content bg-white">
                                <h4 class="title">
                                    <a href="agent-details.html">Help for shelter</a>
                                </h4>

                                <span>50£ could provide blanket for three families</span>
                            </div>
                        </div>
                    </div>
                    <!--Help end-->

                    <!--Help satrt-->
                    <div class="col">
                        <div class="agent">
                            <div class="image">
                                <a class="img" href="agent-details.html"><img
                                        src="{{ asset('frontend/assets/images/agent/agent-2.jpg') }}" alt="" /></a>

                            </div>
                            <div class="content bg-white">
                                <h4 class="title">
                                    <a href="agent-details.html">Help For Healthcare </a>
                                </h4>

                                <span>Provides medication for kids and elderly</span>
                            </div>
                        </div>
                    </div>
                    <!--Help end-->

                    <!--Help satrt-->
                    <div class="col">
                        <div class="agent">
                            <div class="image">
                                <a class="img" href="agent-details.html"><img
                                        src="{{ asset('frontend/assets/images/agent/agent-3.jpg') }}" alt="" /></a>

                            </div>
                            <div class="content bg-white">
                                <h4 class="title">
                                    <a href="agent-details.html">Help For Food</a>
                                </h4>

                                <span>lets dedicate 0.1% of our salary for provision of food to
                                    Ukrainians</span>
                            </div>
                        </div>
                    </div>
                    <!--Help end-->

                    <!--Help satrt-->
                    <div class="col">
                        <div class="agent">
                            <div class="image">
                                <a class="img" href="agent-details.html"><img
                                        src="{{ asset('frontend/assets/images/agent/agent-4.jpg') }}" alt="" /></a>

                            </div>
                            <div class="content bg-white">
                                <h4 class="title">
                                    <a href="agent-details.html">Safer Environment</a>
                                </h4>

                                <span>Lets provider safer environment for nursing mothers and unborn
                                    child</span>
                            </div>
                        </div>
                    </div>
                    <!--Help end-->


                </div>
            </div>

            <div class="text-center mb-3"><button id="myBtn" class="btn rounded">Donate now</button></div>

        </div>
    </div>
    <!--Save Section end-->

    <!--Funfact Section start-->
    <div
        class="funfact-section pattern-green section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">

                <!--Funfact start-->
                <div class="single-fact col-lg-4 col-6 mb-30">
                    <div class="inner">
                        <div class="head">
                            <h3 class="counter">180&#43;</h3>&nbsp; &nbsp;
                            <p>Featured Campaign</p>
                        </div>
                    </div>
                </div>
                <!--Funfact end-->

                <!--Funfact start-->
                <div class="single-fact col-lg-4 col-6 mb-30">
                    <div class="inner">
                        <div class="head">
                            <h3 class="counter">280&#43;</h3>&nbsp; &nbsp;
                            <p>Dedicated Volunteers </p>
                        </div>
                    </div>
                </div>
                <!--Funfact end-->

                <!--Funfact start-->
                <div class="single-fact col-lg-4 col-6 mb-30">
                    <div class="inner">
                        <div class="head">
                            <h3 class="counter">1560&#43;</h3>&nbsp; &nbsp;
                            <p>People Helped Happily </p>
                        </div>
                    </div>
                </div>
                <!--Funfact end-->

            </div>
        </div>
    </div>
    <!--Funfact Section end-->

    <div
        class="contact-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">

            <div class="col-lg-7 col-12 order-2 order-lg-1 mb-40">

                <div class="row">
                    <div class="col">
                        <div class="about-content bg-white">
                            <h3> <span> Image Gallery </span></h3>
                            <h1>
                                Projects we have done
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="gallery">
                    <img src="{{ asset('frontend/assets/images/testImg/blog-1.jpg') }}" alt="" />
                    <img src="{{ asset('frontend/assets/images/testImg/breadcrumb-1.jpg') }}" alt="" />
                    <img src="{{ asset('frontend/assets/images/testImg/breadcrumb-2.png') }}" alt="" />
                    <img src="{{ asset('frontend/assets/images/testImg/breadcrumb-3.jpg') }}" alt="" />
                    <!-- Add more images here -->
                </div>

            </div>
            <div class="text-center"><button id="myBtn1" class="btn rounded">Donate now</button></div>

            {{-- <h2>Simple JavaScript Modal</h2>

            <!-- Trigger/Open The Modal -->
            <button id="myBtn">Open Modal</button> --}}

            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h1>Contact Management</h1>
                    <p>management@gmail.com</p>

                </div>

            </div>

            <script src="modal.js"></script>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");


        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn1");


        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection
