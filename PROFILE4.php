<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Owner Dashboard</title>
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
    <link rel="stylesheet" href="assets/assets/css/demo.css" />
    <link rel="stylesheet" href="assets/css/profile3.css">
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
      .dropdown-toggle{
        border-radius: 0px !important;
      }
      .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #0F3A4F;
            opacity: 0.5;
        }

        .text-container {
            position: relative;
            z-index: 1;
        }

        .vertical-line {
            border-right: 1px solid #9CAFD1;
            padding-right: 5px;
            margin-right: 5px;
        }

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

        body {
            font-family: Arial, sans-serif;
            color: #3E6785;
        }

        h4 {
            font-size: 1.25rem;
        }

        .section i {
            font-size: 1.5rem;
        }

        .section p {}

        .border {}

        strong {
            font-weight: 600;
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
          <header class="profile-header text-white">
        <div class="container position-relative py-4">
            <div class="d-flex justify-content-between align-items-start">
                <h1 class="h3 mb-4">Jack Sparrow profile</h1>
                <button class="btn btn-light btn-sm">Edit profile</button>
            </div>
            <div class="profile-container">
                                    <img src="assets/img/jack.jpeg" alt="Profile" class="profile-image shadow">
                                    <div class="container mt-3">
                                        <div class="info-section">
                                            <span class="badge badge-custom">Captain</span>
                                            <div class="info-item">
                                                <i class="bi bi-clock"></i> Yesterday
                                            </div>
                                            <div class="divider"></div>
                                            <div class="info-item">
                                                <i class="bi bi-calendar"></i> 12 December 2022
                                            </div>
                                            <div class="divider"></div>
                                            <div class="info-item">
                                                <i class="bi bi-geo-alt"></i> Florida, United States
                                            </div>
                                            <div class="social-icons">
                                                <a href="https://facebook.com" target="_blank" class="icon-link">
                                                    <i class="bi bi-facebook"></i>
                                                </a>
                                                <a href="https://linkedin.com" target="_blank" class="icon-link">
                                                    <i class="bi bi-linkedin"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="profile-line">
                                </div>
        </div>
    </header>

    <main class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <section class="mb-5">
                    <h2 class="h4 mb-3">
                        <span class="bg-primary text-white rounded-circle d-inline-block text-center" style="width: 30px; height: 30px; line-height: 30px;">i</span>
                        Introduction
                    </h2>
                    <p class="text-muted">The service offered by a Professional on WYF is called a Job. When a Job is placed for a specific Yacht in a location, a ranked local Professional provide a quotation and exact time frame for the Job to be executed.</p>
                    <p class="text-muted">Yacht owners have various maintenance options. This comprises different price ranges. Professionals can offer various and tailored service packages according to their specific requirements.</p>
                </section>

                <section class="mb-5">
                    <h2 class="h4 mb-3">
                        <span class="bg-primary text-white rounded-circle d-inline-block text-center" style="width: 30px; height: 30px; line-height: 30px;">
                            <i class="fas fa-building"></i>
                        </span>
                        Company details
                    </h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="border rounded p-3">
                                <p class="small text-muted mb-0">Location: Portugal</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded p-3">
                                <p class="small text-muted mb-0">Years of experience: 8</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded p-3">
                                <p class="small text-muted mb-0">Number of employees: 10-20</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded p-3">
                                <p class="small text-muted mb-0">Workshop: Yes</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded p-3">
                                <p class="small text-muted mb-0">Storage unit: Yes</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mb-5">
                    <h2 class="h4 mb-3">
                        <span class="bg-primary text-white rounded-circle d-inline-block text-center" style="width: 30px; height: 30px; line-height: 30px;">
                            <i class="fas fa-history"></i>
                        </span>
                        Past jobs and references
                    </h2>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex">
                                <img src="https://via.placeholder.com/100" alt="Job Image" class="rounded me-3" style="width: 100px; height: 100px; object-fit: cover;">
                                <div>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="badge badge-verified me-2">
                                            <i class="fas fa-check-circle me-1"></i>
                                            Verified
                                        </span>
                                        <small class="text-muted">20 Jan 2024</small>
                                    </div>
                                    <h3 class="h5">The plastic on the roof needs replacement before winter</h3>
                                    <p class="small text-muted">Yacht owners have various maintenance options. This comprises different price ranges. Professionals can offer various and tailored service packages according to their specific requirements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat the card two more times for a total of 3 past jobs -->
                </section>

                <section>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2 class="h4 mb-0">
                            <span class="bg-primary text-white rounded-circle d-inline-block text-center" style="width: 30px; height: 30px; line-height: 30px;">
                                <i class="fas fa-ship"></i>
                            </span>
                            My yachts
                            <small class="text-muted ms-2">3</small>
                        </h2>
                        <a href="#" class="text-decoration-none">View all</a>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Fast and smooth">
                                <div class="card-body">
                                    <h5 class="card-title">Fast and smooth</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Elizabeth III">
                                <div class="card-body">
                                    <h5 class="card-title">Elizabeth III</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Slice of life">
                                <div class="card-body">
                                    <h5 class="card-title">Slice of life</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <h3 class="h6 text-muted">Jobs completed</h3>
                            <p class="h3">33</p>
                        </div>
                        <div>
                            <h3 class="h6 text-muted">Yachts & Vessels managed</h3>
                            <p class="h3">4</p>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Skills and competences</h3>
                        <div>
                            <span class="badge bg-secondary me-1 mb-1">4G</span>
                            <span class="badge bg-secondary me-1 mb-1">ANTIFOUDING</span>
                            <span class="badge bg-secondary me-1 mb-1">ANODES</span>
                            <span class="badge bg-secondary me-1 mb-1">ANTIFOUDING</span>
                            <span class="badge bg-secondary me-1 mb-1">ANODES</span>
                            <span class="badge bg-secondary me-1 mb-1">4G</span>
                            <span class="badge bg-secondary me-1 mb-1">ANODES</span>
                            <span class="badge bg-secondary me-1 mb-1">4G, 5G, STARLINK (INTERNET) INSTALLATION</span>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Certifications</h3>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge badge-verified me-2">
                                    <i class="fas fa-check-circle me-1"></i>
                                    Verified
                                </span>
                                <div>
                                    <p class="mb-0">Master navigator and cordenate analisys</p>
                                    <small class="text-muted">12 Jan 1990</small>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat the certification block two more times -->
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Contacts</h3>
                        <div class="d-flex justify-content-around">
                            <button class="btn btn-light rounded-circle">
                                <i class="fas fa-phone"></i>
                            </button>
                            <button class="btn btn-light rounded-circle">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>