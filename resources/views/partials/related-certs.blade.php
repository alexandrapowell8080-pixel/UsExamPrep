<section class="py-16 bg-muted/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="font-heading text-2xl font-bold">Related Certifications</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">

            @if($current !== 'nurse-aide')
            <a class="block h-full" href="{{ route('cert.show', 'nurse-aide') }}">
                <div
                    class="h-full rounded-2xl border border-emerald-200 bg-emerald-50 p-6 transition-all duration-300 hover:shadow-xl hover:shadow-primary/5 group">
                    <div class="flex items-start justify-between mb-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-400 to-cyan-600 flex items-center justify-center shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-user-check w-6 h-6 text-white">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <polyline points="16 11 18 13 22 9"></polyline>
                            </svg>
                        </div>
                        <div
                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold border-transparent bg-emerald-100 text-emerald-700">
                            Beginner</div>
                    </div>
                    <h3 class="font-heading font-bold text-lg text-emerald-700 mb-1">Nurse Aide</h3>
                    <p class="text-xs text-muted-foreground mb-2">Nurse Aide Certification</p>
                    <p class="text-sm text-muted-foreground leading-relaxed mb-4 line-clamp-2">Master nurse aide skills
                        with practice tests on resident care, safety procedures, and healthcare communication.</p>
                </div>
            </a>
            @endif

            @if($current !== 'cna')
            <a class="block h-full" href="{{ route('cert.show', 'cna') }}">
                <div
                    class="h-full rounded-2xl border border-teal-200 bg-teal-50 p-6 transition-all duration-300 hover:shadow-xl hover:shadow-primary/5 group">
                    <div class="flex items-start justify-between mb-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-400 to-teal-600 flex items-center justify-center shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-heart w-6 h-6 text-white">
                                <path
                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold border-transparent bg-teal-100 text-teal-700">
                            Intermediate</div>
                    </div>
                    <h3 class="font-heading font-bold text-lg text-teal-700 mb-1">CNA</h3>
                    <p class="text-xs text-muted-foreground mb-2">Certified Nursing Assistant</p>
                    <p class="text-sm text-muted-foreground leading-relaxed mb-4 line-clamp-2">Prepare for the CNA exam
                        with comprehensive practice questions covering patient care, infection control, and daily living
                        activities.</p>
                </div>
            </a>
            @endif

        </div>
    </div>
</section>