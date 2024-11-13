@extends('owner.layout.layout')
@section('content')
    <div class="content-wrapper">
    @include('owner.yachts.detail.head', ['yachetData' => $yachetData])
    <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Layout Demo -->
            <div class="col-lg-12 " style="margin-top: -24px">
                <div class="nav-align-top  ">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/overview/{{ $id }}">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="false"
                                    tabindex="-1">
                                    Overview
                                </button>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/job/{{ $id }}">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
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
                    <div class="tab-pane fade active show" id="navs-top-profile" role="tabpanel">
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
                                                <i class="ti ti-x ti-sm" style="color:#00365E"></i>
                                            </div>
                                            <div class="card-info">
                                                <small style="font-size: 11px">Applications refused</small>
                                                <h5 class="mb-0" style="color: #00365E">12</h5>
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
                                                <small style="font-size: 11px">Applications received</small>
                                                <h5 class="mb-0" style="color: #00365E">05</h5>
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
                                                <small style="font-size: 11px">In progress jobs</small>
                                                <h5 class="mb-0" style="color: #2AD7B3">04</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('owner.components.fetch-job', ['title' => 'Job list', 'yachetId' => $id])
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-backdrop fade"></div>
    </div>
@endsection