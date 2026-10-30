<!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom border-2 border-white">
                <a href="{{ route('landing.home') }}" class="navbar-brand">
                    <h1>iSTUDIO</h1>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('landing.home') }}" class="nav-item nav-link {{ request()->routeIs('landing.home') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('landing.about') }}" class="nav-item nav-link {{ request()->routeIs('landing.about') ? 'active' : '' }}">About</a>
                        <a href="{{ route('landing.service') }}" class="nav-item nav-link {{ request()->routeIs('landing.service') ? 'active' : '' }}">Services</a>
                        <a href="{{ route('landing.project') }}" class="nav-item nav-link {{ request()->routeIs('landing.project') ? 'active' : '' }}">Projects</a>
                        <div class="nav-item dropdown">
                            <a href="#!" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="{{ route('landing.feature') }}" class="dropdown-item">Features</a>
                                <a href="#" class="dropdown-item">Our Team</a>
                                <a href="#" class="dropdown-item">Testimonial</a>
                                <a href="#" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="{{ route('landing.contact') }}" class="nav-item nav-link {{ request()->routeIs('landing.contact') ? 'active' : '' }}">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
