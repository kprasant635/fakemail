
<div class="page-content-wrapper">
    <header class="page-header" role="banner">
        <div class="page-logo">
            <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative">
                <img src="{{ asset('img/logo.png') }}" alt="ESI Scheme Odisha" aria-roledescription="logo">
                <span class="page-logo-text mr-1">admin</span>
                <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2">Smart
                    admin</span>
            </a>
        </div>
        <div class="hidden-md-down dropdown-icon-menu position-relative">
            <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden"
                title="Hide Navigation">
                <i class="ni ni-menu"></i>
            </a>
            <ul>
                <li>
                    <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify"
                        title="Minify Navigation">
                        <i class="ni ni-minify-nav"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed"
                        title="Lock Navigation">
                        <i class="ni ni-lock-nav"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="hidden-lg-up">
            <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                <i class="ni ni-menu"></i>
            </a>
        </div>
        <div class="ml-auto d-flex">
            <div class="hidden-sm-up">
                <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on"
                    data-focus="search-field" title="Search">
                    <i class="fal fa-search"></i>
                </a>
            </div>
            <!-- app notification -->
       
         
            <div>
                {{-- <a href="#" class="header-icon" data-toggle="dropdown" title="You got  notifications">
                    <i class="ni ni-basket"></i>
                    <span class="badge badge-icon cartItem"></span>
                </a> --}}
                <div class="dropdown-menu dropdown-menu-animated dropdown-xl">
                    <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                        <h4 class="m-0 text-center color-white">
                            Order Items
                        </h4>
                    </div>
                    {{-- <ul class="nav nav-tabs nav-tabs-clean" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link px-4 fs-md js-waves-on fw-500 waves-effect waves-themed active" data-toggle="tab" href="#tab-messages" data-i18n="drpdwn.messages">Messages</a>
                        </li>
                    </ul> --}}
                    <div class="tab-content tab-notification">
                        <div class="tab-pane active" id="tab-messages" role="tabpanel">
                            <div class="custom-scroll h-100">
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
                                    <ul class="notification cartDetails" style="overflow: hidden; width: auto; height: 100%;">
                              
                                
                                    
                                        <li class="unread">
                                            <a href="#" class="d-flex align-items-center">
                                                <span class="status mr-2">
                                                    {{-- <span class="profile-image rounded-circle d-inline-block" style="background-image:url('/img/demo/avatars/avatar-c.png')"></span> --}}
                                                    <span class="d-flex flex-column flex-1 ml-1">
                                                        <span class="name"></span>
                                                    {{-- <span class="msg-a fs-sm">Qty: {{$item->order_qty}}</span> --}}
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                      
                                
                                </ul><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.6); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 4px; height: 221.461px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(250, 250, 250); opacity: 0.2; z-index: 90; right: 4px;"></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="py-2 px-3 bg-faded d-block rounded-bottom text-right border-faded border-bottom-0 border-right-0 border-left-0">
                    <a href="" class="fs-xs fw-500 ml-auto">view all Items</a>
                    </div>
                </div>
            </div>

          
            <div>
                <a href="#" data-toggle="dropdown" title=""
                    class="header-icon d-flex align-items-center justify-content-center ml-2">
                    <img src="{{ asset('img/admin.jpg') }}" class="profile-image rounded-circle" alt="user">
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                    <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                        <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                            <span class="mr-2">
                                <img src="{{ asset('img/admin.jpg') }}" class="rounded-circle profile-image"
                                    alt="user">
                            </span>
                            <div class="info-card-text">

                                <div class="fs-lg text-truncate text-truncate-lg">
                                   </div>
                                <span
                                    class="text-truncate text-truncate-md opacity-80"></span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider m-0"></div>
                    <a href="#" class="dropdown-item" data-action="app-reset">
                        <span data-i18n="drpdwn.reset_layout">Reset Layout</span>
                    </a>
                    <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                        <span data-i18n="drpdwn.settings">Settings</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item" data-toggle="modal"
                        data-target="#change-password">
                        <span data-i18n="drpdwn.settings">Change Password</span>
                    </a>
                    <div class="dropdown-divider m-0"></div>
                    <a href="#" class="dropdown-item" data-action="app-fullscreen">
                        <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                        <i class="float-right text-muted fw-n">F11</i>
                    </a>
                    <a href="#" class="dropdown-item" data-action="app-print">
                        <span data-i18n="drpdwn.print">Print</span>
                        <i class="float-right text-muted fw-n">Ctrl + P</i>
                    </a>
                
                    <div class="dropdown-divider m-0"></div>
                  
                    <a class="dropdown-item fw-500 pt-3 pb-3" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <span data-i18n="drpdwn.page-logout">Logout</span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </div>
            </div>
        </div>
    </header>

    @if (count($errors->changePassword) > 0)
        <script>
            $(document).ready(function() {
                $('#change-password').modal('show');
            });
        </script>
    @endif


    <!-- change password modal -->
    <div class="modal fade" id="change-password" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-muted">
                        Reset your password
                    </h4>
                </div>
                <form action="{{ url('/change-password') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">Old password <sup class="text-danger">
                                    *</sup></label>
                            <input type="password"
                                class="form-control text-muted @if ($errors->changePassword->has('old_password')) is-invalid @endif"
                                name="old_password" autocomplete="new-password">

                            @if ($errors->changePassword->has('old_password'))
                                <span
                                    class="text-danger text-muted">{{ $errors->changePassword->first('old_password') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">New password <sup class="text-danger">
                                    *</sup></label>
                            <input type="password"
                                class="form-control @if ($errors->changePassword->has('password')) is-invalid @endif"
                                name="password">
                            @if ($errors->changePassword->has('password'))
                                <span
                                    class="text-danger text-muted">{{ $errors->changePassword->first('password') }}</span>
                            @else
                                <span class="text-muted">Use 8 or more characters with a mix of uppercase lowercase
                                    letters, numbers & symbols</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">Confirm password <sup class="text-danger">
                                    *</sup></label>
                            <input type="text"
                                class="form-control @if ($errors->changePassword->has('password')) is-invalid @endif"
                                name="password_confirmation">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-themed">Change
                                Password</button>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End change password modal -->

    <script>
        $(document).ready(function() {
            $('input').attr('autocomplete', 'off');
        });

        @if (session('password-error'))
            iziToast.error({
                title: 'Error',
                message:  '{{ session('password-error') }}',
                position: 'topRight'
            });
        @endif
    </script>
