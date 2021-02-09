@extends('layouts.home2')
@section('title','My Hotels')


@section('content')

    <div class="page-wrapper">

        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">User Hotel</h4>
                </div>
            </div>
            <div class="self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="{{route('user_hotel_add')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Add Hotel </a>
                    @include('home.message')
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">


                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive m-t-40">
                                        <table id="myTable" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Star</th>
                                                <th>Address</th>
                                                <th>Image</th>
                                                <th>Country</th>
                                                <th>Image Gallery</th>
                                                <th>Status</th>
                                                <th>Category</th>
                                                <th colspan="2">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($datalist as $rs)

                                                <tr>
                                                    <td>{{ $rs->title }}</td>
                                                    <td>{{ $rs->description }}</td>
                                                    <td>{{ $rs->star }}</td>
                                                    <td>{{ $rs->address }}</td>
                                                    <td style="width:250px;height:250px">
                                                        @if ($rs->image)
                                                            <img src="{{Storage::url($rs->image)}}" height="5" alt="">
                                                        @endif
                                                    </td>
                                                    <td>{{ $rs->country }}</td>
                                                    <td style="width:50px;height:50px"><a href="{{route('user_image_add',['hotel_id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img
                                                                src="{{asset('assets/admin/images')}}/galleryicon.png" height="35"></a></td>
                                                    <td>{{ $rs->status }}</td>
                                                    <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>

                                                    <td style="width:50px;height:50px"><a href="{{route('user_hotel_edit',['id'=> $rs->id])}}"> <ion-icon name="create-outline"></ion-icon> <img src="{{asset('assets/admin/images')}}/editicon.png" height="40"></a></td>
                                                    <td style="width:100px;height:100px"><a href="{{route('user_hotel_delete',['id'=> $rs->id])}}" onclick="return confirm('Delete! Are you sure ?')"> <img src="{{asset('assets/admin/images')}}/deleteicon.jpg" height="40" ></a></td>
                                                </tr>

                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>


@endsection





