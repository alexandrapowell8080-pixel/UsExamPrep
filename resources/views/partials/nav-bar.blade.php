<nav class="navigation-bar">
    <div class="nav-container">
        <a class="nav-logo-group" href="/">
            <div class="logo-icon-wrapper">
                <img src="{{ asset('images/logo.png') }}" alt="UsExamPrep Logo" class="nav-logo-image">
            </div>

            <span class="logo-text">
                Us<span class="brand-accent">Exam</span>Prep
            </span>
        </a>

        <div class="nav-links-desktop">
            <a class="nav-link active" href="/">Home</a>

            <div class="nav-dropdown-wrapper">
                <button class="nav-dropdown-btn" type="button" id="certifications-menu-btn" aria-haspopup="menu"
                    aria-expanded="false">
                    Certifications
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chevron-svg">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>

                <div class="dropdown-content" role="menu" aria-orientation="vertical"
                    aria-labelledby="certifications-menu-btn">
                    <a href="/certifications" class="dropdown-link" role="menuitem">All Certifications</a>

                    <div class="dropdown-group">
                        <div class="dropdown-group-trigger">
                            <span>Nursing</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="chevron-right-svg">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                        <div class="dropdown-subcontent" role="menu">
                            <a class="dropdown-link" href="/cert/cna" role="menuitem">CNA — Certified Nursing
                                Assistant</a>
                            <a class="dropdown-link" href="/cert/nurse-aide" role="menuitem">Nurse Aide — Nurse Aide
                                Certification</a>
                            <a class="dropdown-link" href="/cert/hospice" role="menuitem">Hospice — Hospice &amp;
                                Palliative Care</a>
                            <a class="dropdown-link" href="/cert/cen" role="menuitem">CEN — Certified Emergency
                                Nurse</a>
                            <a class="dropdown-link" href="/cert/fmp" role="menuitem">FMP — Family Medicine Practice</a>
                        </div>
                    </div>

                    <div class="dropdown-group">
                        <div class="dropdown-group-trigger">
                            <span>Medical Assistant</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="chevron-right-svg">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                        <div class="dropdown-subcontent" role="menu">
                            <a class="dropdown-link" href="/cert/ccma" role="menuitem">CCMA — Certified Clinical Medical
                                Assistant</a>
                            <a class="dropdown-link" href="/cert/aama" role="menuitem">AAMA — American Association of
                                Medical Assistants</a>
                            <a class="dropdown-link" href="/cert/phlebotomy" role="menuitem">Phlebotomy — Phlebotomy
                                Technician Certification</a>
                            <a class="dropdown-link" href="/cert/dental" role="menuitem">Dental — Dental Assistant
                                Certification</a>
                            <a class="dropdown-link" href="/cert/slp" role="menuitem">SLP — Speech-Language
                                Pathology</a>
                            <a class="dropdown-link" href="/cert/counsellor" role="menuitem">Counsellor — Professional
                                Counselling Certification</a>
                        </div>
                    </div>

                    <div class="dropdown-group">
                        <div class="dropdown-group-trigger">
                            <span>Pharmacy Certification</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="chevron-right-svg">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                        <div class="dropdown-subcontent" role="menu">
                            <a class="dropdown-link" href="/cert/ptce" role="menuitem">PTCE — Pharmacy Technician
                                Certification Exam</a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="nav-link" href="/pricing">Pricing</a>
            <a class="nav-link" href="/blog">Blog</a>
            <a class="nav-link" href="/about">About</a>
            <a class="nav-link" href="/contact">Contact</a>
        </div>

        <div class="nav-actions-desktop">
            <a href="/dashboard"><button class="btn btn-text">Dashboard</button></a>
            <a href="/certifications"><button class="btn btn-gradient">Start Practicing</button></a>
        </div>

        <button class="menu-mobile-toggle" aria-label="Toggle Menu" type="button" id="mobile-menu-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="menu-icon-svg">
                <line x1="4" x2="20" y1="12" y2="12"></line>
                <line x1="4" x2="20" y1="6" y2="6"></line>
                <line x1="4" x2="20" y1="18" y2="18"></line>
            </svg>
        </button>
    </div>
</nav>