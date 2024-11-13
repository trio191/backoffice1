@extends('owner.layout.layout')

@section('content')
   
@include('owner.components.add-job')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

    <div class="content-wrapper">
            <!-- Content -->
            <div class="layout-demo-wrapper" style="background-image: url('/dashboard/assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px; position: relative;">
                <div class="overlay"></div>
                <!-- Overlay -->
                <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
                  <!-- Text container -->
                  <div class="row">
                    <div class="col-lg-7 text-white">
                      <h3 class="text-white">Welcome back, Petter</h3>
                      <p style="margin-top: -20px;">Nice to see you again <span style="background-color: white;color: #00365d;padding: 2px;">
                          <strong>
                            <i class="ti ti-link" style="font-size: 16px;margin-top: -3px;font-weight: 700;"></i>Referal link </strong>
                          <span style="color: #9cafd1;">(worldyachtrefit/4325425ptuser)</span>
                        </span>
                      </p>
                    </div>
                    <div class="col-lg-5" style="text-align: right;">
                      <button type="button" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasEnd"
                          aria-controls="offcanvasEnd" class="btn btn-white waves-effect waves-light" style="border-radius: 0px !important;color: #00365d;">
                        <span class="ti-xs ti ti-user-plus me-1"></span>Add crew </button>
                      <button type="button" data-bs-toggle="offcanvas"
                          data-bs-target="#createJob"
                          aria-controls="createJob" class="btn btn-white waves-effect waves-light" style="border-radius: 0px !important;color: #00365d;">
                        <span class="ti-xs ti ti-briefcase me-1"></span>Create Job </button>
                      <button type="button" class="btn " style="border-radius: 0px !important;color: #00365d;border: 1px solid white;color: white;width: 20px;">
                        <span class="ti-xs ti ti-dots-vertical me-1"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            <div class="container-xxl flex-grow-1 container-p-y" >
              <!-- Layout Demo -->
              
              <div class="col-lg-12 mt-5">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="card" style="border: 1px solid #5E8BF7;height: 90px;box-shadow: 0px 16px 30px 0px #4680FF29;background: url('/dashboard/assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                      <div class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                          <i class="ti ti-briefcase ti-sm" style="color:#5E8BF7"></i>
                        </div>
                        <div class="card-info">
                          <small style="font-size: 11px">Open Jobs</small>
                          <h5 class="mb-0" style="color: #00365E">15</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('/dashboard/assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                      <div class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                          <i class="ti ti-coin ti-sm" style="color:#00365E"></i>
                        </div>
                        <div class="card-info">
                          <small style="font-size: 11px">Total yacht maintenance</small>
                          <h5 class="mb-0" style="color: #00365E">42.543,22 €</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="card" style="border: 1px solid #FF005C;height: 90px;box-shadow: none !important;background: url('/dashboard/assets/img/card-corner-red.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                      <div class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#FF005C0D !important">
                          <img src="/dashboard/assets/img/icon.png" style="width: 20px">
                        </div>
                        <div class="card-info">
                          <small style="font-size: 11px">Open incidents</small>
                          <h5 class="mb-0" style="color: #FF005C">03</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="card" style="border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('/dashboard/assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                      <div class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#2AD7B30D !important">
                          <i class="ti ti-circle-check ti-sm" style="color:#2AD7B3"></i>
                        </div>
                        <div class="card-info">
                          <small style="font-size: 11px">Active Jobs</small>
                          <h5 class="mb-0" style="color: #2AD7B3">04 <span class="badge bg-label-secondary badge-sm" style="width: 60px;height: 20px;font-size: 10px;color: #00365E !important;">3.456 €</span>
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 mt-5">
                <div class="row">
                  <!-- Left side area col-lg-8 -->
                  <div class="col-lg-8">
                    <div class="row">
                      <div class="col-lg-8">
                        <i class="ti ti-clipboard-check ti-md" style="margin-top:-7px;color: #00365E;"></i>
                        <label style="font-size: 18px;color: #00365E;padding-top: 3px;">Recent Jobs</label>
                      </div>
                      <div class="col-lg-4" style="text-align: right;color: #00365E;">
                        <div style="display: flex">
                          <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> Status </button>
                          <button class="btn" style="color: #00365E;">View All</button>
                        </div>
                      </div>
                    </div>
                    <div class="alert alert-danger d-flex align-items-center" style="border-radius:0px" role="alert">
                      <span class=" text-danger me-2">
                        <i class="fa fa-triangle-exclamation ti-xs"></i>
                      </span> There are some jobs waiting for aproval
                    </div>
                    <!-- Cards area  -->
                    <a href="specificYacht.php">
                    <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;padding: 20px">
                      <div class="row">
                        <div class="col-lg-2">
                          <img src="/dashboard/assets/img/img.png" style="width: 100%">
                        </div>
                        <div class="col-lg-9" style="color:#00365E">
                          <div class="row">
                            <div style="display: flex">
                              <span class="badge me-2" style="background: #5E8BF7;height: 30px;">
                                <i class="ti ti-circle-check me-1 ti-xs"></i>Active </span>
                              <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#26789</span>
                              <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">20 Jan 2024</span>
                              <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                <img src="/dashboard/assets/img/yacht.png" class="me-1" />Sunseeker Manhattan </span>
                              <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                <img src="/dashboard/assets/img/check.png" class="me-1" />Surveyor </span>
                            </div>
                          </div>
                          <p style="" class="mt-1">The plastic on the roof needs replacement before winter</p>
                          <p style="margin-top:-15px;font-size:12px;">The service offered by a Professional on WYR is called a Job</p>
                        </div>
                        <div class="col-lg-1" style="text-align: right;">
                          <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-7">
                          <div class="d-flex flex-wrap" style="margin-top: -7px">
                            <div class="avatar me-3">
                              <img src="assets//dashboard/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                            </div>
                            <div>
                              <p class=" mt-2" style="font-size: 14px;color: #00365E;">Jackie Sparrow</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-1" style="border-top: 1px solid #C6D2E7;margin-left: -20px;margin-right: -20px;padding: 15px;padding-bottom: 0px !important;color: #00365E;">
                        <div class="col-lg-6 " style="border-right: 1px solid #9CAFD1;">
                          <div class="d-flex flex-wrap ">
                            <i class="ti ti-coin me-2"></i>
                            <span style="font-size: 14px;" class="me-2">Budget range:</span>
                            <span style="font-size: 14px;" class="me-2">up to 20.000€</span>
                            <span class="badge" style="background: #2AD7B30D;
                        color: #1CBDA0;">Flexible</span>
                          </div>
                        </div>
                        <div class="col-lg-5" style="color:#1CBDA0">
                          <div class="d-flex flex-wrap">
                            <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                            <span style="font-size: 14px;" class="me-2">Applications:</span>
                            <span style="font-size: 14px;" class="me-2">05</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                    <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;padding: 20px">
                      <div class="row">
                        <div class="col-lg-2">
                          <img src="/dashboard/assets/img/img.png" style="width: 100%">
                        </div>
                        <div class="col-lg-9" style="color:#00365E">
                          <div class="row">
                            <div style="display: flex">
                              <span class="badge bg-label-primary me-2" style="height: 30px;">
                                <i class="ti ti-eye me-1 ti-xs"></i>Waiting </span>
                              <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#26789</span>
                              <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">20 Jan 2024</span>
                              <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                <img src="/dashboard/assets/img/yacht.png" class="me-1" />Sunseeker Manhattan </span>
                              <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                <img src="/dashboard/assets/img/check.png" class="me-1" />Surveyor </span>
                            </div>
                          </div>
                          <p style="" class="mt-1">The plastic on the roof needs replacement before winter</p>
                          <p style="margin-top:-15px;font-size:12px;">The service offered by a Professional on WYR is called a Job</p>
                        </div>
                        <div class="col-lg-1" style="text-align: right;">
                          <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-7">
                          <div class="d-flex flex-wrap" style="margin-top: -7px">
                            <div class="avatar me-3">
                              <img src="assets//dashboard/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                            </div>
                            <div>
                              <p class=" mt-2" style="font-size: 14px;color: #00365E;">Jackie Sparrow</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 " style="text-align: right">
                          <button class="btn btn-sm" style="background-color:#5E8BF7;color: white;border-radius: 0px;">Aprove</button>
                        </div>
                      </div>
                      <div class="row mt-1" style="border-top: 1px solid #C6D2E7;margin-left: -20px;margin-right: -20px;padding: 15px;padding-bottom: 0px !important;color: #00365E;">
                        <div class="col-lg-6 " style="border-right: 1px solid #9CAFD1;">
                          <div class="d-flex flex-wrap ">
                            <i class="ti ti-coin me-2"></i>
                            <span style="font-size: 14px;" class="me-2">Budget range:</span>
                            <span style="font-size: 14px;" class="me-2">up to 20.000€</span>
                            <span class="badge" style="background: #2AD7B30D;
                        color: #1CBDA0;">Flexible</span>
                          </div>
                        </div>
                        <div class="col-lg-5">
                          <div class="d-flex flex-wrap">
                            <i class="ti ti-calendar me-2"></i>
                            <span style="font-size: 14px;" class="me-2">Deliver by:</span>
                            <span style="font-size: 14px;" class="me-2">12 Dec 2024</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;padding: 20px">
                      <div class="row">
                        <div class="col-lg-2">
                          <img src="/dashboard/assets/img/img.png" style="width: 100%">
                        </div>
                        <div class="col-lg-9" style="color:#00365E">
                          <div class="row">
                            <div style="display: flex">
                              <span class="badge bg-label-primary me-2" style="height: 30px;">
                                <i class="ti ti-eye me-1 ti-xs"></i>Waiting </span>
                              <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#26789</span>
                              <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">20 Jan 2024</span>
                              <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                <img src="/dashboard/assets/img/yacht.png" class="me-1" />Sunseeker Manhattan </span>
                              <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                <img src="/dashboard/assets/img/check.png" class="me-1" />Surveyor </span>
                            </div>
                          </div>
                          <p style="" class="mt-1">The plastic on the roof needs replacement before winter</p>
                          <p style="margin-top:-15px;font-size:12px;">The service offered by a Professional on WYR is called a Job</p>
                        </div>
                        <div class="col-lg-1" style="text-align: right;">
                          <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-7">
                          <div class="d-flex flex-wrap" style="margin-top: -7px">
                            <div class="avatar me-3">
                              <img src="assets//dashboard/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                            </div>
                            <div>
                              <p class=" mt-2" style="font-size: 14px;color: #00365E;">Jackie Sparrow</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 " style="text-align: right">
                          <button class="btn btn-sm" style="background-color:#5E8BF7;color: white;border-radius: 0px;">Aprove</button>
                        </div>
                      </div>
                      <div class="row mt-1" style="border-top: 1px solid #C6D2E7;margin-left: -20px;margin-right: -20px;padding: 15px;padding-bottom: 0px !important;color: #00365E;">
                        <div class="col-lg-6 " style="border-right: 1px solid #9CAFD1;">
                          <div class="d-flex flex-wrap ">
                            <i class="ti ti-coin me-2"></i>
                            <span style="font-size: 14px;" class="me-2">Budget range:</span>
                            <span style="font-size: 14px;" class="me-2">up to 20.000€</span>
                            <span class="badge" style="background: #2AD7B30D;
                        color: #1CBDA0;">Flexible</span>
                          </div>
                        </div>
                        <div class="col-lg-5">
                          <div class="d-flex flex-wrap">
                            <i class="ti ti-calendar me-2"></i>
                            <span style="font-size: 14px;" class="me-2">Deliver by:</span>
                            <span style="font-size: 14px;" class="me-2">12 Dec 2024</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- new added design -->
      <!-- <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;padding: 20px"> -->
                    <div style="max-width: 800px; margin: 0 auto; background: white; border: 1px solid #e5e7eb; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);">
        <div style="padding: 20px;">
            <div style="display: flex; gap: 20px;">
                <img src="https://via.placeholder.com/80" alt="Yacht thumbnail" style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px;">
                <div style="flex-grow: 1;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
                            <span style="background-color: rgba(16, 185, 129, 0.1); color: rgb(4, 120, 87); border: 1px solid rgba(16, 185, 129, 0.2); font-size: 0.75rem; padding: 2px 8px; border-radius: 4px;">Hired</span>
                            <span style="color: #6b7280; font-size: 0.875rem;">#26789 | 20 Jan 2024</span>
                            <span style="color: #6b7280; font-size: 0.875rem;">• Surveyor</span>
                        </div>
                        <button style="background: none; border: none; color: #6b7280; cursor: pointer;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="1" />
                                <circle cx="12" cy="5" r="1" />
                                <circle cx="12" cy="19" r="1" />
                            </svg>
                        </button>
                    </div>
                    <h3 style="margin: 10px 0 5px; font-size: 1rem; font-weight: 500;">The plastic on the roof needs replacement before winter</h3>
                    <p style="margin: 0 0 10px; color: #6b7280; font-size: 0.875rem;">The service offered by a Professional on WYB is called a Job</p>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <img src="https://via.placeholder.com/24" alt="Jackie Sparrow" style="width: 24px; height: 24px; border-radius: 50%; object-fit: cover;">
                        <span style="font-size: 0.875rem;">Jackie Sparrow</span>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); border-top: 1px solid #e5e7eb;">
            <div style="padding: 16px; border-right: 1px solid #e5e7eb;">
                <div style="color: #6b7280; font-size: 0.875rem;">Budget accepted:</div>
                <div style="font-weight: 500;">20.000€</div>
            </div>
            <div style="padding: 16px; border-right: 1px solid #e5e7eb;">
                <div style="color: #6b7280; font-size: 0.875rem;">Surveryos</div>
                <div style="font-weight: 500;">00</div>
            </div>
            <div style="padding: 16px; border-right: 1px solid #e5e7eb;">
                <div style="color: #6b7280; font-size: 0.875rem;">Progress</div>
                <div style="font-weight: 500;">02</div>
            </div>
            <div style="padding: 16px;">
                <div style="color: #6b7280; font-size: 0.875rem;">Incidents</div>
                <div style="font-weight: 500; color: #ef4444;">03</div>
            </div>
        </div>
    <!-- </div> -->
                    </div>

                  </div>
                  <!-- Left side area end col-lg-8  -->
                  <!-- Right side area col-lg-4 -->
                  <div class="col-lg-4">
                    <!-- first box   -->
                    <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;width: 100%;
                      
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
                            <label type="button" class="dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 14px"> This week </label>
                            <ul class="dropdown-menu" style="">
                              <li>
                                <a class="dropdown-item" href="javascript:void(0);">Action</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                              </li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <li>
                                <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-lg-6">
                          <p style="font-size: 14px">John Smith</p>
                          <p style="font-size: 13px;color: #9CAFD1;margin-top: -10px;font-weight: 400;">
                            <img src="/dashboard/assets/img/yacht.png" class="me-1" />Fast and smooth
                          </p>
                        </div>
                        <div class="col-lg-6" style="text-align: right;">
                          <p style="font-size: 13px;color: #9CAFD1;font-weight: 400;">14-02-2024 | 10:17h</p>
                          <span style="
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
                            <img src="/dashboard/assets/img/yacht.png" class="me-1" />Fast and smooth
                          </p>
                        </div>
                        <div class="col-lg-6" style="text-align: right;">
                          <p style="font-size: 13px;color: #9CAFD1;font-weight: 400;">14-02-2024 | 10:17h</p>
                          <span style="
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
                            <img src="/dashboard/assets/img/yacht.png" class="me-1" />Fast and smooth
                          </p>
                        </div>
                        <div class="col-lg-6" style="text-align: right;">
                          <p style="font-size: 13px;color: #9CAFD1;font-weight: 400;">14-02-2024 | 10:17h</p>
                          <span class="bg-label-primary" style="
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
                            <img src="/dashboard/assets/img/yacht.png" class="me-1" />Fast and smooth
                          </p>
                        </div>
                        <div class="col-lg-6" style="text-align: right;">
                          <p style="font-size: 13px;color: #9CAFD1;font-weight: 400;">14-02-2024 | 10:17h</p>
                          <span style="
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
                    <!-- first box end  -->
                    <!-- second box -->
                    <div class="col-lg-12" style="border: 1px solid #C6D2E7;width: 100%;
                      
                       padding: 16px 24px 16px 24px;
                       gap: 24px;
                       border: 1px 0px 0px 0px;
                       opacity: 0px;
                       color: #00365E;
                       ">
                      <div class="row mb-3">
                        <div class="col-lg-6">
                          <p>My crew</p>
                        </div>
                        <div class="col-lg-6" style="text-align: right;">
                          <div class="btn-group">
                            <label type="button" class="waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 14px"> View All </label>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-lg-8">
                          <div class="d-flex flex-wrap">
                            <img src="assets//dashboard/assets/img/avatars/1.png" style="width: 25%" alt="" class="h-auto rounded-circle">
                            <div style="margin-left: 10px">
                              <h6 class="mb-0 text-nowrap">Tim Cook</h6>
                              <small style="color:#5E8BF7">Chief Engineer | <span class="text-muted">Fast</span>
                              </small>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4" style="text-align: right">
                          <div class="d-flex flex-wrap">
                            <span class="badge bg-label-primary p-2 rounded me-1">
                              <i class="ti ti-phone ti-sm"></i>
                            </span>
                            <span class="badge bg-label-primary p-2 rounded ">
                              <i class="ti ti-mail ti-sm"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-lg-8">
                          <div class="d-flex flex-wrap">
                            <img src="assets//dashboard/assets/img/avatars/1.png" style="width: 25%" alt="" class="h-auto rounded-circle">
                            <div style="margin-left: 10px">
                              <h6 class="mb-0 text-nowrap">Jack Sparrow</h6>
                              <small style="color:#5E8BF7">Captain | <span class="text-muted">Fast and</span>
                              </small>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4" style="text-align: right">
                          <div class="d-flex flex-wrap">
                            <span class="badge bg-label-primary p-2 rounded me-1">
                              <i class="ti ti-phone ti-sm"></i>
                            </span>
                            <span class="badge bg-label-primary p-2 rounded ">
                              <i class="ti ti-mail ti-sm"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Third Box -->
                    <div class="col-lg-12 mt-3" style="border: 1px solid #C6D2E7;width: 100%;
                      
                       padding: 16px 24px 16px 24px;
                       gap: 24px;
                       border: 1px 0px 0px 0px;
                       opacity: 0px;
                       color: #00365E;
                       ">
                      <div class="row mb-3">
                        <div class="col-lg-6">
                          <p>Recent activity</p>
                        </div>
                        <div class="col-lg-6" style="text-align: right;">
                          <div class="btn-group">
                            <label type="button" class="waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 14px"> View All </label>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-lg-12">
                          <div class="d-flex flex-wrap">
                            <img src="assets//dashboard/assets/img/avatars/1.png" style="width: 50px;height: 50px !important;" alt="" class="h-auto rounded-circle">
                            <div style="margin-left: 10px;">
                              <h6 class="mb-0 text-nowrap">Tim Cook <small class="text-muted">14-02-2024 | 10:17h</small>
                              </h6>
                              <small style="color:#00365E">Created a posted a new job offer </small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-lg-12">
                          <div class="d-flex flex-wrap">
                            <img src="assets//dashboard/assets/img/avatars/1.png" style="width: 50px;height: 50px !important;" alt="" class="h-auto rounded-circle">
                            <div style="margin-left: 10px;">
                              <h6 class="mb-0 text-nowrap" style="font-size: 14px;color: #5E8BF7;">Jack Sparrow <small class="text-muted">14-02-2024 | 10:17h</small>
                              </h6>
                              <small style="color:#00365E">Created a posted a new job offer </small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Right side area end col-lg-4 -->
                  <!-- section devider -->
                  <div class="col-lg-12 mt-5 mb-5">
                    <div style="border-top: 1px solid  #C6D2E7"></div>
                  </div>
                  <!-- section devider end-->
                  <!-- slider section -->
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="d-flex flex-wrap">
                          <img src="/dashboard/assets/img/yacht-black.png" class="me-2">
                          <div style="margin-left: 10px;" class="d-flex">
                            <h6 class="mb-0 text-nowrap me-2" style="margin-top: 5px;color: #00365E;">My Yachts </h6>
                            <div style="width: 34px;
