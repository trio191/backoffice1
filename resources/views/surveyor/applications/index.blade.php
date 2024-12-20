@extends('surveyor.layouts.master')
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

        tr {
            margin-bottom: 20px !important;
            /* Add space between each row */
        }
    </style>
    <!-- / Navbar -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Layout Demo -->
            <div class="layout-demo-wrapper"
                style="background-image: url('dashboard/assets/img/bg.png'); height: 100px; background-size: 100% 100%; margin-left: -25px; margin-right: -23px; margin-top: -20px; padding: 20px; position: relative;">
                <div class="overlay"></div> <!-- Overlay -->
                <div class="col-lg-12 text-container"> <!-- Text container -->
                    <div class="row pt-2">
                        <div class="col-lg-7 text-white">
                            <h3 class="text-white">Follow my applications</h3>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <h5 class="mb-0" style="color: #00365E">{{$jobs->count()}}</h5>

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
                                        {{$applications->where('status','Rejected')->count()}}
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

                                        {{$applications->count()}}
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
                                        {{$applications->where('status','Hired')->count()}}
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
                                        <form method="GET" action="{{ route('surveyor-applications.index') }}">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text" id="basic-addon-search31"><i
                                                        class="ti ti-search"></i></span>
                                                <input type="text" name="search" class="form-control"
                                                    placeholder="Search..." aria-label="Search..."
                                                    aria-describedby="basic-addon-search31" value="{{ request('search') }}">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="d-flex flex-wrap">
                                            <!-- Dropdown for Status Filter -->
                                            <div class="dropdown">
                                                <button type="button" class="btn dropdown-toggle waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                                                    Status
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <!-- Preserve existing search query when filtering by status -->
                                                    <li>
                                                        <a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['status' => 'Hired']) }}">Hired</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['status' => 'Rejected']) }}">Rejected</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['status' => 'Under Analysis']) }}">
                                                            Under Analysis
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    
                                            <!-- Reset Button -->
                                            <a href="{{ route('owner-applications.index') }}" class="btn waves-effect waves-light ms-2"
                                                style="color: #00365E;">
                                                Reset
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>



                        <!-- Cards area  -->

                        <div class="col-lg-12 mt-4 mb-4">
                            <table class="table table-responsive">
                                <tr style="font-size: 14px">
                                    <td><span class="me-2">Application date</span> <i
                                            class="fa fa-bars-staggered me-2"></i></td>
                                    <td><span class="me-2">Message</span> <i class="fa fa-bars-staggered me-2"></i></td>
                                    <td><span class="me-2">Job Id</span> <i class="fa fa-bars-staggered me-2"></i></td>
                                    <td><span class="me-2">Offer</span> <i class="fa fa-bars-staggered me-2"></i></td>
                                    <td><span class="me-2">Status</span> <i class="fa fa-bars-staggered me-2"></i></td>
                                </tr>


                                @if ($applications->isEmpty())
                                <tr class="border my-2 text-center" style="color:#00365E;font-size: 14px;">
                                    <td colspan="5">
                                        <p>
                                            No Applicaiotns
                                        </p>
                                    </td>
                                </tr>
                                @endif
                                @foreach ($applications as $item)
                                    <tr class="border my-2" style="color:#00365E;font-size: 14px;">

                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <i class="ti ti-calendar me-1"></i>
                                                <span>{{ $item->created_at->format('d/m/Y') }}</span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <label class="badge me-1" style="background-color: #FF005C;">new</label>
                                                <span style="font-size: 12px;padding-top: 4px;">
                                                    {{ $item->job->job_title }}
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <span style="color: #5E8BF7">#{{ $item->job->id }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <i class="ti ti-coin me-1"></i>
                                                <span style="font-size: 12px;padding-top: 2px;">{{ $item->cost }}€</span>
                                            </div>
                                        </td>
                                        <td>
                                            <label
                                                class="badge @if ($item->status == 'Accepted') bg-label-success
                                            @elseif ($item->status == 'rejected')
                                    bg-label-danger
                                            @else
bg-label-primary @endif ">
                                                <i class="ti ti-eye ti-xs me-1"></i>
                                                <span style="padding-top: 4px;">{{ $item->status }}</span>
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
    </div>
    <!-- / Layout wrapper -->
@endsection
