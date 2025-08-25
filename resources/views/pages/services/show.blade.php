@extends('layouts.theme')

@section('title', ucfirst(str_replace('-', ' ', $service)) . ' - Service Details')
@section('meta_description', 'Learn about our ' . str_replace('-', ' ', $service) . ' service and how we can help your business grow through social media.')
@section('meta_keywords', 'social media, ' . str_replace('-', ' ', $service) . ', marketing service, digital strategy')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ ucfirst(str_replace('-', ' ', $service)) }} <span>Service</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services') }}">services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ str_replace('-', ' ', $service) }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Details Section Start -->
    <div class="service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Service Details Content Start -->
                    <div class="service-details-content">
                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            <div class="service-entry-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/service-entry-img.jpg') }}" alt="">
                                </figure>
                            </div>
                            
                            <div class="service-entry-content">
                                <h2>{{ ucfirst(str_replace('-', ' ', $service)) }}</h2>
                                <p>Our comprehensive approach to {{ str_replace('-', ' ', $service) }} ensures your business gets the maximum return on investment through strategic social media marketing. We combine industry expertise with cutting-edge tools to deliver exceptional results.</p>
                            </div>
                        </div>
                        <!-- Service Entry End -->

                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3>What We Offer</h3>
                            <p>Our {{ str_replace('-', ' ', $service) }} service is designed to help businesses like yours succeed in the digital landscape. We provide comprehensive solutions that drive engagement, increase brand visibility, and generate meaningful results.</p>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="service-list">
                                        <li><i class="fa-solid fa-check"></i> Comprehensive strategy development</li>
                                        <li><i class="fa-solid fa-check"></i> Target audience analysis</li>
                                        <li><i class="fa-solid fa-check"></i> Platform optimization</li>
                                        <li><i class="fa-solid fa-check"></i> Content planning</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="service-list">
                                        <li><i class="fa-solid fa-check"></i> Performance tracking</li>
                                        <li><i class="fa-solid fa-check"></i> Monthly reporting</li>
                                        <li><i class="fa-solid fa-check"></i> Ongoing optimization</li>
                                        <li><i class="fa-solid fa-check"></i> 24/7 support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Service Content End -->

                        <!-- Service Process Section Start -->
                        <div class="service-process">
                            <h3>Our Process</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <!-- Service Process Step Start -->
                                    <div class="service-process-step">
                                        <div class="service-process-step-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('images/service-process-step-1.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="service-process-step-content">
                                            <div class="service-process-step-icon">
                                                <img src="{{ asset('images/icon-service-process-step-1.svg') }}" alt="">
                                            </div>
                                            <h4>Discovery & Research</h4>
                                            <p>We start by understanding your business, target audience, and objectives to create a tailored strategy.</p>
                                        </div>
                                    </div>
                                    <!-- Service Process Step End -->
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <!-- Service Process Step Start -->
                                    <div class="service-process-step">
                                        <div class="service-process-step-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('images/service-process-step-2.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="service-process-step-content">
                                            <div class="service-process-step-icon">
                                                <img src="{{ asset('images/icon-service-process-step-2.svg') }}" alt="">
                                            </div>
                                            <h4>Strategy Development</h4>
                                            <p>Based on our research, we develop a comprehensive strategy that aligns with your business goals.</p>
                                        </div>
                                    </div>
                                    <!-- Service Process Step End -->
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <!-- Service Process Step Start -->
                                    <div class="service-process-step">
                                        <div class="service-process-step-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('images/service-process-step-3.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="service-process-step-content">
                                            <div class="service-process-step-icon">
                                                <img src="{{ asset('images/icon-service-process-step-3.svg') }}" alt="">
                                            </div>
                                            <h4>Implementation & Optimization</h4>
                                            <p>We execute the strategy and continuously monitor and optimize for the best results.</p>
                                        </div>
                                    </div>
                                    <!-- Service Process Step End -->
                                </div>
                            </div>
                        </div>
                        <!-- Service Process Section End -->
                    </div>
                    <!-- Service Details Content End -->
                </div>

                <div class="col-lg-4">
                    <!-- Service Sidebar Start -->
                    <div class="service-sidebar">
                        <!-- Services List Start -->
                        <div class="service-sidebar-item">
                            <h3>Our Services</h3>
                            <ul class="service-sidebar-list">
                                <li class="{{ $service == 'strategy-development' ? 'active' : '' }}">
                                    <a href="{{ route('services.show', 'strategy-development') }}">Strategy Development</a>
                                </li>
                                <li class="{{ $service == 'content-creation' ? 'active' : '' }}">
                                    <a href="{{ route('services.show', 'content-creation') }}">Content Creation</a>
                                </li>
                                <li class="{{ $service == 'account-management' ? 'active' : '' }}">
                                    <a href="{{ route('services.show', 'account-management') }}">Account Management</a>
                                </li>
                                <li class="{{ $service == 'analytics-reporting' ? 'active' : '' }}">
                                    <a href="{{ route('services.show', 'analytics-reporting') }}">Analytics & Reporting</a>
                                </li>
                                <li class="{{ $service == 'paid-advertising' ? 'active' : '' }}">
                                    <a href="{{ route('services.show', 'paid-advertising') }}">Paid Advertising</a>
                                </li>
                                <li class="{{ $service == 'consultation' ? 'active' : '' }}">
                                    <a href="{{ route('services.show', 'consultation') }}">Consultation</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Services List End -->

                        <!-- Service CTA Start -->
                        <div class="service-sidebar-item service-cta">
                            <div class="service-cta-bg">
                                <div class="service-cta-content">
                                    <div class="service-cta-icon">
                                        <img src="{{ asset('images/icon-sidebar-cta.svg') }}" alt="">
                                    </div>
                                    <h3>Need Help?</h3>
                                    <p>Contact us for a free consultation and see how we can help your business grow.</p>
                                    <div class="service-cta-phone">
                                        <div class="service-cta-phone-icon">
                                            <img src="{{ asset('images/icon-sidebar-cta-phone.svg') }}" alt="">
                                        </div>
                                        <div class="service-cta-phone-content">
                                            <p>Call us now</p>
                                            <h4><a href="tel:+123456789">+123 456 789</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service CTA End -->
                    </div>
                    <!-- Service Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Service Details Section End -->

    @include('layouts.partials.cta-section')

@endsection