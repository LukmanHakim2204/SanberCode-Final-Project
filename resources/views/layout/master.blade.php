<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/chartjs/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/assets/images/favicon.svg') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- App Container -->
    <div id="app" class="flex-grow-1 d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                @include('layout.partials.sidebar')
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        <!-- Main Content -->
        <div id="main" class="flex-grow-1 d-flex flex-column">
            <!-- Navbar -->
            @include('layout.partials.navbar')

            <!-- Page Content -->
            <div class="content flex-grow-1">
                @yield('content')
            </div>

            <!-- Footer -->
            @include('layout.partials.footer')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/assets/js/vendors.js') }}"></script>
    <script src="{{ asset('assets/assets/js/main.js') }}"></script>
</body>

</html>
