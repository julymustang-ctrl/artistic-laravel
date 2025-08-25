@extends('layouts.theme')

@section('title', 'Image Gallery - Our Social Media Marketing Work Showcase')
@section('meta_description', 'Browse our image gallery showcasing successful social media marketing campaigns, creative designs, and brand development projects for our clients.')
@section('meta_keywords', 'image gallery, social media marketing showcase, creative portfolio, design gallery, marketing campaigns')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Image <span>gallery</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">image gallery</li>
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
     
    <!-- Photo Gallery Section Start -->
    <div class="page-gallery">
        <div class="container">
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">
                @php
                    $galleryImages = [
                        [
                            'image' => 'gallery-1.jpg',
                            'title' => 'Social Media Campaign Design',
                            'delay' => '0s'
                        ],
                        [
                            'image' => 'gallery-2.jpg',
                            'title' => 'Brand Identity Development',
                            'delay' => '0.2s'
                        ],
                        [
                            'image' => 'gallery-3.jpg',
                            'title' => 'Instagram Marketing Content',
                            'delay' => '0.4s'
                        ],
                        [
                            'image' => 'gallery-4.jpg',
                            'title' => 'Digital Marketing Strategy',
                            'delay' => '0.6s'
                        ],
                        [
                            'image' => 'gallery-5.jpg',
                            'title' => 'Creative Content Design',
                            'delay' => '0.8s'
                        ],
                        [
                            'image' => 'gallery-6.jpg',
                            'title' => 'Social Media Graphics',
                            'delay' => '1s'
                        ],
                        [
                            'image' => 'gallery-7.jpg',
                            'title' => 'Facebook Ad Campaign',
                            'delay' => '1.2s'
                        ],
                        [
                            'image' => 'gallery-8.jpg',
                            'title' => 'LinkedIn Marketing Design',
                            'delay' => '1.4s'
                        ],
                        [
                            'image' => 'gallery-9.jpg',
                            'title' => 'YouTube Thumbnail Design',
                            'delay' => '1.6s'
                        ],
                        [
                            'image' => 'gallery-1.jpg',
                            'title' => 'Twitter Marketing Content',
                            'delay' => '1.8s'
                        ],
                        [
                            'image' => 'gallery-2.jpg',
                            'title' => 'TikTok Campaign Design',
                            'delay' => '2s'
                        ],
                        [
                            'image' => 'gallery-3.jpg',
                            'title' => 'Pinterest Marketing Graphics',
                            'delay' => '2.2s'
                        ]
                    ];
                @endphp

                @foreach($galleryImages as $image)
                <div class="col-lg-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="{{ $image['delay'] }}" data-cursor-text="View">
                        <a href="{{ asset('images/' . $image['image']) }}">
                            <figure class="image-anime">
                                <img src="{{ asset('images/' . $image['image']) }}" alt="{{ $image['title'] }}">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                @endforeach
            </div>
            <!-- gallery section end -->
        </div>
    </div>
    <!-- Photo Gallery Section End -->

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Initialize Magnific Popup for image gallery
        $('.photo-gallery a').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                titleSrc: function(item) {
                    return item.el.find('img').attr('alt');
                }
            }
        });
    });
</script>
@endpush