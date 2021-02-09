@extends('layouts.home2')
@section('title','About Us')

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#">References</a></li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                {!! $setting->contact !!}
            </div>
            <form class="mb-md-80" id="checkout-form" class="clearfix" action="{{route('sendmessage')}}" method="post">
                <div class="row">
                    <div class="section-padding contact-form-map">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="section-header">
                                        <div class="section-heading">
                                            <h3 class="text-custom-black">Get In Touch</h3>
                                            <div class="section-description">
                                            </div>
                                        </div>
                                    </div>
                                    @include('home.message')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control form-control-custom" placeholder="Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control form-control-custom" placeholder="Email" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="subject" class="form-control form-control-custom" placeholder="Subject" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control form-control-custom" placeholder="Phone" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" rows="5" class="form-control form-control-custom" placeholder="Message" required=""></textarea>
                                            </div>
                                            <button type="submit" class="btn-first btn-submit">Submit</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5">
                                    <div class="contact-map full-height">
                                        <iframe class="full-height" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
