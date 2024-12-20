@extends('captain.layout.master')
@section('content')
    @include('captain.components.add-yachets')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="layout-demo-wrapper"
            style="background-image: url('/dashboard/assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px; position: relative;padding-bottom: 20px;">
            <div class="overlay"></div>
            <!-- Overlay -->
            <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
                <!-- Text container -->
                <div class="row pt-2">
                    <div class="col-lg-7 text-white">
                        <h3 class="text-white">Keep your yachts healthy</h3>
                    </div>
                    <div class="col-lg-5" style="text-align: right;">
                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#addYacht"
                            aria-controls="addYacht" class="btn btn-white waves-effect waves-light"
                            style="border-radius: 0px !important;color: #00365d;">
                            <img src="/dashboard/assets/img/yacht-black.png" style="width: 20%" class="me-1" /> Add yacht
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
                            style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('/dashboard/assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                    style="background-color:#F2F6FA !important">
                                    <i class="ti ti-coin ti-sm" style="color:#00365E"></i>
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Total yacht maintenance</small>
                                    <h5 class="mb-0" style="color: #00365E">42.543,22 €</h5>
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
                                    <i class="ti ti-briefcase ti-sm" style="color:#00365E"></i>
                                </div>
                                <div class="card-info">
                                    @php
                                        $latestJob = $jobs->sortByDesc('created_at')->first();
                                    @endphp
                                    <small style="font-size: 11px">Latest job post</small>
                                    <h5 class="mb-0" style="color: #00365E">
                                        {{ $latestJob ? $latestJob->created_at->format('d-m') : 'No latest job' }}

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
                                    <i class="ti ti-file-export ti-sm" style="color:#00365E"></i>
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Latest job reply</small>
                                    <h5 class="mb-0" style="color: #00365E">
                                        {{ $latestJob ? $latestJob->created_at->format('d-m') : 'No latest job' }}
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
                                    <img src="/dashboard/assets/img/yacht-red.png" style="width: 20px">
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Top yacht invested</small>
                                    @php
                                        $highestBudgetYacht = $yachts
                                            ->sortByDesc(function ($yacht) {
                                                return $yacht->jobPost->max('budget'); // Sort by the highest job post budget
                                            })
                                            ->first();
                                    @endphp
                                    <h5 class="mb-0" style="color: #FF005C">
                                        {{ $highestBudgetYacht ? $highestBudgetYacht->yachtName : 'No yachts available' }}
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
                                <img src="/dashboard/assets/img/yacht-black.png" style="width: 28px" class="me-2">
                                <label style="font-size: 18px;color: #00365E;padding-top: 3px;" class="me-2">Yacht
                                    list</label>
                                <label class="badge bg-label-primary rounded-pill "
                                    style="color: #00365E !important">{{ $yachts->count() }}</label>
                            </div>
                            <div class="col-lg-7" style="text-align: right;color: #00365E;">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <form class="input-group input-group-merge" action="{{ route('captain-yachts.index') }}"
                                            method="GET">
                                            <span class="input-group-text" id="basic-addon-search31">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control" id="searchBar"
                                                placeholder="Search..." aria-label="Search..."
                                                aria-describedby="basic-addon-search31" name="search"
                                                value="{{ request('search') }}">
                                        </form>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="d-flex flex-wrap">
                                            <div class="dropdown">

                                                <button type="button"
                                                    class="btn dropdown-toggle waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style="color: #00365E;">
                                                    Order By: Incidents </button>
                                                <ul class="dropdown-menu">
                                                    @foreach ($reportTypes as $item)
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('captain-yachts.index', ['report_type_id' => $item->id]) }}">{{ $item->name }}</a>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>

                                            <button type="button" class="btn dropdown-toggle waves-effect waves-light"
                                                data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                                                All Crew </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="loader"
                            style="display:none;position: fixed; top: 0; left: 0; width: 100%; height: 100%;background-color: rgba(255, 255, 255, 0.8); z-index: 1000; text-align: center; padding-top: 20%;">
                            <img style="width:200px" src="/dashboard/assets/img/loader.gif" alt="Loading...">
                        </div>

                        @if ($yachts->isEmpty())
                            <div class="col-lg-12 text-center mb-3 mt-5" style="border: 1px solid #C6D2E7;">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <p class="py-5">
                                            No Yacht Avalible
                                        </p>
                                    </div>

                                </div>
                            </div>
                        @endif

                        <!-- Cards area -->
                        @foreach ($yachts as $yacht)
                            <div class="col-lg-12 mb-3 mt-5" style="border: 1px solid #C6D2E7;">
                                <a href="{{ route('captain-yachts.show', $yacht->id) }}">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <img src="{{ asset($yacht->image) }}"
                                                style="width: 100%;padding-top: 0px !important;" class="h-100">
                                        </div>
                                        <div class="col-lg-10 p-3">
                                            <div class="row">
                                                <div class="col-lg-8" style="color:#00365E">
                                                    <div class="row">
                                                        <h4 style="font-size: 20px;color: #00365E;">
                                                            {{ $yacht->yachtName }}
                                                        </h4>
                                                        <div style="display: flex;margin-top: -15px;">
                                                            <span class="me-3 "
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Mooring:
                                                                <span
                                                                    style="color:#00365E">{{ $yacht->mooringNumber }}</span>
                                                            </span>
                                                            <span class="me-3 "
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Size:
                                                                <span style="color:#00365E">

                                                                    {{ $yacht->yachtSize }}
                                                                </span>
                                                            </span>
                                                            <span class="me-3 "
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Tonnage:
                                                                <span style="color:#00365E">
                                                                    {{ $yacht->yachtTonnage }}</span>
                                                            </span>
                                                            <span class="me-3 "
                                                                style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Last
                                                                activity: <span style="color:#00365E">
                                                                    {{ $yacht->updated_at->format('d M Y') }}
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" style="">
                                                    <div class="row">
                                                        <div class="col-lg-10">
                                                            <div class="d-flex flex-wrap" style="text-align: left">
                                                                <div class="avatar me-3">
                                                                    <img src="{{ asset('dashboard/assets/img/profile.jpg') }}"
                                                                        alt="Avatar" class="rounded-circle">
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-0">
                                                                        {{ $yacht->yachtManufacturer }}</h6>
                                                                    <small>Captain</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <i class="ti ti-dots-vertical"
                                                                style="color: #9CAFD1;margin-right: -10px !important;"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <center>
                                                    <div class="mt-3"
                                                        style="width: 99.8%;border-top: 1px solid #9CAFD1;">
                                                    </div>
                                                </center>
                                                <div class="col-lg-12 mt-3">
                                                    <div class="row mt-1"
                                                        style="padding-bottom: 0px !important;color: #00365E;">
                                                        <div class="col " style="border-right: 1px solid #9CAFD1;">
                                                            <div class="d-flex flex-wrap ">
                                                                <i class="ti ti-coin me-2"></i>
                                                                <span style="font-size: 14px;" class="me-2">Budget
                                                                    invested</span>
                                                            </div>
                                                            <label style="font-size: 18px;" class="me-2 mt-1">0€</label>
                                                        </div>
                                                        <div class="col " style="border-right: 1px solid #9CAFD1;">
                                                            <div class="d-flex flex-wrap ">
                                                                <i class="ti ti-briefcase me-2"></i>
                                                                <span style="font-size: 14px;" class="me-2">Open
                                                                    Jobs</span>
                                                            </div>
                                                            <label style="font-size: 18px;" class="me-2 mt-1">
                                                                {{ $yacht->jobPost->count() }}</label>
                                                        </div>
                                                        <div class="col " style="border-right: 1px solid #9CAFD1;">
                                                            <div class="d-flex flex-wrap ">
                                                                <i class="ti ti-file-export me-2"></i>
                                                                <span style="font-size: 14px;"
                                                                    class="me-2">Applications</span>
                                                            </div>
                                                           
                                                                <label style="font-size: 18px;" class="me-2 mt-1">
                                                                     {{ $yacht->jobPost->sum(fn($job) => $job->applications->count()) }}

                                                                </label>
                                                          
                                                        </div>
                                                        <div class="col " style="border-right: 1px solid #9CAFD1;">
                                                            <div class="d-flex flex-wrap ">
                                                                <i class="ti ti-coin me-2" style="color: #FF005C;"></i>
                                                                <span style="font-size: 14px;color: #FF005C;"
                                                                    class="me-2">Incidents</span>
                                                            </div>
                                                            <label style="font-size: 18px;color: #FF005C;"
                                                                class="me-2 mt-1">
                                                                {{ $reportCount }}
                                                            </label>
                                                        </div>
                                                        <div class="col ">
                                                            <div class="d-flex flex-wrap ">
                                                                <i class="ti ti-coin me-2" style="color: #2AD7B3"></i>
                                                                <span style="font-size: 14px;color: #2AD7B3;"
                                                                    class="me-2">Active Jobs</span>
                                                            </div>
                                                            <label style="font-size: 18px;color: #2AD7B3;"
                                                                class="me-2 mt-1">
                                                                {{ $yacht->jobPost->where('status', 'approved')->count() }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                        <nav aria-label="Page navigation" style="float: right;">
                            <ul class="pagination pagination-square pagination-secondary" id="pagination">
                                <!-- Dynamic pagination links will be inserted here -->
                            </ul>
                        </nav>
                    </div>
                    <!-- Left side area end col-lg-12 -->
                </div>
            </div>
            <!--/ Layout Demo -->
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection
