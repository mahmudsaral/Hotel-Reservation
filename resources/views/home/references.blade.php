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
                {!! $setting->references !!}
            </div>
        </div>
    </div>
@endsection
