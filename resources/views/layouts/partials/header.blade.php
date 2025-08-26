<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route('anasayfa') }}">
                    <img src="{{ asset('images/logo.svg') }}" alt="Source Of Agency Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('anasayfa') }}">Anasayfa</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('hakkimizda') }}">Hakkımızda</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('hizmetlerimiz') }}">Hizmetlerimiz</a></li>
                            <li class="nav-item submenu">
                                <a class="nav-link" href="#">Kurumsal</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('takim-arkadaslarimiz') }}">Takım Arkadaşlarımız</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('yorumlar') }}">Müşteri Yorumları</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('referanslar') }}">Referanslar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('video-gallery') }}">Videolarımız</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('iletisim') }}">İletişim</a></li>                             
                        </ul>
                    </div>

                    <!-- Header Social Box Start -->
                    <div class="header-social-box d-inline-flex">
                        <!-- Header Social Links Start -->
                        <div class="header-social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=61562020162055" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/sourceofagencytr" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/source-of-agency/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
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
                                            <h3>Telefon</h3>
                                            <p>+90 232 570 37 44</p>
                                        </div>
                                    </div>
                                    <!-- Header Contact Box End -->

                                    <!-- Header Contact Box Start -->
                                    <div class="header-contact-box">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-mail-accent.svg') }}" alt="">
                                        </div>
                                        <div class="header-contact-box-content">
                                            <h3>E-posta</h3>
                                            <p>info@sourceofagency.com</p>
                                        </div>
                                    </div>
                                    <!-- Header Contact Box End -->

                                    <!-- Header Contact Box Start -->
                                    <div class="header-contact-box">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-location-accent.svg') }}" alt="">
                                        </div>
                                        <div class="header-contact-box-content">
                                            <h3>Adres</h3>
                                            <p>Çınarlı Mah. Ankara Asfaltlı Cad. No: 15 Kat: 39 Daire: 391<br>Mistral Office Tower, Konak/İzmir</p>
                                        </div>
                                    </div>
                                    <!-- Header Contact Box End -->

                                    <!-- Header Social Links Start -->
                                    <div class="header-social-links sidebar-social-links">
                                        <h3>Bağlantıda Kalın</h3>
                                        <ul>
                                            <li><a href="https://www.facebook.com/profile.php?id=61562020162055" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.instagram.com/sourceofagencytr" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="https://www.linkedin.com/company/source-of-agency/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
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