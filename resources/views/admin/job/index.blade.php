@extends('admin.layout.master')
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
            style="background-image: url('/dashboard/assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
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
                                    <h5 class="mb-0" style="color: #00365E">
                                        {{ $jobs->where('status', 'hired')->sum('budget') }} €</h5>
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
                                    <h5 class="mb-0" style="color: #00365E">

                                        {{ $jobs->count() }}
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
                                        {{ $applications->count() }}
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
                                        {{ $applications->where('status', 'accepted')->count() }}
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
                    <div class="col-lg-12 ">
                        <div class="row py-3">
                            <div class="col-lg-5">
                                <i class="ti ti-clipboard-check ti-md" style="color: #00365E"></i>
                                <label style="font-size: 18px;color: #00365E;padding-top: 5px;" class="me-2">Job
                                    list</label>
                                <label class="badge bg-label-primary rounded-pill " style="color: #00365E !important">
                                    {{ $jobs->count() }}</label>
                            </div>
                            <div class="col-lg-7" style="text-align: right;color: #00365E;">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <form class="input-group input-group-merge" method="GET"
                                            action="{{ route('admin.job') }}">
                                            <span class="input-group-text" id="basic-addon-search31"><i
                                                    class="ti ti-search"></i></span>
                                            <input type="text" class="form-control" placeholder="Search..."
                                                value="{{ request('search') }}" name="search" aria-label="Search..."
                                                aria-describedby="basic-addon-search31">
                                        </form>
                                    </div>
                                    <div class="col-lg-7">
                                        <form class="input-group flex-wrap" method="GET"
                                            action="{{ route('admin.job') }}">
                                            <div class="dropdown me-2">
                                                <select name="crew_type" class="form-select border-0"
                                                    onchange="this.form.submit()">
                                                    <option value="">All Crew</option>
                                                    <option value="Captain"
                                                        {{ request('crew_type') == 'Captain' ? 'selected' : '' }}>Captain
                                                    </option>
                                                    <!-- Add more options here -->
                                                </select>
                                            </div>
                                            <div class="dropdown me-2">
                                                <select name="status" class="form-select border-0"
                                                    onchange="this.form.submit()">
                                                    <option value="">Order By</option>
                                                    <option value="hired"
                                                        {{ request('status') == 'hired' ? 'selected' : '' }}>Hired</option>
                                                    <option value="waiting"
                                                        {{ request('status') == 'waiting' ? 'selected' : '' }}>Waiting
                                                    </option>
                                                    <option value="approved"
                                                        {{ request('status') == 'approved' ? 'selected' : '' }}>Approved
                                                    </option>

                                                    <!-- Add more options here -->
                                                </select>
                                            </div>
                                            <a href="{{ route('admin.job') }}" class="btn ">Reset</a>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Cards area  -->

                        @if ($jobs->isEmpty())
                            <div class="col-lg-12 mb-3 mt-4 text-center" style="border: 1px solid #C6D2E7;padding: 20px">
                                <div class="row">
                                    <div class="col-lg-12">
                                        No Job Avalible
                                    </div>
                                </div>
                            </div>
                        @endif
                        @foreach ($jobs as $job)
                            @if ($job->status == 'approved')
                                <div class="col-lg-12 mb-3 mt-4" style="border: 1px solid #C6D2E7;padding: 20px">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <img src="{{ asset($job->images) }}" style="width: 100%">
                                        </div>
                                        <div class="col-lg-9" style="color:#00365E">

                                            <div class="row">
                                                <div style="display: flex">
                                                    <span class="badge me-2" style="background: #5E8BF7;height: 30px;"><i
                                                            class="ti ti-circle-check me-1 ti-xs"></i>Active</span>
                                                    <span class="me-2 vertical-line"
                                                        style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#
                                                        {{ $job->id }}
                                                    </span>
                                                    <span class="me-2 vertical-line"
                                                        style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">

                                                   {{ \Carbon\Carbon::parse($job->created_at)->format('d M Y') }}

                                                    </span>
                                                    <span class="me-2 vertical-line"
                                                        style="padding-top: 5px; color: #9CAFD1;font-size: 13px;"><img
                                                            src="/dashboard/assets/img/yacht.png" class="me-1" />
                                                        {{ $job->yacht->yachtName }}
                                                    </span>
                                                    <span class="me-2 vertical-line"
                                                        style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                                        @if ($job->require_surveyor)
                                                            <img src="dashboard/assets/img/check.png"
                                                                class="me-1" />Surveyor
                                                    </span>
                            @endif
                    </div>
                </div>
                <p style="" class="mt-1">
                    {{ $job->job_title }}
                </p>
                <p style="margin-top:-15px;font-size:12px;">
                    {{ Str::words($job->job_description, 40, '...') }}</p>
            </div>
            <div class="col-lg-1" style="text-align: right;">
                <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>

            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-7" style="margin-top: -20px">
                <div class="d-flex flex-wrap" style="margin-top: -7px">
                    <div class="avatar me-3">
                        <img src="{{ asset($job->user->profile_image) }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <div>
                        <p class=" mt-2" style="font-size: 14px;color: #00365E;">
                            {{ $job->user->firstName . ' ' . $job->user->lastName }}
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
                    <span style="font-size: 14px;" class="me-2">up to {{ $job->budget }}</span>
                    <span
                        class="badge 
                                                @if ($job->budget_flexible == 'yes') bg-label-success
                                                @else
                                                      bg-label-secondary @endif
                                                ">Flexible</span>
                </div>
            </div>
            <div class="col-lg-5" style="color:#1CBDA0">
                <div class="d-flex flex-wrap">
                    <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                    <span style="font-size: 14px;" class="me-2">Applications:</span>
                    <span style="font-size: 14px;" class="me-2">
                        {{ $job->applications->count() }}
                    </span>

                </div>
            </div>
        </div>
    </div>
