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
    <link rel="stylesheet" href="assets/assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="assets/assets/vendor/libs/tagify/tagify.css" />
    <link rel="stylesheet" href="assets/assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="assets/assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="assets/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="assets/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css" />
    <link rel="stylesheet" href="assets/assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
    <link rel="stylesheet" href="assets/assets/vendor/libs/pickr/pickr-themes.css" />

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

          <?php include 'layout/header.php';?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="layout-demo-wrapper" style="background-image: url('assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
                  <div class="overlay"></div> <!-- Overlay -->
                  <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;"> <!-- Text container -->
                      <div class="row pt-2">
                          <div class="col-lg-7 text-white">
                              <h3 class="text-white">New proposals for you</h3>
                              
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
                              <i class="ti ti-briefcase ti-sm" style="color:#00365E"></i>
                            </div>
                            <div class="card-info">
                              <small style="font-size: 11px">Jobs Posted</small>
                              <h5 class="mb-0" style="color: #00365E">05</h5>
                              
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
                          <i class="ti ti-file-export ti-md" style="color: #00365E"></i>
                          <label style="font-size: 18px;color: #00365E;padding-top: 5px;" class="me-2">Applications</label>
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
                             Status
                            </button>
                            <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                             All Jobs
                            </button>
                            <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                             All Yachts
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
                            <td><span class="me-2">User name</span> <i class="fa fa-bars-staggered me-2"></i></td>
                            <td><span class="me-2">Application date</span> <i class="fa fa-bars-staggered me-2"></i></td>
                            <td><span class="me-2">Message</span> <i class="fa fa-bars-staggered me-2"></i></td>
                            <td><span class="me-2">Job Id</span> <i class="fa fa-bars-staggered me-2"></i></td>
                            <td><span class="me-2">Offer</span> <i class="fa fa-bars-staggered me-2"></i></td>
                            <td><span class="me-2">Status</span> <i class="fa fa-bars-staggered me-2"></i></td>
                          </tr>
                          <tr class="border" data-bs-toggle="offcanvas"
                          data-bs-target="#createJob"
                          aria-controls="createJob" style="color:#00365E;font-size: 14px;">
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
                                <i class="ti ti-calendar me-1"></i>
                                <span>22 Jan 2023</span>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex flex-wrap">
                                <label class="badge me-1" style="background-color: #FF005C;">new</label>
                                <span style="font-size: 12px;padding-top: 4px;">The plastic on the roof needs replacement before winter</span>
                              </div>
                            </td>
                            <td>
                              <span style="color: #5E8BF7">#34563</span>
                            </td>
                            <td>
                              <div class="d-flex flex-wrap">
                                <i class="ti ti-coin me-1"></i>
                                <span style="font-size: 12px;padding-top: 2px;">10.500€</span>
                              </div>
                            </td>
                            <td>
                              <label class="badge bg-label-primary">
                                <i class="ti ti-eye ti-xs me-1" ></i>
                                <span style="padding-top: 4px;">Under analysis </span>
                              </label>
                            </td>
                          </tr>
                          <tr class="border mt-3" style="color:#00365E;font-size: 14px;">
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
                                <i class="ti ti-calendar me-1"></i>
                                <span>22 Jan 2023</span>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex flex-wrap">
                                <label class="badge me-1" style="background-color: #FF005C;">new</label>
                                <span style="font-size: 12px;padding-top: 4px;">The plastic on the roof needs replacement before winter</span>
                              </div>
                            </td>
                            <td>
                              <span style="color: #5E8BF7">#34563</span>
                            </td>
                            <td>
                              <div class="d-flex flex-wrap">
                                <i class="ti ti-coin me-1"></i>
                                <span style="font-size: 12px;padding-top: 2px;">10.500€</span>
                              </div>
                            </td>
                            <td>
                              <label class="badge bg-label-primary">
                                <i class="ti ti-eye ti-xs me-1" ></i>
                                <span style="padding-top: 4px;">Under analysis </span>
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
    <!-- Job Application modal -->

                        <div
                          class="offcanvas offcanvas-end"
                          tabindex="-1"
                          id="createJob"
                          aria-labelledby="createJob"
                          style="width: 500px !important;"
                        >
                          <div class="offcanvas-header border-bottom">
                            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" 
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"></i>Job Application</h5>
                            
                          </div>
                          <div class="offcanvas-body  mx-0 flex-grow-0">
                           <div class="d-flex">
                             <label class="badge bg-label-primary me-2">
                              <i class="ti ti-eye me-1 ti-xs"></i>
                               <span>Under analysis</span>
                             </label>
                             <label class="badge bg-label-danger me-2">
                              <i class="ti ti-circle-x me-1 ti-xs"></i>
                               <span>Refused</span>
                             </label>
                             <label class="badge bg-label-success me-2">
                              <i class="ti ti-briefcase me-1 ti-xs"></i>
                               <span>Hired</span>
                             </label>
                           </div>
                        <h5 class="mt-3" style="color: #00365E;font-size: 20px;">The plastic on the roof needs replacement before winter</h5>
                            <div class="d-flex">
                              <span class="me-1" style="color:#5E8BF7;font-size:14px">#26789</span><i class="ti ti-upload ti-xs me-2" style="color:#5E8BF7"></i>
                              <div class="me-2" style="border-left: 1px solid #9CAFD1;height: 20px;"></div>
                              <span style="color:#9CAFD1;font-size: 14px">Sunseeker Manhattan</span>
                            </div>
                            <div class="col-md-12 mb-4 mt-4">
                              <div class="row">
                                <div class="col-lg-4">
                                  <div class="d-flex flex-wrap">
                              <div class="avatar me-3">
                                <img src="assets/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" style="width:40px;height: 40px">
                              </div>
                              <div>
                                <h6 class="mb-0" style="font-size: 14px;color: #00365E;">Tim Burton</h6>
                                <small style="font-size:13px;color:#5E8BF7">All fix LDA</small>
                              </div>
                            </div>
                                </div>
                                <div class="col-lg-3">
                                  <label class="badge mt-2" style="background:#5E8BF7;color:#fff" >Professional</label>
                                </div>
                                <div class="col-lg-5 " style="text-align: right;">
                                  <p class="mt-2" style="color:#9CAFD1;font-size: 14px;"><i class="ti ti-calendar ti-xs me-2"></i>16 Jan 2023</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                              <p style="color: #00365E;font-size: 14px;">Hello there! Hope everything is going well. WE are a small company but eager to work and with multiple professionals around hte word. Currently we have 1 professional in your location and ready to do the job that you requested.</p>
                              <p style="color: #00365E;font-size: 14px;">Please check below the details and let me know if I can help you with something else.</p>
                            </div>
                            <label class="mt-2" style="color:#00365E;font-size: 16px">Workplan</label>
                            <p class="mt-2" style="color: #00365E;font-size: 14px;">Recoger trabajo, para cambio de ventana en el taller.
                               after that we’ll check the sitaution and provide a global review
                               Case there are some sitaution that we need to address we’ll contact you or request a change on the quotation
                             </p>
                             <label class="mt-2 mb-2" style="color:#00365E;font-size: 16px">Calendar</label>
                            <div class="col-md-12 mb-2 p-2" style="border: 1px solid #C6D2E7;">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="d-flex">
                                    <i class="ti ti-calendar ti-xs me-2" style="color:#00365E"></i>
                                    <span style="color:#00365E">Availability:</span>
                                  </div>
                                </div>
                                <div class="col-lg-6" style="text-align: right">
                                  <span style="color:#00365E">20 Jan 2024</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12 mb-2 p-2" style="border: 1px solid #C6D2E7;">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="d-flex">
                                    <i class="ti ti-clock ti-xs me-2" style="color:#00365E"></i>
                                    <span style="color:#00365E">Timeframe:</span>
                                  </div>
                                </div>
                                <div class="col-lg-6" style="text-align: right">
                                  <span style="color:#00365E">04 days</span>
                                </div>
                              </div>
                            </div>
                            <label class="mt-4 mb-2" style="color:#00365E;font-size: 16px">Costs <span style="color: #9CAFD1">(labor and material)</span></label>
                            <div class="col-md-12 mb-2 p-2" style="border: 1px solid #C6D2E7;">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="d-flex">
                                    <i class="ti ti-coin ti-xs me-2" style="color:#00365E"></i>
                                    <span style="color:#00365E">Labor cost:</span>
                                  </div>
                                </div>
                                <div class="col-lg-6" style="text-align: right">
                                  <span style="color:#00365E">15.500</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12 mb-2 p-2" style="border: 1px solid #C6D2E7;">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="d-flex">
                                    <i class="ti ti-coin ti-xs me-2" style="color:#00365E"></i>
                                    <span style="color:#00365E">Material cost:</span>
                                  </div>
                                </div>
                                <div class="col-lg-6" style="text-align: right">
                                  <span style="color:#00365E">2.500</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12 mb-2 p-2" >
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="d-flex">
                                    <span style="color:#9CAFD1">Total:</span>
                                  </div>
                                </div>
                                <div class="col-lg-6" style="text-align: right">
                                  <span style="color:#9CAFD1">18.00</span>
                                </div>
                              </div>
                            </div>
                            <label class="mt-2 mb-2" style="color:#00365E;font-size: 16px">Payment options</label>
                            <div class="col-md-12 mb-2 p-2" style="border: 1px solid #C6D2E7;">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="d-flex">
                                    <i class="ti ti-credit-card ti-xs me-2" style="color:#00365E"></i>
                                    <span style="color:#00365E">Payment options</span>
                                  </div>
                                </div>
                                <div class="col-lg-6" style="text-align: right">
                                  <span style="color:#00365E">3 installments <span style="color:#9CAFD1"> (1000€/each)</span></span>
                                </div>
                              </div>
                            </div>
                            <p style="color:#FF005C;font-size: 13px;"> <i class="ti ti-exclamation-mark"></i> First installment to be paid upon acceptance of the offer</p>
                            <div class="col-lg-12">
                              <div class="row">
                                <div class="col-lg-12">
                                  <button type="button" class="btn mb-2 d-grid w-100" style="border-radius:0px !important;background: #2AD7B3;color: #fff;">Accept offer</button>
                                </div>
                                <div class="col-lg-6">
                                  <button type="button" data-bs-toggle="offcanvas"
                          data-bs-target="#requestNew"
                          aria-controls="requestNew" class="btn mb-2 d-grid w-100" style="border-radius:0px !important;background: #F2F6FA;color: #00365E;">Request new offer</button>
                                </div>
                                <div class="col-lg-6">
                                  <button
                              type="button"
                              class="btn  d-grid w-100"
                              data-bs-dismiss="offcanvas"
                              style="border-radius:0px !important;background: #FF005C0D;color: #FF005C;"
                            >
                              Reject offer
                            </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- request New modal -->

                        <div
                          class="offcanvas offcanvas-end"
                          tabindex="-1"
                          id="requestNew"
                          aria-labelledby="requestNew"
                          style="width: 500px !important;"
                        >
                          <div class="offcanvas-header border-bottom">
                            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" 
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"></i>Request new offer</h5>
                            
                          </div>
                          <div class="offcanvas-body  mx-0 flex-grow-0">
                           <div class="d-flex">
                             <label class="badge bg-label-primary me-2">
                              <i class="ti ti-eye me-1 ti-xs"></i>
                               <span>Under analysis</span>
                             </label>
                             <label class="badge bg-label-danger me-2">
                              <i class="ti ti-circle-x me-1 ti-xs"></i>
                               <span>Refused</span>
                             </label>
                             <label class="mt-1">
                               <span style="color:#00365E;font-size: 13px">12 February 2024</span>
                             </label>
                           </div>
                        <h5 class="mt-3" style="color: #00365E;font-size: 20px;">The plastic on the roof needs replacement before winter</h5>
                            <div class="d-flex">
                              <span class="me-1" style="color:#5E8BF7;font-size:14px">#26789</span><i class="ti ti-upload ti-xs me-2" style="color:#5E8BF7"></i>
                            </div>
                            <div class="col-md-12 mb-4 mt-4">
                              <div class="row">
                                <div class="col-lg-4">
                                  <div class="d-flex flex-wrap">
                              <div class="avatar me-3">
                                <img src="assets/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" style="width:40px;height: 40px">
                              </div>
                              <div>
                                <h6 class="mb-0" style="font-size: 14px;color: #00365E;">Tim Burton</h6>
                                <small style="font-size:13px;color:#5E8BF7">All fix LDA</small>
                              </div>
                            </div>
                                </div>
                                <div class="col-lg-3">
                                  <label class="badge mt-2" style="background:#5E8BF7;color:#fff" >Professional</label>
                                </div>
                                <div class="col-lg-5 " style="text-align: right;">
                                  <p class="mt-2" style="color:#9CAFD1;font-size: 14px;"><i class="ti ti-calendar ti-xs me-2"></i>16 Jan 2023</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                              <label style="color: #00365E;font-size: 16px;">Topics to change for the next offer</label>
                              <p class="mt-2" style="color: #00365E;font-size: 14px;">Select the topics that the professional should consider to change in the next offer</p>
                            </div>
                            
                            <div class="col-md-12 mb-2">
                              <div class="form-check mt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1" style="font-size: 14px;color: #00365E;"> Workplan not ideal </label>
                              </div>
                              <div class="form-check mt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1" style="font-size: 14px;color: #00365E;"> Availability - (too much to wait)</label>
                              </div>
                              <div class="form-check mt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1" style="font-size: 14px;color: #00365E;"> Timeframa - Job takes too long do be completed</label>
                              </div>
                              <div class="form-check mt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1" style="font-size: 14px;color: #00365E;"> Cost - too expensive. Either reduce the labor or material cost</label>
                              </div>
                              <div class="form-check mt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1" style="font-size: 14px;color: #00365E;"> Payment options - Increase the installments quantity</label>
                              </div>
                              <div class="form-check mt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1" style="font-size: 14px;color: #00365E;"> Payment options - Reduce the installments quantity</label>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                              <div class="row">
                                <div class="col-lg-6">
                                  <button type="button" data-bs-toggle="offcanvas"
                          data-bs-target="#requestNewOffer"
                          aria-controls="requestNewOffer" class="btn mb-2 d-grid w-100" style="border-radius:0px !important;background: #5E8BF7;color: #fff;">Request new offer</button>
                                </div>
                                <div class="col-lg-6">
                                  <button
                              type="button"
                              class="btn  d-grid w-100"
                              data-bs-dismiss="offcanvas"
                              style="border-radius:0px !important;background: transparent;color: #5E8BF7;border: 1px solid #C6D2E7;"
                            >
                              Cancel
                            </button>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Request New Offer modal -->

                        <div
                          class="offcanvas offcanvas-end"
                          tabindex="-1"
                          id="requestNewOffer"
                          aria-labelledby="requestNewOffer"
                          style="width: 500px !important;"
                        >
                          <div class="offcanvas-header border-bottom">
                            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" 
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"></i>Job Application</h5>
                            
                          </div>
                          <div class="offcanvas-body  mx-0 flex-grow-0">
                            <h5 class="mt-3" style="color: #00365E;font-size: 20px;">The plastic on the roof needs replacement before winter</h5>
                           <div class="d-flex">
                             <label class="badge  me-2" style="background:#00365E;color:#fff">
                              <i class="ti ti-star me-1 ti-xs"></i>
                               <span>Verified</span>
                             </label>
                             <label class="mt-1">
                               <span style="color:#5E8BF7;font-size:13px">#34563</span>
                             </label>
                             
                           </div>
                        
                            <div class="col-md-12 mb-4 mt-4">
                              <div class="row">
                                <div class="col-lg-6 mb-2" >
                                  <div style="border: 1px solid #C6D2E7;padding: 10px;">
                                    <p class="mb-0" style="color:#00365E;font-size: 14px;">Deliver by:<strong>12 Dec 2024</strong></p>
                                  </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                  <div style="border: 1px solid #C6D2E7;padding: 10px;">
                                    <p class="mb-0" style="color:#00365E;font-size: 14px;">Yacht Size: <strong>0 - 10 meters</strong></p>
                                  </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                  <div style="border: 1px solid #C6D2E7;padding: 10px;">
                                    <p class="mb-0" style="color:#00365E;font-size: 14px;">Manufatorer:<strong>Admiral</strong></p>
                                  </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                  <div style="border: 1px solid #C6D2E7;padding: 10px;">
                                    <p class="mb-0" style="color:#00365E;font-size: 14px;">Surveyor:<strong>Yes</strong></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                              <label style="color: #00365E;font-size: 16px;">Message</label>
                              <div class="form-group mt-3" style="position: relative;">
                                    <textarea type="text" class="form-control" rows="5" style="border-radius:0px" placeholder="Why are you suitable for this job?" name=""></textarea>
                                    <small style="font-size:14px;color: #9CAFD1;">0 of 3000 max characters.</small>
                                  </div>
                            </div>
                            
                            <div class="col-md-12 mb-4">
                              <label style="color: #00365E;font-size: 16px;">Availability</label>
                              <div class="input-group input-group-merge mt-3" style="border-radius: 0px !important">
                        <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important"><i class="ti ti-calendar"></i></span>
                        <input type="text" class="form-control flatpickr-input active" placeholder="YYYY-MM-DD" id="flatpickr-date" readonly="readonly">
                        <label class="labelOwn" style="color:#5E8BF7">Available after</label>
                      </div>
                            </div>
                            <div class="col-md-12 mb-4">
                              <label style="color: #00365E;font-size: 16px;">Timeframe</label>
                              <div class="input-group input-group-merge mt-3" style="border-radius: 0px !important">
                        <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important"><i class="ti ti-clock"></i></span>
                        <input type="text" class="form-control " placeholder="Timeframe for completing the job" >
                      </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                              <label style="color: #00365E;font-size: 16px;">Workplan</label>
                              <div class="form-group mt-3" style="position: relative;">
                                    <textarea type="text" class="form-control" rows="5" style="border-radius:0px" placeholder="Please describe your work plan" name=""></textarea>
                                    <small style="font-size:14px;color: #9CAFD1;">0 of 3000 max characters.</small>
                                  </div>
                            </div>
                            <div class="col-md-12 mb-4">
                              <label style="color: #00365E;font-size: 16px;">Costs<span style="color:#9CAFD1">(labor and material)</span></label>
                              <div class="input-group input-group-merge mt-3" style="border-radius: 0px !important">
                        <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important">EUR</span>
                        <input type="text" class="form-control" placeholder="3400" >
                        <label class="labelOwn" style="color:#5E8BF7">Labor cost</label>
                      </div>
                              <div class="input-group input-group-merge mt-3" style="border-radius: 0px !important">
                        <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important">EUR</span>
                        <input type="text" class="form-control" placeholder="Material cost" >
                      </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                              <div class="w-100" style="background:#F2F6FA;padding: 10px;">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="d-flex">
                                      <i class="ti ti-coin ti-xs me-2" style="color:#9CAFD1"></i>
                                      <span style="color:#9CAFD1">Total cost</span>
                                    </div>
                                  </div>
                                  <div class="col-lg-6" style="text-align: right">
                                    <span style="color:#9CAFD1">3400</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12 mb-4">
                             <label style="color: #00365E;font-size: 16px;">Payment options</label>
                          <select
                            class="selectpicker w-100 show-tick mt-2"
                            id="selectpickerIcons"
                            data-icon-base="ti"
                            data-tick-icon="ti-check"
                            data-style="btn-default"
                            style="border-radius: 0px !important;"
                          >
                            <option data-icon="ti ti-credit-card">3 Installments (1000€/each)</option>
                            <option data-icon="ti ti-brand-pinterest">Pinterest</option>
                            <option data-icon="ti ti-brand-twitch">Twitch</option>
                          </select>
                        </div>
                            <div class="col-lg-12 mt-4">
                              <div class="row">
                                <div class="col-lg-12">
                                  <button type="button" class="btn mb-2 d-grid w-100" style="border-radius:0px !important;background: #5E8BF7;color: #fff;">Apply for this job</button>
                                </div>
                                
                                </div>
                                <p style="color: #FF005C;font-size: 13px;">
                                  <i class="ti ti-exclamation-mark"></i>
                                  Your proposal will be reviewed and you will get an email with the job owner decision.
                                </p>
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

    <script src="assets/assets/vendor/libs/select2/select2.js"></script>
    <script src="assets/assets/vendor/libs/tagify/tagify.js"></script>
    <script src="assets/assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
    <script src="assets/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="assets/assets/vendor/libs/bloodhound/bloodhound.js"></script>
    <script src="assets/assets/vendor/libs/moment/moment.js"></script>
    <script src="assets/assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="assets/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="assets/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
    <script src="assets/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js"></script>
    <script src="assets/assets/vendor/libs/pickr/pickr.js"></script>
    <!-- Main JS -->
    <script src="assets/assets/js/main.js"></script>
    <!-- Page JS -->
    <script src="assets/assets/js/forms-selects.js"></script>
    <script src="assets/assets/js/forms-tagify.js"></script>
    <script src="assets/assets/js/forms-typeahead.js"></script>
    <script src="assets/assets/js/forms-pickers.js"></script>
  </body>
</html>
