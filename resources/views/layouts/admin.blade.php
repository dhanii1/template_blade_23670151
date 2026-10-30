<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.admin.head')
</head>
<body>
@hasSection('auth')
    @yield('auth')
@else
    <div id="layout-wrapper">
        @include('partials.admin.header')
        @include('partials.admin.sidebar')

        <main class="app-wrapper">
            @yield('content')
        </main>

        @include('partials.admin.footer')
    </div>
    @stack('modals')
@endif

@include('partials.admin.scripts')
</body>
</html>