@elseif ($job->status == 'waiting')
    <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;padding: 20px">
        <div class="row">
            <div class="col-lg-2">
                <img src=" {{ asset($job->images) }}" style="width: 100%">
            </div>
            <div class="col-lg-9" style="color:#00365E">


                <div class="row">
                    <div style="display: flex">
                        <span class="badge bg-label-primary me-2" style="height: 30px;"><i
                                class="ti ti-eye me-1 ti-xs"></i>Waiting</span>
                        <span class="me-2 vertical-line"
                            style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#{{ $job->id }}</span>
                        <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">

                            {{ \Carbon\Carbon::parse($job->created_at)->format('d M Y') }}
                        
                        </span>
                        <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;"><img
                                src="/dashboard/assets/img/yacht.png" class="me-1" />
                            {{ $job->yacht->yachtName }}
                        </span>
                        <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">

                            @if ($job->require_surveyor)
                                <img src="dashboard/assets/img/check.png" class="me-1" />Surveyor
                        </span>
                        @endif

                    </div>
                </div>
                <p style="" class="mt-1"> {{ $job->job_title }}</p>
                <p style="margin-top:-15px;font-size:12px;">
                    {{ Str::words($job->job_description, 40, '...') }}
                </p>

            </div>
            <div class="col-lg-1" style="text-align: right;">
                <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>

            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-7" style="margin-top: -20px">
                <div class="d-flex flex-wrap" style="margin-top: -7px">
                    <div class="avatar me-3">
                        <img src="{{ asset($job->user->profile_image) }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <div>
                        <p class=" mt-2" style="font-size: 14px;color: #00365E;">
                            {{ $job->user->firstName . ' ' . $job->user->lastName }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 " style="text-align: right;margin-top: -40px">
                {{-- <button class="btn btn-sm" 
                                            onclick="approveJob({{ $job->id }})"
                                                style="background-color:#5E8BF7;color: white;border-radius: 0px;">Aprove</button> --}}
            </div>
        </div>
        <div class="row mt-1"
            style="border-top: 1px solid #C6D2E7;margin-left: -20px;margin-right: -20px;padding: 15px;padding-bottom: 0px !important;color: #00365E;">
            <div class="col-lg-6 " style="border-right: 1px solid #9CAFD1;">
                <div class="d-flex flex-wrap ">
                    <i class="ti ti-coin me-2"></i>
                    <span style="font-size: 14px;" class="me-2">Budget range:</span>
                    <span style="font-size: 14px;" class="me-2">up to {{ $job->budget }}€</span>
                    <span
                        class="badge
                                                @if ($job->budget_flexible == 'yes') bg-label-success
                                                @else
                                                      bg-label-secondary @endif
                                                ">Flexible</span>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="d-flex flex-wrap">
                    <i class="ti ti-calendar me-2"></i>
                    <span style="font-size: 14px;" class="me-2">Deliver by:</span>
                    <span style="font-size: 14px;" class="me-2">

                        {{ \Carbon\Carbon::parse($job->delivery_date)->format('d M Y') }}

                    </span>

                </div>
            </div>
        </div>
    </div>
@elseif ($job->status == 'hired')
    <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;padding: 20px">
        <div class="row">
            <div class="col-lg-2">
                <img src=" {{ asset($job->images) }}" style="width: 100%">
            </div>
            <div class="col-lg-9" style="color:#00365E">
                <div class="row">
                    <div style="display: flex">
                        <span class="badge bg-label-success me-2" style="height: 30px;"><i
                                class="ti ti-briefcase me-1 ti-xs"></i>Hired</span>
                        <span class="me-2 vertical-line"
                            style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#{{ $job->id }}</span>
                        <span class="me-2 vertical-line"
                            style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                            {{ \Carbon\Carbon::parse($job->created_at)->format('d M Y') }}
                            
</span>
                        <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;"><img
                                src="/dashboard/assets/img/yacht.png"
                                class="me-1" />{{ $job->yacht->yachtName }}</span>
                        <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                            @if ($job->require_surveyor)
                                <img src="dashboard/assets/img/check.png" class="me-1" />Surveyor
                        </span>
                        @endif
                    </div>
                </div>
                <p style="" class="mt-1">{{ $job->job_title }}</p>
                <p style="margin-top:-15px;font-size:12px;">
                    {{ Str::words($job->job_description, 40, '...') }}
                </p>

            </div>
            <div class="col-lg-1" style="text-align: right;">
                <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>

            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-7" style="margin-top: -20px">
                <div class="d-flex flex-wrap" style="margin-top: -7px">
                    <div class="avatar me-3">
                        <img src=" {{ asset($job->user->profile_image) }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <div>
                        <p class=" mt-2" style="font-size: 14px;color: #00365E;">
                            {{ $job->user->firstName . ' ' . $job->user->lastName }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 " style="text-align: right;margin-top: -40px">

            </div>
        </div>
        <div class="row mt-1"
            style="border-top: 1px solid #C6D2E7;margin-left: -20px;margin-right: -20px;padding: 15px;padding-bottom: 0px !important;color: #00365E;">
            <div class="col-lg-3 " style="border-right: 1px solid #9CAFD1;">
                <div class="d-flex flex-wrap ">
                    <i class="ti ti-coin me-2"></i>
                    <span style="font-size: 14px;" class="me-2">Budget Accepted:</span> 
                    <span style="font-size: 14px;" class="me-2">{{ $job->budget }}€</span>
                </div>
            </div>
            <div class="col-lg-3" style="border-right: 1px solid #9CAFD1;">
                <div class="d-flex flex-wrap">
                    <i class="ti ti-calendar me-2"></i>
                    <span style="font-size: 14px;" class="me-2">Surveyors:</span>  <br>
                    <span style="font-size: 14px;" class="me-2">
                        {{ $job->reports->where('reportType.name', 'Surveyor')->count() }}
                        
                    </span>
                </div>
            </div>
            <div class="col-lg-3" style="border-right: 1px solid #9CAFD1;">
                <div class="d-flex flex-wrap">
                    <i class="ti ti-calendar me-2"></i>
                    <span style="font-size: 14px;" class="me-2">Progress:</span> <br>
                    <span style="font-size: 14px;" class="me-2">

                        {{ $job->reports->where('reportType.name', 'Progress')->count() }}

                    </span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex flex-wrap text-danger">
                    <i class="ti ti-calendar me-2"></i>
                    <span style="font-size: 14px;" class="me-2">Incidents:</span>
                    <span style="font-size: 14px;" class="me-2">
                        {{ $job->reports->where('reportType.name', 'Incident')->count() }}
                    </span>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    <!-- add Yacht -->

    <div class="col-lg-12 my-4 " style="border: 1px dashed #5E8BF7;height: 156px;padding: 20px;">
        <center>
            <label class="text-center" style="width: 50px;height: 50px;border-radius: 100%;background: #F2F6FA;">
                <i class="ti ti-briefcase ti-md" style="padding-top: 12px;color: #5E8BF7;"></i>
            </label>
            <h4 style="font-size: 20px;color: #00365E;">Create a job post</h4>
        </center>
    </div>

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
    <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->


    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!-- / Layout wrapper -->

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
