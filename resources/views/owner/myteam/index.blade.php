@extends('owner.layout.master')
@include('owner.components.add-crew')

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
                        <h3 class="text-white">Manage your team</h3>

                    </div>
                    <div class="col-lg-5" style="text-align: right;">

                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd"
                            aria-controls="offcanvasEnd" class="btn btn-white waves-effect waves-light"
                            style="border-radius: 0px !important;color: #00365d;">
                            <i class="ti ti-user-plus me-2"></i> Add Crew
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
                                    <small style="font-size: 11px">Last activity</small>
                                        <h5 class="mb-0" style="color: #2AD7B3"> 
                                        {{ optional($teams->last())->created_at ? \Carbon\Carbon::parse($teams->last()->created_at)->format('d M Y') : 'No activity' }}
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
                            <div class="col-lg-6">
                                <i class="ti ti-users me-1 ti-md" style="color: #00365E"></i>
                                <label style="font-size: 18px;color: #00365E;padding-top: 3px;" class="me-2">My
                                    Team</label>
                                <label class="badge bg-label-primary rounded-pill "
                                    style="color: #00365E !important">{{ $teams->count() }}</label>
                            </div>
                            <div class="col-lg-6" style="text-align: right;color: #00365E;">
                                <div class="row">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-5">
                                        <form action="{{ route('owner.myteam.index') }}" method="GET"
                                            class="input-group input-group-merge">
                                            <span class="input-group-text" id="basic-addon-search31"><i
                                                    class="ti ti-search"></i></span>
                                            <input type="text" name="search" class="form-control"
                                                placeholder="Search..." value="{{ request('search') }}"
                                                aria-label="Search..." aria-describedby="basic-addon-search31">
                                        </form>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex flex-wrap" style="">
                                            <form action="{{ route('owner.myteam.index') }}" method="GET"
                                                class="me-2">
                                                <select name="role" class="form-select border-0" onchange="this.form.submit()">
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

                                            <form action="{{ route('owner.myteam.index') }}" method="GET">
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
                                                            <form action="{{ route('owner.myteam.destroy', $item->id) }}"
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
                                                        <img 
                                                            src="{{ $item->picture ? asset('storage/' . $item->picture) : asset('dashboard/assets/img/profile.jpg') }}"
                                                            alt="Avatar Image" 
                                                            class="rounded-circle w-px-100">
                                                    </div>
                                                    
                                                </div>
                                                <h4 class="card-title" style="color: #00365E">
                                                    {{ $item->firstname }} {{ $item->lastname }}
                                             
                                                </h4>
                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <a href="javascript:;" class="me-1"><span
                                                            class="badge bg-label-primary">
                                                            {{ $item->job_title }}
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
                                                                14:33h</p>
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
                                                                {{ $item->yacht ? $item->yacht->yachtName : 'N/A' }}</p>
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
    
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 

