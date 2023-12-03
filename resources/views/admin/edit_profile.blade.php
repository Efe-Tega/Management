@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Profile Info</h4>

                            <form action="{{ route('store.profile') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Name"
                                            id="example-text-input" value="{{ $profileData->name }}" disabled>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="email"
                                            id="example-text-input" value="{{ $profileData->email }}" disabled>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Website Address</label>
                                    <div class="col-sm-10">
                                        <input name="address" class="form-control" type="text" placeholder="Web adress"
                                            id="example-text-input" value="{{ $profileData->address }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Phone number</label>
                                    <div class="col-sm-10">
                                        <input name="number" class="form-control" type="phone" placeholder="phone number"
                                            id="example-text-input" value="{{ $profileData->number }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Website Email</label>
                                    <div class="col-sm-10">
                                        <input name="site_email" class="form-control" type="email" placeholder="Web email"
                                            id="example-text-input" value="{{ $profileData->site_email }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Website Short
                                        Name</label>
                                    <div class="col-sm-10">
                                        <input name="short_name" class="form-control" type="text"
                                            placeholder="Abbreviated name" id="example-text-input"
                                            value="{{ $profileData->short_name }}">
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
