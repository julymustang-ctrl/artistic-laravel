<!-- Testimonials Section Start -->
<div class="our-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Testimonials</h3>
                    <h2 class="text-anime-style-2">What our <span>clients say</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @php
                $testimonials = [
                    [
                        'name' => 'John Smith',
                        'position' => 'CEO, Tech Company',
                        'image' => 'author-1.jpg',
                        'content' => 'Excellent service and outstanding results. Our social media presence has never been stronger.',
                        'rating' => 5,
                        'delay' => '0s'
                    ],
                    [
                        'name' => 'Sarah Johnson',
                        'position' => 'Marketing Director',
                        'image' => 'author-2.jpg',
                        'content' => 'Professional team that delivers on their promises. Highly recommend their services.',
                        'rating' => 5,
                        'delay' => '0.2s'
                    ]
                ];
            @endphp

            @foreach($testimonials as $testimonial)
            <div class="col-lg-6">
                <!-- Testimonial Item Start -->
                <div class="testimonial-item wow fadeInUp" data-wow-delay="{{ $testimonial['delay'] }}">
                    <div class="client-info">
                        <div class="client-image">
                            <img src="{{ asset('images/' . $testimonial['image']) }}" alt="{{ $testimonial['name'] }}">
                        </div>
                        <div class="client-content">
                            <h3>{{ $testimonial['name'] }}</h3>
                            <p>{{ $testimonial['position'] }}</p>
                            <div class="rating">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fa fa-star{{ $i <= $testimonial['rating'] ? '' : '-o' }}"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>"{{ $testimonial['content'] }}"</p>
                    </div>
                </div>
                <!-- Testimonial Item End -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonials Section End -->