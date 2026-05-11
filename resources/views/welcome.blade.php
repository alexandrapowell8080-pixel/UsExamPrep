<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">
    <link href="/manifest.json" rel="manifest">
    <title>UsExamPrep</title>
    <meta
        content="An interactive, animated, and smart exam preparation platform designed to help healthcare students master their certification tests through gamified practice."
        name="description">

    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <script src="{{ asset('js/welcome.js') }}" defer></script>

    <meta content="UsExamPrep" property="og:title">
    <meta
        content="An interactive, animated, and smart exam preparation platform designed to help healthcare students master their certification tests through gamified practice."
        property="og:description">
    <meta content="{{ asset('images/logo.png') }}" property="og:image">
    <meta content="https://usexamprep.com" property="og:url">
    <meta content="website" property="og:type">
    <meta content="UsExamPrep" property="og:site_name">

    <meta content="UsExamPrep" name="twitter:title">
    <meta
        content="An interactive, animated, and smart exam preparation platform designed to help healthcare students master their certification tests through gamified practice."
        name="twitter:description">
    <meta content="{{ asset('images/logo.png') }}" name="twitter:image">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="https://usexamprep.com" name="twitter:url">

    <meta content="yes" name="mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="UsExamPrep" name="apple-mobile-web-app-title">
    <link href="https://usexamprep.com" rel="canonical">

    <script type="application/ld+json">
        {
        "@@context": "https://schema.org",
        "@@type": "WebSite",
        "name": "UsExamPrep",
        "url": "https://usexamprep.com"
    }
    </script>
    <script type="application/ld+json">
        {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "UsExamPrep",
        "logo": "{{ asset('images/logo.png') }}",
        "url": "https://usexamprep.com"
    }
    </script>
</head>

