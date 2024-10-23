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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

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
       /* Initially hide the form outside the viewport */
       #slideForm {
            position: fixed;
            right: -100%;
            top: 0;
            width: 400px;
            height: 100%;
            background-color: #fff;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
            transition: right 0.4s ease;
            z-index: 9999;
            padding: 20px;
            overflow-y: auto; /* Add vertical scroll if content overflows */
        }

        /* Show the form when it has the "active" class */
        #slideForm.active {
            right: 0;
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
    padding-right: 10px; /* Adjust spacing between text and line as needed */
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
body {
            font-family: Arial, sans-serif;
        }

        /* Form hidden initially */
        #applicationForm {
            display: none;
            width: 325%;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 9999;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-section {
            border: 1px solid #ddd;
            padding: 20px;
            background-color: #fff;
        }

        .form-section h5 {
            font-size: 18px;
            font-weight: bold;
        }

        .form-section p {
            margin-bottom: 5px;
            font-size: 14px;
            color: #999;
        }

        .form-section input,
        .form-section textarea,
        .form-section select {
            margin-bottom: 20px;
        }

        .form-section .btn {
            width: 100%;
        }

        .total-cost {
            background-color: #f1f3f5;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .text-danger {
            color: #ff5757 !important;
        }

        .tag {
            display: inline-block;
            background-color: #e2e6ea;
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 12px;
            margin-right: 5px;
            margin-top: 10px;
        }

        .tag-remove {
            margin-left: 10px;
            cursor: pointer;
        }

        .form-control:invalid {
            border-color: red;
        }

        .form-select:invalid {
            border-color: red;
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

          <?php include 'layout/header-2.php';?>

          <!-- / Navbar -->
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
                            
                            
                             <div class="offcanvas-body  mx-0 flex-grow-0">
                         
                             </div>
                          </div>
                        </div>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="layout-demo-wrapper" style=" padding-top: 20px;padding-bottom: 20px; position: relative;background: #f2f6fa;">
                  <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;"> <!-- Text container -->
                      <div class="row pt-2">
                          <div class="col-lg-7 text-white">
                              <h3 class="" style="color: #00365E">The plastic on the roof needs replacement before winter</h3>
                              <div class="d-flex flex-wrap" style="margin-top:-10px">
                                <label class="badge me-2" style="background-color: #00365E;color: #fff;" >
                                  <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="ti ti-star ti-xs me-2"></i>Verified</span>
                                </label>
                                
                                <span class="d-flex align-items-center justify-content-center text-nowrap  vertical-line" style="color:#00365E"><i class="ti ti-calendar ti-xs me-2"></i>Posted on: 23 January 2022</span>
                                <span class="d-flex align-items-center justify-content-center text-nowrap  vertical-line" style="color:#00365E"><i class="ti ti-video ti-xs me-2"></i>Videos: 1</span>
                                <span class="d-flex align-items-center justify-content-center text-nowrap" style="color:#00365E"><i class="ti ti-photo ti-xs me-2"></i>Images: 4</span>
                              </div>
                          </div>
                          <div class="col-lg-5" style="text-align: right;">
                            <button type="button" class="btn waves-effect waves-light" style="border-radius: 0px !important;color: #00365E;background: #fff;">
                            Bookmark
                          </button>
                          <button type="button" class="btn waves-effect waves-light" style="border-radius: 0px !important;color: #00365E;background: #fff;">
                            Under analyssis
                          </button>
                          <button type="button" class="btn waves-effect waves-light" style="border-radius: 0px !important; color: #fff; background: #5E8BF7;" onclick="showForm()">
    Apply for this job
</button>
                          </div>
                      </div>
                  </div>
              </div>
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              
                <div class="col-lg-12" style="margin-top: -24px">
                  <div class="nav-align-top  mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="false" tabindex="-1">
                          Overview
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link " role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="true">
                          Applications
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content" style="margin-left: -20px;margin-right: -20px">
                      <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                        <div class="row">
                          <div class="col-lg-9" style="color: #00365E">
                            <p>The service offered by a Professional on WYR is called a Job. When a Job is placed for a specific Yacht in a location, a ranked local Professional provide a quotation and exact time frame for the Job to be executed.</p>
                            <p>
                            Yacht owners have various maintenance options. This comprises different price ranges. Professionals can offer various and tailored service packages according to their specific requirements.
                          </p>
                          <p>
                            The service offered by a Professional on WYR is called a Job. When a Job is placed for a specific Yacht in a location, a ranked local Professional provide a quotation and exact time frame for the Job to be executed.
                          </p>
                          <p>
                            Yacht owners have various maintenance options. This comprises different price ranges. Professionals can offer various and tailored service packages according to their specific requirements.
                            The service offered by a Professional on WYR is called a Job. When a Job is placed for a specific Yacht in a location, a ranked local Professional provide a quotation and exact time frame for the Job to be executed.</p>
                            <h3 style="color: #00365E;">Images and Videos</h3>
                            <div class="row">
                               <div class="col-lg-3">
                                 <img src="assets/assets/img/elements/2.jpg" style="height:150px;width:100%">
                               </div>
                               <div class="col-lg-3">
                                 <img src="assets/assets/img/elements/3.jpg" style="height:150px;width:100%">
                               </div>
                               <div class="col-lg-3">
                                 <img src="assets/assets/img/elements/4.jpg" style="height:150px;width:100%">
                               </div>
                               <div class="col-lg-3">
                                 <img src="assets/assets/img/elements/5.jpg" style="height:150px;width:100%">
                               </div>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="card mb-2" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                              <i class="ti ti-calendar ti-sm" style="color:#00365E"></i>
                            </div>
                            <div class="card-info">
                              <small style="font-size: 11px">Deliver by</small>
                              <h5 class="mb-0" style="color: #00365E">12 Dec 2024</h5>
                              
                            </div>
                          </div>
                      </div>
                          <div class="card mb-2" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                              <i class="ti ti-coin ti-sm" style="color:#00365E"></i>
                            </div>
                            <div class="card-info">
                              <small style="font-size: 11px">Budget</small>
                              <h5 class="mb-0" style="color: #00365E">Up to 6000€</h5>
                              
                            </div>
                          </div>
                      </div>
                          <div class="card mb-2" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                              <i class="ti ti-map-pin ti-sm" style="color:#00365E"></i>
                            </div>
                            <div class="card-info">
                              <small style="font-size: 11px">Port base</small>
                              <h5 class="mb-0" style="color: #00365E">Santa luzia esq, italy, 20559</h5>
                              
                            </div>
                          </div>
                      </div>
                          <div class="card mb-2" style="border: 1px solid #C6D2E7;box-shadow: none !important;background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                              <span style="color:#00365E;font-size: 16px;">Yacht Size: 0 - 10 meters</span>
                          </div>
                          
                          <div class="card mb-2" style="border: 1px solid #C6D2E7;box-shadow: none !important;background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                              <span style="color:#00365E;font-size: 16px;">Manufatorer: Admiral</span>
                          </div>
                          <div class="card mb-2" style="border: 1px solid #C6D2E7;box-shadow: none !important;background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                              <span style="color:#00365E;font-size: 16px;">Surveyor: Yes</span>
                          </div>
                         
                          <div class="card mb-2" style="border: 1px solid #C6D2E7;box-shadow: none !important;background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                              <p style="color: #00365E;font-size: 18px;">Job type and skills</p>
                              <p style="color: #00365E;font-size: 14px;">The following skills are suggest for this job</p>
                              <div class="d-flex flex-wrap">
                                <label class="badge bg-label-primary me-2 mb-2">
                                  4g
                                </label>
                                <label class="badge bg-label-primary me-2 mb-2">
                                  ANTIFOOLING
                                </label>
                                <label class="badge bg-label-primary me-2 mb-2">
                                  ANODES
                                </label>
                                <label class="badge bg-label-primary me-2 mb-2">
                                  ANTIFOOLING
                                </label>
                              </div>
                          </div>
                          
                          <button type="button" data-bs-toggle="offcanvas"
                          data-bs-target="#addYacht"
                          aria-controls="addYacht" class="btn btn-white waves-effect waves-light" style="border-radius: 0px !important;color: #00365d;">
                            <img src="/assets/img/yacht-black.png" style="width: 20%" class="me-1" />   Apply for this job
                          </button>
                          </div>
                        </div>
                      </div>
                      <!-- Form -->
<div id="slideForm">
    <form class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Why are you suitable for this job?" required></textarea>
            <div class="invalid-feedback">
                Please provide a message.
            </div>
        </div>

        <div class="mb-3">
            <label for="availability" class="form-label">Availability</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                <input type="date" id="availability" class="form-control" required>
                <div class="invalid-feedback">
                    Please select your availability date.
                </div>
            </div>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="timeframe" required>
            <label class="form-check-label" for="timeframe">Timeframe for completing the job</label>
            <div class="invalid-feedback">
                Please confirm the timeframe.
            </div>
        </div>

        <div class="mb-3">
            <label for="workplan" class="form-label">Workplan</label>
            <textarea class="form-control" id="workplan" rows="3" placeholder="Please describe your work plan" required></textarea>
            <div class="invalid-feedback">
                Please provide a workplan.
            </div>
        </div>

        <div class="mb-3">
            <label for="laborCost" class="form-label">Costs (labor and material)</label>
            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" id="laborCost" placeholder="EUR 3400" required>
                    <div class="invalid-feedback">
                        Please provide labor cost.
                    </div>
                </div>
                <div class="col">
                    <input type="number" class="form-control" id="materialCost" placeholder="EUR Material cost" required>
                    <div class="invalid-feedback">
                        Please provide material cost.
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3 total-cost">
            <p>Total cost: <strong id="totalCost">3400</strong></p>
        </div>

        <div class="mb-3">
            <label for="paymentOptions" class="form-label">Payment options</label>
            <select id="paymentOptions" class="form-select" required>
                <option value="3 Installments (1000€/each)">3 Installments (1000€/each)</option>
            </select>
            <div class="invalid-feedback">
                Please select a payment option.
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Apply for this job</button>
    </form>
</div>
                      
                      <div class="tab-pane fade " id="navs-top-messages" role="tabpanel">
                        <div class="col-lg-12 mt-5">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important ;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                              <i class="ti ti-briefcase ti-sm" style="color:#00365E"></i>
                            </div>
                            <div class="card-info">
                              <small style="font-size: 11px">Jobs Posted</small>
                              <h5 class="mb-0" style="color: #00365E">05</h5>
                              
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="card" style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#F2F6FA !important">
                              <i class="ti ti-x ti-sm" style="color:#00365E"></i>
                            </div>
                            <div class="card-info">
                              <small style="font-size: 11px">Applications refused</small>
                              <h5 class="mb-0" style="color: #00365E">12</h5>
                              
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
                              <small style="font-size: 11px">Applications received</small>
                              <h5 class="mb-0" style="color: #00365E">05</h5>
                              
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="card" style="border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2" style="background-color:#2AD7B30D !important">
                              <i class="ti ti-circle-check" style="color: #2AD7B3"></i>
                            </div>
                            <div class="card-info">
                              <small style="font-size: 11px">Applications accepted</small>
                              <h5 class="mb-0" style="color: #2AD7B3">04</h5>
                              
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
                          <i class="ti ti-file-export ti-md" style="color: #00365E"></i>
                          <label style="font-size: 18px;color: #00365E;padding-top: 5px;" class="me-2">Applications</label>
                          <label class="badge bg-label-primary rounded-pill " style="color: #00365E !important">15</label>
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
                             Status
                            </button>
                            <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                             All Jobs
                            </button>
                            <button type="button" class="btn dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                             All Yachts
                            </button>
                          </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      


                      <!-- Cards area  -->

                      <div class="col-lg-12 mt-4 mb-4">
                        <table class="table table-responsive">
                          <tr style="font-size: 14px">
                            <td><span class="me-2">Application date</span> <i class="fa fa-bars-staggered me-2"></i></td>
                            <td><span class="me-2">Message</span> <i class="fa fa-bars-staggered me-2"></i></td>
                            <td><span class="me-2">Offer</span> <i class="fa fa-bars-staggered me-2"></i></td>
                            <td><span class="me-2">Status</span> <i class="fa fa-bars-staggered me-2"></i></td>
                          </tr>
                          <tr class="border" style="color:#00365E;font-size: 14px;">
                            
                            <td>
                              <div class="d-flex flex-wrap">
                                <i class="ti ti-calendar me-1"></i>
                                <span>22 Jan 2023</span>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex flex-wrap">
                                <label class="badge me-1" style="background-color: #FF005C;">new</label>
                                <span style="font-size: 12px;padding-top: 4px;">The plastic on the roof needs replacement before winter</span>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex flex-wrap">
                                <i class="ti ti-coin me-1"></i>
                                <span style="font-size: 12px;padding-top: 2px;">10.500€</span>
                              </div>
                            </td>
                            <td>
                              <label class="badge bg-label-primary">
                                <i class="ti ti-eye ti-xs me-1" ></i>
                                <span style="padding-top: 4px;">Under analysis </span>
                              </label>
                            </td>
                          </tr>
                          <tr class="border mt-3" style="color:#00365E;font-size: 14px;">
                            
                            <td>
                              <div class="d-flex flex-wrap">
                                <i class="ti ti-calendar me-1"></i>
                                <span>22 Jan 2023</span>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex flex-wrap">
                                <label class="badge me-1" style="background-color: #FF005C;">new</label>
                                <span style="font-size: 12px;padding-top: 4px;">The plastic on the roof needs replacement before winter</span>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex flex-wrap">
                                <i class="ti ti-coin me-1"></i>
                                <span style="font-size: 12px;padding-top: 2px;">10.500€</span>
                              </div>
                            </td>
                            <td>
                              <label class="badge bg-label-primary">
                                <i class="ti ti-eye ti-xs me-1" ></i>
                                <span style="padding-top: 4px;">Under analysis </span>
                              </label>
                            </td>
                          </tr>
                        </table>
                      </div>

                      <!-- add Yacht -->

                      
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
                      </div>
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
       // Function to toggle the form visibility
    function showForm() {
        var form = document.getElementById('slideForm');
        form.classList.toggle('active');  // Toggle the 'active' class to slide the form in/out
    }
        // Show the form when the button is clicked
        function showForm() {
        }

        // Form validation script
        (function () {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')

            Array.from(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/assets/js/main.js"></script>

    <!-- Page JS -->
  </body>
</html>
