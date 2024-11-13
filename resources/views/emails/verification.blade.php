<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
<body>
    <h2>Welcome to Our Application, {{ $user['name'] }}</h2>
    <p>Your Account verification code is {{$user['verify_code']}}</p>
</body>
</html>
