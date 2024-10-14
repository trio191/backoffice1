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

    <title>Team Dashboard</title>

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
                              <h3 class="text-white">Manage your team</h3>
                              
                          </div>
                          <div class="col-lg-5" style="text-align: right;">
                            
                          <button type="button" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasEnd"
                          aria-controls="offcanvasEnd" class="btn btn-white waves-effect waves-light" style="border-radius: 0px !important;color: #00365d;">
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
                          <i class="ti ti-users me-1 ti-md" style="color: #00365E" ></i>
                          <label style="font-size: 18px;color: #00365E;padding-top: 3px;" class="me-2">My Team</label>
                          <label class="badge bg-label-primary rounded-pill " style="color: #00365E !important">10</label>
                        </div>
                        <div class="col-lg-7" style="text-align: right;color: #00365E;">
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="input-group input-group-merge">
                        <span class="input-group-text" id="basic-addon-search31"><i class="ti ti-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                      </div>
                            </div>
                            <div class="col-lg-8">
                              <div class="d-flex flex-wrap" style="margin-top: -10px">
                            <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                             All Roles
                            </button>
                            <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                             Order By: Incidents
                            </button>
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
                          <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
                        </ul>
                      </div>
                      <div class="mx-auto my-">
                        <img src="assets/assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                      </div>
                      <h4 class="card-title" style="color: #00365E">Jack Sparrow</h4>
                      
                      <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                        <a href="javascript:;" class="me-1"><span class="badge bg-label-primary">Chief Engineer</span></a>
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
                        
                        <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect me-2 w-50"><i class="ti ti-phone ti-md"></i></a>
                        <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect w-50"><i class="ti ti-mail ti-md"></i></a>
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
                          <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
                        </ul>
                      </div>
                      <div class="mx-auto my-">
                        <img src="assets/assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                      </div>
                      <h4 class="card-title" style="color: #00365E">Jack Sparrow</h4>
                      
                      <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                        <a href="javascript:;" class="me-1"><span class="badge bg-label-primary">Chief Engineer</span></a>
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
                        
                        <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect me-2 w-50"><i class="ti ti-phone ti-md"></i></a>
                        <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect w-50"><i class="ti ti-mail ti-md"></i></a>
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
                          <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
                        </ul>
                      </div>
                      <div class="mx-auto my-">
                        <img src="assets/assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                      </div>
                      <h4 class="card-title" style="color: #00365E">Jack Sparrow</h4>
                      
                      <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                        <a href="javascript:;" class="me-1"><span class="badge bg-label-primary">Chief Engineer</span></a>
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
                        
                        <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect me-2 w-50"><i class="ti ti-phone ti-md"></i></a>
                        <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect w-50"><i class="ti ti-mail ti-md"></i></a>
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
                          <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
                        </ul>
                      </div>
                      <div class="mx-auto my-">
                        <img src="assets/assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                      </div>
                      <h4 class="card-title" style="color: #00365E">Jack Sparrow</h4>
                      
                      <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                        <a href="javascript:;" class="me-1"><span class="badge bg-label-primary">Chief Engineer</span></a>
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
                        
                        <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect me-2 w-50"><i class="ti ti-phone ti-md"></i></a>
                        <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect w-50"><i class="ti ti-mail ti-md"></i></a>
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
                          <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
                        </ul>
                      </div>
                      <div class="mx-auto my-">
                        <img src="assets/assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                      </div>
                      <h4 class="card-title" style="color: #00365E">Jack Sparrow</h4>
                      
                      <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                        <a href="javascript:;" class="me-1"><span class="badge bg-label-primary">Chief Engineer</span></a>
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
                        
                        <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect me-2 w-50"><i class="ti ti-phone ti-md"></i></a>
                        <a href="javascript:;" class="btn btn-label-secondary btn-icon waves-effect w-50"><i class="ti ti-mail ti-md"></i></a>
                      </div>
                    </div>
                  </div>
                          </div>
                          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-2" style="border: 1px dashed #5E8BF7;padding-top: 140px;">
                            <center>
                          <label class="text-center" style="width: 50px;height: 50px;border-radius: 100%;background: #F2F6FA;">
                            <i class="ti ti-user-plus ti-md" style="padding-top: 12px;" ></i>
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
    <!-- add crew modal -->
    <div
                          class="offcanvas offcanvas-end"
                          tabindex="-1"
                          id="offcanvasEnd"
                          aria-labelledby="offcanvasEndLabel"
                          style="width: 500px !important;"
                        >
                          <div class="offcanvas-header border-bottom">
                            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" 
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"></i> Add crew member</h5>
                            
                          </div>
                          <div class="offcanvas-body  mx-0 flex-grow-0">
                            <h5 style="color: #00365E;font-size: 16px;">Invite user as:</h5>
                            <p style="color:#9CAFD1;font-size: 14px;margin-top: -10px;">Please select the account type for this user</p>
                            <div class="col-md-12 mb-4">
                          <select
                            class="selectpicker w-100 show-tick"
                            id="selectpickerIcons"
                            data-icon-base="ti"
                            data-tick-icon="ti-check"
                            data-style="btn-default"
                            style="border-radius: 0px !important;"
                          >
                            <option data-icon="ti ti-brand-instagram">Captain</option>
                            <option data-icon="ti ti-brand-pinterest">Pinterest</option>
                            <option data-icon="ti ti-brand-twitch">Twitch</option>
                          </select>
                        </div>
                        <h5 style="color: #00365E;font-size: 16px;">Add to yacths:</h5>
                            <p style="color:#9CAFD1;font-size: 14px;margin-top: -10px;">A captain or engineer can be added to multiple yachts</p>
                            <div class="col-md-12 mb-4">
                              <div class="input-group input-group-merge" style="border-radius: 0px !important">
                        <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important"><i class="ti ti-search"></i></span>
                        <input type="text" style="border-radius: 0px !important"  class="form-control" placeholder="Search for yacht" aria-label="Search..." aria-describedby="basic-addon-search31">
                      </div>
                            </div>
                            <div class="col-lg-12 mb-4" style="border: 1px solid #5E8BF7;padding: 20px;">
                              <div class="row">
                                <div class="col-lg-11">
                                  <h4 style="color: #00365E;font-size: 16px;">Fast and smooth</h4>
                                  <div class="d-flex flex-wrap">
                                    <div class="me-2" style="color:#9CAFD1;font-size: 10px">Mooring: <span style="color: #00365E;margin-left: 5px;">0023340</span></div>
                                    <div style="color:#9CAFD1;font-size: 10px">Port: <span style="color: #00365E;margin-left: 5px;">Santa luzia esq, italy, 20559</span></div>
                                  </div>
                                </div>
                                <div class="col-lg-1">
                                  <i class="ti ti-x ti-md" style="color: #9CAFD1;margin-left: -10px;margin-top: 10px;"></i>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 mb-4" style="border: 1px solid #5E8BF7;padding: 20px;">
                              <div class="row">
                                <div class="col-lg-11">
                                  <h4 style="color: #00365E;font-size: 16px;">Elizabeth III</h4>
                                  <div class="d-flex flex-wrap">
                                    <div class="me-2" style="color:#9CAFD1;font-size: 10px">Mooring: <span style="color: #00365E;margin-left: 5px;">0023340</span></div>
                                    <div style="color:#9CAFD1;font-size: 10px">Port: <span style="color: #00365E;margin-left: 5px;">Santa luzia esq, italy, 20559</span></div>
                                  </div>
                                </div>
                                <div class="col-lg-1">
                                  <i class="ti ti-x ti-md" style="color: #9CAFD1;margin-left: -10px;margin-top: 10px;"></i>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12 mb-4">
                              <label style="color:#00365E;font-size: 16px">Personal details</label>
                              <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px" placeholder="Boat JBL" name="">
                                    <label class="labelOwn" style="color:#5E8BF7">First name*</label>
                                  </div>
                                  <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px" placeholder="Last name*" name="">
                                  </div>
                                  <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px" placeholder="Email*" name="">
                                  </div>
                                  <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px" placeholder="Phone*" name="">
                                  </div>
                                  <div class="form-group mt-3 mb-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px" placeholder="Job title" name="">
                                  </div>
                                  <label style="color:#00365E;font-size: 16px">Invitation message</label>
                                  <div class="form-group mt-3" style="position: relative;">
                                    <textarea type="text" class="form-control" style="border-radius:0px" placeholder="Leave a message for the user" name=""></textarea>
                                  </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="row">
                                <div class="col-lg-6">
                                  <button type="button" class="btn mb-2 d-grid w-100" style="border-radius:0px !important;background: #5E8BF7;color: #fff;">Send invitation</button>
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
