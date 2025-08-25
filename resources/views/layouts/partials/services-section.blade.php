<!-- Services Section -->
<section class="services-section section-space-bottom section-space-top">
    <div class="container">
        <div class="row section-title">
            <div class="col-lg-12">
                <div class="section-title-content">
                    <h3 class="wow fadeInUp" data-cursor="-opaque">Hizmetlerimiz</h3>
                    <h2 class="text-anime-style-2 wow fadeInUp" data-wow-delay="0.25s" data-cursor="-opaque"><span>Dijital Dünyada</span> Fark Yaratıyoruz</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.5s">Source of Agency olarak, markanızın dijital varlığını güçlendiren ve hedef kitlenizle güçlü bağlar kuran profesyonel hizmetler sunuyoruz.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <?php
            $services = [
                [
                    'icon' => 'fa-share-alt',
                    'title' => 'Sosyal Medya Yönetimi',
                    'description' => 'Sosyal medya hesaplarınızı profesyonelce yönetiyor, kitlenizle sadece etkileşime değil, güçlü ve sürdürülebilir bağlara odaklanan içerik stratejileri sunuyoruz.',
                    'link' => '#',
                    'features' => ['İçerik Stratejisi', 'Community Management', 'Analiz ve Raporlama']
                ],
                [
                    'icon' => 'fa-bullhorn',
                    'title' => 'Dijital Reklam Yönetimi',
                    'description' => 'Hedef kitlenize ulaşın, etkili kampanyalarla dönüşümlerinizi artırın. Performans odaklı reklam stratejileriyle markanızı büyütün.',
                    'link' => '#',
                    'features' => ['Google Ads', 'Facebook Ads', 'ROI Optimizasyonu']
                ],
                [
                    'icon' => 'fa-code',
                    'title' => 'Web Tasarım',
                    'description' => 'Sadece sayfa değil, kullanıcı deneyimi inşa ediyoruz. Estetik, hız ve işlevsellik odaklı çözümlerle ilk izlenimin gücünü markanız lehine kullanın.',
                    'link' => '#',
                    'features' => ['Responsive Tasarım', 'UX/UI Optimizasyon', 'SEO Uyumlu Kodlama']
                ],
                [
                    'icon' => 'fa-video',
                    'title' => 'Prodüksiyon Hizmetleri',
                    'description' => 'Markanızın öyküsünü etkileyici görsellerle anlatıyoruz. Video ve fotoğraf içerikleriyle güçlü bir iz bırakın, hikayenizi ekrana taşıyın.',
                    'link' => '#',
                    'features' => ['Video Prodüksiyon', 'Fotoğraf Çekimi', 'Motion Graphics']
                ],
                [
                    'icon' => 'fa-chart-line',
                    'title' => 'Medya Planlama',
                    'description' => 'Stratejik medya planlaması ile bütçenizi en verimli şekilde kullanın. Doğru kanal, doğru zaman, doğru içerik ile maksimum etki yaratın.',
                    'link' => '#',
                    'features' => ['Kanal Stratejisi', 'Bütçe Optimizasyonu', 'Kampanya Takibi']
                ],
                [
                    'icon' => 'fa-users',
                    'title' => 'Kurumsal Kimlik',
                    'description' => 'Markanızın DNA'sını oluşturuyor, görsel kimliğinizi dijital ve fiziksel tüm platformlarda tutarlı ve etkileyici şekilde yansıtıyoruz.',
                    'link' => '#',
                    'features' => ['Logo Tasarım', 'Kurumsal Renk Paleti', 'Marka Kılavuzu']
                ]
            ];
            ?>
            
            @foreach($services as $index => $service)
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="{{ 0.25 + ($index * 0.1) }}s">
                    <div class="service-item-icon">
                        <i class="fas {{ $service['icon'] }}"></i>
                    </div>
                    <div class="service-item-content">
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['description'] }}</p>
                        <div class="service-features">
                            @foreach($service['features'] as $feature)
                            <span class="feature-tag">{{ $feature }}</span>
                            @endforeach
                        </div>
                        <div class="service-item-btn">
                            <a href="{{ $service['link'] }}" class="btn-default">Detayları Gör</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Services Stats -->
        <div class="row services-stats section-space-top">
            <div class="col-lg-3 col-md-6">
                <div class="stats-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="stats-number">
                        <h3><span class="counter">150</span>+</h3>
                    </div>
                    <div class="stats-content">
                        <p>Tamamlanan Proje</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stats-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="stats-number">
                        <h3><span class="counter">85</span>+</h3>
                    </div>
                    <div class="stats-content">
                        <p>Mutlu Müşteri</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stats-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="stats-number">
                        <h3><span class="counter">5</span>+</h3>
                    </div>
                    <div class="stats-content">
                        <p>Yıllık Deneyim</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stats-item wow fadeInUp" data-wow-delay="1s">
                    <div class="stats-number">
                        <h3><span class="counter">24</span>/7</h3>
                    </div>
                    <div class="stats-content">
                        <p>Destek Hizmeti</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>