@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getSetting()
@endphp

@section('title',$setting->title)
@section('description'){{ $setting->description }}@endsection
@section('keywords',$setting->keywords)



