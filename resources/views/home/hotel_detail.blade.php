@extends('layouts.home2')
@section('title','Hotel Detail')
@section('content')
    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">Hotel Detail</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500">
                            <a href="index.html" class="text-custom-white">Home</a>
                        </li>
                        <li class="fw-500">
                            <a href="hotels.html" class="text-custom-white">Hotels</a>
                        </li>
                        <li class="active fw-500">
                            Hotel Detail
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @php
        $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
    @endphp
    <!-- End Subheader -->
    <!-- Start Listing detail -->
    <section class="section-padding bg-light-white listing-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="listing-details-inner bx-wrapper bg-custom-white padding-20">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="detail-slider-for mb-xl-20 magnific-gallery">
                                    @foreach($datalist as $rs)
                                    <div class="slide-item">

                                        <a href="{{ Storage::url($rs->image)}}" class="popup">
                                            <img src="{{ Storage::url($rs->image)}}" class="image-fit" alt="img">
                                        </a>

                                    </div>
                                    @endforeach
                                    <div class="slide-item">
                                    </div>
                                </div>
                                <div class="detail-slider-nav row">
                                    <div class="slide-item col-12">
                                    </div>
                                    <div class="slide-item col-12">
                                    </div>
                                    <div class="slide-item col-12">
                                    </div>
                                    <div class="slide-item col-12">
                                    </div>
                                    <div class="slide-item col-12">
                                    </div>
                                </div>
                                <hr>
                                <div class="listing-meta-sec mb-md-80">
                                    <div class="tabs">
                                        <ul class="custom-flex nav nav-tabs mb-xl-20">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#overview">Overview</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#amenities">Amenities</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#faqs">FAQs</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="overview">
                                                <div class="tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="hotel-type mb-xl-20 bg-light-white padding-10">
                                                                <ul class="custom">
                                                                    <li class="text-light-dark"><label class="no-margin text-custom-blue">hotel type:</label>{{$data->star}}</li>
                                                                    <li class="text-light-dark"><label class="no-margin text-custom-blue">Extra people:</label>No Charge</li>
                                                                    <li class="text-light-dark"><label class="no-margin text-custom-blue">Minimum Stay:</label>2 nights</li>
                                                                    <li class="text-light-dark"><label class="no-margin text-custom-blue">Security Deposit:</label>$279</li>
                                                                    <li class="text-light-dark"><label class="no-margin text-custom-blue">Country:</label>{{$data->country}}</li>
                                                                    <li class="text-light-dark"><label class="no-margin text-custom-blue">City:</label>{{$data->city}}</li>
                                                                    <li class="text-light-dark"><label class="no-margin text-custom-blue">Neighborhood:</label>République</li>
                                                                    <li class="text-light-dark"><label class="no-margin text-custom-blue">Cancellation:</label>strict</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                            <div class="col-md-7">
                                                                <div class="listing-testimonial padding-20 bg-light-white mb-xl-20">
                                                                    <div class="testimonial-inner detail-testimonial">
                                                                        <div class="tesimonial-item">
                                                                            <cite class="text-custom-blue fs-16">Always enjoyed my stay with  and Resorts, top class room service and rooms have great outside views and luxury assessories.</cite>
                                                                            <div class="testimonial-author">

                                                                                <div class="author-name ml-2">
                                                                                    <h6 class="text-custom-black no-margin fs-14 fw-500"></h6>
                                                                                    <p class="no-margin text-light-dark"></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tesimonial-item">
                                                                            <cite class="text-custom-blue fs-16">Always enjoyed my stay with  and Resorts, top class room service and rooms have great outside views and luxury assessories.</cite>
                                                                            <div class="testimonial-author">
                                                                                <div class="author-name ml-2">
                                                                                    <h6 class="text-custom-black no-margin fs-14 fw-500"></h6>
                                                                                    <p class="no-margin text-light-dark"></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="col-12">
                                                                <div class="information">
                                                                    <h4 class="text-custom-black">About  and Resorts</h4>
                                                                    <p class="text-light-dark">Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit.</p>
                                                                    <p class="text-light-dark no-margin">Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit.</p>

                                                                </div>
                                                            </div>
                                                        {{--@endforeach--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="amenities">
                                                <h4 class="text-custom-black">Amenities</h4>
                                                <p class="text-light-dark">Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum.</p>
                                                <ul class="custom amenities row no-gutters">
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fas fa-wifi"></i>
                                                            Wi-fi
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fas fa-swimming-pool"></i>
                                                            Swimming pool
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fas fa-tv"></i>
                                                            Television
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fas fa-coffee"></i>
                                                            Coffee
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Air Conditioning
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fas fa-dumbbell"></i>
                                                            Fitness Facility
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Fridge
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Wine Bar
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Smoking Allowed
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Entertainment
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Secure Vault
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Pick and Drop
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Room Service
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Pets Allowed
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Play Place
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Comp. Breakfast
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Free Parking
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Confrence Room
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Fire Place
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Handicap Accesible
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Doorman
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Hot Tub
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Elevator In Building
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Suitable for Events
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="faqs">
                                                <div id="accordion" class="custom-accordion">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne">
                                                            <button class="collapsebtn" data-toggle="collapse" data-target="#collapseOne">
                                                                Address & Map
                                                            </button>
                                                        </div>
                                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <p class="text-theme no-margin">
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingTwo">
                                                            <button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseTwo">
                                                                Messaging
                                                            </button>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                            <div class="card-body">
                                                                @livewire('review' ,['id' => $data->id])
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingThree">
                                                            <button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseThree">
                                                                Refunds
                                                            </button>
                                                        </div>
                                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <p class="text-theme no-margin">
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingFour">
                                                            <button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseFour">
                                                                Pricing
                                                            </button>
                                                        </div>
                                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <p class="text-theme no-margin">
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingFive">
                                                            <button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseFive">
                                                                Reservation Request
                                                            </button>
                                                        </div>
                                                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <p class="text-theme no-margin">
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingSix">
                                                            <button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseSix">
                                                                Your Reservation
                                                            </button>
                                                        </div>
                                                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <p class="text-theme no-margin">
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick-quote bx-wrapper padding-20 mb-xl-30">
                                            <h5 class="text-custom-black">Enquiry Now</h5>
                                            <form>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Your Destination</label>
                                                            <input type="text" name="#" class="form-control form-control-custom" placeholder="Your Destination and Hotel Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Check In</label>
                                                            <div class="input-group group-form">
                                                                <input type="text" name="#" class="form-control form-control-custom datepickr" placeholder="mm/dd/yy" readonly="">
                                                                <span class="input-group-append">
                                                                  <i class="far fa-calendar"></i>
                                                              </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Check Out</label>
                                                            <div class="input-group group-form">
                                                                <input type="text" name="#" class="form-control form-control-custom datepickr" placeholder="mm/dd/yy" readonly="">
                                                                <span class="input-group-append">
                                                                  <i class="far fa-calendar"></i>
                                                              </span>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn-first btn-submit full-width btn-height">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                            <div class="hotel-grid mb-xl-30">
                                                <div class="hotel-grid-wrapper bx-wrapper">
                                                    <div class="image-sec p-relative">
                                                        <a href="#">
                                                            <img src="{{Storage::url($data->image)}}" class="full-width" alt="img">
                                                        </a>
                                                    </div>
                                                    <div class="hotel-grid-caption padding-20 bg-custom-white p-relative">
                                                        <h4 class="title fs-16"><a href="#" class="text-custom-black">{{$data->title}} <small class="text-light-dark">{{$data->country}} {{$data->city}}</small></a></h4>

                                                        <span class="star"><small></small>Reviews({{$countreview}})</span>

                                                        @foreach($reviews as $rs)

                                                        <div class="feedback">
                                                            <div class="ratings">

                                                                <span class="text-yellow fs-12 @if ($rs->rate<1) -o empty @endif"><i class="fas fa-star"></i></span>
                                                                <span class="text-yellow fs-12 @if ($rs->rate<2) -o empty @endif"><i class="fas fa-star"></i></span>
                                                                <span class="text-yellow fs-12 @if ($rs->rate<3) -o empty @endif"><i class="fas fa-star"></i></span>
                                                                <span class="text-yellow fs-12 @if ($rs->rate<4) -o empty @endif"><i class="fas fa-star"></i></span>
                                                                <span class="text-light-dark fs-12 @if ($rs->rate<5) -o empty @endif"><i class="fas fa-star"></i></span>
                                                            </div>
                                                            <span class="review fs-12 text-light-dark">{{$rs->user->name}}</span>

                                                        </div>
                                                        <p class="text-light-dark">{{$rs->review}}</p>
                                                        <div class="action">
                                                            <a class="btn-second btn-small" href="#">SELECT</a>
                                                            <a class="btn-first btn-submit yellow" href="#">VIEW</a>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                        <div class="need-help bx-wrapper padding-20">
                                            <h5 class="text-custom-black">Need Help?.</h5>
                                            <p class="text-light-dark">We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                                            <ul class="custom">
                                                <li class="text-custom-blue fs-18">
                                                    <i class="fas fa-phone-alt"></i>
                                                    <a href="#" class="text-light-dark">{{$data->phone}}</a>
                                                </li>
                                                <li class="text-custom-blue fs-18">
                                                    <i class="fas fa-envelope"></i>
                                                    <a href="#" class="text-light-dark fs-14">{{$data->email}}</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
