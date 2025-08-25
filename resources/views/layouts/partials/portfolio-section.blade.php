<!-- Portfolio Section Start -->
<div class="our-portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Our portfolio</h3>
                    <h2 class="text-anime-style-2">Recent <span>projects</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @php
                $portfolioItems = [
                    [
                        'image' => 'portfolio-1.jpg',
                        'title' => 'Brand Strategy Campaign',
                        'category' => 'Social Media Marketing',
                        'delay' => '0s'
                    ],
                    [
                        'image' => 'portfolio-2.jpg',
                        'title' => 'Instagram Growth Strategy',
                        'category' => 'Content Creation',
                        'delay' => '0.2s'
                    ],
                    [
                        'image' => 'portfolio-3.jpg',
                        'title' => 'Facebook Ad Campaign',
                        'category' => 'Digital Advertising',
                        'delay' => '0.4s'
                    ]
                ];
            @endphp

            @foreach($portfolioItems as $item)
            <div class="col-lg-4 col-md-6">
                <!-- Portfolio Item Start -->
                <div class="portfolio-item wow fadeInUp" data-wow-delay="{{ $item['delay'] }}">
                    <div class="portfolio-image">
                        <figure class="image-anime">
                            <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}">
                        </figure>
                    </div>
                    <div class="portfolio-content">
                        <h3><a href="{{ route('projects.show', 'brand-strategy') }}">{{ $item['title'] }}</a></h3>
                        <p>{{ $item['category'] }}</p>
                    </div>
                </div>
                <!-- Portfolio Item End -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Portfolio Section End -->