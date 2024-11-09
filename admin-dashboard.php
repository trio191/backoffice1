<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Jobs Detail</title>
    <meta name="description" content="" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/assets/img/favicon/favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="assets/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="assets/assets/vendor/fonts/flag-icons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/assets/css/demo.css" />
    <link rel="stylesheet" href="assets/css/profile3.css">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="assets/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css">
    <!-- Page CSS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Helpers -->
    <script src="assets/assets/vendor/js/helpers.js"></script>
    <!-- Template customizer & Theme config files -->
    <script src="assets/assets/vendor/js/template-customizer.js"></script>
    <script src="assets/assets/js/config.js"></script>
    <style type="text/css">
      .card {
        border: none;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      }

      .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
        border-bottom: none;
        font-weight: bold;
      }

      .chart-container {
        padding: 1rem;
      }

      .chart-title {
        display: flex;
        align-items: center;
        gap: 8px;
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
        overflow-x: hidden;
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

      /* Custom Styles */
      .customer-card {
        max-width: 350px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 20px;
      }

      .card-header {
        display: flex;
        justify-content: space-between;
        font-weight: bold;
      }

      .customer-list {
        list-style-type: none;
        padding: 0;
        margin: 0;
        overflow-y: auto;
        max-height: 500px;
      }

      .customer-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
      }

      .customer-info {
        display: flex;
        align-items: center;
      }

      .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
      }

      .name-role {
        display: flex;
        flex-direction: column;
      }

      .name-role .name {
        font-weight: bold;
        font-size: 16px;
      }

      .name-role .role {
        font-size: 12px;
        color: #007bff;
      }

      .price {
        font-weight: bold;
      }

      /* Custom Styles */
      .customer-type-card {
        max-width: 350px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 20px;
      }

      .card-header {
        font-weight: bold;
        margin-bottom: 15px;
      }

      .customer-type-list {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }

      .customer-type-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
      }

      .icon-name {
        display: flex;
        align-items: center;
      }

      .icon {
        width: 30px;
        height: 30px;
        background-color: #e7f0ff;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        margin-right: 10px;
        font-size: 18px;
        color: #007bff;
      }

      .customer-details {
        display: flex;
        align-items: center;
      }

      .count {
        margin-right: 15px;
        color: #333;
      }

      .amount {
        font-weight: bold;
        color: #007bff;
      }

      /* Custom Styles */
      .country-card {
        max-width: 350px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 20px;
      }

      .card-header {
        display: flex;
        justify-content: space-between;
        font-weight: bold;
        margin-bottom: 15px;
      }

      .country-list {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }

      .country-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
      }

      .country-info {
        display: flex;
        align-items: center;
      }

      .flag {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-right: 10px;
      }

      .country-details {
        display: flex;
        flex-direction: column;
      }

      .country-name {
        font-size: 14px;
        color: #888;
      }

      .amount {
        font-weight: bold;
        font-size: 16px;
      }

      .growth {
        font-size: 14px;
        color: #28a745;
        font-weight: bold;
      }

      body {
        font-family: Arial, sans-serif;
        background-color: #f5f7fa;
      }

      .report-card {
        width: 100%;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      }

      .incidents {
        stroke: #ff4d4d;
        stroke-dasharray: 15, 100;
      }

      .progress {
        stroke: #4fd1c5;
        stroke-dasharray: 60, 100;
      }

      .report-count {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
      }

      .report-count h2 {
        font-size: 24px;
        margin: 0;
        color: #333;
      }

      .report-count p {
        margin: 0;
        font-size: 12px;
        color: #666;
      }

      .details {
        font-size: 14px;
        color: #333;
      }

      .details .d-flex {
        padding: 4px 0;
      }

      .icon {
        font-size: 16px;
        margin-right: 5px;
      }

      #referralList .referral-item {
        display: flex;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
      }

      #referralList .referral-item:last-child {
        border-bottom: none;
      }

      .referral-item img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 15px;
      }

      .referral-item .info {
        flex-grow: 1;
      }

      .referral-item .info p {
        margin: 0;
      }

      .referral-item .info a {
        color: #007bff;
        font-size: 12px;
      }

      .referral-item .stats {
        display: flex;
        align-items: center;
      }

      .stats .amount {
        display: flex;
        align-items: center;
        margin-right: 15px;
      }

      .stats .amount span {
        margin-left: 5px;
      }

      .stats .views {
        display: flex;
        align-items: center;
      }

      .stats .views span {
        margin-left: 5px;
      }

      #platformList .platform-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
      }

      #platformList .platform-item:last-child {
        border-bottom: none;
      }

      .platform-item .icon img {
        width: 30px;
        height: 30px;
        object-fit: contain;
        margin-right: 15px;
      }

      .platform-item .info {
        flex-grow: 1;
        font-size: 14px;
      }

      .platform-item .percentage {
        font-weight: bold;
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
          <!-- Navbar --> <?php include 'layout/header-4.php';?>
          <!-- / Navbar -->
          <div class="layout-demo-wrapper" style="background-image: url('assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px; position: relative;">
            <div class="overlay"></div>
            <!-- Overlay -->
            <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
              <!-- Text container -->
              <div class="row">
                <div class="col-lg-7 text-white">
                  <h3 class="text-white">Welcome back, Petter</h3>
                  <p style="margin-top: -20px;">Nice to see you again <span style="background-color: white;color: #00365d;padding: 2px;">
                      <strong>
                        <i class="ti ti-link" style="font-size: 16px;margin-top: -3px;font-weight: 700;"></i>Referal link </strong>
                      <span style="color: #9cafd1;">(worldyachtrefit/4325425ptuser)</span>
                    </span>
                  </p>
                </div>
                <div class="col-lg-5" style="text-align: right;">
                  <!-- <button type="button" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasEnd"
                          aria-controls="offcanvasEnd" class="btn btn-white waves-effect waves-light" style="border-radius: 0px !important;color: #00365d;"><span class="ti-xs ti ti-user-plus me-1"></span>Add crew </button><button type="button" data-bs-toggle="offcanvas"
                          data-bs-target="#createJob"
                          aria-controls="createJob" class="btn btn-white waves-effect waves-light" style="border-radius: 0px !important;color: #00365d;"><span class="ti-xs ti ti-briefcase me-1"></span>Create Job </button> -->
                  <button type="button" class="btn " style="border-radius: 0px !important;color: #00365d;border: 1px solid white;color: white;width: 20px;">
                    <span class="ti-xs ti ti-dots-vertical me-1"></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 mt-5">
            <div class="row">
              <div class="col-lg-3">
                <div class="card" style="  margin-left: 20px; border: 1px solid #5E8BF7;height: 90px;box-shadow: 0px 16px 30px 0px #4680FF29;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                  <div class="d-flex align-items-center">
                    <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                      <i class="ti ti-briefcase ti-sm" style="color:#5E8BF7"></i>
                    </div>
                    <div class="card-info">
                      <small style="font-size: 11px">Open Jobs</small>
                      <h5 class="mb-0" style="color: #00365E">15</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
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
                <div class="card" style="border: 1px solid #FF005C;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-red.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                  <div class="d-flex align-items-center">
                    <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#FF005C0D !important">
                      <img src="assets/img/icon.png" style="width: 20px">
                    </div>
                    <div class="card-info">
                      <small style="font-size: 11px">Open incidents</small>
                      <h5 class="mb-0" style="color: #FF005C">03</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card" style=" margin-right: 20px; border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                  <div class="d-flex align-items-center">
                    <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#2AD7B30D !important">
                      <i class="ti ti-circle-check ti-sm" style="color:#2AD7B3"></i>
                    </div>
                    <div class="card-info">
                      <small style="font-size: 11px">Active Jobs</small>
                      <h5 class="mb-0" style="color: #2AD7B3">04 <span class="badge bg-label-secondary badge-sm" style="width: 60px;height: 20px;font-size: 10px;color: #00365E !important;">3.456 €</span>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row col-lg-12">
            <div class="col-lg-8">
              <div class="container mt-5">
                <div class="card">
                  <div class="card-header">
                    <div class="chart-title">
                      <i class="bi bi-cart-fill"></i>
                      <!-- Bootstrap cart icon -->
                      <span>Sales Overview</span>
                    </div>
                    <div>
                      <span>Current Year</span>
                      <i class="bi bi-caret-down-fill"></i>
                      <!-- Bootstrap caret icon -->
                    </div>
                  </div>
                  <div class="chart-container">
                    <canvas id="salesChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="container mt-5">
                <div class="customer-card">
                  <div class="card-header">
                    <span>Top customers</span>
                    <a href="#" class="text-primary">View all</a>
                  </div>
                  <ul class="customer-list">
                    <li class="customer-item">
                      <div class="customer-info">
                        <img src="https://via.placeholder.com/40" alt="Avatar" class="avatar">
                        <div class="name-role">
                          <span class="name">Tim Cook</span>
                          <span class="role">Chief Engineer</span>
                        </div>
                      </div>
                      <span class="price">€4500</span>
                    </li>
                    <li class="customer-item">
                      <div class="customer-info">
                        <div class="avatar bg-primary text-white d-flex align-items-center justify-content-center">JS</div>
                        <div class="name-role">
                          <span class="name">Jack Sparrow</span>
                          <span class="role">Captain</span>
                        </div>
                      </div>
                      <span class="price">€4500</span>
                    </li>
                    <li class="customer-item">
                      <div class="customer-info">
                        <img src="https://via.placeholder.com/40" alt="Avatar" class="avatar">
                        <div class="name-role">
                          <span class="name">Tom Spill</span>
                          <span class="role">Captain</span>
                        </div>
                      </div>
                      <span class="price">€4500</span>
                    </li>
                    <li class="customer-item">
                      <div class="customer-info">
                        <img src="https://via.placeholder.com/40" alt="Avatar" class="avatar">
                        <div class="name-role">
                          <span class="name">Tom Spill</span>
                          <span class="role">Captain</span>
                        </div>
                      </div>
                      <span class="price">€4500</span>
                    </li>
                    <li class="customer-item">
                      <div class="customer-info">
                        <img src="https://via.placeholder.com/40" alt="Avatar" class="avatar">
                        <div class="name-role">
                          <span class="name">Tom Spill</span>
                          <span class="role">Captain</span>
                        </div>
                      </div>
                      <span class="price">€4500</span>
                    </li>
                    <!-- Repeat for more customers -->
                  </ul>
                </div>
              </div>
            </div>
            <div class="container mt-5">
              <div class="row justify-content-center gy-4">
                <!-- First Card -->
                <div class="col-lg-4 d-flex">
                  <div class="card w-100 p-3">
                    <div class="card-header text-center">Customer Type</div>
                    <ul class="list-unstyled mt-3">
                      <li class="d-flex justify-content-between mb-2">
                        <div>🏢 Companies</div>
                        <div>
                          <span class="count">34</span> | € 44.553
                        </div>
                      </li>
                      <li class="d-flex justify-content-between mb-2">
                        <div>⛵ Yacht Owner</div>
                        <div>
                          <span class="count">34</span> | € 44.553
                        </div>
                      </li>
                      <li class="d-flex justify-content-between mb-2">
                        <div>⚓ Captain</div>
                        <div>
                          <span class="count">34</span> | € 44.553
                        </div>
                      </li>
                      <li class="d-flex justify-content-between mb-2">
                        <div>👔 Professional</div>
                        <div>
                          <span class="count">34</span> | € 44.553
                        </div>
                      </li>
                      <li class="d-flex justify-content-between mb-2">
                        <div>✔️ Surveyor</div>
                        <div>
                          <span class="count">34</span> | € 44.553
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Second Card -->
                <div class="col-lg-4 d-flex">
                  <!-- <div class="container d-flex justify-content-center mt-5"> -->
                  <div style="border: 1px solid #ddd; border-radius: 8px; padding: 16px; max-width: 350px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff;">
                    <div style="font-weight: bold; display: flex; justify-content: space-between; color: #0073e6; margin-bottom: 10px;">
                      <span>Companies by country</span>
                      <span style="color: #6c757d;">This month &#9662;</span>
                    </div>
                    <ul class="list-unstyled">
                      <li style="display: flex; justify-content: space-between; align-items: center; padding: 8px 0; border-bottom: 1px solid #f1f1f1;">
                        <div style="display: flex; align-items: center;">
                          <img src="https://via.placeholder.com/30x20.png?text=PT" alt="Portugal Flag" style="width: 30px; height: 20px; border-radius: 3px; margin-right: 10px;">
                          <div style="display: flex; flex-direction: column;">
                            <span style="font-weight: bold; color: #333;">€ 22,435</span>
                            <span style="color: #777; font-size: 14px;">Portugal</span>
                          </div>
                        </div>
                        <span style="color: #28a745; font-weight: bold; font-size: 14px;">▲ 10.3%</span>
                      </li>
                      <li style="display: flex; justify-content: space-between; align-items: center; padding: 8px 0; border-bottom: 1px solid #f1f1f1;">
                        <div style="display: flex; align-items: center;">
                          <img src="https://via.placeholder.com/30x20.png?text=FR" alt="France Flag" style="width: 30px; height: 20px; border-radius: 3px; margin-right: 10px;">
                          <div style="display: flex; flex-direction: column;">
                            <span style="font-weight: bold; color: #333;">€ 22,435</span>
                            <span style="color: #777; font-size: 14px;">France</span>
                          </div>
                        </div>
                        <span style="color: #28a745; font-weight: bold; font-size: 14px;">▲ 10.3%</span>
                      </li>
                      <li style="display: flex; justify-content: space-between; align-items: center; padding: 8px 0; border-bottom: 1px solid #f1f1f1;">
                        <div style="display: flex; align-items: center;">
                          <img src="https://via.placeholder.com/30x20.png?text=ES" alt="Spain Flag" style="width: 30px; height: 20px; border-radius: 3px; margin-right: 10px;">
                          <div style="display: flex; flex-direction: column;">
                            <span style="font-weight: bold; color: #333;">€ 22,435</span>
                            <span style="color: #777; font-size: 14px;">Spain</span>
                          </div>
                        </div>
                        <span style="color: #28a745; font-weight: bold; font-size: 14px;">▲ 10.3%</span>
                      </li>
                      <li style="display: flex; justify-content: space-between; align-items: center; padding: 8px 0;">
                        <div style="display: flex; align-items: center;">
                          <img src="https://via.placeholder.com/30x20.png?text=US" alt="United States Flag" style="width: 30px; height: 20px; border-radius: 3px; margin-right: 10px;">
                          <div style="display: flex; flex-direction: column;">
                            <span style="font-weight: bold; color: #333;">€ 22,435</span>
                            <span style="color: #777; font-size: 14px;">United States</span>
                          </div>
                        </div>
                        <span style="color: #28a745; font-weight: bold; font-size: 14px;">▲ 10.3%</span>
                      </li>
                    </ul>
                  </div>
                  <!-- </div> -->
                </div>
                <!-- Third Card -->
                <div class="col-lg-4 d-flex">
                  <div class="card w-100 p-3 text-center">
                    <div class="card-header">Reports Performance</div>
                    <canvas id="myDoughnutChart" style="max-width: 150px; margin: 10px auto;"></canvas>
                    <div class="mt-3">
                      <div class="d-flex justify-content-between mb-2">
                        <span>⚠️ Incidents</span>
                        <span>55</span>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <span>📂 Progress</span>
                        <span>332</span>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <span>🧑‍💼 Surveyors</span>
                        <span>144</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div style= "margin-top: 20px;" class="row">
    <div class="col-lg-8">
        <!-- <div class="container my-4"> -->
        <div class="card p-3">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Top Referral Leads</h5>
                <div class="dropdown">
                    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This Month </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">This Month</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">This Year</a>
                    </div>
                </div>
            </div>
            <hr>
            <div id="referralList">
                <!-- Dynamic content will be loaded here -->
            </div>
        </div>
    </div>

    <div style= "height:600px;" class="col-lg-4">
        <!-- <div class="container my-4"> -->
        <div class="card p-3">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Platform Access</h5>
                <div class="dropdown">
                    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Browser </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Browser</a>
                        <a class="dropdown-item" href="#">OS</a>
                        <a class="dropdown-item" href="#">Device</a>
                    </div>
                </div>
            </div>
            <hr>
            <div id="platformList">
                <!-- Dynamic content will be loaded here -->
            </div>
        </div>
        <!-- </div> -->
    </div>
</div>

                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    <!-- Bootstrap JS and dependencies -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    <script>
                      document.addEventListener("DOMContentLoaded", function() {
                        const platforms = [{
                          name: "Google Chrome",
                          percentage: "56%",
                          icon: "https://via.placeholder.com/30"
                        }, {
                          name: "Safari",
                          percentage: "40%",
                          icon: "https://via.placeholder.com/30"
                        }, {
                          name: "Opera",
                          percentage: "33%",
                          icon: "https://via.placeholder.com/30"
                        }, {
                          name: "Microsoft Edge",
                          percentage: "30%",
                          icon: "https://via.placeholder.com/30"
                        }, {
                          name: "Brave",
                          percentage: "22%",
                          icon: "https://via.placeholder.com/30"
                        }, {
                          name: "Firefox",
                          percentage: "22%",
                          icon: "https://via.placeholder.com/30"
                        }, {
                          name: "Samsung Internet",
                          percentage: "22%",
                          icon: "https://via.placeholder.com/30"
                        }, ];
                        const platformList = document.getElementById("platformList");
                        platforms.forEach(platform => {
                          const platformItem = document.createElement("div");
                          platformItem.classList.add("platform-item");
                          platformItem.innerHTML = `
            
																												<div class="d-flex align-items-center">
																													<div class="icon">
																														<img src="${platform.icon}" alt="${platform.name}">
																														</div>
																														<div class="info">${platform.name}</div>
																													</div>
																													<div class="percentage">${platform.percentage}</div>
        `;
                          platformList.appendChild(platformItem);
                        });
                      });
                      document.addEventListener("DOMContentLoaded", function() {
                        const referrals = [{
                          name: "Tim Burton",
                          link: "worldyachtrefit/tim3225",
                          amount: "44.52€",
                          views: 13,
                          image: "https://via.placeholder.com/40"
                        }, {
                          name: "Tim Burton",
                          link: "worldyachtrefit/tim3225",
                          amount: "44.52€",
                          views: 13,
                          image: "https://via.placeholder.com/40"
                        }, {
                          name: "Tim Burton",
                          link: "worldyachtrefit/tim3225",
                          amount: "44.52€",
                          views: 13,
                          image: "https://via.placeholder.com/40"
                        }, {
                          name: "Tim Burton",
                          link: "worldyachtrefit/tim3225",
                          amount: "44.52€",
                          views: 13,
                          image: "https://via.placeholder.com/40"
                        }, {
                          name: "Tim Burton",
                          link: "worldyachtrefit/tim3225",
                          amount: "44.52€",
                          views: 13,
                          image: "https://via.placeholder.com/40"
                        }, ];
                        const referralList = document.getElementById("referralList");
                        referrals.forEach(referral => {
                          const referralItem = document.createElement("div");
                          referralItem.classList.add("referral-item");
                          referralItem.innerHTML = `
            
																													<img src="${referral.image}" alt="${referral.name}">
																														<div class="info">
																															<p>
																																<strong>${referral.name}</strong>
																															</p>
																															<a href="#">All fix LDA</a>
																															<p>${referral.link}</p>
																														</div>
																														<div class="stats">
																															<div class="amount">
																																<i class="fas fa-coins"></i>
																																<span>${referral.amount}</span>
																															</div>
																															<div class="views">
																																<i class="fas fa-eye"></i>
																																<span>${referral.views}</span>
																															</div>
																														</div>
        `;
                          referralList.appendChild(referralItem);
                        });
                      });
                      const ctx = document.getElementById('salesChart').getContext('2d');
                      new Chart(ctx, {
                        type: 'bar',
                        data: {
                          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                          datasets: [{
                            label: 'Sales',
                            data: [20000, 25000, 15000, 30000, 28000, 35000, 60000, 5000, 0, 0, 0, 0],
                            backgroundColor: 'rgba(54, 162, 235, 0.8)',
                            borderRadius: 8
                          }]
                        },
                        options: {
                          responsive: true,
                          plugins: {
                            legend: {
                              display: false
                            }
                          },
                          scales: {
                            y: {
                              beginAtZero: true,
                              ticks: {
                                stepSize: 10000,
                                callback: function(value) {
                                  return value + 'k';
                                }
                              }
                            }
                          }
                        }
                      });
                    </script>
                    <script>
                      const ctxxx = document.getElementById('myDoughnutChart');
                      new Chart(ctxxx, {
                        type: 'doughnut',
                        data: {
                          labels: ['Red', 'Blue', 'Green'],
                          datasets: [{
                            label: 'Categories',
                            data: [30, 40, 30], // Adjust values as needed
                            backgroundColor: ['rgba(255, 99, 132, 0.6)', // Red
                              'rgba(54, 162, 235, 0.6)', // Blue
                              'rgba(75, 192, 192, 0.6)' // Green
                            ],
                            borderColor: ['rgba(255, 99, 132, 1)', // Darker Red border
                              'rgba(54, 162, 235, 1)', // Darker Blue border
                              'rgba(75, 192, 192, 1)' // Darker Green border
                            ],
                            borderWidth: 1
                          }]
                        },
                        options: {
                          responsive: true,
                          cutout: '50%', // Controls the doughnut hole size; adjust if needed
                          plugins: {
                            legend: {
                              position: 'top',
                            },
                            tooltip: {
                              callbacks: {
                                label: function(tooltipItem) {
                                  return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                                }
                              }
                            }
                          }
                        }
                      });
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
  </body>
</html>