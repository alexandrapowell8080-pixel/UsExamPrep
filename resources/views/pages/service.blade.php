<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $certification['title_abbr'] }} Exam Prep | UsExamPrep</title>
    <meta content="{{ $certification['description'] }}" name="description">
    <link crossorigin="" href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link crossorigin="" href="{{ asset('css/service-pages.css') }}" rel="stylesheet">
</head>

<body>
    <div id="root" class="{{ $certification['colors']['theme_class'] }}">
        <div class="page-wrapper">

            @include('partials.nav-bar')

            <main class="main-content">

                <section class="srv-hero">
                    <div class="srv-hero-bg"></div>
                    <div class="max-width-wrapper relative-z">
                        <div class="srv-hero-grid">
                            <div class="srv-hero-text">
                                <div class="srv-badge">{{ $certification['badge'] }}</div>
                                <h1 class="srv-title">{{ $certification['title_abbr'] }} <span>Exam Prep</span></h1>
                                <p class="srv-subtitle">{{ $certification['title_full'] }}</p>
                                <p class="srv-desc">{{ $certification['description'] }}</p>

                                <div class="srv-meta-flex">
                                    <div class="srv-meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="srv-icon">
                                            <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
                                            <path
                                                d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                            </path>
                                            <path d="M12 11h4"></path>
                                            <path d="M12 16h4"></path>
                                        </svg>
                                        {{ $certification['stats']['questions'] }} Questions
                                    </div>

                                    <div class="srv-meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="srv-icon">
                                            <path d="M12 7v14"></path>
                                            <path
                                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                            </path>
                                        </svg>
                                        Study Notes
                                    </div>
                                </div>

                                {{-- <div class="srv-btn-group">
                                    @foreach($certification['categories'] as $category)
                                    <a href="{{ route('questions.index', [
                                                                            'schoolSlug' => $certification['classification_slug'], 
                                                                            'examSlug' => $category->slug ?? $category['slug'] ?? \Illuminate\Support\Str::slug($category)
                                                                        ]) }}" class="btn btn-outline">
                                        {{ $category->name ?? $category['name'] ?? $category }}
                                    </a>
                                    @endforeach
                                </div> --}}
                            </div>

                            <div class="srv-hero-visual">
                                <div class="srv-visual-card">
                                    <div class="srv-visual-text">{{ $certification['title_abbr'] }}</div>
                                    <p class="srv-visual-sub">Certification Prep</p>
                                    <div class="srv-stars">
                                        @for ($i = 0; $i < 5; $i++) <svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="srv-star">
                                            <path
                                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                            </path>
                                            <circle cx="12" cy="8" r="6"></circle></svg>
                                            @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="srv-section">
                    <div class="max-width-wrapper">
                        <div class="srv-format-layout">
                            <div class="srv-format-main">
                                <span class="srv-label">Exam Format</span>
                                <h2 class="section-heading">{{ $certification['title_abbr'] }} Exam Format &amp;
                                    Structure</h2>

                                <div class="srv-stat-grid">
                                    <div class="srv-stat-box">
                                        <div class="srv-stat-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                </path>
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                <path d="M10 9H8"></path>
                                            </svg></div>
                                        <div class="srv-stat-info">
                                            <p class="stat-lbl">Total Questions</p>
                                            <p class="stat-val">{{ $certification['stats']['total_exam_q'] }}</p>
                                        </div>
                                    </div>
                                    <div class="srv-stat-box">
                                        <div class="srv-stat-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg></div>
                                        <div class="srv-stat-info">
                                            <p class="stat-lbl">Exam Duration</p>
                                            <p class="stat-val">{{ $certification['stats']['duration'] }}</p>
                                        </div>
                                    </div>
                                    <div class="srv-stat-box">
                                        <div class="srv-stat-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                </path>
                                                <circle cx="12" cy="8" r="6"></circle>
                                            </svg></div>
                                        <div class="srv-stat-info">
                                            <p class="stat-lbl">Passing Score</p>
                                            <p class="stat-val">{{ $certification['stats']['passing_score'] }}</p>
                                        </div>
                                    </div>
                                    <div class="srv-stat-box">
                                        <div class="srv-stat-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                                                <path d="M9 22v-4h6v4"></path>
                                            </svg></div>
                                        <div class="srv-stat-info">
                                            <p class="stat-lbl">Exam Provider</p>
                                            <p class="stat-val">{{ $certification['stats']['provider'] }}</p>
                                        </div>
                                    </div>
                                    <div class="srv-stat-box">
                                        <div class="srv-stat-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="18" x2="18" y1="20" y2="10"></line>
                                                <line x1="12" x2="12" y1="20" y2="4"></line>
                                                <line x1="6" x2="6" y1="20" y2="14"></line>
                                            </svg></div>
                                        <div class="srv-stat-info">
                                            <p class="stat-lbl">Difficulty Level</p>
                                            <p class="stat-val">{{ $certification['stats']['difficulty'] }}</p>
                                        </div>
                                    </div>
                                    <div class="srv-stat-box">
                                        <div class="srv-stat-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
                                                </path>
                                            </svg></div>
                                        <div class="srv-stat-info">
                                            <p class="stat-lbl">Failure Rate</p>
                                            <p class="stat-val">{{ $certification['stats']['failure_rate'] }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="srv-categories-wrap">
                                    <h3 class="srv-subheading">Exam Categories</h3>
                                    <div class="srv-pill-flex">
                                        @foreach($certification['categories'] as $category)
                                        <span class="srv-pill">{{ $category }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="srv-sidebar">
                                <h3 class="srv-sidebar-title">Quick Stats</h3>
                                <div class="srv-quick-stats">
                                    <div class="q-stat-row">
                                        <div class="q-stat-left">
                                            <p class="q-lbl">Average Salary</p>
                                            <p class="q-sub">Range: {{ $certification['stats']['salary_range'] }}</p>
                                        </div>
                                        <span class="q-val-highlight">{{ $certification['stats']['salary_avg'] }}</span>
                                    </div>
                                    <div class="q-stat-row">
                                        <p class="q-lbl">Job Growth</p>
                                        <span class="q-val">{{ $certification['stats']['job_growth'] }}</span>
                                    </div>
                                    <div class="q-stat-row">
                                        <p class="q-lbl">Study Duration</p>
                                        <span class="q-val">{{ $certification['stats']['study_duration'] }}</span>
                                    </div>
                                    <div class="q-stat-row">
                                        <p class="q-lbl">Our Question Bank</p>
                                        <span class="q-val">{{ $certification['stats']['bank_size'] }}</span>
                                    </div>
                                    <div class="q-stat-row no-border">
                                        <p class="q-lbl">Free Questions</p>
                                        <span class="q-val-accent">{{ $certification['stats']['free_q'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="srv-section srv-bg-muted">
                    <div class="max-width-wrapper">
                        <div class="section-title-wrapper">
                            <h2 class="section-heading">Topics Covered</h2>
                            <p class="section-subheading">Master every domain tested on the {{
                                $certification['title_abbr'] }} exam</p>
                        </div>
                        <div class="srv-topics-grid">
                            @foreach($certification['topics'] as $topic)
                            <div class="srv-topic-card">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="topic-icon">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                                <span class="topic-name">{{ $topic }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section class="srv-section">
                    <div class="max-width-wrapper">
                        <div class="srv-learn-layout">
                            <div class="srv-learn-list-wrap">
                                <h2 class="section-heading">What You'll Learn</h2>
                                <div class="srv-learn-list">
                                    @foreach($certification['learn_points'] as $index => $point)
                                    <div class="learn-item">
                                        <div class="learn-num">{{ $index + 1 }}</div>
                                        <p class="learn-text">{{ $point }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="srv-deep-dives">
                                @foreach($certification['deep_dives'] as $dive)
                                <div class="deep-dive-card">
                                    <div class="dive-tag">{{ $dive['tag'] }}</div>
                                    <h4 class="dive-title">{{ $dive['title'] }}</h4>
                                    <p class="dive-desc">{{ $dive['desc'] }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

                <section class="srv-cta-strip">
                    <div class="max-width-wrapper sm-container text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="cta-sparkle">
                            <path
                                d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                            </path>
                        </svg>
                        <h2 class="cta-title">Start Your {{ $certification['title_abbr'] }} Prep Today</h2>
                        <p class="cta-desc">Get unlimited access to {{ $certification['stats']['questions'] }} practice
                            questions, study notes, flashcards, and video lessons.</p>
                        <div class="srv-btn-group justify-center">
                            <a href="{{ route('questions.index', ['schoolSlug' => $certification['classification_slug'], 'examSlug' => $certification['id']]) }}"
                                class="btn btn-white btn-lg shadow-xl">
                                Start Free Practice &rarr;
                            </a>
                        </div>
                    </div>
                </section>

                <section class="srv-section">
                    <div class="max-width-wrapper sm-container">
                        <div class="section-title-wrapper">
                            <h2 class="section-heading">{{ $certification['title_abbr'] }} Prep FAQ</h2>
                        </div>
                        <div class="faq-accordion-group">
                            <div class="faq-item">
                                <button class="faq-trigger" onclick="window.toggleFaq(this)">How many questions are in
                                    the {{ $certification['title_abbr'] }} question bank?<svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="faq-chevron">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button>
                                <div class="faq-panel">
                                    <div class="faq-content">We have a comprehensive bank of {{
                                        $certification['stats']['questions'] }} questions directly mirroring the real
                                        exam.</div>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-trigger" onclick="window.toggleFaq(this)">Is the {{
                                    $certification['title_abbr'] }} course enough to pass the exam?<svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="faq-chevron">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button>
                                <div class="faq-panel">
                                    <div class="faq-content">Yes! Our platform provides everything you need, including
                                        detailed rationales, study notes, and flashcards.</div>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-trigger" onclick="window.toggleFaq(this)">Do I get detailed
                                    explanations for each question?<svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="faq-chevron">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button>
                                <div class="faq-panel">
                                    <div class="faq-content">Absolutely. Every question includes a thorough rationale
                                        explaining why the correct answer is right and why the distractors are wrong.
                                    </div>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-trigger" onclick="window.toggleFaq(this)">Can I access the course on
                                    my phone?<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="faq-chevron">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button>
                                <div class="faq-panel">
                                    <div class="faq-content">Yes, our platform is 100% optimized for mobile devices,
                                        tablets, and even smartwatches, allowing you to study anywhere.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @include('partials.related-certs', ['otherCerts' => $otherCerts])

            </main>

            @include('partials.footer')

            <div class="srv-floating-widget" id="floating-widget">
                <div class="widget-inner srv-gradient-bg shadow-xl">
                    <button class="widget-close-btn"
                        onclick="document.getElementById('floating-widget').style.display='none'">
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
                        </svg>
                        <span class="widget-title">Free Practice Quiz!</span>
                    </div>
                    <p class="widget-desc">Try {{ $certification['stats']['free_q'] }} and see how you score.</p>

                    <a
                        href="{{ route('questions.index', ['schoolSlug' => $certification['classification_slug'], 'examSlug' => $certification['id']]) }}">
                        <button class="btn btn-white w-full shadow-sm widget-action-text">Start Free Quiz
                            &rarr;</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/welcome.js') }}"></script>
</body>

</html>