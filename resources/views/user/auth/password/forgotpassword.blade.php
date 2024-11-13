<!DOCTYPE html>
<html>

<head>
    @include('user.layout.link')
    <link rel="stylesheet" href="{{ asset('user/css/account/login.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/account/account.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <div class="container-fluid" style="font-family: Poppins;">
        <div class="row">
            <div class="col-xl-4 left-side">

                <div class="left-content">
                    <div class="overlay"></div>

                    <!-- overlay -->
                    <!-- logo -->
                    <div class="py-4">
                        <img src="/images/logo.png" class="position-relative z-index-1" alt="logo" width="100">

                    </div> <!-- heading -->
                    <p class="text-white position-relative create-account-text-upper z-index-1 text-uppercase">One-stop
                        management Platform</p>

                    <h4 class="text-center create-account-text-heading text-white position-relative z-index-1">Keeping
                        your yacht seaworthy,
                        year-round</h4>
                    <!-- sub heading -->
                </div>
            </div>
            <div class="col-11 col-xl-8  right-side justify-content-center "
                style="display: flex;align-items: center;justify-content: center;">
                <div class="form-layout  col-12 col-lg-7  ">
                    <span class="heading" style="text-align: center;">Forgot your password?</span>

                    <p class="sub-heading">Enter the email address you used when you joined and we’ll send
                        you instructions to reset your password.</p>
                    <div class="bg-white   mt-4">
                        <form id="forgotpassword-submit">
                            <div class="form-group">
                                <input id="email" class="custome-input-field" type="email"
                                    style="border-radius: 1px solid #5E8BF7;" placeholder="Email">
                                <div class="error-message" data-error="invalid"></div>
                            </div>
                            <button type="submit" class="login-btn mt-4"><span style="width: 55%;"
                                    class="btn-loader text-right text-uppercase ml-5">Send reset link</span>
                                <div class="   d-flex justify-content-end pr-3 " style="width: 45%;">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="height: 20px; width: 20px;"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg>
                                </div>
                            </button>
                            <br>
                            <div style="color:green" class="success-message" data-error="success"></div>

                        </form>

                    </div>
                    <div class=" mt-5 footer-text  ">
                        <span class="" style="color: #C6D2E7; text-align: center;">DON'T HAVE AN ACCOUNT? <a
                                href="/register" class="text-blue-500">SIGN UP</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#forgotpassword-submit').on('submit', function(e) {
                e.preventDefault();
                $('.btn-loader').addClass('disabled').html('Loading...');
                $('[data-error="success"]').text('');
                var email = $('#email').val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData();
                formData.append('email', email);
                formData.append('_token', csrfToken);
                $.ajax({
                    type: 'POST',
                    url: '/forgot-password',
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function(response) {
                        $('[data-error="success"]').text(
                            'Reset link send successfully to your mail!');
                        $('.btn-loader').removeClass('disabled').html('Send reset link');
                        window.location.href = "/reset-link/";
                    },
                    error: function(response) {
                        var errors = response.responseJSON.errors;
                        $('[data-error="invalid"]').text(errors.email[0]);
                        $('.btn-loader').removeClass('disabled').html('Send reset link');
                        console.log("fail");
                    }
                });

            });
        });
    </script>
</body>

</html>
