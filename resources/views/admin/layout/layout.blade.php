<!DOCTYPE html>
<html>
<head>
    @include('admin.layout.link')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <link href="{{ asset('vendor/mckenziearts/laravel-notify/css/notify.css') }}" rel="stylesheet"> --}}
    {{-- <script src="{{ asset('vendor/mckenziearts/laravel-notify/js/notify.js') }}"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    
</head>
<body>
    @include('notify::messages')
    @notifyJs
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admin.layout.sidebar')
            <div class="layout-page">
                @include('admin.layout.header')
                @yield('content')
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
    </div>
    @include('admin.layout.script')
</body>
</html>
