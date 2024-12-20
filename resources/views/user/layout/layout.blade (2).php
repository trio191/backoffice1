<!DOCTYPE html>
<html>
<head>
    @include('user.layout.link')
</head>
<body style="overflow-x:hidden" >
    @include('user.layout.navbar')
    @yield('content')
    @include('user.layout.footer')
    @include('user.layout.script')
</body>
</html>
