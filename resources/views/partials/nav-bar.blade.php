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
                            <path d="M4.8 2.3A.3.3 0 1 0 5 2H4a2 2 0 0 0-2 2v5a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6V4a2 2 0 0 0-2-2h-1a.2.2 0 1 0 .3.3A3 3 0 0 1 12 5v4c0 2-1.5 3.5-3.3 3.9a4.5 4.5 0 0 1-1.4 0C5.5 12.5 4 11 4 9V5a3 3 0 0 1 .8-2.7Z"></path><path d="M8 15v4a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-4"></path><circle cx="20" cy="10" r="2"></circle>
                        </svg>
                        CNA Prep
                    </a>
                    <a class="dropdown-link" href="/certification/certified-nursing-assistant">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--aide-emerald);">
                            <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M9 14h6"></path><path d="M12 11v6"></path>
                        </svg>
                        Nurse Aide Prep
                    </a>
                    <a class="dropdown-link" href="/certification/family-nurse-practitioner">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--fnp-orange);">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        FNP Prep
                    </a>
                    <a class="dropdown-link" href="/certification/hospice-palliative-care">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--hosp-purple);">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path><path d="M8 11h8"></path><path d="M12 8v6"></path>
                        </svg>
                        Hospice &amp; Palliative
                    </a>
                    <a class="dropdown-link" href="/certification/certified-emergency-nurse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--cen-red);">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
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
                            <path d="M11 2a2 2 0 0 0-2 2v5H4a2 2 0 0 0-2 2v2c0 1.1.9 2 2 2h5v5c0 1.1.9 2 2 2h2a2 2 0 0 0 2-2v-5h5a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-5V4a2 2 0 0 0-2-2h-2z"></path>
                        </svg>
                        CCMA Prep
                    </a>
                    <a class="dropdown-link" href="/certification/medical-assistant">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--dental-sky);">
                            <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"></path><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line>
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
                            <path d="M10 2v7.527a2 2 0 0 1-.211.896L4.72 20.55a1 1 0 0 0 .9 1.45h12.76a1 1 0 0 0 .9-1.45l-5.069-10.127A2 2 0 0 1 14 9.527V2"></path><path d="M8.5 2h7"></path><path d="M14 9.5 10 14"></path>
                        </svg>
                        PTCE Prep
                    </a>
                    <a class="dropdown-link" href="/certification/pharmacy-technician">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="width:1rem; height:1rem; color:var(--aide-emerald);">
                            <path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z"></path><path d="m8.5 8.5 7 7"></path>
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