<body>
    @include('partials.nav-bar')

    <main class="page-main">

        <section class="hero-section">
            <div class="hero-background-media bg-vector-img"></div>

            <div class="hero-container max-width-wrapper">

                <div class="trust-badge-custom animated fadeInUp delay-1">
                    <div class="trust-stars-wrap">
                        <svg viewBox="0 0 24 24" fill="#00b67a" xmlns="http://www.w3.org/2000/svg" class="trust-star">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg viewBox="0 0 24 24" fill="#00b67a" xmlns="http://www.w3.org/2000/svg" class="trust-star">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg viewBox="0 0 24 24" fill="#00b67a" xmlns="http://www.w3.org/2000/svg" class="trust-star">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg viewBox="0 0 24 24" fill="#00b67a" xmlns="http://www.w3.org/2000/svg" class="trust-star">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg viewBox="0 0 24 24" fill="#00b67a" xmlns="http://www.w3.org/2000/svg" class="trust-star">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                    </div>
                    <span>Trusted by 25,000+ Healthcare Students</span>
                </div>

                <h1 class="hero-headline animated fadeInUp delay-2">US’s Best Study Hub</h1>

                <h2 class="hero-dynamic-headline animated fadeInUp delay-3">
                    <span class="headline-static-wrapper">Built For&nbsp;</span>
                    <span class="headline-sliding-wrapper" id="dynamic-wrapper">
                        <span class="dynamic-rotating-text active is-in">Nurses</span>
                        <span class="dynamic-rotating-text">Medical Assistants</span>
                        <span class="dynamic-rotating-text">Pharmacy Technicians</span>
                        <span class="dynamic-rotating-text">Counselors</span>
                        <span class="dynamic-rotating-text">Phlebotomy Technicians</span>
                    </span>
                </h2>

                <p class="hero-lead-paragraph animated fadeInUp delay-4">
                    Access unlimited resources, expert guidance, and a supportive community—<strong>all in one
                        place</strong>
                </p>

                <div class="hero-cta-area animated fadeInUp delay-5">
                    <div class="cta-flank-deco left-flank animated fadeInLeft delay-6">
                        <svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg" class="floating-svg">
                            <circle cx="60" cy="60" r="40" fill="#14b8a6" opacity="0.15" class="float-shape-1" />
                            <path d="M 40 80 L 80 40 L 90 90 Z" fill="#3b82f6" opacity="0.25" class="float-shape-2" />
                            <circle cx="90" cy="20" r="8" fill="#f59e0b" opacity="0.6" class="float-shape-1" />
                        </svg>
                    </div>

                    <div class="hero-cta-group">
                        <a class="hero-cta-btn btn-secondary-gray" href="#" target="_blank">
                            <span class="btn-inner-content">
                                <span class="btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z">
                                        </path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                    </svg>
                                </span>
                                <span class="btn-label-text">Pick a subject</span>
                            </span>
                        </a>

                        <a class="hero-cta-btn btn-primary-blue" href="#" target="_blank">
                            <span class="btn-inner-content">
                                <span class="btn-icon">
                                    <svg class="e-fas-arrow-right" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </span>
                                <span class="btn-label-text">7 day no-card trial</span>
                            </span>
                        </a>
                    </div>

                    <div class="cta-flank-deco right-flank animated fadeInRight delay-6">
                        <svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg" class="floating-svg">
                            <rect x="30" y="30" width="50" height="50" rx="12" fill="#8b5cf6" opacity="0.2"
                                transform="rotate(15 55 55)" class="float-shape-2" />
                            <circle cx="80" cy="80" r="25" fill="#14b8a6" opacity="0.25" class="float-shape-1" />
                            <circle cx="20" cy="90" r="6" fill="#3b82f6" opacity="0.6" class="float-shape-2" />
                        </svg>
                    </div>
                </div>

                <div class="hero-social-proof-strip animated fadeInUp delay-7">
                    <div class="proof-header-bar">
                        <p class="proof-section-title">Built for Students, Loved by Educators</p>
                    </div>
                    <div class="proof-stats-grid">
                        <div class="proof-stat-item">
                            <div class="stat-inner-wrapper">
                                <div class="stat-icon-img-wrapper teal-glow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="stat-inline-svg">
                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                        <polyline points="16 7 22 7 22 13"></polyline>
                                    </svg>
                                </div>
                                <div class="stat-copy">
                                    <h3 class="stat-number-title">201k+</h3>
                                    <p class="stat-description-p">students improved <br>their results</p>
                                </div>
                            </div>
                        </div>
                        <div class="proof-stat-item">
                            <div class="stat-inner-wrapper">
                                <div class="stat-icon-img-wrapper blue-glow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="stat-inline-svg">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <div class="stat-copy">
                                    <h3 class="stat-number-title">9.2k</h3>
                                    <p class="stat-description-p">Teachers have used our<br>resources in class</p>
                                </div>
                            </div>
                        </div>
                        <div class="proof-stat-item">
                            <div class="stat-inner-wrapper">
                                <div class="stat-icon-img-wrapper amber-glow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="stat-inline-svg">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                        </polygon>
                                    </svg>
                                </div>
                                <div class="stat-copy">
                                    <h3 class="stat-number-title">4.89 star</h3>
                                    <p class="stat-description-p">average learner <br>satisfaction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="certifications-section">
            <div class="max-width-wrapper">
                <div class="section-title-wrapper">
                    <span class="section-badge text-teal">Certifications</span>
                    <h2 class="section-heading">Choose Your Certification Path</h2>
                    <p class="section-subheading">We offer comprehensive prep for 12 healthcare certifications. Click
                        any row to get started.</p>
                </div>

                <div class="category-block">
                    <div class="category-header">
                        <div class="category-badge cat-teal">N</div>
                        <h3 class="category-title">Nursing</h3>
                    </div>
                    <div class="responsive-table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th class="col-id">#</th>
                                    <th>Certification</th>
                                    <th class="col-fullname">Full Name</th>
                                    <th class="col-topics">Topics</th>
                                    <th class="col-questions text-center">Questions</th>
                                    <th class="col-difficulty text-center">Difficulty</th>
                                    <th class="col-arrow"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr onclick="window.location='/cert/cna'" class="clickable-row">
                                    <td class="col-id">1</td>
                                    <td>
                                        <div class="cert-flex-badge">
                                            <span class="indicator-dot dot-teal"></span>
                                            <span class="cert-code code-teal">CNA</span>
                                        </div>
                                    </td>
                                    <td class="col-fullname text-muted">Certified Nursing Assistant</td>
                                    <td class="col-topics">
                                        <div class="pill-badge-stack">
                                            <span class="pill-badge">Patient Care</span>
                                            <span class="pill-badge">Infection Control</span>
                                            <span class="pill-badge">+6</span>
                                        </div>
                                    </td>
                                    <td class="col-questions text-center text-muted">
                                        <span class="book-info-row">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="book-mini-svg">
                                                <path d="M12 7v14"></path>
                                                <path
                                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                </path>
                                            </svg>
                                            350+
                                        </span>
                                    </td>
                                    <td class="col-difficulty text-center">
                                        <span class="diff-badge diff-intermediate">Intermediate</span>
                                    </td>
                                    <td class="col-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="row-arrow-svg">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </td>
                                </tr>
                                <tr onclick="window.location='/cert/nurse-aide'" class="clickable-row">
                                    <td class="col-id">2</td>
                                    <td>
                                        <div class="cert-flex-badge">
                                            <span class="indicator-dot dot-emerald"></span>
                                            <span class="cert-code code-emerald">Nurse Aide</span>
                                        </div>
                                    </td>
                                    <td class="col-fullname text-muted">Nurse Aide Certification</td>
                                    <td class="col-topics">
                                        <div class="pill-badge-stack">
                                            <span class="pill-badge">Resident Care</span>
                                            <span class="pill-badge">Safety Procedures</span>
                                            <span class="pill-badge">+4</span>
                                        </div>
                                    </td>
                                    <td class="col-questions text-center text-muted">
                                        <span class="book-info-row">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="book-mini-svg">
                                                <path d="M12 7v14"></path>
                                                <path
                                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                </path>
                                            </svg>
                                            280+
                                        </span>
                                    </td>
                                    <td class="col-difficulty text-center">
                                        <span class="diff-badge diff-beginner">Beginner</span>
                                    </td>
                                    <td class="col-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="row-arrow-svg">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </td>
                                </tr>
                                <tr onclick="window.location='/cert/hospice'" class="clickable-row">
                                    <td class="col-id">3</td>
                                    <td>
                                        <div class="cert-flex-badge">
                                            <span class="indicator-dot dot-purple"></span>
                                            <span class="cert-code code-purple">Hospice</span>
                                        </div>
                                    </td>
                                    <td class="col-fullname text-muted">Hospice &amp; Palliative Care</td>
                                    <td class="col-topics">
                                        <div class="pill-badge-stack">
                                            <span class="pill-badge">Pain Management</span>
                                            <span class="pill-badge">End-of-Life Care</span>
                                            <span class="pill-badge">+4</span>
                                        </div>
                                    </td>
                                    <td class="col-questions text-center text-muted">
                                        <span class="book-info-row">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="book-mini-svg">
                                                <path d="M12 7v14"></path>
                                                <path
                                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                </path>
                                            </svg>
                                            220+
                                        </span>
                                    </td>
                                    <td class="col-difficulty text-center">
                                        <span class="diff-badge diff-advanced">Advanced</span>
                                    </td>
                                    <td class="col-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="row-arrow-svg">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </td>
                                </tr>
                                <tr onclick="window.location='/cert/cen'" class="clickable-row">
                                    <td class="col-id">4</td>
                                    <td>
                                        <div class="cert-flex-badge">
                                            <span class="indicator-dot dot-red"></span>
                                            <span class="cert-code code-red">CEN</span>
                                        </div>
                                    </td>
                                    <td class="col-fullname text-muted">Certified Emergency Nurse</td>
                                    <td class="col-topics">
                                        <div class="pill-badge-stack">
                                            <span class="pill-badge">Triage</span>
                                            <span class="pill-badge">Trauma Care</span>
                                            <span class="pill-badge">+5</span>
                                        </div>
                                    </td>
                                    <td class="col-questions text-center text-muted">
                                        <span class="book-info-row">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="book-mini-svg">
                                                <path d="M12 7v14"></path>
                                                <path
                                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                </path>
                                            </svg>
                                            400+
                                        </span>
                                    </td>
                                    <td class="col-difficulty text-center">
                                        <span class="diff-badge diff-advanced">Advanced</span>
                                    </td>
                                    <td class="col-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="row-arrow-svg">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </td>
                                </tr>
                                <tr onclick="window.location='/cert/fmp'" class="clickable-row">
                                    <td class="col-id">5</td>
                                    <td>
                                        <div class="cert-flex-badge">
                                            <span class="indicator-dot dot-orange"></span>
                                            <span class="cert-code code-orange">FMP</span>
                                        </div>
                                    </td>
                                    <td class="col-fullname text-muted">Family Medicine Practice</td>
                                    <td class="col-topics">
                                        <div class="pill-badge-stack">
                                            <span class="pill-badge">Primary Care</span>
                                            <span class="pill-badge">Preventive Medicine</span>
                                            <span class="pill-badge">+4</span>
                                        </div>
                                    </td>
                                    <td class="col-questions text-center text-muted">
                                        <span class="book-info-row">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="book-mini-svg">
                                                <path d="M12 7v14"></path>
                                                <path
                                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                </path>
                                            </svg>
                                            300+
                                        </span>
                                    </td>
                                    <td class="col-difficulty text-center">
                                        <span class="diff-badge diff-intermediate">Intermediate</span>
                                    </td>
                                    <td class="col-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="row-arrow-svg">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="category-block">
                    <div class="category-header">
                        <div class="category-badge cat-blue">M</div>
                        <h3 class="category-title">Medical Assistant</h3>
                    </div>
                    <div class="responsive-table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th class="col-id">#</th>
                                    <th>Certification</th>
                                    <th class="col-fullname">Full Name</th>
                                    <th class="col-topics">Topics</th>
                                    <th class="col-questions text-center">Questions</th>
                                    <th class="col-difficulty text-center">Difficulty</th>
                                    <th class="col-arrow"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr onclick="window.location='/cert/ccma'" class="clickable-row">
                                    <td class="col-id">1</td>
                                    <td>
                                        <div class="cert-flex-badge">
                                            <span class="indicator-dot dot-blue"></span>
                                            <span class="cert-code code-blue">CCMA</span>
                                        </div>
                                    </td>
                                    <td class="col-fullname text-muted">Certified Clinical Medical Assistant</td>
                                    <td class="col-topics">
                                        <div class="pill-badge-stack">
                                            <span class="pill-badge">Clinical Procedures</span>
                                            <span class="pill-badge">Patient Intake</span>
                                            <span class="pill-badge">+5</span>
                                        </div>
                                    </td>
                                    <td class="col-questions text-center text-muted">
                                        <span class="book-info-row">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="book-mini-svg">
                                                <path d="M12 7v14"></path>
                                                <path
                                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                </path>
                                            </svg>
                                            380+
                                        </span>
                                    </td>
                                    <td class="col-difficulty text-center">
                                        <span class="diff-badge diff-intermediate">Intermediate</span>
                                    </td>
                                    <td class="col-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="row-arrow-svg">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </td>
                                </tr>
                                <tr onclick="window.location='/cert/aama'" class="clickable-row">
                                    <td class="col-id">2</td>
                                    <td>
                                        <div class="cert-flex-badge">
                                            <span class="indicator-dot dot-violet"></span>
                                            <span class="cert-code code-violet">AAMA</span>
                                        </div>
                                    </td>
                                    <td class="col-fullname text-muted">American Association of Medical Assistants</td>
                                    <td class="col-topics">
                                        <div class="pill-badge-stack">
                                            <span class="pill-badge">General Knowledge</span>
                                            <span class="pill-badge">Administrative Skills</span>
                                            <span class="pill-badge">+4</span>
                                        </div>
                                    </td>
                                    <td class="col-questions text-center text-muted">
                                        <span class="book-info-row">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="book-mini-svg">
                                                <path d="M12 7v14"></path>
                                                <path
                                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                </path>
                                            </svg>
                                            320+
                                        </span>
                                    </td>
                                    <td class="col-difficulty text-center">
                                        <span class="diff-badge diff-intermediate">Intermediate</span>
                                    </td>
                                    <td class="col-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="row-arrow-svg">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </td>
                                </tr>
                                <tr onclick="window.location='/cert/phlebotomy'" class="clickable-row">
                                    <td class="col-id">3</td>
                                    <td>
                                        <div class="cert-flex-badge">
                                            <span class="indicator-dot dot-rose"></span>
                                            <span class="cert-code code-rose">Phlebotomy</span>
                                        </div>
                                    </td>
                                    <td class="col-fullname text-muted">Phlebotomy Technician Certification</td>
                                    <td class="col-topics">
                                        <div class="pill-badge-stack">
                                            <span class="pill-badge">Venipuncture</span>
                                            <span class="pill-badge">Order of Draw</span>
                                            <span class="pill-badge">+4</span>
                                        </div>
                                    </td>
                                    <td class="col-questions text-center text-muted">
                                        <span class="book-info-row">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="book-mini-svg">
                                                <path d="M12 7v14"></path>
                                                <path
                                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                </path>
                                            </svg>
                                            250+
                                        </span>
                                    </td>
                                    <td class="col-difficulty text-center">
                                        <span class="diff-badge diff-beginner">Beginner</span>
                                    </td>
                                    <td class="col-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="row-arrow-svg">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </td>
                                </tr>
                                <tr onclick="window.location='/cert/dental'" class="clickable-row">
                                    <td class="col-id">4</td>
                                    <td>
                                        <div class="cert-flex-badge">
                                            <span class="indicator-dot dot-sky"></span>
                                            <span class="cert-code code-sky">Dental</span>
                                        </div>
                                    </td>
                                    <td class="col-fullname text-muted">Dental Assistant Certification</td>
                                    <td class="col-topics">
                                        <div class="pill-badge-stack">
                                            <span class="pill-badge">Dental Anatomy</span>
                                            <span class="pill-badge">Radiography</span>
                                            <span class="pill-badge">+4</span>
                                        </div>
                                    </td>
                                    <td class="col-questions text-center text-muted">
                                        <span class="book-info-row">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="book-mini-svg">
                                                <path d="M12 7v14"></path>
                                                <path
                                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                </path>
                                            </svg>
                                            270+
                                        </span>
                                    </td>
                                    <td class="col-difficulty text-center">
                                        <span class="diff-badge diff-intermediate">Intermediate</span>
                                    </td>
                                    <td class="col-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="row-arrow-svg">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </td>
                                </tr>
                                <tr onclick="window.location='/cert/slp'" class="clickable-row">
                                    <td class="col-id">5</td>
                                    <td>
                                        <div class="cert-flex-badge">
                                            <span class="indicator-dot dot-pink"></span>
                                            <span class="cert-code code-pink">SLP</span>
                                        </div>
                                    </td>
                                    <td class="col-fullname text-muted">Speech-Language Pathology</td>
                                    <td class="col-topics">
                                        <div class="pill-badge-stack">
                                            <span class="pill-badge">Speech Disorders</span>
                                            <span class="pill-badge">Language Development</span>
                                            <span class="pill-badge">+4</span>
                                        </div>
                                    </td>
                                    <td class="col-questions text-center text-muted">
                                        <span class="book-info-row">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="book-mini-svg">
                                                <path d="M12 7v14"></path>
                                                <path
                                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                </path>
                                            </svg>
                                            290+
                                        </span>
                                    </td>
                                    <td class="col-difficulty text-center">
                                        <span class="diff-badge diff-advanced">Advanced</span>
                                    </td>
                                    <td class="col-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="row-arrow-svg">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </td>
                                </tr>
                                <tr onclick="window.location='/cert/counsellor'" class="clickable-row">
                                    <td class="col-id">6</td>
                                    <td>
                                        <div class="cert-flex-badge">
                                            <span class="indicator-dot dot-indigo"></span>
                                            <span class="cert-code code-indigo">Counsellor</span>
                                        </div>
                                    </td>
                                    <td class="col-fullname text-muted">Professional Counselling Certification</td>
                                    <td class="col-topics">
                                        <div class="pill-badge-stack">
                                            <span class="pill-badge">Therapy Techniques</span>
                                            <span class="pill-badge">Mental Health Assessment</span>
                                            <span class="pill-badge">+4</span>
                                        </div>
                                    </td>
                                    <td class="col-questions text-center text-muted">
                                        <span class="book-info-row">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="book-mini-svg">
                                                <path d="M12 7v14"></path>
                                                <path
                                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                </path>
                                            </svg>
                                            310+
                                        </span>
                                    </td>
                                    <td class="col-difficulty text-center">
                                        <span class="diff-badge diff-advanced">Advanced</span>
                                    </td>
                                    <td class="col-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="row-arrow-svg">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="category-block">
                    <div class="category-header">
                        <div class="category-badge cat-green">P</div>
                        <h3 class="category-title">Pharmacy Certification</h3>
                    </div>
                    <div class="responsive-table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th class="col-id">#</th>
                                    <th>Certification</th>
                                    <th class="col-fullname">Full Name</th>
                                    <th class="col-topics">Topics</th>
                                    <th class="col-questions text-center">Questions</th>
                                    <th class="col-difficulty text-center">Difficulty</th>
                                    <th class="col-arrow"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr onclick="window.location='/cert/ptce'" class="clickable-row">
                                    <td class="col-id">1</td>
                                    <td>
                                        <div class="cert-flex-badge">
                                            <span class="indicator-dot dot-green"></span>
                                            <span class="cert-code code-green">PTCE</span>
                                        </div>
                                    </td>
                                    <td class="col-fullname text-muted">Pharmacy Technician Certification Exam</td>
                                    <td class="col-topics">
                                        <div class="pill-badge-stack">
                                            <span class="pill-badge">Medications</span>
                                            <span class="pill-badge">Pharmacy Law</span>
                                            <span class="pill-badge">+5</span>
                                        </div>
                                    </td>
                                    <td class="col-questions text-center text-muted">
                                        <span class="book-info-row">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="book-mini-svg">
                                                <path d="M12 7v14"></path>
                                                <path
                                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                </path>
                                            </svg>
                                            360+
                                        </span>
                                    </td>
                                    <td class="col-difficulty text-center">
                                        <span class="diff-badge diff-intermediate">Intermediate</span>
                                    </td>
                                    <td class="col-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="row-arrow-svg">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>

        <section class="roadmap-section">
            <div class="max-width-wrapper">
                <div class="section-title-wrapper">
                    <span class="section-badge text-teal">Career Roadmap</span>
                    <h2 class="section-heading">Your Healthcare Growth Path</h2>
                    <p class="section-subheading">From entry-level to advanced specializations — see how your career can
                        evolve.</p>
                </div>

                <div class="roadmap-flex-layout">
                    <div class="roadmap-col">
                        <div class="roadmap-card card-entry">
                            <div class="roadmap-card-header bg-green-light">
                                <span class="badge-tag tag-green">ENTRY LEVEL</span>
                            </div>
                            <div class="roadmap-card-body">
                                <div class="roadmap-item">
                                    <div>
                                        <p class="item-name">CNA</p>
                                        <p class="item-meta">4-10 wks</p>
                                    </div>
                                    <span class="item-salary">$35K</span>
                                </div>
                                <div class="roadmap-item">
                                    <div>
                                        <p class="item-name">Nurse Aide</p>
                                        <p class="item-meta">4-8 wks</p>
                                    </div>
                                    <span class="item-salary">$30K</span>
                                </div>
                                <div class="roadmap-item">
                                    <div>
                                        <p class="item-name">Phlebotomy</p>
                                        <p class="item-meta">4-8 wks</p>
                                    </div>
                                    <span class="item-salary">$36K</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="roadmap-divider">
                        <div class="arrow-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="divider-arrow-svg">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="roadmap-col">
                        <div class="roadmap-card card-intermediate">
                            <div class="roadmap-card-header bg-slate-light">
                                <span class="badge-tag tag-slate">INTERMEDIATE</span>
                            </div>
                            <div class="roadmap-card-body">
                                <div class="roadmap-item">
                                    <div>
                                        <p class="item-name">CCMA</p>
                                        <p class="item-meta">8-20 wks</p>
                                    </div>
                                    <span class="item-salary">$42K</span>
                                </div>
                                <div class="roadmap-item">
                                    <div>
                                        <p class="item-name">PTCE</p>
                                        <p class="item-meta">8-12 wks</p>
                                    </div>
                                    <span class="item-salary">$38K</span>
                                </div>
                                <div class="roadmap-item">
                                    <div>
                                        <p class="item-name">Dental Asst.</p>
                                        <p class="item-meta">8-12 wks</p>
                                    </div>
                                    <span class="item-salary">$44K</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="roadmap-divider">
                        <div class="arrow-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="divider-arrow-svg">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="roadmap-col">
                        <div class="roadmap-card card-advanced">
                            <div class="roadmap-card-header bg-green-dark">
                                <span class="badge-tag tag-green-light">ADVANCED</span>
                            </div>
                            <div class="roadmap-card-body theme-dark-card">
                                <div class="roadmap-item dark-item">
                                    <div>
                                        <p class="item-name text-white">FPM Nursing</p>
                                        <p class="item-meta text-emerald">Varies</p>
                                    </div>
                                    <span class="item-salary text-emerald">$75K</span>
                                </div>
                                <div class="roadmap-item dark-item">
                                    <div>
                                        <p class="item-name text-white">CEN</p>
                                        <p class="item-meta text-emerald">Varies</p>
                                    </div>
                                    <span class="item-salary text-emerald">$95K</span>
                                </div>
                                <div class="roadmap-item dark-item">
                                    <div>
                                        <p class="item-name text-white">Hospice</p>
                                        <p class="item-meta text-emerald">Varies</p>
                                    </div>
                                    <span class="item-salary text-emerald">$70K</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="statistics-strip">
            <div class="max-width-wrapper">
                <div class="stats-grid">
                    <div class="stat-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stat-icon">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <div class="stat-number">25,000+</div>
                        <div class="stat-label">Active Students</div>
                    </div>
                    <div class="stat-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stat-icon">
                            <path d="M12 7v14"></path>
                            <path
                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                            </path>
                        </svg>
                        <div class="stat-number">12,500+</div>
                        <div class="stat-label">Practice Questions</div>
                    </div>
                    <div class="stat-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stat-icon">
                            <path
                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                            </path>
                            <circle cx="12" cy="8" r="6"></circle>
                        </svg>
                        <div class="stat-number">98.4%</div>
                        <div class="stat-label">Pass Rate</div>
                    </div>
                    <div class="stat-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stat-icon">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                            <polyline points="16 7 22 7 22 13"></polyline>
                        </svg>
                        <div class="stat-number">12</div>
                        <div class="stat-label">Certifications</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="comparison-section">
            <div class="max-width-wrapper">
                <div class="section-title-wrapper">
                    <span class="section-badge text-teal">Compare Certifications</span>
                    <h2 class="section-heading">Side-by-Side Exam Comparison</h2>
                    <p class="section-subheading">Compare requirements, difficulty, and salary potential across all
                        certifications.</p>
                </div>

                <div class="comparison-table-wrapper">
                    <div class="scrollable-table-x">
                        <table class="comparison-table">
                            <thead>
                                <tr>
                                    <th>Certification</th>
                                    <th class="text-center">Questions</th>
                                    <th class="text-center">Duration</th>
                                    <th class="text-center">Pass Score</th>
                                    <th class="text-center">Difficulty</th>
                                    <th class="text-center">Avg Salary</th>
                                    <th class="text-center">Job Growth</th>
                                    <th class="text-center">Practice</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="comp-cert-info">
                                            <span class="comp-emoji">🩺</span>
                                            <div>
                                                <p class="comp-name">CNA</p>
                                                <p class="comp-fullname">Certified Nursing Assistant</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center font-med">60</td>
                                    <td class="text-center text-muted">90 minutes</td>
                                    <td class="text-center font-med">70%</td>
                                    <td class="text-center"><span class="comp-diff diff-intermediate">Moderate</span>
                                    </td>
                                    <td class="text-center text-salary">$33,250</td>
                                    <td class="text-center text-muted">5% (2022-2032)</td>
                                    <td class="text-center">
                                        <a href="/cert/cna" class="table-link-btn">Start <svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="arrow-link-svg">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="comp-cert-info">
                                            <span class="comp-emoji">❤️</span>
                                            <div>
                                                <p class="comp-name">CCMA</p>
                                                <p class="comp-fullname">Certified Clinical Medical Assistant</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center font-med">150</td>
                                    <td class="text-center text-muted">180 minutes</td>
                                    <td class="text-center font-med">390/500</td>
                                    <td class="text-center"><span class="comp-diff diff-orange">Moderate-High</span>
                                    </td>
                                    <td class="text-center text-salary">$38,270</td>
                                    <td class="text-center text-muted">14% (2022-2032)</td>
                                    <td class="text-center">
                                        <a href="/cert/ccma" class="table-link-btn">Start <svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="arrow-link-svg">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="comp-cert-info">
                                            <span class="comp-emoji">💊</span>
                                            <div>
                                                <p class="comp-name">PTCE</p>
                                                <p class="comp-fullname">Pharmacy Technician Certification Exam</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center font-med">90</td>
                                    <td class="text-center text-muted">120 minutes</td>
                                    <td class="text-center font-med">1400/1600</td>
                                    <td class="text-center"><span class="comp-diff diff-advanced">High</span></td>
                                    <td class="text-center text-salary">$37,790</td>
                                    <td class="text-center text-muted">6% (2022-2032)</td>
                                    <td class="text-center">
                                        <a href="/cert/ptce" class="table-link-btn">Start <svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="arrow-link-svg">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="comp-cert-info">
                                            <span class="comp-emoji">🔬</span>
                                            <div>
                                                <p class="comp-name">Phlebotomy</p>
                                                <p class="comp-fullname">Phlebotomy Technician Certification</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center font-med">80</td>
                                    <td class="text-center text-muted">120 minutes</td>
                                    <td class="text-center font-med">70%</td>
                                    <td class="text-center"><span class="comp-diff diff-intermediate">Moderate</span>
                                    </td>
                                    <td class="text-center text-salary">$38,530</td>
                                    <td class="text-center text-muted">8% (2022-2032)</td>
                                    <td class="text-center">
                                        <a href="/cert/phlebotomy" class="table-link-btn">Start <svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="arrow-link-svg">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="comp-cert-info">
                                            <span class="comp-emoji">🦷</span>
                                            <div>
                                                <p class="comp-name">Dental Assistant</p>
                                                <p class="comp-fullname">Dental Assistant Certification</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center font-med">320</td>
                                    <td class="text-center text-muted">255 minutes</td>
                                    <td class="text-center font-med">400/500</td>
                                    <td class="text-center"><span class="comp-diff diff-orange">Moderate-High</span>
                                    </td>
                                    <td class="text-center text-salary">$41,180</td>
                                    <td class="text-center text-muted">7% (2022-2032)</td>
                                    <td class="text-center">
                                        <a href="/cert/dental" class="table-link-btn">Start <svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="arrow-link-svg">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="comp-cert-info">
                                            <span class="comp-emoji">🌿</span>
                                            <div>
                                                <p class="comp-name">Hospice</p>
                                                <p class="comp-fullname">Hospice &amp; Palliative Care</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center font-med">110</td>
                                    <td class="text-center text-muted">150 minutes</td>
                                    <td class="text-center font-med">70%</td>
                                    <td class="text-center"><span class="comp-diff diff-advanced">High</span></td>
                                    <td class="text-center text-salary">$52,000</td>
                                    <td class="text-center text-muted">10% (2022-2032)</td>
                                    <td class="text-center">
                                        <a href="/cert/hospice" class="table-link-btn">Start <svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="arrow-link-svg">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="comp-cert-info">
                                            <span class="comp-emoji">🚨</span>
                                            <div>
                                                <p class="comp-name">CEN</p>
                                                <p class="comp-fullname">Certified Emergency Nurse</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center font-med">175</td>
                                    <td class="text-center text-muted">180 minutes</td>
                                    <td class="text-center font-med">Pass/Fail</td>
                                    <td class="text-center"><span class="comp-diff diff-red">Very High</span></td>
                                    <td class="text-center text-salary">$78,000</td>
                                    <td class="text-center text-muted">6% (2022-2032)</td>
                                    <td class="text-center">
                                        <a href="/cert/cen" class="table-link-btn">Start <svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="arrow-link-svg">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="comp-cert-info">
                                            <span class="comp-emoji">🗣️</span>
                                            <div>
                                                <p class="comp-name">SLP</p>
                                                <p class="comp-fullname">Speech-Language Pathology</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center font-med">132</td>
                                    <td class="text-center text-muted">150 minutes</td>
                                    <td class="text-center font-med">162/200</td>
                                    <td class="text-center"><span class="comp-diff diff-advanced">High</span></td>
                                    <td class="text-center text-salary">$84,140</td>
                                    <td class="text-center text-muted">19% (2022-2032)</td>
                                    <td class="text-center">
                                        <a href="/cert/slp" class="table-link-btn">Start <svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="arrow-link-svg">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="comp-cert-info">
                                            <span class="comp-emoji">👨‍⚕️</span>
                                            <div>
                                                <p class="comp-name">Nurse Aide</p>
                                                <p class="comp-fullname">Nurse Aide Certification</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center font-med">70</td>
                                    <td class="text-center text-muted">90 minutes</td>
                                    <td class="text-center font-med">70%</td>
                                    <td class="text-center"><span class="comp-diff diff-beginner">Beginner</span></td>
                                    <td class="text-center text-salary">$30,290</td>
                                    <td class="text-center text-muted">5% (2022-2032)</td>
                                    <td class="text-center">
                                        <a href="/cert/nurse-aide" class="table-link-btn">Start <svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="arrow-link-svg">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="comp-cert-info">
                                            <span class="comp-emoji">📋</span>
                                            <div>
                                                <p class="comp-name">AAMA</p>
                                                <p class="comp-fullname">American Assoc. of Medical Assistants</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center font-med">200</td>
                                    <td class="text-center text-muted">160 minutes</td>
                                    <td class="text-center font-med">Pass/Fail</td>
                                    <td class="text-center"><span
                                            class="comp-diff diff-intermediate">Intermediate</span></td>
                                    <td class="text-center text-salary">$38,980</td>
                                    <td class="text-center text-muted">14% (2022-2032)</td>
                                    <td class="text-center">
                                        <a href="/cert/aama" class="table-link-btn">Start <svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="arrow-link-svg">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="comp-cert-info">
                                            <span class="comp-emoji">🏥</span>
                                            <div>
                                                <p class="comp-name">FMP</p>
                                                <p class="comp-fullname">Family Medicine Practice</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center font-med">120</td>
                                    <td class="text-center text-muted">120 minutes</td>
                                    <td class="text-center font-med">70%</td>
                                    <td class="text-center"><span
                                            class="comp-diff diff-intermediate">Intermediate</span></td>
                                    <td class="text-center text-salary">$57,000</td>
                                    <td class="text-center text-muted">8% (2022-2032)</td>
                                    <td class="text-center">
                                        <a href="/cert/fmp" class="table-link-btn">Start <svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="arrow-link-svg">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="comp-cert-info">
                                            <span class="comp-emoji">🧠</span>
                                            <div>
                                                <p class="comp-name">Counsellor</p>
                                                <p class="comp-fullname">Professional Counselling Certification</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center font-med">160</td>
                                    <td class="text-center text-muted">180 minutes</td>
                                    <td class="text-center font-med">Pass/Fail</td>
                                    <td class="text-center"><span class="comp-diff diff-advanced">High</span></td>
                                    <td class="text-center text-salary">$49,710</td>
                                    <td class="text-center text-muted">11% (2022-2032)</td>
                                    <td class="text-center">
                                        <a href="/cert/counsellor" class="table-link-btn">Start <svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="arrow-link-svg">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="stories-section">
            <div class="max-width-wrapper">
                <div class="stories-header">
                    <div class="stories-header-left">
                        <span class="section-badge tag-green-bg">Student Stories</span>
                        <h2 class="section-heading mt-2">Real careers. Real outcomes.</h2>
                    </div>
                    <div class="stories-header-right">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-rating-icon">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                            </path>
                        </svg>
                        <span class="rating-badge-text">4.9 / 5 from 3,200+ reviews</span>
                    </div>
                </div>

                <div class="stories-cards-grid">
                    <div class="story-card">
                        <div class="star-group-five">
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                        </div>
                        <p class="story-text">"MedCertPrep gave me confidence and a clear path. I started clinicals in 4
                            months and was hired before graduation."</p>
                        <div class="story-footer">
                            <div class="story-author-info">
                                <p class="author-name">Aisha M.</p>
                                <p class="author-role-before"><span class="light-gray">Before:</span> Retail associate
                                </p>
                                <p class="author-role-now">Now: Clinical Medical Assistant</p>
                            </div>
                            <div class="story-salary-box">
                                <span class="salary-label">Salary</span>
                                <span class="salary-val">$52k / yr</span>
                            </div>
                        </div>
                    </div>

                    <div class="story-card">
                        <div class="star-group-five">
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                        </div>
                        <p class="story-text">"The hands-on labs made the difference. I passed the NHA exam on my first
                            try."</p>
                        <div class="story-footer">
                            <div class="story-author-info">
                                <p class="author-name">Jordan L.</p>
                                <p class="author-role-before"><span class="light-gray">Before:</span> Warehouse worker
                                </p>
                                <p class="author-role-now">Now: Phlebotomy Tech II</p>
                            </div>
                            <div class="story-salary-box">
                                <span class="salary-label">Salary</span>
                                <span class="salary-val">$48k / yr</span>
                            </div>
                        </div>
                    </div>

                    <div class="story-card">
                        <div class="star-group-five">
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                        </div>
                        <p class="story-text">"The CEN prep was rigorous but exactly what I needed to specialize in
                            trauma care."</p>
                        <div class="story-footer">
                            <div class="story-author-info">
                                <p class="author-name">Maria S.</p>
                                <p class="author-role-before"><span class="light-gray">Before:</span> Floor RN</p>
                                <p class="author-role-now">Now: Certified Emergency Nurse</p>
                            </div>
                            <div class="story-salary-box">
                                <span class="salary-label">Salary</span>
                                <span class="salary-val">+$22k raise</span>
                            </div>
                        </div>
                    </div>

                    <div class="story-card">
                        <div class="star-group-five">
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                        </div>
                        <p class="story-text">"I had no medical background — within 6 months I had a career thanks to
                            UsExamPrep."</p>
                        <div class="story-footer">
                            <div class="story-author-info">
                                <p class="author-name">Derrick H.</p>
                                <p class="author-role-before"><span class="light-gray">Before:</span> Unemployed</p>
                                <p class="author-role-now">Now: Certified Pharmacy Technician</p>
                            </div>
                            <div class="story-salary-box">
                                <span class="salary-label">Salary</span>
                                <span class="salary-val">$40k / yr</span>
                            </div>
                        </div>
                    </div>

                    <div class="story-card">
                        <div class="star-group-five">
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                        </div>
                        <p class="story-text">"The practice questions are exactly like the real exam. I felt completely
                            prepared walking in."</p>
                        <div class="story-footer">
                            <div class="story-author-info">
                                <p class="author-name">Priya K.</p>
                                <p class="author-role-before"><span class="light-gray">Before:</span> Teacher's
                                    Assistant</p>
                                <p class="author-role-now">Now: CCMA</p>
                            </div>
                            <div class="story-salary-box">
                                <span class="salary-label">Salary</span>
                                <span class="salary-val">$43k / yr</span>
                            </div>
                        </div>
                    </div>

                    <div class="story-card">
                        <div class="star-group-five">
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <svg class="gold-star" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                        </div>
                        <p class="story-text">"Best investment I ever made. The study notes and flashcards are second to
                            none."</p>
                        <div class="story-footer">
                            <div class="story-author-info">
                                <p class="author-name">Thomas B.</p>
                                <p class="author-role-before"><span class="light-gray">Before:</span> Security Guard</p>
                                <p class="author-role-now">Now: Dental Assistant</p>
                            </div>
                            <div class="story-salary-box">
                                <span class="salary-label">Salary</span>
                                <span class="salary-val">$41k / yr</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="videos-section">
            <div class="max-width-wrapper">
                <div class="section-title-wrapper">
                    <span class="section-badge text-teal">Video Lessons</span>
                    <h2 class="section-heading">Learn From Expert Video Lessons</h2>
                    <p class="section-subheading">Watch concise, exam-focused video lessons taught by certified
                        healthcare professionals.</p>
                </div>

                <div class="videos-grid">
                    <div class="video-card">
                        <div class="video-preview-box">
                            <div class="play-btn-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="play-arrow-svg">
                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                </svg>
                            </div>
                            <span class="video-duration">12:30</span>
                        </div>
                        <div class="video-info">
                            <span class="video-category">CNA</span>
                            <h4 class="video-title">CNA Patient Care Fundamentals</h4>
                        </div>
                    </div>

                    <div class="video-card">
                        <div class="video-preview-box">
                            <div class="play-btn-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="play-arrow-svg">
                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                </svg>
                            </div>
                            <span class="video-duration">8:45</span>
                        </div>
                        <div class="video-info">
                            <span class="video-category">Phlebotomy</span>
                            <h4 class="video-title">Phlebotomy Order of Draw</h4>
                        </div>
                    </div>

                    <div class="video-card">
                        <div class="video-preview-box">
                            <div class="play-btn-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="play-arrow-svg">
                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                </svg>
                            </div>
                            <div class="lock-premium-badge">🔒 Premium</div>
                            <span class="video-duration">18:20</span>
                        </div>
                        <div class="video-info">
                            <span class="video-category">PTCE</span>
                            <h4 class="video-title">PTCE Top 200 Medications</h4>
                        </div>
                    </div>

                    <div class="video-card">
                        <div class="video-preview-box">
                            <div class="play-btn-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="play-arrow-svg">
                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                </svg>
                            </div>
                            <div class="lock-premium-badge">🔒 Premium</div>
                            <span class="video-duration">10:15</span>
                        </div>
                        <div class="video-info">
                            <span class="video-category">CCMA</span>
                            <h4 class="video-title">EKG Lead Placement Guide</h4>
                        </div>
                    </div>

                    <div class="video-card">
                        <div class="video-preview-box">
                            <div class="play-btn-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="play-arrow-svg">
                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                </svg>
                            </div>
                            <div class="lock-premium-badge">🔒 Premium</div>
                            <span class="video-duration">14:50</span>
                        </div>
                        <div class="video-info">
                            <span class="video-category">CEN</span>
                            <h4 class="video-title">Triage &amp; ESI Levels</h4>
                        </div>
                    </div>

                    <div class="video-card">
                        <div class="video-preview-box">
                            <div class="play-btn-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="play-arrow-svg">
                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                </svg>
                            </div>
                            <span class="video-duration">11:00</span>
                        </div>
                        <div class="video-info">
                            <span class="video-category">Counsellor</span>
                            <h4 class="video-title">CBT Therapy Techniques</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-section">
            <div class="max-width-wrapper small-max-width">
                <div class="section-title-wrapper">
                    <span class="section-badge text-teal">FAQ</span>
                    <h2 class="section-heading">Frequently Asked Questions</h2>
                </div>

                <div class="faq-accordion-group">
                    <div class="faq-item">
                        <button class="faq-trigger" onclick="toggleFaq(this)">
                            What certifications does UsExamPrep cover?
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="faq-chevron">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="faq-panel">
                            <div class="faq-content">
                                UsExamPrep offers fully aligned courses and detailed practice question banks for 12
                                major healthcare and nursing credentials, including CNA, Nurse Aide, Hospice &amp;
                                Palliative Care, CEN, Family Medicine Practice, CCMA, AAMA, Phlebotomy, Dental
                                Assistant, SLP, and Professional Counseling.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-trigger" onclick="toggleFaq(this)">
                            Are the practice questions similar to the real exam?
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="faq-chevron">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="faq-panel">
                            <div class="faq-content">
                                Yes. Our database is updated constantly to match the current blueprints of NHA, AAMA,
                                PTCE, DANB, and Pearson VUE exams. They model the exact style, distribution, and
                                critical thinking levels of the real tests.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-trigger" onclick="toggleFaq(this)">
                            How does the free trial work?
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="faq-chevron">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="faq-panel">
                            <div class="faq-content">
                                Signing up gives you instant access to a 5-question trial quiz for your certification
                                path. No credit card is needed. You can upgrade easily to get thousands of premium
                                questions, detailed explanations, and tracking analytical tools.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-trigger" onclick="toggleFaq(this)">
                            Can I study on my phone?
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="faq-chevron">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="faq-panel">
                            <div class="faq-content">
                                Absolutely. The entire dynamic dashboard is natively responsive. It works seamlessly on
                                modern mobile devices, large screens, tablets, and features optimized reading styles
                                designed for ultra-small viewports like smartwatches.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-trigger" onclick="toggleFaq(this)">
                            What if I don't pass my exam?
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="faq-chevron">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="faq-panel">
                            <div class="faq-content">
                                We stand by our platform with a Pass Guarantee. If you fully complete our
                                coursework/question banks and score well on our simulation diagnostics but do not pass
                                your official examination, you can get a full extension or refund.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-trigger" onclick="toggleFaq(this)">
                            How often are questions updated?
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="faq-chevron">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="faq-panel">
                            <div class="faq-content">
                                Our medical curriculum advisory committee regularly reads industry update releases from
                                licensing organizations twice a year or whenever blueprints shift, ensuring you never
                                waste time studying outdated info.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    @include('partials.footer')

    <div class="floating-widget" id="floating-cta">
        <div class="widget-inner">
            <button class="widget-close-btn" onclick="document.getElementById('floating-cta').style.display='none'"
                aria-label="Close widget">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="close-svg">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
            <div class="widget-header">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="widget-stars">
                    <path
                        d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                    </path>
                    <path d="M20 3v4"></path>
                    <path d="M22 5h-4"></path>
                    <path d="M4 17v2"></path>
                    <path d="M5 18H3"></path>
                </svg>
                <span class="widget-title">Free Practice Quiz!</span>
            </div>
            <p class="widget-desc">Try 5 free practice questions and see how you score.</p>
            <a href="/certifications"><button class="widget-action-btn">Start Free Quiz &rarr;</button></a>
        </div>
    </div>
</body>

</html>