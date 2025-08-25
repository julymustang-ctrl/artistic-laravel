@extends('layouts.theme')

@section('title', 'Client Testimonials - What Our Clients Say')
@section('meta_description', 'Read testimonials from our satisfied clients about our social media marketing services, digital strategies, and brand development solutions.')
@section('meta_keywords', 'client testimonials, reviews, social media marketing success, client feedback, marketing agency reviews')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Testimonial</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">testimonial</li>
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

    <!-- Page Testimonial Start -->
    <div class="page-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Box List Start -->
                    <div class="testimonial-box-list">
                        @php
                            $testimonials = [
                                [
                                    'name' => 'Alexander Bennett',
                                    'position' => 'Senior Brand Strategist',
                                    'image' => 'author-1.jpg',
                                    'rating' => 5,
                                    'content' => 'The team transformed our brand\'s online presence with creativity and precision. The results exceeded our expectations! Their digital marketing strategies helped us reach a broader audience and significantly boosted our sales.',
                                    'delay' => '0s'
                                ],
                                [
                                    'name' => 'Isabella Morgan',
                                    'position' => 'Director of Digital Marketing',
                                    'image' => 'author-2.jpg',
                                    'rating' => 5,
                                    'content' => 'We approached Isabella Morgan with the goal of completely transforming our brand\'s digital presence, and they exceeded all expectations. Their team took the time to understand our business.',
                                    'delay' => '0.2s'
                                ],
                                [
                                    'name' => 'Christopher Hughes',
                                    'position' => 'Chief Technology Officer',
                                    'image' => 'author-3.jpg',
                                    'rating' => 5,
                                    'content' => 'Collaborating with Christopher Hughes was an absolute pleasure. Their team brought fresh ideas to the table and helped us completely reimagine our online branding and user experience.',
                                    'delay' => '0.4s'
                                ],
                                [
                                    'name' => 'Olivia Reynolds',
                                    'position' => 'Senior Marketing Manager',
                                    'image' => 'author-4.jpg',
                                    'rating' => 5,
                                    'content' => 'When we first partnered with Olivia Reynolds, we were in need of a complete website overhaul. They not only delivered a beautiful, responsive website, but they also implemented a robust digital marketing strategy.',
                                    'delay' => '0.6s'
                                ],
                                [
                                    'name' => 'Marcus Johnson',
                                    'position' => 'E-commerce Director',
                                    'image' => 'author-1.jpg',
                                    'rating' => 5,
                                    'content' => 'Outstanding social media management and content creation services. Our engagement rates have tripled since working with this amazing team. Highly recommend for any business looking to grow their online presence.',
                                    'delay' => '0.8s'
                                ],
                                [
                                    'name' => 'Sarah Williams',
                                    'position' => 'Marketing Coordinator',
                                    'image' => 'author-2.jpg',
                                    'rating' => 5,
                                    'content' => 'Exceptional service quality and attention to detail. The team\'s expertise in social media analytics and campaign optimization has delivered measurable results for our business growth.',
                                    'delay' => '1s'
                                ]
                            ];
                        @endphp

                        @foreach($testimonials as $testimonial)
                        <!-- Testimonial Box Item Start -->
                        <div class="testimonial-box-item wow fadeInUp" data-wow-delay="{{ $testimonial['delay'] }}">
                            <!-- Client Author Image Start -->
                            <div class="client-author-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/' . $testimonial['image']) }}" alt="{{ $testimonial['name'] }}">
                                </figure>
                            </div>
                            <!-- Client Author Image End -->

                            <!-- Client Testimonial Content Start -->
                            <div class="client-testimonial-content">
                                <!-- Client Testimonial Rating Start -->
                                <div class="client-testimonial-rating">
                                    <ul>
                                        @for($i = 1; $i <= 5; $i++)
                                            <li><i class="fa-solid fa-star{{ $i <= $testimonial['rating'] ? '' : '-o' }}"></i></li>
                                        @endfor
                                    </ul>
                                </div>
                                <!-- Client Testimonial Rating End -->

                                <!-- Client Testimonial Info Start -->
                                <div class="client-testimonial-info">
                                    <p>{{ $testimonial['content'] }}</p>
                                </div>
                                <!-- Client Testimonial Info End -->

                                <!-- Client Author Content Start -->
                                <div class="client-author-content">
                                    <!-- Client Author Title Start -->
                                    <div class="client-author-title">
                                        <h3>{{ $testimonial['name'] }}</h3>
                                        <p>{{ $testimonial['position'] }}</p>
                                    </div>
                                    <!-- Client Author Title End -->

                                    <!-- Client Author Logo Start -->
                                    <div class="client-author-logo">
                                        <img src="{{ asset('images/icon-testimonial-logo.svg') }}" alt="">
                                    </div>
                                    <!-- Client Author Logo End -->
                                </div>
                                <!-- Client Author Content End -->
                            </div>
                            <!-- Client Testimonial Content End -->
                        </div>
                        <!-- Testimonial Box Item End -->
                        @endforeach
                    </div>
                    <!-- Testimonial Box List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Testimonial End -->

@endsection