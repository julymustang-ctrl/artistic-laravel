@extends('layouts.theme')

@section('title', 'Artistic - Sosyal Medya Pazarlama Ajansı')
@section('meta_description', 'Güçlü sosyal medya stratejileri ile markanızı büyütün. Online varlığınızı artırın, hedef kitlenizle etkileşime geçin ve anlamlı sonuçlar elde edin.')
@section('meta_keywords', 'sosyal medya pazarlama, marka büyütme, dijital pazarlama, sosyal medya stratejileri, online varlık')

@section('content')
    <!-- Hero Section Start-->
    <div class="hero">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <!-- Selfhosted Video Start -->
            <!-- <video autoplay muted loop id="myVideo"><source src="{{ asset('videos/hero-bg-video.mp4') }}" type="video/mp4"></video> -->
            <video autoplay muted loop id="myVideo"><source src="https://demo.awaikenthemes.com/assets/videos/artistic-social-media-video.mp4" type="video/mp4"></video>
            <!-- Selfhosted Video End -->

            <!-- Youtube Video Start -->
            <!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
            <!-- Youtube Video End -->
        </div>
        <!-- Video End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h1 class="text-anime-style-2" data-cursor="-opaque">Güçlü <span>Sosyal Medya Stratejileri</span> ile Markanızı Büyütün</h1>
                            <p class="wow fadeInUp">Özel tasarlanmış sosyal medya stratejileri ile online varlığınızı artırın, hedef kitlenizle etkileşime geçin ve anlamlı sonuçlar elde edin.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="{{ route('contact') }}" class="btn-default">Başlayın</a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Hero Images Start -->
                    <div class="hero-images">
                        <!-- Hero Image Start -->
                        <div class="hero-image">
                            <figure>
                                <img src="{{ asset('images/hero-image.png') }}" alt="">
                            </figure>

                            <!-- Hero Image Icon Box Start -->
                            <div class="hero-img-icon-box">
                                <div class="icon-hero-img-1">
                                    <figure>
                                        <img src="{{ asset('images/icon-hero-img-1.svg') }}" alt="">
                                    </figure>
                                </div>
    
                                <div class="icon-hero-img-2">
                                    <figure>
                                        <img src="{{ asset('images/icon-hero-img-2.svg') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- Hero Image Icon Box End -->
                        </div>  
                        <!-- Hero Image End -->                     

                        <!-- Satisfied Client Box Start -->
                        <div class="satisficed-client-box">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-satisficed-client.svg') }}" alt="">
                            </div>
                            <div class="satisficed-client-content">
                                <h3><span class="counter">2500</span>+</h3>
                                <p>Memnun Müşteri</p>
                            </div>
                        </div>
                        <!-- Satisfied Client Box End -->
                    </div>
                    <!-- Hero Images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End-->

    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                @for($i = 1; $i <= 6; $i++)
                    <span><img src="{{ asset('images/client-logo-' . $i . '.svg') }}" alt=""></span>
                @endfor
                @for($i = 1; $i <= 6; $i++)
                    <span><img src="{{ asset('images/client-logo-' . $i . '.svg') }}" alt=""></span>
                @endfor
            </div>

            <div class="scrolling-content">
                @for($i = 1; $i <= 6; $i++)
                    <span><img src="{{ asset('images/client-logo-' . $i . '.svg') }}" alt=""></span>
                @endfor
                @for($i = 1; $i <= 6; $i++)
                    <span><img src="{{ asset('images/client-logo-' . $i . '.svg') }}" alt=""></span>
                @endfor
            </div>
        </div>
    </div>
    <!-- Scrolling Ticker Section End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- About Box Start -->
                    <div class="about-us-box">
                        <!-- About Us Images Start -->
                        <div class="about-us-image">
                            <!-- About Us Image Start -->
                            <div class="about-us-img">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('images/about-us-image.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image End -->

                            <!-- About Experience Box Start -->
                            <div class="about-experience-box">
                                <div class="about-experience-counter">
                                    <h2><span class="counter">25</span>+</h2>
                                </div>
                                <div class="about-experience-content wow fadeInUp">
                                    <p>Yıllık deneyim <span>Sosyal medya pazarlama</span></p>
                                </div>
                            </div>
                            <!-- About Experience Box End -->
                        </div>
                        <!-- About Us Images End -->

                        <!-- About Us Content Start -->
                        <div class="about-us-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">Hakkımızda</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Markaları <span>sosyal medya</span> ile dönüştürüyoruz</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- About Us Body Start -->
                            <div class="about-us-body wow fadeInUp" data-wow-delay="0.2s">
                                <p>Yaratıcı sosyal medya stratejileri ile marka kimliğini devrim niteliğinde dönüştürüyor, etkileşim sağlıyor, bağlantılar kuruyoruz ve sonuçlar sunuyoruz. İşletmeleri öne çıkarıyor, hedef kitlelerine ulaşmalarını sağlıyoruz.</p>
                            </div>
                            <!-- About Us Body End -->

                            <!-- About Us Footer Start -->
                            <div class="about-us-footer wow fadeInUp" data-wow-delay="0.4s">
                                <!-- About Us Button Start -->
                                <div class="about-us-btn">
                                    <a href="{{ route('about') }}" class="btn-default">Daha Fazla</a>
                                </div>
                                <!-- About Us Button End -->

                                <!-- About Author Info Start -->
                                <div class="about-author-info">
                                    <!-- About Author Image Start -->
                                    <div class="about-author-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('images/author-image.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <!-- About Author Image End -->

                                    <!-- About Author Content Start -->
                                    <div class="about-author-content">
                                        <h3>Aylin Özkan</h3>
                                        <p>Pazarlama Müdürü</p>
                                    </div>
                                    <!-- About Author Content End -->
                                </div>
                                <!-- About Author Info End -->
                            </div>
                            <!-- About Us Footer End -->
                            
                            <!-- About Us List Start -->
                            <div class="about-us-list">
                                <!-- About List Item Start -->
                                <div class="about-list-item wow fadeInUp">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-about-list-item-1.svg') }}" alt="">
                                    </div>
                                    <div class="about-list-content">
                                        <h3>özel pazarlama çözümleri</h3>
                                    </div>
                                </div>
                                <!-- About List Item End -->

                                <!-- About List Item Start -->
                                <div class="about-list-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-about-list-item-2.svg') }}" alt="">
                                    </div>
                                    <div class="about-list-content">
                                        <h3>proaktif trend takibi</h3>
                                    </div>
                                </div>
                                <!-- About List Item End -->

                                <!-- About List Item Start -->
                                <div class="about-list-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-about-list-item-3.svg') }}" alt="">
                                    </div>
                                    <div class="about-list-content">
                                        <h3>analitik performans optimizasyonu</h3>
                                    </div>
                                </div>
                                <!-- About List Item End -->
                            </div>
                            <!-- About Us List End -->
                        </div>
                        <!-- About Us Content End -->
                    </div>
                    <!-- About Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    @include('layouts.partials.services-section')
    {{-- @include('layouts.partials.our-agency-section') --}}
    {{-- @include('layouts.partials.why-choose-section') --}}
    {{-- @include('layouts.partials.portfolio-section') --}}
    {{-- @include('layouts.partials.testimonials-section') --}}
    {{-- @include('layouts.partials.blog-section') --}}

@endsection

@push('scripts')
<script>
    // Custom JavaScript for home page animations and interactions
    $(document).ready(function() {
        // Initialize counter animations
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
        
        // Initialize WOW animations
        new WOW().init();
    });
</script>
@endpush