@extends('owner.layout.master')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
    @include('owner.components.add-job')
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
                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#teamoffcanvas"
                            aria-controls="teamoffcanvas" class="btn btn-white waves-effect waves-light"
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
                                    <h5 class="mb-0" style="color: #00365E">0 €</h5>
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
                                    {{-- <img src="{{ asset('dashboard/assets/img/icon.png') }}" style="width: 20px"> --}}
                                    <i class="fa fa-triangle-exclamation text-danger fa-2x"></i>
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Open incidents</small>
                                    <h5 class="mb-0" style="color: #FF005C"> {{ $incidentCount }}</h5>
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
                                        {{ $jobs->where('status', '!==', 'hired')->count() }}
                                        <span class="badge bg-label-secondary badge-sm"
                                            style="width: 60px;height: 20px;font-size: 10px;color: #00365E !important;">
                                            {{ $jobs->where('status', '!=', 'hired')->sum('budget') }}
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
                                                    href="{{ route('owner.dashboard', ['status' => 'approved']) }}">Approved</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('owner.dashboard', ['status' => 'waiting']) }}">Waiting</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('owner.dashboard', ['status' => 'hired']) }}">Hired</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('owner/job') }}">
                                        <button class="btn" style="color: #00365E;">View All</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        @if ($jobs->isEmpty())
                            <div class="col-lg-12 mb-3 text-center" style="border: 1px solid #C6D2E7;padding: 20px">
                                <span class=" text-dark text-center me-2">

                                </span> No Job Avalible
                            </div>
                        @endif
                        @if ($jobs->contains('status', 'waiting'))
                            <div class="alert alert-danger d-flex align-items-center" style="border-radius:0px"
                                role="alert">
                                <span class=" text-danger me-2">
                                    <i class="fa fa-triangle-exclamation ti-xs"></i>
                                </span> There are some jobs waiting for aproval
                            </div>
                        @endif

                        <!-- Cards area  -->
                        @foreach ($jobs->take(3) as $job)
                            <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;padding: 20px">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="{{ asset($job->images) }}" style="width: 96px;height:96px">
                                    </div>
                                    <div class="col-lg-9" style="color:#00365E">
                                        <a href="{{ route('owner.job.details', $job->id) }}">
                                            <div class="row">
                                                <div style="display: flex">
                                                    <span
                                                        class="badge me-2  text-capitalize
                                                    
                                                    @if ($job->status == 'approved') bg-primary
                                                        @elseif ($job->status == 'hired')
                                                            bg-success
                                                       @else
                                                           bg-label-primary @endif"
                                                        style=" height: 30px;">

                                                        <i
                                                            class="ti
                                                        @if ($job->status == 'approved') ti-circle-check 
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
                                                            <img src="/dashboard/assets/img/check.png" class="me-1" />
                                                            Surveyor
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                            <p style="" class="mt-1 text-dark">{{ $job->job_title }}</p>
                                            <p class=" text-dark" style="margin-top:-15px;font-size:12px;">

                                                {{ Str::words($job->job_description, 15, '...') }}
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
                                                <img src="{{ asset($job->user->profile_image ? $job->user->profile_image : 'dashboard/assets/img/profile.jpg') }}"
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
                                <div class="row mt-1"
                                    style="border-top: 1px solid #C6D2E7;margin-left: -20px;margin-right: -20px;padding: 15px;padding-bottom: 0px !important;color: #00365E;">
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

                                        @if ($job->status == 'waiting')
                                            <div class="col-lg-5">
                                                <div class="d-flex flex-wrap">
                                                    <i class="fa fa-file-calender me-2" style="padding-top: 3px;"></i>
                                                    <span style="font-size: 14px;" class="me-2">Delivery Date:</span>
                                                    <span style="font-size: 14px;"
                                                        class="me-2">{{ $job->delivery_date?->format('j M Y') ?? 'N/A' }}</span>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($job->status == 'approved')
                                            <div class="col-lg-5" style="color:#1CBDA0">
                                                <div class="d-flex flex-wrap">
                                                    <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                                                    <span style="font-size: 14px;" class="me-2">Applications:</span>
                                                    <span style="font-size: 14px;"
                                                        class="me-2">{{ $job->applications->count() }}</span>
                                                </div>
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-lg-3 " style="border-right: 1px solid #9CAFD1;">
                                            <div class="d-flex flex-wrap ">
                                                <i class="ti ti-coin me-2"></i>
                                                <span style="font-size: 14px;" class="me-2">Budget Accepted</span>
                                                <span style="font-size: 14px;" class="me-2">
                                                    {{ $job->budget }}</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" style="border-right: 1px solid #9CAFD1;">
                                            <div class="d-flex flex-wrap">
                                                <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                                                <span style="font-size: 14px;" class="me-2">Surveryors</span> <br>
                                            </div>
                                            <div>
                                                <span style="font-size: 14px;"
                                                    class="me-2">{{ $job->reports->where('ReportType.name', 'Surveryor')->count() }}</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" style="border-right: 1px solid #9CAFD1;">
                                            <div class="d-flex flex-wrap">
                                                <i class=" tf-icons ti ti-file-analytics me-2"
                                                    style="padding-top: 3px;"></i>
                                                <span style="font-size: 14px;" class="me-2">Progress</span>
                                            </div>
                                            <div>
                                                <span style="font-size: 14px;"
                                                    class="me-2">{{ $job->reports->where('ReportType.name', 'Progress')->count() }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 text-danger">
                                            <div class="d-flex flex-wrap">
                                                <i class="fa fa-triangle-exclamation  me-2" style="padding-top: 3px;"></i>
                                                <span style="font-size: 14px;" class="me-2">Incident</span>
                                            </div>
                                            <div>
                                                <span style="font-size: 14px;" class="me-2">
                                                    {{ $job->reports->where('report_type_id', 1)->sum('report_type_id') }}
                                                </span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Left side area end col-lg-8  -->
                    <!-- Right side area col-lg-4 -->
                    <div class="col-lg-4">
                        <!-- first box   -->
                        <div class="col-lg-12 mb-3"
                            style="border: 1px solid #C6D2E7;width: 100%;
                     
                      padding: 16px 24px 16px 24px;
                      gap: 24px;
                      border: 1px 0px 0px 0px;
                      opacity: 0px;
                      color: #00365E;
                      ">
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <p>Recent Reports</p>
                                </div>
                                <div class="col-lg-6" style="text-align: right;">
                                    <div class="btn-group">
                                        {{-- <label type="button" class="dropdown-toggle waves-effect waves-light"
                                            data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 14px">
                                            This
                                            week </label> --}}
                                        <a href="{{ route('owner-reports.index') }}">View All</a>
                                        <ul class="dropdown-menu" style="">
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">Something else
                                                    here</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @if ($reports->isEmpty())
                                <div class="row mb-3 text-center">
                                    <div class="col-lg-12">
                                        no new Report
                                    </div>
                                </div>
                            @endif

                            @foreach ($reports->take(3) as $item)
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <p style="font-size: 14px"> {{ $item->reporter->firstName }}</p>
                                        <p class="d-flex"
                                            style="font-size: 13px;color: #9CAFD1;margin-top: -10px;font-weight: 400;">
                                            <img src="{{ asset('/dashboard/assets/img/yacht.png') }}" class="me-1" />
                                            {{ $item->job->yacht->yachtName }}
                                        </p>
                                    </div>
                                    <div class="col-lg-6" style="text-align: right;">
                                        <p style="font-size: 13px;color: #9CAFD1;font-weight: 400;">
                                            {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y | H:i\h') }}
                                        </p>
                                        <span
                                            style="padding: 4px 8px 4px 8px; border-radius: 4px; background: #FF005C0D; color: #FF005C; font-size: 13px;font-weight: 400; vertical-align: top; ">
                                            {{ $item->reportType->name }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <!-- first box end  -->
                        <!-- second box -->
                        <div class="col-lg-12"
                            style="border: 1px solid #C6D2E7;width: 100%;padding: 16px 24px 16px 24px;gap: 24px;border: 1px 0px 0px 0px;opacity: 0px;color: #00365E;">
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <p>My crew</p>
                                </div>
                                <div class="col-lg-6" style="text-align: right;">
                                    <div class="btn-group">
                                        <a href="{{ route('owner.myteam.index') }}"> View All

                                        </a>
                                    </div>
                                </div>
                            </div>

                            @if ($teams->isEmpty())
                                <div class="row mb-3 text-center">
                                    <div class="col-lg-12">
                                        no Crew Avalible
                                    </div>
                                </div>
                            @endif

                            @foreach ($teams->take(3) as $item)
                                <div class="row mb-3">
                                    <div class="col-lg-8">
                                        <div class="d-flex justify-content-start">
                                            <img src="{{ asset('/dashboard/assets/img//profile.jpg') }}"
                                                style="width: 25%" alt="" class="h-auto rounded-circle">
                                            <div style="margin-left: 10px">
                                                <h6 class="mb-0 text-nowrap">
                                                    {{ $item->firstname . ' ' . $item->lastname }}</h6>
                                                <small style="color:#5E8BF7">{{ $item->user_type }} | <span
                                                        class="text-muted">
                                                        {{ $item->yacht->yachtName }}
                                                    </span>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="text-align: right">
                                        <div class="d-flex justify-content-between">
                                            <a href="tel:{{ $item->phone }}"
                                                class="badge bg-label-primary p-2 rounded me-1">
                                                <i class="ti ti-phone ti-sm"></i>
                                            </a>
                                            <a href="mailto:{{ $item->email }}"
                                                class="badge bg-label-primary p-2 rounded ">
                                                <i class="ti ti-mail ti-sm"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="row mb-3">
                               <div class="col-lg-8">
                                   <div class="d-flex flex-wrap">
                                       <img src="assets//dashboard/assets/img/avatars/1.png" style="width: 25%"
                                           alt="" class="h-auto rounded-circle">
                                       <div style="margin-left: 10px">
                                           <h6 class="mb-0 text-nowrap">Jack Sparrow</h6>
                                           <small style="color:#5E8BF7">Captain | <span class="text-muted">Fast
                                                   and</span>
                                           </small>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-lg-4" style="text-align: right">
                                   <div class="d-flex flex-wrap">
                                       <span class="badge bg-label-primary p-2 rounded me-1">
                                           <i class="ti ti-phone ti-sm"></i>
                                       </span>
                                       <span class="badge bg-label-primary p-2 rounded ">
                                           <i class="ti ti-mail ti-sm"></i>
                                       </span>
                                   </div>
                               </div>
                           </div> --}}
                        </div>
                        <!-- Third Box -->

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
                                            style="width: 34px; height: 28px; padding: 2px 12px 2px 12px; gap: 24px; border-radius: 500px; opacity: 0px; background: #F2F6FA;margin-top: 4px;">
                                            {{ $yachts->count() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6" style="text-align: right">
                                <a href="{{ route('/owner/yachets') }}">
                                    <p style="color: #00365E;">View All</p>
                                </a>
                            </div>
                        </div>
                        <!-- slider row -->
                        <div class="row mt-2">

                            @foreach ($yachts->take(3) as $item)
                                <div class="col-lg-4">
                                    <div class="card h-100"
                                        style="border: 1px solid #C6D2E7;border-radius: 0px !important">
                                        <a href="{{ route('show.owner.yacht', $item->id) }}">
                                            <img class="card-img-top" src="{{ asset($item->image) }}"
                                                alt="Card image cap"
                                                style="border-radius:0px !important;width:100%;height: 200px; object-fit: cover;">
                                            <div class="card-body" style="background: transparent !important;">
                                                <h5 class="card-title" style="color: #00365E;">{{ $item->yachtName }}
                                                </h5>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <p style="font-size: 10px !important;color:#9CAFD1">Mooring:
                                                                <span style="color:#00365E">
                                                                    {{ $item->mooringNumber }}</span>
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <p style="font-size: 10px !important;color:#9CAFD1">Size:
                                                                <span style="color:#00365E">
                                                                    {{ $item->yachtSize }}</span>
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <p style="font-size: 10px !important;color:#9CAFD1">Tonnage:
                                                                <span style="color:#00365E">
                                                                    {{ $item->yachtTonnage }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-6 text-center"
                                                            style="border-right: 1px solid #C6D2E7;">
                                                            <i class="ti ti-briefcase "
                                                                style="font-size: 34px !important;color: #00365E;"></i>
                                                            <p style="font-size: 34px;color: #00365E;">
                                                                {{ $item->jobpost->count() }}</p>
                                                            <p style="font-size: 14px;color: #00365E;margin-top: -20px;">
                                                                Open
                                                                jobs
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-6 text-center">
                                                            <i class="ti ti-circle-check "
                                                                style="font-size: 34px !important;color: #2AD7B3;"></i>
                                                            <p style="font-size: 34px;color: #2AD7B3;">
                                                                {{ $item->jobpost->where('status', 'approved')->count() }}
                                                            </p>
                                                            <p style="font-size: 14px;color: #2AD7B3;margin-top: -20px;">
                                                                Active
                                                                jobs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-4 " style="border-bottom: 1px solid #C6D2E7">
                                                    <div class="row ">
                                                        <div class="col-lg-7">
                                                            <div class="d-flex flex-wrap">
                                                                <i style="color: #00365E;" class="ti ti-coin me-1"></i>
                                                                <p style="font-size: 14px;color: #00365E;">Budget invested
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5" style="text-align: right;">
                                                            <p style="font-size:15px;color: #00365E;">

                                                                @if (!empty($item->jobpost))
                                                                    {{ $totalBudget = $item->jobpost->sum(function ($job) {
                                                                        return (float) $job['budget'];
                                                                    }) }}
                                                                @else
                                                                    0
                                                                @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-3 " style="border-bottom: 1px solid #C6D2E7">
                                                    <div class="row ">
                                                        <div class="col-lg-7">
                                                            <div class="d-flex flex-wrap">
                                                                <i style="color: #00365E;"
                                                                    class="ti ti-file-export me-1"></i>
                                                                <p style="font-size: 14px;color: #00365E;">Applications
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5" style="text-align: right;">
                                                            <p style="font-size:15px;color: #00365E;">

                                                                {{ $item->jobPost->sum(function ($job) {
                                                                    return $job->applications ? $job->applications->count() : 0;
                                                                }) }}
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
                                                                @if ($item->job_post && $item->job_post->reports->isNotEmpty())
                                                                    {{ $item->job_post->reports->where('ReportType.name', 'Incident')->count() }}
                                                                @else
                                                                    0
                                                                @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                 
                                                <div class="col-lg-12 mt-3 ">
                                                    <div class="row  ">
                                                        <div class="col-lg-12  ">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-flex flex-wrap">
                                                                    <i style="color: #9CAFD1;padding-top: 3px;"
                                                                        class="fa fa-circle-user me-1"></i>
                                                                    <p style="font-size: 14px;color: #9CAFD1;">Yacht Crew</p>
                                                                </div>
                                                                <div class="">
                                                                    <a href="{{ route('owner.myteam.index') }}">
                                                                        <p style="font-size:14px;color: #9CAFD1;">View All </p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6  ">
                                                            {{-- <a href="{{ route('owner.myteam.index') }}">
                                                                <p style="font-size:14px;color: #9CAFD1;">View All </p>
                                                            </a> --}}
                                                        </div>
                                                    </div>
                                                    @if ($item->teamMembers->isEmpty())
                                                        <div class="row mb-3">
                                                            <div class="col-lg-12 text-center p-4">
                                                                <p>Sorry no Crew </p>
                                                            </div>
                                                        </div>
                                                    @else
                                                        @foreach ($item->teamMembers->take(3) as $member)
                                                            <div class="row mb-3">
                                                                <div class="col-lg-8">
                                                                    <div class="d-flex flex-wrap">
                                                                        <img src="{{ asset('dashboard/assets/img/profile.jpg') }}"
                                                                            style="width: 25%" alt=""
                                                                            class="h-auto rounded-circle">
                                                                        <div style="margin-left: 10px">
                                                                            <h6 class="mb-0 text-nowrap">
                                                                                {{ $member->firstname . ' ' . $member->lastname }}
                                                                            </h6>
                                                                            <small
                                                                                style="color:#5E8BF7">{{ $member->user_type }}
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
                                        </a>
                                    </div>
                                </div>
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
@endsection


<div class="offcanvas offcanvas-end" tabindex="-1" id="teamoffcanvas" aria-labelledby="teamoffcanvasEndLabel"
    style="width: 500px !important;">

    <div class="offcanvas-header border-bottom">
        <h5 id="teamoffcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i
                class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas"
                aria-label="Close"></i> Add crew member</h5>

    </div>
    <div class="offcanvas-body  mx-0 flex-grow-0">
        <form id="teamForm">
            @csrf
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
                @error('user_type')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <h5 style="color: #00365E;font-size: 16px;">Add to yacths:</h5>
            <p style="color:#9CAFD1;font-size: 14px;margin-top: -10px;">A captain or engineer can be added to multiple
                yachts</p>
            <div class="col-md-12 mb-4">
                <div class="input-group input-group-merge" style="border-radius: 0px !important">
                    <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important"><i
                            class="ti ti-search"></i></span>
                    <select name="yacht_id" class="form-control select2" id="yacht_id">
                        <option value="" disabled selected>Search for yacht</option>
                        @foreach ($yachts as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->id }} {{ $item->yachtName }}
                            </option>
                        @endforeach
                    </select>

                    @error('yacht_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    @error('yacht_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12 mb-4">
                <label style="color:#00365E;font-size: 16px">Personal details</label>
                <div class="form-group mt-3" style="position: relative;">
                    <input type="text" class="form-control" required name="firstname" style="border-radius:0px"
                        placeholder="Boat JBL" name="">
                    <label class="labelOwn" style="color:#5E8BF7">First name*</label>
                    @error('firstname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-3" style="position: relative;">
                    <input name="lastname" required type="text" required class="form-control"
                        style="border-radius:0px" placeholder="Last name*" name="">
                    @error('lastname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-3" style="position: relative;">
                    <input type="text" required class="form-control" required name="email"
                        style="border-radius:0px" placeholder="Email*" name="">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-3" style="position: relative;">
                    <input type="text" required name="phone" required class="form-control"
                        style="border-radius:0px" placeholder="Phone*" name="">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-3 mb-3" style="position: relative;">
                    <input type="text" required name="job_title" required class="form-control"
                        style="border-radius:0px" placeholder="Job title" name="">
                    @error('job_title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <label style="color:#00365E;font-size: 16px">Invitation message</label>
                <div class="form-group mt-3" style="position: relative;">
                    <textarea type="text" class="form-control" required name="message" style="border-radius:0px"
                        placeholder="Leave a message for the user" name=""></textarea>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <button id="submitTeamMember" type="submit" class="btn mb-2 d-grid w-100"
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
        $('#submitTeamMember').on('click', function(e) {
            console.log('button clicked');
            e.preventDefault(); // Prevent default form submission

            // Collect form data
            var formData = {
                user_type: $('select[name="user_type"]').val(),
                yacht_id: $('select[name="yacht_id"]').val(),
                firstname: $('input[name="firstname"]').val(),
                lastname: $('input[name="lastname"]').val(),
                email: $('input[name="email"]').val(),
                phone: $('input[name="phone"]').val(),
                job_title: $('input[name="job_title"]').val(),
                message: $('textarea[name="message"]').val(),
                _token: '{{ csrf_token() }}' // Laravel CSRF token for security
            };

            console.log(formData); // Debug collected data

            // AJAX request
            $.ajax({
                url: '{{ route('owner.myteam.store') }}',
                type: 'POST',
                data: formData,
                success: function(response) {
                    alert('Crew member added successfully!');
                    window.location.reload();
                    $('#teamForm')[0].reset(); // Reset form fields
                    $('#teamoffcanvas').modal('hide'); // Close the modal
                },
                error: function(xhr, status, error) {
                    if (xhr.status === 422) { // Validation errors
                        var errors = xhr.responseJSON.errors;
                        for (var field in errors) {
                            if (errors.hasOwnProperty(field)) {
                                var inputField = $('input[name="' + field +
                                    '"], select[name="' + field +
                                    '"], textarea[name="' + field + '"]');
                                inputField.addClass('is-invalid');
                                inputField.after('<div class="invalid-feedback">' + errors[
                                    field].join(', ') + '</div>');
                            }
                        }
                    } else {
                        console.error(xhr.responseText);
                        alert('Error: Could not add crew member.');
                    }
                }
            });
        });

        // Clear validation errors on input change
        $('#teamForm input, #teamForm select').on('input change', function() {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').remove();
        });
    });
</script>
<script>
    function approveJob(jobId) {
        // Generate the correct URL for the route, passing jobId
        const url = `{{ route('owner-job.approve', ['id' => ':id']) }}`.replace(':id', jobId);

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
