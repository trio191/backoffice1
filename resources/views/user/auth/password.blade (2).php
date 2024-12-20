<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Validation Example</title>
    <style>
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        .is-invalid {
            border: 1px solid red !important;
        }

        .rules {
            color: red;
        }

        .text-success {
            color: green;
        }
    </style>
    <!-- Include your CSS files -->
    @include('user.layout.link')
    <link rel="stylesheet" href="{{ asset('user/css/account/login.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/account/account.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 left-side">
                <div class="left-content">
                    <div class="overlay"></div>
                    <div class="py-3">
                        <img src="/user/images/logo.png" class="position-relative z-index-1" alt="logo"
                            width="100">
                    </div>
                    <p class="text-white position-relative create-account-text-upper z-index-1 text-uppercase">One-stop
                        management Platform</p>
                    <h4 class="text-center create-account-text-heading text-white position-relative z-index-1">Keeping
                        your yacht seaworthy, year-round</h4>
                </div>
            </div>
            <div class="col-12 col-xl-8 px-0 right-side">
                <div class="px-5 col-12 py-3">
                    <div class="d-flex py-4">
                        <img src="/user/images/fourth.png" />
                    </div>
                    <h3 class="heading">Set your account password</h3>
                    <p class="sub-heading">
                        Please add your details and select the type of account to proceed
                    </p>
                    <div class="col-12 px-0">
                        <label for="inputState"
                            style="font-family: Poppins; font-size: 18px; font-weight: 400; line-height: 36px; letter-spacing: 0.5px; text-align: left; color: #00365E;">Password</label>
                    </div>
                    <form>
                        <div class="form-row  row">
                            <div class="form-group col-6">
                                <input type="password" class="form-control" id="inputPassword" name="password"
                                    placeholder="Password *" required>
                                <div class="error-message" data-error="inputPassword"></div>
                            </div>
                            <div class="form-group col-6">
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                                    placeholder="Confirm Password *" required>
                                <div class="error-message" data-error="confirmPassword"></div>

                            </div>
                        </div>
                    </form>
                    <div id="passwordRules" class="col-12 innerFormBg py-2 px-3">
                        <p class="py-2"
                            style="font-family: Poppins; font-size: 16px; font-weight: 400; line-height: 30px; letter-spacing: 0.5px; color: #00365E;">
                            The Password must include:
                        </p>
                        <ul>
                            <li id="uppercaseRule" class="rules text-danger">Uppercase letters</li>
                            <li id="lowercaseRule" class="rules text-danger">Lowercase letters</li>
                            <li id="specialCharsRule" class="rules text-danger">Non-alphanumeric characters</li>
                            <li id="numericRule" class="rules text-danger">Numeric characters</li>
                            <li id="lengthRule" class="rules text-danger">Minimum 8 characters</li>
                        </ul>
                    </div>
                    <div class="row mt-5 d-flex align-items-center">
                        <div class="col-6 d-flex">
                            <a href="/register">
                                <button type="button" class="border-0 d-flex align-items-center bg-white px-4 py-1">
                                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                                    </svg>
                                    <span>Back</span>
                                </button>
                            </a>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <button type="submit" id="submitBtn"
                                class="border-0 d-flex align-items-center text-white px-4 py-1"
                                style="background-color: #5E8BF7;">
                                <span id="btn-loading">Complete Account</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#inputPassword, #confirmPassword').on('input', function() {
                var password = $('#inputPassword').val();
                var confirmPassword = $('#confirmPassword').val();

                // Reset all rules to default state
                $('#uppercaseRule, #lowercaseRule, #specialCharsRule, #numericRule, #lengthRule')
                    .removeClass('text-success').addClass('text-danger');

                // Check each rule and update UI accordingly
                if (/[A-Z]/.test(password)) {
                    $('#uppercaseRule').removeClass('text-danger').addClass('text-success');
                }
                if (/[a-z]/.test(password)) {
                    $('#lowercaseRule').removeClass('text-danger').addClass('text-success');
                }
                if (/[^\w\d]/.test(password)) {
                    $('#specialCharsRule').removeClass('text-danger').addClass('text-success');
                }
                if (/\d/.test(password)) {
                    $('#numericRule').removeClass('text-danger').addClass('text-success');
                }
                if (password.length >= 8) {
                    $('#lengthRule').removeClass('text-danger').addClass('text-success');
                }

                // Check if passwords match
                if (password === confirmPassword && confirmPassword !== '') {
                    $('#confirmPassword').removeClass('is-invalid');
                } else {
                    $('#confirmPassword').addClass('is-invalid');
                }

                // Enable submit button if all rules are satisfied and passwords match
                var allRulesSatisfied = $('#uppercaseRule').hasClass('text-success') &&
                    $('#lowercaseRule').hasClass('text-success') &&
                    $('#specialCharsRule').hasClass('text-success') &&
                    $('#numericRule').hasClass('text-success') &&
                    $('#lengthRule').hasClass('text-success') &&
                    password === confirmPassword && confirmPassword !== '';
            });

            var passwords = JSON.parse(localStorage.getItem('password'));
            // $('#inputPassword').val(passwords.password)
            // $('#confirmPassword').val(passwords.password)

            $('#submitBtn').on('click', function(e) {
                var password = $('#inputPassword').val();
                var confirmPassword = $('#confirmPassword').val();
                if (password === confirmPassword && confirmPassword !== '') {
                    $('#confirmPassword').removeClass('is-invalid');
                    var password = {
                        password: $('#inputPassword').val(),
                    }
                    localStorage.setItem('password', JSON.stringify(password));
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    var formData = new FormData();
                    formData.append('accountSelection', localStorage.getItem('accountSelection'));
                    formData.append('company', localStorage.getItem('company'));
                    formData.append('professional', localStorage.getItem('professional'));
                    formData.append('surveyor', localStorage.getItem('surveyor'));
                    formData.append('yachtowner', localStorage.getItem('yachtowner'));
                    formData.append('addYachatOwner', localStorage.getItem('addYachatOwner'));
                    formData.append('chiefEngineer', localStorage.getItem('chiefEngineer'));
                    formData.append('addYachatCaptain', localStorage.getItem('addYachatCaptain'));
                    formData.append('password', localStorage.getItem('password'));
                    formData.append('_token', csrfToken);
                    $('#btn-loading').addClass('disabled').html('loading...');
                    $.ajax({
    type: 'POST',
    url: '/register',
    processData: false,
    contentType: false,
    data: formData,
    success: function(response) {
        if (response.success == true) {
            toastr.success(response.message, 'Success');
            $('#btn-loading').removeClass('disabled').html('Register');
            setTimeout(function() {
                window.location.href = "/register/confirmation";
            }, 1500);
        }
    },
    error: function(xhr) {
        $('#btn-loading').removeClass('disabled').html('Register');

        // Parse and show errors from the response
        let errors = xhr.responseJSON?.errors || {
            error: 'Something went wrong'
        };

        if (typeof errors === 'string') {
            toastr.error(errors, 'Error');
        } else {
            for (const [key, messages] of Object.entries(errors)) {
                if (Array.isArray(messages)) {
                    messages.forEach(message => toastr.error(message, key.charAt(0).toUpperCase() + key.slice(1)));
                } else {
                    toastr.error(messages, key.charAt(0).toUpperCase() + key.slice(1));
                }
            }
        }
    }
});


                } else {
                    $('#confirmPassword').addClass('is-invalid');
                    $('[data-error="confirmPassword"]').text('Password donot match!');
                }

            })
        });
    </script>
</body>

</html>
