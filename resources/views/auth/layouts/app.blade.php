<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/assets/css/bootstrap.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/assets/images/background/cover.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/app.css') }}">
</head>

<body>
    <div id="auth">

        @yield('content')
    </div>
    <script src="{{ asset('assets/assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/app.js') }}"></script>

    <script src="{{ asset('assets/assets/js/main.js') }}"></script>
</body>

</html>
