@extends('layouts.home2')
@section('title','My Reviews')


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
                    <h4 class="text-themecolor">Reviews</h4>
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
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Hotels</th>
                                                <th>Subject</th>
                                                <th>Review</th>
                                                <th>Rate</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @include('home.message')
                                            @foreach ($datalist as $rs)

                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{$rs->user->name}}</td>
                                                    <td>
                                                        <a href="{{route('hotel',['id'=>$rs->hotel->id,'slug'=>$rs->hotel->slug])}}">{{$rs->hotel->title}}</a>
                                                    </td>
                                                    <td>{{$rs->subject}}</td>
                                                    <td>{{$rs->review}}</td>
                                                    <td>{{$rs->rate}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td>{{$rs->created_at}}</td>
                                                    <td>
                                                        <a href="{{route('user_review_delete',['id'=>$rs->id])}}">
                                                            DELETE
                                                        </a>
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





