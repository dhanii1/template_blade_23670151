<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.landing.head')
</head>
<body>
    @include('partials.landing.header')

    @yield('content')

    @include('partials.landing.footer')
    @include('partials.landing.scripts')
</body>
</html>
