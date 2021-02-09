@extends('layouts.home2')
@section('title','About Us')

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#">User Profile</a></li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                {!! $setting->aboutus !!}
            </div>
        </div>
    </div>
@endsection
