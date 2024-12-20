@extends('owner.layout.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        @include('owner.yachts.detail.head', ['yachetData' => $yachetData])
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Layout Demo -->
            <div class="col-lg-12 " style="margin-top: -24px">
                <div class="nav-align-top  ">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/overview/{{ $id }}">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="false"
                                    tabindex="-1">
                                    Overview
                                </button>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/job/{{ $id }}">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-profile" aria-controls="navs-top-profile"
                                    aria-selected="false" tabindex="-1">
                                    Jobs
                                </button>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/report/{{ $id }}">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-messages" aria-controls="navs-top-messages"
                                    aria-selected="true">
                                    Reports
                                </button>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/info/{{ $id }}">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-yacht" aria-controls="navs-top-yacht" aria-selected="true">
                                    Yacht Info
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" style="margin-left: -20px;margin-right: -20px">
                    <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-12 mt-5">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card"
                                            style="border: 1px solid #5E8BF7;height: 90px;box-shadow: 0px 16px 30px 0px #4680FF29;background: url('/dashboard/assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                            <div class="d-flex align-items-center">
                                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                    style="background-color:#F2F6FA !important">
                                                    <i class="ti ti-coin ti-sm" style="color:#5E8BF7"></i>
                                                </div>
                                                <div class="card-info">
                                                    <small style="font-size: 11px">Total Invested</small>
                                                    <h5 class="mb-0" style="color: #00365E">12.211,22 €</h5>
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
                                                    <i class="ti ti-user ti-sm" style="color:#00365E"></i>
                                                </div>
                                                <div class="card-info">
                                                    <small style="font-size: 11px">yacht crew</small>
                                                    <h5 class="mb-0" style="color: #00365E">04</h5>
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
                                                    <img src="/dashboard/assets/img/icon.png" style="width: 20px">
                                                </div>
                                                <div class="card-info">
                                                    <small style="font-size: 11px">Current incidents</small>
                                                    <h5 class="mb-0" style="color: #FF005C">03</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card"
                                            style="border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('/dashboard/assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                            <div class="d-flex align-items-center">
                                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                    style="background-color:#2AD7B30D !important">
                                                    <i class="ti ti-circle-check ti-sm" style="color:#2AD7B3"></i>
                                                </div>
                                                <div class="card-info">
                                                    <small style="font-size: 11px">In progress jobs</small>
                                                    <h5 class="mb-0" style="color: #2AD7B3">04 <span
                                                            class="badge bg-label-secondary badge-sm"
                                                            style="width: 60px;height: 20px;font-size: 10px;color: #00365E !important;">3.456
                                                            €</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 mt-5">
                                @include('owner.components.fetch-job', [
                                    'title' => 'Job list',
                                    'yachetId' => $id,
                                ])
                            </div>
                            <div class="col-lg-4 mt-5">
                                <!-- first box   -->
                                <div class="col-lg-12 mb-3"
                                    style="border: 1px solid #C6D2E7;width: 100%;
                       padding: 16px 24px 16px 24px;
                       gap: 24px;
                       border: 1px 0px 0px 0px;
                       opacity: 0px;
                       color: #00365E;
                       ">
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <p>Recent Reports</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right;">
                                            <div class="btn-group">
                                                <label type="button" class="dropdown-toggle waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style="font-size: 14px"> This week </label>
                                                <ul class="dropdown-menu" style="">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);">Another
                                                            action</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);">Something else
                                                            here</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);">Separated
                                                            link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <p style="font-size: 14px">John Smith</p>
                                            <p style="font-size: 13px;color: #9CAFD1;margin-top: -10px;font-weight: 400;">
                                                <img src="/dashboard/assets/img/yacht.png" class="me-1" />Fast and
                                                smooth
                                            </p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right;">
                                            <p style="font-size: 13px;color: #9CAFD1;font-weight: 400;">14-02-2024 | 10:17h
                                            </p>
                                            <span
                                                style="
                            padding: 4px 8px 4px 8px;
                            border-radius: 4px;
                            background: #FF005C0D;
                            color: #FF005C;
                            font-size: 13px;
                            font-weight: 400;
                            vertical-align: top; /* Adjust vertical alignment */
                            ">Incident</span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <p style="font-size: 14px">John Smith</p>
                                            <p style="font-size: 13px;color: #9CAFD1;margin-top: -10px;font-weight: 400;">
                                                <img src="/dashboard/assets/img/yacht.png" class="me-1" />Fast and
                                                smooth
                                            </p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right;">
                                            <p style="font-size: 13px;color: #9CAFD1;font-weight: 400;">14-02-2024 | 10:17h
                                            </p>
                                            <span
                                                style="
                            padding: 4px 8px 4px 8px;
                            border-radius: 4px;
                            background: #2AD7B30D;
                            color: #2AD7B3;
                            font-size: 13px;
                            font-weight: 400;
                            vertical-align: top; /* Adjust vertical alignment */
                            ">Progress</span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <p style="font-size: 14px">John Smith</p>
                                            <p style="font-size: 13px;color: #9CAFD1;margin-top: -10px;font-weight: 400;">
                                                <img src="/dashboard/assets/img/yacht.png" class="me-1" />Fast and
                                                smooth
                                            </p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right;">
                                            <p style="font-size: 13px;color: #9CAFD1;font-weight: 400;">14-02-2024 | 10:17h
                                            </p>
                                            <span class="bg-label-primary"
                                                style="
                            padding: 4px 8px 4px 8px;
                            border-radius: 4px;
                            font-size: 13px;
                            font-weight: 400;
                            vertical-align: top; /* Adjust vertical alignment */
                            ">Progress</span>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <p style="font-size: 14px">John Smith</p>
                                            <p style="font-size: 13px;color: #9CAFD1;margin-top: -10px;font-weight: 400;">
                                                <img src="/dashboard/assets/img/yacht.png" class="me-1" />Fast and
                                                smooth
                                            </p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right;">
                                            <p style="font-size: 13px;color: #9CAFD1;font-weight: 400;">14-02-2024 | 10:17h
                                            </p>
                                            <span
                                                style="
                            padding: 4px 8px 4px 8px;
                            border-radius: 4px;
                            background: #FF005C0D;
                            color: #FF005C;
                            font-size: 13px;
                            font-weight: 400;
                            vertical-align: top; /* Adjust vertical alignment */
                            ">Incident</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3"
                                    style="border: 1px solid #C6D2E7;width: 100%;padding: 16px 24px 16px 24px;gap: 24px;border: 1px 0px 0px 0px;opacity: 0px;color: #00365E;">
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <p>Recent activity</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right;">
                                            <div class="btn-group">
                                                <label type="button" class="waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style="font-size: 14px"> View All </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-wrap">
                                                <img src="/dashboard/assets/assets/img/avatars/1.png"
                                                    style="width: 50px;height: 50px !important;" alt=""
                                                    class="h-auto rounded-circle">
                                                <div style="margin-left: 10px;">
                                                    <h6 class="mb-0 text-nowrap">Tim Cook <small
                                                            class="text-muted">14-02-2024 | 10:17h</small>
                                                    </h6>
                                                    <small style="color:#00365E">Created a posted a new job offer </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-wrap">
                                                <img src="/dashboard/assets/assets/img/avatars/1.png"
                                                    style="width: 50px;height: 50px !important;" alt=""
                                                    class="h-auto rounded-circle">
                                                <div style="margin-left: 10px;">
                                                    <h6 class="mb-0 text-nowrap" style="font-size: 14px;color: #5E8BF7;">
                                                        Jack Sparrow <small class="text-muted">14-02-2024 | 10:17h</small>
                                                    </h6>
                                                    <small style="color:#00365E">Created a posted a new job offer </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <i class="ti ti-users ti-md" style="margin-top:-7px;color: #00365E;"></i>
                                        <label style="font-size: 18px;color: #00365E;padding-top: 3px;">Yacht crew</label>
                                    </div>
                                    <div class="col-lg-6 mb-3" style="text-align: right">
                                        <button type="button" class="btn dropdown-toggle waves-effect waves-light"
                                            data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                                            All Roles
                                        </button>
                                    </div>

                                    @foreach ($teamMembers as $item)
                                        
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-2">
                                        <div class="card"
                                            style="box-shadow: none !important;border: 1px solid #C6D2E7;border-radius: 0px;background: url('/dashboard/assets/img/back.png');background-size: 100% 50%;background-repeat: no-repeat;background-position: center bottom;">
                                            <div class="card-body text-center">
                                                <div class="dropdown btn-pinned">
                                                    <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical text-muted"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Share
                                                                connection</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Block
                                                                connection</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger"
                                                                href="javascript:void(0);">Delete</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mx-auto my-">
                                                    <img src="/dashboard/assets/assets/img/avatars/3.png"
                                                        alt="Avatar Image" class="rounded-circle w-px-100">
                                                </div>
                                                <h4 class="card-title" style="color: #00365E">{{$item->firstname}}</h4>
                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <a href="javascript:;" class="me-1"><span
                                                            class="badge bg-label-primary">{{$item->user_type}}</span></a>
                                                </div>
                                                <span class="pb-1" style="color: #9CAFD1;font-size: 14px;">Joined at {{$item->created_at}}</span>
                                                <div class="d-flex align-items-center justify-content-center mt-3">
                                                    <a href="javascript:;"
                                                        class="btn btn-label-secondary btn-icon waves-effect me-2 w-50"><i
                                                            class="ti ti-phone ti-md"></i></a>
                                                    <a href="javascript:;"
                                                        class="btn btn-label-secondary btn-icon waves-effect w-50"><i
                                                            class="ti ti-mail ti-md"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-backdrop fade"></div>
    </div>
@endsection