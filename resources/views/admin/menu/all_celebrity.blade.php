@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Portfolio</h4>



                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">All Porfolio Data</h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th> Name</th>
                                        <th> Image</th>
                                        <th> Occupation</th>
                                        <th> Known For</th>
                                        <th> Active years</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @php($i = 1)
                                    @foreach ($celebrities as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td> <img src="{{ url('upload/celebrity/' . $item->image) }}" alt=""
                                                    width="60px" height="50px" /></td>
                                            <td>{{ $item->occupation }}</td>
                                            <td>{{ $item->known_for }}</td>
                                            <td>{{ $item->years_active }}</td>

                                            <td>

                                                <a href="{{ route('edit.celebrity', $item->id) }}" class="btn btn-info sm"
                                                    title="Edit Data"><i class="fas fa-edit"></i></a>

                                                <a href="" class="btn btn-danger sm" title="Delete Data"
                                                    id="delete"><i class="fas fa-trash-alt"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection
