<!DOCTYPE html>
<html>
<head>
    @include('user.layout.link')
    <link rel="stylesheet" href="{{ asset('user/css/account/login.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/account/account.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
</head>
<body style="overflow-x:hidden">
    <div class="container-fluid" style="font-family: Poppins;">
        <div class="row">
            <div class="col-xl-4 left-side">
                <div class="left-content">
                    <div class="overlay"></div>
                    <div class="py-3">
                        <img src="/user/images/logo.png" class="position-relative z-index-1" alt="logo" width="100">
                    </div>
                    <p class="text-white position-relative create-account-text-upper z-index-1 text-uppercase">One-stop management Platform</p>
                    <h4 class="text-center create-account-text-heading text-white position-relative z-index-1">Keeping your yacht seaworthy, year-round</h4>
                </div>
            </div>
            <div class="col-12 col-xl-8 p-0 right-side">
                <div class="px-5 col-12">
                    <div class="d-flex py-4">
                        <img src="/user/images/Stepper.png"/>
                    </div>
                    <h1 class="heading" style="color: #00365E;">Let’s create an account for you!</h1>
                    <p class="sub-heading" style="color: #00365E;">
                        Please add your details and select the type of account to proceed
                    </p>
                    <form id="registration-form">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label class="sub-heading">I want to register as a: *</label>
                                <div class="custome-input-field-icons">
                                    <img src="/user/images/companyicons.png" style="width: 24px; height: 24px;"/>
                                    <select id="accountType" name="accountType" class="w-100 border-0" style="outline: none;">
                                        <option value="" disabled selected>Select account type</option>
                                        <option value="Company">Company</option>
                                        <option value="Yachtowner">Yacht owner</option>
                                        <option value="CaptainEngineer">Captain/Chief Engineer</option>
                                        <option value="Professional">Professional</option>
                                        <option value="Surveyor">Surveyor</option>
                                    </select>
                                </div>
                                <div class="error-message" data-error="accountType"></div>
                            </div>
                            <div class="form-group col-12">
                                <label for="sub-heading mt-1" style="color: #00365E; line-height: 36px; font-size: 18px;">Person details</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text"  class="form-control"  id="firstName" name="firstName" placeholder="First Name">
                                <div class="error-message" data-error="firstName"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text"  class="form-control"  id="lastName" name="lastName" placeholder="Last Name">
                                <div class="error-message" data-error="lastName"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email"  class="form-control"  id="email" name="email" placeholder="Email">
                                <div class="error-message" data-error="email"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text"  class="form-control"  id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                                <div class="error-message" data-error="phoneNumber"></div>
                            </div>
                        </div>
                 
                        <div class="row mt-5 d-flex align-items-center">
                            <div class="col-6 d-flex">
                                <button class="border-0 d-flex align-items-center bg-white px-4 py-1" style="outline: none; font-family: Poppins; font-size: 14px; font-weight: 500; line-height: 21px; letter-spacing: 1px; text-align: left;">
                                    <a href="./account/login.html" style="color: #00365E;">
                                        <img src="/user/images/backarrow.png">
                                        <span>Back</span>
                                    </a>
                                </button>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <button type="submit" class="border-0 d-flex align-items-center text-white px-4 py-1" style="background-color: #5E8BF7; font-family: Poppins; font-size: 14px; font-weight: 500; line-height: 21px; letter-spacing: 1px; text-align: left; color: white; outline: none;">
                                    <span>Next</span>
                                    <img src="/user/images/arrowicons.png">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    @include('user.layout.script')
    <script>
        $(document).ready(function() {

        // Retrieve and parse the account selection data from localStorage
        var dataaccountSelection = JSON.parse(localStorage.getItem('accountSelection')) || {};

        // Define the fields and their corresponding default values
        var fields = {
            accountType: '',
            firstName: '',
            lastName: '',
            email: '',
            phoneNumber: ''
        };

        // Loop through each field and set the value, using default if necessary
        $.each(fields, function(key, defaultValue) {
            var value = dataaccountSelection[key] !== undefined ? dataaccountSelection[key] : defaultValue;
            $('#' + key).val(value);
        });



            $('#registration-form').on('submit', function(e) {
                e.preventDefault();
                var isValid = true;

                // Clear previous errors
                $('.error-message').text('');
                $('input, select').removeClass('is-invalid');

                // Validate account type
                if ($('#accountType').val() === null) {
                    $('[data-error="accountType"]').text('Please select an account type');
                    $('#accountType').addClass('is-invalid');
                    isValid = false;
                }

                // Validate first name
                if ($('#firstName').val().trim().length < 2) {
                    $('[data-error="firstName"]').text('First name must be at least 2 characters');
                    $('#firstName').addClass('is-invalid');
                    isValid = false;
                }

                // Validate last name
                if ($('#lastName').val().trim().length < 2) {
                    $('[data-error="lastName"]').text('Last name must be at least 2 characters');
                    $('#lastName').addClass('is-invalid');
                    isValid = false;
                }

                // Validate email
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                if (!emailPattern.test($('#email').val().trim())) {
                    $('[data-error="email"]').text('Please enter a valid email address');
                    $('#email').addClass('is-invalid');
                    isValid = false;
                }

                // Validate phone number
                var phonePattern = /^[0-9]{10,15}$/;
                if (!phonePattern.test($('#phoneNumber').val().trim())) {
                    $('[data-error="phoneNumber"]').text('Please enter a valid phone number');
                    $('#phoneNumber').addClass('is-invalid');
                    isValid = false;
                }

                 if (isValid) {
                    var accountSelection = {
                        accountType: $('#accountType').val(),
                        firstName:  $('#firstName').val(),
                        lastName:  $('#lastName').val(),
                        email:  $('#email').val(),
                        phoneNumber:  $('#phoneNumber').val(),
                    }
                    localStorage.setItem('accountSelection', JSON.stringify(accountSelection));
                    if($('#accountType').val()=="Company"){
                        window.location.href = "/register/company";
                    }else if($('#accountType').val()=="Yachtowner"){
                        window.location.href = "/register/yachtowner";
                    }else if($('#accountType').val()=="CaptainEngineer"){
                        window.location.href = "/register/chief/Engineer";
                    }else if($('#accountType').val()=="Professional"){
                        window.location.href = "/register/professional";
                    }else if($('#accountType').val()=="Surveyor"){
                        window.location.href = "/register/surveyor/";
                    } 
                 }                       
            });
        });
    </script>
</body>
</html>
