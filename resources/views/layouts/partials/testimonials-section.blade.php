<!-- Testimonials Section Start -->
<div class="our-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Müşteri Görüşleri</h3>
                    <h2 class="text-anime-style-2">Müşterilerimiz <span>Ne Diyor</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">Birlikte çalıştığımız markaların başarı hikayelerini dinleyin. Onların memnuniyeti, bizim en büyük motivasyonumuz.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @php
                $testimonials = [
                    [
                        'name' => 'Mehmet Demir',
                        'position' => 'Genel Müdür, TechStart A.Ş.',
                        'image' => 'author-1.jpg',
                        'content' => 'Source of Agency ile çalışmaya başladığımızdan bu yana sosyal medya performansımız %400 arttı. Profesyonel yaklaşımları ve yaratıcı fikirleriyle şirketimizi dijital dünyada öne çıkardılar.',
                        'rating' => 5,
                        'delay' => '0s'
                    ],
                    [
                        'name' => 'Elif Aydın',
                        'position' => 'Pazarlama Müdürü, Borusan Grup',
                        'image' => 'author-2.jpg',
                        'content' => 'Dijital reklam kampanyalarımızda elde ettiğimiz sonuçlar hayal ettiğimizin çok ötesinde. Hedef kitle analizinden kreatif çalışmalara kadar her aşamada mükemmel hizmet aldık.',
                        'rating' => 5,
                        'delay' => '0.2s'
                    ],
                    [
                        'name' => 'Can Öztürk',
                        'position' => 'Kurucu, EcoTech Solutions',
                        'image' => 'author-3.png',
                        'content' => 'Start-upımız için hazırladıkları sosyal medya stratejisi sayesinde 6 ayda 50K organik takipçiye ulaştık. Sadece sayı değil, kaliteli etkileşim de sağladılar.',
                        'rating' => 5,
                        'delay' => '0.4s'
                    ],
                    [
                        'name' => 'Ayşe Kartal',
                        'position' => 'E-ticaret Yöneticisi, Atlas Store',
                        'image' => 'author-4.jpg',
                        'content' => 'Web sitemizin yeniden tasarımı ve SEO çalışmalarıyla online satışlarımız %250 arttı. Kullanıcı dostu tasarımı ve hızlı yükleme süreleriyle müşteri memnuniyetimiz zirve yaptı.',
                        'rating' => 5,
                        'delay' => '0.6s'
                    ],
                    [
                        'name' => 'Burak Yılmaz',
                        'position' => 'Restoran Sahibi, Lezzet Durağı',
                        'image' => 'satisfy-client-img-2.jpg',
                        'content' => 'Restoranımız için hazırladıkları video içerikler ve sosyal medya kampanyaları sayesinde rezervasyonlarımız ikiye katlandı. Yemeklerimizi çektiği video ve fotoğraflar gerçekten sanat eseri.',
                        'rating' => 5,
                        'delay' => '0.8s'
                    ],
                    [
                        'name' => 'Zeynep Koç',
                        'position' => 'Marka Danışmanı, Personal Brand Expert',
                        'image' => 'satisfy-client-img-3.jpg',
                        'content' => 'Kişisel markamı geliştirme sürecinde Source of Agency ile çalışmak en doğru kararlardan biriydi. LinkedIn ve Instagram\'da thought leader haline gelmemi sağladılar. Danışmanlık taleplerinde %500 artış yaşadım.',
                        'rating' => 5,
                        'delay' => '1s'
                    ]
                ];
            @endphp

            @foreach($testimonials as $index => $testimonial)
            <div class="col-lg-6">
                <!-- Testimonial Item Start -->
                <div class="testimonial-item wow fadeInUp" data-wow-delay="{{ $testimonial['delay'] }}">
                    <div class="client-info">
                        <div class="client-image">
                            <img src="{{ asset('images/' . $testimonial['image']) }}" alt="{{ $testimonial['name'] }}">
                        </div>
                        <div class="client-content">
                            <h3>{{ $testimonial['name'] }}</h3>
                            <p>{{ $testimonial['position'] }}</p>
                            <div class="rating">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fa fa-star{{ $i <= $testimonial['rating'] ? '' : '-o' }}"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>"{{ $testimonial['content'] }}"</p>
                    </div>
                </div>
                <!-- Testimonial Item End -->
            </div>
            @endforeach
        </div>
        
        <!-- Client Logos Start -->
        <div class="row client-logos-section section-space-top">
            <div class="col-lg-12">
                <div class="section-title text-center wow fadeInUp">
                    <h3>Güvenilir İş Ortaklarımız</h3>
                    <p>Farklı sektörlerden birbirinden değerli markalarla çalışmaktan gurur duyuyoruz.</p>
                </div>
                <div class="client-logos-grid wow fadeInUp" data-wow-delay="0.25s">
                    @php
                        $clientLogos = ['aselsan.png', 'borusan.png', 'atlas.png', 'author-1.jpg', 'author-2.jpg'];
                    @endphp
                    @foreach($clientLogos as $logo)
                        <div class="client-logo-item">
                            <img src="{{ asset('images/' . $logo) }}" alt="Müşteri Logosu">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Client Logos End -->
    </div>
</div>
<!-- Testimonials Section End -->