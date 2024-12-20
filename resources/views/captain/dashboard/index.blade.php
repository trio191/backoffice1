@extends('captain.layout.layout')
@section('content')
    @include('captain.components.add-job')


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

    <div class="content-wrapper">
        <!-- Content -->
        <div class="layout-demo-wrapper"
            style="background-image: url('/dashboard/assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px; position: relative;">
            <div class="overlay"></div>
            <!-- Overlay -->
            <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
                <!-- Text container -->
                <div class="row">
                    <div class="col-lg-7 text-white">
                        <h3 class="text-white">Welcome back, {{ Auth::user()->firstName . ' ' . Auth::user()->lastName }}
                        </h3>
                        <p style="margin-top: -20px;">Nice to see you again <span
                                style="background-color: white;color: #00365d;padding: 2px;">
                                <strong>
                                    <i class="ti ti-link"
                                        style="font-size: 16px;margin-top: -3px;font-weight: 700;"></i>Referal link
                                </strong>
                                <span style="color: #9cafd1;">(worldyachtrefit/4325425ptuser)</span>
                            </span>
                        </p>
                    </div>
                    <div class="col-lg-5" style="text-align: right;">
                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd"
                            aria-controls="offcanvasEnd" class="btn btn-white waves-effect waves-light"
                            style="border-radius: 0px !important;color: #00365d;">
                            <span class="ti-xs ti ti-user-plus me-1"></span>Add crew </button>
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

            <div class="col-lg-12 mt-5">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card"
                            style="border: 1px solid #5E8BF7;height: 90px;box-shadow: 0px 16px 30px 0px #4680FF29;background: url('/dashboard/assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                    style="background-color:#F2F6FA !important">
                                    <i class="ti ti-briefcase ti-sm" style="color:#5E8BF7"></i>
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Open Jobs</small>
                                    <h5 class="mb-0" style="color: #00365E">
                                        {{ $jobs->count() }}
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
                                    <i class="ti ti-coin ti-sm" style="color:#00365E"></i>
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Total yacht maintenance</small>
                                    <h5 class="mb-0" style="color: #00365E">{{ $jobs->sum('budget') }}</h5>
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
                                    <small style="font-size: 11px">Open incidents</small>
                                    <h5 class="mb-0" style="color: #FF005C">
                                        {{ $reports->where('report_type_id', 1)->count() }}</h5>
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
                                    <i class="ti ti-circle-check ti-sm" style="color:#2AD7B3"></i>
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Active Jobs</small>
                                    <h5 class="mb-0" style="color: #2AD7B3">
                                        {{ $jobs->where('status', 'approved')->count() }}
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
            <div class="col-lg-12 mt-5">
                <div class="row">
                    <!-- Left side area col-lg-8 -->
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-8">
                                <i class="ti ti-clipboard-check ti-md" style="margin-top:-7px;color: #00365E;"></i>
                                <label style="font-size: 18px;color: #00365E;padding-top: 3px;">Recent Jobs</label>
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
                                                    href="{{ route('captain-dashboard.index', ['status' => 'approved']) }}">Approved</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('captain-dashboard.index', ['status' => 'waiting']) }}">Waiting</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('captain-dashboard.index', ['status' => 'hired']) }}">Hired</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('captain-dashboard.index') }}">
                                        <button class="btn" style="color: #00365E;">View All</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @if ($jobs->contains('status', 'waiting'))
                            <div class="alert alert-danger d-flex align-items-center" style="border-radius:0px"
                                role="alert">
                                <span class=" text-danger me-2">
                                    <i class="fa fa-triangle-exclamation ti-xs"></i>
                                </span> There are some jobs waiting for aproval
                            </div>
                        @endif
                        <div class="row">
                            @if ($jobs->isEmpty())
                                <div class="col-lg-12 mb-3 text-center" style="border: 1px solid #C6D2E7;padding: 20px">
                                    Sorry no Job Available
                                </div>
                            @else
                                <!-- job Cards area  -->
                                {{-- Active job card --}}
                                @foreach ($jobs as $item)
                                    @if ($item->status == 'approved')
                                        <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;padding: 20px">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <img src="{{ asset($item->yacht->image) }}" style="width: 100%">
                                                </div>
                                                <div class="col-lg-9" style="color:#00365E">
                                                    <div class="row">
                                                        <div style="display: flex">
                                                            <span class="badge me-2"
                                                                style="background: #5E8BF7;height: 30px;">
                                                                <i class="ti ti-circle-check me-1 ti-xs"></i>Active </span>
                                                            <span class="me-2 vertical-line"
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#{{ $item->id }}</span>
                                                            <span class="me-2 vertical-line"
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                                                {{ \Carbon\Carbon::parse($item->created_at)->format('j M Y') }}
                                                            </span>
                                                            <span class="me-2 vertical-line"
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                                                <img src="/dashboard/assets/img/yacht.png"
                                                                    class="me-1" />{{ $item->yacht->yachtName }} </span>
                                                            <span class="me-2 vertical-line"
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                                                @if ($item->require_surveyor)
                                                                    <img src="dashboard/assets/img/check.png"
                                                                        class="me-1" />Surveyor
                                                            </span>
                                    @endif
                        </div>
                    </div>
                    <a href="{{ route('captain-jobs.show', $item->id) }}">
                        <p style="" class="mt-1 text-dark">
                            {{ $item->job_title }}
                        </p>
                        <p class=" text-dark" style="margin-top:-15px;font-size:12px;">{{ $item->job_description }}</p>
                    </a>
                </div>
                <div class="col-lg-1" style="text-align: right;">
                    <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-7">
                    <div class="d-flex flex-wrap" style="margin-top: -7px">
                        <div class="avatar me-3">
                            <img src="{{ asset($item->user->profile_image) }}" alt="Avatar" class="rounded-circle">
                        </div>
                        <div>
                            <p class=" mt-2" style="font-size: 14px;color: #00365E;">
                                {{ $item->user->firstName }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-1"
                style="border-top: 1px solid #C6D2E7;margin-left: -20px;margin-right: -20px;padding: 15px;padding-bottom: 0px !important;color: #00365E;">
                <div class="col-lg-6 " style="border-right: 1px solid #9CAFD1;">
                    <div class="d-flex flex-wrap ">
                        <i class="ti ti-coin me-2"></i>
                        <span style="font-size: 14px;" class="me-2">Budget range:</span>
                        <span style="font-size: 14px;" class="me-2">up to {{ $item->budget }}€</span>
                        <span
                            class="badge 
                                                @if ($item->budget_flexible == 'yes') bg-label-success
                                                @else
                                                      bg-label-secondary @endif
                                                ">Flexible</span>
                    </div>
                </div>
                <div class="col-lg-5" style="color:#1CBDA0">
                    <div class="d-flex flex-wrap">
                        <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                        <span style="font-size: 14px;" class="me-2">Applications:</span>
                        <span style="font-size: 14px;" class="me-2">{{ $item->applications->count() }}</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Waiting  --}}
    @elseif ($item->status == 'waiting')
        <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;padding: 20px">
            <div class="row">
                <div class="col-lg-2">
                    <img src=" {{ asset($item->yacht->image) }}" style="width: 100%">
                </div>
                <div class="col-lg-9" style="color:#00365E">
                    <div class="row">
                        <div style="display: flex">
                            <span class="badge bg-label-primary me-2" style="height: 30px;">
                                <i class="ti ti-eye me-1 ti-xs"></i>Waiting </span>
                            <span class="me-2 vertical-line"
                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#{{ $item->id }}</span>
                            <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                {{ \Carbon\Carbon::parse($item->created_at)->format('j M Y') }}
                            </span>
                            <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                <img src="/dashboard/assets/img/yacht.png" class="me-1" />{{ $item->yacht->yachtName }}
                            </span>
                            <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                @if ($item->require_surveyor)
                                    <img src="dashboard/assets/img/check.png" class="me-1" />Surveyor
                            </span>
                            @endif
                        </div>
                    </div>
                    <p style="" class="mt-1">{{ $item->job_title }}</p>
                    <p style="margin-top:-15px;font-size:12px;">{{ $item->job_description }}</p>
                </div>
                <div class="col-lg-1" style="text-align: right;">
                    <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-7">
                    <div class="d-flex flex-wrap" style="margin-top: -7px">
                        <div class="avatar me-3">
                            <img src="{{ asset($item->user->profile_image) }}" alt="Avatar" class="rounded-circle">
                        </div>
                        <div>
                            <p class=" mt-2" style="font-size: 14px;color: #00365E;">
                                {{ $item->user->firstName . ' ' . $item->user->lastName }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 " style="text-align: right">
                    <button class="btn btn-sm" onclick="approveJob({{ $item->id }})"
                        style="background-color:#5E8BF7;color: white;border-radius: 0px;">Aprove</button>
                </div>
            </div>
            <div class="row mt-1"
                style="border-top: 1px solid #C6D2E7;margin-left: -20px;margin-right: -20px;padding: 15px;padding-bottom: 0px !important;color: #00365E;">
                <div class="col-lg-6 " style="border-right: 1px solid #9CAFD1;">
                    <div class="d-flex flex-wrap ">
                        <i class="ti ti-coin me-2"></i>
                        <span style="font-size: 14px;" class="me-2">Budget range:</span>
                        <span style="font-size: 14px;" class="me-2">up to {{ $item->budget }}€</span>
                        <span
                            class="badge 
                                                    @if ($item->budget_flexible == 'yes') bg-label-success
                                                    @else
                                                        bg-label-secondary @endif
                                                    ">Flexible
                        </span>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-wrap">
                        <i class="ti ti-calendar me-2"></i>
                        <span style="font-size: 14px;" class="me-2">Deliver by:</span>
                        <span style="font-size: 14px;" class="me-2"> {{ $item->delivery_date->format('j M Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($item->status == 'hired')
        {{-- hired job  --}}
        <!-- new added design -->
        <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;padding: 20px">
            <div class="row">
                <div class="col-lg-2">
                    <img src="{{ asset($item->yacht->image) }}" style="width: 100%">
                </div>
                <div class="col-lg-9" style="color:#00365E">
                    <div class="row">
                        <div style="display: flex">
                            <span class="badge bg-label-success me-2" style="height: 30px;">
                                <i class="ti ti-circle-check me-1 ti-xs"></i>Hired </span>
                            <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#
                                {{ $item->id }}
                            </span>
                            <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">

                                {{ \Carbon\Carbon::parse($item->created_at)->format('j M Y') }}


                            </span>
                            <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                <img src="/dashboard/assets/img/yacht.png"
                                    class="me-1" />{{ $item->yacht->yachtName }}</span>
                            <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                @if ($item->require_surveyor)
                                    <img src="dashboard/assets/img/check.png" class="me-1" />Surveyor
                            </span>
                            @endif
                        </div>
                    </div>
                    <p style="" class="mt-1">{{ $item->job_title }}</p>
                    <p style="margin-top:-15px;font-size:12px;">{{ $item->job_title }}</p>
                </div>
                <div class="col-lg-1" style="text-align: right;">
                    <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-7">
                    <div class="d-flex flex-wrap" style="margin-top: -7px">
                        <div class="avatar me-3">
                            <img src="{{ asset($item->user->profile_image) }}" alt="Avatar" class="rounded-circle">
                        </div>
                        <div>
                            <p class=" mt-2" style="font-size: 14px;color: #00365E;">
                                {{ $item->user->firstName }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-1"
                style="border-top: 1px solid #C6D2E7;margin-left: -20px;margin-right: -20px;padding: 15px;padding-bottom: 0px !important;color: #00365E;">
                <div class="col-lg-3 " style="border-right: 1px solid #9CAFD1;">
                    <div class="d-flex flex-wrap ">
                        <i class="ti ti-coin me-2"></i>
                        <span style="font-size: 14px;" class="me-2">Budget
                            accepted:</span>
                        <span style="font-size: 14px;" class="me-2">
                            {{ $item->budget }}
                        </span>
                    </div>
                </div>
                <div class="col-lg-3" style="border-right: 1px solid #9CAFD1;">
                    <div class="d-flex flex-wrap">
                        <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                        <span style="font-size: 14px;" class="me-2">Surveryos:</span>
                        <span style="font-size: 14px;" class="me-2">05</span>
                    </div>
                </div>
                <div class="col-lg-3" style=" border-right: 1px solid #9CAFD1;">
                    <div class="d-flex flex-wrap">
                        <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                        <span style="font-size: 14px;" class="me-2">Progress:</span>
                        <span style="font-size: 14px;"
                            class="me-2">{{ $item->reports->where('reportType.name', 'Progress')->count() }}</span>
                    </div>
                </div>
                <div class="col-lg-3" style=" ">
                    <div class="d-flex flex-wrap">
                        <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                        <span style="font-size: 14px;" class="me-2">Incidents:</span>
                        <span style="font-size: 14px;"
                            class="me-2 text-danger">{{ $item->reports->where('reportType.name', 'Incident')->count() }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endif
    </div>
    </div>
    <!-- Left side area end col-lg-8  -->
    <!-- Right side area col-lg-4 -->
    <div class="col-lg-4">
        <!-- first box   -->
        <div class="col-lg-12 mb-3"
            style="border: 1px solid #C6D2E7;width: 100%;padding: 16px 24px 16px 24px;gap: 24px;border: 1px 0px 0px 0px;opacity: 0px;color: #00365E;">
            <div class="row mb-3">
                <div class="col-lg-6">
                    <p>Recent Reports</p>
                </div>
                <div class="col-lg-6" style="text-align: right;">
                    <div class="btn-group">
                        <label type="button" class=" waves-effect waves-light" aria-expanded="false"
                            style="font-size: 14px">
                            <a href="{{ route('captain-reports.index') }}">View All</a>
                        </label>

                    </div>
                </div>
            </div>


            @if ($reports->isEmpty())
                <div class="row mb-3">
                    <div class="col-lg-12 text-center">
                        <p style="font-size: 14px">No Report </p>
                    </div>

                </div>
            @else
                @foreach ($reports->take(4) as $report)
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <p style="font-size: 14px">
                                {{ $report->reporter->firstName }}
                            </p>
                            <p style="font-size: 13px;color: #9CAFD1;margin-top: -10px;font-weight: 400;">
                                <img src="/dashboard/assets/img/yacht.png" class="me-1" />
                                {{ $report->job->yacht->yachtName }}
                            </p>
                        </div>
                        <div class="col-lg-6" style="text-align: right;">
                            <p style="font-size: 13px;color: #9CAFD1;font-weight: 400;">
                                {{ \Carbon\Carbon::parse($report->created_at)->format('Y-m-d | H:i\h') }}
                            </p>
                            <span
                                style="padding: 4px 8px 4px 8px;border-radius: 4px; background: #FF005C0D;color: #FF005C;font-size: 13px; font-weight: 400;vertical-align: top; ">
                                {{ $report->reportType->name }}
                            </span>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>


        <!-- first box end  -->
        <!-- second box -->
        <div class="col-lg-12"
            style="border: 1px solid #C6D2E7;width: 100%; padding: 16px 24px 16px 24px;gap: 24px;border: 1px 0px 0px 0px;opacity: 0px;color: #00365E;">
            <div class="row mb-3">
                <div class="col-lg-6">
                    <p>My crew</p>
                </div>
                <div class="col-lg-6" style="text-align: right;">
                    <div class="btn-group">
                        <label type="button" class="waves-effect waves-light" aria-expanded="false"
                            style="font-size: 14px">
                            <a href="{{ route('captain-team.index') }}"> View All</a>
                        </label>
                    </div>
                </div>
            </div>

            @if ($teams->isEmpty())
                <div class="row mb-3">
                    <div class="col-lg-12 text-center p-4">
                        <p style="font-size: 14px">No Crew </p>
                    </div>

                </div>
            @else
                @foreach ($teams->take(3) as $item)
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            <div class="d-flex flex-wrap">
                                <img src="/dashboard/assets/img/profile.jpg" style="width: 25%" alt=""
                                    class="h-auto rounded-circle">
                                <div style="margin-left: 10px">
                                    <h6 class="mb-0 text-nowrap">{{ $item->firstname . ' ' . $item->lastname }}</h6>
                                    <small style="color:#5E8BF7">{{ $item->job_title }}
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" style="text-align: right">
                            <div class="d-flex justify-content-between">
                                <span class="badge bg-label-primary p-2 rounded me-1">
                                    <i class="ti ti-phone ti-sm"></i>
                                </span>
                                <span class="badge bg-label-primary p-2 rounded ">
                                    <i class="ti ti-mail ti-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <!-- Third Box -->
        {{-- <div class="col-lg-12 mt-3"
            style="border: 1px solid #C6D2E7;width: 100%; padding: 16px 24px 16px 24px;gap: 24px;border: 1px 0px 0px 0px;opacity: 0px;color: #00365E;">
            <div class="row mb-3">
                <div class="col-lg-6">
                    <p>Recent activity</p>
                </div>
                <div class="col-lg-6" style="text-align: right;">
                    <div class="btn-group">
                        <label type="button" class="waves-effect waves-light" data-bs-toggle="dropdown"
                            aria-expanded="false" style="font-size: 14px"> View All </label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap">
                        <img src="assets//dashboard/assets/img/avatars/1.png" style="width: 50px;height: 50px !important;"
                            alt="" class="h-auto rounded-circle">
                        <div style="margin-left: 10px;">
                            <h6 class="mb-0 text-nowrap">Tim Cook <small class="text-muted">14-02-2024 |
                                    10:17h</small>
                            </h6>
                            <small style="color:#00365E">Created a posted a new job offer </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap">
                        <img src="assets//dashboard/assets/img/avatars/1.png" style="width: 50px;height: 50px !important;"
                            alt="" class="h-auto rounded-circle">
                        <div style="margin-left: 10px;">
                            <h6 class="mb-0 text-nowrap" style="font-size: 14px;color: #5E8BF7;">Jack
                                Sparrow <small class="text-muted">14-02-2024 | 10:17h</small>
                            </h6>
                            <small style="color:#00365E">Created a posted a new job offer </small>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Right side area end col-lg-4 -->
    <!-- section devider -->
    <div class="col-lg-12 mt-5 mb-5">
        <div style="border-top: 1px solid  #C6D2E7"></div>
    </div>
    <!-- section devider end-->
    <!-- slider section -->
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex flex-wrap">
                    <img src="/dashboard/assets/img/yacht-black.png" class="me-2">
                    <div style="margin-left: 10px;" class="d-flex">
                        <h6 class="mb-0 text-nowrap me-2" style="margin-top: 5px;color: #00365E;">My
                            Yachts </h6>
                        <div
                            style="width: 34px; height: 28px; padding: 2px 12px 2px 12px; gap: 24px; border-radius: 500px; opacity: 0px; background: #F2F6FA; margin-top: 4px; ">
                            {{ $yachts->count() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="text-align: right">
                <a href="{{ route('captain-yachts.index') }}">
                    <p style="color: #00365E;">View All</p>
                </a>
            </div>
        </div>
        <!-- slider row -->
        <div class="row mt-2">
            @foreach ($yachts as $yacht)
                @if ($yachts->isEmpty())
                    <div class="col-lg-12">
                        <div class="card h-100" style="border: 1px solid #C6D2E7;border-radius: 0px !important">
                            <div class="card-body text-center" style="background: transparent !important;">
                                <h5 class="card-title" style="color: #00365E;">No Yacht</h5>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-4">
                        <div class="card h-100" style="border: 1px solid #C6D2E7;border-radius: 0px !important">
                            <img class="card-img-top" src="{{ asset($yacht->image) }}" alt="Card image cap"
                                style="border-radius:0px !important; height:200px">
                            <div class="card-body" style="background: transparent !important;">
                                <h5 class="card-title" style="color: #00365E;">{{ $yacht->yachtName }}</h5>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <p style="font-size: 10px !important;color:#9CAFD1">Mooring:<span
                                                    style="color:#00365E"> {{ $yacht->mooringNumber }}</span>
                                            </p>
                                        </div>
                                        <div class="col-lg-3">
                                            <p style="font-size: 10px !important;color:#9CAFD1">Size: <span
                                                    style="color:#00365E"> {{ $yacht->yachtSize }}</span>
                                            </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="font-size: 10px !important;color:#9CAFD1">Tonnage: <span
                                                    style="color:#00365E"> {{ $yacht->yachtTonnage }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6 text-center" style="border-right: 1px solid #C6D2E7;">
                                            <i class="ti ti-briefcase "
                                                style="font-size: 34px !important;color: #00365E;"></i>
                                            <p style="font-size: 34px;color: #00365E;">

                                                {{ $yacht->jobPost->count() }}
                                            </p>
                                            <p style="font-size: 14px;color: #00365E;margin-top: -20px;">Open jobs
                                            </p>
                                        </div>
                                        <div class="col-lg-6 text-center">
                                            <i class="ti ti-circle-check "
                                                style="font-size: 34px !important;color: #2AD7B3;"></i>
                                            <p style="font-size: 34px;color: #2AD7B3;">
                                                {{ $yacht->jobPost->where('status', 'approved')->count() }}
                                            </p>
                                            <p style="font-size: 14px;color: #2AD7B3;margin-top: -20px;">Active
                                                jobs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4 " style="border-bottom: 1px solid #C6D2E7">
                                    <div class="row ">
                                        <div class="col-lg-7">
                                            <div class="d-flex flex-wrap">
                                                <i style="color: #00365E;" class="ti ti-coin me-1"></i>
                                                <p style="font-size: 14px;color: #00365E;">Budget invested</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-5" style="text-align: right;">
                                            <p style="font-size:15px;color: #00365E;">
                                                {{ $yacht->jobPost->where('status', 'hired')->sum('budget') }}
                                                €</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3 " style="border-bottom: 1px solid #C6D2E7">
                                    <div class="row ">
                                        <div class="col-lg-7">
                                            <div class="d-flex flex-wrap">
                                                <i style="color: #00365E;" class="ti ti-file-export me-1"></i>
                                                <p style="font-size: 14px;color: #00365E;">Applications</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-5" style="text-align: right;">
                                            <p style="font-size:15px;color: #00365E;">
                                                {{-- {{$yacht->jobPost->applications->count()}} --}}
                                                {{ $yacht->jobPost->sum(fn($jobPost) => $jobPost->applications->count()) }}


                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3 " style="border-bottom: 1px solid #C6D2E7">
                                    <div class="row ">
                                        <div class="col-lg-7">
                                            <div class="d-flex flex-wrap">
                                                <i style="color: #FF005C;padding-top: 3px;"
                                                    class="fa fa-triangle-exclamation me-1"></i>
                                                <p style="font-size: 14px;color: #FF005C;">Incidents</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-5" style="text-align: right;">
                                            <p style="font-size:15px;color: #FF005C;">
                                                {{ $yacht->jobPost->flatMap->reports->where('report_type_id', 1)->count() }}

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3 ">
                                    <div class="row ">
                                        <div class="col-lg-7">
                                            <div class="d-flex flex-wrap">
                                                <i style="color: #9CAFD1;padding-top: 3px;"
                                                    class="fa fa-circle-user me-1"></i>
                                                <p style="font-size: 14px;color: #9CAFD1;">Yacht Crew</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-5" style="text-align: right;">
                                            <a href="{{ route('captain-team.index') }}">
                                                <p style="font-size:14px;color: #9CAFD1;">View All</p>
                                            </a>

                                        </div>
                                    </div>

                                    @if ($yacht->teamMembers->isEmpty())
                                        <div class="row mb-3">
                                            <div class="col-lg-12 text-center p-4">
                                                <p>Sorry no Crew </p>
                                            </div>
                                        </div>
                                    @else
                                        @foreach ($yacht->teamMembers as $member)
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <div class="d-flex flex-wrap">
                                                        <img src="/dashboard/assets/img/profile.jpg" style="width: 25%"
                                                            alt="" class="h-auto rounded-circle">
                                                        <div style="margin-left: 10px">
                                                            <h6 class="mb-0 text-nowrap">
                                                                {{ $member->firstname }}
                                                            </h6>
                                                            <small style="color:#5E8BF7">
                                                                {{ $member->job_title }}
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" style="text-align: right">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="tel:{{ $member->phone }}"
                                                            class="badge bg-label-primary p-2 rounded me-1">
                                                            <i class="ti ti-phone ti-sm"></i>
                                                        </a>
                                                        <a href="mailto:{{ $member->email }}"
                                                            class="badge bg-label-primary p-2 rounded ">
                                                            <i class="ti ti-mail ti-sm"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
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
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel"
        style="width: 500px !important;">

        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i
                    class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas"
                    aria-label="Close"></i> Add crew member</h5>

        </div>
        <div class="offcanvas-body  mx-0 flex-grow-0">
            <form id="captainCrewForm">
                <h5 style="color: #00365E;font-size: 16px;">Invite user as:</h5>
                <p style="color:#9CAFD1;font-size: 14px;margin-top: -10px;">Please select the account type for this user
                </p>
                <div class="col-md-12 mb-4">
                    <select name="user_type" class="form-control selectpicker w-100 show-tick" id="selectpickerIcons"
                        data-icon-base="ti" data-tick-icon="ti-check" data-style="btn-default"
                        style="border-radius: 0px !important;">
                        <option data-icon="ti ti-brand-instagram">Captain</option>
                        <option data-icon="ti ti-brand-pinterest">Chief engineers
                        </option>
                        <option data-icon="ti ti-brand-twitch">yacht crew
                        </option>
                    </select>
                </div>
                <h5 style="color: #00365E;font-size: 16px;">Add to yacths:</h5>
                <p style="color:#9CAFD1;font-size: 14px;margin-top: -10px;">A captain or engineer can be added to multiple
                    yachts</p>
                <div class="col-md-12 mb-4">
                    <div class="input-group input-group-merge" style="border-radius: 0px !important">
                        <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important"><i
                                class="ti ti-search"></i></span>

                        <select name="yacht_id" required class="form-control select2" id="yacht_id">
                            <option readonly selected>Search for yacht</option>
                            @foreach ($yachts as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->yachtName }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                </div>
                {{-- <div class="col-lg-12 mb-4" style="border: 1px solid #5E8BF7;padding: 20px;">
                <div class="row">
                    <div class="col-lg-11">
                        <h4 style="color: #00365E;font-size: 16px;">Fast and smooth</h4>
                        <div class="d-flex flex-wrap">
                            <div class="me-2" style="color:#9CAFD1;font-size: 10px">Mooring: <span
                                    style="color: #00365E;margin-left: 5px;">0023340</span></div>
                            <div style="color:#9CAFD1;font-size: 10px">Port: <span
                                    style="color: #00365E;margin-left: 5px;">Santa luzia esq, italy, 20559</span></div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <i class="ti ti-x ti-md" style="color: #9CAFD1;margin-left: -10px;margin-top: 10px;"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4" style="border: 1px solid #5E8BF7;padding: 20px;">
                <div class="row">
                    <div class="col-lg-11">
                        <h4 style="color: #00365E;font-size: 16px;">Elizabeth III</h4>
                        <div class="d-flex flex-wrap">
                            <div class="me-2" style="color:#9CAFD1;font-size: 10px">Mooring: <span
                                    style="color: #00365E;margin-left: 5px;">0023340</span></div>
                            <div style="color:#9CAFD1;font-size: 10px">Port: <span
                                    style="color: #00365E;margin-left: 5px;">Santa luzia esq, italy, 20559</span></div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <i class="ti ti-x ti-md" style="color: #9CAFD1;margin-left: -10px;margin-top: 10px;"></i>
                    </div>
                </div>
            </div> --}}
                <div class="col-md-12 mb-4">
                    <label style="color:#00365E;font-size: 16px">Personal details</label>
                    <div class="form-group mt-3" style="position: relative;">
                        <input required type="text" class="form-control" name="firstname" style="border-radius:0px"
                            placeholder="Boat JBL" name="">
                        <label class="labelOwn" style="color:#5E8BF7">First name*</label>
                    </div>
                    <div class="form-group mt-3" style="position: relative;">
                        <input required name="lastname" type="text" class="form-control" style="border-radius:0px"
                            placeholder="Last name*" name="">
                    </div>
                    <div class="form-group mt-3" style="position: relative;">
                        <input required type="email" class="form-control" name="email" style="border-radius:0px"
                            placeholder="Email*" name="">
                    </div>
                    <div class="form-group mt-3" style="position: relative;">
                        <input required type="tel" name="phone" class="form-control" style="border-radius:0px"
                            placeholder="Phone*" name="">
                    </div>
                    <div class="form-group mt-3 mb-3" style="position: relative;">
                        <input required type="text" name="job_title" class="form-control" style="border-radius:0px"
                            placeholder="Job title" name="">
                    </div>
                    <label style="color:#00365E;font-size: 16px">Invitation message</label>
                    <div class="form-group mt-3" style="position: relative;">
                        <textarea type="text" class="form-control" name="message" style="border-radius:0px"
                            placeholder="Leave a message for the user" name=""></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <button id="captainsubmitTeamMember" type="submit" class="btn mb-2 d-grid w-100"
                                style="border-radius:0px !important;background: #5E8BF7;color: #fff;">Send
                                invitation</button>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn  d-grid w-100" data-bs-dismiss="offcanvas" type="reset"
                                style="border-radius:0px !important;background: transparent;color: #5E8BF7;border: 1px solid #C6D2E7;">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#captainsubmitTeamMember').on('click', function(e) {
                e.preventDefault(); // Prevent default form submission


                // Collect form data
                var formData = {
                    user_type: $('select[name="user_type"]').val(),
                    yacht_id: $('#yacht_id').val(),
                    firstname: $('input[name="firstname"]').val(),
                    lastname: $('input[name="lastname"]').val(),
                    email: $('input[name="email"]').val(),
                    phone: $('input[name="phone"]').val(),
                    job_title: $('input[name="job_title"]').val(),
                    message: $('textarea[name="message"]').val(),
                    _token: '{{ csrf_token() }}' // Laravel CSRF token for security
                };


                // AJAX request
                $.ajax({
                    url: '{{ route('captain-team.store') }}', // This uses the store method of OwnerMyTeamController
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Handle success response
                        alert('Crew member added successfully!');
                        // location.reload(); // Correct way to reload the page

                        // Reset form fields
                        $('#captainCrewForm')[0].reset(); // Reset form fields
                        $('#selectpickerIcons').selectpicker('refresh'); // Refresh selectpicker
                        $('#offcanvasEnd').modal('hide'); // Close the modal
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText); // Log the detailed error for debugging
                        alert('Error: Could not add crew member. Please try again.');
                    }
                });
            });
        });
    </script>




    <script>
        function approveJob(jobId) {
            // Generate the correct URL for the route, passing jobId
            const url = `{{ route('captain-job.approve', ['id' => ':id']) }}`.replace(':id', jobId);

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        status: 'approved'
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Job status updated to approved.');

                    } else {
                        alert('Failed to update job status.');
                    }
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
@endsection
