<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.svg') }}" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item submenu">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home - Main</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home.image') }}">Home - Image</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home.slider') }}">Home - Slider</a></li>
                                </ul>
                            </li>                                
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                            <li class="nav-item submenu">
                                <a class="nav-link" href="#">Pages</a>
                                <ul>                                        
                                    <li class="nav-item"><a class="nav-link" href="{{ route('services.show', 1) }}">Service Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('blog.show', 1) }}">Blog Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('projects.show', 1) }}">Project Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('team') }}">Team</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('team.show', 1) }}">Team Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('pricing') }}">Pricing Plan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('testimonials') }}">Testimonials</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('gallery.images') }}">Image Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('gallery.videos') }}">Video Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('faqs') }}">FAQs</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>                             
                        </ul>
                    </div>

                    <!-- Header Social Box Start -->
                    <div class="header-social-box d-inline-flex">
                        <!-- Header Social Links Start -->
                        <div class="header-social-links">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Header Social Links End -->

                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <!-- Toggle Button trigger modal Start -->
                            <button class="btn btn-popup" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <img src="{{ asset('images/header-btn-dot.svg') }}" alt="">
                            </button>
                            <!-- Toggle Button trigger modal End -->

                            <!-- Header Sidebar Start -->
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                
                                <div class="offcanvas-body">
                                    <!-- Header Contact Box Start -->
                                    <div class="header-contact-box">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-phone-accent.svg') }}" alt="">
                                        </div>
                                        <div class="header-contact-box-content">
                                            <h3>phone</h3>
                                            <p>{{ config('app.contact_phone', '+123 456 789') }}</p>
                                        </div>
                                    </div>
                                    <!-- Header Contact Box End -->

                                    <!-- Header Contact Box Start -->
                                    <div class="header-contact-box">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-mail-accent.svg') }}" alt="">
                                        </div>
                                        <div class="header-contact-box-content">
                                            <h3>email</h3>
                                            <p>{{ config('app.contact_email', 'info@domainname.com') }}</p>
                                        </div>
                                    </div>
                                    <!-- Header Contact Box End -->

                                    <!-- Header Contact Box Start -->
                                    <div class="header-contact-box">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-location-accent.svg') }}" alt="">
                                        </div>
                                        <div class="header-contact-box-content">
                                            <h3>address</h3>
                                            <p>{{ config('app.contact_address', '123 Creative Lane London, SW1A 1AA United Kingdom') }}</p>
                                        </div>
                                    </div>
                                    <!-- Header Contact Box End -->

                                    <!-- Header Social Links Start -->
                                    <div class="header-social-links sidebar-social-links">
                                        <h3>stay connected</h3>
                                        <ul>
                                            <li><a href="{{ config('app.social_twitter', '#') }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                            <li><a href="{{ config('app.social_facebook', '#') }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="{{ config('app.social_instagram', '#') }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Header Social Links End -->
                                </div>
                            </div>
                            <!-- Header Sidebar End -->
                        </div>
                        <!-- Header Btn End -->
                    </div>     
                    <!-- Header Social Box End -->                   
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>