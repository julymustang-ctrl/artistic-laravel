@extends('layouts.theme')

@section('title', 'Contact Us - Get in Touch with Our Social Media Marketing Team')
@section('meta_description', 'Contact our social media marketing experts for personalized solutions. Get in touch via phone, email, or visit our office for tailored marketing strategies.')
@section('meta_keywords', 'contact us, social media marketing contact, get in touch, marketing consultation, contact form')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span>us</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
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

    <!-- Contact Information Section Start -->
    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-mail.svg') }}" alt="">
                            </div>                            
                            <div class="contact-info-contant">
                                <p>Email us today for expert social media marketing solutions.</p>
                                <h3><a href="mailto:info@artisticsocial.com">info@artisticsocial.com</a></h3>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item active">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-phone.svg') }}" alt="">
                            </div>                            
                            <div class="contact-info-contant">
                                <p>Contact us to elevate your brand and achieve online success.</p>
                                <h3><a href="tel:+123456789">+123 456 789</a></h3>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-location.svg') }}" alt="">
                            </div>                            
                            <div class="contact-info-contant">
                                <p>Visit our office for personalized social media solutions.</p>
                                <h3>123 Creative Lane London, SW1A 1AA United Kingdom</h3>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Information Section End -->

    <!-- Contact Us Form Section Start -->
    <div class="contact-us-form">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Contact us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Get in <span>touch</span> with us</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Connect with our team for tailored social media marketing solutions that elevate your brand, engage your audience, and drive results.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Success/Error Messages -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-check-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-exclamation-circle me-2"></i>{{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <form id="contactForm" action="{{ route('contact.store') }}" method="POST" class="wow fadeInUp" data-wow-delay="0.2s">
                            @csrf
                            <div class="row">                                
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" 
                                           id="first_name" placeholder="First name" value="{{ old('first_name') }}" required>
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" 
                                           id="last_name" placeholder="Last name" value="{{ old('last_name') }}" required>
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" 
                                           id="phone" placeholder="Enter your mobile no." value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                                           id="email" placeholder="Enter your e-mail" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <select name="subject" class="form-control @error('subject') is-invalid @enderror" id="subject" required>
                                        <option value="">Select a subject</option>
                                        <option value="general_inquiry" {{ old('subject') == 'general_inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                        <option value="social_media_marketing" {{ old('subject') == 'social_media_marketing' ? 'selected' : '' }}>Social Media Marketing</option>
                                        <option value="content_creation" {{ old('subject') == 'content_creation' ? 'selected' : '' }}>Content Creation</option>
                                        <option value="digital_advertising" {{ old('subject') == 'digital_advertising' ? 'selected' : '' }}>Digital Advertising</option>
                                        <option value="brand_strategy" {{ old('subject') == 'brand_strategy' ? 'selected' : '' }}>Brand Strategy</option>
                                        <option value="partnership" {{ old('subject') == 'partnership' ? 'selected' : '' }}>Partnership Opportunity</option>
                                        <option value="support" {{ old('subject') == 'support' ? 'selected' : '' }}>Technical Support</option>
                                        <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" 
                                              id="message" rows="4" placeholder="Write message..." required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default" id="submitBtn">
                                        <span class="btn-text">submit message</span>
                                        <span class="btn-loading" style="display: none;">
                                            <i class="fa fa-spinner fa-spin"></i> Sending...
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us Form Section End -->

    <!-- Google Map Section Start -->
    <div class="google-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.540814132997!2d-0.12768938422939834!3d51.50735397963376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2sLondon%20SW1A%201AA%2C%20UK!5e0!3m2!1sen!2sus!4v1703158537552!5m2!1sen!2sus" 
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Section End -->

@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Form submission handling
    $('#contactForm').on('submit', function() {
        var submitBtn = $('#submitBtn');
        var btnText = submitBtn.find('.btn-text');
        var btnLoading = submitBtn.find('.btn-loading');
        
        // Show loading state
        btnText.hide();
        btnLoading.show();
        submitBtn.prop('disabled', true);
    });

    // Auto dismiss alerts after 5 seconds
    setTimeout(function() {
        $('.alert').fadeOut('slow');
    }, 5000);
});
</script>
@endpush