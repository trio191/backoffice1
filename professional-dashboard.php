<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Job Dashboard</title>
    <meta name="description" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
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
      .navbar {
        background-color: #e5eaf4;
        padding: 15px;
      }

      .navbar-nav .nav-link {
        color: #000;
        font-weight: bold;
        margin-right: 15px;
      }

      .search-section {
        background-color: #f7faff;
        padding: 20px;
      }

      .search-section input,
      .search-section select {
        margin-right: 10px;
      }

      .job-card {
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        background-color: #fff;
      }

      .job-card h5 {
        font-size: 18px;
      }

      .tag {
        background-color: #f0f7ff;
        border-radius: 10px;
        padding: 5px 10px;
        margin: 5px;
        display: inline-block;
      }

      .tag-remove {
        color: red;
        cursor: pointer;
        margin-left: 10px;
      }

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
      * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }
        body {
            background-color: #f5f5f5;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu --> <?php include 'layout/sidebar.php';?>
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar --> <?php include 'layout/header-2.php';?>
          <!-- / Navbar -->
          <!-- Content wrapper -->
          <div class="layout-demo-wrapper" style="background-image: url('assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
                  <div class="overlay"></div> <!-- Overlay -->
                  <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;"> <!-- Text container -->
                      <div class="row pt-2">
                          <div class="col-lg-7 text-white">
                              <h3 class="text-white">Find your next job around the world!</h3>
                              
                          </div>
                          <div class="col-lg-5" style="text-align: right;">
                            
                          <!-- <button type="button" class="btn btn-white waves-effect waves-light" style="border-radius: 0px !important;color: #00365d;">
                            <i class="ti ti-briefcase ti-sm me-2"></i> Create Job
                          </button> -->
                        
                          </div>
                      </div>
                  </div>
              </div>

    <div style="background: white; border-bottom: 1px solid #eee;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; gap: 20px; padding: 0 20px;">
           <a href="professional-dashboard.php" > <button  style="background: #4285f4; color: white; border: none; padding: 15px 20px; cursor: pointer;">Available jobs</button></a>
            <a href="JOB-COMPANY.php" ><button style="background: none; border: none; padding: 15px 20px; cursor: pointer;">My Jobs</button></a>
            <a href="professional-dashboard-bookmarked.php" ><button style="background: none; border: none; padding: 15px 20px; cursor: pointer;">Bookmarked</button></a>
        </div>
    </div>

    <div style="max-width: 1200px; margin: 20px auto; padding: 0 20px;">
        <div style="display: flex; gap: 10px; margin-bottom: 20px;">
            <input type="text" placeholder="Search job" style="flex: 2; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
            <input type="text" placeholder="Location" style="flex: 1; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
            <select style="flex: 1; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                <option>Type and Skills</option>
            </select>
            <select style="flex: 1; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                <option>Yacht size</option>
            </select>
            <select style="flex: 1; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                <option>Budget range</option>
            </select>
            <button style="padding: 10px 20px; background: #4285f4; color: white; border: none; border-radius: 4px; cursor: pointer;">Search</button>
        </div>

        <div style="display: flex; gap: 10px; margin-bottom: 20px; flex-wrap: wrap;">
            <span style="background: #f0f0f0; padding: 5px 10px; border-radius: 15px; font-size: 14px;">4G</span>
            <span style="background: #f0f0f0; padding: 5px 10px; border-radius: 15px; font-size: 14px;">ANTIFOULING</span>
            <span style="background: #f0f0f0; padding: 5px 10px; border-radius: 15px; font-size: 14px;">ANODES</span>
            <span style="background: #f0f0f0; padding: 5px 10px; border-radius: 15px; font-size: 14px;">4G, 5G, STARLINK (INTERNET) INSTALLATION</span>
            <button style="color: #4285f4; border: none; background: none; cursor: pointer;">Clear filters</button>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <div>Available jobs <span style="color: #4285f4;">230</span></div>
            <select style="padding: 5px; border: 1px solid #ddd; border-radius: 4px;">
                <option>Sort by: Newest</option>
            </select>
        </div>

        <div class="row">
        <!-- Job Card 1 -->
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 100%; border: 1px solid #e0e0e0; border-radius: 2px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); position: relative;">
                <!-- Verified Badge -->
                <div><span style="position: absolute; top: 10px; left: 10px; background: rgba(0,0,0,0.7); color: white; padding: 5px 10px; border-radius: 4px; font-size: 12px;">Verified</span></div>

                <!-- Bookmark Icon -->
                <div style="position: absolute; top: 10px; right: 10px; font-size: 20px; color: #007bff;">
                   <div style="background-color: white; border-radius: 150%; padding: 5px;">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                      <path d="M2 2v13.5l6-3 6 3V2z" />
                     </svg>
                      </div>
                </div>


                <!-- Image -->
                <img src="assets/img/image.jpg" class="card-img-top" alt="Card Image" style="border-top-left-radius: 2px; border-top-right-radius: 2px; height: 150px; object-fit: cover;">

                <!-- Card Body -->
                <div class="card-body" style="padding: 15px;">
                    <!-- Date and Job Type -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                    <small class="text-muted">12 Jan 2024 | Surveyor </small>
                    </div>

                    <!-- Title -->
                    <h5 class="card-title">The plastic on the roof needs <br>replacement before winter</h5>

                    <!-- Description -->
                    <p class="card-text">The service offered by a Professional on WYR is called a Job. When a Job is placed for a specific...</p>

                    <!-- Budget -->
                    <div class="d-flex justify-content-between align-items-center" style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                        <span><i class="bi bi-cash-stack"></i> Budget:</span>
                           <strong>up to 6,000€ <span class="text-success">Flexible</span> </strong>
                    </div>
                    <hr>

                          

                    <!-- Delivery Date with proper spacing -->
                    <div class="d-flex justify-content-between align-items-center" style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                       <span><i class="bi bi-calendar"></i> Deliver by:</span>
                          <strong>12 Dec 2024</strong>
                    </div>
                    <hr>


                    <!-- Location -->
                    <div class="d-flex justify-content-between align-items-center" style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                          <span><i class="bi bi-geo-alt"></i> Location:</span>
                             <strong>Port of Monaco, Monaco</strong>
                    </div>
                    <hr>


                    <!-- Size -->
                    <div class="d-flex justify-content-between align-items-center" style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                         <span><i class="bi bi-arrows-fullscreen"></i> Size:</span>
                          <strong>0 - 10 meters</strong>
                    </div>
                    <hr>


                    <!-- Tags -->
                    <div style="display: flex; flex-wrap: wrap; gap: 5px; margin-top: 15px; color:  ">
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">4G</div>
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">ANTIFOOLING</div>
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">ANODES</div>
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">4G, 5G, STARLINK (INTERNET) INSTALLATION</div>
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">+10</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 100%; border: 1px solid #e0e0e0; border-radius: 2px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); position: relative;">
                <!-- Verified Badge -->
                <div><span style="position: absolute; top: 10px; left: 10px; background: rgba(0,0,0,0.7); color: white; padding: 5px 10px; border-radius: 4px; font-size: 12px;">Verified</span></div>

                <!-- Bookmark Icon -->
                <div style="position: absolute; top: 10px; right: 10px; font-size: 20px; color: #007bff;">
                   <div style="background-color: white; border-radius: 150%; padding: 5px;">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                      <path d="M2 2v13.5l6-3 6 3V2z" />
                     </svg>
                      </div>
                </div>


                <!-- Image -->
                <img src="assets/img/image.jpg" class="card-img-top" alt="Card Image" style="border-top-left-radius: 2px; border-top-right-radius: 2px; height: 150px; object-fit: cover;">

                <!-- Card Body -->
                <div class="card-body" style="padding: 15px;">
                    <!-- Date and Job Type -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <small class="text-muted">12 Jan 2024 | Surveyor </small>
                        <!-- <small class="text-muted">Surveyor</small> -->
                    </div>

                    <!-- Title -->
                    <h5 class="card-title">The plastic on the roof needs <br>replacement before winter</h5>

                    <!-- Description -->
                    <p class="card-text">The service offered by a Professional on WYR is called a Job. When a Job is placed for a specific...</p>

                    <!-- Budget -->
                    <div class="d-flex justify-content-between align-items-center" style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                        <span><i class="bi bi-cash-stack"></i> Budget:</span>
                           <strong>up to 6,000€ <span class="text-success">Flexible</span> </strong>
                    </div>
                    <hr>

                          

                    <!-- Delivery Date with proper spacing -->
                    <div class="d-flex justify-content-between align-items-center" style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                       <span><i class="bi bi-calendar"></i> Deliver by:</span>
                          <strong>12 Dec 2024</strong>
                    </div>
                    <hr>


                    <!-- Location -->
                    <div class="d-flex justify-content-between align-items-center" style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                          <span><i class="bi bi-geo-alt"></i> Location:</span>
                             <strong>Port of Monaco, Monaco</strong>
                    </div>
                    <hr>


                    <!-- Size -->
                    <div class="d-flex justify-content-between align-items-center" style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                         <span><i class="bi bi-arrows-fullscreen"></i> Size:</span>
                          <strong>0 - 10 meters</strong>
                    </div>
                    <hr>


                    <!-- Tags -->
                    <div style="display: flex; flex-wrap: wrap; gap: 5px; margin-top: 15px; color:  ">
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">4G</div>
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">ANTIFOOLING</div>
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">ANODES</div>
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">4G, 5G, STARLINK (INTERNET) INSTALLATION</div>
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">+10</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 100%; border: 1px solid #e0e0e0; border-radius: 2px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); position: relative;">
                <!-- Verified Badge -->
                <div><span style="position: absolute; top: 10px; left: 10px; background: rgba(0,0,0,0.7); color: white; padding: 5px 10px; border-radius: 4px; font-size: 12px;">Verified</span></div>

                <!-- Bookmark Icon -->
                <div style="position: absolute; top: 10px; right: 10px; font-size: 20px; color: #007bff;">
                   <div style="background-color: white; border-radius: 150%; padding: 5px;">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                      <path d="M2 2v13.5l6-3 6 3V2z" />
                     </svg>
                      </div>
                </div>


                <!-- Image -->
                <img src="assets/img/image.jpg" class="card-img-top" alt="Card Image" style="border-top-left-radius: 2px; border-top-right-radius: 2px; height: 150px; object-fit: cover;">

                <!-- Card Body -->
                <div class="card-body" style="padding: 15px;">
                    <!-- Date and Job Type -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                    <small class="text-muted">12 Jan 2024 | Surveyor </small>
                        <!-- <small class="text-muted">Surveyor</small> -->
                    </div>

                    <!-- Title -->
                    <h5 class="card-title">The plastic on the roof needs <br>replacement before winter</h5>

                    <!-- Description -->
                    <p class="card-text">The service offered by a Professional on WYR is called a Job. When a Job is placed for a specific...</p>

                    <!-- Budget -->
                    <div class="d-flex justify-content-between align-items-center" style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                        <span><i class="bi bi-cash-stack"></i> Budget:</span>
                           <strong>up to 6,000€ <span class="text-success">Flexible</span> </strong>
                    </div>
                    <hr>

                          

                    <!-- Delivery Date with proper spacing -->
                    <div class="d-flex justify-content-between align-items-center" style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                       <span><i class="bi bi-calendar"></i> Deliver by:</span>
                          <strong>12 Dec 2024</strong>
                    </div>
                    <hr>


                    <!-- Location -->
                    <div class="d-flex justify-content-between align-items-center" style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                          <span><i class="bi bi-geo-alt"></i> Location:</span>
                             <strong>Port of Monaco, Monaco</strong>
                    </div>
                    <hr>


                    <!-- Size -->
                    <div class="d-flex justify-content-between align-items-center" style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                         <span><i class="bi bi-arrows-fullscreen"></i> Size:</span>
                          <strong>0 - 10 meters</strong>
                    </div>
                    <hr>


                    <!-- Tags -->
                    <div style="display: flex; flex-wrap: wrap; gap: 5px; margin-top: 15px; color:  ">
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">4G</div>
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">ANTIFOOLING</div>
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">ANODES</div>
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">4G, 5G, STARLINK (INTERNET) INSTALLATION</div>
                        <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">+10</div>
                    </div>
                </div>
            </div>
        </div>
        
        

        <!-- Job Card 2 (Repeat the same structure for the second and third cards) -->
        <div class="col-md-4 d-flex justify-content-center">
            <!-- Card 2 content here -->
        </div>

        <!-- Job Card 3 -->
        <div class="col-md-4 d-flex justify-content-center">
            <!-- Card 3 content here -->
        </div>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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