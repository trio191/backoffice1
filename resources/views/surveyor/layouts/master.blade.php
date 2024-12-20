 

<!DOCTYPE html>
<html>
<head>
    @include('surveyor.layouts.link')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <link href="{{ asset('vendor/mckenziearts/laravel-notify/css/notify.css') }}" rel="stylesheet">
    <script src="{{ asset('vendor/mckenziearts/laravel-notify/js/notify.js') }}"></script>
</head>

<body>
    @include('notify::messages')
    @notifyJs
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('surveyor.layouts.sidebar')
            <div class="layout-page">
                @include('surveyor.layouts.header')
                @yield('content')
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
    </div>
    @include('surveyor.layouts.script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script type="text/javascript">
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "timeOut": "5000", // 5 seconds
                "extendedTimeOut": "2000",
                "positionClass": "toast-top-right" // Change position if needed
            };
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "timeOut": "5000",
                "extendedTimeOut": "2000",
                "positionClass": "toast-top-right"
            };
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "timeOut": "5000",
                "extendedTimeOut": "2000",
                "positionClass": "toast-top-right"
            };
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "timeOut": "5000",
                "extendedTimeOut": "2000",
                "positionClass": "toast-top-right"
            };
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
</body>

</html>
