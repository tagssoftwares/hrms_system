	<!-- Header -->
    <div class="header">
			
            <!-- Logo -->
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="assets/img/tag_logo.png" width="40" height="40" alt="">
                </a>
            </div>
            <!-- /Logo -->
            
            <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            
            <!-- Header Title -->
            <div class="page-title-box">

              

                <h3>HRM System</h3>

            
            </div>
            <!-- /Header Title -->
            
            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
            
            <!-- Header Menu -->
            <ul class="nav user-menu">
            
                <!-- Search -->
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                       </a>
                        <form action="search.html">
                            <input class="form-control" type="text" placeholder="Search here">
                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </li>
                <!-- /Search -->
            
                <!-- Flag -->
                <!--  -->
                <!-- /Flag -->
            
                <!-- Notifications -->
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i> <span class="badge badge-pill"></span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                               
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title"></span>  <span class="noti-title"></span></p>
                                                <p class="noti-time"><span class="notification-time"></span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                         
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title"></span>  <span class="noti-title"></span></p>
                                                <p class="noti-time"><span class="notification-time"></span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                              
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title"></span> <span class="noti-title"></span><span class="noti-title"></span></p>
                                                <p class="noti-time"><span class="notification-time"></span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                                
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title"></span> <span class="noti-title"></span></p>
                                                <p class="noti-time"><span class="notification-time"></span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                              
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title"></span> <span class="noti-title"></span></p>
                                                <p class="noti-time"><span class="notification-time"></span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <!-- /Notifications -->
                
                <!-- Message Notifications -->
                
                <!-- /Message Notifications -->

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">



                        <!-- <span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt=""> -->

                        <span class="user-img"><img src="assets/img/profiles/" alt="">

                        <!-- <span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt=""> -->


                        <!-- <span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt=""> -->
                        <span class="user-img"><img src="assets/img/profiles/" alt="">



                        <!-- <span class="status online"></span></span> -->
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
                                                     <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </div>
                </li>
            </ul>
            <!-- /Header Menu -->
            
            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="{{ url('logout') }} onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();>Logout</a>
                                                     <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
            </div>
            <!-- /Mobile Menu -->
            
        </div>
        <!-- /Header -->