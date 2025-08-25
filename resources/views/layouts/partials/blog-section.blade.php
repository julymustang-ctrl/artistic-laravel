<!-- Blog Section Start -->
<div class="our-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Our blog</h3>
                    <h2 class="text-anime-style-2">Latest <span>insights</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @php
                $blogPosts = [
                    [
                        'title' => 'How to Create Engaging Social Media Content',
                        'image' => 'post-1.jpg',
                        'excerpt' => 'Learn the secrets to creating content that captivates your audience and drives engagement.',
                        'date' => 'March 15, 2024',
                        'author' => 'Sarah Mitchell',
                        'slug' => 'engaging-social-media-content',
                        'delay' => '0s'
                    ],
                    [
                        'title' => 'The Future of Social Media Marketing',
                        'image' => 'post-2.jpg',
                        'excerpt' => 'Discover upcoming trends and technologies shaping the social media landscape.',
                        'date' => 'March 12, 2024',
                        'author' => 'John Davis',
                        'slug' => 'future-social-media-marketing',
                        'delay' => '0.2s'
                    ],
                    [
                        'title' => 'Maximizing ROI with Social Media Ads',
                        'image' => 'post-3.jpg',
                        'excerpt' => 'Proven strategies to optimize your social media advertising campaigns for better returns.',
                        'date' => 'March 10, 2024',
                        'author' => 'Emma Wilson',
                        'slug' => 'maximizing-roi-social-media',
                        'delay' => '0.4s'
                    ]
                ];
            @endphp

            @foreach($blogPosts as $post)
            <div class="col-lg-4 col-md-6">
                <!-- Blog Post Item Start -->
                <div class="blog-item wow fadeInUp" data-wow-delay="{{ $post['delay'] }}">
                    <div class="blog-image">
                        <figure class="image-anime">
                            <img src="{{ asset('images/' . $post['image']) }}" alt="{{ $post['title'] }}">
                        </figure>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="date">{{ $post['date'] }}</span>
                            <span class="author">By {{ $post['author'] }}</span>
                        </div>
                        <h3><a href="{{ route('blog.show', $post['slug']) }}">{{ $post['title'] }}</a></h3>
                        <p>{{ $post['excerpt'] }}</p>
                        <a href="{{ route('blog.show', $post['slug']) }}" class="readmore-btn">read more</a>
                    </div>
                </div>
                <!-- Blog Post Item End -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog Section End -->