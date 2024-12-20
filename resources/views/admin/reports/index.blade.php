@extends('admin.layout.master')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="layout-demo-wrapper"
            style="background-image: url('/dashboard/assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
            <div class="overlay"></div> <!-- Overlay -->
            <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
                <!-- Text container -->
                <div class="row pt-2">
                    <div class="col-lg-7 text-white">
                        <h3 class="text-white">PlatForm Reports</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-lg-12 mt-5">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card"
                            style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                    style="background-color:#F2F6FA !important">
                                    <i class="ti ti-file-analytics ti-md" style="color:#00365E"></i>
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Total reports</small>
                                    <h5 class="mb-0" style="color: #00365E">{{ $reports->count() }}</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card"
                            style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                    style="background-color:#F2F6FA !important">
                                    <i class="ti ti-circle-check ti-sm" style="color:#00365E"></i>
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Surveyor reports</small>
                                    <h5 class="mb-0" style="color: #00365E">
                                        {{ $reports->where('report_type.name', 'Surveyor report')->count() }}</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card"
                            style="border: 1px solid #FF005C;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-red.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                    style="background-color:#FF005C0D !important">
                                    <img src="/dashboard/assets/img/Icon.png">
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Current Incidents</small>
                                    <h5 class="mb-0" style="color: #FF005C">{{ $reports->count() }}</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card"
                            style="border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                    style="background-color:#2AD7B30D !important">
                                    <i class="ti ti-circle-check" style="color: #2AD7B3"></i>
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Progress reports</small>
                                    <h5 class="mb-0" style="color: #2AD7B3">{{$reports->count()}}</h5>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="row">
                    <!-- Left side area col-lg-12 -->
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <i class="ti ti-file-analytics ti-md" style="color: #00365E"></i>
                                <label style="font-size: 18px;color: #00365E;padding-top: 5px;" class="me-2">Report
                                    List</label>
                                <label class="badge bg-label-primary rounded-pill "
                                    style="color: #00365E !important">{{ $reports->count() }}</label>
                            </div>
                            <div class="col-lg-8" style="text-align: right;color: #00365E;">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <form method="GET" action="{{ route('admin-reports.index') }}"
                                            class="input-group input-group-merge">
                                            <span class="input-group-text" id="basic-addon-search31"><i
                                                    class="ti ti-search"></i></span>
                                            <input type="text" name="search" class="form-control"
                                                placeholder="Search..." aria-label="Search..."
                                                aria-describedby="basic-addon-search31" value="{{ request('search') }}">
                                        </form>
                                    </div>
                                    <div class="col-lg-7">
                                        <form method="GET" action="{{ route('admin-reports.index') }}"
                                            class="d-flex flex-wrap">
                                            <div class="dropdown">
                                                <button type="button" class="btn dropdown-toggle waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                                                    Report Types
                                                </button>
                                                <ul class="dropdown-menu">
                                                    @foreach ($reportTypes as $item)
                                                        <li><a class="dropdown-item"
                                                                href="?report_id={{ $item->id }}">{{ $item->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            <div class="dropdown">
                                                <button type="button"
                                                    class="btn dropdown-toggle waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style="color: #00365E;">
                                                    Yacht
                                                </button>
                                                <ul class="dropdown-menu">
                                                    @foreach ($yachts as $item)
                                                        <li><a class="dropdown-item"
                                                                href="?report_id={{ $item->id }}">{{ $item->yachtName }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            <div class="dropdown">
                                                <button type="button"
                                                    class="btn dropdown-toggle waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style="color: #00365E;">
                                                    All Jobs
                                                </button>
                                                <ul class="dropdown-menu">
                                                    @foreach ($jobs as $item)
                                                        <li><a class="dropdown-item"
                                                                href="?job_id={{ $item->id }}">{{ $item->job_title }}</a>
                                                                
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Cards area  -->
                        <div class="col-lg-12 mt-4 mb-4">
                            <table class="table table-responsive">
                                <tr style="font-size: 14px">
                                    <td><span class="me-2">Reporter</span> <i class="fa fa-bars-staggered me-2"></i>
                                    </td>
                                    <td><span class="me-2">Title</span> <i class="fa fa-bars-staggered me-2"></i></td>
                                    <td><span class="me-2">Yacht</span> <i class="fa fa-bars-staggered me-2"></i></td>
                                    <td><span class="me-2">Job Id</span> <i class="fa fa-bars-staggered me-2"></i></td>
                                    <td><span class="me-2">Post date</span> <i class="fa fa-bars-staggered me-2"></i>
                                    </td>
                                    <td><span class="me-2">Report Type</span> <i class="fa fa-bars-staggered me-2"></i>
                                    </td>
                                </tr>
                                @if ($reports->isEmpty())
                                    <tr class="border" style="color:#00365E;font-size: 14px;">
                                        <td colspan="6" class="text-center">
                                            <p>Sorry no Report Available</p>
                                        </td>
                                    </tr>
                                @endif
                                @foreach ($reports as $item)
                                    <tr data-bs-toggle="offcanvas" data-bs-target="#jobReport" aria-controls="jobReport"
                                        class="border" style="color:#00365E;font-size: 14px;">
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <div class="avatar me-2">
                                                    <img src="{{ $item->reporter->profile_image ? '/storage/'.$item->reporter->profile_image : 'https://via.placeholder.com/32' }}"
                                                        alt="Avatar" class="rounded-circle">
                                                </div>
                                                <div class="ms-1">
                                                    <h6 class="mb-0" style="font-size: 12px;color: #00365E;">
                                                        {{ $item->reporter->firstName }}</h6>
                                                    <span
                                                        style="color:#5E8BF7;font-size: 10px">{{ $item->reporter->accountType }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <label class="badge me-1" style="background-color: #FF005C;">new</label>
                                                <span
                                                    style="font-size: 12px;padding-top: 4px;">{{ $item->subject }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <img src="{{ asset('/dashboard/assets/img/yacht-black.png') }}"
                                                    class="me-1" style="width: 20%;">
                                                <span
                                                    style="font-size: 12px;padding-top: 2px;">{{ $item->job->yacht->yachtName }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span style="color: #5E8BF7"># {{ $item->job_id }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <i class="ti ti-calendar me-1"></i>
                                                <span>
                                                    {{ $item->report_date }}
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <label
                                                class="badge 
                                        @if ($item->reportType->name == 'Incident') bg-label-danger
                                        @else
                                            bg-label-primary @endif">
                                                <span style="padding-top: 4px;">{{ $item->reportType->name }} </span>
                                            </label>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                        <!-- add Yacht -->
                        @if ($reports->isNotEmpty())
                            <nav aria-label="Page navigation" style="float: right;">
                                {{ $reports->links('vendor.custom-pagination') }}
                            </nav>
                        @endif
                    </div>
                    <!-- Left side area end col-lg-12  -->
                </div>
            </div>
            <!--/ Layout Demo -->
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->


    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- create job modal -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="jobReport" aria-labelledby="jobReport"
        style="width: 500px !important;">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i
                    class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas"
                    aria-label="Close"></i> Create Job post</h5>

        </div>
        <div class="offcanvas-body  mx-0 flex-grow-0">

            <div class="col-lg-12 mb-4" style="border: 1px solid #5E8BF7;padding: 20px;">
                <div class="d-flex">
                    <span class="me-1" style="color:#5E8BF7;font-size:14px">#26789</span>
                    <div class="me-2" style="border-left: 1px solid #9CAFD1;height: 20px;"></div>
                    <span class="me-2" style="color:#9CAFD1;font-size: 14px">Sunseeker Manhattan</span>
                    <div class="me-2" style="border-left: 1px solid #9CAFD1;height: 20px;"></div>
                    <span style="color:#9CAFD1;font-size: 14px">Surveyor</span>
                </div>
                <h4 class="mt-2" style="color: #00365E;font-size: 18px;">The plastic on the roof needs replacement
                    before winter</h4>
                <p class="mb-0" style="color:#00365E;font-size:14px">The service offered by a Professional on WYR is
                    called a Job</p>

            </div>
            <label class="badge bg-label-danger mb-2">Incident</label>
            <div class="col-md-12 mb-4">
                <label style="color:#00365E;font-size: 20px">Small situation with the floating level</label>
                <div class="d-flex mt-2">
                    <span class="me-1" style="color:#00365E;font-size:14px"><i
                            class="ti ti-calendar ti-xs me-1"></i>Posted on: 23 January 2022</span>
                    <div class="me-2" style="border-left: 1px solid #00365E;height: 20px;"></div>
                    <span class="me-2" style="color:#00365E;font-size: 14px">Videos: 1</span>
                    <div class="me-2" style="border-left: 1px solid #00365E;height: 20px;"></div>
                    <span style="color:#00365E;font-size: 14px">Images: 1</span>
                </div>
                <p class="mt-3" style="font-size: 14px;color:#00365E">He arived on the boat everything good i start
                    cleaning the and taping the areas to apply the sikaflex. i met Nuno portuguese guy, he said to keep
                    going in what phil asked if I see something else to do to ask phil first. Simon also show up
                    avaiable in case in case i need anything from the boat there was also a girl removing panel from the
                    inside.</p>
            </div>
            <label style="color:#00365E;font-size: 18px">Upload material </label>
            <div class="col-lg-12 mt-2">
                <div class="row">
                    <div class="col-lg-4 mb-2">
                        <img src="assets/img/rect.png" class="w-100">
                    </div>
                    <div class="col-lg-4 mb-2">
                        <img src="assets/img/rect.png" class="w-100">
                    </div>
                    <div class="col-lg-4 mb-2">
                        <img src="assets/img/rect.png" class="w-100">
                    </div>
                </div>
            </div>
            <label class="mt-4" style="color:#00365E;font-size: 18px">Reporter information</label>
            <p style="color: #9CAFD1;font-size: 16px">Need more details about the report? Contact the reporter directly
                trought the contacts bellow</p>
            <div class="col-lg-12"
                style="border: 1px solid #C6D2E7; padding: 20px;text-align: center;background: url('assets/img/cd.png');background-size: 100% 100%;">
                <img src="{{ asset('dashboard/assets/assets/img/avatars/3.png') }}"
                    style="width: 70px;height: 70px;border-radius: 100%;">
                <p class="mt-2" style="font-size: 18px;color: #00365E;">Tim Burton</p>
                <label class="badge" style="background:#F2F6FA;color:#5E8BF7;margin-top:-10px">All fix
                    LDA</label><br>
                <small style="color: #9CAFD1">Eletrician</small><br>
                <button class="btn bg-white w-100 mt-4"
                    style="border:1px solid #5E8BF7;color: #5E8BF7;border-radius: 0px;">

                    <i class="ti ti-phone me-2"></i>
                    +003 323425 432

                </button>
                <button class="btn bg-white w-100 mt-2"
                    style="border:1px solid #C6D2E7;color: #00365E;border-radius: 0px;">

                    <i class="ti ti-mail me-2"></i>
                    jack@allfix.com

                </button>
            </div>
        </div>

    </div>
@endsection
