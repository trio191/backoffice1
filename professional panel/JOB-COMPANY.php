<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/assets/"
  data-template="vertical-menu-template"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Owner Dashboard</title>

    <meta name="description" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

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

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/assets/js/config.js"></script>
    <style type="text/css">
          .navbar { background-color: #e5eaf4; padding: 15px;}
          .navbar-nav .nav-link { color: #000; font-weight: bold; margin-right: 15px; }
      .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #0F3A4F; /* Adjust opacity and color as needed */
    opacity: 0.5; /* Adjust opacity as needed */
}

.text-container {
    position: relative;
    z-index: 1; /* Ensure text is above the overlay */
}
.vertical-line {
    border-right: 1px solid #9CAFD1; /* Adjust color and thickness as needed */
    padding-right: 5px; /* Adjust spacing between text and line as needed */
    margin-right: 5px; /* Adjust spacing between lines as needed */
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
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php include 'layout/sidebar.php';?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include 'layout/header-2.php';?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="layout-demo-wrapper" style="background-image: url('assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
                  <div class="overlay"></div> <!-- Overlay -->
                  <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;"> <!-- Text container -->
                      <div class="row pt-2">
                          <div class="col-lg-7 text-white">
                              <h3 class="text-white">Find the right professional</h3>
                              
                          </div>
                          <div class="col-lg-5" style="text-align: right;">
                            
                      <!-- <button type="button" class="btn btn-white waves-effect waves-light"         style="border-radius: 0px !important;color: #00365d;">
                            <i class="ti ti-briefcase ti-sm me-2"></i> Create Job
                           </button> -->
                        
                          </div>
                      </div>
                  </div>
              </div>
              <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="container-fluid">
                    <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link" href="new-1.php">Available jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="new-2.php">My Jobs</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="new-3.php">Bookmarked</a>
                    </li>
                    </ul>
                  </div>
            </nav>
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              
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
                        <span class="input-group-text" id="basic-addon-search31"><i class="ti ti-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                      </div>
                            </div>
                            <div class="col-lg-7">
                              <div class="d-flex flex-wrap">
                            <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                             All Crew
                            </button>
                            <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                             Order By
                            </button>
                            <button type="button" class="btn " data-bs-toggle="dropdown" aria-expanded="false" style="color: #9CAFD1;">
                             Reset
                            </button>
                          </div>
                            </div>
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
                                <span class="badge me-2"  style="background: #5E8BF7;height: 30px;"><i class="ti ti-circle-check me-1 ti-xs"></i>Active</span>
                                <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#26789</span>
                                <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">20 Jan 2024</span>
                                <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;"><img src="assets/img/yacht.png" class="me-1" />Sunseeker Manhattan</span>
                                <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;"><img src="assets/img/check.png" class="me-1" />Surveyor</span>

                              </div>
                            </div>
                            <p style="" class="mt-1">The plastic on the roof needs replacement before winter</p>
                            <p style="margin-top:-15px;font-size:12px;">The service offered by a Professional on WYR is called a Job</p>
                            
                          </div>
                          <div class="col-lg-1" style="text-align: right;">
                            <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>

                          </div>
                          <div class="col-lg-2">
                          </div>
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
                      </a>
                      <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7;padding: 20px">
                        <div class="row">
                          <div class="col-lg-2">
                            <img src="assets/img/img.png" style="width: 100%">
                          </div>
                          <div class="col-lg-9" style="color:#00365E">
                            <div class="row">
                              <div style="display: flex">
                                <span class="badge bg-label-primary me-2"  style="height: 30px;"><i class="ti ti-eye me-1 ti-xs"></i>Waiting</span>
                                <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">#26789</span>
                                <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">20 Jan 2024</span>
                                <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;"><img src="assets/img/yacht.png" class="me-1" />Sunseeker Manhattan</span>
                                <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1;font-size: 13px;"><img src="assets/img/check.png" class="me-1" />Surveyor</span>

                              </div>
                            </div>
                            <p style="" class="mt-1">The plastic on the roof needs replacement before winter</p>
                            <p style="margin-top:-15px;font-size:12px;">The service offered by a Professional on WYR is called a Job</p>
                            
                          </div>
                          <div class="col-lg-1" style="text-align: right;">
                            <i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i>

                          </div>
                          <div class="col-lg-2">
                          </div>
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

                      <!-- add Yacht -->

                      <!-- <div class="col-lg-12 mb-4" style="border: 1px dashed #5E8BF7;height: 156px;padding: 20px;">
                        <center>
                          <label class="text-center" style="width: 50px;height: 50px;border-radius: 100%;background: #F2F6FA;">
                            <i class="ti ti-briefcase ti-md" style="padding-top: 12px;color: #5E8BF7;"></i>
                          </label>
                          <h4 style="font-size: 20px;color: #00365E;">Create a job post</h4>
                        </center>
                      </div> -->
                      <nav aria-label="Page navigation" style="float: right;">
                          <ul class="pagination pagination-square pagination-secondary">
                            <li class="page-item first">
                              <a class="page-link waves-effect" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-xs"></i></a>
                            </li>
                            <li class="page-item prev">
                              <a class="page-link waves-effect" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs"></i></a>
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
                              <a class="page-link waves-effect" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs"></i></a>
                            </li>
                            <li class="page-item last">
                              <a class="page-link waves-effect" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-xs"></i></a>
                            </li>
                          </ul>
                        </nav>
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
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/assets/vendor/js/bootstrap.js"></script>
    <script src="assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="assets/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="assets/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="assets/assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="assets/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/assets/js/main.js"></script>

    <!-- Page JS -->
  </body>
</html>
