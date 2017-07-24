<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="active"><a href="{{ url('/home') }}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                        </li>
                        <li><a href="{{ url('/home') }}"><i class="icon mdi mdi-bookmark"></i><span>Music Feed</span></a>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>Profile</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/edit-profile') }}/{{ Auth::User()->id }}/{{ str_slug(Auth::User()->full_name) }}">Update Profile</a>
                                </li>
                                <li><a href="{{ url('/my-specialties') }}">Specialty</a>
                                </li>
                            </ul>
                        </li>

                        <li class="parent"><a href="#"><i class="icon mdi mdi-border-all"></i><span>Achievements</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('my-performances') }}">My Performances</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-comment-edit"></i><span>Bookings</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="">View Bookings</a>
                                </li>
                            </ul>
                        </li>

                        <li><a href="{{ url('/find-music-pal') }}"><i class="icon mdi mdi-my-location"></i><span>Find Jam Partner</span></a>
                        </li>

                        <li class="parent"><a href="#"><i class="icon mdi mdi-settings"></i><span>Settings</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/reset-password') }}/{{ Auth::User()->id }}/{{ str_slug(Auth::User()->full_name) }}">Change Password</a></li>
                                <li><a href="{{ url('/booking-settings') }}/{{ Auth::User()->id }}/{{ str_slug(Auth::User()->full_name) }}">Booking Settings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">90%</span><span class="name">Platform</span></div>
            <div class="progress">
                <div style="width: 90%;" class="progress-bar progress-bar-primary"></div>
            </div>
        </div>
    </div>
</div>
