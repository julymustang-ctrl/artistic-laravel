@extends('layouts.theme')

@section('title', ($member['name'] ?? 'Team Member') . ' - Artistic Social Media Marketing')
@section('meta_description', 'Get to know ' . ($member['name'] ?? 'our team member') . ', ' . ($member['position'] ?? 'marketing professional') . ' at our social media marketing agency.')
@section('meta_keywords', 'team member, social media expert, marketing professional, contact team member')

@section('content')
    @php
        // Sample team member data - in real application this would come from database
        $member = [
            'name' => 'Savannah Nguyen',
            'position' => 'Influencer Marketing Coordinator',
            'image' => 'team-2.jpg',
            'slug' => request()->route('member') ?? 'team-member',
            'contact' => [
                'phone' => '1123 445 7890',
                'email' => 'savannah@artisticagency.com',
                'address' => '123 Creative Lane London, SW1A 1AA United Kingdom'
            ],
            'social' => [
                'facebook' => '#',
                'instagram' => '#',
                'pinterest' => '#'
            ],
            'bio' => [
                'intro' => 'I am a dedicated professional with over 5 years of experience in digital marketing, currently serving as Influencer Marketing Coordinator. My passion for innovation and creative storytelling drives my approach to building meaningful brand connections.',
                'description' => 'As the Influencer Marketing Coordinator, I lead strategic efforts to elevate brand awareness and drive growth through innovative marketing campaigns. With a passion for storytelling and data-driven insights, I oversee cross-channel marketing strategies, including digital, social media, and content creation, ensuring each initiative aligns with the brand\'s goals.',
                'conclusion' => 'My experience in building strong customer relationships and maximizing ROI helps guide our team toward delivering impactful, results-driven solutions that propel the business forward.'
            ],
            'career_guidelines' => [
                'intro' => 'As a Influencer Marketing Coordinator, your career path should be shaped by a combination of strategic vision, leadership, and a deep understanding of modern marketing practices. Key guidelines include:',
                'points' => [
                    'develop strategic expertise',
                    'embrace data-driven decision-making',
                    'hone leadership skills',
                    'stay current with digital trends',
                    'build strong brand narratives',
                    'cultivate cross-channel expertise'
                ]
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
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $member['name'] }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('team') }}">team</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $member['name'] }}</li>
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

    <!-- Page Team Single Start -->
    <div class="page-team-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-1 order-2">
                    <!-- Team Single Content Start -->
                    <div class="team-single-content">
                        <!-- Team Info Box Start -->
                        <div class="team-info-box">
                            <!-- Team Info Header Start -->
                            <div class="team-info-header">
                                <!-- Team Info Title Start -->
                                <div class="team-info-title">
                                    <p class="wow fadeInUp">{{ $member['position'] }}</p>
                                    <h2 class="wow fadeInUp" data-wow-delay="0.25s">{{ $member['name'] }}</h2>
                                </div>
                                <!-- Team Info Title End -->

                                <!-- Team Info Social List Start -->
                                <div class="team-info-social-list wow fadeInUp" data-wow-delay="0.25s">
                                    <ul>
                                        <li><a href="{{ $member['social']['facebook'] }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="{{ $member['social']['instagram'] }}"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="{{ $member['social']['pinterest'] }}"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Info Social List End -->
                            </div>
                            <!-- Team Info Header End -->

                            <!-- Team Contact List Start -->
                            <div class="team-contect-list">
                                <!-- Team Contact Box Start -->
                                <div class="team-contact-box wow fadeInUp">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-phone-accent.svg') }}" alt="">
                                    </div>

                                    <div class="team-contact-content">
                                        <h3>call</h3>
                                        <p>Mobile: {{ $member['contact']['phone'] }}</p>
                                    </div>
                                </div>
                                <!-- Team Contact Box End -->

                                <!-- Team Contact Box Start -->
                                <div class="team-contact-box wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-mail-accent.svg') }}" alt="">
                                    </div>

                                    <div class="team-contact-content">
                                        <h3>email address</h3>
                                        <p>{{ $member['contact']['email'] }}</p>
                                    </div>
                                </div>
                                <!-- Team Contact Box End -->

                                <!-- Team Contact Box Start -->
                                <div class="team-contact-box wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-location-accent.svg') }}" alt="">
                                    </div>

                                    <div class="team-contact-content">
                                        <h3>address</h3>
                                        <p>{{ $member['contact']['address'] }}</p>
                                    </div>
                                </div>
                                <!-- Team Contact Box End -->
                            </div>
                            <!-- Team Contact List End -->
                        </div>
                        <!-- Team Info Box End -->

                        <!-- Team Personal Info Start -->
                        <div class="team-personal-info">
                            <h2 class="text-anime-style-2">Personal <span>info</span></h2>
                            <p class="wow fadeInUp">{{ $member['bio']['intro'] }}</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $member['bio']['description'] }}</p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">{{ $member['bio']['conclusion'] }}</p>
                        </div>
                        <!-- Team Personal Info End -->

                        <!-- Team Career Guideline Start -->
                        <div class="team-career-guideline">
                            <h2 class="text-anime-style-2">Career <span>guidelines</span></h2>
                            <p class="wow fadeInUp">{{ $member['career_guidelines']['intro'] }}</p>

                            <!-- Team Career List Start -->
                            <div class="team-career-list wow fadeInUp" data-wow-delay="0.2s">
                                <ul>
                                    @foreach($member['career_guidelines']['points'] as $point)
                                    <li>{{ $point }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Team Career List End -->
                        </div>
                        <!-- Team Career Guideline end -->
                    </div>
                    <!-- Team Single Content End -->
                </div>
                
                <div class="col-lg-4 order-lg-2 order-1">
                    <!-- Team Single Sidebar Start -->
                    <div class="team-single-sidebar">
                        <!-- Team Single Image Start -->
                        <div class="team-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/' . $member['image']) }}" alt="{{ $member['name'] }}">
                            </figure>
                        </div>
                        <!-- Team Single Image End -->

                        <!-- Team Single Contact Form Start -->
                        <div class="team-single-contact-form wow fadeInUp" data-wow-delay="0.25s">
                            <h3>Contact <span>me</span></h3>

                            <!--Member Contact Form Start -->
                            <form id="contactForm" action="{{ route('contact.store') }}" method="POST" data-toggle="validator">
                                @csrf
                                <input type="hidden" name="team_member" value="{{ $member['name'] }}">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone No" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="4" placeholder="Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="contact-form-btn">
                                            <button type="submit" class="btn-default btn-highlighted">submit message</button>
                                            <div id="msgSubmit" class="h3 hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Member Contact Form End -->
                        </div>
                        <!-- Team Single Contact Form End -->
                    </div>
                    <!-- Team Single Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Team Single End -->

@endsection