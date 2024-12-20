@extends('owner.layout.master')

@section('content')
    <div class="content-wrapper">
        @include('owner.yachts.detail.head', ['yachetData' => $yachetData])
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Layout Demo -->
            <div class="col-lg-12 " style="margin-top: -24px">
            <div class="nav-align-top  ">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/overview/{{$id}}" >
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="false"
                                    tabindex="-1">
                                    Overview
                                </button>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/job/{{$id}}" >
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false"
                                    tabindex="-1">
                                    Jobs
                                </button>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/report/{{$id}}" >
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="true">
                                    Reports
                                </button>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/info/{{$id}}" >
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-yacht" aria-controls="navs-top-yacht" aria-selected="true">
                                    Yacht Info
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" style="margin-left: -20px;margin-right: -20px">
                    <div class="tab-pane fade  active show" id="navs-top-messages" role="tabpanel">
                        <div class="col-lg-12 mt-5">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card"
                                        style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('/dashboard/assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <div class="d-flex align-items-center">
                                            <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-coin ti-md" style="color:#00365E"></i>
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
                                                <i class="ti ti-file-analytics ti-sm" style="color:#00365E"></i>
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Total reports</small>
                                                <h5 class="mb-0" style="color: #00365E">12</h5>
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
                                                <img src="/dashboard/assets/img/Icon.png">
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Current Incidents</small>
                                                <h5 class="mb-0" style="color: #FF005C">05</h5>
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
                                                <i class="ti ti-circle-check" style="color: #2AD7B3"></i>
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Progress reports</small>
                                                <h5 class="mb-0" style="color: #2AD7B3">04</h5>
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
                                                style="color: #00365E !important">15</label>
                                        </div>
                                        <div class="col-lg-8" style="text-align: right;color: #00365E;">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text" id="basic-addon-search31"><i
                                                                class="ti ti-search"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search..." aria-label="Search..."
                                                            aria-describedby="basic-addon-search31">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="d-flex flex-wrap">
                                                        <button type="button"
                                                            class="btn dropdown-toggle waves-effect waves-light"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            style="color: #00365E;">
                                                            Report Type
                                                        </button>
                                                        <button type="button"
                                                            class="btn dropdown-toggle waves-effect waves-light"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            style="color: #00365E;">
                                                            Yacht
                                                        </button>
                                                        <button type="button"
                                                            class="btn dropdown-toggle waves-effect waves-light"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            style="color: #00365E;">
                                                            All Jobs
                                                        </button>
                                                        <button type="button"
                                                            class="btn dropdown-toggle waves-effect waves-light"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            style="color: #00365E;">
                                                            This Week
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cards area  -->
                                    <div class="col-lg-12 mt-4 mb-4">
                                        <table class="table table-responsive">
                                            <tr style="font-size: 14px">
                                                <td><span class="me-2">Reporter</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Title</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Yacht</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Job Id</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Post date</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Report Type</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                            </tr>
                                            <tr class="border" style="color:#00365E;font-size: 14px;">
                                                <td>
                                                    <div class="d-flex flex-wrap">
                                                        <div class="avatar me-2">
                                                            <img src="/dashboard/assets/assets/img/avatars/3.png"
                                                                alt="Avatar" class="rounded-circle">
                                                        </div>
                                                        <div class="ms-1">
                                                            <h6 class="mb-0" style="font-size: 12px;color: #00365E;">Tim
                                                                Burton</h6>
                                                            <span style="color:#5E8BF7;font-size: 10px">All fix LDA</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-wrap">
                                                        <label class="badge me-1"
                                                            style="background-color: #FF005C;">new</label>
                                                        <span style="font-size: 12px;padding-top: 4px;">The plastic on the
                                                            roof needs replacement before winter</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-wrap">
                                                        <img src="/dashboard/assets/img/yacht-black.png" class="me-1"
                                                            style="width: 20%;">
                                                        <span style="font-size: 12px;padding-top: 2px;">Elizabeth
                                                            III</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span style="color: #5E8BF7">#34563</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-wrap">
                                                        <i class="ti ti-calendar me-1"></i>
                                                        <span>22 Jan 2023</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="badge bg-label-danger">
                                                        <span style="padding-top: 4px;">Incident </span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr class="border" style="color:#00365E;font-size: 14px;">
                                                <td>
                                                    <div class="d-flex flex-wrap">
                                                        <div class="avatar me-2">
                                                            <img src="/dashboard/assets/assets/img/avatars/3.png"
                                                                alt="Avatar" class="rounded-circle">
                                                        </div>
                                                        <div class="ms-1">
                                                            <h6 class="mb-0" style="font-size: 12px;color: #00365E;">Tim
                                                                Burton</h6>
                                                            <span style="color:#5E8BF7;font-size: 10px">All fix LDA</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-wrap">
                                                        <label class="badge me-1"
                                                            style="background-color: #FF005C;">new</label>
                                                        <span style="font-size: 12px;padding-top: 4px;">The plastic on the
                                                            roof needs replacement before winter</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-wrap">
                                                        <img src="/dashboard/assets/img/yacht-black.png" class="me-1"
                                                            style="width: 20%;">
                                                        <span style="font-size: 12px;padding-top: 2px;">Elizabeth
                                                            III</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span style="color: #5E8BF7">#34563</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-wrap">
                                                        <i class="ti ti-calendar me-1"></i>
                                                        <span>22 Jan 2023</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="badge bg-label-primary">
                                                        <span style="padding-top: 4px;">Surveyor </span>
                                                    </label>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- add Yacht -->
                                    <nav aria-label="Page navigation" style="float: right;">
                                        <ul class="pagination pagination-square pagination-secondary">
                                            <li class="page-item first">
                                                <a class="page-link waves-effect" href="javascript:void(0);"><i
                                                        class="ti ti-chevrons-left ti-xs"></i></a>
                                            </li>
                                            <li class="page-item prev">
                                                <a class="page-link waves-effect" href="javascript:void(0);"><i
                                                        class="ti ti-chevron-left ti-xs"></i></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link waves-effect" href="javascript:void(0);">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link waves-effect" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link waves-effect" href="javascript:void(0);">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link waves-effect" href="javascript:void(0);">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link waves-effect" href="javascript:void(0);">5</a>
                                            </li>
                                            <li class="page-item next">
                                                <a class="page-link waves-effect" href="javascript:void(0);"><i
                                                        class="ti ti-chevron-right ti-xs"></i></a>
                                            </li>
                                            <li class="page-item last">
                                                <a class="page-link waves-effect" href="javascript:void(0);"><i
                                                        class="ti ti-chevrons-right ti-xs"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
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