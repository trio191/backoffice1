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

    <title>Applications</title>

    <meta name="description" content="" />

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

tr {
    margin-bottom: 20px !important; /* Add space between each row */
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

          <?php include 'layout/header-13.php';?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="layout-demo-wrapper" style="background-image: url('assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
                  <div class="overlay"></div> <!-- Overlay -->
                  <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;"> <!-- Text container -->
                      <div class="row pt-2">
                          <div class="col-lg-7 text-white">
                              <h3 class="text-white">Platform reports</h3>
                              
                          </div>
                          
                      </div>
                  </div>
              </div>
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              
                <div class="col-lg-12 mt-5">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                              <i class="ti ti-file-analytics ti-md" style="color:#00365E"></i>
                            </div>
                            <div class="card-info">
                              <small style="font-size: 11px">Total reports</small>
                              <h5 class="mb-0" style="color: #00365E">05</h5>
                              
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                              <i class="ti ti-circle-check ti-sm" style="color:#00365E"></i>
                            </div>
                            <div class="card-info">
                              <small style="font-size: 11px">Surveyor reports</small>
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
                        <span class="input-group-text" id="basic-addon-search31"><i class="ti ti-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                      </div>
                            </div>
                            <div class="col-lg-7">
                            <div class="d-flex flex-wrap">
  <!-- Report Type Button -->
  <div class="dropdown">
    <button
      type="button"
      class="btn dropdown-toggle waves-effect waves-light"
      data-bs-toggle="dropdown"
      aria-expanded="false"
      style="color: #00365E;"
    >
      Report Type
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Incident</a></li>
      <li><a class="dropdown-item" href="#">Maintenance</a></li>
      <li><a class="dropdown-item" href="#">Inspection</a></li>
    </ul>
  </div>

  <!-- Yacht Button -->
  <div class="dropdown ms-2">
    <button
      type="button"
      class="btn dropdown-toggle waves-effect waves-light"
      data-bs-toggle="dropdown"
      aria-expanded="false"
      style="color: #00365E;"
    >
      Yacht
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Yacht 1</a></li>
      <li><a class="dropdown-item" href="#">Yacht 2</a></li>
      <li><a class="dropdown-item" href="#">Yacht 3</a></li>
    </ul>
  </div>

  <!-- Owner Button -->
  <div class="dropdown ms-2">
    <button
      type="button"
      class="btn dropdown-toggle waves-effect waves-light"
      data-bs-toggle="dropdown"
      aria-expanded="false"
      style="color: #00365E;"
    >
      Owner
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Owner 1</a></li>
      <li><a class="dropdown-item" href="#">Owner 2</a></li>
      <li><a class="dropdown-item" href="#">Owner 3</a></li>
    </ul>
  </div>

  <!-- This Week Button -->
  <div class="dropdown ms-2">
    <button
      type="button"
      class="btn dropdown-toggle waves-effect waves-light"
      data-bs-toggle="dropdown"
      aria-expanded="false"
      style="color: #00365E;"
    >
      This Week
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Monday</a></li>
      <li><a class="dropdown-item" href="#">Tuesday</a></li>
      <li><a class="dropdown-item" href="#">Wednesday</a></li>
    </ul>
  </div>
</div>

                            </div>
                          </div>
                          
                        </div>
                      </div>
                      


                      <!-- Cards area  -->

                      <div class="col-lg-12 mt-4 mb-4">
                        <table class="table table-responsive">
                          <tr style="font-size: 14px">
                            <td><span class="me-2">Reporter</span> <i class="fa fa-bars-staggered me-2"></i></td>
                            <td><span class="me-2">Title</span> <i class="fa fa-bars-staggered me-2"></i></td>
                            <td><span class="me-2">Yacht</span> <i class="fa fa-bars-staggered me-2"></i></td>
                            <td><span class="me-2">Job Id</span> <i class="fa fa-bars-staggered me-2"></i></td>
                            <td><span class="me-2">Post date</span> <i class="fa fa-bars-staggered me-2"></i></td>
                            <td><span class="me-2">Report Type</span> <i class="fa fa-bars-staggered me-2"></i></td>
                          </tr>
                          <tr data-bs-toggle="offcanvas"
                          data-bs-target="#jobReport"
                          aria-controls="jobReport" class="border" style="color:#00365E;font-size: 14px;">
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
    <!-- create job modal -->

                        <div
                          class="offcanvas offcanvas-end"
                          tabindex="-1"
                          id="jobReport"
                          aria-labelledby="jobReport"
                          style="width: 500px !important;"
                        >
                          <div class="offcanvas-header border-bottom">
                            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" 
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"></i> Create Job post</h5>
                            
                          </div>
                          <div class="offcanvas-body  mx-0 flex-grow-0">
                           
                            <div class="col-lg-12 mb-4" style="border: 1px solid #5E8BF7;padding: 20px;">
                                  <div class="d-flex">
                              <span class="me-1" style="color:#5E8BF7;font-size:14px">#26789</span>
                              <div class="me-2" style="border-left: 1px solid #9CAFD1;height: 20px;"></div>
                              <span class="me-2" style="color:#9CAFD1;font-size: 14px">Sunseeker Manhattan</span>
                              <div class="me-2" style="border-left: 1px solid #9CAFD1;height: 20px;"></div>
                              <span style="color:#9CAFD1;font-size: 14px">Surveyor</span>
                            </div>
                                  <h4 class="mt-2" style="color: #00365E;font-size: 18px;">The plastic on the roof needs replacement before winter</h4>
                                 <p class="mb-0" style="color:#00365E;font-size:14px">The service offered by a Professional on WYR is called a Job</p>
                                
                            </div>
                            <label class="badge bg-label-danger mb-2">Incident</label>
                            <div class="col-md-12 mb-4">
                              <label style="color:#00365E;font-size: 20px">Small situation with the floating level</label>
                                  <div class="d-flex mt-2">
                              <span class="me-1" style="color:#00365E;font-size:14px"><i class="ti ti-calendar ti-xs me-1"></i>Posted on: 23 January 2022</span>
                              <div class="me-2" style="border-left: 1px solid #00365E;height: 20px;"></div>
                              <span class="me-2" style="color:#00365E;font-size: 14px">Videos: 1</span>
                              <div class="me-2" style="border-left: 1px solid #00365E;height: 20px;"></div>
                              <span style="color:#00365E;font-size: 14px">Images: 1</span>
                            </div>
                                <p class="mt-3" style="font-size: 14px;color:#00365E">He arived on the boat everything good i start cleaning the and taping the areas to apply the sikaflex. i met Nuno portuguese guy, he said to keep going in what phil asked if I see something else to do to ask phil first. Simon also show up avaiable in case in case i need anything from the boat there was also a girl removing panel from the inside.</p>
                            </div>
                            <label style="color:#00365E;font-size: 18px">Upload material </label>
                            <div class="col-lg-12 mt-2">
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
                              </div>
                            </div>
                            <label class="mt-4" style="color:#00365E;font-size: 18px">Reporter information</label>
                            <p style="color: #9CAFD1;font-size: 16px">Need more details about the report? Contact the reporter directly trought the contacts bellow</p>
                            <div class="col-lg-12" style="border: 1px solid #C6D2E7; padding: 20px;text-align: center;background: url('assets/img/cd.png');background-size: 100% 100%;">
                              <img src="assets/assets/img/avatars/1.png" style="width: 70px;height: 70px;border-radius: 100%;">
                              <p class="mt-2" style="font-size: 18px;color: #00365E;">Tim Burton</p>
                              <label class="badge" style="background:#F2F6FA;color:#5E8BF7;margin-top:-10px">All fix LDA</label><br>
                              <small style="color: #9CAFD1">Eletrician</small><br>
                              <button class="btn bg-white w-100 mt-4" style="border:1px solid #5E8BF7;color: #5E8BF7;border-radius: 0px;" >
                                
                                  <i class="ti ti-phone me-2"></i>
                                  +003 323425 432
                                
                              </button>
                              <button class="btn bg-white w-100 mt-2" style="border:1px solid #C6D2E7;color: #00365E;border-radius: 0px;" >
                                
                                  <i class="ti ti-mail me-2"></i>
                                  jack@allfix.com
                                
                              </button>
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
