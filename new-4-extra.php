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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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
                              <h3 class="text-white">Find the right professional</h3>
                              
                          </div>
                          <div class="col-lg-5" style="text-align: right;">
                            
                          <button type="button" class="btn btn-white waves-effect waves-light" style="border-radius: 0px !important;color: #00365d;">
                            <i class="ti ti-briefcase ti-sm me-2"></i> Create Job
                          </button>
                        
                          </div>
                      </div>
                  </div>
              </div>
              <div class="container mt-5">
        <!-- Job Title and Header Section -->
        <div class="row">
            <div class="col-md-9">
                <h2 style="font-weight: bold;">The plastic on the roof needs replacement before winter</h2>
                <p>
                    <span style="font-size: 14px; color: #017BFF; font-weight: bold;">✔ Verified</span> 
                    <span style="font-size: 14px; color: #6c757d;">Posted on 23 January 2022</span> 
                    <span style="font-size: 14px; color: #6c757d;">| Videos: 1</span> 
                    <span style="font-size: 14px; color: #6c757d;">| Images: 4</span>
                </p>
            </div>
            <div class="col-md-3 text-end">
                <button class="btn btn-outline-primary me-2">Bookmark</button>
                <button class="btn btn-primary">Apply for this job</button>
            </div>
        </div>
        
        <!-- Tab Section -->
        <div class="row mt-4">
            <div class="col-md-9">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Applications</a>
                    </li>
                </ul>
                
                <!-- Job Description Section -->
                <div class="mt-3">
                    <p>The service offered by a Professional on WYR is called a Job. When a Job is placed for a specific Yacht in a location, a ranked local Professional provide a quotation and exact time frame for the Job to be executed.</p>
                    <p>Yacht owners have various maintenance options. This comprises different price ranges. Professionals can offer various and tailored service packages according to their specific requirements.</p>
                    <p>The service offered by a Professional on WYR is called a Job. When a Job is placed for a specific Yacht in a location, a ranked local Professional provide a quotation and exact time frame for the Job to be executed.</p>
                </div>

                <!-- Images and Videos Section -->
                <div class="mt-4">
                    <h5>Images and Videos</h5>
                    <div class="d-flex justify-content-start">
                        <img src="assets/img/ing2.jpg" alt="Image 1" class="img-fluid me-2" style="border-radius: 3px; width: 120px; height: 120px; object-fit: cover;">
                        <img src="assets/img/ing2.jpg" alt="Image 2" class="img-fluid me-2" style="border-radius: 3px; width: 120px; height: 120px; object-fit: cover;">
                        <img src="assets/img/ing2.jpg" alt="Image 3" class="img-fluid me-2" style="border-radius: 3px;width: 120px; height: 120px; object-fit: cover;">
                        <img src="assets/img/ing2.jpg" alt="Image 4" class="img-fluid me-2" style="border-radius: 3px;width: 120px; height: 120px; object-fit: cover;">
                        <img src="assets/img/ing2.jpg" alt="Image 1" class="img-fluid me-2" style="border-radius: 3px; width: 120px; height: 120px; object-fit: cover;">
                        <img src="assets/img/ing2.jpg" alt="Image 2" class="img-fluid me-2" style="border-radius: 3px; width: 120px; height: 120px; object-fit: cover;">
                        
                        
                    </div>
                </div>
            </div>

            <!-- Sidebar Section -->
            <div class="col-md-3">
                <div class="card p-3 mb-3">
                    <p><strong>Deliver by:</strong> 12 Dec 2024</p>
                    <p><strong>Budget between:</strong> 5000€ to 6000€ <span style="color: #28a745;">Flexible</span></p>
                    <p><strong>Port base:</strong> Santa luzia esq, Italy, 20559</p>
                    <p><strong>Yacht Size:</strong> 0 - 10 meters</p>
                    <p><strong>Manufacturer:</strong> Admiral</p>
                    <p><strong>Surveyor:</strong> Yes</p>
                </div>

                <div class="card p-3" style="border: 1px solid #e0e0e0; border-radius: 8px;">
    <h6 style="font-weight: bold;">Job type and skills</h6>
    <p style="font-size: 14px;">The following skills are suggested for this job:</p>
    <div style="display: flex; flex-wrap: wrap;">
        <span class="badge" style="background-color: #F0F4FA; color: #6C757D; margin: 2px 4px; padding: 6px 12px; font-size: 12px;">4G</span>
        <span class="badge" style="background-color: #F0F4FA; color: #6C757D; margin: 2px 4px; padding: 6px 12px; font-size: 12px;">ANTIFOULING</span>
        <span class="badge" style="background-color: #F0F4FA; color: #6C757D; margin: 2px 4px; padding: 6px 12px; font-size: 12px;">ANODES</span>
        <span class="badge" style="background-color: #F0F4FA; color: #6C757D; margin: 2px 4px; padding: 6px 12px; font-size: 12px;">ANTIFOULING</span>
        <span class="badge" style="background-color: #F0F4FA; color: #6C757D; margin: 2px 4px; padding: 6px 12px; font-size: 12px;">ANODES</span>
        <span class="badge" style="background-color: #F0F4FA; color: #6C757D; margin: 2px 4px; padding: 6px 12px; font-size: 12px;">STARLINK INSTALLATION</span>
    </div>
</div>

                <button class="btn btn-primary w-100 mt-3">Apply for this job</button>
            </div>
        </div>
    </div>

    <!-- Inline JavaScript -->
    <script>
        // Add any JavaScript functionality here (if needed)
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

          
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
