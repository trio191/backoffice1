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
      /* body {
            background-color: #f8f9fa;
        } */
      .card {
        border: 1px solid #e9ecef;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
      }

      .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
      }

      .avatar-sm {
        width: 32px;
        height: 32px;
      }

      .browser-icon {
        width: 24px;
        height: 24px;
      }

      .country-flag {
        width: 24px;
        height: 24px;
        border-radius: 50%;
      }

      .progress {
        height: 8px;
      }

      .table th {
        font-weight: 500;
        color: #6c757d;
      }

      .badge-soft {
        padding: 4px 8px;
        border-radius: 4px;
      }

      .badge-soft-success {
        background-color: #d1fae5;
        color: #065f46;
      }

      .badge-soft-warning {
        background-color: #fef3c7;
        color: #92400e;
      }

      .badge-soft-danger {
        background-color: #fee2e2;
        color: #991b1b;
      }

      .card {
        border: 1px solid #e9ecef;
        background: white;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      }

      .avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
      }

      .browser-icon {
        width: 24px;
        height: 24px;
      }

      .referral-item {
        padding: 12px;
        border-bottom: 1px solid #e9ecef;
      }

      .referral-item:last-child {
        border-bottom: none;
      }

      .text-primary-blue {
        color: #0066ff;
      }

      .browser-item {
        padding: 8px 0;
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
          <!-- Navbar --> <?php include 'layout/header-11.php';?>
          <!-- / Navbar -->
          <div class="layout-demo-wrapper" style="background-image: url('assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px; position: relative;">
            <div class="overlay"></div>
            <!-- Overlay -->
            <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
              <!-- Text container -->
              <div class="row">
                <div class="col-lg-7 text-white">
                  <h3 class="text-white">Manage Your Finance</h3>
                  <!-- <p style="margin-top: -20px;">Nice to see you again <span style="background-color: white;color: #00365d;padding: 2px;"><strong><i class="ti ti-link" style="font-size: 16px;margin-top: -3px;font-weight: 700;"></i>Referal link </strong><span style="color: #9cafd1;">(worldyachtrefit/4325425ptuser)</span></span> -->
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
                      <i class="fa-solid fa-dollar-sign" style="color:#5E8BF7"></i>
                    </div>
                    <div class="card-info">
                      <small style="font-size: 11px">income</small>
                      <h5 class="mb-0" style="color: #00365E">€ 34555</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                  <div class="d-flex align-items-center">
                    <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                      <i style="" class="fa-regular fa-star" style="color:#00365E; height: 20px; "></i>
                    </div>
                    <div class="card-info">
                      <small style="font-size: 11px">Premium Accounts</small>
                      <h5 class="mb-0" style="color: #00365E">123</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card" style="border: 1px solid #FF005C;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-red.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                  <div class="d-flex align-items-center">
                    <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#FF005C0D !important">
                      <i class="fa-solid fa-arrow-trend-down"></i>
                    </div>
                    <div class="card-info">
                      <small style="font-size: 11px">Users Downgraded</small>
                      <h5 class="mb-0" style="color: #FF005C">03</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card" style=" margin-right: 20px; border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                  <div class="d-flex align-items-center">
                    <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#2AD7B30D !important">
                      <i class="fa-solid fa-arrow-trend-up" style="color:#2AD7B3"></i>
                    </div>
                    <div class="card-info">
                      <small style="font-size: 11px">Users Upgraded</small>
                      <h5 class="mb-0" style="color: #2AD7B3">04 <span class="badge bg-label-secondary badge-sm" style="width: 60px;height: 20px;font-size: 10px;color: #00365E !important;">3.456 €</span>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="row g-3">
              <!-- Sales Overview -->
              <div class="col-12 col-lg-8">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <div class="d-flex align-items-center gap-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                          <path d="M3 3v18h18" />
                          <path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3" />
                        </svg>
                        <h5 class="card-title mb-0">Sales Overview</h5>
                      </div>
                      <select class="form-select form-select-sm w-auto">
                        <option>Current Year</option>
                      </select>
                    </div>
                    <canvas id="salesChart"></canvas>
                  </div>
                </div>
              </div>
              <!-- Top Customers -->
              <div class="col-12 col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="card-title mb-0">Top customers</h5>
                      <a href="#" class="text-decoration-none">View all</a>
                    </div>
                    <div class="d-flex flex-column gap-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                          <img src="https://via.placeholder.com/40" class="avatar" alt="Tim Cook">
                          <div>
                            <div class="fw-medium">Tim Cook</div>
                            <div class="text-muted small">Chief Engineer</div>
                          </div>
                        </div>
                        <div class="fw-medium">€4500</div>
                      </div>
                      <!-- Repeat for other customers -->
                    </div>
                    <div style="margin-top: 10px;" class="d-flex flex-column gap-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                          <img src="https://via.placeholder.com/40" class="avatar" alt="Tim Cook">
                          <div>
                            <div class="fw-medium">Tim Cook</div>
                            <div class="text-muted small">Chief Engineer</div>
                          </div>
                        </div>
                        <div class="fw-medium">€4500</div>
                      </div>
                      <!-- Repeat for other customers -->
                    </div>
                    <div style="margin-top: 10px;" class="d-flex flex-column gap-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                          <img src="https://via.placeholder.com/40" class="avatar" alt="Tim Cook">
                          <div>
                            <div class="fw-medium">Tim Cook</div>
                            <div class="text-muted small">Chief Engineer</div>
                          </div>
                        </div>
                        <div class="fw-medium">€4500</div>
                      </div>
                      <!-- Repeat for other customers -->
                    </div>
                    <div style="margin-top: 10px;" class="d-flex flex-column gap-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                          <img src="https://via.placeholder.com/40" class="avatar" alt="Tim Cook">
                          <div>
                            <div class="fw-medium">Tim Cook</div>
                            <div class="text-muted small">Chief Engineer</div>
                          </div>
                        </div>
                        <div class="fw-medium">€4500</div>
                      </div>
                      <!-- Repeat for other customers -->
                    </div>
                    <div style="margin-top: 10px;" class="d-flex flex-column gap-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                          <img src="https://via.placeholder.com/40" class="avatar" alt="Tim Cook">
                          <div>
                            <div class="fw-medium">Tim Cook</div>
                            <div class="text-muted small">Chief Engineer</div>
                          </div>
                        </div>
                        <div class="fw-medium">€4500</div>
                      </div>
                      <!-- Repeat for other customers -->
                    </div>
                    <div style="margin-top: 10px;" class="d-flex flex-column gap-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                          <img src="https://via.placeholder.com/40" class="avatar" alt="Tim Cook">
                          <div>
                            <div class="fw-medium">Tim Cook</div>
                            <div class="text-muted small">Chief Engineer</div>
                          </div>
                        </div>
                        <div class="fw-medium">€4500</div>
                      </div>
                      <!-- Repeat for other customers -->
                    </div>
                  </div>
                </div>
              </div>
             
            
              <!-- Recent Accounts Table -->
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <div class="d-flex align-items-center gap-2">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                          <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                          <circle cx="9" cy="7" r="4" />
                          <path d="M23 21v-2a4 4 0 00-3-3.87" />
                          <path d="M16 3.13a4 4 0 010 7.75" />
                        </svg>
                        <h5 class="card-title mb-0">Billings</h5>
                        <span class="badge bg-secondary">13</span>
                      </div>
                      <div class="d-flex gap-2">
                        <input type="search" class="form-control form-control-sm" placeholder="Search user">
                        <select class="form-select form-select-sm">
                          <option>Yachts</option>
                        </select>
                        <select class="form-select form-select-sm">
                          <option>All roles</option>
                        </select>
                        <select class="form-select form-select-sm">
                          <option>Order by: activity</option>
                        </select>
                        <h6 class="card-title mb-0">Reset</h6>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Plan</th>
                            <th>Billing</th>
                            <th>Price</th>
                            <th>Created on</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <img src="https://via.placeholder.com/32" class="avatar-sm" alt="">
                                <div>
                                  <div>Tim Burton</div>
                                  <div class="text-muted small">All fit LDA</div>
                                </div>
                              </div>
                            </td>
                            <td>Chief Engineer</td>
                            <td>Free forever</td>
                            <td>
                              <span class="badge-soft badge-soft-success">Paid</span>
                            </td>
                            <td>2500€</td>
                            <td>19 Jan 2023</td>
                            <td>
                              <button class="btn btn-sm btn-light">PDF</button>
                            </td>
                          </tr>
                          <!-- Repeat for other rows -->
                        </tbody>
                      </table>
                    </div>
                    <nav class="d-flex justify-content-between align-items-center mt-4">
                      <select class="form-select form-select-sm w-auto">
                        <option>5</option>
                      </select>
                      <ul class="pagination pagination-sm mb-0">
                        <li class="page-item">
                          <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">3</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
          // Initialize the donut chart
       
          // Sales Chart
          new Chart(document.getElementById('salesChart'), {
            type: 'bar',
            data: {
              labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
              datasets: [{
                data: [20, 25, 18, 25, 22, 28, 8, 30, 0, 0, 0, ],
                backgroundColor: '#0d6efd',
                borderRadius: 4
              }]
            },
            options: {
              plugins: {
                legend: {
                  display: false
                }
              },
              scales: {
                y: {
                  beginAtZero: true,
                  grid: {
                    borderDash: [2, 2]
                  }
                },
                x: {
                  grid: {
                    display: false
                  }
                }
              }
            }
          });
          // Reports Chart
          new Chart(document.getElementById('reportsChart'), {
            type: 'doughnut',
            data: {
              datasets: [{
                data: [55, 332, 144],
                backgroundColor: ['#ef4444', '#3b82f6', '#10b981']
              }]
            },
            options: {
              cutout: '75%',
              plugins: {
                legend: {
                  display: false
                }
              }
            }
          });
        </script>
  </body>
</html>