@extends('captain.layout.master')
@section('content')
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
                            <i class="ti ti-video ti-xs me-2"></i> Videos: {{ $data->sum('video') }}
                        </span>
                        <span class="d-flex align-items-center justify-content-center text-nowrap"
                            style="color:#00365E; height: 25px;">
                            <i class="ti ti-photo ti-xs me-2"></i> Images: {{ $data->sum('images') }}
                        </span>
                    </div>

                </div>
                <div class="col-lg-5" style="text-align: right;">
                    @if ($data->status == 'waiting')
                        <button type="button" class="btn waves-effect waves-light"
                            style="border-radius: 0px !important;color: #fff;background: #5E8BF7; padding: 6px 12px;">
                            Approve job
                        </button>
                        <button type="button" class="btn"
                            style="border-radius: 0px !important;color: #00365d;border: 1px solid #C6D2E7;color: white;width: 20px; padding: 4px;">
                            <span class="ti-xs ti ti-dots-vertical me-1" style="color: #C6D2E7"></span>
                        </button>
                    @endif
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
                    @if ($data->status==='hired')
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false"
                            tabindex="-1"> Reports </button>
                    </li>
                    @endif
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="true">
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
                                        <img src="{{asset ($data->images) }}" style="height:90px;width:100%">
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
                                            <h5 class="mb-0" style="color: #00365E">Up to {{ $data->budget }} €</h5>

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
                                                        action="{{ route('captain-jobs.show', $data->id) }}"
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
                                                        action="{{ route('captain-jobs.show', $data->id) }}"
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
                                                <tr class="border p-5 text-center" style="color:#00365E;font-size: 14px;">
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
                                                                <span style="color:#5E8BF7;font-size: 10px">{{ $report->reporter->accountType}}</span>
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
                                                    {{ $data->applications->where('status', 'refused')->count() }}
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
                                                    {{ $data->applications->where('status', 'hired')->count() }}
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
                                                style="color: #00365E !important">{{$applications->count()}}</label>
                                        </div>
                                        <div class="col-lg-7" style="text-align: right;color: #00365E;">
                                            <div class="row">
                                                <div class="col-lg-1"></div>
                                                <div class="col-lg-6">
                                                    <form method="GET"
                                                        action="{{ route('captain-jobs.show', $data->id) }}">
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text" id="basic-addon-search31">
                                                                <i class="ti ti-search"></i>
                                                            </span>
                                                            <input type="text" name="application-search" class="form-control"
                                                                placeholder="Search..." aria-label="Search..."
                                                                aria-describedby="basic-addon-search31"
                                                                value="{{ request('application-search') }}">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-lg-5">
                                                    <form method="GET"
                                                        action="{{ route('captain-jobs.show', $data->id) }}"
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
                                                        <button type="button"
                                                                class="btn waves-effect waves-light"
                                                                style="color: #00365E;">
                                                                <a href="{{ route('captain-jobs.show', $data->id) }}">
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
                                            <tr class="border text-center p-4" style="color:#00365E;font-size: 14px;">
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
                                                                <img src="/dashboard/assets/img/profile.jpg"
                                                                    alt="Avatar" class="rounded-circle">
                                                            </div>
                                                            <div class="ms-1">
                                                                <h6 class="mb-0"
                                                                    style="font-size: 12px;color: #00365E;">
                                                                    {{ $item->user->firstName }}</h6>
                                                                <span style="color:#5E8BF7;font-size: 10px">{{ $item->user->accountType }}</span>
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
    <!-- / Content -->
    <!-- Footer -->
    <!-- / Footer -->
    <div class="content-backdrop fade"></div>
    </div>
@endsection


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
