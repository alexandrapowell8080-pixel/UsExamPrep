<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">
    <title>About Us | UsExamPrep</title>
    <meta content="UsExamPrep is a professional exam preparation platform dedicated to helping students and healthcare professionals succeed in certification and licensing exams across multiple career fields in the US." name="description">

    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <meta content="About Us | UsExamPrep" property="og:title">
    <meta content="UsExamPrep is a professional exam preparation platform dedicated to helping students and healthcare professionals succeed in certification and licensing exams across multiple career fields in the US." property="og:description">
    <meta content="{{ asset('images/logo.png') }}" property="og:image">
    <meta content="https://usexamprep.com/about/" property="og:url">
    <meta content="website" property="og:type">
    <meta content="UsExamPrep" property="og:site_name">

    <meta content="About Us | UsExamPrep" name="twitter:title">
    <meta content="UsExamPrep is a professional exam preparation platform dedicated to helping students and healthcare professionals succeed in certification and licensing exams across multiple career fields in the US." name="twitter:description">
    <meta content="{{ asset('images/logo.png') }}" name="twitter:image">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="https://usexamprep.com/about/" name="twitter:url">

    <meta content="yes" name="mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="UsExamPrep" name="apple-mobile-web-app-title">
    <link href="https://usexamprep.com/about/" rel="canonical">

    <script type="application/ld+json">
        {
        "@@context": "https://schema.org",
        "@@type": "AboutPage",
        "name": "About Us | UsExamPrep",
        "description": "UsExamPrep is a professional exam preparation platform dedicated to helping students and healthcare professionals succeed in certification and licensing exams across multiple career fields in the US.",
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
        "url": "https://usexamprep.com/about/"
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
</head>
<body>
    @include('partials.nav-bar')
    
    <main class="page-main">
        <section class="hero-section about-hero-spacing">
            <div class="hero-background-media bg-vector-img"></div>
            <div class="hero-container max-width-wrapper">
                <span class="section-badge text-teal animated fadeInUp delay-1">Our Mission</span>
                <h1 class="hero-headline animated fadeInUp delay-2">About UsExamPrep</h1>
                <p class="hero-lead-paragraph animated fadeInUp delay-3" style="max-width: 800px;">
                    <strong>UsExamPrep</strong> is a professional exam preparation platform dedicated to helping students and healthcare professionals succeed in certification and licensing exams across multiple career fields in the US.
                </p>
            </div>
        </section>

        <section class="certifications-section about-cert-spacing">
            <div class="max-width-wrapper small-max-width">
                <div class="section-title-wrapper about-title-mb-2">
                    <h2 class="section-heading">Careers We Support</h2>
                    <p class="section-subheading">We provide preparation resources for some of the most in-demand healthcare and professional careers, including:</p>
                </div>
                
                <div class="pill-badge-stack about-pill-stack-mb" style="justify-content: center; gap: 0.75rem;">
                    <span class="pill-badge" style="font-size: var(--fs-sm); padding: 0.5rem 1rem;">Nursing & Nurse Aide</span>
                    <span class="pill-badge" style="font-size: var(--fs-sm); padding: 0.5rem 1rem;">Medical Assisting</span>
                    <span class="pill-badge" style="font-size: var(--fs-sm); padding: 0.5rem 1rem;">Pharmacy Technology</span>
                    <span class="pill-badge" style="font-size: var(--fs-sm); padding: 0.5rem 1rem;">Phlebotomy Technician</span>
                    <span class="pill-badge" style="font-size: var(--fs-sm); padding: 0.5rem 1rem;">Emergency Nursing</span>
                    <span class="pill-badge" style="font-size: var(--fs-sm); padding: 0.5rem 1rem;">Family Nurse Practitioner (FNP)</span>
                    <span class="pill-badge" style="font-size: var(--fs-sm); padding: 0.5rem 1rem;">Hospice & Palliative Care</span>
                    <span class="pill-badge" style="font-size: var(--fs-sm); padding: 0.5rem 1rem;">Counseling & Mental Health</span>
                </div>
            </div>
        </section>

        <section class="comparison-section">
            <div class="max-width-wrapper">
                <div class="section-title-wrapper about-title-mb-2">
                    <span class="section-badge text-teal">Testing Bodies</span>
                    <h2 class="section-heading">Supported Organizations</h2>
                    <p class="section-subheading">Our platform is designed to help learners prepare for exams administered by major testing organizations and certification boards, including:</p>
                </div>

                <div class="cert-cards-grid">
                    <div class="roadmap-item"><p class="item-name">National Nurse Aide Assessment Program (NNAAP)</p></div>
                    <div class="roadmap-item"><p class="item-name">National Health Association (NHA)</p></div>
                    <div class="roadmap-item"><p class="item-name">Pharmacy Technician Certification Board (PTCB)</p></div>
                    <div class="roadmap-item"><p class="item-name">National Center for Competency Testing (NCCT)</p></div>
                    <div class="roadmap-item"><p class="item-name">American Association of Medical Assistants (AAMA)</p></div>
                    <div class="roadmap-item"><p class="item-name">American Nurses Credentialing Center (ANCC)</p></div>
                    <div class="roadmap-item"><p class="item-name">American Academy of Nurse Practitioners (AANP)</p></div>
                    <div class="roadmap-item"><p class="item-name">National Board for Certified Counselors (NBCC)</p></div>
                    <div class="roadmap-item"><p class="item-name">Prometric</p></div>
                    <div class="roadmap-item"><p class="item-name">Pearson VUE</p></div>
                    <div class="roadmap-item"><p class="item-name">State Certification Boards</p></div>
                </div>
            </div>
        </section>

        <section class="stories-section">
            <div class="max-width-wrapper">
                <div class="section-title-wrapper about-title-mb-3">
                    <h2 class="section-heading">At UsExamPrep, students gain access to:</h2>
                </div>

                <div class="hero-section" style="padding: 0; background: none; overflow: visible; display: block; width: 100%;">
                    <div class="proof-stats-grid">
                        <div class="proof-stat-item">
                            <div class="stat-inner-wrapper">
                                <div class="stat-icon-img-wrapper teal-glow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stat-inline-svg"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                </div>
                                <div class="stat-copy">
                                    <h3 class="stat-number-title" style="font-size: var(--fs-base);">Realistic Practice Questions</h3>
                                </div>
                            </div>
                        </div>
                        <div class="proof-stat-item">
                            <div class="stat-inner-wrapper">
                                <div class="stat-icon-img-wrapper blue-glow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stat-inline-svg"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"></path></svg>
                                </div>
                                <div class="stat-copy">
                                    <h3 class="stat-number-title" style="font-size: var(--fs-base);">Comprehensive Study Guides</h3>
                                </div>
                            </div>
                        </div>
                        <div class="proof-stat-item">
                            <div class="stat-inner-wrapper">
                                <div class="stat-icon-img-wrapper amber-glow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stat-inline-svg"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                </div>
                                <div class="stat-copy">
                                    <h3 class="stat-number-title" style="font-size: var(--fs-base);">Mock Exams & Timed Tests</h3>
                                </div>
                            </div>
                        </div>
                        <div class="proof-stat-item">
                            <div class="stat-inner-wrapper">
                                <div class="stat-icon-img-wrapper teal-glow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stat-inline-svg"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                </div>
                                <div class="stat-copy">
                                    <h3 class="stat-number-title" style="font-size: var(--fs-base);">Detailed Answer Explanations</h3>
                                </div>
                            </div>
                        </div>
                        <div class="proof-stat-item">
                            <div class="stat-inner-wrapper">
                                <div class="stat-icon-img-wrapper blue-glow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stat-inline-svg"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                </div>
                                <div class="stat-copy">
                                    <h3 class="stat-number-title" style="font-size: var(--fs-base);">Exam-Focused Learning Resources</h3>
                                </div>
                            </div>
                        </div>
                        <div class="proof-stat-item">
                            <div class="stat-inner-wrapper">
                                <div class="stat-icon-img-wrapper amber-glow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stat-inline-svg"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                                </div>
                                <div class="stat-copy">
                                    <h3 class="stat-number-title" style="font-size: var(--fs-base);">Mobile-Friendly Study Access</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-section" style="background-color: var(--bg-muted);">
            <div class="max-width-wrapper small-max-width" style="text-align: center;">
                <p class="hero-lead-paragraph" style="color: var(--text-primary); font-weight: 500; font-size: var(--fs-lg); margin-bottom: 1.5rem;">
                    Our goal is to make exam preparation more organized, practical, and effective by helping learners build confidence, strengthen knowledge, and prepare for real testing environments.
                </p>
                <p class="section-subheading">
                    Whether you are starting your healthcare career, pursuing certification, or advancing professionally, UsExamPrep is built to support your success every step of the way.
                </p>
            </div>
        </section>

    </main>
    
    @include('partials.footer')
</body>
</html>