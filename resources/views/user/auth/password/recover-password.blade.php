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
                        <img src="/user/images/logo.png" class="position-relative z-index-1" alt="logo" width="100">

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
                    <span class="heading" style="text-align: center;">Recover your password?</span>

                    <p class="sub-heading">Enter a new password to recover your account </p>
                    <div class="bg-white   mt-4">
                        <form id="forgotpassword-submit">
                            <div class="form-group">
                                <input id="password" name="password" class="custome-input-field" type="password"
                                    style="border-radius: 1px solid #5E8BF7;" placeholder="password">
                                <div class="error-message" data-error="password"></div>
                            </div>
                            <div class="form-group">
                                <input id="confirmpassword" name="confirmpassword" class="custome-input-field" type="password"
                                    style="border-radius: 1px solid #5E8BF7;" placeholder="Confirm password">
                                <div class="error-message" data-error="confirmpassword"></div>
                            </div>
                            
                            <button type="submit" class="login-btn mt-4"><span style="width: 55%;"
                                    class="btn-loader text-right text-uppercase ml-5">Submit</span>
                                <div class="d-flex justify-content-end pr-3 " style="width: 45%;">
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
                var password = $('#password').val();
                var confirmpassword = $('#confirmpassword').val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData();
                formData.append('password', password);
                formData.append('confirmpassword', confirmpassword);
                formData.append('_token', csrfToken);

                var recoverPasswordToken = "{{ $token }}";
                $.ajax({
                    type: 'POST',
                    url: '/recover-password/'+ recoverPasswordToken,
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function(response) {
                        $('[data-error="success"]').text('Password recovered successfully!');
                        $('#password').val('');
                        $('#confirmpassword').val('');
                        $('.btn-loader').removeClass('disabled').html('submit');
                    },
                    error: function(response) {
                        var errors = response.responseJSON.errors;
                        $('[data-error="password"]').text(errors.password[0]);
                        $('[data-error="confirmpassword"]').text(errors.confirmpassword[0]);

                            
                    }
                });

            });
        });
    </script>
</body>

</html>
