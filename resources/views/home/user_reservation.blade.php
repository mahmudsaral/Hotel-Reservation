@extends('layouts.home2')
@section('title','My Reservation')


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
                    <h4 class="text-themecolor">Reservations</h4>
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
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Total</th>
                                                <th>Check In</th>
                                                <th>Days</th>
                                                <th>Ip</th>
                                                <th>Note</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @include('home.message')
                                            @foreach ($datalist as $rs)

                                                <tr>
                                                    <td>{{ $rs->id }}</td>
                                                    <td>{{ $rs->name }}</td>
                                                    <td>{{ $rs->email }}</td>
                                                    <td>{{ $rs->phone }}</td>
                                                    <td>{{ $rs->total }}</td>
                                                    <td>{{ $rs->checkin }}</td>
                                                    <td>{{ $rs->days }}</td>
                                                    <td>{{ $rs->IP }}</td>
                                                    <td>{{ $rs->note }}</td>
                                                    <td>{{ $rs->status }}</td>

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





