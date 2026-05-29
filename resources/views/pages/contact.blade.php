<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">
    
    <meta name="robots" content="index, follow">
    
    <title>Contact Us | UsExamPrep</title>
    <meta content="Get in touch with UsExamPrep support team." name="description">
    
    <meta content="https://usexamprep.com/contact/" property="og:url">
    <meta content="https://usexamprep.com/contact/" name="twitter:url">
    <link href="https://usexamprep.com/contact/" rel="canonical">

    <meta content="Contact Us | UsExamPrep" property="og:title">
    <meta content="Get in touch with UsExamPrep support team." property="og:description">
    <meta content="{{ asset('images/logo.png') }}" property="og:image">
    <meta content="website" property="og:type">
    <meta content="UsExamPrep" property="og:site_name">
    
    <meta content="Contact Us | UsExamPrep" name="twitter:title">
    <meta content="Get in touch with UsExamPrep support team." name="twitter:description">
    <meta content="{{ asset('images/logo.png') }}" name="twitter:image">
    <meta content="summary_large_image" name="twitter:card">

    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <script src="{{ asset('js/welcome.js') }}" defer></script>

    <script type="application/ld+json">
        {
        "@@context": "https://schema.org",
        "@@type": "ContactPage",
        "name": "Contact Us | UsExamPrep",
        "description": "Get in touch with UsExamPrep support team.",
        "author": "UsExamPrep",
        "datePublished": "2026-05-28",
        "dateModified": "2026-05-28",
        "publisher": {
            "@@type": "Organization", 
            "name": "UsExamPrep",
            "logo": {
                "@@type": "ImageObject",
                "url": "{{ asset('images/logo.png') }}",
                "width": 100,
                "height": 100
            }
        },
        "url": "https://usexamprep.com/contact/"
    }
    </script>
    
    <script type="application/ld+json">
        {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "UsExamPrep",
        "logo": "{{ asset('images/logo.png') }}",
        "url": "https://usexamprep.com/"
    }
    </script>

    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>

</head>

<body>
    @include('partials.nav-bar')

    <main class="page-main contact-section">
        <div class="max-width-wrapper">
            <div class="section-title-wrapper">
                <span class="section-badge text-teal">Get in Touch</span>
                <h1 class="section-heading">Contact Our Support Team</h1>
                <p class="section-subheading">Have questions about our certifications, billing, or technical issues?
                    We're here to help.</p>
            </div>

            <div class="contact-grid">

                <div class="contact-info-wrapper">
                    <h3 class="info-title">Contact Information</h3>

                    <div class="info-item">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="info-content">
                            <h4>Email Us</h4>
                            <p><a href="mailto:support@usexamprep.com">support@usexamprep.com</a></p>
                            <p>We aim to reply within 24 hours.</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="info-content">
                            <h4>Support Hours</h4>
                            <p>Monday - Friday<br>9:00 AM - 5:00 PM (EST)</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
                        @csrf
                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                        <div class="form-group">
                            <label class="form-label" for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                                placeholder="John Doe" required>
                            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                                placeholder="john@example.com" required>
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject"
                                value="{{ old('subject') }}" placeholder="How can we help you?" required>
                            @error('subject')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-control" id="message" name="message"
                                placeholder="Please provide as much detail as possible..."
                                required>{{ old('message') }}</textarea>
                            @error('message')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <button type="submit" class="btn btn-gradient"
                            style="width: 100%; padding: 0.875rem; font-size: var(--fs-base);" id="submitBtn">
                            Send Message
                        </button>

                        <div class="recaptcha-terms">
                            This site is protected by reCAPTCHA and the Google
                            <a href="https://policies.google.com/privacy">Privacy Policy</a> and
                            <a href="https://policies.google.com/terms">Terms of Service</a> apply.
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>

    @include('partials.footer')

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const submitBtn = document.getElementById('submitBtn');
            const originalText = submitBtn.innerText;
            submitBtn.innerText = 'Sending...';
            submitBtn.disabled = true;

            grecaptcha.ready(function() {
                grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'contact_submit'}).then(function(token) {
                    document.getElementById('g-recaptcha-response').value = token;
                    document.getElementById('contactForm').submit();
                }).catch(function(error) {
                    submitBtn.innerText = originalText;
                    submitBtn.disabled = false;
                    console.error('reCAPTCHA Error:', error);
                });
            });
        });
    </script>
</body>

</html>