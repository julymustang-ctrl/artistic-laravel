@extends('layouts.theme')

@section('title', 'Our Services - Social Media Marketing Agency')
@section('meta_description', 'Discover our comprehensive social media marketing services including strategy development, content creation, analytics, and more.')
@section('meta_keywords', 'social media services, marketing services, strategy development, content creation, analytics')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>services</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">our services</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                        <h3 class="wow fadeInUp">our services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">We provide comprehensive <span>social media solutions</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <!-- Service Item Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{ asset('images/icon-service-1.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3><a href="{{ route('services.show', 'strategy-development') }}">Strategy Development</a></h3>
                            <p>Comprehensive social media strategies tailored to your brand's unique goals and target audience.</p>
                            <div class="service-btn">
                                <a href="{{ route('services.show', 'strategy-development') }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->

                <!-- Service Item Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="{{ asset('images/icon-service-2.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3><a href="{{ route('services.show', 'content-creation') }}">Content Creation</a></h3>
                            <p>Engaging and creative content that resonates with your audience and drives meaningful engagement.</p>
                            <div class="service-btn">
                                <a href="{{ route('services.show', 'content-creation') }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->

                <!-- Service Item Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="{{ asset('images/icon-service-3.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3><a href="{{ route('services.show', 'account-management') }}">Account Management</a></h3>
                            <p>Professional management of your social media accounts with consistent posting and engagement.</p>
                            <div class="service-btn">
                                <a href="{{ route('services.show', 'account-management') }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->

                <!-- Service Item Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{ asset('images/icon-service-4.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3><a href="{{ route('services.show', 'analytics-reporting') }}">Analytics & Reporting</a></h3>
                            <p>Detailed analytics and reporting to track performance and optimize your social media presence.</p>
                            <div class="service-btn">
                                <a href="{{ route('services.show', 'analytics-reporting') }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->

                <!-- Service Item Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="{{ asset('images/icon-service-5.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3><a href="{{ route('services.show', 'paid-advertising') }}">Paid Advertising</a></h3>
                            <p>Strategic paid social media advertising campaigns to maximize reach and conversions.</p>
                            <div class="service-btn">
                                <a href="{{ route('services.show', 'paid-advertising') }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->

                <!-- Service Item Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="{{ asset('images/icon-service-6.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3><a href="{{ route('services.show', 'consultation') }}">Consultation</a></h3>
                            <p>Expert consultation services to help you develop and refine your social media strategy.</p>
                            <div class="service-btn">
                                <a href="{{ route('services.show', 'consultation') }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    @include('layouts.partials.cta-section')

@endsection