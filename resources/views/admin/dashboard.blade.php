<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title> <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href=" {{ asset('admin/vendor/fonts/boxicons.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet"
        href="{{ asset('admin/vendor/css/theme-default.css') }}  class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin/css/demo.css') }}" />


    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/apex-charts/apex-charts.css') }}" />

    <script src="{{ asset('admin/vendor/js/helpers.js') }}"></script>

    <script src="{{ asset('admin/js/config.js') }}"></script>
</head>

<body>
    
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admin.sidebar')
            <div class="layout-page">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('admin/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('admin/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('admin/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin/vendor/js/menu.js') }}"></script>
<script src="{{ asset('admin/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
<script src="{{ asset('admin/js/dashboards-analytics.js') }}"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

</html>
