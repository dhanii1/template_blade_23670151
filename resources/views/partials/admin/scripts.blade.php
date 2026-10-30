<script src="{{ asset('admin/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/scroll-top.init.js') }}"></script>

@stack('scripts')

@unless (View::hasSection('auth'))
<script src="{{ asset('admin/assets/js/app.js') }}"></script>
@endunless
