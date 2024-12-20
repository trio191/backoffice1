@extends('admin.layout.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="layout-demo-wrapper"
            style="background-image: url('/dashboard/assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px; position: relative;padding-bottom: 20px;">
            <div class="overlay"></div>
            <!-- Overlay -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Text container -->
                        <div class="row pt-2 text-white">
                            <div class="col-lg-7 text-light">
                                <h3 class="text-white">Manage yachts and Vessels</h3>
                            </div>
                            <div class="col-lg-5" style="text-align: right;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Layout Demo -->
            <form class="row mt-2" method="GET" action="{{ route('admin.yachts') }}">

                <div class="col-12 col-md">
                    <input type="text" class="form-control" name="search" value="{{ request('search') }}"
                        placeholder="Search by user or yacht name">
                </div>
                <div class="col-6 col-md-auto">
                    <select class="form-select" name="portBase" aria-label="Select location">
                        <option selected disabled>Location</option>
                        @foreach ($yachts as $item)
                            <option> {{ $item->portBase }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6 col-md-auto">
                    <select class="form-select" name="yachtSize" aria-label="Select yacht size">
                        <option selected disabled>Yacht size</option>
                        <option value="50" {{ request('yachtSize') == 50 ? 'selected' : '' }}>Small</option>
                        <option value="100" {{ request('yachtSize') == 100 ? 'selected' : '' }}>Medium</option>
                        <option value="200" {{ request('yachtSize') == 200 ? 'selected' : '' }}>Large</option>
                        <option value="300" {{ request('yachtSize') == 300 ? 'selected' : '' }}>Ex Large</option>
                    </select>
                </div>
                <div class="col-12 col-md-auto">
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                </div>
            </form>
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
                                    <h5 class="mb-0" style="color: #00365E"> 
                                        {{ $yachts->sum(function($yacht) {
                                            return $yacht->jobPost->where('status','hired')->sum('budget');
                                        }) }}
                                        €</h5>
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

                                    <small style="font-size: 11px">Total Yachts</small>
                                    <h5 class="mb-0" style="color: #00365E">
                                        {{ $yachts->count() }}
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
                                    <small style="font-size: 11px">Without Captain</small>
                                    <h5 class="mb-0" style="color: #00365E">
                                        {{$yachtsWithoutCaptain}}
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
                                    <small style="font-size: 11px">Without Job</small>


                                    <h5 class="mb-0" style="color: #FF005C">
                                        {{$yachtsWithoutJobs}}
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
                                    <div class="col-lg-9">
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="d-flex flex-wrap">
                                            <div class="dropdown">
                                                <button type="button"
                                                    class="btn dropdown-toggle waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style="color: #00365E;">
                                                    Order By:
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.yachts', array_merge(request()->all(), ['orderBy' => 'desc'])) }}">
                                                            Newest
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.yachts', array_merge(request()->all(), ['orderBy' => 'asc'])) }}">
                                                            Oldest
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
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
                            <div class="col-lg-12  my-3" style="border: 1px solid #C6D2E7;">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-center" >
                                        <img src="{{ asset($yacht->image) }}"
                                            style="width: 100%;height:177px ;padding-top: 0px !important;" >
                                    </div>
                                    <div class="col-lg-9 ">
                                        <div class="row">
                                            <div class="col-lg-8" style="color:#00365E">
                                                <div class="row">
                                                    <h4 style="font-size: 20px;color: #00365E;">{{ $yacht->yachtName }}
                                                    </h4>
                                                    <div style="display: flex;margin-top: -15px;">
                                                        <span class="me-3 "
                                                            style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Mooring:
                                                            <span style="color:#00365E">{{ $yacht->mooringNumber }}</span>
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
                                                                {{ \Carbon\Carbon::parse($yacht->updated_at)->format('d F Y') }}
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4" style="">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div class="d-flex flex-wrap" style="text-align: left">
                                                            @foreach ($yacht->teamMembers->take(2) as $teamMember)
                                                                @if ($teamMember->user_type == 'Captain')
                                                                    <div class="avatar me-3">
                                                                        <img src="{{ asset('dashboard/assets/img/profile.jpg') }}" alt="Avatar" class="rounded-circle">
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-0">
                                                                            {{ $teamMember->firstname }}
                                                                        </h6>
                                                                        <small>
                                                                            {{ $teamMember->user_type }}
                                                                        </small>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <i class="ti ti-dots-vertical"
                                                            style="color: #9CAFD1;margin-right: -10px !important;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <center>
                                                <div class="mt-3" style="width: 99.8%;border-top: 1px solid #9CAFD1;">
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
                                                        <label style="font-size: 18px;" class="me-2 mt-1">
                                                            {{ $yacht->jobPost->sum('budget') }}
                                                            €</label>
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
                                                     
                                                        {{ $yacht->jobPost->sum(fn($job) => $job->applications->count()) }}
                                                    </div>
                                                    <div class="col " style="border-right: 1px solid #9CAFD1;">
                                                        <div class="d-flex flex-wrap ">
                                                            <i class="ti ti-coin me-2" style="color: #FF005C;"></i>
                                                            <span style="font-size: 14px;color: #FF005C;"
                                                                class="me-2">Incidents</span>
                                                        </div>
                                                        <label style="font-size: 18px;color: #FF005C;" class="me-2 mt-1">
                                                            {{ $reportCount }}
                                                        </label>
                                                    </div>
                                                    <div class="col ">
                                                        <div class="d-flex flex-wrap ">
                                                            <i class="ti ti-coin me-2" style="color: #2AD7B3"></i>
                                                            <span style="font-size: 14px;color: #2AD7B3;"
                                                                class="me-2">Active Jobs</span>
                                                        </div>
                                                        <label style="font-size: 18px;color: #2AD7B3;" class="me-2 mt-1">
                                                            {{ $yacht->jobPost->where('status', 'approved')->count() }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @if ($yachts->isNotEmpty())
                            <nav aria-label="Page navigation" style="float: right;">
                                {{ $yachts->links('vendor.custom-pagination') }}
                            </nav>
                        @endif
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
