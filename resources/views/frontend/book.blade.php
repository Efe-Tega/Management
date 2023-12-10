@extends('frontend.main_master')
@section('main')
    <div id="main-wrapper">
        <br>
        <br>
        <br>
        <div class="section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
            <div class="card text-center " style="width: 22rem; margin: 0 auto; float: none; margin-bottom: 10px;">
                <div class="card-body">
                    <img src="{{ asset('frontend/assets/images/tick.png') }}" class="img-responsive" width="100" />
                    <p class="card-text">YOUR REQUEST HAS BEEN SENT
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection
