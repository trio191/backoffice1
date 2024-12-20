@extends('captain.layout.master')

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
                        <h3 class="text-white">New proposals for you</h3>
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
                                        {{ $applications->where('status', 'Rejected')->count() }}</h5>

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
                                        {{ $applications->where('status', 'Under Analysis')->count() }}</h5>

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
                                        {{ $applications->where('status', 'Hired')->count() }}</h5>

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
                                    <div class="col-lg-5">
                                        <form method="GET" action="{{ route('captain-applications.index') }}">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text" id="basic-addon-search31">
                                                    <i class="ti ti-search"></i>
                                                </span>
                                                <input type="text" name="search" class="form-control"
                                                    placeholder="Search..." aria-label="Search..."
                                                    aria-describedby="basic-addon-search31" value="{{ request('search') }}">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-7">
                                        <form method="GET" action="{{ route('captain-applications.index') }}"
                                            class="d-flex flex-wrap">
                                            <div class="dropdown">
                                                <button type="button" class="btn dropdown-toggle waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                                                    Status
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="?status=Hired">Hired</a></li>
                                                    <li><a class="dropdown-item" href="?status=Rejected">Rejected</a></li>
                                                    <li><a class="dropdown-item" href="?status=Under Analysis">Under
                                                            Analysis</a></li>
                                                </ul>
                                            </div>

                                            <!-- Jobs Dropdown -->
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

                                            <!-- Yachts Dropdown -->
                                            <div class="dropdown">
                                                <button type="button"
                                                    class="btn dropdown-toggle waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style="color: #00365E;">
                                                    All Yachts
                                                </button>
                                                <ul class="dropdown-menu">
                                                    @foreach ($yachts as $item)
                                                        <li><a class="dropdown-item"
                                                                href="?yacht_id={{ $item->id }}">{{ $item->yachtName }}</a>
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
                                    <td><span class="me-2">User name</span> <i class="fa fa-bars-staggered me-2"></i>
                                    </td>
                                    <td><span class="me-2">Application date</span> <i
                                            class="fa fa-bars-staggered me-2"></i></td>
                                    <td><span class="me-2">Message</span> <i class="fa fa-bars-staggered me-2"></i></td>
                                    <td><span class="me-2">Job Id</span> <i class="fa fa-bars-staggered me-2"></i></td>
                                    <td><span class="me-2">Offer</span> <i class="fa fa-bars-staggered me-2"></i></td>
                                    <td><span class="me-2">Status</span> <i class="fa fa-bars-staggered me-2"></i></td>
                                </tr>

                                @if ($applications->isEmpty())
                                    <tr class="border text-center" data-bs-toggle="offcanvas" data-bs-target="#createJob"
                                        aria-controls="createJob" style="color:#00365E;font-size: 14px;">
                                        <td colspan="6">
                                            <p>

                                                Sorry no application avalible for this job.
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @foreach ($applications as $item)
                                    <tr class="border" data-bs-toggle="offcanvas" data-bs-target="#createJob"
                                        aria-controls="createJob" style="color:#00365E;font-size: 14px;"
                                        data-id="{{ $item->id }}" data-job_title="{{ $item->job->job_title }}"
                                        data-status="{{ $item->status }}" data-applicant="{{ $item->user->firstName }}"
                                        data-client_location="{{ $item->client_location }}"
                                        data-date="{{ $item->date }}" data-workplan="{{ $item->work_plan }}"
                                        data-availability="{{ $item->available_date }}"
                                        data-timeframe="{{ $item->timeframe }}"
                                        data-labor-cost="{{ $item->labor_cost }}"
                                        data-material-cost="{{ $item->material_cost }}"
                                        data-total_cost="{{ $item->cost }}"
                                        data-payment_options="{{ $item->instalment }}"
                                        data-job_id="{{ $item->job->id }}" data-message="{{ $item->message }}">
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <div class="avatar me-2">
                                                    <img src="{{ asset('dashboard/assets/assets/img/avatars/3.png') }}"
                                                        alt="Avatar" class="rounded-circle">
                                                </div>
                                                <div class="ms-1">
                                                    <h6 class="mb-0" style="font-size: 12px;color: #00365E;">
                                                        {{ $item->user->firstName }}</h6>
                                                    <span style="color:#5E8BF7;font-size: 10px">All fix LDA</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <i class="ti ti-calendar me-1"></i>
                                                <span>

                                                    {{ \Carbon\Carbon::parse($item->created_at)->format('j M Y ') }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <label class="badge me-1" style="background-color: #FF005C;">new</label>
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
                                            <label
                                                class="badge @if ($item->status == 'Hired') bg-label-success 
                                              @elseif ($item->status == 'Under Analysis')
 bg-label-primary 
                                              @else 
 bg-label-danger @endif">
                                                <i class="ti ti-eye ti-xs me-1"></i>
                                                <span style="padding-top: 4px;"> {{ $item->status }} </span>
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


    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- Job Application modal -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="createJob" aria-labelledby="createJob"
        style="width: 500px !important;">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i
                    class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas"
                    aria-label="Close"></i>Job Application</h5>

        </div>
        <div class="offcanvas-body  mx-0 flex-grow-0">
            <div class="d-flex">
                <label class="badge bg-label-primary me-2">
                    <i class="ti ti-eye me-1 ti-xs"></i>
                    <span>Under analysis</span>
                </label>
                <label class="badge bg-label-danger me-2">
                    <i class="ti ti-circle-x me-1 ti-xs"></i>
                    <span>Refused</span>
                </label>
                <label class="badge bg-label-success me-2">
                    <i class="ti ti-briefcase me-1 ti-xs"></i>
                    <span>Hired</span>
                </label>
            </div>
            <h5 class="mt-3" id="job_title" style="color: #00365E;font-size: 20px;">The plastic on the roof needs
                replacement before
                winter</h5>
            <div class="d-flex">
                <span class="me-1" style="color:#5E8BF7;font-size:14px">#26789</span><i class="ti ti-upload ti-xs me-2"
                    style="color:#5E8BF7"></i>
                <div class="me-2" style="border-left: 1px solid #9CAFD1;height: 20px;"></div>
                <span style="color:#9CAFD1;font-size: 14px">Sunseeker Manhattan</span>
            </div>
            <div class="col-md-12 mb-4 mt-4">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="d-flex flex-wrap">
                            <div class="avatar me-3">
                                <img src="{{ asset('dashboard/assets/assets/img/avatars/3.png') }}" alt="Avatar"
                                    class="rounded-circle" style="width:40px;height: 40px">
                            </div>
                            <div>
                                <h6 class="mb-0" id="applicant_name" style="font-size: 14px;color: #00365E;">Tim Burton
                                </h6>
                                <small style="font-size:13px;color:#5E8BF7">All fix LDA</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label class="badge mt-2" style="background:#5E8BF7;color:#fff">Professional</label>
                    </div>
                    <div class="col-lg-5 " style="text-align: right;">
                        <p class="mt-2" style="color:#9CAFD1;font-size: 14px;"><i
                                class="ti ti-calendar ti-xs me-2"></i>16 Jan 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <p style="color: #00365E;font-size: 14px;">Hello there! Hope everything is going well. WE are a small
                    company but eager to work and with multiple professionals around hte word. Currently we have 1
                    professional in your location and ready to do the job that you requested.</p>
                <p style="color: #00365E;font-size: 14px;">Please check below the details and let me know if I can help you
                    with something else.</p>
            </div>
            <label class="mt-2" style="color:#00365E;font-size: 16px">Workplan</label>
            <p class="mt-2" id="workplan" style="color: #00365E;font-size: 14px;">Recoger trabajo, para cambio de
                ventana en el
                taller.
                after that we’ll check the sitaution and provide a global review
                Case there are some sitaution that we need to address we’ll contact you or request a change on the quotation
            </p>
            <label class="mt-2 mb-2" style="color:#00365E;font-size: 16px">Calendar</label>
            <div class="col-md-12 mb-2 p-2" style="border: 1px solid #C6D2E7;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex">
                            <i class="ti ti-calendar ti-xs me-2" style="color:#00365E"></i>
                            <span style="color:#00365E">Availability:</span>
                        </div>
                    </div>
                    <div class="col-lg-6" style="text-align: right">
                        <span id="availability" style="color:#00365E">20 Jan 2024</span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-2 p-2" style="border: 1px solid #C6D2E7;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex">
                            <i class="ti ti-clock ti-xs me-2" style="color:#00365E"></i>
                            <span style="color:#00365E">Timeframe:</span>
                        </div>
                    </div>
                    <div class="col-lg-6" style="text-align: right">
                        <span id="timeframe" style="color:#00365E">04 days</span>
                    </div>
                </div>
            </div>
            <label class="mt-4 mb-2" style="color:#00365E;font-size: 16px">Costs <span style="color: #9CAFD1">(labor and
                    material)</span></label>
            <div class="col-md-12 mb-2 p-2" style="border: 1px solid #C6D2E7;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex">
                            <i class="ti ti-coin ti-xs me-2" style="color:#00365E"></i>
                            <span style="color:#00365E">Labor cost:</span>
                        </div>
                    </div>
                    <div class="col-lg-6" style="text-align: right">
                        <span style="color:#00365E">15.500</span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-2 p-2" style="border: 1px solid #C6D2E7;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex">
                            <i class="ti ti-coin ti-xs me-2" style="color:#00365E"></i>
                            <span style="color:#00365E">Material cost:</span>
                        </div>
                    </div>
                    <div class="col-lg-6" style="text-align: right">
                        <span style="color:#00365E">2.500</span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-2 p-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex">
                            <span style="color:#9CAFD1">Total:</span>
                        </div>
                    </div>
                    <div class="col-lg-6" style="text-align: right">
                        <span id="total_cost" style="color:#9CAFD1">18.00</span>
                    </div>
                </div>
            </div>
            <label class="mt-2 mb-2" style="color:#00365E;font-size: 16px">Payment options</label>
            <div class="col-md-12 mb-2 p-2" style="border: 1px solid #C6D2E7;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex">
                            <i class="ti ti-credit-card ti-xs me-2" style="color:#00365E"></i>
                            <span style="color:#00365E">Payment options</span>
                        </div>
                    </div>
                    <div class="col-lg-6" style="text-align: right">
                        <span id="payment_options" style="color:#00365E">3 installments <span style="color:#9CAFD1">
                                (1000€/each)</span></span>
                    </div>
                </div>
            </div>
            <p style="color:#FF005C;font-size: 13px;"> <i class="ti ti-exclamation-mark"></i> First installment to be paid
                upon acceptance of the offer</p>
            <div class="col-lg-12">
                <div class="row" id="status_check">
                    <div class="col-lg-12">
                        <button type="button" id="accept-offer-btn" class="btn mb-2 d-grid w-100"
                            style="border-radius:0px !important;background: #2AD7B3;color: #fff;">Accept offer</button>
                    </div>
                    <div class="col-lg-6">
                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#requestNew"
                            aria-controls="requestNew" id="request-new-btn" class="btn mb-2 d-grid w-100"
                            style="border-radius:0px !important;background: #F2F6FA;color: #00365E;">Request new
                            offer</button>
                    </div>
                    <div class="col-lg-6">
                        <button type="button" class="btn d-grid w-100" data-bs-dismiss="offcanvas"
                            style="border-radius:0px !important;background: #FF005C0D;color: #FF005C;"
                            id="reject-offer-btn">
                            Reject offer
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- request New modal -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="requestNew" aria-labelledby="requestNew"
        style="width: 500px !important;">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i
                    class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas"
                    aria-label="Close"></i>Request new offer</h5>

        </div>
        <div class="offcanvas-body  mx-0 flex-grow-0">
            <div class="d-flex">
                <label class="badge bg-label-primary me-2">
                    <i class="ti ti-eye me-1 ti-xs"></i>
                    <span>Under analysis</span>
                </label>
                <label class="badge bg-label-danger me-2">
                    <i class="ti ti-circle-x me-1 ti-xs"></i>
                    <span>Refused</span>
                </label>
                <label class="mt-1">
                    <span style="color:#00365E;font-size: 13px">12 February 2024</span>
                </label>
            </div>
            <h5 class="mt-3" style="color: #00365E;font-size: 20px;">The plastic on the roof needs replacement before
                winter</h5>
            <div class="d-flex">
                <span class="me-1" style="color:#5E8BF7;font-size:14px">#26789</span><i class="ti ti-upload ti-xs me-2"
                    style="color:#5E8BF7"></i>
            </div>
            <div class="col-md-12 mb-4 mt-4">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="d-flex flex-wrap">
                            <div class="avatar me-3">
                                <img src="{{ asset('dashboard/assets/assets/img/avatars/4.png') }}" alt="Avatar"
                                    class="rounded-circle" style="width:40px;height: 40px">
                            </div>
                            <div>
                                <h6 class="mb-0" style="font-size: 14px;color: #00365E;">Tim Burton</h6>
                                <small style="font-size:13px;color:#5E8BF7">All fix LDA</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label class="badge mt-2" style="background:#5E8BF7;color:#fff">Professional</label>
                    </div>
                    <div class="col-lg-5 " style="text-align: right;">
                        <p class="mt-2" style="color:#9CAFD1;font-size: 14px;"><i
                                class="ti ti-calendar ti-xs me-2"></i>16 Jan 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <label style="color: #00365E;font-size: 16px;">Topics to change for the next offer</label>
                <p class="mt-2" style="color: #00365E;font-size: 14px;">Select the topics that the professional should
                    consider to change in the next offer</p>
            </div>

            <div class="col-md-12 mb-2">
                <div class="form-check mt-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1" style="font-size: 14px;color: #00365E;"> Workplan
                        not ideal </label>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1" style="font-size: 14px;color: #00365E;">
                        Availability - (too much to wait)</label>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1" style="font-size: 14px;color: #00365E;">
                        Timeframa - Job takes too long do be completed</label>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1" style="font-size: 14px;color: #00365E;"> Cost -
                        too expensive. Either reduce the labor or material cost</label>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1" style="font-size: 14px;color: #00365E;"> Payment
                        options - Increase the installments quantity</label>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1" style="font-size: 14px;color: #00365E;"> Payment
                        options - Reduce the installments quantity</label>
                </div>
            </div>
            <div class="col-lg-12 mt-4">
                <div class="row">
                    <div class="col-lg-6">
                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#requestNewOffer"
                            aria-controls="requestNewOffer" class="btn mb-2 d-grid w-100"
                            style="border-radius:0px !important;background: #5E8BF7;color: #fff;">Request new
                            offer</button>
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
    </div>

    <!-- Request New Offer modal -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="requestNewOffer" aria-labelledby="requestNewOffer"
        style="width: 500px !important;">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i
                    class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas"
                    aria-label="Close"></i>Job Application</h5>

        </div>
        <div class="offcanvas-body  mx-0 flex-grow-0">
            <h5 class="mt-3" style="color: #00365E;font-size: 20px;">The plastic on the roof needs replacement before
                winter</h5>
            <div class="d-flex">
                <label class="badge  me-2" style="background:#00365E;color:#fff">
                    <i class="ti ti-star me-1 ti-xs"></i>
                    <span>Verified</span>
                </label>
                <label class="mt-1">
                    <span style="color:#5E8BF7;font-size:13px">#34563</span>
                </label>

            </div>

            <div class="col-md-12 mb-4 mt-4">
                <div class="row">
                    <div class="col-lg-6 mb-2">
                        <div style="border: 1px solid #C6D2E7;padding: 10px;">
                            <p class="mb-0" style="color:#00365E;font-size: 14px;">Deliver by:<strong>12 Dec
                                    2024</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-2">
                        <div style="border: 1px solid #C6D2E7;padding: 10px;">
                            <p class="mb-0" style="color:#00365E;font-size: 14px;">Yacht Size: <strong>0 - 10
                                    meters</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-2">
                        <div style="border: 1px solid #C6D2E7;padding: 10px;">
                            <p class="mb-0" style="color:#00365E;font-size: 14px;">Manufatorer:<strong>Admiral</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-2">
                        <div style="border: 1px solid #C6D2E7;padding: 10px;">
                            <p class="mb-0" style="color:#00365E;font-size: 14px;">Surveyor:<strong>Yes</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <label style="color: #00365E;font-size: 16px;">Message</label>
                <div class="form-group mt-3" style="position: relative;">
                    <textarea type="text" class="form-control" rows="5" style="border-radius:0px"
                        placeholder="Why are you suitable for this job?" name=""></textarea>
                    <small style="font-size:14px;color: #9CAFD1;">0 of 3000 max characters.</small>
                </div>
            </div>

            <div class="col-md-12 mb-4">
                <label style="color: #00365E;font-size: 16px;">Availability</label>
                <div class="input-group input-group-merge mt-3" style="border-radius: 0px !important">
                    <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important"><i
                            class="ti ti-calendar"></i></span>
                    <input type="text" class="form-control flatpickr-input active" placeholder="YYYY-MM-DD"
                        id="flatpickr-date" readonly="readonly">
                    <label class="labelOwn" style="color:#5E8BF7">Available after</label>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <label style="color: #00365E;font-size: 16px;">Timeframe</label>
                <div class="input-group input-group-merge mt-3" style="border-radius: 0px !important">
                    <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important"><i
                            class="ti ti-clock"></i></span>
                    <input type="text" class="form-control " placeholder="Timeframe for completing the job">
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <label style="color: #00365E;font-size: 16px;">Workplan</label>
                <div class="form-group mt-3" style="position: relative;">
                    <textarea type="text" class="form-control" rows="5" style="border-radius:0px"
                        placeholder="Please describe your work plan" name=""></textarea>
                    <small style="font-size:14px;color: #9CAFD1;">0 of 3000 max characters.</small>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <label style="color: #00365E;font-size: 16px;">Costs<span style="color:#9CAFD1">(labor and
                        material)</span></label>
                <div class="input-group input-group-merge mt-3" style="border-radius: 0px !important">
                    <span class="input-group-text" id="basic-addon-search31"
                        style="border-radius: 0px !important">EUR</span>
                    <input type="text" class="form-control" placeholder="3400">
                    <label class="labelOwn" style="color:#5E8BF7">Labor cost</label>
                </div>
                <div class="input-group input-group-merge mt-3" style="border-radius: 0px !important">
                    <span class="input-group-text" id="basic-addon-search31"
                        style="border-radius: 0px !important">EUR</span>
                    <input type="text" class="form-control" placeholder="Material cost">
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <div class="w-100" style="background:#F2F6FA;padding: 10px;">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex">
                                <i class="ti ti-coin ti-xs me-2" style="color:#9CAFD1"></i>
                                <span style="color:#9CAFD1">Total cost</span>
                            </div>
                        </div>
                        <div class="col-lg-6" style="text-align: right">
                            <span style="color:#9CAFD1">3400</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <label style="color: #00365E;font-size: 16px;">Payment options</label>
                <select class="selectpicker w-100 show-tick mt-2" id="selectpickerIcons" data-icon-base="ti"
                    data-tick-icon="ti-check" data-style="btn-default" style="border-radius: 0px !important;">
                    <option data-icon="ti ti-credit-card">3 Installments (1000€/each)</option>
                    <option data-icon="ti ti-brand-pinterest">Pinterest</option>
                    <option data-icon="ti ti-brand-twitch">Twitch</option>
                </select>
            </div>
            <div class="col-lg-12 mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <button type="button" class="btn mb-2 d-grid w-100"
                            style="border-radius:0px !important;background: #5E8BF7;color: #fff;">Apply for this
                            job</button>
                    </div>

                </div>
                <p style="color: #FF005C;font-size: 13px;">
                    <i class="ti ti-exclamation-mark"></i>
                    Your proposal will be reviewed and you will get an email with the job owner decision.
                </p>
            </div>
        </div>
    </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('tr[data-bs-toggle="offcanvas"]').forEach(function(row) {
                row.addEventListener('click', function() {
                    // Fetch data from data attributes
                    const job_title = this.dataset.job_title;
                    const client = this.dataset.applicant;
                    const workplan = this.dataset.workplan;
                    const availability = this.dataset.availability;
                    const timeframe = this.dataset.timeframe;

                    const total_cost = this.dataset.total_cost;
                    const payment_options = this.dataset.payment_options;

                    const status = this.dataset.status;





                    // Update Offcanvas content
                    document.getElementById('job_title').textContent = job_title || 'N/A';
                    document.getElementById('applicant_name').textContent = client || 'N/A';
                    document.getElementById('workplan').textContent = workplan || 'N/A';
                    document.getElementById('availability').textContent = availability || 'N/A';
                    document.getElementById('timeframe').textContent = timeframe || 'N/A';

                    document.getElementById('total_cost').textContent = total_cost || 'N/A';
                    document.getElementById('payment_options').textContent = payment_options ||
                        'N/A';



                    // Replace with actual status value
                    const acceptOfferButton = document.getElementById('accept-offer-btn');
                    if (status.toLowerCase() == 'Hired') {

                        acceptOfferButton.disabled = true;
                        acceptOfferButton.style.background =
                            '#ccc'; // Optional: change color when disabled
                        acceptOfferButton.style.cursor =
                            'not-allowed'; // Optional: change cursor to indicate disabled
                    }

                });
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add click event listener to each row with the offcanvas toggle
            document.querySelectorAll('tr[data-bs-toggle="offcanvas"]').forEach(row => {
                row.addEventListener('click', function() {
                    // Remove 'active' class from all rows
                    document.querySelectorAll('tr[data-bs-toggle="offcanvas"]').forEach(r => r
                        .classList.remove('active'));
                    // Add 'active' class to the clicked row
                    this.classList.add('active');
                });
            });

            const acceptOfferButton = document.getElementById('accept-offer-btn');
            const rejectOfferButton = document.getElementById('reject-offer-btn');

            // Event listener for "Accept offer"
            acceptOfferButton.addEventListener('click', function() {
                const activeRow = document.querySelector('tr[data-bs-toggle="offcanvas"].active');
                if (activeRow) {
                    const applicationId = activeRow.dataset.id;
                    const jobId = activeRow.dataset.job_id;
                    updateApplicationStatus(applicationId, 'Hired', jobId, 'Completed');
                } else {
                    console.error('No active row found!');
                }
            });

            // Event listener for "Reject offer"
            rejectOfferButton.addEventListener('click', function() {
                const activeRow = document.querySelector('tr[data-bs-toggle="offcanvas"].active');
                if (activeRow) {
                    const applicationId = activeRow.dataset.id;
                    updateApplicationStatus(applicationId, 'rejected');
                } else {
                    console.error('No active row found!');
                }
            });
        });


        function updateApplicationStatus(applicationId, appStatus, jobId = null, jobStatus = null) {
            const payload = {
                application_status: appStatus,
            };

            // Only add job_id and job_status if they are provided
            if (jobId && jobStatus) {
                payload.job_id = jobId;
                payload.job_status = jobStatus;
            }

            fetch(`/captain/applications/${applicationId}`, {
                    method: 'PUT', // Use PUT for update requests
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify(payload)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const statusCell = document.querySelector(`tr[data-id="${applicationId}"] .status-cell`);
                        if (statusCell) {
                            statusCell.textContent = appStatus === 'Hired' ? 'Completed' :
                                'Rejected'; // Update the status display
                        }

                        // Optional: Disable the accept button if the status is hired
                        if (appStatus === 'Hired') {
                            const acceptOfferButton = document.getElementById('accept-offer-btn');
                            if (acceptOfferButton) {
                                acceptOfferButton.disabled = true;
                                acceptOfferButton.style.background = '#ccc';
                                acceptOfferButton.style.cursor = 'not-allowed';
                            }
                        }

                        // Reload the page to reflect all changes
                        location.reload();
                    } else {
                        alert("Error updating status. Please try again.");
                    }
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
@endsection
