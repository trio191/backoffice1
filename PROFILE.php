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

    <title>Jobs Detail</title>

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
        /* Inline CSS */
        body {
            background-color: #f8f9fc;
        }
        .profile-header {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 30px;
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
        }
        .profile-info {
            font-size: 14px;
        }
        .jobs-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .skills-badge {
            font-size: 14px;
            padding: 5px 10px;
            border-radius: 20px;
        }
        .job-item, .yacht-item {
            border: 1px solid #ebebeb;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .yacht-img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
        }
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
.image-upload-container {
    position: relative;
    display: inline-block;
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 120px;
    height: 120px;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.upload-icon {
    color: white;
    font-size: 24px;
}

.upload-icon:hover {
    color: #ccc;
}

#uploadedImage {
    display: block;
    width: 120px;
    height: 120px;
    border-radius: 100%;
    object-fit: cover;
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
                <div class="overlay"></div>
                <!-- Overlay -->
                <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
                  <!-- Text container -->
                  <div class="row">
                    <div class="col-lg-7 text-white">
                      <h3 class="text-white">Account settings</h3>
                      
                    </div>
                    <div class="col-lg-5" style="text-align: right;">
                      <button type="button" class="btn waves-effect waves-light" style="border-radius: 0px !important;color: #fff;">
                        <span class="ti-xs ti ti-edit me-1"></span>Background</button>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
        <!-- Profile Header -->
        <div class="profile-header d-flex align-items-center">
            <img src="https://via.placeholder.com/120" alt="Profile Picture" class="profile-img">
            <div>
                <h4>Captain</h4>
                <div class="profile-info">
                    <span>Yesterday</span> | <span>12 December 2023</span> | <span>Florida, United States</span>
                </div>
            </div>
        </div>

        <!-- Introduction Section -->
        <div class="jobs-card mt-3">
            <h5>Introduction</h5>
            <p>The service offered by a Professional on WR is called a Job. When a Job is placed for a specific Yacht in a location, a ranked local Professional provides a quotation and exact time frame for the Job to be executed.</p>
        </div>

        <!-- Company Details Section -->
        <div class="jobs-card mt-3">
            <h5>Company details</h5>
            <div class="row">
                <div class="col-md-4">
                    <p><strong>Location:</strong> Portugal</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Years of experience:</strong> 8</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Number of employees:</strong> 10-20</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Workshop:</strong> Yes</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Storage unit:</strong> Yes</p>
                </div>
            </div>
        </div>

        <!-- Skills and Competences -->
        <div class="jobs-card mt-3">
            <h5>Skills and Competences</h5>
            <div>
                <span class="badge badge-info skills-badge">4G</span>
                <span class="badge badge-info skills-badge">ANTIFOULING</span>
                <span class="badge badge-info skills-badge">ANODES</span>
                <span class="badge badge-info skills-badge">STARLINK INSTALLATION</span>
            </div>
        </div>

        <!-- Past Jobs and References Section -->
        <div class="jobs-card mt-3">
            <h5>Past jobs and references</h5>
            <div class="job-item">
                <span class="badge badge-success">Verified</span> 20 Jan 2024 | Port Portals Nous | 0-10 meters
                <p>The plastic on the roof needs replacement before winter. Yacht owners have various maintenance options. This comprises different price ranges.</p>
            </div>
            <div class="job-item">
                <span class="badge badge-success">Verified</span> 20 Jan 2024 | Port Portals Nous | 0-10 meters
                <p>Job was done very well and the professional presented interest, care, and dedication from the start.</p>
            </div>
        </div>

        <!-- My Yachts Section -->
        <div class="jobs-card mt-3">
            <h5>My yachts</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="yacht-item">
                        <img src="https://via.placeholder.com/300x120" alt="Yacht" class="yacht-img">
                        <p>Fast and smooth</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="yacht-item">
                        <img src="https://via.placeholder.com/300x120" alt="Yacht" class="yacht-img">
                        <p>Elizabeth III</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="yacht-item">
                        <img src="https://via.placeholder.com/300x120" alt="Yacht" class="yacht-img">
                        <p>Slice of life</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

        <!-- Introduction Section -->

    </div>

           
            <!-- / Content -->

            <!-- Footer -->
            
            <!-- / Footer -->

            

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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/assets/js/form-basic-inputs.js"></script>
    <script type="text/javascript">
      document.getElementById('imageUploadInput').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('uploadedImage').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(file);
    }
});

    </script>
  </body>
</html>
