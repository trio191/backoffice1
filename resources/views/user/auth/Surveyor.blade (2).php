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
<body>
    <div class="container-fluid " style="font-family: Poppins;">
        <div class="row ">
            <div class="col-xl-4 left-side">
                <div class="left-content">
                    <div class="overlay"></div>
                    <!-- logo -->
                    <div class="py-3">
                        <img src="/user/images/logo.png" class="position-relative z-index-1" alt="logo" width="100">
                    </div>
                    <!-- heading -->
                    <h2 class="text-white position-relative create-account-text z-index-1 text-uppercase">One-stop management Platform</h2>
                    <h1 class="text-center text-white create-account-text position-relative z-index-1">Keeping your yacht seaworthy, year-round</h1>
                    <!-- sub heading -->
                </div>
            </div>
            <div class="col-xl-8  right-side-addlink justify-content-center">
                <div class="">
                    <div class="px-5 py-3">
                        <div class="d-flex py-4">
                            <img src="/user/images/cheif.png"/>
                        </div>
                        <h3 class="heading-text" style="font-family: Cormorant Garamond;color: #00365E;">Create account as <span style="color: #5E8BF7;">Surveyor</span></h3>
                        <p class="" style="font-family: Poppins; color: #00365E;">Please add your details and select the type of account to proceed</p>
                        <form id="registration-form">
                            <div class="form-row">
                                <div class="form-group col-12 py-1">
                                    <label for="inputState" style="color: #00365E;">Details</label>
                                </div>
                                <div class="form-group col-md-6">
                                    <select id="country" class="form-control" name="country">
                                        <option value="" selected disabled>Country</option>
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
                                <div class="form-group col-6">
                                    <input type="number" class="form-control" id="postalCode" name="postalCode" placeholder="Postal Code">
                                    <div class="error-message" data-error="postalCode"></div>
                                </div>
                                <div class="form-group col-6">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                                    <div class="error-message" data-error="address"></div>
                                </div>
                                <div class="form-group col-6">
                                    <input type="text" class="form-control" id="websiteurl" name="websiteurl" placeholder="Website URl">
                                    <div class="error-message" data-error="websiteurl"></div>
                                </div>

                                <div class="form-group col-md-12">
                                <textarea id="surveys" name="surveys"  class="form-control" placeholder="What specialized surveys do you do? Please describe" ></textarea>
                                <div class="error-message" data-error="surveys"></div>
                            </div>

                                <div class="form-group col-12 pt-4">
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
                                    <button  type="submit" class="border-0 d-flex align-items-center text-white px-4 py-1" style="background-color: #5E8BF7;">
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
    </div>
    <script>
        $(document).ready(function() {
          // Retrieve and parse the surveyor data from localStorage
            var surveyors = JSON.parse(localStorage.getItem('surveyor')) || {};

            // Define an object mapping each field to its corresponding ID
            var fields = {
                country: '#country',
                city: '#city',
                postalCode: '#postalCode',
                address: '#address',
                websiteurl: '#websiteurl',
                surveys: '#surveys',
                facebookUrl: '#facebookUrl',
                linkedinUrl: '#linkedinUrl'
            };

            // Loop through each field and set the value
            Object.keys(fields).forEach(function(key) {
                $(fields[key]).val(surveyors[key] || '');
            });


            $('#registration-form').on('submit', function(e) {
                e.preventDefault();
                var isValid = true;

                // Clear previous errors
                $('.error-message').text('');
                $('input, select').removeClass('is-invalid');

                // Validate country
                if ($('#country').val() === null) {
                    $('[data-error="country"]').text('Please select a country');
                    $('#country').addClass('is-invalid');
                    isValid = false;
                }

        

                // Validate city
                if ($('#city').val().trim().length < 2) {
                    $('[data-error="city"]').text('City must be at least 2 characters');
                    $('#city').addClass('is-invalid');
                    isValid = false;
                }

                // Validate postal code
                if ($('#postalCode').val().trim().length < 5) {
                    $('[data-error="postalCode"]').text('Postal code must be at least 5 digits');
                    $('#postalCode').addClass('is-invalid');
                    isValid = false;
                }
                
                // Validate address
                if ($('#address').val().trim().length < 5) {
                    $('[data-error="address"]').text('Address must be at least 5 characters');
                    $('#address').addClass('is-invalid');
                    isValid = false;
                }

                var urlPattern = /^(https?:\/\/)?([\w\d-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?$/;
                if ($('#websiteurl').val().trim() == '' && !urlPattern.test($('#websiteurl').val().trim())) {
                    $('[data-error="websiteurl"]').text('Please enter a valid URL');
                    $('#websiteurl').addClass('is-invalid');
                    isValid = false;
                }
                
                // Validate Facebook URL (optional field)
                var urlPattern = /^(https?:\/\/)?([\w\d-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?$/;
                if ($('#facebookUrl').val().trim() !== '' && !urlPattern.test($('#facebookUrl').val().trim())) {
                    $('[data-error="facebookUrl"]').text('Please enter a valid Facebook URL');
                    $('#facebookUrl').addClass('is-invalid');
                    isValid = false;
                }

                // Validate LinkedIn URL (optional field)
                if ($('#linkedinUrl').val().trim() !== '' && !urlPattern.test($('#linkedinUrl').val().trim())) {
                    $('[data-error="linkedinUrl"]').text('Please enter a valid LinkedIn URL');
                    $('#linkedinUrl').addClass('is-invalid');
                    isValid = false;
                }

                 // Validate LinkedIn URL (optional field)
                 if ($('#surveys').val().trim().length < 5) {
                    $('[data-error="surveys"]').text('Please enter a surveys do you do');
                    $('#surveys').addClass('is-invalid');
                    isValid = false;
                }

                 // If the form is valid, submit it
                 if (isValid) {
                    window.location.href = "/register/password";
                    var surveyor = {
                        country:  $('#country').val(),
                        city:  $('#city').val(),
                        postalCode:  $('#postalCode').val(),
                        address:  $('#address').val(),
                        websiteurl:  $('#websiteurl').val(),
                        surveys:  $('#surveys').val(),
                        facebookUrl:  $('#facebookUrl').val(),
                        linkedinUrl:  $('#linkedinUrl').val(),
                    }
                    localStorage.setItem('surveyor', JSON.stringify(surveyor));
                 }
            });
        });
    </script>
</body>
</html>
