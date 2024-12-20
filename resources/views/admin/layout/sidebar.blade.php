<style type="text/css">
    .overlay-container {
        position: relative;
    }

    .overlay1 {
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

@php
    use App\Models\Application;
    use App\Models\Report;
    use App\Models\JobPost;

@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme"
    style="background-image: url('/dashboard/assets/img/side-bg.png');background-size: 100% 70%;background-repeat: no-repeat;background-position: center bottom;">
    <div class="app-brand demo" style="margin-left: 0px;margin-right: 0px;height: 100px;">
        <!-- <a href="javascript:void(0);" class="app-brand-link layout-menu-toggle menu-link">
              <img src="/dashboard/assets/img/logo.png" style="margin-left: -40px;">
            </a> -->

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-none ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            <img src="/dashboard/assets/img/logo.png" class="menu-toggle-icon d-none d-xl-block"
                style="margin-left: -40px;">

        </a>
    </div>


    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item  {{request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-layout-dashboard"></i>
                <div data-i18n="Dashboards">Dashboards</div>
                <!-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> -->
            </a>

        </li>

        <li
            class="menu-item {{request()->routeIs('admin.yachts') ? 'active' : '' }}">

            <a href="{{ route('admin.yachts') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-sailboat"></i>
                <div data-i18n="Yachts">Yachts</div>
                <!-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> -->
            </a>

        </li>
        <li class="menu-item {{ request()->routeIs('admin-users.index') ? 'active' : '' }}">
            <a href="{{ route('admin-users.index') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Users">Users</div>
                <!-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> -->
            </a>

        </li>

        <li class="menu-item ">
          <a href="{{route('admin-sales.index')}} " class="menu-link ">
              <i class="menu-icon tf-icons ti ti-users"></i>
              <div data-i18n="Sales">Sales</div>
              <!-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> -->
          </a>

      </li>


        <li class="menu-item ">
            <a href="{{route('admin.job')}}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-briefcase"></i>
                <div data-i18n="Jobs dashboard">Jobs dashboard</div>
                <!-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> -->
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('admin-applications.index') ? 'active' : '' }}">
            <a href="{{ route('admin-applications.index') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-file-export"></i>
                <div data-i18n="Applications">Applications</div>
             
                    {{-- <div class="badge rounded-pill ms-auto" style="border: 1px solid #FFFFFF;">
                     
                    </div> --}}
            

            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('admin-reports.index') ? 'active' : '' }}">
            <a href="{{ route('admin-reports.index') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-file-analytics"></i>
                <div data-i18n="Reports">Reports</div>

                    {{-- <div class="badge rounded-pill ms-auto" style="border: 1px solid #FFFFFF;">

                    </div> --}}
            </a>
        </li>



        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Account</span>
        </li>

        <li class="menu-item  ">
            <a href="{{route('admin-settings.index')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
        </li>
        <div class="col-lg-12 p-4 mt-5">
            <div class="overlay-container">
        </div>
    </ul>

</aside>
