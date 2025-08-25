@extends('layouts.theme')

@section('title', $project['title'] ?? 'Project Details - Artistic Social Media Marketing')
@section('meta_description', $project['description'] ?? 'Explore our detailed project case study showcasing innovative digital marketing solutions and strategic implementations.')
@section('meta_keywords', 'project case study, digital marketing project, web design, branding, social media campaign')

@section('content')
    @php
        // Sample project data - in real application this would come from database
        $project = [
            'title' => 'Innovative Identity Design',
            'category' => 'Digital Marketing',
            'client' => 'Josefin H. Smith',
            'date' => '25 January, 2023',
            'duration' => '6 months',
            'image' => 'project-2.jpg',
            'slug' => request()->route('project') ?? 'project-details',
            'overview' => [
                'intro' => 'Innovative identity design goes beyond just creating a logo—it\'s about crafting a unique visual and emotional representation of your brand. We fuse creativity with strategy to develop a cohesive identity that reflects your brand\'s personality, values, and mission.',
                'description' => 'This cohesive identity not only enhances brand recognition but also ensures consistency across all platforms, building trust and emotional connection. With an innovative approach, we help your brand stand out, leaving a lasting impression that drives loyalty and growth.'
            ],
            'challenges' => [
                'intro' => 'When creating a detailed case study, it\'s important to provide comprehensive information that communicates the story of the project, including the challenges faced, the solutions implemented, and the achieved results.',
                'points' => [
                    'The digital agency landscape is highly competitive, requiring agencies to differentiate themselves.',
                    'With a focus on technology, digital agencies have teams skilled in web development.'
                ]
            ],
            'solution' => [
                'intro' => 'Our innovative identity design solution crafted a distinctive visual identity that perfectly reflects the brand\'s values and mission. Through a cohesive logo, color palette, and typography, we delivered a unified brand experience that enhances recognition, builds trust, and sets the brand apart.',
                'description1' => 'When creating a detailed case study, it\'s important to provide comprehensive information that communicates.',
                'description2' => 'It\'s important to provide comprehensive information that communicates the story of the project, including the challenges faced, the solutions implemented, and the achieved results.',
                'success_rate' => 93
            ]
        ];
    @endphp

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ Str::limit($project['title'], 25) }} <span>...</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">projects</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($project['title'], 30) }}...</li>
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

    <!-- Page Project Single Start -->
    <div class="page-project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Project Single Content Start -->
                    <div class="project-single-content">
                        <!-- Project Single Image Start -->
                        <div class="project-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['title'] }}">
                            </figure>
                        </div>
                        <!-- Project Single Image End -->

                        <!-- Project Entry Start -->
                        <div class="project-entry">
                            <!-- Project Info Start -->
                            <div class="project-info">
                                <h2 class="text-anime-style-2">Project <span>overview</span></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $project['overview']['intro'] }}</p>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">{{ $project['overview']['description'] }}</p>
                            </div>
                            <!-- Project Info End -->

                            <!-- Project Challenges Start -->
                            <div class="project-challenges">
                                <h2 class="text-anime-style-2">Challenges & <span>constraints</span></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $project['challenges']['intro'] }}</p>

                                <!-- Project Entry List Start -->
                                <ul class="wow fadeInUp" data-wow-delay="0.4s">
                                    @foreach($project['challenges']['points'] as $point)
                                    <li>{{ $point }}</li>
                                    @endforeach
                                </ul>
                                <!-- Project Entry List End -->
                            </div>
                            <!-- Project Challenges End -->
                            
                            <!-- Project Solution Start -->
                            <div class="project-solution">
                                <h2 class="text-anime-style-2">Projects <span>solution</span></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $project['solution']['intro'] }}</p>

                                <!-- Project Solution Rating Start -->
                                <div class="project-solution-rating">
                                    <!-- Project Rating Content Start -->
                                    <div class="project-rating-content">
                                        <p class="wow fadeInUp" data-wow-delay="0.4s">{{ $project['solution']['description1'] }}</p>                                      
                                        <p class="wow fadeInUp" data-wow-delay="0.6s">{{ $project['solution']['description2'] }}</p>
                                    </div>
                                    <!-- Project Rating Content End -->

                                    <!-- Project Rating Counter Start -->
                                    <div class="project-rating-counter">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <div class="project-counter-content">
                                            <h3><span class="counter">{{ $project['solution']['success_rate'] }}</span>%</h3>
                                            <p>Success Rate</p>
                                        </div>
                                    </div>
                                    <!-- Project Rating Counter End -->
                                </div>
                                <!-- Project Solution Rating End -->
                            </div>
                            <!-- Project Solution End -->
                        </div>
                        <!-- Project Entry End -->

                        <!-- Our FAQs Section Start -->
                        <div class="our-faq-section">
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Lets address your <span>questions</span> today!</h2>
                            </div>
    
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="faqaccordion">
                                @php
                                    $faqs = [
                                        [
                                            'id' => 1,
                                            'question' => 'What is Social Media Marketing?',
                                            'answer' => 'We specialize in major platforms like Facebook, Instagram, Twitter, LinkedIn Pinterest, tailoring strategy to each platform\'s unique audience.',
                                            'active' => false
                                        ],
                                        [
                                            'id' => 2,
                                            'question' => 'Which platforms do you specialize in?',
                                            'answer' => 'We specialize in major platforms like Facebook, Instagram, Twitter, LinkedIn Pinterest, tailoring strategy to each platform\'s unique audience.',
                                            'active' => true
                                        ],
                                        [
                                            'id' => 3,
                                            'question' => 'How long before I see results?',
                                            'answer' => 'We specialize in major platforms like Facebook, Instagram, Twitter, LinkedIn Pinterest, tailoring strategy to each platform\'s unique audience.',
                                            'active' => false
                                        ],
                                        [
                                            'id' => 4,
                                            'question' => 'Do you offer content creation?',
                                            'answer' => 'We specialize in major platforms like Facebook, Instagram, Twitter, LinkedIn Pinterest, tailoring strategy to each platform\'s unique audience.',
                                            'active' => false
                                        ],
                                        [
                                            'id' => 5,
                                            'question' => 'What industries do you work with?',
                                            'answer' => 'We specialize in major platforms like Facebook, Instagram, Twitter, LinkedIn Pinterest, tailoring strategy to each platform\'s unique audience.',
                                            'active' => false
                                        ]
                                    ];
                                @endphp

                                @foreach($faqs as $index => $faq)
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" @if($index > 0) data-wow-delay="{{ $index * 0.2 }}s" @endif>
                                    <h2 class="accordion-header" id="heading{{ $faq['id'] }}">
                                        <button class="accordion-button {{ $faq['active'] ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq['id'] }}" aria-expanded="{{ $faq['active'] ? 'true' : 'false' }}" aria-controls="collapse{{ $faq['id'] }}">
                                            {{ $faq['question'] }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $faq['id'] }}" class="accordion-collapse collapse {{ $faq['active'] ? 'show' : '' }}" aria-labelledby="heading{{ $faq['id'] }}" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>{{ $faq['answer'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                                @endforeach
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- Our FAQ Section End -->
                    </div>
                    <!-- Project Single Content End -->
                </div>

                <div class="col-lg-4">
                    <!-- Project Sidebar Start -->
                    <div class="project-sidebar">
                        <!-- Project Category List Start -->
                        <div class="project-catagery-list wow fadeInUp">
                            <!-- Category Item List Start -->
                            <div class="category-item-list">
                                <div class="category-list-item">
                                    <h3>project name</h3>
                                    <p>{{ $project['title'] }}</p>
                                </div>
                                <div class="category-list-item">
                                    <h3>Category</h3>
                                    <p>{{ $project['category'] }}</p>
                                </div>
                                <div class="category-list-item">
                                    <h3>clients</h3>
                                    <p>{{ $project['client'] }}</p>
                                </div>
                                <div class="category-list-item">
                                    <h3>date</h3>
                                    <p>{{ $project['date'] }}</p>
                                </div>
                                <div class="category-list-item">
                                    <h3>duration</h3>
                                    <p>{{ $project['duration'] }}</p>
                                </div>
                            </div>
                            <!-- Category Item List End -->
                            
                            <!-- Category Social Link Start -->
                            <div class="category-social-link">
                                <span>Share:</span>
                                <ul>
                                    <li><a href="https://pinterest.com/pin/create/button/?url={{ url()->current() }}" target="_blank"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ urlencode($project['title']) }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Category Social Link End -->
                        </div>
                        <!-- Project Category List End -->

                        <!-- Sidebar Cta Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-sidebar-cta.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- CTA Contact Content Start -->
                            <div class="cta-contact-content">
                                <h3>You have different questions?</h3>
                                <p>Our team will answer all your questions. we ensure a quick response.</p>
                            </div>
                            <!-- CTA Contact Content End -->

                            <!-- CTA Contact Button Start -->
                            <div class="cta-contact-btn">
                                <a href="tel:{{ config('app.contact.phone', '+123456789') }}"><img src="{{ asset('images/icon-sidebar-cta-phone.svg') }}" alt=""> {{ config('app.contact.phone', '+123456789') }}</a>
                            </div>
                            <!-- CTA Contact Button End -->
                        </div>
                        <!-- Sidebar Cta Box End -->
                    </div>
                    <!-- Project Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Project Single End -->

@endsection