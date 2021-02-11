<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                    <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">@if (Auth::user()->profile_photo_path)<img src="{{Storage::url(Auth::user()->profile_photo_path)}}" height="30" alt="" alt="user-img" class="img-circle">@endif<span class="hide-menu">{{Auth::user()->name}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        @auth
                        <li><a href="{{route('admin_logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                        @endauth
                    </ul>
                </li>
                <li class="nav-small-cap">--- PERSONAL</li>
                <li> <a href="{{route('admin_hotels')}}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Hotels <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                </li>
                <li> <a href="{{route('admin_category')}}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Category <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                <li> <a href="{{route('admin_message')}}" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Contact Messages</span></a>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="{{route('admin_reservations')}}" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Reservations</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="{{route('admin_reservations')}}">All Reservations </a></li>
                        <li><a href="{{route('admin_reservation_list',['status'=> 'Accepted'])}}">Accepted </a></li>
                        <li><a href="{{route('admin_reservation_list',['status'=> 'Cancelled'])}}">Cancelled </a></li>
                        <li><a href="{{route('admin_reservation_list',['status'=> 'Completed'])}}">Completed </a></li>
                    </ul>
                </li>
                <li> <a href="{{route('admin_users')}}" aria-expanded="false"><i class="ti-palette"></i>Users <span class="badge badge-pill badge-primary text-white ml-auto"></span></a>

                </li>
                <li class="nav-small-cap">--- SUPPORT</li>
                <li> <a class="waves-effect waves-dark" href="{{route('admin_setting')}}" aria-expanded="false"><i class="fa fa-circle-o text-danger"></i><span class="hide-menu">Setting</span></a></li>
                <li> <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false"><i class="fa fa-circle-o text-success"></i><span class="hide-menu">Log Out</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{route('admin_review')}}" aria-expanded="false"><i class="fa fa-circle-o text-info"></i><span class="hide-menu">Review</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{route('admin_faq')}}" aria-expanded="false"><i class="fa fa-circle-o text-info"></i><span class="hide-menu">FAQ</span></a></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
