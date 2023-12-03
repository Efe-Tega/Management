@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Celebrity info</h4>

                            <form action="{{ route('celeb.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input name="name" class="form-control" type="text"
                                            placeholder="Name of celebrity" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Short
                                        Description</label>
                                    <div class="col-sm-10">
                                        <textarea required name="short_description" class="form-control" rows='5'></textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Occupation</label>
                                    <div class="col-sm-10">
                                        <input name="occupation" class="form-control" type="text"
                                            placeholder="Occupation" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Known For</label>
                                    <div class="col-sm-10">
                                        <input name="known_for" class="form-control" type="text" placeholder="Known for"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Booking Fee</label>
                                    <div class="col-sm-10">
                                        <input name="booking_fee" class="form-control" type="text"
                                            placeholder="Enter amount" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Born</label>
                                    <div class="col-sm-10">
                                        <input name="born" class="form-control" type="text"
                                            placeholder="Date of Birth" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Years active</label>
                                    <div class="col-sm-10">
                                        <input name="years_active" class="form-control" type="text"
                                            placeholder="Years active " id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">
                                        Celebrity Image</label>
                                    <div class="col-sm-10">
                                        <input name="image" class="form-control" type="file" id="image">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>

                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" id="showImage" src="{{ url('upload/no_image.jpg') }}"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <!-- end row -->

                                <h2 class="card-title mt-5 mb-3">Agency Price Info</h2>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Birthday Fee</label>
                                    <div class="col-sm-10">
                                        <input name="birthday_fee" class="form-control" type="text"
                                            placeholder="Enter amount" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Acceptance Fee</label>
                                    <div class="col-sm-10">
                                        <input name="acceptance_fee" class="form-control" type="text"
                                            placeholder="Enter amount" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Music Fee</label>
                                    <div class="col-sm-10">
                                        <input name="music_fee" class="form-control" type="text"
                                            placeholder="Enter amount" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Endorsement Fee
                                        Fee</label>
                                    <div class="col-sm-10">
                                        <input name="endorsement" class="form-control" type="text"
                                            placeholder="Enter price" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Wedding Fee
                                        Fee</label>
                                    <div class="col-sm-10">
                                        <input name="wedding_fee" class="form-control" type="text"
                                            placeholder="Enter amount" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Virtual Event
                                        Fee</label>
                                    <div class="col-sm-10">
                                        <input name="virtual_event" class="form-control" type="text"
                                            placeholder="Enter price" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Create">

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
