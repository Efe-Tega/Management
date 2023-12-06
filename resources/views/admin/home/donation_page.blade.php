@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Donation Page</h4>

                            <form action="{{ route('store.donation') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $donationContent->id }}">

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">First Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="first title"
                                            name="first_title" id="example-text-input"
                                            value="{{ $donationContent->first_title }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">First Description
                                    </label>

                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="first_desc">{{ $donationContent->first_desc }}</textarea>
                                    </div>
                                </div> <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Header</label>
                                    <div class="col-sm-10">
                                        <input name="header" class="form-control" type="text" placeholder="header"
                                            id="example-text-input" value="{{ $donationContent->header }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Second Title</label>
                                    <div class="col-sm-10">
                                        <input name="sec_title" class="form-control" type="phone"
                                            placeholder="second title" id="example-text-input"
                                            value="{{ $donationContent->sec_title }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update">

                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
