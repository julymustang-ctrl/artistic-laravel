@extends('layouts.theme')

@section('title', 'Frequently Asked Questions - Social Media Marketing FAQs')
@section('meta_description', 'Find answers to common questions about our social media marketing services, pricing, project management, and content creation processes.')
@section('meta_keywords', 'frequently asked questions, social media marketing FAQ, pricing information, project management, content creation')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Frequently <span>asked</span> questions</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">frequently asked questions</li>
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

    <!-- Page Faqs Start -->
    <div class="page-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-1 order-2">
                    <!-- Page FAQs Category Start -->
                    <div class="page-faqs-catagery">
                        @php
                            $faqCategories = [
                                [
                                    'id' => 'general_information',
                                    'title' => 'General',
                                    'subtitle' => 'information',
                                    'accordion_id' => 'accordion',
                                    'faqs' => [
                                        [
                                            'id' => 'collapse1',
                                            'heading_id' => 'heading1',
                                            'question' => 'What types of social media marketing services do you offer?',
                                            'answer' => 'We offer comprehensive social media marketing services including strategy development, content creation, community management, paid advertising campaigns, influencer partnerships, analytics and reporting, and social media audits to boost your brand\'s online presence.',
                                            'delay' => '0s',
                                            'expanded' => false
                                        ],
                                        [
                                            'id' => 'collapse2',
                                            'heading_id' => 'heading2',
                                            'question' => 'How do I start a project with your company?',
                                            'answer' => 'Starting a project is simple! Contact us through our website or call us directly. We\'ll schedule a consultation to understand your goals, analyze your current social media presence, and create a customized strategy proposal that aligns with your business objectives.',
                                            'delay' => '0.2s',
                                            'expanded' => true
                                        ],
                                        [
                                            'id' => 'collapse3',
                                            'heading_id' => 'heading3',
                                            'question' => 'Do you offer a free, no obligation consultation?',
                                            'answer' => 'Yes! We provide a complimentary initial consultation where we assess your current social media strategy, identify opportunities for growth, and provide recommendations. This helps you understand our approach before making any commitment.',
                                            'delay' => '0.4s',
                                            'expanded' => false
                                        ],
                                        [
                                            'id' => 'collapse4',
                                            'heading_id' => 'heading4',
                                            'question' => 'Which social media platforms do you work with?',
                                            'answer' => 'We work with all major social media platforms including Facebook, Instagram, Twitter, LinkedIn, TikTok, YouTube, Pinterest, and emerging platforms. We help you choose the right platforms based on your target audience and business goals.',
                                            'delay' => '0.6s',
                                            'expanded' => false
                                        ]
                                    ]
                                ],
                                [
                                    'id' => 'content_creation_FAQ',
                                    'title' => 'Content',
                                    'subtitle' => 'creation',
                                    'accordion_id' => 'accordion1',
                                    'faqs' => [
                                        [
                                            'id' => 'collapse5',
                                            'heading_id' => 'heading5',
                                            'question' => 'How do you develop content strategies for different brands?',
                                            'answer' => 'We develop content strategies by analyzing your brand voice, target audience, industry trends, and competitor analysis. Our team creates content calendars, visual guidelines, and messaging frameworks that align with your brand identity and marketing goals.',
                                            'delay' => '0s',
                                            'expanded' => false
                                        ],
                                        [
                                            'id' => 'collapse6',
                                            'heading_id' => 'heading6',
                                            'question' => 'What factors affect content performance and engagement?',
                                            'answer' => 'Content performance depends on timing, visual appeal, relevance to audience, platform algorithms, hashtag strategy, consistency, and engagement tactics. We continuously monitor and optimize these factors to maximize your content\'s reach and engagement.',
                                            'delay' => '0.2s',
                                            'expanded' => true
                                        ],
                                        [
                                            'id' => 'collapse7',
                                            'heading_id' => 'heading7',
                                            'question' => 'Do you provide original graphics and video content?',
                                            'answer' => 'Absolutely! Our creative team produces original graphics, videos, animations, and other visual content tailored to your brand. We handle everything from concept development to final production, ensuring all content aligns with your brand guidelines.',
                                            'delay' => '0.4s',
                                            'expanded' => false
                                        ]
                                    ]
                                ],
                                [
                                    'id' => 'project_management_FAQ',
                                    'title' => 'Project',
                                    'subtitle' => 'management',
                                    'accordion_id' => 'accordion2',
                                    'faqs' => [
                                        [
                                            'id' => 'collapse8',
                                            'heading_id' => 'heading8',
                                            'question' => 'How do you handle project timelines and deliverables?',
                                            'answer' => 'We use project management tools to track progress, set clear milestones, and ensure timely delivery. You\'ll receive regular updates, and we maintain transparent communication throughout the entire project lifecycle.',
                                            'delay' => '0s',
                                            'expanded' => false
                                        ],
                                        [
                                            'id' => 'collapse9',
                                            'heading_id' => 'heading9',
                                            'question' => 'What reporting and analytics do you provide?',
                                            'answer' => 'We provide comprehensive monthly reports including engagement metrics, reach analysis, follower growth, website traffic from social media, conversion tracking, and ROI analysis. All reports include actionable insights and recommendations for improvement.',
                                            'delay' => '0.2s',
                                            'expanded' => true
                                        ]
                                    ]
                                ],
                                [
                                    'id' => 'pricing_payments_FAQ',
                                    'title' => 'Pricing &',
                                    'subtitle' => 'payments',
                                    'accordion_id' => 'accordion3',
                                    'faqs' => [
                                        [
                                            'id' => 'collapse10',
                                            'heading_id' => 'heading10',
                                            'question' => 'What are your pricing models for social media marketing?',
                                            'answer' => 'We offer flexible pricing models including monthly retainers, project-based pricing, and custom packages. Pricing depends on scope of services, number of platforms, content volume, and campaign complexity. Contact us for a personalized quote.',
                                            'delay' => '0s',
                                            'expanded' => false
                                        ],
                                        [
                                            'id' => 'collapse11',
                                            'heading_id' => 'heading11',
                                            'question' => 'What payment methods do you accept?',
                                            'answer' => 'We accept various payment methods including bank transfers, credit cards, PayPal, and online payment platforms. Payment terms are typically net 30 days, with flexible options available for long-term partnerships.',
                                            'delay' => '0.2s',
                                            'expanded' => true
                                        ],
                                        [
                                            'id' => 'collapse12',
                                            'heading_id' => 'heading12',
                                            'question' => 'Do you offer contract flexibility and cancellation options?',
                                            'answer' => 'Yes, we offer flexible contract terms. While we recommend minimum 3-6 month engagements for optimal results, we provide month-to-month options and reasonable cancellation policies. We believe in earning your business through results, not long-term locks.',
                                            'delay' => '0.4s',
                                            'expanded' => false
                                        ],
                                        [
                                            'id' => 'collapse13',
                                            'heading_id' => 'heading13',
                                            'question' => 'Are there any setup fees or hidden costs?',
                                            'answer' => 'We believe in transparent pricing with no hidden fees. Any setup costs, ad spend, or additional services are clearly outlined in our proposal. You\'ll know exactly what you\'re paying for before signing any agreement.',
                                            'delay' => '0.6s',
                                            'expanded' => false
                                        ]
                                    ]
                                ]
                            ];
                        @endphp

                        @foreach($faqCategories as $category)
                        <!-- FAQs section start -->
                        <div class="our-faq-section page-faq-accordion" id="{{ $category['id'] }}">
                            <div class="section-title">
                                <h2 class="text-anime-style-2">{{ $category['title'] }} <span>{{ $category['subtitle'] }}</span></h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="{{ $category['accordion_id'] }}">
                                @foreach($category['faqs'] as $faq)
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="{{ $faq['delay'] }}">
                                    <h2 class="accordion-header" id="{{ $faq['heading_id'] }}">
                                        <button class="accordion-button {{ $faq['expanded'] ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faq['id'] }}" aria-expanded="{{ $faq['expanded'] ? 'true' : 'false' }}" aria-controls="{{ $faq['id'] }}">
                                            {{ $faq['question'] }}
                                        </button>
                                    </h2>
                                    <div id="{{ $faq['id'] }}" class="accordion-collapse collapse {{ $faq['expanded'] ? 'show' : '' }}" aria-labelledby="{{ $faq['heading_id'] }}" data-bs-parent="#{{ $category['accordion_id'] }}">
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
                        <!-- FAQs section End -->
                        @endforeach
                    </div>  
                    <!-- Page FAQs Category End -->                  
                </div>

                <div class="col-lg-4 order-lg-2 order-1">
                    <!-- FAQs Sidebar Start -->
                    <div class="faq-sidebar">
                        <!-- FAQs Category List Start -->
                        <div class="faq-catagery-list wow fadeInUp">
                            <ul>
                                <li><a href="#general_information">general information</a></li>
                                <li><a href="#content_creation_FAQ">content creation FAQ</a></li>
                                <li><a href="#project_management_FAQ">project management FAQ</a></li>
                                <li><a href="#pricing_payments_FAQ">pricing & payments FAQ</a></li>
                            </ul>
                        </div>
                        <!-- FAQs Category List End -->

                        <!-- FAQ Contact Box Start -->
                        <div class="faq-contact-box wow fadeInUp" data-wow-delay="0.25s">
                            <div class="faq-contact-content">
                                <h3>Still have <span>questions?</span></h3>
                                <p>Can't find the answer you're looking for? Please contact our friendly team.</p>
                            </div>

                            <div class="faq-contact-btn">
                                <a href="{{ route('contact') }}" class="btn-default">get in touch</a>
                            </div>
                        </div>
                        <!-- FAQ Contact Box End -->
                    </div>
                    <!-- FAQs Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Faqs End -->

@endsection