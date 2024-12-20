@extends('owner.layout.master')

@section('content')
    <style type="text/css">
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #0F3A4F;
            /* Adjust opacity and color as needed */
            opacity: 0.5;
            /* Adjust opacity as needed */
        }

        .text-container {
            position: relative;
            z-index: 1;
            /* Ensure text is above the overlay */
        }

        .vertical-line {
            border-right: 1px solid #9CAFD1;
            /* Adjust color and thickness as needed */
            padding-right: 5px;
            /* Adjust spacing between text and line as needed */
            margin-right: 5px;
            /* Adjust spacing between lines as needed */
        }

        /* Remove border-right for last element */
        .vertical-line:last-child {
            border-right: none;
        }

        .bg-label-primary {
            background-color: #F2F6FA !important;
            color: #5E8BF7 !important;
        }
    </style>

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="layout-demo-wrapper"
            style="background-image: url('/dashboard/assets/img/bg.png'); height: 120px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
            <div class="overlay"></div>
            <!-- Overlay -->
            <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
                <!-- Text container -->
                <div class="row">
                    <div class="col-lg-7 text-white">
                        <h3 class="text-white">{{ $yachtData->yachtName }}</h3>
                        <div class="d-flex flex-wrap" style="margin-top:-10px">
                            <span class="d-flex align-items-center justify-content-center text-nowrap me-3 vertical-line"
                                style="color:#fff">Mooring: {{ $yachtData->mooringNumber }}</span>
                            <span class="d-flex align-items-center justify-content-center text-nowrap me-3 vertical-line"
                                style="color:#fff">Size: {{ $yachtData->yachtSize }}</span>
                            <span class="d-flex align-items-center justify-content-center text-nowrap vertical-line"
                                style="color:#fff">Tonnage: {{ $yachtData->yachtTonnage }}</span>
                            <span class="d-flex align-items-center justify-content-center text-nowrap vertical-line"
                                style="color:#fff">Port: <strong> {{ $yachtData->portBase }}</strong></span>
                        </div>
                    </div>
                    <div class="col-lg-5" style="text-align: right;">

                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#createJob"
                            aria-controls="createJob" class="btn btn-white waves-effect waves-light"
                            style="border-radius: 0px !important;color: #00365d;">
                            <span class="ti-xs ti ti-briefcase me-1"></span>Create Job </button>
                        <button type="button" class="btn "
                            style="border-radius: 0px !important;color: #00365d;border: 1px solid white;color: white;width: 20px;">
                            <span class="ti-xs ti ti-dots-vertical me-1"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Layout Demo -->

            <div class="col-lg-12 " style="margin-top: -24px">
                <div class="nav-align-top  ">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="false"
                                tabindex="-1">
                                Overview
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false"
                                tabindex="-1">
                                Jobs
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="true">
                                Reports
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-crew" aria-controls="navs-top-crew" aria-selected="true">
                                Crew
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-yacht" aria-controls="navs-top-yacht" aria-selected="true"> Yacht
                                Info </button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" style="margin-left: -20px;margin-right: -20px">
                    <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-12 mt-5">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card"
                                            style="border: 1px solid #5E8BF7;height: 90px;box-shadow: 0px 16px 30px 0px #4680FF29;background: url('/dashboard/assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                            <div class="d-flex align-items-center">
                                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                    style="background-color:#F2F6FA !important">
                                                    <i class="ti ti-coin ti-sm" style="color:#5E8BF7"></i>
                                                </div>
                                                <div class="card-info">
                                                    <small style="font-size: 11px">Total Invested</small>
                                                    <h5 class="mb-0" style="color: #00365E">  {{ $jobs->where('status', 'approved')->sum('budget') }}€
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card"
                                            style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('/dashboard/assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                            <div class="d-flex align-items-center">
                                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                    style="background-color:#F2F6FA !important">
                                                    <i class="ti ti-user ti-sm" style="color:#00365E"></i>
                                                </div>
                                                <div class="card-info">
                                                    <small style="font-size: 11px">yacht crew</small>
                                                    <h5 class="mb-0" style="color: #00365E">{{ $teamMembers->count() }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card"
                                            style="border: 1px solid #FF005C;height: 90px;box-shadow: none !important;background: url('/dashboard/assets/img/card-corner-red.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                            <div class="d-flex align-items-center">
                                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                    style="background-color:#FF005C0D !important">
                                                    <img src="/dashboard/assets/img/icon.png" style="width: 20px">
                                                </div>
                                                <div class="card-info">
                                                    <small style="font-size: 11px">Current
                                                        incidents</small>
                                                    <h5 class="mb-0" style="color: #FF005C">
                                                        {{ $reports->where('reportType.name', 'Incident')->count() }}</h5>
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
                                                    <i class="ti ti-circle-check ti-sm" style="color:#2AD7B3"></i>
                                                </div>
                                                <div class="card-info">
                                                    <small style="font-size: 11px">In progress jobs</small>
                                                    <h5 class="mb-0" style="color: #2AD7B3">

                                                        {{ $jobs->whereIn('status', 'approved')->count() }}

                                                        <span class="badge bg-label-secondary badge-sm"
                                                            style="width: 60px;height: 20px;font-size: 10px;color: #00365E !important;">
                                                            {{ $jobs->where('status', 'approved')->sum('budget') }}
                                                            €</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 mt-5">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <i class="ti ti-clipboard-check ti-md"
                                            style="margin-top:-7px;color: #00365E;"></i>
                                        <label style="font-size: 18px;color: #00365E;padding-top: 3px;">Recent
                                            Jobs</label>
                                    </div>
                                    <div class="col-lg-4" style="text-align: right;color: #00365E;">
                                        <div style="display: flex">
                                            <div class="dropdown">
                                                <button type="button" class="btn dropdown-toggle waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                                                    Status
                                                </button>
                                                <ul class="dropdown-menu">
                                                   
                                                    <li><a class="dropdown-item"
                                                        href="{{ route('show.owner.yacht', ['id' => $yachtData->id, 'status' => 'approved']) }}">Approved</a></li>
                                                 <li><a class="dropdown-item"
                                                        href="{{ route('show.owner.yacht', ['id' => $yachtData->id, 'status' => 'waiting']) }}">Waiting</a></li>
                                                 <li><a class="dropdown-item"
                                                        href="{{ route('show.owner.yacht', ['id' => $yachtData->id, 'status' => 'hired']) }}">Hired</a></li>
                                                 
                                                </ul>
                                            </div>



                                            <a href="{{ route('owner/job') }}">
                                                <button class="btn" style="color: #00365E;">View
                                                    All</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                @if ($jobs->isEmpty())
                                    <div class="col-lg-12 mb-3 text-center p-5" style="border: 1px solid #C6D2E7;padding: 20px">
                                                <p class=" text-center p-5" >
                                                    No Job
                                                </p>
                                    </div>
                                @endif
                                <!-- Cards area  -->
                                @foreach ($jobs->take(3) as $job)
                                    <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;padding: 20px">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <img src="{{ Storage::url($job->images) }}" style="width: 100%">
                                            </div>
                                            <div class="col-lg-9" style="color:#00365E">
                                                <a href="{{ route('owner.job.details', $job->id) }}">
                                                    <div class="row">
                                                        <div style="display: flex">
                                                            <span
                                                                class="badge me-2 
                                                                
                                                                @if ($job->status == 'approved') bg-primary
                                                                    @elseif ($job->status == 'hired')
                                                                        bg-success
                                                                   @else
                                                                       bg-label-primary @endif"
                                                                style=" height: 30px;">

                                                                <i
                                                                    class="ti
                                                                    @if ($job->status == 'approved') ti-circle-check text-capitalize
                                                                    @elseif ($job->status == 'hired')
                                                                        ti-briefcase 
                                                                   @else
                                                                   ti-clock @endif
                                                                     me-1 ti-xs"></i>{{ $job->status }}
                                                            </span>
                                                            <span class="me-2 vertical-line"
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#{{ $job->id }}</span>
                                                            <span class="me-2 vertical-line"
                                                                style="padding-top: 5px; color: #9CAFD1; font-size: 13px;">
                                                                {{ \Carbon\Carbon::parse($job->created_at)->format('j M Y') }}
                                                            </span>

                                                            <span class="me-2 vertical-line"
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                                                <img src="/dashboard/assets/img/yacht.png"
                                                                    class="me-1" />{{ $job->yacht->yachtName }} </span>
                                                            <span class="me-2 vertical-line"
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                                                @if ($job->require_surveyor == 'yes')
                                                                    <img src="/dashboard/assets/img/check.png"
                                                                        class="me-1" />
                                                                    Surveyor
                                                                @endif
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <p style="" class="mt-1 text-dark">{{ $job->job_title }}</p>
                                                    <p class=" text-dark" style="margin-top:-15px;font-size:12px;">

                                                        {{ Str::words($job->job_description, 50, '...') }}
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-1" style="text-align: right;">
                                                <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>
                                            </div>
                                            <div class="col-lg-2"></div>

                                            <div class="col-lg-7 ">
                                                <div class="d-flex flex-wrap" style="margin-top: -7px">
                                                    <div class="avatar me-3">
                                                        <img src="/storage/{{ $job->user->profile_image }}"
                                                            alt="Avatar" class="rounded-circle">
                                                    </div>
                                                    <div>
                                                        <p class=" mt-2" style="font-size: 14px;color: #00365E;">
                                                            {{ $job->user->firstName . ' ' . $job->user->lastName }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            @if ($job->status == 'waiting')
                                                <div class="col-lg-3">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        onclick="approveJob({{ $job->id }});">
                                                        Approved
                                                    </button>
                                                </div>
                                            @endif
                                        </div>
                                        {{-- hired --}}
                                        <div class="row mt-1" style="border-top: 1px solid #C6D2E7;margin-left: -20px;margin-right: -20px;padding: 15px;padding-bottom: 0px !important;color: #00365E;">
                                            @if ($job->status != 'hired')
                                                <div class="col-lg-6 " style="border-right: 1px solid #9CAFD1;">
                                                    <div class="d-flex flex-wrap ">
                                                        <i class="ti ti-coin me-2"></i>
                                                        <span style="font-size: 14px;" class="me-2">Budget range:</span>
                                                        <span style="font-size: 14px;" class="me-2">up to
                                                            {{ $job->budget }}</span>
                                                        @if ($job->budget_flexible == 'yes')
                                                            <span class="badge bg-label-success">
                                                                Flexible
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-5" style="color:#1CBDA0">
                                                    <div class="d-flex flex-wrap">
                                                        <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                                                       
                                                        @if($job->status == 'waiting')
                                                        <span style="font-size: 14px;" class="me-2">
                                                            Delivery by:</span>
                                                        <span style="font-size: 14px;"
                                                            class="me-2">{{ $job->delivery_date }}</span>
                                                        @elseif ($job->status == 'approved')
                                                        <span style="font-size: 14px;" class="me-2">
                                                            Applications:</span>
                                                        <span style="font-size: 14px;"
                                                            class="me-2">{{ $job->applications->count() }}</span>
                                                        @endif
                                                        
                                                    </div>
                                                </div>


                                            @else
                                                <div class="col-lg-3 " style="border-right: 1px solid #9CAFD1;">
                                                    <div class="d-flex flex-wrap ">
                                                        <i class="ti ti-coin me-2"></i>
                                                        <span style="font-size: 14px;" class="me-2">Budget
                                                            Accepted:</span>
                                                        <span style="font-size: 14px;" class="me-2">
                                                            {{ $job->budget }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3" style="border-right: 1px solid #9CAFD1;">
                                                    <div class="d-flex flex-wrap">
                                                        <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                                                        <span style="font-size: 14px;" class="me-2">Surveryors:</span>
                                                        <span style="font-size: 14px;" class="me-2">0</span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3"
                                                    style="color:#1CBDA0;border-right: 1px solid #9CAFD1;">
                                                    <div class="d-flex flex-wrap">
                                                        <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                                                        <span style="font-size: 14px;" class="me-2">Progress:</span>
                                                        <span style="font-size: 14px;"
                                                            class="me-2">{{ $job->reports->where('report_type_id', 2)->sum('report_type_id') }}
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 text-danger">
                                                    <div class="d-flex flex-wrap">
                                                        <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                                                        <span style="font-size: 14px;" class="me-2">Incedent:</span>
                                                        <span style="font-size: 14px;" class="me-2">
                                                            {{ $job->reports->where('report_type_id', 1)->sum('report_type_id') }}
                                                        </span>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach

                                @if ($jobs->isNotEmpty())
                                    <nav aria-label="Page navigation" style="float: right;">
                                        {{ $jobs->links('vendor.custom-pagination') }}
                                    </nav>
                                @endif
                            </div>
                            <div class="col-lg-4 mt-5">
                                <!-- first box   -->
                                <div class="col-lg-12 mb-3"
                                    style="border: 1px solid #C6D2E7;width: 100%;padding: 16px 24px 16px 24px;gap: 24px;border: 1px 0px 0px 0px;opacity: 0px;color: #00365E;">
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <p>Recent Reports</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right;">
                                            <div class="btn-group">
                                                <label type="button" class="waves-effect waves-light"
                                                    aria-expanded="false" style="font-size: 14px">
                                                    <a href="{{ route('owner-reports.index') }}">
                                                        View All
                                                    </a>
                                                </label>

                                            </div>
                                        </div>
                                    </div>

                                    @if ($reports->isEmpty())
                                    <div class="row mb-3">
                                        <div class="col-lg-12 text-center p-4">
                                                <h5>
                                                    No Data
                                                </h5>
                                            <p>
                                                    You have no report yet
                                                </p>
                                        </div>
                                    </div>
                                    @endif
                                    @foreach ($reports->take(3) as $report)
                                        <div class="row mb-3">
                                            <div class="col-lg-7">
                                                <p style="font-size: 14px">{{ $report->reporter->firstName }}</p>
                                                <p
                                                    style="font-size: 13px;color: #9CAFD1;margin-top: -10px;font-weight: 400;">
                                                    <img src="/dashboard/assets/img/yacht.png" class="me-1" />

                                                    {{ Str::words($report->job->job_title, 3, '...') }}
                                                </p>
                                                
                                            </div>
                                            <div class="col-lg-5" style="text-align: right;">
                                                <p style="font-size: 13px;color: #9CAFD1;font-weight: 400;">
                                                    {{ \Carbon\Carbon::parse($report->created_at)->format('d-m-Y | H:i\h') }}

                                                </p>
                                                <span
                                                    class="badge  badge-sm
                                            @if ($report->reportType->id == 1) bg-label-danger
                                            @else
                                                bg-label-primary @endif">
                                                    {{ $report->reportType->name }}
                                                </span>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                                <!-- first box end  -->
                                <!-- second box -->

                                {{-- <div class="col-lg-12 mt-3"
                                    style="border: 1px solid #C6D2E7;width: 100%;padding: 16px 24px 16px 24px; gap: 24px;border: 1px 0px 0px 0px;opacity: 0px;color: #00365E;">
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <p>Recent activity</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right;">
                                            <div class="btn-group">
                                                <label type="button" class="waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style="font-size: 14px"> View All </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-wrap">
                                                <img src="assets/assets/img/avatars/1.png"
                                                    style="width: 50px;height: 50px !important;" alt=""
                                                    class="h-auto rounded-circle">
                                                <div style="margin-left: 10px;">
                                                    <h6 class="mb-0 text-nowrap">Tim Cook <small
                                                            class="text-muted">14-02-2024 | 10:17h</small>
                                                    </h6>
                                                    <small style="color:#00365E">Created a posted a new job
                                                        offer </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-wrap">
                                                <img src="assets/assets/img/avatars/1.png"
                                                    style="width: 50px;height: 50px !important;" alt=""
                                                    class="h-auto rounded-circle">
                                                <div style="margin-left: 10px;">
                                                    <h6 class="mb-0 text-nowrap" style="font-size: 14px;color: #5E8BF7;">
                                                        Jack
                                                        Sparrow <small class="text-muted">14-02-2024 |
                                                            10:17h</small>
                                                    </h6>
                                                    <small style="color:#00365E">Created a posted a new job
                                                        offer </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}


                            </div>
                            <hr>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <i class="ti ti-users ti-md" style="margin-top:-7px;color: #00365E;"></i>
                                        <label style="font-size: 18px;color: #00365E;padding-top: 3px;">Yacht
                                            crew</label>
                                    </div>
                                    <div class="col-lg-6 mb-3" style="text-align: right">
                                        <a href="{{ route('owner/job') }}">
                                            All Roles</a>
                                    </div>

                                    @foreach ($teamMembers->take(8) as $item)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-2">
                                            <div class="card"
                                                style="box-shadow: none !important;border: 1px solid #C6D2E7;border-radius: 0px;background: url('/dashboard/assets/img/back.png');background-size: 100% 50%;background-repeat: no-repeat;background-position: center bottom;">
                                                <div class="card-body text-center">
                                                    <div class="dropdown btn-pinned">
                                                        <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical text-muted"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Share
                                                                    connection</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Block
                                                                    connection</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item text-danger"
                                                                    href="javascript:void(0);">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mx-auto my-">
                                                        <img src="/dashboard/assets/img/profile.jpg" alt="Avatar Image"
                                                            class="rounded-circle w-px-100">
                                                    </div>
                                                    <h4 class="card-title" style="color: #00365E">{{ $item->firstname }}
                                                        {{ $item->lastname }}
                                                    </h4>

                                                    <div
                                                        class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                        <a href="javascript:;" class="me-1"><span
                                                                class="badge bg-label-primary">{{ $item->job_title }}</span></a>
                                                    </div>

                                                    <span class="pb-1" style="color: #9CAFD1;font-size: 14px;">Joined at

                                                        {{ \Carbon\Carbon::parse($item->created_at)->format('j M Y') }}</span>

                                                    </span>


                                                    <div class="d-flex align-items-center justify-content-center mt-3">

                                                        <a href="javascript:;"
                                                            class="btn btn-label-secondary btn-icon waves-effect me-2 w-50"><i
                                                                class="ti ti-phone ti-md"></i></a>
                                                        <a href="javascript:;"
                                                            class="btn btn-label-secondary btn-icon waves-effect w-50"><i
                                                                class="ti ti-mail ti-md"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- job tab  --}}
                    <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                        <div class="col-lg-12 mt-5">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card"
                                        style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('dashboard/assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <div class="d-flex align-items-center">
                                            <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-coin ti-sm" style="color:#00365E"></i>
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Total Invested</small>
                                                <h5 class="mb-0" style="color: #00365E">
                                                    {{ $jobs->where('status', 'hired')->sum('budget') }}€</h5>

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
                                                <i class="ti ti-x ti-sm" style="color:#00365E"></i>
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Applications refused</small>
                                                <h5 class="mb-0" style="color: #00365E">
                                                    {{ $applications->where('status', 'Rejected')->count() }}
                                                </h5>

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
                                                <i class="ti ti-file-export ti-sm" style="color:#00365E"></i>
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Applications
                                                    received</small>
                                                <h5 class="mb-0" style="color: #00365E">
                                                    {{ $applications->count() }}
                                                </h5>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card"
                                        style="border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('/dashboard/assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <div class="d-flex align-items-center">
                                            <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                style="background-color:#2AD7B30D !important">
                                                <i class="ti ti-circle-check" style="color: #2AD7B3"></i>
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">In progress jobs</small>
                                                <h5 class="mb-0" style="color: #2AD7B3">
                                                    {{ $jobs->where('status', 'approved')->count() }}
                                                </h5>

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
                                        <div class="col-lg-5">
                                            <i class="ti ti-clipboard-check ti-md" style="color: #00365E"></i>
                                            <label style="font-size: 18px;color: #00365E;padding-top: 5px;"
                                                class="me-2">Job list</label>
                                            <label class="badge bg-label-primary rounded-pill "
                                                style="color: #00365E !important">
                                                {{ $jobs->count() }}
                                            </label>
                                        </div>
                                        <div class="col-lg-7" style="text-align: right;color: #00365E;">
                                            <div class="row">
                                                <div class="col-lg-1"></div>
                                                <div class="col-lg-5">
                                                    <form  class="input-group input-group-merge" method="get" action="{{route('show.owner.yacht',$yachtData->id)}}">
                                                        <span class="input-group-text" id="basic-addon-search31"><i
                                                                class="ti ti-search"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search..." 
                                                            name="job_search" 
                                                            onchange="this.form.submit()"
                                                            value="{{ request('job_search') }}" 
                                                            aria-label="Search..." 
                                                            aria-describedby="basic-addon-search31">
                                                    </form>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="dropdown">
                                                            <button type="button" class="btn dropdown-toggle waves-effect waves-light"
                                                                data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                                                                Status
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                    href="{{ route('show.owner.yacht', ['id' => $yachtData->id, 'status' => 'approved']) }}">Approved</a></li>
                                                             <li><a class="dropdown-item"
                                                                    href="{{ route('show.owner.yacht', ['id' => $yachtData->id, 'status' => 'waiting']) }}">Waiting</a></li>
                                                             <li><a class="dropdown-item"
                                                                    href="{{ route('show.owner.yacht', ['id' => $yachtData->id, 'status' => 'hired']) }}">Hired</a></li>
                                                             
                                                            </ul>
                                                        </div>
                                                        <a href="{{route('show.owner.yacht',$yachtData->id)}}">
                                                            <button class="btn" style="color: #00365E;">Reset</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    @if ($jobs->isEmpty())
                                    <div class="col-lg-12 my-3 text-center" style="border: 1px solid #C6D2E7;padding: 20px">
                                            
                                                
                                        <p>
                                                No job
                                            </p>
                                    </div>
                                        
                                    @endif
                                    <!-- Cards area  -->
                                    @foreach ($jobs as $job)
                                    <div class="col-lg-12 my-3" style="border: 1px solid #C6D2E7;padding: 20px">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <img src="{{ Storage::url($job->images) }}" style="width: 100%">
                                            </div>
                                            <div class="col-lg-9" style="color:#00365E">
                                                <a href="{{ route('owner.job.details', $job->id) }}">
                                                    <div class="row">
                                                        <div style="display: flex">
                                                            <span
                                                                class="badge me-2 
                                                                
                                                                @if ($job->status == 'approved') bg-primary
                                                                    @elseif ($job->status == 'hired')
                                                                        bg-success
                                                                   @else
                                                                       bg-label-primary @endif"
                                                                style=" height: 30px;">

                                                                <i
                                                                    class="ti
                                                                    @if ($job->status == 'approved') ti-circle-check text-capitalize
                                                                    @elseif ($job->status == 'hired')
                                                                        ti-briefcase 
                                                                   @else
                                                                   ti-clock @endif
                                                                     me-1 ti-xs"></i>{{ $job->status }}
                                                            </span>
                                                            <span class="me-2 vertical-line"
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#{{ $job->id }}</span>
                                                            <span class="me-2 vertical-line"
                                                                style="padding-top: 5px; color: #9CAFD1; font-size: 13px;">
                                                                {{ \Carbon\Carbon::parse($job->created_at)->format('j M Y') }}
                                                            </span>

                                                            <span class="me-2 vertical-line"
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                                                <img src="/dashboard/assets/img/yacht.png"
                                                                    class="me-1" />{{ $job->yacht->yachtName }} </span>
                                                            <span class="me-2 vertical-line"
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                                                @if ($job->require_surveyor == 'yes')
                                                                    <img src="/dashboard/assets/img/check.png"
                                                                        class="me-1" />
                                                                    Surveyor
                                                                @endif
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <p style="" class="mt-1 text-dark">{{ $job->job_title }}</p>
                                                    <p class=" text-dark" style="margin-top:-15px;font-size:12px;">

                                                        {{ Str::words($job->job_description, 50, '...') }}
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-1" style="text-align: right;">
                                                <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>
                                            </div>
                                            <div class="col-lg-2"></div>

                                            <div class="col-lg-7 ">
                                                <div class="d-flex flex-wrap" style="margin-top: -7px">
                                                    <div class="avatar me-3">
                                                        <img src="/storage/{{ $job->user->profile_image }}"
                                                            alt="Avatar" class="rounded-circle">
                                                    </div>
                                                    <div>
                                                        <p class=" mt-2" style="font-size: 14px;color: #00365E;">
                                                            {{ $job->user->firstName . ' ' . $job->user->lastName }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            @if ($job->status == 'waiting')
                                                <div class="col-lg-3">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        onclick="approveJob({{ $job->id }});">
                                                        Approved
                                                    </button>
                                                </div>
                                            @endif
                                        </div>
                                        {{-- hired --}}
                                        <div class="row mt-1" style="border-top: 1px solid #C6D2E7;margin-left: -20px;margin-right: -20px;padding: 15px;padding-bottom: 0px !important;color: #00365E;">
                                            @if ($job->status != 'hired')
                                                <div class="col-lg-6 " style="border-right: 1px solid #9CAFD1;">
                                                    <div class="d-flex flex-wrap ">
                                                        <i class="ti ti-coin me-2"></i>
                                                        <span style="font-size: 14px;" class="me-2">Budget range:</span>
                                                        <span style="font-size: 14px;" class="me-2">up to
                                                            {{ $job->budget }}</span>
                                                        @if ($job->budget_flexible == 'yes')
                                                            <span class="badge bg-label-success">
                                                                Flexible
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-5" style="color:#1CBDA0">
                                                    <div class="d-flex flex-wrap">
                                                        <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                                                       
                                                        @if($job->status == 'waiting')
                                                        <span style="font-size: 14px;" class="me-2">
                                                            Delivery by:</span>
                                                        <span style="font-size: 14px;"
                                                            class="me-2">{{ $job->delivery_date }}</span>
                                                        @elseif ($job->status == 'approved')
                                                        <span style="font-size: 14px;" class="me-2">
                                                            Applications:</span>
                                                        <span style="font-size: 14px;"
                                                            class="me-2">{{ $job->applications->count() }}</span>
                                                        @endif
                                                        
                                                    </div>
                                                </div>


                                            @else
                                                <div class="col-lg-3 " style="border-right: 1px solid #9CAFD1;">
                                                    <div class="d-flex flex-wrap ">
                                                        <i class="ti ti-coin me-2"></i>
                                                        <span style="font-size: 14px;" class="me-2">Budget
                                                            Accepted:</span>
                                                        <span style="font-size: 14px;" class="me-2">
                                                            {{ $job->budget }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3" style="border-right: 1px solid #9CAFD1;">
                                                    <div class="d-flex flex-wrap">
                                                        <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                                                        <span style="font-size: 14px;" class="me-2">Surveryors:</span>
                                                        <span style="font-size: 14px;" class="me-2">0</span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3"
                                                    style="color:#1CBDA0;border-right: 1px solid #9CAFD1;">
                                                    <div class="d-flex flex-wrap">
                                                        <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                                                        <span style="font-size: 14px;" class="me-2">Progress:</span>
                                                        <span style="font-size: 14px;"
                                                            class="me-2">{{ $job->reports->where('report_type_id', 2)->sum('report_type_id') }}
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 text-danger">
                                                    <div class="d-flex flex-wrap">
                                                        <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                                                        <span style="font-size: 14px;" class="me-2">Incedent:</span>
                                                        <span style="font-size: 14px;" class="me-2">
                                                            {{ $job->reports->where('report_type_id', 1)->sum('report_type_id') }}
                                                        </span>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach


                                    <!-- add Yacht -->
                                    @if ($jobs->isNotEmpty())
                                        <nav aria-label="Page navigation" style="float: right;">
                                            {{ $jobs->links('vendor.custom-pagination') }}
                                        </nav>
                                    @endif

                                </div>
                                <!-- Left side area end col-lg-12  -->
                            </div>
                        </div>
                    </div>
                    {{-- Reports  --}}
                    <div class="tab-pane fade " id="navs-top-messages" role="tabpanel">
                        <div class="col-lg-12 mt-5">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card"
                                        style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('/dashboard/assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <div class="d-flex align-items-center">
                                            <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-coin ti-md" style="color:#00365E"></i>
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Total Invested</small>
                                                <h5 class="mb-0" style="color: #00365E"> {{ $jobs->where('status', 'approved')->sum('budget') }} €</h5>

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
                                                <i class="ti ti-file-analytics ti-sm" style="color:#00365E"></i>
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
                                        style="border: 1px solid #FF005C;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-red.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <div class="d-flex align-items-center">
                                            <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                style="background-color:#FF005C0D !important">
                                                <img src="/dashboard/assets/img/Icon.png">
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Current Incidents</small>
                                                <h5 class="mb-0" style="color: #FF005C">
                                                    {{ $reports->where('reportType.name', 'Incident')->count() }}
                                                </h5>

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
                                                <h5 class="mb-0" style="color: #2AD7B3">
                                                    {{ $reports->where('reportType.name', 'Progress')->count() }}
                                                </h5>

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
                                    <form method="GET" action="{{ route('show.owner.yacht', $id) }}">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <i class="ti ti-file-analytics ti-md" style="color: #00365E"></i>
                                                <label style="font-size: 18px; color: #00365E; padding-top: 5px;"
                                                    class="me-2">Report List</label>
                                                <label class="badge bg-label-primary rounded-pill"
                                                    style="color: #00365E !important">{{ $reports->count() }}</label>
                                            </div>
                                            <div class="col-lg-8" style="text-align: right; color: #00365E;">
                                                <div class="row">
                                                    <div class="col-lg-2"></div>
                                                    <div class="col-lg-5">
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text" id="basic-addon-search31"><i
                                                                    class="ti ti-search"></i></span>
                                                            <input type="text" class="form-control"
                                                                value="{{ request('search') }}" name="search"
                                                                placeholder="Search..." aria-label="Search..."
                                                                aria-describedby="basic-addon-search31">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn dropdown-toggle waves-effect waves-light"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                                    style="color: #00365E;">
                                                                    Report Type 
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    @foreach ($reportTypes as $item)
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                href="{{ route('show.owner.yacht', ['id' => $yachtData->id, 'report_type' => $item->id, 'search' => request('search')]) }}">
                                                                                 {{ $item->name }}
                                                                             </a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            <button type="button" class="btn waves-effect waves-light"
                                                                onclick="resetFilters()" style="color: #00365E;">
                                                                Reset
                                                            </button>
                                                            <input type="hidden" name="report_type" id="report_type"
                                                                value="{{ request('report_type') }}">
                                                            <input type="hidden" name="yacht_id" id="yacht_id"
                                                                value="{{ request('yacht_id') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>



                                    <!-- Cards area  -->

                                    <div class="col-lg-12 mt-4 mb-4">
                                        <table class="table table-responsive">
                                            <tr style="font-size: 14px">
                                                <td><span class="me-2">Reporter</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Title</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Yacht</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Job Id</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Post date</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Report Type</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                            </tr>

                                            @if ($reports->isEmpty())
                                            <tr class="border text-center" style="color:#00365E;font-size: 14px;">
                                                <td colspan="6">
                                                    <p>No Report</p>
                                                </td>
                                            </tr>
                                            @endif
                                            @foreach ($reports as $item)
                                                <tr class="border" style="color:#00365E;font-size: 14px;">
                                                    <td>
                                                        <div class="d-flex flex-wrap">
                                                            <div class="avatar me-2">
                                                                <img src="/dashboard/assets/img/profile.jpg"
                                                                    alt="Avatar" class="rounded-circle">
                                                            </div>
                                                            <div class="ms-1">
                                                                <h6 class="mb-0"
                                                                    style="font-size: 12px;color: #00365E;">

                                                                    {{ $item->reporter->firstName }}
                                                                </h6>
                                                                <span style="color:#5E8BF7;font-size: 10px">
                                                                    {{ $item->reporter->accountType }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-wrap">
                                                            <label class="badge me-1"
                                                                style="background-color: #FF005C;">new</label>
                                                            <span style="font-size: 12px;padding-top: 4px;">
                                                                {{ $item->subject }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-wrap">
                                                            <img src="/dashboard/assets/img/yacht-black.png" class="me-1"
                                                                style="width: 20%;">
                                                            <span style="font-size: 12px;padding-top: 2px;">
                                                                {{ $item->job->yacht->yachtName }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span style="color: #5E8BF7"># {{ $item->job->id }}</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-wrap">
                                                            <i class="ti ti-calendar me-1"></i>
                                                            <span>
                                                                {{ \Carbon\Carbon::parse($item->report_date)->format('j M Y') }}</span>

                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label
                                                            class="badge
                                                    @if ($item->report_type_id == 1) bg-label-danger
                                                    @else
                                                    bg-label-primary @endif
                                                    ">
                                                            <span style="padding-top: 4px;">
                                                                {{ $item->reportType->name }}
                                                            </span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </table>
                                    </div>

                                    <!-- add Yacht -->

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
                    </div>

                    {{-- crew --}}
                    <div class="tab-pane fade " id="navs-top-crew" role="tabpanel">
                        <div class="col-lg-12 mt-5">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card"
                                        style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <div class="d-flex align-items-center">
                                            <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                style="background-color:#F2F6FA !important">
                                                <img src="/dashboard/assets/img/Group.png">
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Captains</small>
                                                <h5 class="mb-0" style="color: #00365E">
                                                    {{ $teamMembers->where('job_title', 'Captain')->count() }}</h5>
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
                                                <i class="ti ti-settings ti-sm" style="color:#00365E"></i>
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Chief engineers</small>
                                                <h5 class="mb-0" style="color: #00365E">
                                                    {{ $teamMembers->where('job_title', 'Chief Engineer')->count() }}</h5>

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
                                                <i class="ti ti-users ti-sm" style="color:#00365E"></i>
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">yacht crew</small>
                                                <h5 class="mb-0" style="color: #00365E">
                                                    {{ $teamMembers->where('job_title', 'yacht crew')->count() }}
                                                </h5>

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
                                                <small style="font-size: 11px">Last activity</small>
                                                <h5 class="mb-0" style="color: #2AD7B3">
                                                    {{ \Carbon\Carbon::parse($yachtData->updated_at)->format('H/m') }}
                                                </h5>

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
                                        <div class="col-lg-5">
                                            <i class="ti ti-users me-1 ti-md" style="color: #00365E"></i>
                                            <label style="font-size: 18px;color: #00365E;padding-top: 3px;"
                                                class="me-2">My Team</label>
                                            <label class="badge bg-label-primary rounded-pill "
                                                style="color: #00365E !important">
                                                {{ $teamMembers->count() }}
                                            </label>
                                        </div>
                                        <div class="col-lg-7" style="text-align: right;color: #00365E;">
                                            <div class="row">
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-5">
                                                    <form action="{{ route('show.owner.yacht', $id) }}" method="GET"
                                                        class="input-group input-group-merge">
                                                        <span class="input-group-text" id="basic-addon-search31"><i
                                                                class="ti ti-search"></i></span>
                                                        <input type="text" name="crew_search" class="form-control"
                                                            placeholder="Search..." value="{{ request('crew_search') }}"
                                                            aria-label="Search..."
                                                            aria-describedby="basic-addon-search31">
                                                    </form>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div class="d-flex flex-wrap" style="">
                                                        <form action="{{ route('show.owner.yacht', $id) }}"
                                                            method="GET" class="me-2">
                                                            <select name="role" class="form-select border-0"
                                                                onchange="this.form.submit()">
                                                                <option value="">All Roles  </option>
                                                                <option value="Captain"
                                                                    {{ request('role') == 'Captain' ? 'selected' : '' }}>
                                                                    Captain
                                                                </option>
                                                                <option value="Chief Engineers"
                                                                    {{ request('role') == 'Chief Engineers' ? 'selected' : '' }}>
                                                                    Chief
                                                                    Engineers</option>
                                                                <option value="Yacht Crew"
                                                                    {{ request('role') == 'Yacht Crew' ? 'selected' : '' }}>
                                                                    Yacht Crew
                                                                </option>
                                                            </select>
                                                        </form>

                                                        <form action="{{ route('show.owner.yacht', $id) }}"
                                                            method="GET">
                                                            <button type="submit" class="btn">Reset</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cards area  -->

                                    <div class="col-lg-12 mt-4 mb-3">
                                        <div class="row g-4">
                                            @foreach ($teamMembers as $item)
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-2">
                                                    <div class="card"
                                                        style="box-shadow: none !important;border: 1px solid #C6D2E7;border-radius: 0px;background: url('/dashboard/assets/img/back.png');background-size: 100% 50%;background-repeat: no-repeat;background-position: center bottom;">
                                                        <div class="card-body text-center">
                                                            <div class="mx-auto my-">
                                                                <img src="/dashboard/assets/img/profile.jpg"
                                                                    alt="Avatar Image" class="rounded-circle w-px-100">
                                                            </div>
                                                            <h4 class="card-title" style="color: #00365E">
                                                                {{ $item->firstname. ' '  .  $item->lastname }}
                                                            </h4>

                                                            <div
                                                                class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                                <a href="javascript:;" class="me-1"><span
                                                                        class="badge bg-label-primary">
                                                                        {{ $item->job_title }}
                                                                    </span></a>
                                                            </div>

                                                            <span class="pb-1"
                                                                style="color: #9CAFD1;font-size: 14px;">Joined
                                                                at
                                                                {{ \Carbon\Carbon::parse($item->created_at)->format('j M Y') }}</span>
                                                            <div class="col-lg-12 mt-2 border-bottom" style="">
                                                                <div class="row">
                                                                    <div class="col-lg-6" style="text-align: left">
                                                                        <p style="font-size: 14px;color: #00365E">
                                                                            Activity</p>
                                                                    </div>
                                                                    <div class="col-lg-6" style="text-align: right">
                                                                        <p
                                                                            style="font-size: 14px;color: #00365E;float: right;">
                                                                            {{ \Carbon\Carbon::parse($item->updated_at)->format('H/m') }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 mt-3 " style="">
                                                                <div class="row">
                                                                    <div class="col-lg-6" style="text-align: left">
                                                                        <p style="font-size: 14px;color: #00365E">
                                                                            Yacth</p>
                                                                    </div>
                                                                    <div class="col-lg-6" style="text-align: right">
                                                                        <p
                                                                            style="font-size: 14px;color: #00365E;float: right;">

                                                                            {{ $item->yacht->yachtName }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-center">

                                                                <a href="tel:{{ $item->phone }}"
                                                                    class="btn btn-label-secondary btn-icon waves-effect me-2 w-50"><i
                                                                        class="ti ti-phone ti-md"></i></a>
                                                                <a href="mailto:{{ $item->email }}"
                                                                    class="btn btn-label-secondary btn-icon waves-effect w-50"><i
                                                                        class="ti ti-mail ti-md"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-2"
                                                style="border: 1px dashed #5E8BF7;padding-top: 140px;">
                                                <center>
                                                    <label class="text-center"
                                                        style="width: 50px;height: 50px;border-radius: 100%;background: #F2F6FA;">
                                                        <i class="ti ti-user-plus ti-md" style="padding-top: 12px;"></i>
                                                    </label>
                                                    <h4 style="font-size: 20px;color: #00365E;">Add crew
                                                        member</h4>
                                                    <p style="color:#9CAFD1">Add more members to your
                                                        Yacht crew</p>
                                                </center>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- add Yacht -->
                                    @if ($teamMembers->isNotEmpty())
                                        <nav aria-label="Page navigation" style="float: right;">
                                            {{ $teamMembers->links('vendor.custom-pagination') }}
                                        </nav>
                                    @endif
                                </div>
                                <!-- Left side area end col-lg-12  -->


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="navs-top-yacht" role="tabpanel">
                        <div class="container py-4">
                            <div class="row g-4">
                                <!-- Main Content -->
                                <div class="col-lg-8">
                                    <!-- Header -->
                                    <div class="d-flex align-items-center mb-4">
                                        <svg class="me-2" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2">
                                            <path
                                                d="M3 11c0 2.09.81 4.11 2.34 5.64L11 22v-2h2v2l5.66-5.36C20.19 15.11 21 13.09 21 11c0-4.42-3.58-8-8-8s-8 3.58-8 8z" />
                                            <path d="M7 11a5 5 0 0 1 10 0" />
                                        </svg>
                                        <h1 class="h4 mb-0">Yacht details</h1>
                                    </div>
                                    <form method="POST" action="{{ route('owner.yacht.update', $yachtData->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <!-- Yacht Photo -->
                                        <div class="card mb-4" style="border: none;">
                                            <img src="{{ $yachtData->image ? asset('storage/' . $yachtData->image) : asset('images/placeholder.png') }}"
                                                alt="Yacht" class="card-img-top"
                                                style="height: 230px; object-fit: cover;">
                                            <div class="card-img-overlay d-flex justify-content-center align-items-center"
                                                style="background-color: rgba(255, 255, 255, 0.5);">
                                                <label for="yachtImage" class="btn btn-light">Add/change yacht photo <i
                                                        class="fas fa-upload"></i></label>
                                                <input type="file" name="image" id="yachtImage" class="d-none">
                                            </div>
                                            <p class="text-center text-muted" style="margin: 0;">min 1600x230 | max
                                                1920x480</p>
                                        </div>

                                        <!-- Yacht Details Form -->
                                        <div class="row g-3 mb-4">
                                            <div class="col-md-6">
                                                <label class="form-label">Yacht Name *</label>
                                                <input type="text" class="form-control" name="yachtName"
                                                    value="{{ $yachtData->yachtName }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Yacht Manufacturer *</label>
                                                <input type="text" class="form-control" name="yachtManufacturer"
                                                    value="{{ $yachtData->yachtManufacturer }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Mooring Number *</label>
                                                <input type="text" class="form-control" name="mooringNumber"
                                                    value="{{ $yachtData->mooringNumber }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Port Base</label>
                                                <input type="text" class="form-control" name="portBase"
                                                    value="{{ $yachtData->portBase }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Yacht Size (in meters) *</label>
                                                <input type="number" class="form-control" name="yachtSize"
                                                    value="{{ $yachtData->yachtSize }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Yacht Tonnage (in GT) *</label>
                                                <input type="number" class="form-control" name="yachtTonnage"
                                                    value="{{ $yachtData->yachtTonnage }}" required>
                                            </div>
                                        </div>

                                        <!-- Registration Documents -->
                                        <div class="mb-4">
                                            <div class="d-flex align-items-center mb-3">
                                                <svg class="me-2" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                                    <polyline points="14 2 14 8 20 8" />
                                                    <line x1="16" y1="13" x2="8"
                                                        y2="13" />
                                                    <line x1="16" y1="17" x2="8"
                                                        y2="17" />
                                                    <line x1="10" y1="9" x2="8"
                                                        y2="9" />
                                                </svg>
                                                <h2 class="h6 mb-0">Registration Documents</h2>
                                            </div>
                                            <p class="text-muted small mb-3">
                                                These documents are necessary to validate that you are the real owner of
                                                this vessel.
                                            </p>
                                            <div class="d-flex gap-3">
                                                <div class="document-box">
                                                    <div class="small mb-2">
                                                        Current File: {{ $yachtData->document }} <br>
                                                        <input type="file" name="document" id="documentUpload"
                                                            class="form-control">
                                                    </div>
                                                    <div class="progress-bar-mini"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                                <!-- Sidebar -->
                                <div class="col-lg-4">
                                    <!-- <div class="container mt-4"> -->
                                    <div
                                        style="width: 300px; border: 1px solid #e0e0e0; border-radius: 8px; padding: 16px;">
                                        <h6 style="color: #5a5c69; font-weight: bold; margin-bottom: 16px;">System details
                                        </h6>
                                        <div
                                            style="display: flex; justify-content: space-between; border-bottom: 1px solid #e0e0e0; padding-bottom: 8px; margin-bottom: 8px;">
                                            <span style="color: #5a5c69;">Created on:</span>
                                            <span style="color: #5a5c69;">02 Jan | 16:30h</span>
                                        </div>
                                        <div
                                            style="display: flex; justify-content: space-between; border-bottom: 1px solid #e0e0e0; padding-bottom: 8px; margin-bottom: 8px;">
                                            <span style="color: #5a5c69;">Last update</span>
                                            <span style="color: #5a5c69;">Yesterday</span>
                                        </div>
                                        <div
                                            style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #e0e0e0; padding-bottom: 8px; margin-bottom: 8px;">
                                            <span style="color: #5a5c69;">Created by:</span>
                                            <div style="display: flex; align-items: center;">
                                                <img src="{{ $owner->profile_image ? '/storage/'.$owner->profile_image : 'https://via.placeholder.com/32' }}" alt="Jackie Sparrow"
                                                    style="width: 24px; height: 24px; border-radius: 50%; margin-right: 8px;">
                                                <span
                                                    style="color: #5a5c69;">{{ $owner->firstName . ' ' . $owner->lastName }}</span>
                                            </div>
                                        </div>
                                        <div style="display: flex; align-items: center; justify-content: space-between;">
                                            <span style="color: #5a5c69;">Owner:</span>
                                            <div style="display: flex; align-items: center;">
                                                <img src="{{ $owner->profile_image ? '/storage/'.$owner->profile_image : 'https://via.placeholder.com/32' }}" alt="Roger Jackson"
                                                    style="width: 24px; height: 24px; border-radius: 50%; margin-right: 8px;">
                                                <span style="color: #5a5c69;">
                                                    {{ $owner->firstName . ' ' . $owner->lastName }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Layout Demo -->
    </div>
    <!-- / Content -->

    <!-- Footer -->

    <!-- / Footer -->

    <div class="content-backdrop fade"></div>

    <!-- Content wrapper -->
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- create job modal -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="createJob" aria-labelledby="createJob"
        style="width: 500px !important;">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i
                    class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px"
                    data-bs-dismiss="offcanvas" aria-label="Close"></i> Create Job post</h5>

        </div>
        <div class="offcanvas-body  mx-0 flex-grow-0">

            <h5 style="color: #00365E;font-size: 16px;">Select a yacht to post the job</h5>

            <div class="col-md-12 mb-4">
                <div class="input-group input-group-merge" style="border-radius: 0px !important">
                    <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important"><i
                            class="ti ti-search"></i></span>
                    <input type="text" style="border-radius: 0px !important" class="form-control"
                        placeholder="Search for yacht" aria-label="Search..." aria-describedby="basic-addon-search31">
                </div>
            </div>
            <div class="col-lg-12 mb-4" style="border: 1px solid #5E8BF7;padding: 20px;">
                <div class="row">
                    <div class="col-lg-11">
                        <h4 style="color: #00365E;font-size: 16px;">Fast and smooth</h4>
                        <div class="d-flex flex-wrap">
                            <div class="me-2" style="color:#9CAFD1;font-size: 10px">Mooring: <span
                                    style="color: #00365E;margin-left: 5px;">0023340</span></div>
                            <div style="color:#9CAFD1;font-size: 10px">Port: <span
                                    style="color: #00365E;margin-left: 5px;">Santa luzia esq, italy, 20559</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <i class="ti ti-x ti-md" style="color: #9CAFD1;margin-left: -10px;margin-top: 10px;"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <label style="color:#00365E;font-size: 16px">Job title </label>

                <div class="form-group mt-3" style="position: relative;">
                    <input type="text" class="form-control" style="border-radius:0px"
                        placeholder="What is the purpose of this job?" name="">
                    <small style="color: #9CAFD1;font-size: 14px;" class="mt-2">0 of 50 max characters.</small>
                </div>
                <label style="color:#00365E;font-size: 16px" class="mt-2">Type & Skills </label>
                <div class="form-group mt-3" style="position: relative;">
                    <input type="text" class="form-control" style="border-radius:0px"
                        placeholder="Select the type or skills for the job" name="">
                </div>
                <label style="color:#00365E;font-size: 16px" class="mt-2">Job description</label>
                <div class="form-group mt-3" style="position: relative;">
                    <textarea type="text" class="form-control" style="border-radius:0px" rows="5"
                        placeholder="Please describe the issue or present aditional details for the professional" name=""></textarea>
                </div>
                <label style="color:#00365E;font-size: 16px" class="mt-2">Delivery by</label>
                <p style="color:#9CAFD1;font-size: 16px">Please select the date which you want to have the job done
                </p>
                <div class="col-md-12 mb-4">
                    <div class="input-group input-group-merge" style="border-radius: 0px !important">
                        <span class="input-group-text" id="basic-addon-search31"
                            style="border-radius: 0px !important"><i class="ti ti-calendar"></i></span>
                        <input type="text" class="form-control flatpickr-input active" placeholder="YYYY-MM-DD"
                            id="flatpickr-date" readonly="readonly">
                        <label class="labelOwn" style="color:#5E8BF7">Deliver by</label>
                    </div>
                </div>
                <label style="color:#00365E;font-size: 16px">Do you require surveyor?</label>
                <p style="color:#9CAFD1;font-size: 16px">The job will be open for surveyors applications</p>
                <div class="col-md-12 mb-4">
                    <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="ti"
                        data-tick-icon="ti-check" data-style="btn-default" style="border-radius: 0px !important;">
                        <option data-icon="ti ti-circle-check">Yes I need a surveyor</option>
                        <option data-icon="ti ti-brand-pinterest">Pinterest</option>
                        <option data-icon="ti ti-brand-twitch">Twitch</option>
                    </select>
                </div>
                <label style="color:#00365E;font-size: 16px">Budget<span style="color: #9CAFD1;margin-left: 5px;">(labor
                        and material)</span></label>
                <div class="col-md-12 mb-4 mt-4">
                    <div class="input-group input-group-merge" style="border-radius: 0px !important">
                        <span class="input-group-text" id="basic-addon-search31"
                            style="border-radius: 0px !important">EUR</span>
                        <input type="text" class="form-control " placeholder="3400">
                        <label class="labelOwn" style="color:#5E8BF7">Max budget</label>
                    </div>
                </div>
                <label style="color:#00365E;font-size: 16px">Is your budget flexible?</label>
                <div class="col-md-12 mb-4 mt-4">
                    <select class="form-control select2" style="border-radius: 0px !important">
                        <option>Yes, my budget is flexible</option>
                    </select>
                </div>
                <label style="color:#00365E;font-size: 16px">Upload material </label>
                <p style="color:#9CAFD1;font-size: 16px">Select the images, videos (max: 1min), pdf’s or documents</p>
                <div class="col-lg-12">
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
                        <div class="col-lg-4 mb-2">
                            <img src="assets/img/rect.png" class="w-100">
                        </div>
                        <div class="col-lg-4">
                            <div class="col-lg-12"
                                style="border: 1px dashed #5E8BF7;height: 125px;text-align: center;padding: 20px;">
                                <i class="ti ti-plus ti-md mt-3" style="color:#00365E"></i>
                                <p class="mt-2" style="color:#9CAFD1;font-size: 13px">Max: 100mb</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <button type="button" class="btn mb-2 d-grid w-100"
                            style="border-radius:0px !important;background: #5E8BF7;color: #fff;">Create job
                            post</button>
                    </div>
                    <div class="col-lg-6">
                        <button type="button" class="btn  d-grid w-100" data-bs-dismiss="offcanvas"
                            style="border-radius:0px !important;background: transparent;color: #5E8BF7;border: 1px solid #C6D2E7;">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function selectReportType(reportTypeId) {
            document.getElementById('report_type').value = reportTypeId;
            document.forms[0].submit();
        }

        function selectYacht(yachtId) {
            document.getElementById('yacht_id').value = yachtId;
            document.forms[0].submit();
        }

        function resetFilters() {
            document.getElementById('report_type').value = '';
            document.getElementById('yacht_id').value = '';
            document.forms[0].submit();
        }
    </script>
@endsection
