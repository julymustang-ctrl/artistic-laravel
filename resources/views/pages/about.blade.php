@extends('layouts.theme')

@section('title', 'Hakkımızda - Source of Agency | İzmir Sosyal Medya Ajansı')
@section('meta_description', 'Source of Agency hakkında bilgi edinin. İzmir merkezli sosyal medya ajansımızın hikayesi, ekibimiz ve markalarınızı dijital dünyada büyütme misyonumuz.')
@section('meta_keywords', 'hakkımızda, sosyal medya ajansı, izmir reklam ajansı, dijital pazarlama ekibi, source of agency')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Hakkı<span>mızda</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Ana Sayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Hakkımızda</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

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
                                    <img src="{{ asset('images/author-image.jpg') }}" alt="Source of Agency Ekibi">
                                </figure>
                            </div>
                            <!-- About Us Image End -->

                            <!-- About Experience Box Start -->
                            <div class="about-experience-box">
                                <div class="about-experience-counter">
                                    <h2><span class="counter">5</span>+</h2>
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
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Sıradışı Fikirlerimiz <span>Dijital Dünya</span> ile Buluşuyor</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- About Us Body Start -->
                            <div class="about-us-body wow fadeInUp" data-wow-delay="0.2s">
                                <p>Source of Agency olarak ezber bozan fikirleri dijital dünyanın sınırsız gücüyle buluşturuyor, markanızı fark edilir kılıyoruz. İzmir merkezli ajansımız, sosyal medya pazarlama, dijital reklam yönetimi, web tasarım ve prodüksiyon hizmetleriyle markalarınızın dijital dönüşüm yolculuğuna eşlik ediyor.</p>
                                
                                <p>Her projeye yaklaşımımız; sadece görünürlük değil, anlamlı bağlantılar kurmak. Çünkü biz biliyoruz ki gerçek başarı, doğru stratejilerle hedef kitlenizle kurduğunuz güçlü ilişkilerde yatıyor.</p>
                            </div>
                            <!-- About Us Body End -->

                            <!-- About Us Footer Start -->
                            <div class="about-us-footer wow fadeInUp" data-wow-delay="0.4s">
                                <!-- About Us Button Start -->
                                <div class="about-us-btn">
                                    <a href="{{ route('contact') }}" class="btn-default">İletişime Geç</a>
                                </div>
                                <!-- About Us Button End -->

                                <!-- About Author Info Start -->
                                <div class="about-author-info">
                                    <!-- About Author Image Start -->
                                    <div class="about-author-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('images/author-1.jpg') }}" alt="Source of Agency Kurucu">
                                        </figure>
                                    </div>
                                    <!-- About Author Image End -->

                                    <!-- About Author Content Start -->
                                    <div class="about-author-content">
                                        <h3>Ahmet Yılmaz</h3>
                                        <p>Kurucu & Yaratıcı Direktör</p>
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
                                        <i class="fas fa-bullseye"></i>
                                    </div>
                                    <div class="about-list-content">
                                        <h3>Hedef Odaklı Stratejiler</h3>
                                        <p>Her marka için özel olarak tasarlanan, ölçülebilir sonuçlar üreten stratejiler geliştiriyoruz.</p>
                                    </div>
                                </div>
                                <!-- About List Item End -->

                                <!-- About List Item Start -->
                                <div class="about-list-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon-box">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="about-list-content">
                                        <h3>Trend Analizi ve İnovasyon</h3>
                                        <p>Dijital dünyayın nabzını tutuyor, en güncel trendleri markanızın hizmetine sunuyoruz.</p>
                                    </div>
                                </div>
                                <!-- About List Item End -->

                                <!-- About List Item Start -->
                                <div class="about-list-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <i class="fas fa-analytics"></i>
                                    </div>
                                    <div class="about-list-content">
                                        <h3>Veri Odaklı Optimizasyon</h3>
                                        <p>Detaylı analiz ve raporlamalarla performansı sürekli optimize ediyor, ROI'nizi maksimize ediyoruz.</p>
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

    @include('layouts.partials.our-agency-section')
    @include('layouts.partials.team-section')
    @include('layouts.partials.testimonials-section')

@endsection