<!DOCTYPE html>
<html>
<head>
    @include('user.layout.link')
    <link rel="stylesheet" href="{{ asset('user/css/account/login.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/account/account.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
      <!-- jQuery library (CDN) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- select2 CSS (CDN) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

<!-- select2 JS (CDN) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <style>
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
        .is-invalid {
            border-color: red;
        }
    </style>
    <style>
    /* Style for Bootstrap Tags Input */
        .bootstrap-tagsinput {
            width: 100%; /* Adjust width as needed */
        }
        .bootstrap-tagsinput .tag {
            color: #ffffff !important; /* White text color */
            background-color: #5E8BF7; /* Blue background color */
            border: none; /* Remove border */
            margin-right: 2px; /* Adjust margin between tags */
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="font-family: Poppins;">
        <div class="row">
            <div class="col-xl-4 left-side">
                <div class="left-content">
                    <div class="overlay"></div>
                    <!-- logo -->
                    <div class="py-3">
                        <img src="/user/images/logo.png" class="position-relative z-index-1" alt="logo" width="100">
                    </div>
                    <!-- heading -->
                    <h2 class="text-white create-account-text position-relative z-index-1 text-uppercase">One-stop management Platform</h2>
                    <h1 class="text-center text-white create-account-text position-relative z-index-1">Keeping your yacht seaworthy, year-round</h1>
                </div>
            </div>
            <div class="col-xl-8 right-side-addlink justify-content-center" style="height: 100%;">
                <div class="px-5 py-3">
                    <div class="d-flex py-4">
                        <img src="/user/images/cheif.png"/>
                    </div>
                    <h2 class="" style="color: #00365E;">Create account as <span style="color: #5E8BF7;">Professional</span> </h2>
                    <p style="color: #00365E;">Please add your details and select the type of account to proceed</p>
                    <form id="registration-form">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="companyName" style="color: #00365E;">Details</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone number*">
                                <div class="error-message" data-error="phoneNumber"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="numEmployees" name="numEmployees" class="form-control">
                                    <option value="" selected>No of employees</option>
                                    <option value="1-10">1-10</option>
                                    <option value="11-50">11-50</option>
                                    <option value="51-200">51-200</option>
                                    <option value="201-500">201-500</option>
                                    <option value="501+">501+</option>
                                </select>
                                <div class="error-message" data-error="numEmployees"></div>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address*">
                                <div class="error-message" data-error="address"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="country" name="country" class="form-control">
                                    <option value="" selected>Country</option>
                                    <option value="Country1">Country1</option>
                                    <option value="Country2">Country2</option>
                                    <!-- Add more options as needed -->
                                </select>
                                <div class="error-message" data-error="country"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City*">
                                <div class="error-message" data-error="city"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="companyRegVat" name="companyRegVat" placeholder="Company Registration or VAT*">
                                <div class="error-message" data-error="companyRegVat"></div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="servicesProvided" style="color: #00365E;">What service do you provide (select multiple)</label>
                                <select class="form-control" id="servicesProvided" name="servicesProvided" multiple>
                                    <option value="">Select services</option>
                                    <option value="Safety">Safety</option>
                                    <option value="Fuel System Purification">Fuel System Purification</option>
                                    <option value="Flowers">Flowers</option>
                                    <option value="Galey equipment repair">Galey equipment repair</option>
                                    <option value="Deck equipment supplies">Deck equipment supplies</option>
                                </select>

                                <!-- <input type="text" class="form-control" id="servicesProvided" name="servicesProvided" placeholder="Add services" data-role="tagsinput"> -->
                                <div class="error-message" data-error="servicesProvided"></div>
                            </div>
                            <div class="form-group col-md-12">
                                <select id="tools" name="tools" class="form-control">
                                    <option value="" selected>Do you have your Own tools?                                    </option>
                                    <option value="1-10">Yes</option>
                                    <option value="11-50">No</option>
                                </select>
                                <div class="error-message" data-error="tools"></div>
                            </div>
                            <div class="form-group col-12 pt-4 pb-0 mb-0">
                                <label for="inputState" style="color: #00365E;">Socials</label>
                            </div>
                            <div class="facebook-linkdin">
                                <div class="form-group facebook pl-2 d-flex align-items-center border rounded">
                                    <img src="/user/images/Facebook.png" style="width: 24px; height: 24px;"/>
                                    <input type="text" class="form-control px-0 border-0" id="facebookUrl" name="facebookUrl" placeholder="Facebook Url">
                                    <div class="error-message" data-error="facebookUrl"></div>
                                </div>
                                <div class="form-group linkdin px-2 d-flex align-items-center border rounded">
                                    <img src="/user/images/Linkedin.png" style="width: 24px; height: 24px;"/>
                                    <input type="text" class="form-control border-0 px-1" id="linkedinUrl" name="linkedinUrl" placeholder="LinkedIn Url">
                                    <div class="error-message" data-error="linkedinUrl"></div>
                                </div>
                            </div>
                           

                        </div>
                        <div class="row mt-5 d-flex align-items-center">
                            <div class="col-6 d-flex">
                                    <a href="/register" > 
                                        <button type="button" class="border-0 d-flex align-items-center bg-white px-4 py-1">
                                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                                            </svg>
                                            <span>Back</span>
                                        </button>
                                    </a> 
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <button type="submit" class="border-0 d-flex align-items-center text-white px-4 py-1" style="background-color: #5E8BF7;">
                                    Next
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>

    $(document).ready(function() {
        $('#servicesProvided').select2({
            placeholder: "Select services", // Placeholder text
        });
        
    });

        $(document).ready(function() {
            // Retrieve and parse the professional data from localStorage
            var professionals = JSON.parse(localStorage.getItem('professional')) || {};

            // Define an object mapping each field to its corresponding ID
            var fields = {
                phoneNumber: '#phoneNumber',
                numEmployees: '#numEmployees',
                address: '#address',
                country: '#country',
                city: '#city',
                companyRegVat: '#companyRegVat',
                servicesProvided: '#servicesProvided',
                tools: '#tools',
                facebookUrl: '#facebookUrl',
                linkedinUrl: '#linkedinUrl'
            };

            // Loop through each field and set the value
            Object.keys(fields).forEach(function(key) {
                if (key === 'servicesProvided') {
                    // Special case for 'servicesProvided': parse JSON if exists, or set empty array
                    var services = professionals[key] ? JSON.parse(professionals[key]) : [];
                    $(fields[key]).val(services).trigger('change');
                } else {
                    // Set other fields normally, with default empty string
                    $(fields[key]).val(professionals[key] || '');
                }
            });


            $('#registration-form').on('submit', function(e) {
                e.preventDefault();
                // $('#servicesProvided').tagsinput({
                //     trimValue: true,
                //     confirmKeys: [13, 44] // Enter and comma trigger adding tags
                // });

                 var isValid = true;

                // Clear previous errors
                $('.error-message').text('');
                $('.form-control').removeClass('is-invalid');

                // Validate Company Name
                if ($('#companyName').val() === '') {
                    $('[data-error="companyName"]').text('Company Name is required');
                    $('#companyName').addClass('is-invalid');
                    isValid = false;
                }

                // Validate Company Url
                var urlPattern = /^(https?:\/\/)?([\w-]+(\.[\w-]+)+\/?)([\w-.,@?^=%&:~+#]*[\w-@?^=%&~+#])?$/;
                if ($('#companyUrl').val() === '') {
                    $('[data-error="companyUrl"]').text('Company Url is required');
                    $('#companyUrl').addClass('is-invalid');
                    isValid = false;
                } else if (!urlPattern.test($('#companyUrl').val())) {
                    $('[data-error="companyUrl"]').text('Please enter a valid Company Url');
                    $('#companyUrl').addClass('is-invalid');
                    isValid = false;
                }

                // Validate Company Email
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if ($('#companyEmail').val() === '') {
                    $('[data-error="companyEmail"]').text('Company Email is required');
                    $('#companyEmail').addClass('is-invalid');
                    isValid = false;
                } else if (!emailPattern.test($('#companyEmail').val())) {
                    $('[data-error="companyEmail"]').text('Please enter a valid email address');
                    $('#companyEmail').addClass('is-invalid');
                    isValid = false;
                }

                // Validate Phone Number
                if ($('#phoneNumber').val() === '') {
                    $('[data-error="phoneNumber"]').text('Phone Number is required');
                    $('#phoneNumber').addClass('is-invalid');
                    isValid = false;
                }

                // Validate Number of Employees
                if ($('#numEmployees').val() === '') {
                    $('[data-error="numEmployees"]').text('Please select the number of employees');
                    $('#numEmployees').addClass('is-invalid');
                    isValid = false;
                }

                // Validate Address
                if ($('#address').val() === '') {
                    $('[data-error="address"]').text('Address is required');
                    $('#address').addClass('is-invalid');
                    isValid = false;
                }

                // Validate Country
                if ($('#country').val() === '') {
                    $('[data-error="country"]').text('Please select a country');
                    $('#country').addClass('is-invalid');
                    isValid = false;
                }

                //Validate City
                if ($('#city').val() === '') {
                    $('[data-error="city"]').text('City is required');
                    $('#city').addClass('is-invalid');
                    isValid = false;
                }



                // Validate Facebook URL (optional field)
                if ($('#facebookUrl').val() !== '' && !urlPattern.test($('#facebookUrl').val())) {
                    $('[data-error="facebookUrl"]').text('Please enter a valid Facebook URL');
                    $('#facebookUrl').addClass('is-invalid');
                    isValid = false;
                }

                // Validate LinkedIn URL (optional field)
                if ($('#linkedinUrl').val() !== '' && !urlPattern.test($('#linkedinUrl').val())) {
                    $('[data-error="linkedinUrl"]').text('Please enter a valid LinkedIn URL');
                    $('#linkedinUrl').addClass('is-invalid');
                    isValid = false;
                }

                var servicesProvided = $('#servicesProvided').val();

                if (servicesProvided === null || servicesProvided.length === 0) {
                    $('[data-error="servicesProvided"]').text('Please add at least one service');
                    $('#servicesProvided').addClass('is-invalid');
                    isValid = false; // Assuming isValid is defined elsewhere
                } else {
                    $('[data-error="servicesProvided"]').text('');
                    $('#servicesProvided').removeClass('is-invalid');
                    isValid = true; // Assuming isValid is defined elsewhere
                }
                
                // If the form is valid, submit it
                if (isValid) {
                    var professional = {
                        phoneNumber:  $('#phoneNumber').val(),
                        numEmployees:  $('#numEmployees').val(),
                        address:  $('#address').val(),
                        country:  $('#country').val(),
                        city:  $('#city').val(),
                        companyRegVat:  $('#companyRegVat').val(),
                        servicesProvided:  JSON.stringify($('#servicesProvided').val()),
                        tools:  $('#tools').val(),
                        facebookUrl:  $('#facebookUrl').val(),
                        linkedinUrl:  $('#linkedinUrl').val(),
                    }
                    localStorage.setItem('professional', JSON.stringify(professional));
                    window.location.href = "/register/password";
                }
            });
        });
    </script>
</body>
</html>
