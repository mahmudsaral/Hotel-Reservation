@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp


<div class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main-navigation">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{ asset('assets')}}/images/toor-logo.png" class="img-fluid image-fit" alt="img">
                        </a>
                    </div>
                    <div class="main-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('assets')}}/images/toor-logo.png" class="img-fluid image-fit" alt="img">
                            </a>
                        </div>
                        <nav>
                            <ul class="custom-flex">
                                <li class="menu-item menu-item-has-children">
                                    <a href="#" class="text-light-dark">Hotels</a>
                                    <ul class="custom sub-menu">
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#" class="text-custom-white">Cities</a>
                                            <ul class="custom sub-menu">
                                                {{--
                                                                                                @foreach($parentCategories as $rs)
                                                --}}
                                                {{--     <li class="menu-item">
                                                         <a href="hotels.html" class="text-custom-white">{{$rs->title}}</a>
                                                     </li>--}}
                                                <li class="menu-item">
                                                    <a href="hotel-left-sidebar.html" class="text-custom-white">Left Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="hotel-right-sidebar.html" class="text-custom-white">Right Sidebar</a>
                                                </li>
                                                {{--<li class="menu-item">

                                                    <a href="hotel-right-sidebar.html" class="text-custom-white">@include('home.categorytree',['children'=>$rs->children])</a>

                                                </li>--}}
                                                {{-- @endforeach--}}
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="hotel-detail.html" class="text-custom-white">Hotels Detail</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#" class="text-light-dark">Pages</a>
                                    <ul class="custom sub-menu">
                                        <li class="menu-item">
                                            <a href="{{route('aboutus')}}" class="text-custom-white">About Us</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('contact')}}" class="text-custom-white">Contact Us</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('faq')}}" class="text-custom-white">Faqs</a>
                                        </li>

                                        <li class="menu-item">
                                            <a href="{{route('references')}}" class="text-custom-white">References</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="cta-btn">
                            <a href="booking.html" class="btn-first btn-submit">Enquiry Now</a>
                        </div>
                    </div>
                    <div class="hamburger-menu">
                        <div class="menu-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
