@extends('layouts.theme')

@section('title', 'Blog - Social Media Marketing Insights & Tips')
@section('meta_description', 'Read our latest blog posts about social media marketing, digital strategies, and business growth tips.')
@section('meta_keywords', 'social media blog, marketing tips, digital marketing, social media strategies, business growth')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Blog</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">our blog</li>
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

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                @php
                    $blogPosts = [
                        [
                            'id' => 1,
                            'title' => 'How to Craft Engaging Content for Instagram',
                            'image' => 'post-1.jpg',
                            'slug' => 'how-to-craft-engaging-content-for-instagram',
                            'delay' => '0s'
                        ],
                        [
                            'id' => 2,
                            'title' => 'Social Media Myths You Need to Ignore',
                            'image' => 'post-2.jpg',
                            'slug' => 'social-media-myths-you-need-to-ignore',
                            'delay' => '0.2s'
                        ],
                        [
                            'id' => 3,
                            'title' => 'Effective Hashtag Strategies to Increase Reach',
                            'image' => 'post-3.jpg',
                            'slug' => 'effective-hashtag-strategies-to-increase-reach',
                            'delay' => '0.4s'
                        ],
                        [
                            'id' => 4,
                            'title' => 'How to Choose the Right Social Media Platforms for Your Brand',
                            'image' => 'post-4.jpg',
                            'slug' => 'how-to-choose-the-right-social-media-platforms',
                            'delay' => '0.6s'
                        ],
                        [
                            'id' => 5,
                            'title' => 'Navigating the Digital Landscape Tips for Small Businesses',
                            'image' => 'post-5.jpg',
                            'slug' => 'navigating-digital-landscape-tips-for-small-businesses',
                            'delay' => '0.8s'
                        ],
                        [
                            'id' => 6,
                            'title' => 'Building Brand Authority Through Strategic Content',
                            'image' => 'post-6.jpg',
                            'slug' => 'building-brand-authority-through-strategic-content',
                            'delay' => '1s'
                        ],
                        [
                            'id' => 7,
                            'title' => 'The Future of Social Media Marketing Trends',
                            'image' => 'post-1.jpg',
                            'slug' => 'future-of-social-media-marketing-trends',
                            'delay' => '1.2s'
                        ],
                        [
                            'id' => 8,
                            'title' => 'Maximizing ROI with Data-Driven Social Strategies',
                            'image' => 'post-2.jpg',
                            'slug' => 'maximizing-roi-with-data-driven-social-strategies',
                            'delay' => '1.4s'
                        ],
                        [
                            'id' => 9,
                            'title' => 'Creating Viral Content That Actually Converts',
                            'image' => 'post-3.jpg',
                            'slug' => 'creating-viral-content-that-actually-converts',
                            'delay' => '1.6s'
                        ]
                    ];
                @endphp

                @foreach($blogPosts as $post)
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="{{ $post['delay'] }}">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blog.show', $post['slug']) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/' . $post['image']) }}" alt="{{ $post['title'] }}">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <div class="blog-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="{{ route('blog.show', $post['slug']) }}">{{ $post['title'] }}</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="blog-item-btn">
                                <a href="{{ route('blog.show', $post['slug']) }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>
                @endforeach
            </div>

            <!-- Pagination Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-wrap">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Pagination End -->
        </div>
    </div>
    <!-- Page Blog End -->

@endsection