@extends('layouts.theme')

@section('title', $post['title'] ?? 'Blog Post - Artistic Social Media Marketing')
@section('meta_description', $post['excerpt'] ?? 'Read our latest insights about social media marketing and digital strategies.')
@section('meta_keywords', 'social media marketing, digital marketing, blog post, social media tips')

@section('content')
    @php
        // Sample blog post data - in real application this would come from database
        $post = [
            'title' => 'How to Craft Engaging Content for Instagram',
            'image' => 'post-1.jpg',
            'content' => [
                'intro' => 'In today\'s digital age, having a mobile-optimized website is no longer optional—it\'s essential for the success of your business. With over half of global web traffic coming from mobile devices, consumers expect fast, seamless, and user-friendly experiences when browsing on their smartphones or tablets.',
                'body1' => 'A mobile-optimized website ensures that your site is responsive and adapts to any screen size, providing easy navigation, readable content, and fast loading times. This not only improves user experience but also boosts your site\'s search engine rankings, as search engines like Google prioritize mobile-friendly websites in their results.',
                'quote' => 'Unlock the Full Potential of Your Business with a Mobile-Optimized Website: Enhance User Experience, Boost SEO Rankings, and Increase Conversions to Stay Competitive in the Mobile-First Digital Landscape of Tomorrow.',
                'body2' => 'Mobile optimization also opens the door for more opportunities to reach your target audience, especially as mobile commerce (m-commerce) continues to grow. Whether your business focuses on e-commerce, lead generation, or brand awareness, ensuring your website performs.',
                'subtitle' => 'Maximize success with mobile optimization',
                'body3' => 'A mobile-optimized website is crucial for delivering a seamless user experience across all devices. It enhances your site\'s functionality, improves search engine rankings, and boosts conversions by catering to the growing number of mobile users.',
                'list' => [
                    'Enhance user experience across devices with mobile optimization',
                    'Stay competitive in the mobile-first era: the importance of mobile optimization',
                    'How mobile optimization improves engagement and reduces bounce rates',
                    'Improve load times and performance with mobile-optimized websites',
                    'Future-proof your business with a mobile-optimized digital presence'
                ],
                'conclusion' => 'Maximizing your business success starts with optimizing your website for mobile devices. A mobile-optimized site provides users with a smooth, responsive experience, improving navigation, readability, and speed.'
            ],
            'tags' => ['Optimize', 'Digital', 'Creative'],
            'slug' => request()->route('slug') ?? 'blog-post'
        ];
    @endphp

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ Str::limit($post['title'], 25) }} <span>...</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($post['title'], 30) }}...</li>
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

    <!-- Page Single Post Start -->
    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Post Featured Image Start -->
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('images/' . $post['image']) }}" alt="{{ $post['title'] }}">
                        </figure>
                    </div>
                    <!-- Post Featured Image Start -->

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            <p class="wow fadeInUp">{{ $post['content']['intro'] }}</p>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $post['content']['body1'] }}</p>
                            
                            <blockquote class="wow fadeInUp" data-wow-delay="0.4s">
                                <p>{{ $post['content']['quote'] }}</p>
                            </blockquote>

                            <p class="wow fadeInUp" data-wow-delay="0.6s">{{ $post['content']['body2'] }}</p>

                            <h2 class="wow fadeInUp" data-wow-delay="0.8s">{{ $post['content']['subtitle'] }}</h2>

                            <p class="wow fadeInUp" data-wow-delay="1s">{{ $post['content']['body3'] }}</p>

                            <ul class="wow fadeInUp" data-wow-delay="1.2s">
                                @foreach($post['content']['list'] as $item)
                                <li>{{ $item }}</li>
                                @endforeach
                            </ul>

                            <p class="wow fadeInUp" data-wow-delay="1.4s">{{ $post['content']['conclusion'] }}</p>
                        </div>
                        <!-- Post Entry End -->

                        <!-- Post Tag Links Start -->
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Post Tags Start -->
                                    <div class="post-tags wow fadeInUp" data-wow-delay="0.5s">
                                        <span class="tag-links">
                                            Tags:
                                            @foreach($post['tags'] as $tag)
                                            <a href="#">{{ $tag }}</a>
                                            @endforeach
                                        </span>
                                    </div>
                                    <!-- Post Tags End -->
                                </div>

                                <div class="col-lg-4">
                                    <!-- Post Social Links Start -->
                                    <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                                        <ul>
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->current() }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ urlencode($post['title']) }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Post Social Links End -->
                                </div>
                            </div>
                        </div>
                        <!-- Post Tag Links End -->

                        <!-- Related Posts Start -->
                        <div class="related-posts">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="wow fadeInUp">Related Posts</h3>
                                </div>
                            </div>
                            <div class="row">
                                @php
                                    $relatedPosts = [
                                        [
                                            'title' => 'Social Media Myths You Need to Ignore',
                                            'image' => 'post-2.jpg',
                                            'slug' => 'social-media-myths-you-need-to-ignore'
                                        ],
                                        [
                                            'title' => 'Effective Hashtag Strategies to Increase Reach',
                                            'image' => 'post-3.jpg',
                                            'slug' => 'effective-hashtag-strategies-to-increase-reach'
                                        ],
                                        [
                                            'title' => 'Building Brand Authority Through Strategic Content',
                                            'image' => 'post-4.jpg',
                                            'slug' => 'building-brand-authority-through-strategic-content'
                                        ]
                                    ];
                                @endphp

                                @foreach($relatedPosts as $index => $relatedPost)
                                <div class="col-lg-4 col-md-6">
                                    <!-- Post Item Start -->
                                    <div class="post-item wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                                        <!-- Post Featured Image Start-->
                                        <div class="post-featured-image">
                                            <a href="{{ route('blog.show', $relatedPost['slug']) }}" data-cursor-text="View">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('images/' . $relatedPost['image']) }}" alt="{{ $relatedPost['title'] }}">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Post Featured Image End -->

                                        <div class="blog-item-body">
                                            <!-- Post Item Content Start -->
                                            <div class="post-item-content">
                                                <h3><a href="{{ route('blog.show', $relatedPost['slug']) }}">{{ $relatedPost['title'] }}</a></h3>
                                            </div>
                                            <!-- Post Item Content End -->

                                            <!-- Blog Item Button Start -->
                                            <div class="blog-item-btn">
                                                <a href="{{ route('blog.show', $relatedPost['slug']) }}" class="readmore-btn">read more</a>
                                            </div>
                                            <!-- Blog Item Button End -->
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Related Posts End -->
                    </div>
                    <!-- Post Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Single Post End -->

@endsection