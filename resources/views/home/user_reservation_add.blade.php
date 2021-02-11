@extends('layouts.home2')
@section('title','Reservations')
@section('content')
    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">Booking</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500">
                            <a href="index.html" class="text-custom-white">Home</a>
                        </li>
                        <li class="active fw-500">
                            Booking
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="section-padding bg-light-white booking-form">
        <div class="tab-content bg-custom-white bx-wrapper padding-20">
            <div class="tab-pane fade active show" id="hotel-booking">
                <div class="tab-inner">
                    <form action="{{route('user_reservation_store')}}" method="post" accept-charset="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-8">
                                <h5 class="text-custom-black">Your Personal Information</h5>
                                <div class="row mb-md-80">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-14 text-custom-black fw-500">Name</label>
                                            <input type="text" name="#" class="form-control form-control-custom" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-14 text-custom-black fw-500">Email I'd</label>
                                            <input type="email" name="#" class="form-control form-control-custom" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-14 text-custom-black fw-500">Verify Email I'd</label>
                                            <input type="email" name="#" class="form-control form-control-custom" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-14 text-custom-black fw-500">Phone No.</label>
                                            <input type="phone" name="#" class="form-control form-control-custom" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-14 text-custom-black fw-500">Checkin Date</label>
                                            <input type="text" name="#" class="form-control form-control-custom" value="{{$checkin}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-14 text-custom-black fw-500">Nights</label>
                                            <input type="text" name="#" class="form-control form-control-custom" value="{{$days}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="custom-checkbox mb-0">
                                            <input type="checkbox" name="#">
                                            <span class="checkmark"></span>
                                            I want to receive <a href="#">Company name</a> promotional offers in the future
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="text-custom-black">Your Card Information</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-14 text-custom-black fw-500">Card Holder Name</label>
                                            <input type="text" name="#" class="form-control form-control-custom" placeholder="Card Holder Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-14 text-custom-black fw-500">Card Number</label>
                                            <input type="text" name="#" class="form-control form-control-custom" placeholder="Card Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-14 text-custom-black fw-500">Card Identification Number</label>
                                            <input type="text" name="#" class="form-control form-control-custom" placeholder="Card Identification Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="fs-14 text-custom-black fw-500">Expiration Month</label>
                                                    <div class="group-form">
                                                        <select class="custom-select form-control form-control-custom">
                                                            <option>Month</option>
                                                            <option>Jan</option>
                                                            <option>Feb</option>
                                                            <option>Mar</option>
                                                            <option>Apr</option>
                                                            <option>May</option>
                                                            <option>June</option>
                                                            <option>July</option>
                                                            <option>Aug</option>
                                                            <option>Sep</option>
                                                            <option>Oct</option>
                                                            <option>Nov</option>
                                                            <option>Dec</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="fs-14 text-custom-black fw-500">Expiration Year</label>
                                                    <div class="group-form">
                                                        <select class="custom-select form-control form-control-custom">
                                                            <option>2020</option>
                                                            <option>2021</option>
                                                            <option>2022</option>
                                                            <option>2023</option>
                                                            <option>2024</option>
                                                            <option>2025</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr class="mt-0">
                                        <div class="form-group">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="#">
                                                <span class="checkmark"></span>
                                                By continuing, you agree to the<a href="#">Terms and Conditions.</a>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn-first btn-submit">Confirm Booking</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="hotel-grid mb-xl-30">
                                            <div class="hotel-grid-wrapper bx-wrapper">
                                                <img src="{{ Storage::url($data->image)}}" height="80" width="25" alt="">
                                                <div class="hotel-grid-caption padding-20 bg-custom-white p-relative">
                                                    <h4 class="title fs-16"><a href="#" class="text-custom-black"> <small class="text-light-dark">{{$data->title}}</small></a></h4>
                                                    <span class="price"><small>avg/night</small>{{$data->price*$days}}</span>
                                                    <div class="feedback">
                                                        <div class="ratings">
                                                            <span class="text-yellow fs-12"><i class="fas fa-star"></i></span>
                                                            <span class="text-yellow fs-12"><i class="fas fa-star"></i></span>
                                                            <span class="text-yellow fs-12"><i class="fas fa-star"></i></span>
                                                            <span class="text-yellow fs-12"><i class="fas fa-star"></i></span>
                                                            <span class="text-light-dark fs-12"><i class="fas fa-star"></i></span>
                                                        </div>
                                                        <span class="review fs-12 text-light-dark"></span>
                                                    </div>
                                                    <p class="text-light-dark">{{$data->description}}</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="need-help bx-wrapper padding-20">
                                            <h5 class="text-custom-black">Need Help?.</h5>
                                            <p class="text-light-dark">We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                                            <ul class="custom">
                                                <li class="text-custom-blue fs-18">
                                                    <i class="fas fa-phone-alt"></i>
                                                    <a href="#" class="text-light-dark">(+347) 123 456 7890</a>
                                                </li>
                                                <li class="text-custom-blue fs-18">
                                                    <i class="fas fa-envelope"></i>
                                                    <a href="#" class="text-light-dark fs-14">help@domain.com</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
