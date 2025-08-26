@extends('layouts.theme')

@section('title', 'Ekibimiz - Sosyal Medya ve Dijital Pazarlama Uzmanları')
@section('meta_description', 'Deneyimli sosyal medya uzmanlarımız, dijital pazarlama yöneticilerimiz ve kreatif stratejistlerimizle tanışın. Müşterilerimiz için başarı getiren ekibimizi keşfedin.')
@section('meta_keywords', 'sosyal medya ekibi, pazarlama uzmanları, dijital pazarlama profesyonelleri, sosyal medya yöneticileri, kreatif ekip')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Ekibimiz <span>ile Tanışın</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('anasayfa') }}">anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ekibimiz</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker subpages-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="{{ asset('images/client-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-5.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-6.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-5.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-6.svg') }}" alt=""></span>
            </div>

            <div class="scrolling-content">
                <span><img src="{{ asset('images/client-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-5.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-6.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-5.svg') }}" alt=""></span>
                <span><img src="{{ asset('images/client-logo-6.svg') }}" alt=""></span>
            </div>
        </div>
    </div>
    <!-- Scrolling Ticker Section End -->

    <!-- Page Team Start -->
    <div class="page-team">
        <div class="container">
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
                        ],
                        [
                            'id' => 4,
                            'name' => 'Can Yılmaz',
                            'position' => 'İçerik Strateji Uzmanı',
                            'image' => 'team-4.jpg',
                            'slug' => 'can-yilmaz',
                            'delay' => '0s',
                            'social' => [
                                'twitter' => '#',
                                'facebook' => '#',
                                'instagram' => '#',
                                'pinterest' => '#'
                            ]
                        ],
                        [
                            'id' => 5,
                            'name' => 'Selin Aydın',
                            'position' => 'Grafik Tasarım Uzmanı',
                            'image' => 'team-5.jpg',
                            'slug' => 'selin-aydin',
                            'delay' => '0.2s',
                            'social' => [
                                'twitter' => '#',
                                'facebook' => '#',
                                'instagram' => '#',
                                'pinterest' => '#'
                            ]
                        ],
                        [
                            'id' => 6,
                            'name' => 'Emre Tuna',
                            'position' => 'SEO ve Analitik Uzmanı',
                            'image' => 'team-6.jpg',
                            'slug' => 'emre-tuna',
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
        </div>
    </div>
    <!-- Page Team End -->

@endsection