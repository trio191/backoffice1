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

          <?php include 'layout/header.php';?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="layout-demo-wrapper" style="background-image: url('assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
                  <div class="overlay"></div> <!-- Overlay -->
                  <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;"> <!-- Text container -->
                      <div class="row pt-2">
                          <div class="col-lg-12 text-center">
                              <h3 class="text-white">Discover our plans</h3>
                              
                          </div>
                          
                      </div>
                  </div>
              </div>
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              
                
                <div class="col-lg-12 text-center mt-5">
                  <center>
                  <div class="col-lg-7">
                    <h3 style="color: #00365E;">Flexible Plans Tailored to Fit Your Unique Needs!</h3>
                    <p style="color:#00365E;font-size: 16px;">Get started with one of the options we have below or upgrade your account to fully unlock all features and enjoy a hassle-free experience</p>
                    <div class="row">
                      <div class="col-lg mb-md-0 mb-4">
                        <div class="card border  shadow-none" style="border-radius: 0px">
                          <div class="col-lg-12" style="height: 27px">
                              
                            </div>
                          <div class="card-body">
                            
                            <p class="text-center" style="color: #00365E;">Forever Free</p>
                            <div class="text-center">
                              <div class="d-flex justify-content-center">
                                <h1 class="fw-semibold display-4 mb-0 " style="color:#00365E">0€</h1>

                              </div>
                              <small style="color:#00365E">No hassle, no worry.</small>
                            </div>
                            <a href="auth-register-basic.html" class="btn btn-label-success d-grid w-100 waves-effect mt-4" style="border-radius: 0px;"> Active Plan</a>
                            <p class="mt-4 " style="text-align: left;color: #00365E;">Best way to test all the feaures and check how our platform can help you to manage your vessel.</p>
                            <hr>
                            <ul class="ps-3 my-4 pt-2 list-unstyled" style="text-align: left;text-decoration: none !important;color: #00365E;">
                                <li class="mb-3" style="margin-left: -15px;"><i class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Unlimited documents</li>
                                <li class="mb-3" style="margin-left: -15px;"><i class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Daily incident reporting</li>
                                <li class="mb-3" style="margin-left: -15px;"><i class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Surveyor hiring</li>
                                <li class="mb-3" style="margin-left: -15px;"><i class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> User verification</li>
                                <li class="mb-3" style="margin-left: -15px;"><i class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Up to 4 posts</li>
                                <li class="mb-3" style="margin-left: -15px;"><i class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Weekly progress reporting</li>
                                <li class="mb-3" style="margin-left: -15px;"><i class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Unlimited Fleet management</li>
                           </ul>


                            <p style="text-align: left;color: #00365E;">*During the trial period you can test all features completely unlocked</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg mb-md-0 mb-4">
                        <div class="card border  shadow-none" style="border-radius: 0px;border-color: #5E8BF7 !important;">
                            <div class="col-lg-12" style="height: 30px;color: #fff;text-align: center;background: #5E8BF7;">
                              <p class="pt-1">Most Popular</p>
                            </div>
                          <div class="card-body">
                            
                            <p class="text-center" style="color: #00365E;">Membership</p>
                            <div class="text-center">
                              <div class="d-flex justify-content-center">
                                <h1 class="fw-semibold display-4 mb-0 " style="color:#00365E">50€/<small>month</small></h1>

                              </div>
                              <small style="color:#00365E">Price per metter for each vessel owned. Billed annualy</small>
                            </div>
                            <a type="button" data-bs-toggle="offcanvas"
                          data-bs-target="#activePlan"
                          aria-controls="activePlan" class="btn d-grid w-100 waves-effect mt-" style="border-radius: 0px;background: #5E8BF7;color: #fff;"> Active Plan</a>
                            <p class="mt-4 " style="text-align: left;color: #00365E;">Manage your vessel with the best features available and access exclusive offers.</p>
                            <hr>
                            <ul class="ps-3 my-4 pt-2 list-unstyled" style="text-align: left;text-decoration: none !important;color: #00365E;">
                                <li class="mb-3" style="margin-left: -15px;color: #5E8BF7;">Include all Free Perks +</li>
                                <li class="mb-3" style="margin-left: -15px;"><i class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Team management</li>
                                <li class="mb-3" style="margin-left: -15px;"><i class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Access to workplan</li>
                                <li class="mb-3" style="margin-left: -15px;"><i class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Referal link</li>
                                <li class="mb-3" style="margin-left: -15px;"><i class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Access to profiles & reviews</li>
                                <li class="mb-3" style="margin-left: -15px;"><i class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Access companies jobs </li>
                                <li class="mb-3" style="margin-left: -15px;"><i class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Access to ranks</li>
                           </ul>


                            <p style="text-align: left;color: #00365E;">*During the trial period you can test all features completely unlocked</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </center>
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
                          id="activePlan"
                          aria-labelledby="activePlan"
                          style="width: 500px !important;"
                        >
                          <div class="offcanvas-header border-bottom">
                            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" 
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"></i>Upgrade plan</h5>
                            
                          </div>
                          <div class="offcanvas-body  mx-0 flex-grow-0">
                           
                        <h5 style="color: #00365E;font-size: 14px;">Thank you for selecting:</h5>
                            
                            <div class="col-md-12">
                              <div class="w-100" style="border: 2px solid #5E8BF7;padding: 10px;text-align: center;">
                                <h4 class="mb-0" style="font-size: 14px;color: #5E8BF7;">Most popular plan</h4>
                              </div>
                            </div>
                            <div class="col-lg-12 mb-4" style="padding: 20px;background: url(assets/img/back2.png);background-size: 100% 100%;background-repeat: no-repeat;height: 150px;text-align: center;">
                              <h5 class="text-white" style="font-size: 14px;">MEMBERSHIP</h5>
                              <div class="d-flex justify-content-center" style="margin-top: -14px">
                                <h1 class="fw-semibold display-4 mb-0 " style="color:#fff;font-size: 38px">50€/<small>month</small></h1>

                              </div>
                              <p style="color: #fff;font-size: 13px;">Price per metter for each vessel owned.<br> Billed annualy</p>
                            </div>
                            <div class="col-md-12 mb-4">
                              <div class="d-flex flex-wrap">
                                <img src="assets/img/yacht-black.png" class="me-2">
                                <p class="me-2" style="color: #00365E;font-size: 20px;margin-top: 14px;">My yacht</p>
                                <div class="badge bg-label-primary rounded-pill " style="height: 25px;margin-top: 18px;">5</div>
                              </div>
                            </div>
                            <div class="col-lg-12 mb-2" style="background-color: #F2F6FA;padding: 20px">
                             <div class="row">
                               <div class="col-lg-6">
                                 <p class="mb-0" style="color: #00365E;font-size: 16px;">Fast and smooth</p>
                               </div>
                               <div class="col-lg-6" style="text-align: right">
                                 <div class="d-flex" style="float: right">
                                   <i class="ti ti-ruler-2 ti-xs me-2"></i>
                                   <p class="mb-0" style="font-size: 13px;color:#00365E">12 Metters</p>
                                 </div>
                               </div>
                             </div>
                            </div>
                            <div class="col-lg-12 mb-2" style="background-color: #F2F6FA;padding: 20px">
                             <div class="row">
                               <div class="col-lg-6">
                                 <p class="mb-0" style="color: #00365E;font-size: 16px;">Elizabeth III</p>
                               </div>
                               <div class="col-lg-6" style="text-align: right">
                                 <div class="d-flex" style="float: right">
                                   <i class="ti ti-ruler-2 ti-xs me-2"></i>
                                   <p class="mb-0" style="font-size: 13px;color:#00365E">22 Metters</p>
                                 </div>
                               </div>
                             </div>
                            </div>
                            <div class="col-lg-12 mb-4" style="padding: 20px;background: url(assets/img/back3.png);background-size: 100% 100%;background-repeat: no-repeat;height: 120px;text-align: center;">
                              <h5  style="font-size: 14px;color: #00365E;">Total cost</h5>
                              <div class="d-flex justify-content-center" style="margin-top: -14px">
                                <h1 class="fw-semibold display-4 mb-0 " style="color:#00365E;font-size: 38px">1200€/<small>Year</small></h1>

                              </div>
                            </div>
                            <div class="text-center mt-2">
                              <p style="font-size: 20px;color:#00365E">You will be redirected to the payment portal to proceed with the payment</p>
                              <p style="font-size: 14px;color:#00365E">PLease select the payment model you want to proceed:</p>
                            </div>
                            <div class="col-lg-12 mb-3" style="border: 1px solid #5E8BF7;background:#F2F6FA;padding: 20px;text-align: center;">
                              <img src="assets/img/stripe.png" style="width: 20%">
                            </div>
                            <div class="col-lg-12 mb-4" style="border: 1px solid #C6D2E7;background:#FFFFFF;padding: 20px;text-align: center;">
                              <img src="assets/img/PayPal.png" style="width: 30%">
                            </div>
                            <p style="font-size: 13px;color:#00365E">By proceeding with the payment you agree with the terms of services of each payment method. Please note that the invoice will be emmited the currepondent payment platform you select.</p>
                            <div class="text-center">
                              <img src="assets/img/pyment.png">
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
