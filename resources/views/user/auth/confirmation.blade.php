<!DOCTYPE html>
<html>
<head>
    @include('user.layout.link')
    <link rel="stylesheet" href="{{ asset('user/css/account/login.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/account/account.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <div class="container-fluid">
        <div class="row" style="font-family: Poppins;">
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
            <div class="col-12 col-xl-8 right-side">
                <div class="px-5 col-12 py-3">
                    <div class="d-flex">
                        <img src="/user/images/account.png" class="m-auto right-image" style="width: 75%; height: 180px;">
                    </div>
                    <h3 class="heading text-uppercase text-center mt-3" style="color: #00365E; font-family: Cormorant SC; font-size: 36px; font-weight: 400; line-height: 50px; letter-spacing: 1px; text-align: center;">You are almost ready!</h3>
                    <p class="text-center" style="font-family: Poppins; font-size: 16px; font-weight: 400; line-height: 10px; letter-spacing: 0.5px; text-align: center; color: #323957;">
                        Please enter the code we emailed you.
                    </p>
                    <form id="verificationForm">
                        <div class="form-row">
                            <section class="m-auto">
                                <div class="col-12 m-auto py-4">
                                    <div class="m-auto d-flex text-center">
                                        <input type="text" id="digit1" maxlength="1" placeholder="-" class="border-bottom text-center opt-input border-top-0 border-right-0 border-left-0" />
                                        <input type="text" id="digit2" maxlength="1" placeholder="-" class="border-bottom ml-2 text-center opt-input border-top-0 border-right-0 border-left-0" />
                                        <input type="text" id="digit3" maxlength="1" placeholder="-" class="border-bottom ml-2 text-center opt-input border-top-0 border-right-0 border-left-0" />
                                        <input type="text" id="digit4" maxlength="1" placeholder="-" class="border-bottom ml-2 text-center opt-input border-top-0 border-right-0 border-left-0" />
                                    </div>
                                    <div style="color:green" class="error-message text-center mt-2" id="success-message"></div>
                                    <div class="error-message text-center mt-2" id="error-message"></div>
                                </div>
                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                    <button type="submit" class="m-auto confermation-btn">Verify Account</button>
                                    <p class="text-center mt-4" style="font-family: Poppins; font-size: 14px; font-weight: 500; line-height: 21px; letter-spacing: 1px; color: #889DC6;">
                                        Having problems? <span class="text-uppercase" style="color:#5E8BF7; font-family: Poppins;">resend code</span>
                                    </p>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#verificationForm').submit(function(event) {
                event.preventDefault();
                var isValid = true;
                var errorMessage = '';

                // Get values from each input and concatenate
                var code = '';
                $('.opt-input').each(function() {
                    var value = $(this).val().trim();
                    if (value === '' || !$.isNumeric(value)) {
                        isValid = false;
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                        code += value;
                    }
                });
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                if (!isValid) {
                    errorMessage = 'Please enter a valid 4-digit code.';
                    $('#error-message').text(errorMessage);
                } else if (code.length !== 4) {
                    errorMessage = 'The code must be 4 digits long.';
                    $('#error-message').text(errorMessage);
                } else {
                    $('#error-message').text('');
                    var dt=JSON.parse(localStorage.getItem('accountSelection'))
                    var formData = new FormData();
                    formData.append('code', code);
                    formData.append('email', dt.email);
                    formData.append('_token', csrfToken);

                    $.ajax({
                        url: '/verify-code',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            localStorage.removeItem('accountSelection')
                            localStorage.removeItem('company')       
                            localStorage.removeItem('professional')   
                            localStorage.removeItem('surveyor')   
                            localStorage.removeItem('yachtowner')    
                            localStorage.removeItem('addYachatOwner')    
                            localStorage.removeItem('chiefEngineer')
                            localStorage.removeItem('addYachatCaptain')
                            localStorage.removeItem('password')
                            $('#success-message').text('Account created and verified successfully');
                            setTimeout(function() {
                                window.location.href = '/login'; 
                            }, 3000);
                        },
                        error: function(error) {
                            $('#error-message').text('Invalid code is provided!');
                        }
                    });
                }
            });

            $('.opt-input').on('input', function() {
                $(this).removeClass('is-invalid');
                $('#error-message').text('');
            });
        });
    </script>
</body>
</html>
