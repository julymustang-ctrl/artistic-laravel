<!-- Blog Section Start -->
<div class="our-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Blog'umuz</h3>
                    <h2 class="text-anime-style-2">Son <span>İçgörüler</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @php
                $blogPosts = [
                    [
                        'title' => 'Sosyal Medya Stratejisinde 2025 Trendleri',
                        'image' => 'Sosyal-Medya-Stratejisinde-2025-Trendleri.jpg',
                        'excerpt' => '2025 yılında yapay zeka, kısa videolar ve mikro influencer\'lar sosyal medya dünyasını şekillendiriyor.',
                        'date' => '1 Ağustos 2025',
                        'author' => 'Source of Agency Ekibi',
                        'slug' => 'sosyal-medya-stratejisinde-2025-trendleri',
                        'delay' => '0s'
                    ],
                    [
                        'title' => 'İçerik Pazarlamasında Başarıyı Getiren Unsurlar',
                        'image' => 'Icerik-Pazarlamasinda-Basariyi-Getiren-Unsurlar-1.jpg',
                        'excerpt' => 'Etkili içerik pazarlama stratejileri ile hedef kitlenize ulaşın ve marka bilinirliğinizi artırın.',
                        'date' => '21 Ağustos 2025',
                        'author' => 'Dijital Pazarlama Uzmanı',
                        'slug' => 'icerik-pazarlamasinda-basariyi-getiren-unsurlar',
                        'delay' => '0.2s'
                    ],
                    [
                        'title' => 'Instagram\'da Organik Büyümenin Temel Kuralları',
                        'image' => 'Instagramda-Organik-Buyumenin-Temel-Kurallari.png',
                        'excerpt' => 'Organik takipçi artışı için kanıtlanmış stratejiler ve Instagram algoritmasının sırları.',
                        'date' => '2 Ağustos 2025',
                        'author' => 'Social Media Uzmanı',
                        'slug' => 'instagramda-organik-buyumenin-temel-kurallari',
                        'delay' => '0.4s'
                    ]
                ];
            @endphp

            @foreach($blogPosts as $post)
            <div class="col-lg-4 col-md-6">
                <!-- Blog Post Item Start -->
                <div class="blog-item wow fadeInUp" data-wow-delay="{{ $post['delay'] }}">
                    <div class="blog-image">
                        <figure class="image-anime">
                            <img src="{{ asset('images/' . $post['image']) }}" alt="{{ $post['title'] }}">
                        </figure>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="date">{{ $post['date'] }}</span>
                            <span class="author">By {{ $post['author'] }}</span>
                        </div>
                        <h3><a href="{{ route('blog.show', $post['slug']) }}">{{ $post['title'] }}</a></h3>
                        <p>{{ $post['excerpt'] }}</p>
                        <a href="{{ route('blog.show', $post['slug']) }}" class="readmore-btn">devamını oku</a>
                    </div>
                </div>
                <!-- Blog Post Item End -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog Section End -->