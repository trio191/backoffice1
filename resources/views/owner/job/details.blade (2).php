@extends('owner.layout.master')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>

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


        .nav-tabs {
            background-color: #ffffff00 !important;
        }
    </style>

    <!-- / Navbar -->
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="layout-demo-wrapper"
            style=" padding-top: 20px;padding-bottom: 20px; position: relative;background: #f2f6fa;">
            <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
                <!-- Text container -->
                <div class="row pt-2">
                    <div class="col-lg-7 text-white">
                        <h5 class="" style="color: #00365E">{{ $data->job_title }}</h5>
                        <div class="d-flex flex-nowrap align-items-center" style="margin-top:-10px; width: 100%;">
                            <label class="badge me-2" style="background-color: #00365E; color: #fff; height: 25px;  ">
                                <span class="d-flex align-items-center justify-content-center text-nowrap">
                                    <i class="ti ti-star ti-xs me-2"></i> Verified
                                </span>
                            </label>
                            <label class="badge me-2" style="background-color: #2AD7B3; color: #fff; height: 25px;">
                                <span class="d-flex align-items-center justify-content-center text-nowrap">
                                    <i class="ti ti-briefcase ti-xs me-2"></i> {{ $data->status }}
                                </span>
                            </label>
                            <span class="d-flex align-items-center justify-content-center text-nowrap me-3"
                                style="color:#00365E; height: 25px;">
                                <i class="ti ti-calendar ti-xs me-2"></i> Posted on:
                                {{ \Carbon\Carbon::parse($data->created_at)->format('d M Y') }}
                            </span>
                            <span class="d-flex align-items-center justify-content-center text-nowrap me-3"
                                style="color:#00365E; height: 25px;">
                                <i class="ti ti-video ti-xs me-2"></i> Videos:
                                {{ $data->video ? 1 : 0 }}
                            </span>
                            <span class="d-flex align-items-center justify-content-center text-nowrap"
                                style="color:#00365E; height: 25px;">
                                <i class="ti ti-photo ti-xs me-2"></i> Images: {{ $data->images ? 1 : 0 }}
                            </span>
                        </div>

                    </div>
                    <div class="col-lg-5" style="text-align: right;">
                        <div class="d-flex justify-content-end">
                            @if ($data->status == 'waiting')
                                <button type="button" class="btn waves-effect waves-light"
                                    style="border-radius: 0px !important;color: #fff;background: #5E8BF7; padding: 6px 6px;">
                                    Approve job
                                </button>
                            @elseif($data->status != 'completed')
                                <button type="button" onclick="markAsComplete({{ $data->id }});"
                                    class="btn waves-effect waves-light"
                                    style="border-radius: 0px !important;color: #fff;background: #5E8BF7; padding: 6px 6px;">
                                    Mark as Complete
                                </button>
                            @elseif($data->status == 'completed')
                                <button type="button" disabled onclick="markAsComplete({{ $data->id }});"
                                    class="btn waves-effect waves-light"
                                    style="border-radius: 0px !important;color: #fff;background: #5E8BF7; padding: 6px 6px;">
                                    Mark as Complete
                                </button>
                            @endif
                            <div class="dropdown" style="z-index: 1050; position: relative;">
                                <button type="button" class="btn border"
                                    style="border: none; background-color: transparent; padding: 4px 0px; width: auto;"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical" style="font-size: 1.2rem; color: #C6D2E7;"></i>
                                </button>
                                <ul class="dropdown-menu" style="z-index: 1055;">
                                    <li><a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#editJob"
                                            aria-controls="editJob" href="#">Edit Job</a></li>

                                    <!-- Disable 'Mark as Done' if the job is already completed -->
                                    <li onclick="markAsComplete({{ $data->id }});"
                                        class="{{ $data->status == 'completed' ? 'disabled' : '' }}">
                                        <a class="dropdown-item" href="#"
                                            style="{{ $data->status == 'completed' ? 'pointer-events: none; color: #6c757d;' : '' }}">Mark
                                            as Done</a>
                                    </li>

                                    <!-- Disable 'Approve Job' if the job is already approved -->
                                    <li onclick="approveJob({{ $data->id }});"
                                        class="{{ $data->status == 'approved' || $data->status == 'completed' ? 'disabled' : '' }}">
                                        <a class="dropdown-item" href="#"
                                            style="{{ $data->status == 'approved' || $data->status == 'completed' ? 'pointer-events: none; color: #6c757d;' : '' }}">Approve
                                            Job</a>
                                    </li>


                                    <li onclick="deleteJob({{ $data->id }});"><a class="dropdown-item"
                                            href="#">Delete Job</a></li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Layout Demo -->
            <div class="col-lg-12" style="margin-top: -24px">
                <div class="nav-align-top  mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="false"
                                tabindex="-1"> Overview </button>
                        </li>
                        @if ($data->status === 'hired')
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-profile" aria-controls="navs-top-profile"
                                    aria-selected="false" tabindex="-1"> Reports </button>
                            </li>
                        @endif
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-messages" aria-controls="navs-top-messages"
                                aria-selected="true">
                                Applications </button>
                        </li>
                    </ul>
                    <div class="tab-content" style="margin-left: -20px;margin-right: -20px">
                        <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-9" style="color: #00365E">
                                    <p>
                                        {{ $data->job_description }}

                                    </p>
                                    <h3 style="color: #00365E;">Images and Videos</h3>
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <img src="{{ asset($data->images) }}" style="height:90px;width:100%">
                                        </div>
                                        <div class="col-lg-3">
                                        <video controls style="height:90px;width:100%">
                                        <source src="{{ asset($data->video) }}">
                                        Your browser does not support the video tag.
                                        </video>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card mb-2"
                                        style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 15px;border-radius: 0px;color: #00365E;">
                                        <div class="d-flex align-items-center">
                                            <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-calendar ti-sm" style="color:#00365E"></i>
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Deliver by</small>
                                                <h5 class="mb-0" style="color: #00365E">
                                                    {{ \Carbon\Carbon::parse($data->delivery_date)->format('d M Y') }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2"
                                        style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 15px;border-radius: 0px;color: #00365E;">
                                        <div class="d-flex align-items-center">
                                            <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-coin ti-sm" style="color:#00365E"></i>
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Budget</small>
                                                <h5 class="mb-0" style="color: #00365E">Up to {{ $data->budget }} €
                                                </h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2"
                                        style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <div class="d-flex align-items-center">
                                            <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-map-pin ti-sm" style="color:#00365E"></i>
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Port base</small>
                                                <h5 class="mb-0" style="color: #00365E">{{ $yacht->portBase }}
                                                </h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2"
                                        style="border: 1px solid #C6D2E7;box-shadow: none !important;background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <span style="color:#00365E;font-size: 16px;">Yacht Size:
                                            {{ $yacht->yachtSize }}meters</span>
                                    </div>
                                    <div class="card mb-2"
                                        style="border: 1px solid #C6D2E7;box-shadow: none !important;background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <span style="color:#00365E;font-size: 16px;">Mooring Number:
                                            {{ $yacht->mooringNumber }}</span>
                                    </div>
                                    <div class="card mb-2"
                                        style="border: 1px solid #C6D2E7;box-shadow: none !important;background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <span style="color:#00365E;font-size: 16px;">Manufatorer:
                                            {{ $yacht->mooringNumber }}</span>
                                    </div>
                                    <div class="card mb-2"
                                        style="border: 1px solid #C6D2E7;box-shadow: none !important;background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <span style="color:#00365E;font-size: 16px;">Surveyor:
                                            {{ $data->require_surveyor }}</span>
                                    </div>
                                    <div class="card mb-2"
                                        style="border: 1px solid #C6D2E7;box-shadow: none !important;background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <p style="color: #00365E;font-size: 18px;">Job type and skills</p>
                                        <p style="color: #00365E;font-size: 14px;">The following skills are suggest for
                                            this job</p>
                                        <div class="d-flex flex-wrap">
                                            @php
                                                $tags = json_decode($data->tags, true);
                                            @endphp

                                            @if (is_array($tags))
                                                @foreach ($tags as $item)
                                                    <label class="badge bg-label-primary me-2 mb-2">
                                                        {{ $item['value'] }}
                                                    </label>
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
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
                                                    <h5 class="mb-0" style="color: #00365E">
                                                        {{ $reports->count() }}
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
                                                    <i class="ti ti-circle-check ti-sm" style="color:#00365E"></i>
                                                </div>
                                                <div class="card-info">
                                                    <small style="font-size: 11px">Surveyor reports</small>
                                                    <h5 class="mb-0" style="color: #00365E">
                                                        {{ $reports->where('report_type_id', 2)->count() }}
                                                    </h5>
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
                                                        {{ $reports->where('report_type_id', 1)->count() }}
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
                                                        {{ $reports->where('report_type_id', 3)->count() }}

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
                                            <div class="col-lg-4">
                                                <i class="ti ti-file-analytics ti-md" style="color: #00365E"></i>
                                                <label style="font-size: 18px;color: #00365E;padding-top: 5px;"
                                                    class="me-2">Report List</label>
                                                <label class="badge bg-label-primary rounded-pill "
                                                    style="color: #00365E !important">
                                                    {{ $reports->count() }}
                                                </label>
                                            </div>
                                            <div class="col-lg-8" style="text-align: right;color: #00365E;">
                                                <div class="row">
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-6">
                                                        <form method="GET"
                                                            action="{{ route('owner.job.details', $data->id) }}"
                                                            class="input-group input-group-merge">
                                                            <span class="input-group-text" id="basic-addon-search31"><i
                                                                    class="ti ti-search"></i></span>
                                                            <input type="text" name="search" class="form-control"
                                                                placeholder="Search..." aria-label="Search..."
                                                                aria-describedby="basic-addon-search31"
                                                                value="{{ request('search') }}">
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <form method="GET"
                                                            action="{{ route('owner.job.details', $data->id) }}"
                                                            class="d-flex flex-wrap">
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn dropdown-toggle waves-effect waves-light"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                                    style="color: #00365E;">
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
                                                            <button type="button" class="btn"
                                                                onclick="resetFilters()" style="color: #9CAFD1;">
                                                                Reset
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Cards area  -->
                                        <div class="col-lg-12 mt-4 mb-4">
                                            <table class="table table-responsive">
                                                <tr style="font-size: 14px">
                                                    <td>
                                                        <span class="me-2">Reporter</span>
                                                        <i class="fa fa-bars-staggered me-2"></i>
                                                    </td>
                                                    <td>
                                                        <span class="me-2">Title</span>
                                                        <i class="fa fa-bars-staggered me-2"></i>
                                                    </td>
                                                    <td>
                                                        <span class="me-2">Post date</span>
                                                        <i class="fa fa-bars-staggered me-2"></i>
                                                    </td>
                                                    <td>
                                                        <span class="me-2">Report Type</span>
                                                        <i class="fa fa-bars-staggered me-2"></i>
                                                    </td>
                                                </tr>

                                                @if ($reports->isEmpty())
                                                    <tr class="border p-5 text-center"
                                                        style="color:#00365E;font-size: 14px;">
                                                        <td colspan="6">
                                                            <p>No Report</p>
                                                        </td>
                                                    </tr>
                                                @endif
                                                @foreach ($reports as $report)
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
                                                                        {{ $report->reporter->firstName }}</h6>
                                                                    <span
                                                                        style="color:#5E8BF7;font-size: 10px">{{ $report->reporter->accountType }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-wrap">
                                                                <label class="badge me-1"
                                                                    style="background-color: #FF005C;">new</label>
                                                                <span
                                                                    style="font-size: 12px;padding-top: 4px;">{{ $report->subject }}</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-wrap">
                                                                <i class="ti ti-calendar me-1"></i>
                                                                <span>22 Jan 2023</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="badge bg-label-danger">
                                                                <span
                                                                    style="padding-top: 4px;">{{ $report->reportType->name }}
                                                                </span>
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
                        </div>
                        <div class="tab-pane fade " id="navs-top-messages" role="tabpanel">
                            <div class="col-lg-12 mt-5">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card"
                                            style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                            <div class="d-flex align-items-center">
                                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                    style="background-color:#F2F6FA !important">
                                                    <i class="ti ti-briefcase ti-sm" style="color:#00365E"></i>
                                                </div>
                                                <div class="card-info">
                                                    <small style="font-size: 11px">Jobs Posted</small>
                                                    <h5 class="mb-0" style="color: #00365E">{{ $jobs->count() }}</h5>
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
                                                        {{ $data->applications->where('status', 'Rejected')->count() }}
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
                                                    <small style="font-size: 11px">Applications received</small>
                                                    <h5 class="mb-0" style="color: #00365E">
                                                        {{ $data->applications->count() }}
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
                                                    <small style="font-size: 11px">Applications accepted</small>
                                                    <h5 class="mb-0" style="color: #2AD7B3">
                                                        {{ $data->applications->where('status', 'Hired')->count() }}
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
                                                <i class="ti ti-file-export ti-md" style="color: #00365E"></i>
                                                <label style="font-size: 18px;color: #00365E;padding-top: 5px;"
                                                    class="me-2">Applications</label>
                                                <label class="badge bg-label-primary rounded-pill "
                                                    style="color: #00365E !important">{{ $applications->count() }}</label>
                                            </div>
                                            <div class="col-lg-7" style="text-align: right;color: #00365E;">
                                                <div class="row">
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-6">
                                                        <form method="GET"
                                                            action="{{ route('owner.job.details', $data->id) }}">
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text" id="basic-addon-search31">
                                                                    <i class="ti ti-search"></i>
                                                                </span>
                                                                <input type="text" name="search" class="form-control"
                                                                    placeholder="Search..." aria-label="Search..."
                                                                    aria-describedby="basic-addon-search31"
                                                                    value="{{ request('search') }}">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <form method="GET"
                                                            action="{{ route('owner.job.details', $data->id) }}"
                                                            class="d-flex flex-wrap">
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn dropdown-toggle waves-effect waves-light"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                                    style="color: #00365E;">
                                                                    Status
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item"
                                                                            href="?applicationstatus=Hired">Hired</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="?applicationstatus=Rejected">Rejected</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="?applicationstatus=Under Analysis">Under
                                                                            Analysis</a></li>
                                                                </ul>
                                                            </div>
                                                            <button type="button" class="btn waves-effect waves-light"
                                                                style="color: #00365E;">
                                                                <a href="{{ route('owner.job.details', $data->id) }}">
                                                                    Reset
                                                                </a>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Cards area  -->
                                        <div class="col-lg-12 mt-4 mb-4">
                                            <table class="table table-responsive">
                                                <tr style="font-size: 14px">
                                                    <td>
                                                        <span class="me-2">User name</span>
                                                        <i class="fa fa-bars-staggered me-2"></i>
                                                    </td>
                                                    <td>
                                                        <span class="me-2">Application date</span>
                                                        <i class="fa fa-bars-staggered me-2"></i>
                                                    </td>
                                                    <td>
                                                        <span class="me-2">Message</span>
                                                        <i class="fa fa-bars-staggered me-2"></i>
                                                    </td>
                                                    <td>
                                                        <span class="me-2">Job Id</span>
                                                        <i class="fa fa-bars-staggered me-2"></i>
                                                    </td>
                                                    <td>
                                                        <span class="me-2">Offer</span>
                                                        <i class="fa fa-bars-staggered me-2"></i>
                                                    </td>
                                                    <td>
                                                        <span class="me-2">Status</span>
                                                        <i class="fa fa-bars-staggered me-2"></i>
                                                    </td>
                                                </tr>

                                                @if ($applications->isEmpty())
                                                    <tr class="border text-center p-4"
                                                        style="color:#00365E;font-size: 14px;">
                                                        <td colspan="6">
                                                            No Application
                                                        </td>
                                                    </tr>
                                                @endif
                                                @foreach ($applications as $item)
                                                    <tr class="border" style="color:#00365E;font-size: 14px;">
                                                        <td>
                                                            <div class="d-flex flex-wrap">
                                                                <div class="avatar me-2">
                                                                    <img src="{{ $item->user->profile_image ? $item->user->profile_image : asset('/dashboard/assets/img/profile.jpg') }}"
                                                                        alt="Avatar" class="rounded-circle">
                                                                </div>
                                                                <div class="ms-1">
                                                                    <h6 class="mb-0"
                                                                        style="font-size: 12px;color: #00365E;">
                                                                        {{ $item->user->firstName }}</h6>
                                                                    <span
                                                                        style="color:#5E8BF7;font-size: 10px">{{ $item->user->accountType }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-wrap">
                                                                <i class="ti ti-calendar me-1"></i>
                                                                <span>

                                                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}

                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-wrap">
                                                                <label class="badge me-1"
                                                                    style="background-color: #FF005C;">new</label>
                                                                <span style="font-size: 12px;padding-top: 4px;">
                                                                    {{ $item->message }}
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span style="color: #5E8BF7">#{{ $item->job_id }}</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-wrap">
                                                                <i class="ti ti-coin me-1"></i>
                                                                <span
                                                                    style="font-size: 12px;padding-top: 2px;">{{ $item->cost }}€</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="badge bg-label-primary">
                                                                <i class="ti ti-eye ti-xs me-1"></i>
                                                                <span style="padding-top: 4px;">{{ $item->status }}
                                                                </span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </table>
                                        </div>
                                        <!-- add Yacht -->
                                        @if ($applications->isNotEmpty())
                                            <nav aria-label="Page navigation" style="float: right;">
                                                {{ $applications->links('vendor.custom-pagination') }}
                                            </nav>
                                        @endif
                                    </div>
                                    <!-- Left side area end col-lg-12  -->
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
    </div>
    <!-- Content wrapper -->

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>


    {{-- offcanva  --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="editJob" aria-labelledby="editJob"
        style="width: 500px !important;">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title">
                <i class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas"
                    aria-label="Close"></i> Create Job post
            </h5>
        </div>
        <div class="offcanvas-body mx-0 flex-grow-0">
            <form id="EditjobForm" enctype="multipart/form-data" method="POST" action="{{ url('owner-job-update', $data->id) }}">
                @csrf
                @method('PUT')
                <!-- Other form fields -->
                <?php
                $fetchYachets = fetchYachets();
                ?>
                <h5 style="color: #00365E;font-size: 16px;">Select a yacht to post the job</h5>
                <div class="col-md-12 mb-4">
                    <div class="input-group input-group-merge" style="border-radius: 0px !important">
                        <select class="form-control" id="selectYacht" name="yacht_id"
                            style="border-radius: 0px !important;">
                            <option value="">Select yacht</option>
                            @foreach ($fetchYachets as $item)
                                <option value="{{ $item->id }}" @if ($item->id == $data->yacht_id) selected @endif>
                                    {{ $item->yachtName }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Please select a yacht.</div>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <label style="color:#00365E;font-size: 16px">Job title</label>
                    <div class="form-group mt-3" style="position: relative;">
                        <input type="text" class="form-control" id="jobTitle" name="job_title"
                            style="border-radius:0px" value="{{ $data->job_title }}">
                        <small style="color: #9CAFD1;font-size: 14px;" class="mt-2">0 of 50 max characters.</small>
                        <div class="invalid-feedback">Please enter a job title.</div>
                    </div>
                </div>
                <!-- Skills Input -->
                <div class="col-md-12 mb-4">
                    <label style="color:#00365E;font-size: 16px">Type & Skills</label>
                    <div class="form-group mt-3" style="position: relative;">
                    <input name='tags' class="form-control" placeholder='Type something...' 
                    value="{{ $data->tags }}" >
                        <div class="invalid-feedback">Please enter the job type and skills.</div>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <label style="color:#00365E;font-size: 16px">Job description</label>
                    <div class="form-group mt-3" style="position: relative;">
                        <textarea class="form-control" id="jobDescription" name="job_description" style="border-radius:0px" rows="5"
                            placeholder="Please describe the issue or present additional details for the professional">{{ $data->job_description }}</textarea>
                        <div class="invalid-feedback">Please enter a job description.</div>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <label style="color:#00365E;font-size: 16px">Do you require surveyor?</label>
                    <p style="color:#9CAFD1;font-size: 16px">The job will be open for surveyors applications</p>
                    <select class="form-control" id="requireSurveyor" name="require_surveyor"
                        style="border-radius: 0px !important;">
                        <option value="" disabled selected>Select surveyors status</option>
                        <option value="no" @if ($data->require_surveyor == 'no') selected @endif>No, I don't need a
                            surveyor</option>
                        <option value="yes" @if ($data->require_surveyor == 'yes') selected @endif>Yes, I need a surveyor
                        </option>
                    </select>
                    <div class="invalid-feedback">Please select if you require a surveyor.</div>
                </div>
                <div class="col-md-12 mb-2 mt-4">
                    <label style="color:#00365E;font-size: 16px">Is your budget flexible?</label>
                    <div class="col-md-12 mb-2 mt-2">
                        <select class="form-control " id="requireflexiblity" name="budget_flexible"
                            style="border-radius: 0px !important">
                            <option value="" disabled selected>Select budget flexibility</option>
                            <option value="yes" @if ($data->budget_flexible == 'yes') selected @endif>Yes, my budget is flexible</option>
                            <option value="no" @if ($data->budget_flexible == 'no') selected @endif>No, my 
                        </select>
                        <div class="invalid-feedback">Please select your budget flexiblity.</div>
                    </div>
                </div>
                <!-- Delivery Date Input with Calendar -->
                <div class="col-md-12 mb-4">
                    <label style="color:#00365E;font-size: 16px">Delivery by</label>
                    <p style="color:#9CAFD1;font-size: 16px">Please select the date which you want to have the job done</p>
                    <div class="input-group input-group-merge" style="border-radius: 0px !important">
                        <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important"><i
                                class="ti ti-calendar"></i></span>
                        <input type="date" class="form-control flatpickr-input" id="deliveryDate"
                            name="delivery_date" placeholder="YYYY-MM-DD" value="{{ $data->delivery_date }}">
                        <div class="invalid-feedback">Please select a delivery date.</div>
                    </div>
                </div>
                <!-- Budget Input with Currency -->
                <div class="col-md-12 mb-4">
                    <label style="color:#00365E;font-size: 16px">Budget <span
                            style="color: #9CAFD1;margin-left: 5px;">(labor and material)</span></label>
                    <div class="input-group input-group-merge" style="border-radius: 0px !important">
                        <span class="input-group-text" style="border-radius: 0px !important">EUR</span>
                        <input type="number" class="form-control" id="budget" name="budget" value="{{ $data->budget }}">>
                        <div class="invalid-feedback">Please enter your budget.</div>
                    </div>
                </div>
                <!-- File Upload -->
                <div class="col-md-12 mb-4">
                    <label style="color:#00365E;font-size: 16px">Upload material</label>
                    <p style="color:#9CAFD1;font-size: 16px">Select an image, video (max: 1min), PDF, or document</p>
                    <div class="col-lg-12" id="imageUploadsContainer">
                        <div class="row">
                            <div class="col-lg-6 upload-sectiona"
                                style="border: 1px dashed #5E8BF7; height: 125px; text-align: center; padding: 20px; position: relative;">
                                <i class="ti ti-plus ti-md mt-3" style="color:#00365E"></i>
                                <p class="mt-2" style="color:#9CAFD1;font-size: 13px">Max: 100mb</p>
                                <input type="file" name="img" class="imageUpload" accept="image/*"
                                    style="opacity: 0; position: absolute; top: 0; left: 0; height: 100%; width: 100%; cursor: pointer;">
                                <div class="img-alert " style="font-size:14px;color:red"></div>
                            </div>
                            <div class="col-lg-6 upload-img">
                            @if ($data->images)
                                <img style="width: 220px;height:120px" src="{{$data->images}}" alt="">
                            @endif    
                            
                            </div>
                            <br>
                            <div class="col-lg-6 upload-sectionb"
                                style="border: 1px dashed #5E8BF7; height: 125px; text-align: center; padding: 20px; position: relative;top:20px">
                                <i class="ti ti-plus ti-md mt-3" style="color:#00365E"></i>
                                <p class="mt-2" style="color:#9CAFD1;font-size: 13px">Max: 1min video</p>
                                <input type="file" name="video" class="videoUpload" accept="video/*"
                                    style="opacity: 0; position: absolute; top: 0; left: 0; height: 100%; width: 100%; cursor: pointer;">
                                <div class="video-alert"></div>
                            </div>
                            <div class="col-lg-6 video-img " style="font-size:14px;color:red"></div>
                        </div>
                    </div>
                </div>
                <!-- Submit and Cancel buttons -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="submit" class="btn mb-2 d-grid w-100"
                                style="border-radius:0px !important;background: #5E8BF7;color: #fff;">Update job
                                </button>
                        </div>
                        <div class="col-lg-6">
                            <button type="button" class="btn d-grid w-100" data-bs-dismiss="offcanvas"
                                style="border-radius:0px !important;background: transparent;color: #5E8BF7;border: 1px solid #C6D2E7;">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
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


    function resetFilters() {
        document.getElementById('statusFilter').value = '';
        document.querySelector('form').submit();
    }


    // mark as complte and delete

    function markAsComplete(jobId) {
        if (!jobId) return;

        $.ajax({
            url: `/owner-status-job/${jobId}`, // Ensure this matches your route
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}', // Add CSRF token for security
                status: 'Completed'
            },
            success: function(response) {
                if (response.success) {
                    alert(response.message || 'Job marked as completed.');
                    // Optionally refresh the page or update UI
                    location.reload();
                } else {
                    alert(response.message || 'Failed to mark the job as completed.');
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('An error occurred. Please try again.');
            }
        });
    }

    function deleteJob(jobId) {
        if (!jobId) return;

        if (confirm('Are you sure you want to delete this job?')) {
            $.ajax({
                url: `/owner-status-job/${jobId}`, // Adjust the route as needed
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}' // Add CSRF token for security
                },
                success: function(response) {
                    if (response.success) {
                        alert(response.message || 'Job deleted successfully.');
                        // Optionally refresh the page or update UI
                        location.reload('/owner/job');
                    } else {
                        alert(response.message || 'Failed to delete the job.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('An error occurred. Please try again.');
                }
            });
        }
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Handle image preview
        document.querySelector(".imageUpload").addEventListener("change", function (event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith("image/")) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.querySelector(".upload-img").innerHTML = `
                        <img style="width: 220px;height:120px" src="${e.target.result}" alt="New Image">
                    `;
                };
                reader.readAsDataURL(file);
            }
        });

        // Handle video preview
        document.querySelector(".videoUpload").addEventListener("change", function (event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith("video/")) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.querySelector(".video-img").innerHTML = `
                        <video style="width: 220px;height:120px" controls>
                            <source src="${e.target.result}" type="${file.type}">
                            Your browser does not support the video tag.
                        </video>
                    `;
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>


