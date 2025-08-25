@extends('layouts.theme')

@section('title', 'Our Projects - Social Media Marketing Portfolio')
@section('meta_description', 'View our portfolio of successful social media marketing projects including web design, branding, digital marketing campaigns, and SEO analytics.')
@section('meta_keywords', 'social media projects, marketing portfolio, web design, branding, digital marketing, SEO analytics')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Projects</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">our projects</li>
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

    <!-- Page Project Start -->
    <div class="page-project">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- Choose Our Project Nav start -->
                    <div class="our-Project-nav wow fadeInUp" data-wow-delay="0.25s">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">all</a></li>
                            <li><a href="#" data-filter=".branding">Branding & Identity</a></li>
                            <li><a href="#" data-filter=".web">Web Design</a></li>
                            <li><a href="#" data-filter=".digital">Digital Marketing</a></li>
                            <li><a href="#" data-filter=".analytics">SEO & Analytics</a></li>
                        </ul>
                    </div>
                    <!-- Choose Our Project Nav End -->
                </div>

                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center">
                        @php
                            $projects = [
                                [
                                    'id' => 1,
                                    'title' => 'Dynamic E-commerce Platform',
                                    'image' => 'project-1.jpg',
                                    'category' => 'Web Design',
                                    'slug' => 'dynamic-ecommerce-platform',
                                    'classes' => 'branding web analytics',
                                    'delay' => '0s'
                                ],
                                [
                                    'id' => 2,
                                    'title' => 'Innovative Identity Design',
                                    'image' => 'project-2.jpg',
                                    'category' => 'Digital Marketing',
                                    'slug' => 'innovative-identity-design',
                                    'classes' => 'web digital',
                                    'delay' => '0s'
                                ],
                                [
                                    'id' => 3,
                                    'title' => 'Dynamic Digital Campaign',
                                    'image' => 'project-3.jpg',
                                    'category' => 'SEO & Analytics',
                                    'slug' => 'dynamic-digital-campaign',
                                    'classes' => 'digital branding analytics',
                                    'delay' => '0.2s'
                                ],
                                [
                                    'id' => 4,
                                    'title' => 'Impactful Content Creation',
                                    'image' => 'project-4.jpg',
                                    'category' => 'Branding & Identity',
                                    'slug' => 'impactful-content-creation',
                                    'classes' => 'branding analytics',
                                    'delay' => '0.4s'
                                ],
                                [
                                    'id' => 5,
                                    'title' => 'Visionary Growth Strategy',
                                    'image' => 'project-5.jpg',
                                    'category' => 'Web Design',
                                    'slug' => 'visionary-growth-strategy',
                                    'classes' => 'web branding',
                                    'delay' => '0.6s'
                                ],
                                [
                                    'id' => 6,
                                    'title' => 'Interactive Website Redesign',
                                    'image' => 'project-6.jpg',
                                    'category' => 'Branding & Identity',
                                    'slug' => 'interactive-website-redesign',
                                    'classes' => 'digital',
                                    'delay' => '0.8s'
                                ],
                                [
                                    'id' => 7,
                                    'title' => 'Digital Solutions Platform',
                                    'image' => 'project-7.jpg',
                                    'category' => 'Web Design',
                                    'slug' => 'digital-solutions-platform',
                                    'classes' => 'branding web analytics',
                                    'delay' => '0s'
                                ],
                                [
                                    'id' => 8,
                                    'title' => 'Smart Process Optimization',
                                    'image' => 'project-8.jpg',
                                    'category' => 'Digital Marketing',
                                    'slug' => 'smart-process-optimization',
                                    'classes' => 'web digital',
                                    'delay' => '0s'
                                ],
                                [
                                    'id' => 9,
                                    'title' => 'Future Leaders Program',
                                    'image' => 'project-9.jpg',
                                    'category' => 'SEO & Analytics',
                                    'slug' => 'future-leaders-program',
                                    'classes' => 'digital analytics',
                                    'delay' => '0.2s'
                                ]
                            ];
                        @endphp

                        @foreach($projects as $project)
                        <div class="col-lg-4 col-md-6 project-item-box {{ $project['classes'] }}">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="{{ $project['delay'] }}">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['title'] }}">
                                    </figure>

                                    <div class="project-tag">
                                        <a href="{{ route('projects.show', $project['slug']) }}">{{ strtolower($project['category']) }}</a>
                                    </div>   

                                    <div class="project-btn">
                                        <a href="{{ route('projects.show', $project['slug']) }}"><img src="{{ asset('images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>                                                           
                                
                                <div class="project-content">
                                    <h3>{{ $project['title'] }}</h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                        @endforeach
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Project End -->

@endsection

@push('scripts')
<script>
    // Isotope filter functionality
    $(document).ready(function() {
        // Initialize Isotope
        var $grid = $('.project-item-boxes').isotope({
            itemSelector: '.project-item-box',
            layoutMode: 'fitRows'
        });

        // Filter items on button click
        $('.our-Project-nav ul li a').on('click', function(e) {
            e.preventDefault();
            var filterValue = $(this).attr('data-filter');
            
            // Remove active class from all buttons
            $('.our-Project-nav ul li a').removeClass('active-btn');
            // Add active class to clicked button
            $(this).addClass('active-btn');
            
            // Filter isotope
            $grid.isotope({ filter: filterValue });
        });
    });
</script>
@endpush