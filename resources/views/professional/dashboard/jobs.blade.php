@extends('professional.layouts.master')
@section('content')
    <style type="text/css">
        .navbar {
            background-color: #e5eaf4;
            padding: 15px;
        }

        .navbar-nav .nav-link {
            color: #000;
            font-weight: bold;
            margin-right: 15px;
        }

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

    <!-- Content -->
    <div class="layout-demo-wrapper"
        style="background-image: url('dashboard/assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
        <div class="overlay"></div> <!-- Overlay -->
        <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
            <!-- Text container -->
            <div class="row pt-2">
                <div class="col-lg-7 text-white">
                    <h3 class="text-white">Find the right professional</h3>

                </div>
                <div class="col-lg-5" style="text-align: right;">
                </div>
            </div>
        </div>
    </div>
    <div style="background: white; border-bottom: 1px solid #eee;postion:relative">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; gap: 20px; padding: 0 20px;">
            <a href="{{ route('professional-dashboard.index') }}"> <button
                    style="background: none; border: none; padding: 15px 20px; cursor: pointer;">Available
                    jobs</button></a>
            <a href="{{ route('professional.dashboard.myjobs') }}"><button
                    style="background: #4285f4; color: white; border: none; padding: 15px 20px; cursor: pointer;">My
                    Jobs</button></a>
            <a href="{{ route('professional-bookedmark.jobs') }}"><button
                    style="background: none; border: none; padding: 15px 20px; cursor: pointer;">Bookmarked</button></a>
        </div>
    </div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Layout Demo -->

        <div class="col-lg-12 mt-5">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card"
                        style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                style="background-color:#F2F6FA !important">
                                <i class="ti ti-coin ti-sm" style="color:#00365E"></i>
                            </div>
                            <div class="card-info">
                                <small style="font-size: 11px">Total Invested</small>
                                <h5 class="mb-0" style="color: #00365E">{{ $jobs->sum('budget') }}€</h5>

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
                                <i class="ti ti-briefcase ti-sm" style="color:#00365E"></i>
                            </div>
                            <div class="card-info">
                                <small style="font-size: 11px">Jobs posted</small>
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
                                <i class="ti ti-file-export ti-sm" style="color:#00365E"></i>
                            </div>
                            <div class="card-info">
                                <small style="font-size: 11px">Applications received</small>
                                <h5 class="mb-0" style="color: #00365E">
                                    {{ $jobs->count() }}

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
                               <h5>
                                    {{ $jobs->where('status', 'Hired')->count() }}

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
                            <label style="font-size: 18px;color: #00365E;padding-top: 5px;" class="me-2">Job list</label>
                            <label class="badge bg-label-primary rounded-pill "
                                style="color: #00365E !important">{{ $jobs->count() }}</label>
                        </div>
                        <div class="col-lg-7" style="text-align: right;color: #00365E;">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-6">
                                    <form method="GET" action="{{ route('professional.dashboard.myjobs') }}"
                                        class="input-group input-group-merge">
                                        <span class="input-group-text" id="basic-addon-search31"><i
                                                class="ti ti-search"></i></span>
                                        <input type="text" name="search" class="form-control" placeholder="Search..."
                                            aria-label="Search..." aria-describedby="basic-addon-search31"
                                            value="{{ request('search') }}">
                                    </form>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex flex-wrap">
                                        <!-- Dropdown button for sorting by status -->
                                        <button type="button" class="btn dropdown-toggle waves-effect waves-light"
                                            data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                                            Order By
                                        </button>

                                        <!-- Dropdown menu -->
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('professional.dashboard.myjobs', ['status' => 'Under Analysis']) }}">Under
                                                    Analysis</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('professional.dashboard.myjobs', ['status' => 'Hired']) }}">Hired</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('professional.dashboard.myjobs', ['status' => 'Rejected']) }}">Rejected</a>
                                            </li>
                                        </ul>

                                        <button type="button" class="btn " style="color: #9CAFD1;">
                                            <a href="{{ route('professional.dashboard.myjobs') }}">Reset</a>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- Cards area  -->
                    @if ($jobs->isNotEmpty())
                        @foreach ($jobs as $item)
                            <div class="col-lg-12 mb-3 mt-4" style="border: 1px solid #C6D2E7;padding: 20px">
                                <div class="row">
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset($item->job->images) }}" style="width: 96px;height:96px">
                                    </div>
                                    <div class="col-lg-9" style="color:#00365E">
                                        <div class="row">
                                            <div style="display: flex">
                                                <span class="badge me-2" style="background: #5E8BF7;height: 30px;"><i
                                                        class="ti ti-circle-check me-1 ti-xs"></i>{{ $item->status }}</span>
                                                <span class="me-2 vertical-line"
                                                    style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#{{ $item->job->id }}</span>
                                                <span class="me-2 vertical-line"
                                                    style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">{{ $item->job->created_at->format('j M Y') }}</span>
                                                <span class="me-2 vertical-line"
                                                    style="padding-top: 5px; color: #9CAFD1;font-size: 13px;"><img
                                                        src="{{ asset('/dashboard/assets/img/yacht.png') }}"
                                                        class="me-1" />
                                                    {{ $item->job->yacht->yachtName }}</span>
                                                <span class="me-2 vertical-line"
                                                    style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">


                                                    @if ($item->job->require_surveyor == 'yes')
                                                        <img src="/dashboard/assets/img/check.png" class="me-1" />
                                                        Surveyor
                                                    @endif
                                                </span>

                                            </div>
                                        </div>
                                        <p style="" class="mt-1">{{ $item->job->job_title }}</p>
                                        <p style="margin-top:-15px;font-size:12px;">
                                            {{ Str::words($item->job->job_description, 20, '...') }}</p>

                                    </div>
                                    <div class="col-lg-1" style="text-align: right;">
                                        {{-- <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i> --}}

                                    </div>
                                    <div class="col-lg-2">
                                    </div>


                                </div>
                                <div class="row mt-1" style="border-top: 1px solid #C6D2E7;margin-left: -20px;margin-right: -20px;padding: 15px;padding-bottom: 0px !important;color: #00365E;">
                                    <div class="col-lg-4 " style="border-right: 1px solid #9CAFD1;">
                                        <div class="d-flex flex-wrap ">
                                            <i class="ti ti-coin me-2"></i>
                                            <span style="font-size: 14px;" class="me-2">Budget range:</span>
                                            <span style="font-size: 14px;" class="me-2">up to
                                                {{ $item->job->budget }}€</span>
                                                @if ($item->job->budget_flexible)
                                                    
                                            <span class="badge bg-label-success"
                                                style="background: #2AD7B30D;  ">Flexible</span>
                                                @endif

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex flex-wrap">
                                            <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                                            <span style="font-size: 14px;" class="me-2">Delivery by:</span>
                                            <span style="font-size: 14px;"
                                                class="me-2">{{ $item->job->delivery_date->format('j M Y') }}</span>

                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="d-flex flex-wrap">
                                            <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                                            <span style="font-size: 14px;" class="me-2">Location:</span>
                                            <span style="font-size: 14px;"
                                                class="me-2">{{ $item->job->yacht->portBase }}</span>

                                        </div>
                                    </div>
                                </div>


                                <div class="row mt-1"
                                    style="border-top: 1px solid #C6D2E7;margin-left: -20px;margin-right: -20px;padding: 15px;padding-bottom: 0px !important;color: #00365E;">

                                    <div class="col-lg-2" style="border-right: 1px solid #9CAFD1;">
                                        <div class="d-flex flex-wrap">
                                            <i class="fa fa-file-import me-2" style="padding-top: 3px;"></i>
                                            <span style="font-size: 14px;"
                                                class="me-2">{{ $item->available_date->format('j M Y') }}</span>

                                        </div>
                                    </div>

                                    <div class="col-lg-3" style="border-right: 1px solid #9CAFD1;">
                                        <div class="d-flex flex-wrap text-muted">
                                            {{-- <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i> --}}
                                            <span style="font-size: 14px;" class="me-2">Applications:</span>
                                            <span style="font-size: 14px;"
                                                class="me-2">{{ $item->job->applications->count() }}</span>

                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="d-flex flex-wrap">
                                            <i class="ti ti-coin me-2"></i>
                                            <span style="font-size: 14px;" class="me-2">{{ $item->cost }}</span>
                                            <span style="font-size: 14px;"
                                                class=" badge bg-label-primary me-2">{{ $item->instalment }}</span>


                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div>
                                            <span
                                                class=" badge 
                                                @if ($item->status ==='Hired')
                                                    bg-label-success
                                                @elseif ($item->status ==='Rejected')
                                                      bg-label-danger
                                                    @else
                                                    bg-label-primary
                                                @endif
                                                
                                                 "><small>{{ $item->status }}</small></span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        @endforeach
                    @else
                        <div class="col-lg-12 mb-3 mt-4" style="border: 1px solid #C6D2E7;padding: 20px">
                            <div class="row text-center">
                                <div class="col-lg-12">
                                    No Job Avaible
                                </div>
                            </div>
                        </div>
                    @endif




                    @if ($jobs->isNotEmpty())
                        <nav aria-label="Page navigation" style="float: right;">
                            {{ $jobs->links('vendor.custom-pagination') }}
                        </nav>
                    @endif
                </div>
                <!-- Left side area end col-lg-12  -->


            </div>
        </div>
        <!--/ Layout Demo -->
    </div>
    <!-- / Content -->

    <!-- Footer -->

    <!-- / Footer -->

    <div class="content-backdrop fade"></div>


    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!-- / Layout wrapper -->
@endsection
