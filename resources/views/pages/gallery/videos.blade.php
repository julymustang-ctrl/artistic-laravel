@extends('layouts.theme')

@section('title', 'Video Gallery - Our Social Media Marketing Videos')
@section('meta_description', 'Watch our video gallery featuring successful social media marketing campaigns, client testimonials, and promotional videos showcasing our expertise.')
@section('meta_keywords', 'video gallery, social media marketing videos, campaign videos, client testimonials, promotional content')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Video <span>gallery</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">video gallery</li>
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

    <!-- Page Video Gallery Start -->
    <div class="page-video-gallery">
        <div class="container">
            <div class="row">
                @php
                    $videoGallery = [
                        [
                            'image' => 'gallery-1.jpg',
                            'video_url' => 'https://www.youtube.com/watch?v=Y-x0efG1seA',
                            'title' => 'Social Media Strategy Overview',
                            'delay' => '0s'
                        ],
                        [
                            'image' => 'gallery-2.jpg',
                            'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                            'title' => 'Instagram Marketing Success Story',
                            'delay' => '0.2s'
                        ],
                        [
                            'image' => 'gallery-3.jpg',
                            'video_url' => 'https://www.youtube.com/watch?v=jNQXAC9IVRw',
                            'title' => 'Facebook Advertising Campaign',
                            'delay' => '0.4s'
                        ],
                        [
                            'image' => 'gallery-4.jpg',
                            'video_url' => 'https://www.youtube.com/watch?v=9bZkp7q19f0',
                            'title' => 'LinkedIn B2B Marketing Strategy',
                            'delay' => '0.6s'
                        ],
                        [
                            'image' => 'gallery-5.jpg',
                            'video_url' => 'https://www.youtube.com/watch?v=kJQP7kiw5Fk',
                            'title' => 'Twitter Engagement Tactics',
                            'delay' => '0.8s'
                        ],
                        [
                            'image' => 'gallery-6.jpg',
                            'video_url' => 'https://www.youtube.com/watch?v=ScMzIvxBSi4',
                            'title' => 'TikTok Marketing for Brands',
                            'delay' => '1s'
                        ],
                        [
                            'image' => 'gallery-7.jpg',
                            'video_url' => 'https://www.youtube.com/watch?v=oHg5SJYRHA0',
                            'title' => 'YouTube Channel Growth Strategy',
                            'delay' => '1.2s'
                        ],
                        [
                            'image' => 'gallery-8.jpg',
                            'video_url' => 'https://www.youtube.com/watch?v=xm3YgoEiEDc',
                            'title' => 'Pinterest Marketing for E-commerce',
                            'delay' => '1.4s'
                        ],
                        [
                            'image' => 'gallery-9.jpg',
                            'video_url' => 'https://www.youtube.com/watch?v=fJ9rUzIMcZQ',
                            'title' => 'Client Success Story Testimonial',
                            'delay' => '1.6s'
                        ],
                        [
                            'image' => 'gallery-1.jpg',
                            'video_url' => 'https://www.youtube.com/watch?v=aqz-KE-bpKQ',
                            'title' => 'Social Media ROI Analysis',
                            'delay' => '1.8s'
                        ],
                        [
                            'image' => 'gallery-2.jpg',
                            'video_url' => 'https://www.youtube.com/watch?v=HIcSWuKMwOw',
                            'title' => 'Content Creation Process',
                            'delay' => '2s'
                        ],
                        [
                            'image' => 'gallery-3.jpg',
                            'video_url' => 'https://www.youtube.com/watch?v=bHQqvYy5KYo',
                            'title' => 'Digital Marketing Trends 2024',
                            'delay' => '2.2s'
                        ]
                    ];
                @endphp

                @foreach($videoGallery as $video)
                <div class="col-lg-4 col-md-6">
                    <!-- video gallery start -->
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="{{ $video['delay'] }}" data-cursor-text="Play">
                        <a href="{{ $video['video_url'] }}" class="popup-video">
                            <figure>
                                <img src="{{ asset('images/' . $video['image']) }}" alt="{{ $video['title'] }}">
                            </figure>
                        </a>
                    </div>
                    <!-- video gallery end -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Page Video Gallery End -->

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Initialize Magnific Popup for video gallery
        $('.popup-video').magnificPopup({
            type: 'iframe',
            iframe: {
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: function(url) {        
                            var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                            if ( !m || !m[1] ) return null;
                            return m[1];
                        },
                        src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                    },
                    vimeo: {
                        index: 'vimeo.com/',
                        id: function(url) {
                            var m = url.match(/(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/);
                            if ( !m || !m[5] ) return null;
                            return m[5];
                        },
                        src: 'https://player.vimeo.com/video/%id%?autoplay=1'
                    }
                }
            },
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1]
            }
        });
    });
</script>
@endpush