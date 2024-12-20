<!-- resources/views/payment/failed.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Failed</title>
</head>
<body>
    <h1>Payment Failed</h1>

    <p>Unfortunately, your payment could not be processed. Please try again later or contact support.</p>

    @if(session('error'))
        <p><strong>Error:</strong> {{ session('error') }}</p>
    @endif

    @if(session('details'))
        <h3>Payment Details:</h3>
        <pre>{{ json_encode(session('details'), JSON_PRETTY_PRINT) }}</pre>
    @endif

    <p>If you have any questions, please feel free to reach out to us.</p>
    <a href="{{ route('home') }}">Return to Home</a>
</body>
</html>
