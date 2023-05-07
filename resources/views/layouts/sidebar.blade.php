{{-- LEFT SIDEBAR WITH OUT FOOTER --}}
{{--  ====================================
              ——— LEFT SIDEBAR WITH OUT FOOTER
            ===================================== --}}
<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('dashboard') }}">
                {{-- <x-application-logo class="block h-9 w-auto fill-current me-3" /> --}}
                <img src="{{ asset('theme/images/logo.png') }}" alt="logo">
                <span class="brand-name">E-Studies</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">

                <li class="active">
                    <a class="sidenav-item-link" href="index.html">
                        <i class="mdi mdi-briefcase-account-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a class="sidenav-item-link" href="analytics.html">
                        <i class="mdi mdi-chart-line"></i>
                        <span class="nav-text">Badges</span>
                    </a>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email"
                        aria-expanded="false" aria-controls="email">
                        <i class="mdi mdi-email"></i>
                        <span class="nav-text">My Courses</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="email" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li>
                                <a class="sidenav-item-link" href="email-inbox.html">
                                    <span class="nav-text">All Course</span>

                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="email-details.html">
                                    <span class="nav-text">Completed</span>

                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="email-compose.html">
                                    <span class="nav-text">On Going</span>

                                </a>
                            </li>

                        </div>
                    </ul>
                </li>

                <li>
                    <a class="sidenav-item-link" href="index.html">
                        <i class="mdi mdi-briefcase-account-outline"></i>
                        <span class="nav-text">Completed Courses</span>
                    </a>
                </li>

                <li>
                    <a class="sidenav-item-link" href="analytics.html">
                        <i class="mdi mdi-chart-line"></i>
                        <span class="nav-text">Code Challenges</span>
                    </a>
                </li>

                <li>
                    <a class="sidenav-item-link" href="analytics.html">
                        <i class="mdi mdi-chart-line"></i>
                        <span class="nav-text">Community</span>
                    </a>
                </li>

                <li class="section-title">
                    SETTINGS
                </li>

                <li>
                    <a class="sidenav-item-link" href="user-profile.html">
                        <i class="mdi mdi-chart-line"></i>
                        <span class="nav-text">Help</span>
                    </a>
                </li>

                <li>
                    <a class="sidenav-item-link" href="user-activities.html">
                        <i class="mdi mdi-chart-line"></i>
                        <span class="nav-text">Settings</span>
                    </a>
                </li>

                <li>
                    <a class="sidenav-item-link" href="user-profile-settings.html">
                        <i class="mdi mdi-chart-line"></i>
                        <span class="nav-text">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
