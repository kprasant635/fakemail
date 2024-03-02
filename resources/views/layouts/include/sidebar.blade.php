<?php
use Carbon\Carbon;
?>

<div class="page-wrapper">
    <div class="page-inner">
        <aside class="page-sidebar">
            <div class="page-logo">
                <a href=""
                    class="page-logo-link press-scale-down d-flex align-items-center position-relative"> <img
                        src="{{ asset('img/logo.png') }}" alt="Admin" aria-roledescription="logo"> </a>
            </div>
            <div class="center-logo"><span class="_azadi"></span></div>
            <nav id="js-primary-nav" class="primary-nav" role="navigation">
                <div class="nav-filter">
                    <div class="position-relative">
                        <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control"
                            tabindex="0">
                        <a href="javascript:void(0);" onclick="return false;"
                            class="btn-primary btn-search-close js-waves-off" data-action="toggle"
                            data-class="list-filter-active" data-target=".page-sidebar"> <i
                                class="fal fa-chevron-up"></i> </a>
                    </div>
                </div>
                <ul id="js-nav-menu" class="nav-menu">
                   
                        <li class="">
                            <a href="{{ url('dashboard') }}" class="pdashboard" title="Admin"
                                data-filter-tags="welcome"> <i class="fal fa-home"></i> <span class="nav-link-text"
                                    data-i18n="nav.welcome">Dashboard</span> </a>
                        </li>

                        <li class="">
                            <a href="javascript:void(0);" title="Master"
                                data-filter-tags="application intel"> <i class="fal fa-home"></i> <span
                                    class="nav-link-text" data-i18n="nav.application_intel">User Management</span> </a>
                            <ul>
                                <li class="">
                                    <a href="{{ route('users.index') }}" class="role" title="user"
                                        data-filter-tags="application intel analytics dashboard"> <span
                                            class="nav-link-text"
                                            data-i18n="nav.application_intel_analytics_dashboard">Manage User</span> </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('roles.index') }}" class="role" title="Role"
                                        data-filter-tags="application intel analytics dashboard"> <span
                                            class="nav-link-text"
                                            data-i18n="nav.application_intel_analytics_dashboard">Manage Role</span> </a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="{{ request()->is('settings') ? 'active' : '' }}">
                            <a href="{{ route('settings.index') }}" title="Master"
                                data-filter-tags="application intel"> <i class="fal fa-home"></i> <span
                                    class="nav-link-text" data-i18n="nav.application_intel">Settings</span> </a>
                            
                        </li>
                       
                  
                </ul>

            </nav>
        </aside>
