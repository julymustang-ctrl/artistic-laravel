@extends('layouts.theme')

@section('title', 'About Us - Artistic Social Media Marketing Agency')
@section('meta_description', 'Learn about our social media marketing agency, our team, and our mission to transform brands with powerful social media strategies.')
@section('meta_keywords', 'about us, social media agency, marketing team, company history, mission, vision')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">About <span>us</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- About Box Start -->
                    <div class="about-us-box">
                        <!-- About Us Images Start -->
                        <div class="about-us-image">
                            <!-- About Us Image Start -->
                            <div class="about-us-img">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('images/about-us-image.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image End -->

                            <!-- About Experience Box Start -->
                            <div class="about-experience-box">
                                <div class="about-experience-counter">
                                    <h2><span class="counter">25</span>+</h2>
                                </div>
                                <div class="about-experience-content wow fadeInUp">
                                    <p>Years of experience <span>Social media marketing</span></p>
                                </div>
                            </div>
                            <!-- About Experience Box End -->
                        </div>
                        <!-- About Us Images End -->

                        <!-- About Us Content Start -->
                        <div class="about-us-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">About us</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Transforming brands with <span>social media</span></h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- About Us Body Start -->
                            <div class="about-us-body wow fadeInUp" data-wow-delay="0.2s">
                                <p>Revolutionizing Brand Identity Through Creative Social Media Strategies That Drive Engagement, Build Connections, and Deliver Results Empowering Businesses to Stand Out, Reach Their Audience.</p>
                            </div>
                            <!-- About Us Body End -->

                            <!-- About Us Footer Start -->
                            <div class="about-us-footer wow fadeInUp" data-wow-delay="0.4s">
                                <!-- About Us Button Start -->
                                <div class="about-us-btn">
                                    <a href="{{ route('contact') }}" class="btn-default">get in touch</a>
                                </div>
                                <!-- About Us Button End -->

                                <!-- About Author Info Start -->
                                <div class="about-author-info">
                                    <!-- About Author Image Start -->
                                    <div class="about-author-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('images/author-image.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <!-- About Author Image End -->

                                    <!-- About Author Content Start -->
                                    <div class="about-author-content">
                                        <h3>Sarah Mitchell</h3>
                                        <p>Marketing Director</p>
                                    </div>
                                    <!-- About Author Content End -->
                                </div>
                                <!-- About Author Info End -->
                            </div>
                            <!-- About Us Footer End -->
                            
                            <!-- About Us List Start -->
                            <div class="about-us-list">
                                <!-- About List Item Start -->
                                <div class="about-list-item wow fadeInUp">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-about-list-item-1.svg') }}" alt="">
                                    </div>
                                    <div class="about-list-content">
                                        <h3>tailored marketing solutions</h3>
                                    </div>
                                </div>
                                <!-- About List Item End -->

                                <!-- About List Item Start -->
                                <div class="about-list-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-about-list-item-2.svg') }}" alt="">
                                    </div>
                                    <div class="about-list-content">
                                        <h3>proactive trends tracking</h3>
                                    </div>
                                </div>
                                <!-- About List Item End -->

                                <!-- About List Item Start -->
                                <div class="about-list-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-about-list-item-3.svg') }}" alt="">
                                    </div>
                                    <div class="about-list-content">
                                        <h3>analytical performance optimization</h3>
                                    </div>
                                </div>
                                <!-- About List Item End -->
                            </div>
                            <!-- About Us List End -->
                        </div>
                        <!-- About Us Content End -->
                    </div>
                    <!-- About Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    @include('layouts.partials.our-agency-section')
    @include('layouts.partials.team-section')
    @include('layouts.partials.testimonials-section')

@endsection