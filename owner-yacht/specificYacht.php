<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Jobs Detail</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/assets/img/favicon/favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <!-- Icons -->
    <link rel="stylesheet" href="assets/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="assets/assets/vendor/fonts/flag-icons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/assets/css/demo.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="assets/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="assets/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/assets/js/config.js"></script>
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
      .yacht-photo-container {
            position: relative;
            background: #e9f0f7;
            border-radius: 8px;
            overflow: hidden;
            min-height: 300px;
        }

        .yacht-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .upload-btn {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(4px);
            border: 1px solid #dee2e6;
        }

        .size-info {
            position: absolute;
            bottom: 8px;
            left: 8px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 12px;
        }

        .document-box {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 1rem;
            text-align: center;
        }

        .document-box.dashed {
            border-style: dashed;
        }

        .progress-bar-mini {
            height: 4px;
            background: #0d6efd;
            border-radius: 2px;
        }

        .system-details-card {
            background: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 1.5rem;
        }

        .avatar {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            margin-right: 8px;
        }
        .task-card {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 16px;
            margin: 12px;
            background: white;
        }

        .status-badge {
            background: #00dc82;
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 12px;
        }

        .meta-text {
            color: #6b7280;
            font-size: 14px;
        }

        .avatar {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            object-fit: cover;
        }

        .thumbnail {
            width: 48px;
            height: 48px;
            object-fit: cover;
            border-radius: 4px;
        }

        .metrics {
            border-top: 1px solid #e5e7eb;
            margin-top: 16px;
            padding-top: 16px;
        }

        .metric-item {
            color: #6b7280;
            font-size: 14px;
        }

        .metric-value {
            font-weight: 500;
            color: #111827;
        }
    </style>
  </head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu --> <?php include 'layout/sidebar.php';?>
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar --> <?php include 'layout/header.php';?>
          <!-- / Navbar -->
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="layout-demo-wrapper" style="background-image: url('assets/img/bg.png'); height: 120px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
              <div class="overlay"></div>
              <!-- Overlay -->
              <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
                <!-- Text container -->
                <div class="row">
                  <div class="col-lg-7 text-white">
                    <h3 class="text-white">Elizabeth III</h3>
                    <div class="d-flex flex-wrap" style="margin-top:-10px">
                      <span class="d-flex align-items-center justify-content-center text-nowrap me-3 vertical-line" style="color:#fff">Mooring: 0023340</span>
                      <span class="d-flex align-items-center justify-content-center text-nowrap me-3 vertical-line" style="color:#fff">Size: 12m</span>
                      <span class="d-flex align-items-center justify-content-center text-nowrap vertical-line" style="color:#fff">Tonnage: XX GT</span>
                      <span class="d-flex align-items-center justify-content-center text-nowrap vertical-line" style="color:#fff">Port: <strong>Santa luzia esq, italy, 20559</strong>
                      </span>
                    </div>
                  </div>
                  <div class="col-lg-5" style="text-align: right;">
                    <button type="button" data-bs-toggle="offcanvas" data-bs-target="#createJob" aria-controls="createJob" class="btn btn-white waves-effect waves-light" style="border-radius: 0px !important;color: #00365d;">
                      <span class="ti-xs ti ti-briefcase me-1"></span>Create Job </button>
                    <button type="button" class="btn " style="border-radius: 0px !important;color: #00365d;border: 1px solid white;color: white;width: 20px;">
                      <span class="ti-xs ti ti-dots-vertical me-1"></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              <div class="col-lg-12 " style="margin-top: -24px">
                <div class="nav-align-top  ">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="false" tabindex="-1"> Overview </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false" tabindex="-1"> Jobs </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button type="button" class="nav-link " role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="true"> Reports </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button type="button" class="nav-link " role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-crew" aria-controls="navs-top-crew" aria-selected="true"> Crew </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button type="button" class="nav-link " role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-yacht" aria-controls="navs-top-yacht" aria-selected="true"> Yacht Info </button>
                    </li>
                  </ul>
                </div>
                <div class="tab-content" style="margin-left: -20px;margin-right: -20px">
                  <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                    <div class="row">
                      <div class="col-lg-12 mt-5">
                        <div class="row">
                          <div class="col-lg-3">
                            <div class="card" style="border: 1px solid #5E8BF7;height: 90px;box-shadow: 0px 16px 30px 0px #4680FF29;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                              <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
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
                            <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                              <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
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
                            <div class="card" style="border: 1px solid #FF005C;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-red.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                              <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#FF005C0D !important">
                                  <img src="assets/img/icon.png" style="width: 20px">
                                </div>
                                <div class="card-info">
                                  <small style="font-size: 11px">Current incidents</small>
                                  <h5 class="mb-0" style="color: #FF005C">03</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="card" style="border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                              <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#2AD7B30D !important">
                                  <i class="ti ti-circle-check ti-sm" style="color:#2AD7B3"></i>
                                </div>
                                <div class="card-info">
                                  <small style="font-size: 11px">In progress jobs</small>
                                  <h5 class="mb-0" style="color: #2AD7B3">04 <span class="badge bg-label-secondary badge-sm" style="width: 60px;height: 20px;font-size: 10px;color: #00365E !important;">3.456 €</span>
                                  </h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8 mt-5">
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
                        <!-- Cards area  -->
                        <a href="jobDetails.php">
                          <div class="col-lg-12 mb-3 mt-4" style="border: 1px solid #C6D2E7;padding: 20px">
                            <div class="row">
                              <div class="col-lg-2">
                                <img src="assets/img/img.png" style="width: 100%">
                              </div>
                              <div class="col-lg-9" style="color:#00365E">
                                <div class="row">
                                  <div style="display: flex">
                                    <span class="badge me-2" style="background: #5E8BF7;height: 30px;">
                                      <i class="ti ti-circle-check me-1 ti-xs"></i>Active </span>
                                    <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#26789</span>
                                    <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">20 Jan 2024</span>
                                    <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                      <img src="assets/img/yacht.png" class="me-1" />Sunseeker Manhattan </span>
                                    <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                      <img src="assets/img/check.png" class="me-1" />Surveyor </span>
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
                                    <img src="assets/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
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
                              <img src="assets/img/img.png" style="width: 100%">
                            </div>
                            <div class="col-lg-9" style="color:#00365E">
                              <div class="row">
                                <div style="display: flex">
                                  <span class="badge bg-label-primary me-2" style="height: 30px;">
                                    <i class="ti ti-eye me-1 ti-xs"></i>Waiting </span>
                                  <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#26789</span>
                                  <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">20 Jan 2024</span>
                                  <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                    <img src="assets/img/yacht.png" class="me-1" />Sunseeker Manhattan </span>
                                  <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                    <img src="assets/img/check.png" class="me-1" />Surveyor </span>
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
                                  <img src="assets/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
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
                              <img src="assets/img/img.png" style="width: 100%">
                            </div>
                            <div class="col-lg-9" style="color:#00365E">
                              <div class="row">
                                <div style="display: flex">
                                  <span class="badge bg-label-primary me-2" style="height: 30px;">
                                    <i class="ti ti-eye me-1 ti-xs"></i>Waiting </span>
                                  <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#26789</span>
                                  <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">20 Jan 2024</span>
                                  <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                    <img src="assets/img/yacht.png" class="me-1" />Sunseeker Manhattan </span>
                                  <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                    <img src="assets/img/check.png" class="me-1" />Surveyor </span>
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
                                  <img src="assets/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
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
                        <nav aria-label="Page navigation" style="float: right;">
                          <ul class="pagination pagination-square pagination-secondary">
                            <li class="page-item first">
                              <a class="page-link waves-effect" href="javascript:void(0);">
                                <i class="ti ti-chevrons-left ti-xs"></i>
                              </a>
                            </li>
                            <li class="page-item prev">
                              <a class="page-link waves-effect" href="javascript:void(0);">
                                <i class="ti ti-chevron-left ti-xs"></i>
                              </a>
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
                              <a class="page-link waves-effect" href="javascript:void(0);">
                                <i class="ti ti-chevron-right ti-xs"></i>
                              </a>
                            </li>
                            <li class="page-item last">
                              <a class="page-link waves-effect" href="javascript:void(0);">
                                <i class="ti ti-chevrons-right ti-xs"></i>
                              </a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                      <div class="col-lg-4 mt-5">
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
                                <img src="assets/img/yacht.png" class="me-1" />Fast and smooth
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
                                <img src="assets/img/yacht.png" class="me-1" />Fast and smooth
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
                                <img src="assets/img/yacht.png" class="me-1" />Fast and smooth
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
                                <img src="assets/img/yacht.png" class="me-1" />Fast and smooth
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
                                <img src="assets/assets/img/avatars/1.png" style="width: 50px;height: 50px !important;" alt="" class="h-auto rounded-circle">
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
                                <img src="assets/assets/img/avatars/1.png" style="width: 50px;height: 50px !important;" alt="" class="h-auto rounded-circle">
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
                      <hr>
                      <div class="col-lg-12">
                        <div class="row">
                          <div class="col-lg-6 mb-3">
                            <i class="ti ti-users ti-md" style="margin-top:-7px;color: #00365E;"></i>
                            <label style="font-size: 18px;color: #00365E;padding-top: 3px;">Yacht crew</label>
                          </div>
                          <div class="col-lg-6 mb-3" style="text-align: right">
                            <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> All Roles </button>
                          </div>
                          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-2">
                            <div class="card" style="box-shadow: none !important;border: 1px solid #C6D2E7;border-radius: 0px;background: url('assets/img/back.png');background-size: 100% 50%;background-repeat: no-repeat;background-position: center bottom;">
                              <div class="card-body text-center">
                                <div class="dropdown btn-pinned">
                                  <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical text-muted"></i>
                                  </button>
                                  <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                      <a class="dropdown-item" href="javascript:void(0);">Share connection</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="javascript:void(0);">Block connection</a>
                                    </li>
                                    <li>
                                      <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                      <a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="mx-auto my-">
                                  <img src="assets/assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                                </div>
                                <h4 class="card-title" style="color: #00365E">Jack Sparrow</h4>
                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                  <a href="javascript:;" class="me-1">
                                    <span class="badge bg-label-primary">Chief Engineer</span>
                                  </a>
                                </div>
                                <span class="pb-1" style="color: #9CAFD1;font-size: 14px;">Joined at 12 December 2022</span>
                                <div class="d-flex align-items-center justify-content-center mt-3">
                                  <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect me-2 w-50">
                                    <i class="ti ti-phone ti-md"></i>
                                  </a>
                                  <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect w-50">
                                    <i class="ti ti-mail ti-md"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                    <div class="col-lg-12 mt-5">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
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
                          <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
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
                          <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
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
                          <div class="card" style="border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#2AD7B30D !important">
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
                    <div class="col-lg-12 mt-5">
                      <div class="row">
                        <!-- Left side area col-lg-12 -->
                        <div class="col-lg-12">
                          <div class="row">
                            <div class="col-lg-5">
                              <i class="ti ti-clipboard-check ti-md" style="color: #00365E"></i>
                              <label style="font-size: 18px;color: #00365E;padding-top: 5px;" class="me-2">Job list</label>
                              <label class="badge bg-label-primary rounded-pill " style="color: #00365E !important">15</label>
                            </div>
                            <div class="col-lg-7" style="text-align: right;color: #00365E;">
                              <div class="row">
                                <div class="col-lg-5">
                                  <div class="input-group input-group-merge">
                                    <span class="input-group-text" id="basic-addon-search31">
                                      <i class="ti ti-search"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                                  </div>
                                </div>
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> All Crew </button>
                                    <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> Order By </button>
                                    <button type="button" class="btn " data-bs-toggle="dropdown" aria-expanded="false" style="color: #9CAFD1;"> Reset </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Cards area  -->
                          <div class="col-lg-12 mb-3 mt-4" style="border: 1px solid #C6D2E7;padding: 20px">
                            <div class="row">
                              <div class="col-lg-2">
                                <img src="assets/img/img.png" style="width: 100%">
                              </div>
                              <div class="col-lg-9" style="color:#00365E">
                                <div class="row">
                                  <div style="display: flex">
                                    <span class="badge me-2" style="background: #5E8BF7;height: 30px;">
                                      <i class="ti ti-circle-check me-1 ti-xs"></i>Active </span>
                                    <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#26789</span>
                                    <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">20 Jan 2024</span>
                                    <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                      <img src="assets/img/yacht.png" class="me-1" />Sunseeker Manhattan </span>
                                    <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                      <img src="assets/img/check.png" class="me-1" />Surveyor </span>
                                  </div>
                                </div>
                                <p style="" class="mt-1">The plastic on the roof needs replacement before winter</p>
                                <p style="margin-top:-15px;font-size:12px;">The service offered by a Professional on WYR is called a Job</p>
                              </div>
                              <div class="col-lg-1" style="text-align: right;">
                                <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>
                              </div>
                              <div class="col-lg-2"></div>
                              <div class="col-lg-7" style="margin-top: -40px">
                                <div class="d-flex flex-wrap" style="margin-top: -7px">
                                  <div class="avatar me-3">
                                    <img src="assets/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
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
                          <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;padding: 20px">
                            <div class="row">
                              <div class="col-lg-2">
                                <img src="assets/img/img.png" style="width: 100%">
                              </div>
                              <div class="col-lg-9" style="color:#00365E">
                                <div class="row">
                                  <div style="display: flex">
                                    <span class="badge bg-label-primary me-2" style="height: 30px;">
                                      <i class="ti ti-eye me-1 ti-xs"></i>Waiting </span>
                                    <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#26789</span>
                                    <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">20 Jan 2024</span>
                                    <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                      <img src="assets/img/yacht.png" class="me-1" />Sunseeker Manhattan </span>
                                    <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">
                                      <img src="assets/img/check.png" class="me-1" />Surveyor </span>
                                  </div>
                                </div>
                                <p style="" class="mt-1">The plastic on the roof needs replacement before winter</p>
                                <p style="margin-top:-15px;font-size:12px;">The service offered by a Professional on WYR is called a Job</p>
                              </div>
                              <div class="col-lg-1" style="text-align: right;">
                                <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>
                              </div>
                              <div class="col-lg-2"></div>
                              <div class="col-lg-7" style="margin-top: -40px">
                                <div class="d-flex flex-wrap" style="margin-top: -7px">
                                  <div class="avatar me-3">
                                    <img src="assets/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                                  </div>
                                  <div>
                                    <p class=" mt-2" style="font-size: 14px;color: #00365E;">Jackie Sparrow</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3 " style="text-align: right;margin-top: -40px">
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
                          <div class="task-card">
        <div class="d-flex">
            <img src="/placeholder.svg?height=48&width=48" alt="Task thumbnail" class="thumbnail me-3">
            <div class="flex-grow-1">
                <div class="d-flex align-items-center gap-2 mb-1">
                    <span class="status-badge">In-job</span>
                    <span class="meta-text">#26789</span>
                    <span class="meta-text">20 Jan 2024</span>
                    <span class="meta-text">surveyos</span>
                </div>
                <h5 class="mb-1">The plastic on the roof needs replacement before winter</h5>
                <p class="meta-text mb-2">The service offered by a Professional on WYR is called a Job</p>
                <div class="d-flex align-items-center gap-2">
                    <img src="/placeholder.svg?height=24&width=24" alt="Avatar" class="avatar">
                    <span class="meta-text">Jackie Sparrow</span>
                </div>
            </div>
        </div>
        <div class="metrics">
            <div class="row">
                <div class="col metric-item">
                    <div>Budget accepted:</div>
                    <div class="metric-value">20.000€</div>
                </div>
                <div class="col metric-item">
                    <div>surveyos</div>
                    <div class="metric-value">00</div>
                </div>
                <div class="col metric-item">
                    <div>Progress</div>
                    <div class="metric-value">02</div>
                </div>
                <div class="col metric-item">
                    <div>Incidents</div>
                    <div class="metric-value">03</div>
                </div>
            </div>
        </div>
    </div>
                          <!-- add Yacht -->
                          <nav aria-label="Page navigation" style="float: right;">
                            <ul class="pagination pagination-square pagination-secondary">
                              <li class="page-item first">
                                <a class="page-link waves-effect" href="javascript:void(0);">
                                  <i class="ti ti-chevrons-left ti-xs"></i>
                                </a>
                              </li>
                              <li class="page-item prev">
                                <a class="page-link waves-effect" href="javascript:void(0);">
                                  <i class="ti ti-chevron-left ti-xs"></i>
                                </a>
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
                                <a class="page-link waves-effect" href="javascript:void(0);">
                                  <i class="ti ti-chevron-right ti-xs"></i>
                                </a>
                              </li>
                              <li class="page-item last">
                                <a class="page-link waves-effect" href="javascript:void(0);">
                                  <i class="ti ti-chevrons-right ti-xs"></i>
                                </a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                        <!-- Left side area end col-lg-12  -->
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade " id="navs-top-messages" role="tabpanel">
                    <div class="col-lg-12 mt-5">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
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
                          <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
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
                          <div class="card" style="border: 1px solid #FF005C;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-red.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#FF005C0D !important">
                                <img src="assets/img/Icon.png">
                              </div>
                              <div class="card-info">
                                <small style="font-size: 11px">Current Incidents</small>
                                <h5 class="mb-0" style="color: #FF005C">05</h5>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card" style="border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#2AD7B30D !important">
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
                              <label style="font-size: 18px;color: #00365E;padding-top: 5px;" class="me-2">Report List</label>
                              <label class="badge bg-label-primary rounded-pill " style="color: #00365E !important">15</label>
                            </div>
                            <div class="col-lg-8" style="text-align: right;color: #00365E;">
                              <div class="row">
                                <div class="col-lg-5">
                                  <div class="input-group input-group-merge">
                                    <span class="input-group-text" id="basic-addon-search31">
                                      <i class="ti ti-search"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                                  </div>
                                </div>
                                <div class="col-lg-7">
                                  <div class="d-flex flex-wrap">
                                    <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> Report Type </button>
                                    <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> Yacht </button>
                                    <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> All Jobs </button>
                                    <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> This Week </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Cards area  -->
                          <div class="col-lg-12 mt-4 mb-4">
                            <table class="table table-responsive">
                              <tr style="font-size: 14px">
                                <td>
                                  <span class="me-2">Reporter</span>
                                  <i class="fa fa-bars-staggered me-2"></i>
                                </td>
                                <td>
                                  <span class="me-2">Title</span>
                                  <i class="fa fa-bars-staggered me-2"></i>
                                </td>
                                <td>
                                  <span class="me-2">Yacht</span>
                                  <i class="fa fa-bars-staggered me-2"></i>
                                </td>
                                <td>
                                  <span class="me-2">Job Id</span>
                                  <i class="fa fa-bars-staggered me-2"></i>
                                </td>
                                <td>
                                  <span class="me-2">Post date</span>
                                  <i class="fa fa-bars-staggered me-2"></i>
                                </td>
                                <td>
                                  <span class="me-2">Report Type</span>
                                  <i class="fa fa-bars-staggered me-2"></i>
                                </td>
                              </tr>
                              <tr class="border" style="color:#00365E;font-size: 14px;">
                                <td>
                                  <div class="d-flex flex-wrap">
                                    <div class="avatar me-2">
                                      <img src="assets/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                                    </div>
                                    <div class="ms-1">
                                      <h6 class="mb-0" style="font-size: 12px;color: #00365E;">Tim Burton</h6>
                                      <span style="color:#5E8BF7;font-size: 10px">All fix LDA</span>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex flex-wrap">
                                    <label class="badge me-1" style="background-color: #FF005C;">new</label>
                                    <span style="font-size: 12px;padding-top: 4px;">The plastic on the roof needs replacement before winter</span>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex flex-wrap">
                                    <img src="assets/img/yacht-black.png" class="me-1" style="width: 20%;">
                                    <span style="font-size: 12px;padding-top: 2px;">Elizabeth III</span>
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
                                      <img src="assets/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                                    </div>
                                    <div class="ms-1">
                                      <h6 class="mb-0" style="font-size: 12px;color: #00365E;">Tim Burton</h6>
                                      <span style="color:#5E8BF7;font-size: 10px">All fix LDA</span>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex flex-wrap">
                                    <label class="badge me-1" style="background-color: #FF005C;">new</label>
                                    <span style="font-size: 12px;padding-top: 4px;">The plastic on the roof needs replacement before winter</span>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex flex-wrap">
                                    <img src="assets/img/yacht-black.png" class="me-1" style="width: 20%;">
                                    <span style="font-size: 12px;padding-top: 2px;">Elizabeth III</span>
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
                                <a class="page-link waves-effect" href="javascript:void(0);">
                                  <i class="ti ti-chevrons-left ti-xs"></i>
                                </a>
                              </li>
                              <li class="page-item prev">
                                <a class="page-link waves-effect" href="javascript:void(0);">
                                  <i class="ti ti-chevron-left ti-xs"></i>
                                </a>
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
                                <a class="page-link waves-effect" href="javascript:void(0);">
                                  <i class="ti ti-chevron-right ti-xs"></i>
                                </a>
                              </li>
                              <li class="page-item last">
                                <a class="page-link waves-effect" href="javascript:void(0);">
                                  <i class="ti ti-chevrons-right ti-xs"></i>
                                </a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                        <!-- Left side area end col-lg-12  -->
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade " id="navs-top-crew" role="tabpanel">
                    <div class="col-lg-12 mt-5">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                                <img src="assets/img/Group.png">
                              </div>
                              <div class="card-info">
                                <small style="font-size: 11px">Captains</small>
                                <h5 class="mb-0" style="color: #00365E">04</h5>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                                <i class="ti ti-settings ti-sm" style="color:#00365E"></i>
                              </div>
                              <div class="card-info">
                                <small style="font-size: 11px">Chief engineers</small>
                                <h5 class="mb-0" style="color: #00365E">12</h5>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                                <i class="ti ti-users ti-sm" style="color:#00365E"></i>
                              </div>
                              <div class="card-info">
                                <small style="font-size: 11px">yacht crew</small>
                                <h5 class="mb-0" style="color: #00365E">05</h5>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card" style="border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#2AD7B30D !important">
                                <i class="ti ti-circle-check" style="color: #2AD7B3"></i>
                              </div>
                              <div class="card-info">
                                <small style="font-size: 11px">Last activity</small>
                                <h5 class="mb-0" style="color: #2AD7B3">21 Jan</h5>
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
                              <i class="ti ti-users me-1 ti-md" style="color: #00365E"></i>
                              <label style="font-size: 18px;color: #00365E;padding-top: 3px;" class="me-2">My Team</label>
                              <label class="badge bg-label-primary rounded-pill " style="color: #00365E !important">10</label>
                            </div>
                            <div class="col-lg-7" style="text-align: right;color: #00365E;">
                              <div class="row">
                                <div class="col-lg-4">
                                  <div class="input-group input-group-merge">
                                    <span class="input-group-text" id="basic-addon-search31">
                                      <i class="ti ti-search"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                                  </div>
                                </div>
                                <div class="col-lg-8">
                                  <div class="d-flex flex-wrap" style="margin-top: -10px">
                                    <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> All Roles </button>
                                    <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> Order By: Incidents </button>
                                    <p class="text-muted" style="margin-top: 15px">Reset</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Cards area  -->
                          <div class="col-lg-12 mt-4 mb-3">
                            <div class="row g-4">
                              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-2">
                                <div class="card" style="box-shadow: none !important;border: 1px solid #C6D2E7;border-radius: 0px;background: url('assets/img/back.png');background-size: 100% 50%;background-repeat: no-repeat;background-position: center bottom;">
                                  <div class="card-body text-center">
                                    <div class="dropdown btn-pinned">
                                      <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical text-muted"></i>
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                          <a class="dropdown-item" href="javascript:void(0);">Share connection</a>
                                        </li>
                                        <li>
                                          <a class="dropdown-item" href="javascript:void(0);">Block connection</a>
                                        </li>
                                        <li>
                                          <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                          <a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="mx-auto my-">
                                      <img src="assets/assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                                    </div>
                                    <h4 class="card-title" style="color: #00365E">Jack Sparrow</h4>
                                    <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                      <a href="javascript:;" class="me-1">
                                        <span class="badge bg-label-primary">Chief Engineer</span>
                                      </a>
                                    </div>
                                    <span class="pb-1" style="color: #9CAFD1;font-size: 14px;">Joined at 12 December 2022</span>
                                    <div class="col-lg-12 mt-2 border-bottom" style="">
                                      <div class="row">
                                        <div class="col-lg-6" style="text-align: left">
                                          <p style="font-size: 14px;color: #00365E">Activity</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right">
                                          <p style="font-size: 14px;color: #00365E;float: right;">14:33h</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-12 mt-3 " style="">
                                      <div class="row">
                                        <div class="col-lg-6" style="text-align: left">
                                          <p style="font-size: 14px;color: #00365E">Yacth</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right">
                                          <p style="font-size: 14px;color: #00365E;float: right;">Elizabeth III</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                      <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect me-2 w-50">
                                        <i class="ti ti-phone ti-md"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect w-50">
                                        <i class="ti ti-mail ti-md"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-2">
                                <div class="card" style="box-shadow: none !important;border: 1px solid #C6D2E7;border-radius: 0px;background: url('assets/img/back.png');background-size: 100% 50%;background-repeat: no-repeat;background-position: center bottom;">
                                  <div class="card-body text-center">
                                    <div class="dropdown btn-pinned">
                                      <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical text-muted"></i>
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                          <a class="dropdown-item" href="javascript:void(0);">Share connection</a>
                                        </li>
                                        <li>
                                          <a class="dropdown-item" href="javascript:void(0);">Block connection</a>
                                        </li>
                                        <li>
                                          <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                          <a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="mx-auto my-">
                                      <img src="assets/assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                                    </div>
                                    <h4 class="card-title" style="color: #00365E">Jack Sparrow</h4>
                                    <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                      <a href="javascript:;" class="me-1">
                                        <span class="badge bg-label-primary">Chief Engineer</span>
                                      </a>
                                    </div>
                                    <span class="pb-1" style="color: #9CAFD1;font-size: 14px;">Joined at 12 December 2022</span>
                                    <div class="col-lg-12 mt-2 border-bottom" style="">
                                      <div class="row">
                                        <div class="col-lg-6" style="text-align: left">
                                          <p style="font-size: 14px;color: #00365E">Activity</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right">
                                          <p style="font-size: 14px;color: #00365E;float: right;">14:33h</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-12 mt-3 " style="">
                                      <div class="row">
                                        <div class="col-lg-6" style="text-align: left">
                                          <p style="font-size: 14px;color: #00365E">Yacth</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right">
                                          <p style="font-size: 14px;color: #00365E;float: right;">Elizabeth III</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                      <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect me-2 w-50">
                                        <i class="ti ti-phone ti-md"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect w-50">
                                        <i class="ti ti-mail ti-md"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-2">
                                <div class="card" style="box-shadow: none !important;border: 1px solid #C6D2E7;border-radius: 0px;background: url('assets/img/back.png');background-size: 100% 50%;background-repeat: no-repeat;background-position: center bottom;">
                                  <div class="card-body text-center">
                                    <div class="dropdown btn-pinned">
                                      <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical text-muted"></i>
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                          <a class="dropdown-item" href="javascript:void(0);">Share connection</a>
                                        </li>
                                        <li>
                                          <a class="dropdown-item" href="javascript:void(0);">Block connection</a>
                                        </li>
                                        <li>
                                          <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                          <a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="mx-auto my-">
                                      <img src="assets/assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                                    </div>
                                    <h4 class="card-title" style="color: #00365E">Jack Sparrow</h4>
                                    <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                      <a href="javascript:;" class="me-1">
                                        <span class="badge bg-label-primary">Chief Engineer</span>
                                      </a>
                                    </div>
                                    <span class="pb-1" style="color: #9CAFD1;font-size: 14px;">Joined at 12 December 2022</span>
                                    <div class="col-lg-12 mt-2 border-bottom" style="">
                                      <div class="row">
                                        <div class="col-lg-6" style="text-align: left">
                                          <p style="font-size: 14px;color: #00365E">Activity</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right">
                                          <p style="font-size: 14px;color: #00365E;float: right;">14:33h</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-12 mt-3 " style="">
                                      <div class="row">
                                        <div class="col-lg-6" style="text-align: left">
                                          <p style="font-size: 14px;color: #00365E">Yacth</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right">
                                          <p style="font-size: 14px;color: #00365E;float: right;">Elizabeth III</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                      <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect me-2 w-50">
                                        <i class="ti ti-phone ti-md"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect w-50">
                                        <i class="ti ti-mail ti-md"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-2">
                                <div class="card" style="box-shadow: none !important;border: 1px solid #C6D2E7;border-radius: 0px;background: url('assets/img/back.png');background-size: 100% 50%;background-repeat: no-repeat;background-position: center bottom;">
                                  <div class="card-body text-center">
                                    <div class="dropdown btn-pinned">
                                      <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical text-muted"></i>
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                          <a class="dropdown-item" href="javascript:void(0);">Share connection</a>
                                        </li>
                                        <li>
                                          <a class="dropdown-item" href="javascript:void(0);">Block connection</a>
                                        </li>
                                        <li>
                                          <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                          <a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="mx-auto my-">
                                      <img src="assets/assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                                    </div>
                                    <h4 class="card-title" style="color: #00365E">Jack Sparrow</h4>
                                    <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                      <a href="javascript:;" class="me-1">
                                        <span class="badge bg-label-primary">Chief Engineer</span>
                                      </a>
                                    </div>
                                    <span class="pb-1" style="color: #9CAFD1;font-size: 14px;">Joined at 12 December 2022</span>
                                    <div class="col-lg-12 mt-2 border-bottom" style="">
                                      <div class="row">
                                        <div class="col-lg-6" style="text-align: left">
                                          <p style="font-size: 14px;color: #00365E">Activity</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right">
                                          <p style="font-size: 14px;color: #00365E;float: right;">14:33h</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-12 mt-3 " style="">
                                      <div class="row">
                                        <div class="col-lg-6" style="text-align: left">
                                          <p style="font-size: 14px;color: #00365E">Yacth</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right">
                                          <p style="font-size: 14px;color: #00365E;float: right;">Elizabeth III</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                      <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect me-2 w-50">
                                        <i class="ti ti-phone ti-md"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect w-50">
                                        <i class="ti ti-mail ti-md"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-2">
                                <div class="card" style="box-shadow: none !important;border: 1px solid #C6D2E7;border-radius: 0px;background: url('assets/img/back.png');background-size: 100% 50%;background-repeat: no-repeat;background-position: center bottom;">
                                  <div class="card-body text-center">
                                    <div class="dropdown btn-pinned">
                                      <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical text-muted"></i>
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                          <a class="dropdown-item" href="javascript:void(0);">Share connection</a>
                                        </li>
                                        <li>
                                          <a class="dropdown-item" href="javascript:void(0);">Block connection</a>
                                        </li>
                                        <li>
                                          <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                          <a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="mx-auto my-">
                                      <img src="assets/assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                                    </div>
                                    <h4 class="card-title" style="color: #00365E">Jack Sparrow</h4>
                                    <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                      <a href="javascript:;" class="me-1">
                                        <span class="badge bg-label-primary">Chief Engineer</span>
                                      </a>
                                    </div>
                                    <span class="pb-1" style="color: #9CAFD1;font-size: 14px;">Joined at 12 December 2022</span>
                                    <div class="col-lg-12 mt-2 border-bottom" style="">
                                      <div class="row">
                                        <div class="col-lg-6" style="text-align: left">
                                          <p style="font-size: 14px;color: #00365E">Activity</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right">
                                          <p style="font-size: 14px;color: #00365E;float: right;">14:33h</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-12 mt-3 " style="">
                                      <div class="row">
                                        <div class="col-lg-6" style="text-align: left">
                                          <p style="font-size: 14px;color: #00365E">Yacth</p>
                                        </div>
                                        <div class="col-lg-6" style="text-align: right">
                                          <p style="font-size: 14px;color: #00365E;float: right;">Elizabeth III</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                      <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect me-2 w-50">
                                        <i class="ti ti-phone ti-md"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect w-50">
                                        <i class="ti ti-mail ti-md"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-2" style="border: 1px dashed #5E8BF7;padding-top: 140px;">
                                <center>
                                  <label class="text-center" style="width: 50px;height: 50px;border-radius: 100%;background: #F2F6FA;">
                                    <i class="ti ti-user-plus ti-md" style="padding-top: 12px;"></i>
                                  </label>
                                  <h4 style="font-size: 20px;color: #00365E;">Add crew member</h4>
                                  <p style="color:#9CAFD1">Add more members to your Yacht crew</p>
                                </center>
                              </div>
                            </div>
                          </div>
                          <!-- add Yacht -->
                          <nav aria-label="Page navigation" style="float: right;">
                            <ul class="pagination pagination-square pagination-secondary">
                              <li class="page-item first">
                                <a class="page-link waves-effect" href="javascript:void(0);">
                                  <i class="ti ti-chevrons-left ti-xs"></i>
                                </a>
                              </li>
                              <li class="page-item prev">
                                <a class="page-link waves-effect" href="javascript:void(0);">
                                  <i class="ti ti-chevron-left ti-xs"></i>
                                </a>
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
                                <a class="page-link waves-effect" href="javascript:void(0);">
                                  <i class="ti ti-chevron-right ti-xs"></i>
                                </a>
                              </li>
                              <li class="page-item last">
                                <a class="page-link waves-effect" href="javascript:void(0);">
                                  <i class="ti ti-chevrons-right ti-xs"></i>
                                </a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                        <!-- Left side area end col-lg-12  -->
                      </div>
                    </div>
                  </div>
                  <div class="container py-4">
        <div class="row g-4">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Header -->
                <div class="d-flex align-items-center mb-4">
                    <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 11c0 2.09.81 4.11 2.34 5.64L11 22v-2h2v2l5.66-5.36C20.19 15.11 21 13.09 21 11c0-4.42-3.58-8-8-8s-8 3.58-8 8z"/>
                        <path d="M7 11a5 5 0 0 1 10 0"/>
                    </svg>
                    <h1 class="h4 mb-0">Yacht details</h1>
                </div>

                <!-- Yacht Photo -->
                <div class="card mb-4" style="border: none;">
                        <img src="assets/img/card-img.png" alt="Yacht" class="card-img-top" style="height: 230px; object-fit: cover;">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center" style="background-color: rgba(255, 255, 255, 0.5);">
                          <button class="btn btn-light">Add/change yacht photo <i class="fas fa-upload"></i>
                          </button>
                        </div>
                        <p class="text-center text-muted" style="margin: 0;">min 1600x230 | max 1920x480</p>
                      </div>

                <!-- Yacht Details Form -->
                <form method="POST" enctype="multipart/form-data">
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label">Yacht Name *</label>
                            <input type="text" class="form-control" name="yacht_name" value="Elizabeth III" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Yacht Manufacturer *</label>
                            <input type="text" class="form-control" name="manufacturer" value="Admiral" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Mooring Number *</label>
                            <input type="text" class="form-control" name="mooring_number" value="5432543232" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Port Base</label>
                            <input type="text" class="form-control" name="port_base" value="Santa luzia esq, italy, 20559">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Yacht Size (in meters) *</label>
                            <input type="number" class="form-control" name="yacht_size" value="15" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Yacht Tonnage (in GT) *</label>
                            <input type="number" class="form-control" name="yacht_tonnage" value="344" required>
                        </div>
                    </div>

                    <!-- Registration Documents -->
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <svg class="me-2" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <polyline points="14 2 14 8 20 8"/>
                                <line x1="16" y1="13" x2="8" y2="13"/>
                                <line x1="16" y1="17" x2="8" y2="17"/>
                                <line x1="10" y1="9" x2="8" y2="9"/>
                            </svg>
                            <h2 class="h6 mb-0">Registration documents</h2>
                        </div>
                        <p class="text-muted small mb-3">
                            These documents are necessary to validate that you are the real owner of this vessel
                        </p>
                        <div class="d-flex gap-3">
                            <div class="document-box">
                                <div class="small mb-2">pexels-pixabay-234...</div>
                                <div class="progress-bar-mini"></div>
                            </div>
                            <div class="document-box dashed">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                    <polyline points="17 8 12 3 7 8"/>
                                    <line x1="12" y1="3" x2="12" y2="15"/>
                                </svg>
                                <div class="small text-muted">Max: 100mb</div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                 <!-- <div class="container mt-4"> -->
                 <div style="width: 300px; border: 1px solid #e0e0e0; border-radius: 8px; padding: 16px;">
                        <h6 style="color: #5a5c69; font-weight: bold; margin-bottom: 16px;">System details</h6>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #e0e0e0; padding-bottom: 8px; margin-bottom: 8px;">
                          <span style="color: #5a5c69;">Created on:</span>
                          <span style="color: #5a5c69;">02 Jan | 16:30h</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #e0e0e0; padding-bottom: 8px; margin-bottom: 8px;">
                          <span style="color: #5a5c69;">Last update</span>
                          <span style="color: #5a5c69;">Yesterday</span>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #e0e0e0; padding-bottom: 8px; margin-bottom: 8px;">
                          <span style="color: #5a5c69;">Created by:</span>
                          <div style="display: flex; align-items: center;">
                            <img src="jackie_sparrow.jpg" alt="Jackie Sparrow" style="width: 24px; height: 24px; border-radius: 50%; margin-right: 8px;">
                            <span style="color: #5a5c69;">Jackie Sparrow</span>
                          </div>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                          <span style="color: #5a5c69;">Owner:</span>
                          <div style="display: flex; align-items: center;">
                            <img src="roger_jackson.jpg" alt="Roger Jackson" style="width: 24px; height: 24px; border-radius: 50%; margin-right: 8px;">
                            <span style="color: #5a5c69;">Roger Jackson</span>
                          </div>
                        </div>
                      </div>
                      <!-- </div> -->
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
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- create job modal -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="createJob" aria-labelledby="createJob" style="width: 500px !important;">
      <div class="offcanvas-header border-bottom">
        <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title">
          <i class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas" aria-label="Close"></i> Create Job post
        </h5>
      </div>
      <div class="offcanvas-body  mx-0 flex-grow-0">
        <h5 style="color: #00365E;font-size: 16px;">Select a yacht to post the job</h5>
        <div class="col-md-12 mb-4">
          <div class="input-group input-group-merge" style="border-radius: 0px !important">
            <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important">
              <i class="ti ti-search"></i>
            </span>
            <input type="text" style="border-radius: 0px !important" class="form-control" placeholder="Search for yacht" aria-label="Search..." aria-describedby="basic-addon-search31">
          </div>
        </div>
        <div class="col-lg-12 mb-4" style="border: 1px solid #5E8BF7;padding: 20px;">
          <div class="row">
            <div class="col-lg-11">
              <h4 style="color: #00365E;font-size: 16px;">Fast and smooth</h4>
              <div class="d-flex flex-wrap">
                <div class="me-2" style="color:#9CAFD1;font-size: 10px">Mooring: <span style="color: #00365E;margin-left: 5px;">0023340</span>
                </div>
                <div style="color:#9CAFD1;font-size: 10px">Port: <span style="color: #00365E;margin-left: 5px;">Santa luzia esq, italy, 20559</span>
                </div>
              </div>
            </div>
            <div class="col-lg-1">
              <i class="ti ti-x ti-md" style="color: #9CAFD1;margin-left: -10px;margin-top: 10px;"></i>
            </div>
          </div>
        </div>
        <div class="col-md-12 mb-4">
          <label style="color:#00365E;font-size: 16px">Job title </label>
          <div class="form-group mt-3" style="position: relative;">
            <input type="text" class="form-control" style="border-radius:0px" placeholder="What is the purpose of this job?" name="">
            <small style="color: #9CAFD1;font-size: 14px;" class="mt-2">0 of 50 max characters.</small>
          </div>
          <label style="color:#00365E;font-size: 16px" class="mt-2">Type & Skills </label>
          <div class="form-group mt-3" style="position: relative;">
            <input type="text" class="form-control" style="border-radius:0px" placeholder="Select the type or skills for the job" name="">
          </div>
          <label style="color:#00365E;font-size: 16px" class="mt-2">Job description</label>
          <div class="form-group mt-3" style="position: relative;">
            <textarea type="text" class="form-control" style="border-radius:0px" rows="5" placeholder="Please describe the issue or present aditional details for the professional" name=""></textarea>
          </div>
          <label style="color:#00365E;font-size: 16px" class="mt-2">Delivery by</label>
          <p style="color:#9CAFD1;font-size: 16px">Please select the date which you want to have the job done</p>
          <div class="col-md-12 mb-4">
            <div class="input-group input-group-merge" style="border-radius: 0px !important">
              <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important">
                <i class="ti ti-calendar"></i>
              </span>
              <input type="text" class="form-control flatpickr-input active" placeholder="YYYY-MM-DD" id="flatpickr-date" readonly="readonly">
              <label class="labelOwn" style="color:#5E8BF7">Deliver by</label>
            </div>
          </div>
          <label style="color:#00365E;font-size: 16px">Do you require surveyor?</label>
          <p style="color:#9CAFD1;font-size: 16px">The job will be open for surveyors applications</p>
          <div class="col-md-12 mb-4">
            <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="ti" data-tick-icon="ti-check" data-style="btn-default" style="border-radius: 0px !important;">
              <option data-icon="ti ti-circle-check">Yes I need a surveyor</option>
              <option data-icon="ti ti-brand-pinterest">Pinterest</option>
              <option data-icon="ti ti-brand-twitch">Twitch</option>
            </select>
          </div>
          <label style="color:#00365E;font-size: 16px">Budget <span style="color: #9CAFD1;margin-left: 5px;">(labor and material)</span>
          </label>
          <div class="col-md-12 mb-4 mt-4">
            <div class="input-group input-group-merge" style="border-radius: 0px !important">
              <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important">EUR</span>
              <input type="text" class="form-control " placeholder="3400">
              <label class="labelOwn" style="color:#5E8BF7">Max budget</label>
            </div>
          </div>
          <label style="color:#00365E;font-size: 16px">Is your budget flexible?</label>
          <div class="col-md-12 mb-4 mt-4">
            <select class="form-control select2" style="border-radius: 0px !important">
              <option>Yes, my budget is flexible</option>
            </select>
          </div>
          <label style="color:#00365E;font-size: 16px">Upload material </label>
          <p style="color:#9CAFD1;font-size: 16px">Select the images, videos (max: 1min), pdf’s or documents</p>
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-4 mb-2">
                <img src="assets/img/rect.png" class="w-100">
              </div>
              <div class="col-lg-4 mb-2">
                <img src="assets/img/rect.png" class="w-100">
              </div>
              <div class="col-lg-4 mb-2">
                <img src="assets/img/rect.png" class="w-100">
              </div>
              <div class="col-lg-4 mb-2">
                <img src="assets/img/rect.png" class="w-100">
              </div>
              <div class="col-lg-4">
                <div class="col-lg-12" style="border: 1px dashed #5E8BF7;height: 125px;text-align: center;padding: 20px;">
                  <i class="ti ti-plus ti-md mt-3" style="color:#00365E"></i>
                  <p class="mt-2" style="color:#9CAFD1;font-size: 13px">Max: 100mb</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <button type="button" class="btn mb-2 d-grid w-100" style="border-radius:0px !important;background: #5E8BF7;color: #fff;">Create job post</button>
            </div>
            <div class="col-lg-6">
              <button type="button" class="btn  d-grid w-100" data-bs-dismiss="offcanvas" style="border-radius:0px !important;background: transparent;color: #5E8BF7;border: 1px solid #C6D2E7;"> Cancel </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/assets/vendor/js/bootstrap.js"></script>
    <script src="assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="assets/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="assets/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="assets/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <!-- Main JS -->
    <script src="assets/assets/js/main.js"></script>
    <!-- Page JS -->
    <script>
        // Handle file upload
        document.querySelector('.upload-btn').addEventListener('click', () => {
            const input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';
            input.onchange = (e) => {
                const file = e.target.files[0];
                if (file) {
                    // Validate file size and dimensions
                    const img = new Image();
                    img.onload = () => {
                        if (img.width < 1600 || img.height < 230 || 
                            img.width > 1920 || img.height > 480) {
                            alert('Image dimensions must be between 1600x230 and 1920x480 pixels');
                            return;
                        }
                        // Update preview
                        document.querySelector('.yacht-photo').src = URL.createObjectURL(file);
                    };
                    img.src = URL.createObjectURL(file);
                }
            };
            input.click();
        });

        // Handle document upload
        document.querySelector('.document-box.dashed').addEventListener('click', () => {
            const input = document.createElement('input');
            input.type = 'file';
            input.onchange = (e) => {
                const file = e.target.files[0];
                if (file) {
                    if (file.size > 100 * 1024 * 1024) { // 100MB
                        alert('File size must be less than 100MB');
                        return;
                    }
                    // Handle file upload logic here
                }
            };
            input.click();
        });
    </script>
  </body>
</html>