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

    .Checkplans:hover {
        color: rgb(0, 0, 0) !important;
        /* Text color becomes white */
        border-color: #333 !important;
        /* Optional: adjust the border color */
    }
</style>

@php
    use App\Models\Report;
    use App\Models\Application;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Carbon;

    // Get today's applications
$applications = Application::where('user_id', Auth::user()->id)->get();

// Get today's reports
    $reports = Report::where('reporter_id', Auth::user()->id)->get();
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
        <li class="menu-item ">
            <a href="{{ route('professional-dashboard.index') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-briefcase"></i>
                <div data-i18n="Jobs dashboard">Jobs dashboard</div>
                <!-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> -->
            </a>

        </li>
        <li class="menu-item ">
            <a href="{{ route('professional-applications.index') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-file-export"></i>
                <div data-i18n="Applications">Applications</div>

                @if (!$applications->isEmpty())
                    <div class="badge rounded-pill ms-auto" style="border: 1px solid #FFFFFF;">
                        {{ $applications->count() }}
                    </div>
                @endif


            </a>
        </li>
        <li class="menu-item ">
            <a href="{{ route('professional-reports.index') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-file-analytics"></i>
                <div data-i18n="Reports">Reports</div>

                @if (!$reports->isEmpty())
                    <div class="badge rounded-pill ms-auto" style="border: 1px solid #FFFFFF;">
                        {{ $reports->count() }}
                    </div>
                @endif
            </a>
        </li>


        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Account</span>
        </li>
        <li class="menu-item">
            <a href="{{ route('subscriptions.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-coin"></i>
                <div data-i18n="Pricing & Plans">Pricing & Plans</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('professional-setting.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
        </li>
        <div class="col-lg-12 p-4 mt-5">
            <div class="overlay-container"
                style="background-image: url('/dashboard/assets/img/image.png');height: 260px;background-size: 100% 100%;text-align: center;padding: 20px;">
                <div class="overlay1"></div>
                <h2 class="text-white" style="position: relative; z-index: 2;">Unlock all features permanetly</h2>
                <button class="btn btn-white w-100" onclick="location.href='{{ route('subscriptions.index') }}'"
                    style="position: relative; z-index: 2; border-radius: 0px;">
                    Upgrade account
                </button>
                <button class="btn btn-outline-white w-100 Checkplans"
                    onclick="location.href='{{ route('subscriptions.index') }}'"
                    style="position: relative; z-index: 2; border-radius: 0px;">
                    Check plans
                </button>
            </div>

        </div>
    </ul>

</aside>
