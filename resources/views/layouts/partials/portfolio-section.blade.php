<!-- Portfolio Section Start -->
<div class="our-portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Referanslarımız</h3>
                    <h2 class="text-anime-style-2">Tamamladığımız <span>Projeler</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">Birlikte çalıştığımız markaları ve tamamladığımız projeleri inceleyin. Başarılarımız, sizinle kuracağımız güvenin temelidir.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @php
                $portfolioItems = [
                    [
                        'image' => 'aselsan.png',
                        'title' => 'ASELSAN Dijital Strateji',
                        'category' => 'Kurumsal Sosyal Medya Yönetimi',
                        'description' => 'Türkiye\'nin savunma sanayii liderinin LinkedIn ve kurumsal sosyal medya stratejilerini geliştirdik.',
                        'delay' => '0s'
                    ],
                    [
                        'image' => 'borusan.png',
                        'title' => 'Borusan Holding Kampanyası',
                        'category' => 'Dijital Reklam Yönetimi',
                        'description' => 'Holding bünyesindeki markalar için entegre dijital reklam kampanyaları yürüttük.',
                        'delay' => '0.2s'
                    ],
                    [
                        'image' => 'atlas.png',
                        'title' => 'Atlas Marka Kimliği',
                        'category' => 'Kurumsal Kimlik ve Web Tasarım',
                        'description' => 'Markanın dijital kimliğini ve web sitesini yeniden tasarlayarak görsel tutarlılık sağladık.',
                        'delay' => '0.4s'
                    ],
                    [
                        'image' => 'satisfy-client-img-2.jpg',
                        'title' => 'E-ticaret Markası Büyüme Projesi',
                        'category' => 'Sosyal Medya ve İçerik Pazarlaması',
                        'description' => 'Online satışları %300 artıran sosyal medya stratejisi ve içerik pazarlama kampanyası.',
                        'delay' => '0.6s'
                    ],
                    [
                        'image' => 'satisfy-client-img-3.jpg',
                        'title' => 'Restoran Zinciri Dijital Dönüşüm',
                        'category' => 'Dijital Pazarlama ve Prodüksiyon',
                        'description' => 'Restoran zincirinin dijital varlığını güçlendiren video içerikler ve sosyal medya stratejisi.',
                        'delay' => '0.8s'
                    ],
                    [
                        'image' => 'author-1.jpg',
                        'title' => 'Kişisel Marka Geliştirme',
                        'category' => 'Influencer Pazarlama',
                        'description' => 'Sektör uzmanının kişisel markasını geliştirerek takipçi sayısını 50K\\\'ya çıkardık.',
                        'delay' => '1s'
                    ]
                ];
            @endphp

            @foreach($portfolioItems as $item)
            <div class="col-lg-4 col-md-6">
                <!-- Portfolio Item Start -->
                <div class="portfolio-item wow fadeInUp" data-wow-delay="{{ $item['delay'] }}">
                    <div class="portfolio-image">
                        <figure class="image-anime">
                            <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}">
                        </figure>
                        <div class="portfolio-overlay">
                            <div class="portfolio-overlay-content">
                                <h4>{{ $item['title'] }}</h4>
                                <p>{{ $item['description'] }}</p>
                                <a href="#" class="portfolio-link">İncele</a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3><a href="#">{{ $item['title'] }}</a></h3>
                        <p>{{ $item['category'] }}</p>
                    </div>
                </div>
                <!-- Portfolio Item End -->
            </div>
            @endforeach
        </div>
        
        <!-- Portfolio CTA -->
        <div class="row portfolio-cta section-space-top">
            <div class="col-lg-12 text-center">
                <div class="portfolio-cta-content wow fadeInUp" data-wow-delay="0.25s">
                    <h3>Daha Fazla Proje Görmek İster misiniz?</h3>
                    <p>Tüm referanslarımızı ve detaylı proje çalışmalarımızı portföy sayfamızda inceleyebilirsiniz.</p>
                    <a href="#" class="btn-default">Tüm Projeleri Gör</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Section End -->