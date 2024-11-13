@extends('owner.layout.layout')
@section('content')
    @include('owner.components.add-job')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="layout-demo-wrapper"
            style="background-image: url('/dashboard/assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px; padding-bottom: 20px; position: relative;">
            <div class="overlay"></div> <!-- Overlay -->
            <div class="col-lg-12 text-container" style="max-width: 1440px; padding-left: 100px; padding-right: 100px;">
                <!-- Text container -->
                <div class="row pt-2">
                    <div class="col-lg-7 text-white">
                        <h3 class="text-white">Find the right professional</h3>
                    </div>
                    <div class="col-lg-5" style="text-align: right;">
                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#createJob"
                            class="btn btn-white waves-effect waves-light"
                            style="border-radius: 0px !important; color: #00365d;">
                            <i class="ti ti-briefcase ti-sm me-2"></i> Create Job
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
                            style="border: 1px solid #C6D2E7; height: 90px; box-shadow: none !important; background: url('/dashboard/assets/img/card-corner.png'); background-size: 100% 100%; padding: 20px; border-radius: 0px; color: #00365E;">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                    style="background-color:#F2F6FA !important">
                                    <i class="ti ti-coin ti-sm " style="color:#00365E"></i>
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
                            style="border: 1px solid #C6D2E7; height: 90px; box-shadow: none !important; background: url('/dashboard/assets/img/card-corner.png'); background-size: 100% 100%; padding: 20px; border-radius: 0px; color: #00365E;">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                    style="background-color:#F2F6FA !important">
                                    <i class="ti ti-briefcase ti-sm" style="color:#00365E"></i>
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Jobs posted</small>
                                    <h5 class="mb-0" style="color: #00365E">12</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card"
                            style="border: 1px solid #C6D2E7; height: 90px; box-shadow: none !important; background: url('/dashboard/assets/img/card-corner.png'); background-size: 100% 100%; padding: 20px; border-radius: 0px; color: #00365E;">
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
                            style="border: 1px solid #2AD7B3; height: 90px; box-shadow: none !important; background: url('/dashboard/assets/img/card-corner-green.png'); background-size: 100% 100%; padding: 20px; border-radius: 0px; color: #00365E;">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                    style="background-color:#2AD7B30D !important">
                                    <i class="ti ti-circle-check" style="color: #2AD7B3"></i>
                                </div>
                                <div class="card-info">
                                    <small style="font-size: 11px">Applications accepted</small>
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
                    @include('owner.components.fetch-job', ['title' => 'Job list', 'yachetId' => ''])
                    <!-- Left side area end col-lg-12  -->
                </div>
            </div>
            <!--/ Layout Demo -->
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection