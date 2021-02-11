@auth
<div class="sidebar_widgets mb-xl-30">
    <div class="widget_title bg-custom-blue">
        <h5 class="no-margin text-custom-white">User Panel</h5>
    </div>
    <ul class="categories custom">
        <li>
            <a href="{{route('home')}}" class="text-custom-black fs-14">All <span class="text-light-dark"></span></a>
        </li>
        <li>
            <a href="{{route('myprofile')}}" class="text-custom-black fs-14">Profile <span class="text-light-dark"></span></a>
        </li>
        <li>
            <a href="{{route('user_hotels')}}" class="text-custom-black fs-14">MY HOTELS <span class="text-light-dark"></span></a>
        </li>
        <li>
            <a href="{{route('user_reservations')}}"  class="text-custom-black fs-14">MY RESERVATIONS <span class="text-light-dark"></span></a>
        </li>
        <li>
            <a href="#" class="text-custom-black fs-14">OTHER <span class="text-light-dark"></span></a>
        </li>
        <li>
            <a href="{{route('logout')}}" class="text-custom-black fs-14">Logout <span class="text-light-dark"></span></a>
        </li>
        @php
             $userRoles = Auth::user()->roles->pluck('name');
        @endphp
        @if($userRoles->contains('admin'))
            <li>
                <a href="{{route('admin_home')}}" class="text-custom-black fs-14">Admin Panel <span class="text-light-dark"></span></a>
            </li>
        @endif
    </ul>
</div>
@endauth
