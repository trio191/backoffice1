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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="assets/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/assets/js/config.js"></script>
    <style>
      :root {
        --primary-blue: #0056b3;
        --light-gray: #f8f9fa;
      }

      body {
        background-color: #f0f2f5;
      }

      .profile-header {
        background-image: url('assets/img/bg.png');
        background-size: cover;
        background-position: center;
        height: 130px;
        position: relative;
      }

      .profile-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
      }

      .profile-header h1 {
        font-size: 28px;
        font-weight: 600;
        position: relative;
        z-index: 1;
        margin-bottom: 0;
      }

      .edit-profile-btn {
        position: relative;
        z-index: 1;
        padding: 6px 12px;
        font-size: 14px;
        background-color: white;
        color: #333;
        border: none;
      }

      .profile-pic-container {
        position: relative;
        z-index: 2;
        margin-top: -60px;
      }

      .profile-pic {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border: 4px solid white;
      }

      .profile-info {
        padding-top: 0;
        /* border-radius: 8px; */
        /* background-color: white; */
        /* box-shadow: 0 1px 3px rgba(0,0,0,0.12); */
      }

      .profile-meta {
        color: #6c757d;
        font-size: 14px;
      }

      .profile-meta i {
        margin-right: 4px;
      }

      .social-icons {
        position: absolute;
        right: 15px;
        bottom: 15px;
        /* z-index: 2; */
      }

      .social-icons a {
        color: white;
        font-size: 20px;
        margin-left: 10px;
      }

      .section-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #333;
      }

      .section-title i {
        color: var(--primary-blue);
        margin-right: 8px;
      }

      .content-box {
        /* background: white; */
        border-radius: 0px;
        padding: 20px;
        margin-bottom: 24px;
        /* box-shadow: 0 1px 3px rgba(0,0,0,0.12); */
      }

      .detail-item {
        margin-bottom: 16px;
      }

      .detail-item label {
        display: block;
        color: #6c757d;
        font-size: 14px;
        margin-bottom: 4px;
      }

      .detail-item span {
        font-size: 15px;
      }

      .job-card {
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 16px;
        margin-bottom: 16px;
      }

      .job-image {
        width: 150px;
        height: 100px;
        object-fit: cover;
        border-radius: 0px;
      }

      .verified-badge {
        background-color: var(--primary-blue);
        color: white;
        font-size: 12px;
        padding: 4px 8px;
        border-radius: 4px;
      }

      .job-meta {
        color: #6c757d;
        font-size: 13px;
      }

      .job-title {
        font-size: 15px;
        font-weight: 600;
        margin: 8px 0;
      }

      .job-description {
        font-size: 14px;
        color: #666;
      }

      .yacht-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
      }

      .yacht-card img {
        width: 100%;
        height: 140px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 8px;
      }

      .yacht-card h6 {
        font-size: 15px;
        margin: 0;
      }

      .stats-box {
        /* background: white; */
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 24px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12);
      }

      .stats-box h3 {
        font-size: 28px;
        font-weight: 600;
        margin: 0;
        color: var(--primary-blue);
      }

      .skill-tag {
        background: var(--light-gray);
        color: #333;
        padding: 6px 12px;
        border-radius: 4px;
        font-size: 13px;
        margin: 0 8px 8px 0;
        display: inline-block;
      }

      .certification-item {
        padding-bottom: 16px;
        margin-bottom: 16px;
        border-bottom: 1px solid #e9ecef;
      }

      .certification-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
      }

      .certification-date {
        font-size: 13px;
        color: #6c757d;
      }

      .view-all {
        color: var(--primary-blue);
        text-decoration: none;
        font-size: 14px;
      }

      .contact-icons {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
      }

      .contact-icon {
        width: 190px;
        height: 60px;
        background-color: #f0f3f7;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #7f8c8d;
      }

      @media (max-width: 768px) {
        .profile-header {
          height: 180px;
        }

        .content-box {
          padding: 16px;
        }
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
          <header class="profile-header">
            <div class="container position-relative h-100">
              <div class="d-flex justify-content-between align-items-start pt-4">
                <h1 class="text-white">Jack Sparrow profile</h1>
                <button class="btn edit-profile-btn">
                  <i class="bi bi-pencil"></i> Edit profile </button>
              </div>
              <!-- <div class="social-icons"><a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a><a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a></div> -->
            </div>
          </header>
          <div class="container">
            <div class="row">
              
                <!-- Profile Info -->
                <div style= "margin-buttom: 10px;" class="content-box profile-info">
                  <div class="d-flex align-items-start ">
                    <div class="profile-pic-container">
                      <img src="assets/img/jack.jpeg" alt="Profile" class="profile-pic rounded-circle">
                    </div>
                    <div style="width: 100%;" class="mt-4">
                      <div class="profile-meta d-flex gap-3">
                        <p style="color:blue;" class="mb-1">Captain</p>
                        <span>
                          <i class="bi bi-clock"></i>Yesterday </span>
                        <span>
                          <i class="bi bi-calendar"></i>12 December 2022 </span>
                        <span>
                          <i class="bi bi-geo-alt"></i>Florida, United States </span>
                      </div>
                    </div>
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
                <hr>
                <!-- Introduction -->
                <div class="col-lg-8">
                <div class="content-box">
                  <h5 class="section-title">
                    <i class="bi bi-info-circle"></i>Introduction
                  </h5>
                  <p>The service offered by a Professional on WYF is called a Job. When a Job is placed for a specific Yacht in a location, a ranked local Professional provide a quotation and exact time frame for the Job to be executed.</p>
                  <p class="mb-0">Yacht owners have various maintenance options. This comprises different price ranges. Professionals can offer various and tailored service packages according to their specific requirements.</p>
                </div>
                <!-- Company Details -->
                <div style="padding: 20px;  box-shadow: 0 1px 3px rgba(0,0,0,0.1); font-family: Arial, sans-serif;">
                  <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 20px; color: #333; font-size: 16px; font-weight: 600;">
                    <i class="bi bi-building" style="color: #0d6efd;"></i>
                    <span>Company details</span>
                  </div>
                  <div style="display: flex; flex-direction: column; gap: 16px;">
                    <div style="display: flex; gap: 16px;">
                      <div style="flex: 1; padding: 12px 16px; background: white; border: 1px solid #dee2e6; border-radius: 4px;">
                        <div style="color: #6c757d; font-size: 14px; margin-bottom: 4px;">Location: <b>Portugal</b>
                        </div>
                      </div>
                      <div style="flex: 1; padding: 12px 16px; background: white; border: 1px solid #dee2e6; border-radius: 4px;">
                        <div style="color: #6c757d; font-size: 14px; margin-bottom: 4px;">Years of experience: <b>8</b>
                        </div>
                      </div>
                    </div>
                    <div style="display: flex; gap: 16px;">
                      <div style="flex: 1; padding: 12px 16px; background: white; border: 1px solid #dee2e6; border-radius: 4px;">
                        <div style="color: #6c757d; font-size: 14px; margin-bottom: 4px;">Number of employees: <b>10-20</b>
                        </div>
                      </div>
                      <div style="flex: 1; padding: 12px 16px; background: white; border: 1px solid #dee2e6; border-radius: 4px;">
                        <div style="color: #6c757d; font-size: 14px; margin-bottom: 4px;">Workshop: <b>Yes</b>
                        </div>
                      </div>
                    </div>
                    <div style="padding: 12px 16px; background: white; border: 1px solid #dee2e6; border-radius: 4px;">
                      <div style="color: #6c757d; font-size: 14px; margin-bottom: 4px;">Storage unit: <b>Yes</b>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Past Jobs -->
                <div class="content-box">
                  <h5 class="section-title">
                    <i class="bi bi-briefcase"></i>Past jobs and references
                  </h5>
                  <!-- Job Item -->
                  <div class="job-card">
                    <div class="d-flex gap-3">
                      <img src="https://images.unsplash.com/photo-1590846406792-0adc7f938f1d?ixlib=rb-4.0.3" alt="Job" class="job-image">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <span class="verified-badge">Verified</span>
                          <span class="job-meta">20 Jan 2024</span>
                          <span class="job-meta">Port Portals Nous</span>
                          <span class="job-meta">0-10 meters</span>
                        </div>
                        <h6 class="job-title">The plastic on the roof needs replacement before winter</h6>
                        <p class="job-description mb-0">Yacht owners have various maintenance options. This comprises different price ranges. Professionals can offer various and tailored service packages according to their...</p>
                      </div>
                    </div>
                  </div>
                  <!-- Repeat job items as needed -->
                  <div class="job-card">
                    <div class="d-flex gap-3">
                      <img src="https://images.unsplash.com/photo-1590846406792-0adc7f938f1d?ixlib=rb-4.0.3" alt="Job" class="job-image">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <span class="verified-badge">Verified</span>
                          <span class="job-meta">20 Jan 2024</span>
                          <span class="job-meta">Port Portals Nous</span>
                          <span class="job-meta">0-10 meters</span>
                        </div>
                        <h6 class="job-title">The plastic on the roof needs replacement before winter</h6>
                        <p class="job-description mb-0">Yacht owners have various maintenance options. This comprises different price ranges. Professionals can offer various and tailored service packages according to their...</p>
                      </div>
                    </div>
                    <div class="row col-12">
                      <div class="job-feedback mt-3 p-3 border-top" style="display: flex; align-items: center; font-size: 0.9rem; color: #333;">
                        <div class="me-3" style="display: flex; align-items: center;">
                          <img src="assets/img/profilePic.jpg" alt="Profile Picture" style="width: 30px; height: 30px; border-radius: 50%; object-fit: cover;">
                        </div>
                        <div> Job was done very well and the professional presented interest, care and dedication from the start. For sure I've added him to my list of professionals to contact in the future. </div>
                      </div>
                    </div>
                  </div>
                  <div class="job-card">
                    <div class="d-flex gap-3">
                      <img src="https://images.unsplash.com/photo-1590846406792-0adc7f938f1d?ixlib=rb-4.0.3" alt="Job" class="job-image">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <span class="verified-badge">Verified</span>
                          <span class="job-meta">20 Jan 2024</span>
                          <span class="job-meta">Port Portals Nous</span>
                          <span class="job-meta">0-10 meters</span>
                        </div>
                        <h6 class="job-title">The plastic on the roof needs replacement before winter</h6>
                        <p class="job-description mb-0">Yacht owners have various maintenance options. This comprises different price ranges. Professionals can offer various and tailored service packages according to their...</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- My Yachts -->
              </div>
              <div style="margin-top: 20px;" class="col-lg-4">
                <!-- Stats -->
                <div style="background: url('assets/img/card-corner.png'); background-size: 100% 100%" class="stats-box">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <i class="bi bi-briefcase text-primary"></i>
                    <h6 class="mb-0">Jobs completed</h6>
                  </div>
                  <h3>33</h3>
                </div>
                <div style="background: url('assets/img/card-corner.png'); background-size: 100% 100%" class="stats-box">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <i class="bi bi-ship text-primary"></i>
                    <h6 class="mb-0">
                      <img src="assets/img/yacht-blue.png" alt="yacht icon"> Yachts & Vessels managed
                    </h6>
                  </div>
                  <h3>4</h3>
                </div>
                <!-- Skills -->
                <div class="content-box">
                  <h6 class="mb-3">Skills and competences</h6>
                  <div>
                    <span class="skill-tag">4G</span>
                    <span class="skill-tag">ANTIFOULING</span>
                    <span class="skill-tag">ANODES</span>
                    <span class="skill-tag">ANTIFOULING</span>
                    <span class="skill-tag">ANODES</span>
                    <span class="skill-tag">4G</span>
                    <span class="skill-tag">ANODES</span>
                    <span class="skill-tag">4G, 5G, STARLINK (INTERNET) INSTALLATION</span>
                  </div>
                </div>
                <!-- Certifications -->
                <div class="content-box">
                  <h6 class="mb-3">Certifications</h6>
                  <div class="certification-item">
                    <p class="mb-0">Master navigator and cordenate analisys</p>
                    <div class="d-flex align-items-center gap-2 mb-1">
                      <span class="verified-badge">Verified</span>
                      <span class="certification-date">12 Jan 1990</span>
                    </div>
                  </div>
                  <div class="certification-item">
                    <p class="mb-0">Master navigator and cordenate analisys</p>
                    <div class="d-flex align-items-center gap-2 mb-1">
                      <span class="verified-badge">Verified</span>
                      <span class="certification-date">12 Jan 1990</span>
                    </div>
                  </div>
                  <div class="certification-item">
                    <p class="mb-0">Master navigator and cordenate analisys</p>
                    <div class="d-flex align-items-center gap-2 mb-1">
                      <span class="verified-badge">Verified</span>
                      <span class="certification-date">12 Jan 1990</span>
                    </div>
                  </div>
                </div>
                <h5 class="mt-4">Contacts</h5>
                <div class="contact-icons">
                  <div class="contact-icon fs-3">
                    <i class="fas fa-phone"></i>
                  </div>
                  <div class="contact-icon fs-3">
                    <i class="fas fa-envelope"></i>
                  </div>
                </div>
              </div>
            </div>
            <div style="padding: 20px;  border-radius: 2px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); font-family: Arial, sans-serif;">
              <!-- Header Section -->
              <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <div style="display: flex; align-items: center; gap: 8px;">
                  <i class="bi bi-ship" style="color: #0d6efd; font-size: 16px;"></i>
                  <span style="font-size: 16px; font-weight: 600; color: #333;">
                    <img src="assets/img/yacht-blue.png" alt="yacht icon"> My yachts </span>
                  <span style="background: #6c757d; color: white; padding: 2px 6px; border-radius: 12px; font-size: 12px; margin-left: 4px;">3</span>
                </div>
                <a href="#" style="text-decoration: none; color: #0d6efd; font-size: 14px;">View all</a>
              </div>
              <!-- Yachts Grid -->
              <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                <!-- Yacht Card 1 -->
                <div style="background: white; border: 0px solid #dee2e6; border-radius: 0px; overflow: hidden;">
                  <img src="https://images.unsplash.com/photo-1567899378494-47b22a2ae96a" alt="Fast and smooth" style="width: 100%; height: 160px; object-fit: cover;">
                  <div style="padding: 12px;">
                    <h6 style="margin: 0; font-size: 15px; color: #333;">Fast and smooth</h6>
                  </div>
                </div>
                <!-- Yacht Card 2 -->
                <div style="background: white; border: 0px solid #dee2e6; border-radius: 0px; overflow: hidden;">
                  <img src="https://images.unsplash.com/photo-1567899378494-47b22a2ae96a" alt="Elizabeth III" style="width: 100%; height: 160px; object-fit: cover;">
                  <div style="padding: 12px;">
                    <h6 style="margin: 0; font-size: 15px; color: #333;">Elizabeth III</h6>
                  </div>
                </div>
                <!-- Yacht Card 3 -->
                <div style="background: white; border: 0px solid #dee2e6; border-radius: 0px; overflow: hidden;">
                  <img src="https://images.unsplash.com/photo-1567899378494-47b22a2ae96a" alt="Slice of life" style="width: 100%; height: 160px; object-fit: cover;">
                  <div style="padding: 12px;">
                    <h6 style="margin: 0; font-size: 15px; color: #333;">Slice of life</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
          <script>
            // Add this script to handle responsiveness
            function adjustLayout() {
              const container = document.querySelector('[style*="grid-template-columns"]');
              if (window.innerWidth <= 768) {
                container.style.gridTemplateColumns = '1fr';
              } else {
                container.style.gridTemplateColumns = 'repeat(auto-fit, minmax(250px, 1fr))';
              }
            }
            window.addEventListener('load', adjustLayout);
            window.addEventListener('resize', adjustLayout);
          </script>
  </body>
</html>