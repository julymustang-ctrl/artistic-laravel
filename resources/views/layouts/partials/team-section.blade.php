<!-- Team Section Start -->
<div class="team-section">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp"><span>Profesyonel</span></h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Ekibimiz <span>ile Tanışın</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">Sosyal medya ve dijital pazarlama alanında uzman ekibimiz, yaratıcılık ve sonuç odaklı yaklaşımla her projeye özel çözümler sunar.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @php
                $teamMembers = [
                    [
                        'id' => 1,
                        'name' => 'Ayşe Demir',
                        'position' => 'Sosyal Medya Yöneticisi',
                        'image' => 'team-1.jpg',
                        'slug' => 'ayse-demir',
                        'delay' => '0s',
                        'social' => [
                            'twitter' => '#',
                            'facebook' => '#',
                            'instagram' => '#',
                            'pinterest' => '#'
                        ]
                    ],
                    [
                        'id' => 2,
                        'name' => 'Mehmet Kaya',
                        'position' => 'Dijital Pazarlama Uzmanı',
                        'image' => 'team-2.jpg',
                        'slug' => 'mehmet-kaya',
                        'delay' => '0.2s',
                        'social' => [
                            'twitter' => '#',
                            'facebook' => '#',
                            'instagram' => '#',
                            'pinterest' => '#'
                        ]
                    ],
                    [
                        'id' => 3,
                        'name' => 'Elif Öztürk',
                        'position' => 'Kreatif Direktör',
                        'image' => 'team-3.jpg',
                        'slug' => 'elif-ozturk',
                        'delay' => '0.4s',
                        'social' => [
                            'twitter' => '#',
                            'facebook' => '#',
                            'instagram' => '#',
                            'pinterest' => '#'
                        ]
                    ]
                ];
            @endphp

            @foreach($teamMembers as $member)
            <div class="col-lg-4 col-md-6">
                <!-- Team Member Item Start -->
                <div class="team-item wow fadeInUp" data-wow-delay="{{ $member['delay'] }}">
                    <!-- team Image Start -->
                    <div class="team-image">
                        <a href="{{ route('team.show', $member['slug']) }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('images/' . $member['image']) }}" alt="{{ $member['name'] }}">
                            </figure>
                        </a>
                    </div>
                    <!-- team Image End -->
            
                    <!-- Team Body Start -->
                    <div class="team-body">
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3><a href="{{ route('team.show', $member['slug']) }}">{{ $member['name'] }}</a></h3>
                            <p>{{ $member['position'] }}</p>
                        </div>
                        <!-- Team Content End -->
        
                        <!-- Team Social List Start -->
                        <div class="team-social-list">
                            <ul>
                                <li><a href="{{ $member['social']['twitter'] }}"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="{{ $member['social']['facebook'] }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="{{ $member['social']['instagram'] }}"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="{{ $member['social']['pinterest'] }}"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <!-- Team Social List End -->
                    </div>
                    <!-- Team Body End -->
                </div>
                <!-- Team Member Item End -->
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Team Button Start -->
                <div class="team-btn wow fadeInUp" data-wow-delay="0.6s">
                    <a href="{{ route('team') }}" class="btn-default">Tüm Ekibi Gör</a>
                </div>
                <!-- Team Button End -->
            </div>
        </div>
    </div>
</div>
<!-- Team Section End -->