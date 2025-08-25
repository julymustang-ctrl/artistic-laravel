<!-- Why Choose Section Start -->
<div class="why-choose-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Why choose us</h3>
                    <h2 class="text-anime-style-2">What makes us the <span>perfect choice</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @php
                $reasons = [
                    [
                        'icon' => 'icon-why-choose-1.svg',
                        'title' => 'Expert Team',
                        'description' => 'Our experienced professionals deliver exceptional results.',
                        'delay' => '0s'
                    ],
                    [
                        'icon' => 'icon-why-choose-2.svg',
                        'title' => 'Proven Results',
                        'description' => 'Track record of successful campaigns and satisfied clients.',
                        'delay' => '0.2s'
                    ],
                    [
                        'icon' => 'icon-why-choose-3.svg',
                        'title' => '24/7 Support',
                        'description' => 'Round-the-clock support for all your marketing needs.',
                        'delay' => '0.4s'
                    ]
                ];
            @endphp

            @foreach($reasons as $reason)
            <div class="col-lg-4 col-md-6">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="{{ $reason['delay'] }}">
                    <div class="icon-box">
                        <img src="{{ asset('images/' . $reason['icon']) }}" alt="">
                    </div>
                    <div class="why-choose-content">
                        <h3>{{ $reason['title'] }}</h3>
                        <p>{{ $reason['description'] }}</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Why Choose Section End -->