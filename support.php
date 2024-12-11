<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Applications</title>
    <meta name="description" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
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
    <!-- Page CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
/* Custom styles */
.hero-section {
      background-image: url('assets/img/12 - Copy.png'); /* Replace with your image URL */
      background-size: cover;
      background-position: center;
      padding: 60px 0;
      color: white;
      text-align: center;
    }
    .faq-question {
      cursor: pointer;
      text-decoration: underline;
      color: #0056b3;
    }
    .faq-answer {
      display: none;
      padding-left: 20px;
      color: #333;
    }
    .contact-form {
      margin-top: 30px;
    /* }
    .hero-section {
    background-image: url('assets/img/bg.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: white; */
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
          <!-- Navbar --> <?php include 'layout/header-7.php';?>
          <!-- / Navbar -->
        
          <div class="hero-section text-center text-white py-5">
    <h2 style= "color: white;" >Do you need assistance?</h2>
    <input type="text" class="form-control mt-3" placeholder="Search for a topic" style="max-width: 400px; margin: auto;">
    <p>Or contact us directly through the form below.</p>
</div>


  <!-- FAQ Section -->
  <div class="container my-5">
    <h3 class="text-center mb-4">Frequently Asked Questions</h3>
    <div class="accordion" id="faqAccordion">
      <!-- FAQ Item 1 -->
      <div style= "margin-left: 400px;" class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            Can I cancel my subscription at any moment?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">The answer should be here</div>
        </div>
      </div>
      <div style= "margin-left: 400px;" class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            Can I cancel my subscription at any moment?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">The answer should be here</div>
        </div>
      </div>
      <div style= "margin-left: 400px;" class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            Can I cancel my subscription at any moment?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">The answer should be here</div>
        </div>
      </div>
      <div style= "margin-left: 400px;" class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            Can I cancel my subscription at any moment?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">The answer should be here</div>
        </div>
      </div>
      <!-- Repeat FAQ Item for additional questions -->
      <div style= "margin-left: 400px;" class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
            What happens to all my posts if I stop paying my subscription?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">The answer should be here</div>
        </div>
      </div>
      <!-- Add more FAQ items as needed -->
    </div>
  </div>

  <!-- Image Section -->
  <div class="container text-center my-5">
    <img src="assets/img/Screenshot_2024_11_04-1.png" alt="Image" class="img-fluid" style="max-height: 300px;">
  </div>

  <!-- Contact Section -->
  <div class="container text-center my-5">
    <h4>You still have questions?</h4>
    <p>Contact us directly with the form below</p>
    
    <!-- Contact Form -->
    <form class="contact-form">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="mb-3">
            <label for="contactMethod" class="form-label">I prefer to be contacted by:</label>
            <select id="contactMethod" class="form-select">
              <option>Phone call</option>
              <option>Email</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject:</label>
            <input type="text" id="subject" class="form-control" placeholder="Enter subject">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message:</label>
            <textarea id="message" class="form-control" rows="4" placeholder="Tell us your question and we'll contact you as soon as possible"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Request Assistance</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>