<!DOCTYPE html>
<html>
<head>
    <title>Password Recovery</title>
</head>
<body>
    <h1>Click on the link below to recover your password!</h1>
    <a href="{{ env('APP_URL') }}/recover-password/{{ $data['number'] }}">
    {{ env('APP_URL') }}/recover-password/{{ $data['number'] }}
    </a>
</body>
</html>
