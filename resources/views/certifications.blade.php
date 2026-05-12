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

                    <div class="cert-card" data-category="nursing" data-tags="cna nurse nursing basic helper clinical">
                        <div class="card-badge">
                            <span class="diff-badge diff-intermediate">Intermediate</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="width:1.75rem; height:1.75rem; color:var(--white);">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                </svg>
                            </div>
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
                                        <rect width="20" height="18" x="2" y="3" rx="2" ry="2"></rect>
                                        <path d="M12 18v-6"></path>
                                        <path d="M9 15h6"></path>
                                    </svg>
                                    <span>350+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z">
                                        </path>
                                        <path d="M6 6h10"></path>
                                        <path d="M6 10h10"></path>
                                    </svg>
                                    <span>Study Notes</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper" style="grid-template-columns: 1fr;">
                                <a href="/certification/cna" class="btn btn-gradient"
                                    style="font-size: var(--fs-xs); padding: 0.65rem;">Explore Certification &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="nursing"
                        data-tags="nurse aide assistance clinical hygiene basic">
                        <div class="card-badge">
                            <span class="diff-badge diff-beginner">Beginner</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="width:1.75rem; height:1.75rem; color:var(--white);">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
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
                                        <rect width="20" height="18" x="2" y="3" rx="2" ry="2"></rect>
                                        <path d="M12 18v-6"></path>
                                        <path d="M9 15h6"></path>
                                    </svg>
                                    <span>280+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z">
                                        </path>
                                        <path d="M6 6h10"></path>
                                        <path d="M6 10h10"></path>
                                    </svg>
                                    <span>Study Notes</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper" style="grid-template-columns: 1fr;">
                                <a href="/certification/nurse-aide" class="btn btn-gradient"
                                    style="font-size: var(--fs-xs); padding: 0.65rem;">Explore Certification &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="nursing"
                        data-tags="fnp medicine nursing nurse clinical primary preventive family advanced practitioner">
                        <div class="card-badge">
                            <span class="diff-badge diff-advanced">Advanced</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="width:1.75rem; height:1.75rem; color:var(--white);">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                            </div>
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
                                        <rect width="20" height="18" x="2" y="3" rx="2" ry="2"></rect>
                                        <path d="M12 18v-6"></path>
                                        <path d="M9 15h6"></path>
                                    </svg>
                                    <span>2050+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z">
                                        </path>
                                        <path d="M6 6h10"></path>
                                        <path d="M6 10h10"></path>
                                    </svg>
                                    <span>Study Notes</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper" style="grid-template-columns: 1fr;">
                                <a href="/certification/fmp" class="btn btn-gradient"
                                    style="font-size: var(--fs-xs); padding: 0.65rem;">Explore Certification &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="nursing"
                        data-tags="hospice palliative end of life compassion pain management ethics grief nursing">
                        <div class="card-badge">
                            <span class="diff-badge diff-advanced">Advanced</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #8b5cf6 0%, #6d28d9 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="width:1.75rem; height:1.75rem; color:var(--white);">
                                    <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18z"></path>
                                    <path d="M12 7v10"></path>
                                    <path d="M8 11h8"></path>
                                </svg>
                            </div>
                            <h3 class="cert-code code-purple" style="font-size: var(--fs-lg); margin-bottom: 0.25rem;">
                                Hospice &amp; Palliative</h3>
                            <p class="text-muted"
                                style="font-size: var(--fs-xs); font-weight: 700; margin-bottom: 0.75rem;">Hospice &amp;
                                Palliative Care</p>
                            <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.5;">Prepare for
                                end-of-life care credentials with resources covering pain titration strategies,
                                compassionate support, ethics, and grief workflows.</p>
                        </div>
                        <div>
                            <div class="card-meta-info">
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect width="20" height="18" x="2" y="3" rx="2" ry="2"></rect>
                                        <path d="M12 18v-6"></path>
                                        <path d="M9 15h6"></path>
                                    </svg>
                                    <span>700+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z">
                                        </path>
                                        <path d="M6 6h10"></path>
                                        <path d="M6 10h10"></path>
                                    </svg>
                                    <span>Study Notes</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper" style="grid-template-columns: 1fr;">
                                <a href="/certification/hospice-and-palliative-care" class="btn btn-gradient"
                                    style="font-size: var(--fs-xs); padding: 0.65rem;">Explore Certification &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="nursing"
                        data-tags="cen emergency triage trauma cardiac critical care vascular respiratory toxicology nursing">
                        <div class="card-badge">
                            <span class="diff-badge diff-advanced">Very High</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #ef4444 0%, #cc1f1f 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="width:1.75rem; height:1.75rem; color:var(--white);">
                                    <path
                                        d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                    </path>
                                    <line x1="12" y1="9" x2="12" y2="13"></line>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                            </div>
                            <h3 class="cert-code code-red" style="font-size: var(--fs-lg); margin-bottom: 0.25rem;">CEN
                            </h3>
                            <p class="text-muted"
                                style="font-size: var(--fs-xs); font-weight: 700; margin-bottom: 0.75rem;">Certified
                                Emergency Nurse</p>
                            <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.5;">Master high-acuity
                                interventions. Target advanced triage modules, compound trauma setups, cardiac
                                emergencies, and toxicological responses.</p>
                        </div>
                        <div>
                            <div class="card-meta-info">
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect width="20" height="18" x="2" y="3" rx="2" ry="2"></rect>
                                        <path d="M12 18v-6"></path>
                                        <path d="M9 15h6"></path>
                                    </svg>
                                    <span>1800+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z">
                                        </path>
                                        <path d="M6 6h10"></path>
                                        <path d="M6 10h10"></path>
                                    </svg>
                                    <span>Study Notes</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper" style="grid-template-columns: 1fr;">
                                <a href="/certification/cen" class="btn btn-gradient"
                                    style="font-size: var(--fs-xs); padding: 0.65rem;">Explore Certification &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="assistant"
                        data-tags="ccma aama clinical assistant medicine ekg phlebotomy administration billing legal ethics">
                        <div class="card-badge">
                            <span class="diff-badge diff-intermediate">Intermediate</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="width:1.75rem; height:1.75rem; color:var(--white);">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="cert-code code-blue" style="font-size: var(--fs-lg); margin-bottom: 0.25rem;">
                                Medical Assistant</h3>
                            <p class="text-muted"
                                style="font-size: var(--fs-xs); font-weight: 700; margin-bottom: 0.75rem;">CCMA &amp;
                                AAMA Prep</p>
                            <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.5;">Ace your clinical
                                medical assisting credentials. Covers comprehensive targets regarding patient care
                                triage, administrative insurance processing, billing rules, and basic EKG anatomical
                                placement landmarks.</p>
                        </div>
                        <div>
                            <div class="card-meta-info">
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect width="20" height="18" x="2" y="3" rx="2" ry="2"></rect>
                                        <path d="M12 18v-6"></path>
                                        <path d="M9 15h6"></path>
                                    </svg>
                                    <span>1200+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z">
                                        </path>
                                        <path d="M6 6h10"></path>
                                        <path d="M6 10h10"></path>
                                    </svg>
                                    <span>Study Notes</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper" style="grid-template-columns: 1fr;">
                                <a href="/certification/medical-assistant" class="btn btn-gradient"
                                    style="font-size: var(--fs-xs); padding: 0.65rem;">Explore Certification &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="pharmacy"
                        data-tags="ptce excpt pharmacy medication safety rules compounding sterile drug dosage calculations federal law inventory">
                        <div class="card-badge">
                            <span class="diff-badge diff-intermediate">Intermediate</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #10b981 0%, #0d9488 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="width:1.75rem; height:1.75rem; color:var(--white);">
                                    <path d="m2 22 1-1h3l9-9 3 3-9 9V22H2Z"></path>
                                    <path d="M22 2a4.5 4.5 0 0 0-6.4 0l-5.1 5.2 6.4 6.4 5.1-5.2A4.5 4.5 0 0 0 22 2Z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="cert-code code-green" style="font-size: var(--fs-lg); margin-bottom: 0.25rem;">
                                Pharmacy Technician</h3>
                            <p class="text-muted"
                                style="font-size: var(--fs-xs); font-weight: 700; margin-bottom: 0.75rem;">PTCE &amp;
                                ExCPT Prep</p>
                            <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.5;">Pass your certified
                                technician layouts. Tackle deep interactive modules involving compound formulations,
                                sterile classifications, inventory logs, and federal medication safety handling
                                guidelines.</p>
                        </div>
                        <div>
                            <div class="card-meta-info">
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect width="20" height="18" x="2" y="3" rx="2" ry="2"></rect>
                                        <path d="M12 18v-6"></path>
                                        <path d="M9 15h6"></path>
                                    </svg>
                                    <span>1050+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z">
                                        </path>
                                        <path d="M6 6h10"></path>
                                        <path d="M6 10h10"></path>
                                    </svg>
                                    <span>Study Notes</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper" style="grid-template-columns: 1fr;">
                                <a href="/certification/pharmacy-technician" class="btn btn-gradient"
                                    style="font-size: var(--fs-xs); padding: 0.65rem;">Explore Certification &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="assistant"
                        data-tags="phlebotomy technician blood laboratory specimen draw draw venipuncture tube colors safety">
                        <div class="card-badge">
                            <span class="diff-badge diff-beginner">Beginner</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #f43f5e 0%, #be185d 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="width:1.75rem; height:1.75rem; color:var(--white);">
                                    <path d="M4.5 16.5c-1.5 1.26-2.5 3.19-2.5 5.5h20c0-2.31-1-4.24-2.5-5.5"></path>
                                    <path d="M12 2v14.5"></path>
                                    <path d="m16 6-4-4-4 4"></path>
                                </svg>
                            </div>
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
                                        <rect width="20" height="18" x="2" y="3" rx="2" ry="2"></rect>
                                        <path d="M12 18v-6"></path>
                                        <path d="M9 15h6"></path>
                                    </svg>
                                    <span>760+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z">
                                        </path>
                                        <path d="M6 6h10"></path>
                                        <path d="M6 10h10"></path>
                                    </svg>
                                    <span>Study Notes</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper" style="grid-template-columns: 1fr;">
                                <a href="/certification/phlebotomy" class="btn btn-gradient"
                                    style="font-size: var(--fs-xs); padding: 0.65rem;">Explore Certification &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <div class="cert-card" data-category="assistant"
                        data-tags="counsellor nce professional counseling therapist therapy behavior health ethics group crisis intervention">
                        <div class="card-badge">
                            <span class="diff-badge diff-advanced">High</span>
                        </div>
                        <div>
                            <div class="cert-icon-box"
                                style="background: linear-gradient(135deg, #6366f1 0%, #4338ca 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="width:1.75rem; height:1.75rem; color:var(--white);">
                                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                                    </path>
                                    <path d="M12 6v6l4 2"></path>
                                </svg>
                            </div>
                            <h3 class="cert-code code-indigo" style="font-size: var(--fs-lg); margin-bottom: 0.25rem;">
                                Counsellor</h3>
                            <p class="text-muted"
                                style="font-size: var(--fs-xs); font-weight: 700; margin-bottom: 0.75rem;">Professional
                                Counselling Certification</p>
                            <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.5;">Prepare for
                                professional therapeutic credentials. Master critical tracks regarding systemic mental
                                health evaluations, ethical decision-making matrix lines, and crisis response controls.
                            </p>
                        </div>
                        <div>
                            <div class="card-meta-info">
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect width="20" height="18" x="2" y="3" rx="2" ry="2"></rect>
                                        <path d="M12 18v-6"></path>
                                        <path d="M9 15h6"></path>
                                    </svg>
                                    <span>1400+ Questions</span>
                                </span>
                                <span class="meta-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z">
                                        </path>
                                        <path d="M6 6h10"></path>
                                        <path d="M6 10h10"></path>
                                    </svg>
                                    <span>Study Notes</span>
                                </span>
                            </div>
                            <div class="card-actions-wrapper" style="grid-template-columns: 1fr;">
                                <a href="/certification/counsellor" class="btn btn-gradient"
                                    style="font-size: var(--fs-xs); padding: 0.65rem;">Explore Certification &rarr;</a>
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