height: 28px;
padding: 2px 12px 2px 12px;
gap: 24px;
border-radius: 500px;
opacity: 0px;
background: #F2F6FA;
margin-top: 4px;
">5</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6" style="text-align: right">
                        <p style="color: #00365E;">View All</p>
                      </div>
                    </div>
                    <!-- slider row -->
                    <div class="row mt-2">
                      <div class="col-lg-4">
                        <div class="card h-100" style="border: 1px solid #C6D2E7;border-radius: 0px !important">
                          <img class="card-img-top" src="/dashboard/assets/img/card-img.png" alt="Card image cap" style="border-radius:0px !important">
                          <div class="card-body" style="background: transparent !important;">
                            <h5 class="card-title" style="color: #00365E;">Fast and smooth</h5>
                            <div class="col-lg-12">
                              <div class="row">
                                <div class="col-lg-5">
                                  <p style="font-size: 10px !important;color:#9CAFD1">Mooring: <span style="color:#00365E"> 0023340</span>
                                  </p>
                                </div>
                                <div class="col-lg-3">
                                  <p style="font-size: 10px !important;color:#9CAFD1">Size: <span style="color:#00365E"> 12m</span>
                                  </p>
                                </div>
                                <div class="col-lg-4">
                                  <p style="font-size: 10px !important;color:#9CAFD1">Tonnage: <span style="color:#00365E"> XX GT</span>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="row">
                                <div class="col-lg-6 text-center" style="border-right: 1px solid #C6D2E7;">
                                  <i class="ti ti-briefcase " style="font-size: 34px !important;color: #00365E;"></i>
                                  <p style="font-size: 34px;color: #00365E;">05</p>
                                  <p style="font-size: 14px;color: #00365E;margin-top: -20px;">Open jobs</p>
                                </div>
                                <div class="col-lg-6 text-center">
                                  <i class="ti ti-circle-check " style="font-size: 34px !important;color: #2AD7B3;"></i>
                                  <p style="font-size: 34px;color: #2AD7B3;">02</p>
                                  <p style="font-size: 14px;color: #2AD7B3;margin-top: -20px;">Active jobs</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-4 " style="border-bottom: 1px solid #C6D2E7">
                              <div class="row ">
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <i style="color: #00365E;" class="ti ti-coin me-1"></i>
                                    <p style="font-size: 14px;color: #00365E;">Budget invested</p>
                                  </div>
                                </div>
                                <div class="col-lg-5" style="text-align: right;">
                                  <p style="font-size:15px;color: #00365E;">23.000,00 €</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3 " style="border-bottom: 1px solid #C6D2E7">
                              <div class="row ">
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <i style="color: #00365E;" class="ti ti-file-export me-1"></i>
                                    <p style="font-size: 14px;color: #00365E;">Applications</p>
                                  </div>
                                </div>
                                <div class="col-lg-5" style="text-align: right;">
                                  <p style="font-size:15px;color: #00365E;">04</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3 " style="border-bottom: 1px solid #C6D2E7">
                              <div class="row ">
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <i style="color: #FF005C;padding-top: 3px;" class="fa fa-triangle-exclamation me-1"></i>
                                    <p style="font-size: 14px;color: #FF005C;">Incidents</p>
                                  </div>
                                </div>
                                <div class="col-lg-5" style="text-align: right;">
                                  <p style="font-size:15px;color: #FF005C;">02</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3 ">
                              <div class="row ">
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <i style="color: #9CAFD1;padding-top: 3px;" class="fa fa-circle-user me-1"></i>
                                    <p style="font-size: 14px;color: #9CAFD1;">Yacht Crew</p>
                                  </div>
                                </div>
                                <div class="col-lg-5" style="text-align: right;">
                                  <p style="font-size:14px;color: #9CAFD1;">View All</p>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col-lg-8">
                                  <div class="d-flex flex-wrap">
                                    <img src="assets//dashboard/assets/img/avatars/1.png" style="width: 25%" alt="" class="h-auto rounded-circle">
                                    <div style="margin-left: 10px">
                                      <h6 class="mb-0 text-nowrap">Tim Cook</h6>
                                      <small style="color:#5E8BF7">Chief Engineer </small>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4" style="text-align: right">
                                  <div class="d-flex flex-wrap">
                                    <span class="badge bg-label-primary p-2 rounded me-1">
                                      <i class="ti ti-phone ti-sm"></i>
                                    </span>
                                    <span class="badge bg-label-primary p-2 rounded ">
                                      <i class="ti ti-mail ti-sm"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col-lg-8">
                                  <div class="d-flex flex-wrap">
                                    <img src="assets//dashboard/assets/img/avatars/1.png" style="width: 25%" alt="" class="h-auto rounded-circle">
                                    <div style="margin-left: 10px">
                                      <h6 class="mb-0 text-nowrap">Tim Cook</h6>
                                      <small style="color:#5E8BF7">Chief Engineer </small>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4" style="text-align: right">
                                  <div class="d-flex flex-wrap">
                                    <span class="badge bg-label-primary p-2 rounded me-1">
                                      <i class="ti ti-phone ti-sm"></i>
                                    </span>
                                    <span class="badge bg-label-primary p-2 rounded ">
                                      <i class="ti ti-mail ti-sm"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card h-100" style="border: 1px solid #C6D2E7;border-radius: 0px !important">
                          <img class="card-img-top" src="/dashboard/assets/img/card-img2.png" alt="Card image cap" style="border-radius:0px !important">
                          <div class="card-body" style="background: transparent !important;">
                            <h5 class="card-title" style="color: #00365E;">Fast and smooth</h5>
                            <div class="col-lg-12">
                              <div class="row">
                                <div class="col-lg-5">
                                  <p style="font-size: 10px !important;color:#9CAFD1">Mooring: <span style="color:#00365E"> 0023340</span>
                                  </p>
                                </div>
                                <div class="col-lg-3">
                                  <p style="font-size: 10px !important;color:#9CAFD1">Size: <span style="color:#00365E"> 12m</span>
                                  </p>
                                </div>
                                <div class="col-lg-4">
                                  <p style="font-size: 10px !important;color:#9CAFD1">Tonnage: <span style="color:#00365E"> XX GT</span>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="row">
                                <div class="col-lg-6 text-center" style="border-right: 1px solid #C6D2E7;">
                                  <i class="ti ti-briefcase " style="font-size: 34px !important;color: #00365E;"></i>
                                  <p style="font-size: 34px;color: #00365E;">05</p>
                                  <p style="font-size: 14px;color: #00365E;margin-top: -20px;">Open jobs</p>
                                </div>
                                <div class="col-lg-6 text-center">
                                  <i class="ti ti-circle-check " style="font-size: 34px !important;color: #2AD7B3;"></i>
                                  <p style="font-size: 34px;color: #2AD7B3;">02</p>
                                  <p style="font-size: 14px;color: #2AD7B3;margin-top: -20px;">Active jobs</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-4 " style="border-bottom: 1px solid #C6D2E7">
                              <div class="row ">
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <i style="color: #00365E;" class="ti ti-coin me-1"></i>
                                    <p style="font-size: 14px;color: #00365E;">Budget invested</p>
                                  </div>
                                </div>
                                <div class="col-lg-5" style="text-align: right;">
                                  <p style="font-size:15px;color: #00365E;">23.000,00 €</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3 " style="border-bottom: 1px solid #C6D2E7">
                              <div class="row ">
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <i style="color: #00365E;" class="ti ti-file-export me-1"></i>
                                    <p style="font-size: 14px;color: #00365E;">Applications</p>
                                  </div>
                                </div>
                                <div class="col-lg-5" style="text-align: right;">
                                  <p style="font-size:15px;color: #00365E;">04</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3 " style="border-bottom: 1px solid #C6D2E7">
                              <div class="row ">
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <i style="color: #FF005C;padding-top: 3px;" class="fa fa-triangle-exclamation me-1"></i>
                                    <p style="font-size: 14px;color: #FF005C;">Incidents</p>
                                  </div>
                                </div>
                                <div class="col-lg-5" style="text-align: right;">
                                  <p style="font-size:15px;color: #FF005C;">02</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3 ">
                              <div class="row ">
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <i style="color: #9CAFD1;padding-top: 3px;" class="fa fa-circle-user me-1"></i>
                                    <p style="font-size: 14px;color: #9CAFD1;">Yacht Crew</p>
                                  </div>
                                </div>
                                <div class="col-lg-5" style="text-align: right;">
                                  <p style="font-size:14px;color: #9CAFD1;">View All</p>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col-lg-8">
                                  <div class="d-flex flex-wrap">
                                    <img src="assets//dashboard/assets/img/avatars/1.png" style="width: 25%" alt="" class="h-auto rounded-circle">
                                    <div style="margin-left: 10px">
                                      <h6 class="mb-0 text-nowrap">Tim Cook</h6>
                                      <small style="color:#5E8BF7">Chief Engineer </small>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4" style="text-align: right">
                                  <div class="d-flex flex-wrap">
                                    <span class="badge bg-label-primary p-2 rounded me-1">
                                      <i class="ti ti-phone ti-sm"></i>
                                    </span>
                                    <span class="badge bg-label-primary p-2 rounded ">
                                      <i class="ti ti-mail ti-sm"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col-lg-8">
                                  <div class="d-flex flex-wrap">
                                    <img src="assets//dashboard/assets/img/avatars/1.png" style="width: 25%" alt="" class="h-auto rounded-circle">
                                    <div style="margin-left: 10px">
                                      <h6 class="mb-0 text-nowrap">Tim Cook</h6>
                                      <small style="color:#5E8BF7">Chief Engineer </small>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4" style="text-align: right">
                                  <div class="d-flex flex-wrap">
                                    <span class="badge bg-label-primary p-2 rounded me-1">
                                      <i class="ti ti-phone ti-sm"></i>
                                    </span>
                                    <span class="badge bg-label-primary p-2 rounded ">
                                      <i class="ti ti-mail ti-sm"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card h-100" style="border: 1px solid #C6D2E7;border-radius: 0px !important">
                          <img class="card-img-top" src="/dashboard/assets/img/card-img3.png" alt="Card image cap" style="border-radius:0px !important">
                          <div class="card-body" style="background: transparent !important;">
                            <h5 class="card-title" style="color: #00365E;">Fast and smooth</h5>
                            <div class="col-lg-12">
                              <div class="row">
                                <div class="col-lg-5">
                                  <p style="font-size: 10px !important;color:#9CAFD1">Mooring: <span style="color:#00365E"> 0023340</span>
                                  </p>
                                </div>
                                <div class="col-lg-3">
                                  <p style="font-size: 10px !important;color:#9CAFD1">Size: <span style="color:#00365E"> 12m</span>
                                  </p>
                                </div>
                                <div class="col-lg-4">
                                  <p style="font-size: 10px !important;color:#9CAFD1">Tonnage: <span style="color:#00365E"> XX GT</span>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="row">
                                <div class="col-lg-6 text-center" style="border-right: 1px solid #C6D2E7;">
                                  <i class="ti ti-briefcase " style="font-size: 34px !important;color: #00365E;"></i>
                                  <p style="font-size: 34px;color: #00365E;">05</p>
                                  <p style="font-size: 14px;color: #00365E;margin-top: -20px;">Open jobs</p>
                                </div>
                                <div class="col-lg-6 text-center">
                                  <i class="ti ti-circle-check " style="font-size: 34px !important;color: #2AD7B3;"></i>
                                  <p style="font-size: 34px;color: #2AD7B3;">02</p>
                                  <p style="font-size: 14px;color: #2AD7B3;margin-top: -20px;">Active jobs</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-4 " style="border-bottom: 1px solid #C6D2E7">
                              <div class="row ">
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <i style="color: #00365E;" class="ti ti-coin me-1"></i>
                                    <p style="font-size: 14px;color: #00365E;">Budget invested</p>
                                  </div>
                                </div>
                                <div class="col-lg-5" style="text-align: right;">
                                  <p style="font-size:15px;color: #00365E;">23.000,00 €</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3 " style="border-bottom: 1px solid #C6D2E7">
                              <div class="row ">
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <i style="color: #00365E;" class="ti ti-file-export me-1"></i>
                                    <p style="font-size: 14px;color: #00365E;">Applications</p>
                                  </div>
                                </div>
                                <div class="col-lg-5" style="text-align: right;">
                                  <p style="font-size:15px;color: #00365E;">04</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3 " style="border-bottom: 1px solid #C6D2E7">
                              <div class="row ">
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <i style="color: #FF005C;padding-top: 3px;" class="fa fa-triangle-exclamation me-1"></i>
                                    <p style="font-size: 14px;color: #FF005C;">Incidents</p>
                                  </div>
                                </div>
                                <div class="col-lg-5" style="text-align: right;">
                                  <p style="font-size:15px;color: #FF005C;">02</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3 ">
                              <div class="row ">
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <i style="color: #9CAFD1;padding-top: 3px;" class="fa fa-circle-user me-1"></i>
                                    <p style="font-size: 14px;color: #9CAFD1;">Yacht Crew</p>
                                  </div>
                                </div>
                                <div class="col-lg-5" style="text-align: right;">
                                  <p style="font-size:14px;color: #9CAFD1;">View All</p>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col-lg-8">
                                  <div class="d-flex flex-wrap">
                                    <img src="assets//dashboard/assets/img/avatars/1.png" style="width: 25%" alt="" class="h-auto rounded-circle">
                                    <div style="margin-left: 10px">
                                      <h6 class="mb-0 text-nowrap">Tim Cook</h6>
                                      <small style="color:#5E8BF7">Chief Engineer </small>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4" style="text-align: right">
                                  <div class="d-flex flex-wrap">
                                    <span class="badge bg-label-primary p-2 rounded me-1">
                                      <i class="ti ti-phone ti-sm"></i>
                                    </span>
                                    <span class="badge bg-label-primary p-2 rounded ">
                                      <i class="ti ti-mail ti-sm"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col-lg-8">
                                  <div class="d-flex flex-wrap">
                                    <img src="assets//dashboard/assets/img/avatars/1.png" style="width: 25%" alt="" class="h-auto rounded-circle">
                                    <div style="margin-left: 10px">
                                      <h6 class="mb-0 text-nowrap">Tim Cook</h6>
                                      <small style="color:#5E8BF7">Chief Engineer </small>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4" style="text-align: right">
                                  <div class="d-flex flex-wrap">
                                    <span class="badge bg-label-primary p-2 rounded me-1">
                                      <i class="ti ti-phone ti-sm"></i>
                                    </span>
                                    <span class="badge bg-label-primary p-2 rounded ">
                                      <i class="ti ti-mail ti-sm"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->
            <!-- Footer -->
            <!-- / Footer -->
            <div class="content-backdrop fade"></div>
          </div>
        
@endsection
