@extends('layouts.home2')
@section('title','User Profile')

@section('content')
    <section class="section-padding partners">
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
                    <aside class="col-lg-4">
                        <div class="sidebar_wrap mb-md-80">
                            <div class="sidebar">
                                <div class="sidebar_widgets mb-xl-30">
                                    @include('home.usermenu')
                                </div>
                            </div>

                        </div>

                    </aside>
                    <aside class="col-lg-8">
                        <div class="post-heading p-relative">
                            @include('profile.show')
                        </div>
                    </aside>
                </div>
            </div>
        </div>


    </section>
@endsection
