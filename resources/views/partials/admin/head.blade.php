<meta charset="utf-8" />
    <title>@yield('title', 'Urbix') | Urbix Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="Admin & Dashboards Template" name="description" />
    <meta content="Pixeleyez" name="author" />
    
    <!-- layout setup -->
    <script type="module" src="{{ asset('admin/assets/js/layout-setup.js') }}"></script>
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}">    <!-- Simplebar Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/simplebar/simplebar.min.css') }}">
    <!-- Swiper Css -->
    <link href="{{ asset('admin/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Nouislider Css -->
    <link href="{{ asset('admin/assets/libs/nouislider/nouislider.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!--icons css-->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">
    @stack('styles')
