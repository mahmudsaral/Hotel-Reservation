<!-- Start Header -->
<header class="header">
    @section('footerjs')
        @livewireScripts
    @endsection
    <!-- Topbar -->
    <div class="topbar bg-custom-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="left-side">
                        <ul class="custom-flex">
                            <li>
                                <a href="#" class="text-custom-white">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-white">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-white">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-white">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right-side">

                        <ul class="custom-flex">

                            <li class="nav-item dropdown u-pro">
                                @auth
                                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="hidden-md-down"></span> {{Auth::user()->name}}</a>
                                    <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                        <!-- text-->

                                @endauth
                                        @guest
                                            <a href="/login" class="dropdown-item">Login</a>
                                            <a href="/register" class="dropdown-item">Signup</a>
                                        @endguest

                                        <ul class="custom-flex">
                                            <a href="{{route('myprofile')}}" ><i class="ti-settings"></i> Account Setting</a>
                                            <a href="{{route('logout')}}"><i class="fa fa-power-off"></i> Logout</a>
                                            <a href="{{route('myreviews')}}"><i class="fa fa-power-off"></i> My Reviews</a>
                                            <a href="{{route('user_hotels')}}"><i class="fa fa-power-off"></i> My Hotels</a>

                                        </ul>


                                    </div>

                            </li>

                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
