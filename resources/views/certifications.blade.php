<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Certifications | UsExamPrep</title>
    <meta
        content="Explore our available healthcare certification preparation courses. Choose from CNA, Nurse Aide, CCMA, PTCE, and more."
        name="description">

    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <script src="{{ asset('js/welcome.js') }}"></script>

</head>

<body>

    @include('partials.nav-bar')

    <main>
        <section class="search-filter-area">
            <div class="max-width-wrapper">
                <div class="section-title-wrapper" style="margin-bottom: 1.5rem;">
                    <span class="section-badge" style="color: var(--primary-color);">All Prep Courses</span>
                    <h1 class="section-heading">Explore Healthcare Certifications</h1>
                    <p class="section-subheading">Choose your specialization to access customized practice exams, smart
                        diagnostics, study guidelines, and premium flashcards.</p>
                </div>

                <div class="search-box-container">
                    <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                    <input type="text" id="cert-search" class="search-input"
                        placeholder="Search certifications by name, tag, or difficulty...">
                </div>

                <div class="filter-buttons-scroll">
                    <button class="filter-btn active" onclick="filterCategory('all', this)">All Careers</button>
                    <button class="filter-btn" onclick="filterCategory('nursing', this)">Nursing</button>
                    <button class="filter-btn" onclick="filterCategory('assistant', this)">Medical Assistant</button>
                    <button class="filter-btn" onclick="filterCategory('pharmacy', this)">Pharmacy</button>
                </div>
            </div>
        </section>

        <section class="certifications-wrapper">
            <div class="max-width-wrapper">
                <div class="cert-cards-grid" id="certs-grid">

                    <div class="cert-card" data-category="nursing" data-tags="cna nurse nursing basic helper">
                        <div class="card-badge">
                            <span class="diff-badge diff-intermediate">Intermediate</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);">🩺</div>
                            <h3 class="cert-code code-teal" style="font-size: var(--fs-lg); margin-bottom: 0.25rem;">CNA
                            </h3>
                            <p class="text-muted"
                                style="font-size: var(--fs-xs); font-weight: 700; margin-bottom: 0.75rem;">Certified
                                Nursing Assistant</p>
                            <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.5;">Prepare for the CNA
                                exam with comprehensive practice questions covering basic patient care, hygiene, and
                                daily living support.</p>
                        </div>
                        <div>
                            <div class="card-meta-info">
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                    </svg>
                                    <span>350+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>
                                    <span>Video Lessons</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper">
                                <a href="{{ route('questions.index', ['schoolSlug' => 'nursing', 'examSlug' => 'cna']) }}"
                                    class="btn btn-gradient" style="font-size: var(--fs-xs); padding: 0.5rem;">Start
                                    Practice</a>
                                <a href="{{ route('study-notes.outline', ['school' => 'cna']) }}"
                                    class="btn btn-outline" style="font-size: var(--fs-xs); padding: 0.5rem;">View
                                    Notes</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="nursing" data-tags="nurse aide assistance clinical hygiene">
                        <div class="card-badge">
                            <span class="diff-badge diff-beginner">Beginner</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">👨‍⚕️</div>
                            <h3 class="cert-code code-emerald" style="font-size: var(--fs-lg); margin-bottom: 0.25rem;">
                                Nurse Aide</h3>
                            <p class="text-muted"
                                style="font-size: var(--fs-xs); font-weight: 700; margin-bottom: 0.75rem;">Nurse Aide
                                Certification</p>
                            <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.5;">Master core nurse
                                aide skills with structured practices focusing heavily on resident privacy rights,
                                safety protocols, and clinic communications.</p>
                        </div>
                        <div>
                            <div class="card-meta-info">
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                    </svg>
                                    <span>280+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>
                                    <span>Video Lessons</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper">
                                <a href="{{ route('questions.index', ['schoolSlug' => 'nursing', 'examSlug' => 'nurse-aide']) }}"
                                    class="btn btn-gradient" style="font-size: var(--fs-xs); padding: 0.5rem;">Start
                                    Practice</a>
                                <a href="{{ route('study-notes.outline', ['school' => 'nurse-aide']) }}"
                                    class="btn btn-outline" style="font-size: var(--fs-xs); padding: 0.5rem;">View
                                    Notes</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="assistant"
                        data-tags="ccma clinical assistant medicine ekg phlebotomy">
                        <div class="card-badge">
                            <span class="diff-badge diff-intermediate">Intermediate</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);">❤️</div>
                            <h3 class="cert-code code-blue" style="font-size: var(--fs-lg); margin-bottom: 0.25rem;">
                                CCMA</h3>
                            <p class="text-muted"
                                style="font-size: var(--fs-xs); font-weight: 700; margin-bottom: 0.75rem;">Certified
                                Clinical Medical Assistant</p>
                            <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.5;">Ace your CCMA
                                examination with active exercises regarding client intake, clinical procedures,
                                introductory EKG parsing, and pharmacology fundamentals.</p>
                        </div>
                        <div>
                            <div class="card-meta-info">
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                    </svg>
                                    <span>380+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>
                                    <span>Video Lessons</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper">
                                <a href="{{ route('questions.index', ['schoolSlug' => 'medical-assistant', 'examSlug' => 'ccma']) }}"
                                    class="btn btn-gradient" style="font-size: var(--fs-xs); padding: 0.5rem;">Start
                                    Practice</a>
                                <a href="{{ route('study-notes.outline', ['school' => 'ccma']) }}"
                                    class="btn btn-outline" style="font-size: var(--fs-xs); padding: 0.5rem;">View
                                    Notes</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="pharmacy"
                        data-tags="ptce pharmacy medication safety rules compounding sterile">
                        <div class="card-badge">
                            <span class="diff-badge diff-intermediate">Intermediate</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #10b981 0%, #0d9488 100%);">💊</div>
                            <h3 class="cert-code code-green" style="font-size: var(--fs-lg); margin-bottom: 0.25rem;">
                                PTCE</h3>
                            <p class="text-muted"
                                style="font-size: var(--fs-xs); font-weight: 700; margin-bottom: 0.75rem;">Pharmacy
                                Technician Certification Exam</p>
                            <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.5;">Pass the PTCE with
                                thorough practice sessions addressing federal pharmacy laws, medication safety
                                protocols, calculations, and sterile compounding workflows.</p>
                        </div>
                        <div>
                            <div class="card-meta-info">
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                    </svg>
                                    <span>360+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>
                                    <span>Video Lessons</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper">
                                <a href="{{ route('questions.index', ['schoolSlug' => 'pharmacy', 'examSlug' => 'ptce']) }}"
                                    class="btn btn-gradient" style="font-size: var(--fs-xs); padding: 0.5rem;">Start
                                    Practice</a>
                                <a href="{{ route('study-notes.outline', ['school' => 'ptce']) }}"
                                    class="btn btn-outline" style="font-size: var(--fs-xs); padding: 0.5rem;">View
                                    Notes</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="assistant"
                        data-tags="phlebotomy technician blood laboratory specimen draw">
                        <div class="card-badge">
                            <span class="diff-badge diff-beginner">Beginner</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #f43f5e 0%, #be185d 100%);">🔬</div>
                            <h3 class="cert-code code-rose" style="font-size: var(--fs-lg); margin-bottom: 0.25rem;">
                                Phlebotomy</h3>
                            <p class="text-muted"
                                style="font-size: var(--fs-xs); font-weight: 700; margin-bottom: 0.75rem;">Phlebotomy
                                Technician Certification</p>
                            <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.5;">Master phlebotomy
                                skills with specific practice questions regarding venipuncture techniques, tube order of
                                draw, specimen handling, and overall patient comfort.</p>
                        </div>
                        <div>
                            <div class="card-meta-info">
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                    </svg>
                                    <span>250+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>
                                    <span>Video Lessons</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper">
                                <a href="{{ route('questions.index', ['schoolSlug' => 'medical-assistant', 'examSlug' => 'phlebotomy']) }}"
                                    class="btn btn-gradient" style="font-size: var(--fs-xs); padding: 0.5rem;">Start
                                    Practice</a>
                                <a href="{{ route('study-notes.outline', ['school' => 'phlebotomy']) }}"
                                    class="btn btn-outline" style="font-size: var(--fs-xs); padding: 0.5rem;">View
                                    Notes</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="assistant"
                        data-tags="dental assistant anatomy hygiene radiation teeth">
                        <div class="card-badge">
                            <span class="diff-badge diff-intermediate">Intermediate</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);">🦷</div>
                            <h3 class="cert-code code-sky" style="font-size: var(--fs-lg); margin-bottom: 0.25rem;">
                                Dental</h3>
                            <p class="text-muted"
                                style="font-size: var(--fs-xs); font-weight: 700; margin-bottom: 0.75rem;">Dental
                                Assistant Certification</p>
                            <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.5;">Build strong dental
                                assisting logic. Practice comprehensive modules about chairside protocols, radiography,
                                teeth anatomy, and infection controls.</p>
                        </div>
                        <div>
                            <div class="card-meta-info">
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                    </svg>
                                    <span>270+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>
                                    <span>Video Lessons</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper">
                                <a href="{{ route('questions.index', ['schoolSlug' => 'medical-assistant', 'examSlug' => 'dental-assistant']) }}"
                                    class="btn btn-gradient" style="font-size: var(--fs-xs); padding: 0.5rem;">Start
                                    Practice</a>
                                <a href="{{ route('study-notes.outline', ['school' => 'dental-assistant']) }}"
                                    class="btn btn-outline" style="font-size: var(--fs-xs); padding: 0.5rem;">View
                                    Notes</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="assistant"
                        data-tags="slp praxis speech language sound throat pediatric">
                        <div class="card-badge">
                            <span class="diff-badge diff-advanced">Advanced</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #ec4899 0%, #db2777 100%);">🗣️</div>
                            <h3 class="cert-code code-pink" style="font-size: var(--fs-lg); margin-bottom: 0.25rem;">SLP
                            </h3>
                            <p class="text-muted"
                                style="font-size: var(--fs-xs); font-weight: 700; margin-bottom: 0.75rem;">
                                Speech-Language Pathology (Praxis)</p>
                            <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.5;">Prepare for SLP
                                licensure assessments. Dive into specialized modules on language sound structures, child
                                growth milestones, and swallowing pathology therapies.</p>
                        </div>
                        <div>
                            <div class="card-meta-info">
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                    </svg>
                                    <span>290+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>
                                    <span>Video Lessons</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper">
                                <a href="{{ route('questions.index', ['schoolSlug' => 'medical-assistant', 'examSlug' => 'slp']) }}"
                                    class="btn btn-gradient" style="font-size: var(--fs-xs); padding: 0.5rem;">Start
                                    Practice</a>
                                <a href="{{ route('study-notes.outline', ['school' => 'slp']) }}"
                                    class="btn btn-outline" style="font-size: var(--fs-xs); padding: 0.5rem;">View
                                    Notes</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="nursing"
                        data-tags="fnp medicine nursing nurse clinical primary preventive family">
                        <div class="card-badge">
                            <span class="diff-badge diff-advanced">Advanced</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);">🏥</div>
                            <h3 class="cert-code code-orange" style="font-size: var(--fs-lg); margin-bottom: 0.25rem;">
                                FNP</h3>
                            <p class="text-muted"
                                style="font-size: var(--fs-xs); font-weight: 700; margin-bottom: 0.75rem;">Family Nurse
                                Practitioner</p>
                            <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.5;">Prepare extensively
                                for complex care logic. Focus heavily on primary clinical therapies, preventive disease
                                management, and long-term health planning.</p>
                        </div>
                        <div>
                            <div class="card-meta-info">
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                    </svg>
                                    <span>2050+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>
                                    <span>Video Lessons</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper">
                                <a href="{{ route('questions.index', ['schoolSlug' => 'nursing', 'examSlug' => 'fnp']) }}"
                                    class="btn btn-gradient" style="font-size: var(--fs-xs); padding: 0.5rem;">Start
                                    Practice</a>
                                <a href="{{ route('study-notes.outline', ['school' => 'fnp']) }}"
                                    class="btn btn-outline" style="font-size: var(--fs-xs); padding: 0.5rem;">View
                                    Notes</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')

</body>

</html>