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
            <div class="layout-demo-wrapper" style="background-image: url('assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px; position: relative;padding-bottom: 20px;">
                  <div class="overlay"></div> <!-- Overlay -->
                  <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;"> <!-- Text container -->
                      <div class="row pt-2">
                          <div class="col-lg-7 text-white">
                              <h3 class="text-white">Keep your yachts healthy</h3>
                              
                          </div>
                          <div class="col-lg-5" style="text-align: right;">
                            
                          <button type="button" data-bs-toggle="offcanvas"
                          data-bs-target="#addYacht"
                          aria-controls="addYacht" class="btn btn-white waves-effect waves-light" style="border-radius: 0px !important;color: #00365d;">
                            <img src="assets/img/yacht-black.png" style="width: 20%" class="me-1" /> Add yacht
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
                      <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                              <i class="ti ti-briefcase ti-sm" style="color:#00365E"></i>
                            </div>
                            <div class="card-info">
                              <small style="font-size: 11px">Latest job post</small>
                              <h5 class="mb-0" style="color: #00365E">12 Jan</h5>
                              
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
                              <small style="font-size: 11px">Latest job reply</small>
                              <h5 class="mb-0" style="color: #00365E">5 Fev</h5>
                              
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="card" style="border: 1px solid #FF005C;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-red.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#FF005C0D !important">
                              <img src="assets/img/yacht-red.png" style="width: 20px">
                            </div>
                            <div class="card-info">
                              <small style="font-size: 11px">Top yacht invested</small>
                              <h5 class="mb-0" style="color: #FF005C">Fast & Smooth</h5>
                              
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
                          <img src="assets/img/yacht-black.png" style="width: 28px" class="me-2">
                          <label style="font-size: 18px;color: #00365E;padding-top: 3px;" class="me-2">Yacth list</label>
                          <label class="badge bg-label-primary rounded-pill " style="color: #00365E !important">5</label>
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
                             Order By: Incidents
                            </button>
                            <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                             All Crew
                            </button>
                          </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      


                      <!-- Cards area  -->


                      <div class="col-lg-12 mb-3 mt-5" style="border: 1px solid #C6D2E7;">
                        <div class="row">
                          <div class="col-lg-2">
                            <img src="assets/img/12.png" style="width: 100%;padding-top: 0px !important;" class="h-100">
                          </div>
                          <div class="col-lg-10 p-3">
                            <div class="row">
                          <div class="col-lg-8" style="color:#00365E">
                            <div class="row">
                              <h4 style="font-size: 20px;color: #00365E;">Fast and smooth</h4>
                              <div style="display: flex;margin-top: -15px;">
                                <span class="me-3 " style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Mooring: <span style="color:#00365E">0023340</span></span>
                                <span class="me-3 " style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Size: <span style="color:#00365E">12m</span></span>
                                <span class="me-3 " style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Tonnage: <span style="color:#00365E">XX GT</span></span>
                                <span class="me-3 " style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Last activity: <span style="color:#00365E">Yesterday</span></span>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-lg-4" style="">
                            <div class="row">
                              <div class="col-lg-10">
                                <div class="d-flex flex-wrap" style="text-align: left">
                              <div class="avatar me-3">
                                <img src="assets/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                              </div>
                              <div >
                                <h6 class="mb-0">Tom Spill</h6>
                                <small>Captain</small>
                              </div>
                              
                            </div>
                              </div>
                              <div class="col-lg-1">
                                <i class="ti ti-dots-vertical" style="color: #9CAFD1;margin-right: -10px !important;"></i>
                              </div>
                            </div>
                            

                          </div>
                          <center>
                          <div class="mt-3" style="width: 99.8%;border-top: 1px solid #9CAFD1;">
                            
                          </div>
                        </center>
                          <div class="col-lg-12 mt-3">
                            <div class="row mt-1" style="padding-bottom: 0px !important;color: #00365E;">
                          <div class="col " style="border-right: 1px solid #9CAFD1;">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-coin me-2"></i>
                              <span style="font-size: 14px;" class="me-2">Budget invested</span>
                              
                            </div>
                            <label  style="font-size: 18px;" class="me-2 mt-1">23.000,00 €</label>
                              
                          </div>
                          <div class="col " style="border-right: 1px solid #9CAFD1;">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-briefcase me-2"></i>
                              <span style="font-size: 14px;" class="me-2">Open Jobs</span>
                              
                            </div>
                            <label  style="font-size: 18px;" class="me-2 mt-1">07</label>
                              
                          </div>
                          <div class="col " style="border-right: 1px solid #9CAFD1;">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-file-export me-2"></i>
                              <span style="font-size: 14px;" class="me-2">Applications</span>
                              
                            </div>
                            <label  style="font-size: 18px;" class="me-2 mt-1">04</label>
                              
                          </div>
                          <div class="col " style="border-right: 1px solid #9CAFD1;">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-coin me-2" style="color: #FF005C;"></i>
                              <span style="font-size: 14px;color: #FF005C;" class="me-2">Incidents</span>
                              
                            </div>
                            <label  style="font-size: 18px;color: #FF005C;" class="me-2 mt-1">03</label>
                              
                          </div>
                          <div class="col ">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-coin me-2" style="color: #2AD7B3"></i>
                              <span style="font-size: 14px;color: #2AD7B3;" class="me-2">Active Jobs</span>
                              
                            </div>
                            <label  style="font-size: 18px;color: #2AD7B3;" class="me-2 mt-1">03</label>
                              
                          </div>
                        </div>
                          </div>

                        </div>
                          </div>
                        </div>
                        
                      </div>
                      <div class="col-lg-12 mb-3 mt-5" style="border: 1px solid #C6D2E7;">
                        <div class="row">
                          <div class="col-lg-2">
                            <img src="assets/img/12.png" style="width: 100%;padding-top: 0px !important;" class="h-100">
                          </div>
                          <div class="col-lg-10 p-3">
                            <div class="row">
                          <div class="col-lg-8" style="color:#00365E">
                            <div class="row">
                              <h4 style="font-size: 20px;color: #00365E;">Fast and smooth</h4>
                              <div style="display: flex;margin-top: -15px;">
                                <span class="me-3 " style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Mooring: <span style="color:#00365E">0023340</span></span>
                                <span class="me-3 " style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Size: <span style="color:#00365E">12m</span></span>
                                <span class="me-3 " style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Tonnage: <span style="color:#00365E">XX GT</span></span>
                                <span class="me-3 " style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Last activity: <span style="color:#00365E">Yesterday</span></span>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-lg-4" style="">
                            <div class="row">
                              <div class="col-lg-10">
                                <div class="d-flex flex-wrap" style="text-align: left">
                              <div class="avatar me-3">
                                <img src="assets/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                              </div>
                              <div >
                                <h6 class="mb-0">Tom Spill</h6>
                                <small>Captain</small>
                              </div>
                              
                            </div>
                              </div>
                              <div class="col-lg-1">
                                <i class="ti ti-dots-vertical" style="color: #9CAFD1;margin-right: -10px !important;"></i>
                              </div>
                            </div>
                            

                          </div>
                          <center>
                          <div class="mt-3" style="width: 99.8%;border-top: 1px solid #9CAFD1;">
                            
                          </div>
                        </center>
                          <div class="col-lg-12 mt-3">
                            <div class="row mt-1" style="padding-bottom: 0px !important;color: #00365E;">
                          <div class="col " style="border-right: 1px solid #9CAFD1;">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-coin me-2"></i>
                              <span style="font-size: 14px;" class="me-2">Budget invested</span>
                              
                            </div>
                            <label  style="font-size: 18px;" class="me-2 mt-1">23.000,00 €</label>
                              
                          </div>
                          <div class="col " style="border-right: 1px solid #9CAFD1;">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-briefcase me-2"></i>
                              <span style="font-size: 14px;" class="me-2">Open Jobs</span>
                              
                            </div>
                            <label  style="font-size: 18px;" class="me-2 mt-1">07</label>
                              
                          </div>
                          <div class="col " style="border-right: 1px solid #9CAFD1;">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-file-export me-2"></i>
                              <span style="font-size: 14px;" class="me-2">Applications</span>
                              
                            </div>
                            <label  style="font-size: 18px;" class="me-2 mt-1">04</label>
                              
                          </div>
                          <div class="col " style="border-right: 1px solid #9CAFD1;">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-coin me-2" style="color: #FF005C;"></i>
                              <span style="font-size: 14px;color: #FF005C;" class="me-2">Incidents</span>
                              
                            </div>
                            <label  style="font-size: 18px;color: #FF005C;" class="me-2 mt-1">03</label>
                              
                          </div>
                          <div class="col ">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-coin me-2" style="color: #2AD7B3"></i>
                              <span style="font-size: 14px;color: #2AD7B3;" class="me-2">Active Jobs</span>
                              
                            </div>
                            <label  style="font-size: 18px;color: #2AD7B3;" class="me-2 mt-1">03</label>
                              
                          </div>
                        </div>
                          </div>

                        </div>
                          </div>
                        </div>
                        
                      </div>
                      <div class="col-lg-12 mb-3 mt-5" style="border: 1px solid #C6D2E7;">
                        <div class="row">
                          <div class="col-lg-2">
                            <img src="assets/img/12.png" style="width: 100%;padding-top: 0px !important;" class="h-100">
                          </div>
                          <div class="col-lg-10 p-3">
                            <div class="row">
                          <div class="col-lg-8" style="color:#00365E">
                            <div class="row">
                              <h4 style="font-size: 20px;color: #00365E;">Fast and smooth</h4>
                              <div style="display: flex;margin-top: -15px;">
                                <span class="me-3 " style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Mooring: <span style="color:#00365E">0023340</span></span>
                                <span class="me-3 " style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Size: <span style="color:#00365E">12m</span></span>
                                <span class="me-3 " style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Tonnage: <span style="color:#00365E">XX GT</span></span>
                                <span class="me-3 " style="padding-top: 5px; color: #9CAFD1;font-size: 13px;">Last activity: <span style="color:#00365E">Yesterday</span></span>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-lg-4" style="">
                            <div class="row">
                              <div class="col-lg-10">
                                <div class="d-flex flex-wrap" style="text-align: left">
                              <div class="avatar me-3">
                                <img src="assets/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                              </div>
                              <div >
                                <h6 class="mb-0">Tom Spill</h6>
                                <small>Captain</small>
                              </div>
                              
                            </div>
                              </div>
                              <div class="col-lg-1">
                                <i class="ti ti-dots-vertical" style="color: #9CAFD1;margin-right: -10px !important;"></i>
                              </div>
                            </div>
                            

                          </div>
                          <center>
                          <div class="mt-3" style="width: 99.8%;border-top: 1px solid #9CAFD1;">
                            
                          </div>
                        </center>
                          <div class="col-lg-12 mt-3">
                            <div class="row mt-1" style="padding-bottom: 0px !important;color: #00365E;">
                          <div class="col " style="border-right: 1px solid #9CAFD1;">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-coin me-2"></i>
                              <span style="font-size: 14px;" class="me-2">Budget invested</span>
                              
                            </div>
                            <label  style="font-size: 18px;" class="me-2 mt-1">23.000,00 €</label>
                              
                          </div>
                          <div class="col " style="border-right: 1px solid #9CAFD1;">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-briefcase me-2"></i>
                              <span style="font-size: 14px;" class="me-2">Open Jobs</span>
                              
                            </div>
                            <label  style="font-size: 18px;" class="me-2 mt-1">07</label>
                              
                          </div>
                          <div class="col " style="border-right: 1px solid #9CAFD1;">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-file-export me-2"></i>
                              <span style="font-size: 14px;" class="me-2">Applications</span>
                              
                            </div>
                            <label  style="font-size: 18px;" class="me-2 mt-1">04</label>
                              
                          </div>
                          <div class="col " style="border-right: 1px solid #9CAFD1;">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-coin me-2" style="color: #FF005C;"></i>
                              <span style="font-size: 14px;color: #FF005C;" class="me-2">Incidents</span>
                              
                            </div>
                            <label  style="font-size: 18px;color: #FF005C;" class="me-2 mt-1">03</label>
                              
                          </div>
                          <div class="col ">
                            <div class="d-flex flex-wrap ">
                              <i class="ti ti-coin me-2" style="color: #2AD7B3"></i>
                              <span style="font-size: 14px;color: #2AD7B3;" class="me-2">Active Jobs</span>
                              
                            </div>
                            <label  style="font-size: 18px;color: #2AD7B3;" class="me-2 mt-1">03</label>
                              
                          </div>
                        </div>
                          </div>

                        </div>
                          </div>
                        </div>
                        
                      </div>

                      <!-- add Yacht -->

                      <div class="col-lg-12 mb-4" style="border: 1px dashed #5E8BF7;height: 156px;padding: 20px;">
                        <center>
                          <label class="text-center" style="width: 50px;height: 50px;border-radius: 100%;background: #F2F6FA;">
                            <img src="assets/img/yacht-blue.png" style="padding-top: 9px">
                          </label>
                          <h4 style="font-size: 20px;color: #00365E;">Add yact</h4>
                          <p style="color:#9CAFD1">Manage and publish jobs to maintain your yach health check</p>
                        </center>
                      </div>
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
    <!-- Add Yacht modal -->

                        <div
                          class="offcanvas offcanvas-end"
                          tabindex="-1"
                          id="addYacht"
                          aria-labelledby="addYacht"
                          style="width: 500px !important;"
                        >
                          <div class="offcanvas-header border-bottom">
                            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" 
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"></i> Add yacht</h5>
                            
                          </div>
                          <div class="offcanvas-body  mx-0 flex-grow-0">
                           <div class="col-lg-12" style="border: 1px dashed #9CAFD1;padding: 30px;text-align: center;">
                             <button class="btn" style="border: 1px solid #5E8BF7;color: #5E8BF7;background: transparent;border-radius: 0px;">
                               <div class="d-flex">
                                 <span class="me-2">Upload Photo</span>
                                 <i class="ti ti-upload ti-xs"></i>
                               </div>
                             </button>
                           </div>
                           <small style="color: #9CAFD1;">min 1600x230  | max 1920x480</small>
                            
                            <div class="col-md-12 mb-4 mt-4">
                              <label style="color:#00365E;font-size: 16px">yacht details</label>
                              
                                  <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px" placeholder="John doe" name="">
                                    <label class="labelOwn" style="color:#5E8BF7">Yacht Name*</label>
                                  </div>
                                  <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px" placeholder="Yacht Manufacturer *" name="">
                                  </div>
                                  <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px" placeholder="Mooring Number *" name="">
                                  </div>
                                  <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px" placeholder="Port Base" name="">
                                  </div>
                                  <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px" placeholder="Yacht Size (in meters) *" name="">
                                  </div>
                                  <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px" placeholder="Yacht Tonnage (in GT) *" name="">
                                  </div>
                            <label class="mt-3" style="color:#00365E;font-size: 16px">Registration documents</label>
                            <p style="color:#9CAFD1;font-size: 16px">These documents are necessary to validate that you are the real owner of this vessel</p>
                            <div class="col-lg-12 mt-4">
                              <div class="row">
                                
                                <div class="col-lg-4" >
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
                                  <button type="button" class="btn mb-2 d-grid w-100" style="border-radius:0px !important;background: #5E8BF7;color: #fff;">Add yacht</button>
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

    <!-- Main JS -->
    <script src="assets/assets/js/main.js"></script>

    <!-- Page JS -->
  </body>
</html>
