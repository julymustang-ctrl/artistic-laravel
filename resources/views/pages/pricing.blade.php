@extends('layouts.theme')

@section('title', 'Pricing Plans - Affordable Social Media Marketing Services')
@section('meta_description', 'Choose from our flexible pricing plans for social media marketing services. Start at $29/month with comprehensive digital marketing solutions.')
@section('meta_keywords', 'social media pricing, marketing plans, digital marketing packages, affordable social media services')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Pricing</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">pricing</li>
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

    <!-- Page Pricing Start -->
    <div class="page-pricing">
        <div class="container">
            <div class="row">
                @php
                    $pricingPlans = [
                        [
                            'name' => 'Basic Plan',
                            'description' => 'Start at $29 included 3 client',
                            'price' => 29,
                            'icon' => 'icon-pricing-1.svg',
                            'highlighted' => false,
                            'delay' => '0s',
                            'features' => [
                                '24/7 customer support',
                                'Multi-platform integration',
                                'Free initial consultation'
                            ]
                        ],
                        [
                            'name' => 'Standard Plan',
                            'description' => 'Start at $39 included 5 client',
                            'price' => 39,
                            'icon' => 'icon-pricing-2.svg',
                            'highlighted' => true,
                            'delay' => '0.25s',
                            'features' => [
                                '24/7 customer support',
                                'Multi-platform integration',
                                'Free initial consultation',
                                'Advanced analytics',
                                'Content calendar'
                            ]
                        ],
                        [
                            'name' => 'Premium Plan',
                            'description' => 'Start at $49 included 10 client',
                            'price' => 49,
                            'icon' => 'icon-pricing-3.svg',
                            'highlighted' => false,
                            'delay' => '0.5s',
                            'features' => [
                                '24/7 customer support',
                                'Multi-platform integration',
                                'Free initial consultation',
                                'Advanced analytics',
                                'Content calendar',
                                'Influencer partnerships'
                            ]
                        ]
                    ];
                @endphp

                @foreach($pricingPlans as $plan)
                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Box Start -->
                    <div class="pricing-item {{ $plan['highlighted'] ? 'highlighted-box' : '' }} wow fadeInUp" data-wow-delay="{{ $plan['delay'] }}">
                        <!-- Pricing Header Start -->
                        <div class="pricing-header">
                            <img src="{{ asset('images/' . $plan['icon']) }}" alt="{{ $plan['name'] }}">
                            <h3>{{ $plan['name'] }}</h3>
                            <p>{{ $plan['description'] }}</p>
                            <h2><sup>$</sup>{{ $plan['price'] }}<sub>/per month</sub></h2>
                        </div>
                        <!-- Pricing Header End -->

                        <!-- Pricing Box Body Start -->
                        <div class="pricing-body">
                            <a href="{{ route('contact') }}" class="btn-default btn-highlighted">Get started</a>
                        </div>
                        <!-- Pricing Box Body End -->

                        <!-- Pricing Button Start -->
                        <div class="pricing-footer">
                            <ul>
                                @foreach($plan['features'] as $feature)
                                <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Pricing Button End -->
                    </div>
                    <!-- Pricing Box End -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Page Pricing End -->

    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">testimonials</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">What <span>clients</span> are saying</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-4">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('contact') }}" class="btn-default">contact us</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                @php
                                    $testimonials = [
                                        [
                                            'name' => 'Arlene McCoy',
                                            'position' => 'Co Founder',
                                            'image' => 'author-1.jpg',
                                            'review' => 'Working with this team has been a game-changer for our brand engagement skyrocketed, we\'ve seen a noticeable increase in sales.',
                                            'followers' => '80K',
                                            'platform' => 'Instagram Followers'
                                        ],
                                        [
                                            'name' => 'Kristin Watson',
                                            'position' => 'Marketing Director',
                                            'image' => 'author-2.jpg',
                                            'review' => 'Exceptional service and results! Our social media presence has transformed completely with their strategic approach.',
                                            'followers' => '130K',
                                            'platform' => 'Instagram Followers'
                                        ],
                                        [
                                            'name' => 'Wade Warren',
                                            'position' => 'CEO',
                                            'image' => 'author-3.jpg',
                                            'review' => 'The ROI we\'ve achieved through their campaigns exceeded all expectations. Highly recommend their services.',
                                            'followers' => '95K',
                                            'platform' => 'Instagram Followers'
                                        ]
                                    ];
                                @endphp

                                @foreach($testimonials as $testimonial)
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">                                       
                                        <div class="testimonial-header">
                                            <div class="testimonial-content">
                                                <p>"{{ $testimonial['review'] }}"</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('images/' . $testimonial['image']) }}" alt="{{ $testimonial['name'] }}">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>{{ $testimonial['name'] }}</h3>
                                                    <p>{{ $testimonial['position'] }}</p>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="testimonial-body">
                                            <div class="testimonial-counter">
                                                <h2><span class="counter">{{ rtrim($testimonial['followers'], 'K') }}</span>K</h2>
                                                <p>{{ $testimonial['platform'] }}</p>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('images/testimonial-quote.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                                @endforeach
                            </div>
                        </div>

                        <!-- Testimonial Pagination Start -->
                        <div class="testimonial-pagination"></div>
                        <!-- Testimonial Pagination End -->
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonial Section End -->

@endsection

@push('scripts')
<script>
    // Testimonial Slider
    $(document).ready(function() {
        var testimonialSwiper = new Swiper('.testimonial-slider .swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.testimonial-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    });
</script>
@endpush