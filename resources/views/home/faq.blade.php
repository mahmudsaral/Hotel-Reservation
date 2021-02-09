@extends('layouts.home2')
@section('title','Frequently Asked Question')


@section('content')
    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">Faqs</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500">
                            <a href="{{route('home')}}" class="text-custom-white">Home</a>
                        </li>
                        <li class="active fw-500">
                            Frequently Asked Question
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subheader -->
    <!-- Start faqs -->
    <section class="section-padding bg-light-white faqs">
        <div class="container">
            <div class="row">
                <aside class="col-lg-4">
                    <div class="sidebar_wrap mb-md-80">
                        <div class="sidebar">
                            <div class="sidebar_widgets mb-xl-30">
                                <div class="widget_title bg-custom-blue">
                                    <h5 class="no-margin text-custom-white">Search</h5>
                                </div>
                                <form>
                                    <div class="input-group group-form">
                                        <input type="search" name="#" class="form-control form-control-custom" placeholder="Search">
                                        <span class="input-group-append">
                                        <i class="fas fa-search"></i>
                                    </span>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar_widgets">
                                <div class="widget_title bg-custom-blue">
                                    <h5 class="no-margin text-custom-white">FAQs Topic</h5>
                                </div>
                                <form class="checkbox-group">
                                    <div class="form-group">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="#" checked>
                                            <span class="checkmark"></span>
                                            All
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="#">
                                            <span class="checkmark"></span>
                                            Features
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="#">
                                            <span class="checkmark"></span>
                                            Sliders
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="#">
                                            <span class="checkmark"></span>
                                            Manage Listing
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="#">
                                            <span class="checkmark"></span>
                                            Address & Map
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="#">
                                            <span class="checkmark"></span>
                                            Reservation Request
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="#">
                                            <span class="checkmark"></span>
                                            Your Reservation
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="#">
                                            <span class="checkmark"></span>
                                            Other Questions
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="col-lg-8">
                    @foreach($datalist as $rs)
                        <div class="card-body">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                {{$rs->question}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            {!! $rs->answer !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
