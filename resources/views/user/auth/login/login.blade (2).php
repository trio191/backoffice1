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
        <div class="row ">
            <div class="col-xl-4 left-side">
                <div class="left-content">
                    <div class="overlay"></div>
                    <div class="py-4">
                        <img src="/user/images/logo.png" class="position-relative z-index-1" alt="logo"width="100">
                    </div>
                    <p class="text-white position-relative create-account-text-upper z-index-1 text-uppercase">One-stopmanagement Platform</p>
                    <h4 class="text-center create-account-text-heading text-white position-relative z-index-1">Keepingyour yacht seaworthy,year-round</h4>
                </div>
            </div>
            <div class="col-12  col-xl-8 right-side ">
                <div class="form-layout  col-12 col-xl-7   pt-4 ">
                    <h2 class="heading">Login</h2>
                    <p class="sub-heading">Scale your team today!</p>
                    <div class="col-12 px-0  mt-4">
                        <form id="login-form">
                            <div class=" ">
                                <input id="email" required class="custome-input-field" type="email"placeholder="Email">
                                <div class="error-message" data-error="invalid"></div>
                            </div>
                            <div class="custome-input-field mt-3 "
                                style="display: flex; align-items: center; border: 1px solid #C6D2E7;">
                                <input class="w-100" required type="password" id="password"style="display: flex; outline: none; border: 0px;" placeholder="Password"aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <!-- <div class="">
                                  <span class="input-group-text bg-white border-0" id="basic-addon2">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 18px; height: 18px; fill: black;" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                      </svg>
                                  </span>
                                </div> -->
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <div>
                                    <a href="/forgot-password" class="sub-heading mt-3">Forgot password?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn-loader login-btn mt-4"><span class="w-50 text-right  ml-5">SIGN IN</span>
                                <div class=" w-50 d-flex justify-content-end pr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="height: 20px; width: 20px;"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg>
                                </div>
                            </button>
                        </form>
                        <div
                            class="d-flex align-content-center align-items-center mt-3 py-3"style="font-size: 16px; font-weight: 400; color: #C6D2E7;">
                            <hr style="background-color: #C6D2E7; padding: 0px;width: 100%;">
                            </hr>
                            <span class="px-4"> or</span>
                            <hr style="background-color: #C6D2E7; padding: 0px;width: 100%;">
                            </hr>
                        </div>
                        <button class="btn btn-light btn-block" style="border: 1px solid #C6D2E7; height: 48px;"><span><img src="/user/images/google.png" alt="google" width="20"></span>SIGN IN WITH GOOGLE</button>
                    </div>
                    <div class=" mt-4  ">
                        <p class="footer-text" style="color: #C6D2E7; text-align: center;">DON'T HAVE AN ACCOUNT? <a href="/register" class="" style="color: #5E8BF7; text-decoration: none;">SIGNUP</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#login-form').on('submit', function(e) {
                e.preventDefault();
                $('.btn-loader').addClass('disabled').html('Loading...');
                var email = $('#email').val();
                var password = $('#password').val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData();
                formData.append('email', email);
                formData.append('password', password);
                formData.append('_token', csrfToken);
                $.ajax({
                    type: 'POST',
                    url: '/login',
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        
                        var dt=response.data;
                        if(dt.accountType=="Company"){
                            window.location.href = "/company-dashboard";
                        }else if(dt.accountType=="Yachtowner"){
                            window.location.href = "/owner/dashboard";
                        }else if(dt.accountType=="CaptainEngineer"){
                            window.location.href = "/captain-dashboard";
                        }else if(dt.accountType=="Professional"){
                            window.location.href = "/professional-dashboard";
                        }else if(dt.accountType=="Surveyor"){
                            window.location.href = "/surveyor-dashboard";
                        } 
                        else if(dt.accountType=="admin"){
                            window.location.href = "admin-dashboard";
                        } 


                        
                    },
                    error: function(response) {
                        $('[data-error="invalid"]').text('Invalid Credential are provided!');
                        $('.btn-loader').removeClass('disabled').html('SIGN IN');
                        console.log("fail");
                    }
                });

            });
        });
    </script>
</body>
</html>
