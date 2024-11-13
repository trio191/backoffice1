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

                    </div>
                    <!-- heading -->
                    <h2 class="text-white position-relative create-account-text z-index-1">One-stop management Platform</h2>

                    <h1 class="text-center text-white create-account-text position-relative z-index-1">Keeping your yacht seaworthy,
                        year-round</h1>
                    <!-- sub heading -->
                </div>
            </div>
            <div class="col-xl-8 right-side justify-content-center" style="display: flex; align-items: center; justify-content: center;">
                <div class="form-layout forgetpassword text-center">
                    <!-- logo -->
                    <img src="/user/images/resetlink.png" class="item-center text-center self-center" alt="logo"
                        width="100" style="width: 96px; height: 96px; padding: 12px, 12px, 12px, 12px;
">
                    <h2 class="text-center font-weight-bold " style="color: #00365E;">Reset link sent</h2>
                    <p class="text-center text-sm mt-2" style="color: #00365E;">Time to recover your password.
                        Check your email for further instructions.</p>

                    <div class="text-center mt-4 reset-signin-text">
                        <p class="text-sm">Did you remember it? <a href="/login" style="color: #5E8BF7;">Sign in</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
