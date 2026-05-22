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
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>

            <div class="nav-dropdown-wrapper">
                <button
                    class="nav-dropdown-btn {{ request()->is('certification/certified-nursing-assistant', 'certification/family-nurse-practitioner', 'certification/hospice-palliative-care', 'certification/certified-emergency-nurse') ? 'active' : '' }}"
                    type="button">
                    Nursing
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chevron-svg">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div class="dropdown-content">
                    <a class="dropdown-link" href="/certification/certified-nursing-assistant">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--cna-teal);">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                        </svg>
                        CNA Prep
                    </a>
                    <a class="dropdown-link" href="/certification/certified-nursing-assistant">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" style="width:1rem; height:1rem; color:var(--aide-emerald);">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        Nurse Aide Prep
                    </a>
                    <a class="dropdown-link" href="/certification/family-nurse-practitioner">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--fnp-orange);">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        FNP Prep
                    </a>
                    <a class="dropdown-link" href="/certification/hospice-palliative-care">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--hosp-purple);">
                            <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18z"></path>
                            <path d="M12 7v10"></path>
                            <path d="M8 11h8"></path>
                        </svg>
                        Hospice &amp; Palliative
                    </a>
                    <a class="dropdown-link" href="/certification/certified-emergency-nurse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--cen-red);">
                            <path
                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                            </path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        CEN Prep
                    </a>
                </div>
            </div>

            <div class="nav-dropdown-wrapper">
                <button class="nav-dropdown-btn {{ request()->is('certification/medical-assistant') ? 'active' : '' }}"
                    type="button">
                    Medical Assistant
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chevron-svg">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div class="dropdown-content">
                    <a class="dropdown-link" href="/certification/medical-assistant">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--ccma-blue);">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg>
                        CCMA Prep
                    </a>
                    <a class="dropdown-link" href="/certification/medical-assistant">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--dental-sky);">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 16v-4"></path>
                            <path d="M12 8h.01"></path>
                        </svg>
                        AAMA Prep
                    </a>
                </div>
            </div>

            <div class="nav-dropdown-wrapper">
                <button
                    class="nav-dropdown-btn {{ request()->is('certification/pharmacy-technician') ? 'active' : '' }}"
                    type="button">
                    Pharmacy Technician
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chevron-svg">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div class="dropdown-content">
                    <a class="dropdown-link" href="/certification/pharmacy-technician">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--hosp-purple);">
                            <path d="m2 22 1-1h3l9-9 3 3-9 9V22H2Z"></path>
                            <path d="M22 2a4.5 4.5 0 0 0-6.4 0l-5.1 5.2 6.4 6.4 5.1-5.2A4.5 4.5 0 0 0 22 2Z"></path>
                        </svg>
                        PTCE Prep
                    </a>
                    <a class="dropdown-link" href="/certification/pharmacy-technician">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--aide-emerald);">
                            <path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z"></path>
                            <path d="m8.5 8.5 7 7"></path>
                        </svg>
                        ExCPT Prep
                    </a>
                </div>
            </div>

            <a class="nav-link {{ request()->is('certification/phlebotomy-technician-certification') ? 'active' : '' }}"
                href="/certification/phlebotomy-technician-certification">Phlebotomy Technician</a>
            <a class="nav-link {{ request()->is('certification/national-counselor-examination') ? 'active' : '' }}"
                href="/certification/national-counselor-examination">Counsellor</a>
        </div>

        <div class="nav-actions-desktop">
            <a href="{{ route('home') }}#certifications"><button class="btn btn-gradient">Start Practicing</button></a>
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