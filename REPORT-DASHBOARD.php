<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Applications</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/assets/img/favicon/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
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

      tr {
        margin-bottom: 20px !important;
        /* Add space between each row */
      }

      body {
        background-color: #f7f8fa;
        font-family: Arial, sans-serif;
      }

      .report-form {
        max-width: 600px;
        margin: auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
      }

      .back-link {
        color: #3f51b5;
        text-decoration: none;
        font-weight: bold;
      }

      .back-link:hover {
        text-decoration: underline;
      }

      h6 {
        font-size: 14px;
        color: #212529;
      }

      .job-selected {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 1px solid #cfd8dc;
        padding: 10px;
        margin-top: 5px;
        border-radius: 4px;
        background-color: #f1f5f9;
      }

      .verified-badge {
        background-color: #1e88e5;
        color: #ffffff;
        padding: 2px 8px;
        border-radius: 4px;
        font-size: 12px;
        margin-right: 5px;
      }

      .job-id {
        font-size: 12px;
        color: #3f51b5;
      }

      .upload-container {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: 10px;
      }

      .uploaded-item {
        position: relative;
        width: 80px;
        height: 80px;
      }

      .uploaded-item img {
        width: 100%;
        height: 100%;
        border-radius: 8px;
      }

      .uploaded-item .btn-close {
        position: absolute;
        top: 4px;
        right: 4px;
        color: #ffffff;
        background-color: rgba(0, 0, 0, 0.6);
        border: none;
        border-radius: 50%;
        font-size: 12px;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .upload-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 80px;
        height: 80px;
        border: 1px dashed #b0bec5;
        border-radius: 8px;
        color: #78909c;
      }

      .upload-placeholder i {
        font-size: 24px;
        color: #3f51b5;
      }

      /* Main form container, hidden initially */
      .report-form {
        position: fixed;
        top: 0;
        right: -100%;
        width: 400px;
        height: 100%;
        background-color: #f8f9fa;
        padding: 20px;
        box-shadow: -5px 0 15px rgba(0, 0, 0, 0.2);
        overflow-y: auto;
        transition: right 0.3s ease;
        z-index: 1050;
        /* Above other elements */
      }

      /* Show form by sliding it in */
      .report-form.show {
        right: 0;
      }

      /* Styling for the back link */
      .back-link {
        color: #3f51b5;
        text-decoration: none;
        font-weight: bold;
      }

      .back-link:hover {
        text-decoration: underline;
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
          <!-- Navbar --> 
          <?php include 'layout/header-5.php';?>
           <div class="report-form" id="reportForm">
            <a href="#" class="back-link" onclick="hideForm()">&larr; Submit report</a>
            <h6 class="mt-3">Select a job to report</h6>
            <div class="form-group mb-3">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-search"></i>
                </span>
                <input type="text" class="form-control" placeholder="type the job">
              </div>
              <div class="job-selected">
                <span>The plastic on the roof needs replacement before winter</span>
                <span class="verified-badge">Verified</span>
                <span class="job-id">#34563</span>
                <button class="btn-close"></button>
              </div>
            </div>
            <h6>The plastic on the roof needs replacement before winter</h6>
            <div class="d-flex align-items-center mb-3">
              <span class="verified-badge">Verified</span>
              <span class="job-id">#34563</span>
            </div>
            <h6>Report type</h6>
            <select class="form-select mb-3">
              <option selected>Progress report</option>
              <option>Final report</option>
            </select>
            <h6>Report date</h6>
            <label class="form-label">Please select the date which you have surveyed the yacht</label>
            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="bi bi-calendar"></i>
              </span>
              <input type="text" class="form-control" placeholder="20 Jan 2024" readonly>
            </div>
            <h6>Subject</h6>
            <input type="text" class="form-control mb-3" placeholder="What is the outcome to this survey">
            <h6>Details</h6>
            <textarea class="form-control mb-4" placeholder="Please present the details for the survey"></textarea>
            <h6>Upload material</h6>
            <p class="small text-muted">Select the images, pdf’s or documents that you based your survey</p>
            <div class="upload-container">
              <div class="uploaded-item">
                <img src="image.jpg" alt="Upload">
                <button class="btn-close"></button>
              </div>
              <div class="uploaded-item">
                <img src="image.jpg" alt="Upload">
                <button class="btn-close"></button>
              </div>
              <div class="uploaded-item">
                <img src="image.jpg" alt="Upload">
                <button class="btn-close"></button>
              </div>
              <div class="upload-placeholder">
                <i class="bi bi-plus"></i>
                <span>Max 50mb</span>
              </div>
            </div>
            <button class="btn btn-primary w-100 mt-4">Submit report</button>
          </div>
          <!-- / Navbar -->
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              <div class="layout-demo-wrapper" style="background-image: url('assets/img/bg.png'); height: 100px; background-size: 100% 100%; margin-left: -25px; margin-right: -23px; margin-top: -20px; padding: 20px; position: relative;">
                <div class="overlay"></div>
                <!-- Overlay -->
                <div class="col-lg-12 text-container">
                  <!-- Text container -->
                  <div class="row pt-2">
                    <div class="col-lg-7 text-white">
                      <h3 class="text-white">Track progress & incidents</h3>
                    </div>
                    <div class="col-lg-5" style="text-align: right;">
                      <div class="container mt-4 text-end">
                        <button type="button" class="btn btn-white" onclick="showForm()" style="border-radius: 0; color: #00365d;">
                          <i class="ti ti-file-analytics me-1"></i> Submit report </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="col-lg-12 mt-5"><div class="row"><div class="col-lg-4"><div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;"><div class="d-flex align-items-center"><div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important"><i class="ti ti-file-analytics ti-md" style="color:#00365E"></i></div><div class="card-info"><small style="font-size: 11px">Total reports</small><h5 class="mb-0" style="color: #00365E">05</h5></div></div></div></div><div class="col-lg-4"><div class="card" style="border: 1px solid #FF005C;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-red.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;"><div class="d-flex align-items-center"><div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#FF005C0D !important"><img src="assets/img/Icon.png"></div><div class="card-info"><small style="font-size: 11px">Current Incidents</small><h5 class="mb-0" style="color: #FF005C">05</h5></div></div></div></div><div class="col-lg-4"><div class="card" style="border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;"><div class="d-flex align-items-center"><div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#2AD7B30D !important"><i class="ti ti-circle-check" style="color: #2AD7B3"></i></div><div class="card-info"><small style="font-size: 11px">Progress reports</small><h5 class="mb-0" style="color: #2AD7B3">04</h5></div></div></div></div></div></div> -->
              <div class="col-lg-12 mt-5">
                <div class="row">
                  <!-- Left side area col-lg-12 -->
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-lg-4">
                        <i class="ti ti-file-analytics ti-md" style="color: #00365E"></i>
                        <label style="font-size: 18px;color: #00365E;padding-top: 5px;" class="me-2">My Reports</label>
                        <label class="badge bg-label-primary rounded-pill " style="color: #00365E !important">15</label>
                      </div>
                      <div class="col-lg-8" style="text-align: right;color: #00365E;">
                        <div class="row">
                          <div class="col-lg-5">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text" id="basic-addon-search31">
                                <i class="ti ti-search"></i>
                              </span>
                              <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <div class="d-flex flex-wrap">
                              <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> Report Type </button>
                              <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> Yacht </button>
                              <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> All Jobs </button>
                              <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;"> This Week </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Cards area  -->
                    <div class="col-lg-12 mt-4 mb-4">
                      <table class="table table-responsive">
                        <tr style="font-size: 14px">
                          <td>
                            <span class="me-2">Title</span>
                            <i class="fa fa-bars-staggered me-2"></i>
                          </td>
                          <td>
                            <span class="me-2">Yacht</span>
                            <i class="fa fa-bars-staggered me-2"></i>
                          </td>
                          <td>
                            <span class="me-2">Job Id</span>
                            <i class="fa fa-bars-staggered me-2"></i>
                          </td>
                          <td>
                            <span class="me-2">Post date</span>
                            <i class="fa fa-bars-staggered me-2"></i>
                          </td>
                          <td>
                            <span class="me-2">Report Type</span>
                            <i class="fa fa-bars-staggered me-2"></i>
                          </td>
                        </tr>
                        <tr class="border" style="color:#00365E;font-size: 14px;">
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
                      <div class="col-lg-12 mb-4 mt-3" style="border: 1px dashed #5E8BF7;padding: 20px;">
                        <center>
                          <label class="text-center mt-2" style="width: 50px;height: 50px;border-radius: 100%;background: #F2F6FA;">
                            <i class="ti ti-file-analytics ti-md" style="padding-top: 10px;color: #5E8BF7;"></i>
                          </label>
                          <h4 style="font-size: 20px;color: #00365E;">Submit a report</h4>
                        </center>
                      </div>
                    </div>
                    <!-- add Yacht -->
                    <nav aria-label="Page navigation" style="float: right;">
                      <ul class="pagination pagination-square pagination-secondary">
                        <li class="page-item first">
                          <a class="page-link waves-effect" href="javascript:void(0);">
                            <i class="ti ti-chevrons-left ti-xs"></i>
                          </a>
                        </li>
                        <li class="page-item prev">
                          <a class="page-link waves-effect" href="javascript:void(0);">
                            <i class="ti ti-chevron-left ti-xs"></i>
                          </a>
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
                          <a class="page-link waves-effect" href="javascript:void(0);">
                            <i class="ti ti-chevron-right ti-xs"></i>
                          </a>
                        </li>
                        <li class="page-item last">
                          <a class="page-link waves-effect" href="javascript:void(0);">
                            <i class="ti ti-chevrons-right ti-xs"></i>
                          </a>
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
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const closeButtons = document.querySelectorAll('.btn-close');
        closeButtons.forEach(function(button) {
          button.addEventListener('click', function() {
            this.parentElement.remove();
          });
        });
      });

      function showForm() {
        document.getElementById("reportForm").classList.add("show");
      }

      function hideForm() {
        document.getElementById("reportForm").classList.remove("show");
      }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
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