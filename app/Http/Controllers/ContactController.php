<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Store a contact form submission.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ], [
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Phone number is required.',
            'subject.required' => 'Please select a subject.',
            'message.required' => 'Message is required.',
            'message.max' => 'Message cannot exceed 2000 characters.',
        ]);

        try {
            // Prepare email data
            $emailData = [
                'full_name' => $validated['first_name'] . ' ' . $validated['last_name'],
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'subject' => $this->getSubjectLabel($validated['subject']),
                'message' => $validated['message'],
                'submitted_at' => now()->format('F j, Y \a\t g:i A'),
            ];

            // Log the contact form submission
            Log::info('Contact form submission', [
                'name' => $emailData['full_name'],
                'email' => $validated['email'],
                'subject' => $validated['subject'],
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            // In a production environment, you would send email here:
            // Mail::to('info@artisticsocial.com')->send(new ContactFormMail($emailData));

            // For now, just return success response
            return back()->with('success', 'Thank you for your message, ' . $validated['first_name'] . '! We will get back to you within 24 hours.');

        } catch (\Exception $e) {
            // Log the error
            Log::error('Contact form submission failed', [
                'error' => $e->getMessage(),
                'email' => $validated['email'] ?? 'unknown',
                'ip_address' => $request->ip(),
            ]);

            return back()->with('error', 'Sorry, there was an issue sending your message. Please try again or contact us directly.')
                        ->withInput();
        }
    }

    /**
     * Handle newsletter subscription.
     */
    public function newsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ], [
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
        ]);

        try {
            // Log the newsletter subscription
            Log::info('Newsletter subscription', [
                'email' => $validated['email'],
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            // In a production environment, you would integrate with email service here
            // Example: Newsletter::subscribe($validated['email']);

            return back()->with('newsletter_success', 'Thank you for subscribing to our newsletter! You will receive the latest updates on social media marketing trends.');

        } catch (\Exception $e) {
            Log::error('Newsletter subscription failed', [
                'error' => $e->getMessage(),
                'email' => $validated['email'],
                'ip_address' => $request->ip(),
            ]);

            return back()->with('newsletter_error', 'Sorry, there was an issue with your subscription. Please try again.');
        }
    }

    /**
     * Get human-readable subject label.
     */
    private function getSubjectLabel($subject)
    {
        $subjects = [
            'general_inquiry' => 'General Inquiry',
            'social_media_marketing' => 'Social Media Marketing',
            'content_creation' => 'Content Creation',
            'digital_advertising' => 'Digital Advertising',
            'brand_strategy' => 'Brand Strategy',
            'partnership' => 'Partnership Opportunity',
            'support' => 'Technical Support',
            'other' => 'Other',
        ];

        return $subjects[$subject] ?? 'General Inquiry';
    }
}