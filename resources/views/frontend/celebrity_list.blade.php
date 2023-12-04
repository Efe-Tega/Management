@extends('frontend.main_master')
@section('main')
    <!--Page Banner Section start-->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="page-banner-title">All Celebrities</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Here is a list of Celebrities ready for booking</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Page Banner Section end-->

    <!--New property section start-->
    <div
        class="property-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">

            <div class="row">
                <!-- CELEBRITY LIST-->
                @foreach ($allCelebrity as $item)
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
                                    <span class="location">
                                        {!! $item->short_description !!}
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

                <!--Property end-->

            </div>

            <!-- <div class="row mt-20">
                                                  <div class="col">
                                                      <ul class="page-pagination">
                                                          <li><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li>
                                                          <li class="active"><a href="#">01</a></li>
                                                          <li><a href="#">02</a></li>
                                                          <li><a href="#">03</a></li>
                                                          <li><a href="#">04</a></li>
                                                          <li><a href="#">05</a></li>
                                                          <li><a href="#"><i class="fa fa-angle-right"></i> Next</a></li>
                                                      </ul>
                                                  </div>
                                              </div> -->

        </div>
    </div>
    <!--New property section end-->
@endsection
