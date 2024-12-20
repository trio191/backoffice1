@extends('admin.layout.master')
@section('content')
    <!-- Layout wrapper -->
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
                        <h3 class="text-white">Manage Platform users</h3>

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
                            style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;
                        background: url('{{ asset('dashboard/assets/img/card-corner.png') }}');
                            background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                    style="background-color:#F2F6FA !important">
                                    <img src="/dashboard/assets/img/Group.png">
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Captains</small>
                                    <h5 class="mb-0" style="color: #00365E">
                                        {{ $teams->filter(fn($team) => $team->user_type === 'Captain')->count() }}</h5>

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
                                    <i class="ti ti-settings ti-sm" style="color:#00365E"></i>
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Chief engineers</small>
                                    <h5 class="mb-0" style="color: #00365E">
                                        {{ $teams->filter(fn($team) => $team->user_type === 'Chief engineers')->count() }}
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
                                    <i class="ti ti-users ti-sm" style="color:#00365E"></i>
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">yacht crew</small>
                                    <h5 class="mb-0" style="color: #00365E">
                                        {{ $teams->filter(fn($team) => $team->user_type === 'yacht crew')->count() }}
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
                                    <small style="font-size: 11px">Companies</small>
                                    <h5 class="mb-0" style="color: #2AD7B3">

                                        {{ $users->where('accountType', 'Company')->count() }}</h5>

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
                            <div class="col-lg-6">
                                <i class="ti ti-users me-1 ti-md" style="color: #00365E"></i>
                                <label style="font-size: 18px;color: #00365E;padding-top: 3px;" class="me-2">Platform
                                    Users</label>
                                <label class="badge bg-label-primary rounded-pill "
                                    style="color: #00365E !important">{{ $teams->count() }}</label>
                            </div>
                            <div class="col-lg-6" style="text-align: right;color: #00365E;">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <form action="{{ route('admin-users.index') }}" method="GET"
                                            class="input-group input-group-merge">
                                            <span class="input-group-text" id="basic-addon-search31"><i
                                                    class="ti ti-search"></i></span>
                                            <input type="text" name="search" class="form-control"
                                                placeholder="Search..." value="{{ request('search') }}"
                                                aria-label="Search..." aria-describedby="basic-addon-search31">
                                        </form>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="d-flex flex-wrap" style="">
                                            <form action="{{ route('admin-users.index') }}" method="GET" class="me-2">
                                                <select name="role" class="form-select border-0"
                                                    onchange="this.form.submit()">
                                                    <option value="">All Roles</option>
                                                    <option value="Captain"
                                                        {{ request('role') == 'Captain' ? 'selected' : '' }}>Captain
                                                    </option>
                                                    <option value="Chief Engineers"
                                                        {{ request('role') == 'Chief Engineers' ? 'selected' : '' }}>Chief
                                                        Engineers</option>
                                                    <option value="Yacht Crew"
                                                        {{ request('role') == 'Yacht Crew' ? 'selected' : '' }}>Yacht Crew
                                                    </option>
                                                </select>
                                            </form>

                                            <form action="{{ route('admin-users.index') }}" method="GET">
                                                <button type="submit" class="btn ">Reset</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cards area  -->

                        <!-- Check if a success message exists -->
                        @if (session('success'))
                            <div class="col-lg-12 mt-4 mb-3 text-center">
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif
                        @if ($teams->isEmpty())
                            <div class="col-lg-12 mt-4 mb-3 text-center">
                                <p>Sorry no Team member availible</p>
                            </div>
                        @endif
                        <div class="col-lg-12 mt-4 mb-3">
                            <div class="row g-4">
                                @foreach ($teams as $item)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-2">
                                        <div class="card"
                                            style="box-shadow: none !important;border: 1px solid #C6D2E7;border-radius: 0px;background: url('assets/img/back.png');
                                            background-size: 100% 50%;background-repeat: no-repeat;background-position: center bottom;">
                                            <div class="card-body text-center">
                                                <div class="dropdown btn-pinned">
                                                    <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical text-muted"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Share
                                                                connection</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Block
                                                                connection</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li>
                                                            <form action="{{ route('admin-users.destroy', $item->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item text-danger"
                                                                    style="background:none; border:none;">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="mx-auto my-">
                                                    <div class="mx-auto my-">
                                                        <img src="{{ $item->picture ? asset($item->picture) : asset('dashboard/assets/img/profile.jpg') }}"
                                                            alt="Avatar Image" class="rounded-circle w-px-100">
                                                    </div>

                                                </div>
                                                <h4 class="card-title" style="color: #00365E">
                                                    {{ $item->firstName }} {{ $item->lastName }}

                                                </h4>
                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <a href="javascript:;" class="me-1"><span
                                                            class="badge bg-label-primary">
                                                            {{ $item->accountType }}


                                                        </span></a>
                                                </div>
                                                <span class="pb-1" style="color: #9CAFD1;font-size: 14px;">
                                                    Joined at
                                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                                                </span>
                                                <div class="col-lg-12 mt-2 border-bottom" style="">
                                                    <div class="row">
                                                        <div class="col-lg-6" style="text-align: left">
                                                            <p style="font-size: 14px;color: #00365E">Activity
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-6" style="text-align: right">
                                                            <p style="font-size: 14px;color: #00365E;float: right;">
                                                                {{ \Carbon\Carbon::parse($item->created_at)->format('H:i') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-3 " style="">
                                                    <div class="row">
                                                        <div class="col-lg-6" style="text-align: left">
                                                            <p style="font-size: 14px;color: #00365E">Yacth</p>
                                                        </div>
                                                        <div class="col-lg-6" style="text-align: right">
                                                            <p style="font-size: 14px;color: #00365E;float: right;">
                                                                {{ $item->yachts->first()  ? $item->yachts->first() ->yachtName : 'N/A' }}</p>

                                                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">

                                                    <a href="{{ $item->phone }}"
                                                        class="btn btn-label-secondary btn-icon waves-effect me-2 w-50"><i
                                                            class="ti ti-phone ti-md"></i></a>
                                                    <a href="mailto:{{ $item->email }}"
                                                        class="btn btn-label-secondary btn-icon waves-effect w-50"><i
                                                            class="ti ti-mail ti-md"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- add Yacht -->
                        @if ($teams->isNotEmpty())
                            <nav aria-label="Page navigation" style="float: right;">
                                {{ $teams->links('vendor.custom-pagination') }}
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
    <!-- add crew modal -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel"
        style="width: 500px !important;">

        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i
                    class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas"
                    aria-label="Close"></i> Add crew member</h5>

        </div>
        <div class="offcanvas-body  mx-0 flex-grow-0">
            <form id="teamMemberForm">
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
                        {{-- <input type="text" style="border-radius: 0px !important" class="form-control"
                        placeholder="Search for yacht" aria-label="Search..." aria-describedby="basic-addon-search31"> --}}

                        <select name="yacht_id" class="form-control select2" id="">

                            <option value="">Search for yacht</option>

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
                        <input type="text" class="form-control" name="firstname" style="border-radius:0px"
                            placeholder="Boat JBL" name="">
                        <label class="labelOwn" style="color:#5E8BF7">First name*</label>
                    </div>
                    <div class="form-group mt-3" style="position: relative;">
                        <input name="lastname" type="text" class="form-control" style="border-radius:0px"
                            placeholder="Last name*" name="">
                    </div>
                    <div class="form-group mt-3" style="position: relative;">
                        <input type="text" class="form-control" name="email" style="border-radius:0px"
                            placeholder="Email*" name="">
                    </div>
                    <div class="form-group mt-3" style="position: relative;">
                        <input type="text" name="phone" class="form-control" style="border-radius:0px"
                            placeholder="Phone*" name="">
                    </div>
                    <div class="form-group mt-3 mb-3" style="position: relative;">
                        <input type="text" name="job_title" class="form-control" style="border-radius:0px"
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
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#submitTeamMember').on('click', function(e) {
            console.log('button clickedddddd');
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


            // AJAX request
            $.ajax({
                url: '{{ route('admin-users.store') }}', // This uses the store method of OwnerMyTeamController
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle success response
                    alert('Crew member added successfully!');

                    // Reset form fields
                    $('#teamMemberForm')[0].reset(); // Reset form fields
                    $('#selectpickerIcons').selectpicker('refresh'); // Refresh selectpick

                    $('#offcanvasEnd').modal('hide'); // Close the modal
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                    alert('Error: Could not add crew member.');
                }
            });
        });
    });
</script>
