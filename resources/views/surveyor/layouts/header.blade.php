<style type="text/css">
    .labelOwn {
        position: absolute;
        top: -10px;
        left: 8px;
        background-color: white;
        padding: 0 5px;
    }

    .container-xxl {
        padding-left: 100px;
        padding-right: 100px;
    }

    .overlay2 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #0F3A4F;
        z-index: 1;
        opacity: 0.5;
    }
</style>
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar" style="padding-left: 80px;padding-right: 80px;">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="ti ti-menu-2 ti-sm"></i>
        </a>
    </div>
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link  d-flex align-items-center px-0" href="">
                    <i class="fa fa-bars-staggered ti-xs me-2" style="color: #00365E;"></i>
                    <span class="d-none d-md-inline-block me-2" style="color:#00365E">Surveyor Dashboard</span>
                    <button class="btn text-white"
                        style="background: linear-gradient(114.31deg, #5A67F1 15.56%, #729acc 84.44%),linear-gradient(114.31deg, #5A67F1 15.56%, #5A67F1 84.44%);">
                        <i class="ti ti-circle-check me-1 ti-sm"></i> UNLOCK ALL FEATURES</button>
                </a>
            </div>
        </div>
        <!-- /Search -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Style Switcher -->
            <li class="nav-item me-2 me-xl-0">
                <a class="nav-link search-toggler hide-arrow" href="javascript:void(0);">
                    <i class="ti ti-search"></i>
                </a>
            </li>
            <!--/ Style Switcher -->
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ Auth::user()->profile_image ? Auth::user()->profile_image : asset('dashboard/profile.png') }}" alt class="h-auto rounded-circle" />

                     </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" style="border: 1px solid #C6D2E7;border-radius: 0px;">
                    <li>
                        <a class="dropdown-item" href="#">
                            <center>
                                <div class="">
                                    <div class="avatar ">
                                        <img src="{{ Auth::user()->profile_image ?   Auth::user()->profile_image : asset('profile.png') }}" alt
                                        class="h-auto rounded-circle" style="width: 50px; height: 50px;" />
                                    
                                    </div>
                                    <label class="mt-3" style="color:#00365E;font-size: 16px;">{{ Auth::user()->firstName }} {{ Auth::user()->lastName }}</label><br>
                                    <label style="font-size: 13px;color: #5E8BF7;">{{ Auth::user()->accountType}} </label>
                                </div>
                            </center>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route('user.profile')}}"
                            style="background: linear-gradient(114.31deg, #6725F1 15.56%, #BC87FF 84.44%),linear-gradient(114.31deg, #5A67F1 15.56%, #60A3FA 84.44%);color: #fff;border-radius: 0px;">
                            <i class="ti ti-user me-2 ti-sm"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route('professional-setting.index')}}"
                            style="background: #F2F6FA;color: #5E8BF7;border-radius: 0px;">
                            <i class="ti ti-settings me-2 ti-sm"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route('subscriptions.index')}}" style="color:#00365E">
                            <i class="ti ti-coin me-2 ti-sm"></i>
                            <span class="align-middle">Subscription</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route('subscriptions.index')}}" style="color:#00365E">
                            <span class="d-flex align-items-center align-middle">
                                <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                                <span class="flex-grow-1 align-middle">Billing</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#" style="color:#00365E">
                            <span class="d-flex align-items-center align-middle">
                                <i class="flex-shrink-0 ti ti-lifebuoy me-2 ti-sm"></i>
                                <span class="flex-grow-1 align-middle">Support</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/logout" style="color:#FF005C" >
                            <i class="ti ti-login me-2 ti-sm"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                    <li style="padding: 10px">
                        <div class="w-100 overlay-container"
                            style="background: url('/dashboard/assets/img/imagee.png');background-size: 100% 100%;height: 150px;padding: 20px;text-align: center;">
                            <div class="overlay1"></div>
                            <h2 class="text-white" style="position: relative; z-index: 2;font-size: 20px;">Unlock your
                                account</h2>
                            <button class="btn btn-white w-100"
                                style="position: relative; z-index: 2;border-radius: 0px;color: #00365E;">Upgrade</button>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
            aria-label="Search..." />
        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
    </div>
</nav>
