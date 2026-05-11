<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://media.base44.com/images/public/69fdcb5440d32f0540edfdf6/39aa2e136_logo.png" rel="icon"
        type="image/svg+xml">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="/manifest.json" rel="manifest">
    <title>{{ $cert['title_abbr'] }} Exam Prep | UsExamPrep</title>
    <meta content="{{ $cert['description'] }}" name="description">

    <link crossorigin="" href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <script type="module">
        if (window.self === window.top) {
      let lastPath = "";
      function getPageNameFromPath(path) {
        const segments = path.split("/").filter(Boolean);
        return segments[0] || null;
      }
      function trackPageView() {
        const path = window.location.pathname;
        if (path === lastPath) return;
        lastPath = path;
        const pageName = getPageNameFromPath(path) || "home";
        const appId = "69fde1cb3764cfcea8b63635";
        if (!appId) return;
        fetch(`/app-logs/${appId}/log-user-in-app/${pageName}`, {
          method: "POST",
        }).catch(() => {});
      }
      const originalPushState = history.pushState.bind(history);
      history.pushState = function (...args) {
        originalPushState(...args);
        trackPageView();
      };
      const originalReplaceState = history.replaceState.bind(history);
      history.replaceState = function (...args) {
        originalReplaceState(...args);
        trackPageView();
      };
      window.addEventListener("popstate", trackPageView);
      trackPageView();
    }
    </script>
</head>

<body>
    <div id="root">
        <div class="min-h-screen flex flex-col">

            @include('partials.nav')

            <main class="flex-1">
                <div>
                    <section class="py-16 lg:py-20 {{ $cert['colors']['bg_light'] }} relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-white/60 to-transparent"></div>
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                            <div class="grid lg:grid-cols-2 gap-10 items-center">
                                <div>
                                    <div
                                        class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent shadow hover:bg-primary/80 {{ $cert['colors']['badge_bg'] }} {{ $cert['colors']['badge_text'] }} mb-4">
                                        {{ $cert['badge'] }}</div>
                                    <h1 class="font-heading text-4xl sm:text-5xl font-bold text-foreground mb-3">{{
                                        $cert['title_abbr'] }} <span class="{{ $cert['colors']['badge_text'] }}">Exam
                                            Prep</span></h1>
                                    <p class="text-lg text-muted-foreground mb-3">{{ $cert['title_full'] }}</p>
                                    <p class="text-muted-foreground leading-relaxed mb-8">{{ $cert['description'] }}</p>

                                    <div class="flex flex-wrap gap-4 mb-8">
                                        <div class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clipboard-list w-4 h-4 text-primary">
                                                <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
                                                <path
                                                    d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                                </path>
                                                <path d="M12 11h4"></path>
                                                <path d="M12 16h4"></path>
                                                <path d="M8 11h.01"></path>
                                                <path d="M8 16h.01"></path>
                                            </svg>{{ $cert['stats']['questions'] }} Questions</div>
                                        <div class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-play w-4 h-4 text-primary">
                                                <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                            </svg>Video Lessons</div>
                                        <div class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-brain w-4 h-4 text-primary">
                                                <path
                                                    d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z">
                                                </path>
                                                <path
                                                    d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z">
                                                </path>
                                                <path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4"></path>
                                            </svg>Flashcards</div>
                                        <div class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-book-open w-4 h-4 text-primary">
                                                <path d="M12 7v14"></path>
                                                <path
                                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                </path>
                                            </svg>Study Notes</div>
                                    </div>

                                    <div class="flex flex-wrap gap-3">
                                        <a
                                            href="{{ route('questions.index', ['schoolSlug' => $cert['school_slug'], 'examSlug' => $cert['id']]) }}">
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors hover:bg-primary/90 h-10 rounded-md px-8 bg-gradient-to-r {{ $cert['colors']['gradient'] }} text-white shadow-lg">Start
                                                Questions Now <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right w-4 h-4 ml-2">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg></button>
                                        </a>
                                        <a href="{{ route('study-notes.outline', ['school' => $cert['id']]) }}">
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors border border-input bg-transparent shadow-sm hover:bg-accent hover:text-accent-foreground h-10 rounded-md px-8">View
                                                Study Notes</button>
                                        </a>
                                    </div>
                                </div>

                                <div class="flex justify-center">
                                    <div
                                        class="w-64 h-64 rounded-3xl bg-gradient-to-br {{ $cert['colors']['gradient'] }} flex items-center justify-center shadow-2xl">
                                        <div class="text-center text-white">
                                            <div class="text-6xl font-heading font-bold mb-2">{{ $cert['title_abbr'] }}
                                            </div>
                                            <p class="text-white/80 text-sm">Certification Prep</p>
                                            <div class="mt-4 flex items-center justify-center gap-1">
                                                @for ($i = 0; $i < 5; $i++) <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-award w-5 h-5 text-yellow-300">
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
                        </div>
                    </section>

                    <section class="py-16 bg-background">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="grid lg:grid-cols-[1fr_300px] gap-10 items-start">
                                <div>
                                    <span
                                        class="inline-block px-3 py-1 rounded-full bg-slate-100 text-slate-600 text-xs font-semibold uppercase tracking-widest mb-4">Exam
                                        Format</span>
                                    <h2 class="font-heading text-2xl sm:text-3xl font-bold mb-8">{{ $cert['title_abbr']
                                        }} Exam Format &amp; Structure</h2>

                                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                                        <div
                                            class="flex items-center gap-4 p-4 rounded-xl border bg-slate-50/60 hover:shadow-sm transition-shadow">
                                            <div
                                                class="w-10 h-10 rounded-lg bg-white border flex items-center justify-center flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-text w-5 h-5 text-slate-500">
                                                    <path
                                                        d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                    </path>
                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                    <path d="M10 9H8"></path>
                                                </svg></div>
                                            <div>
                                                <p class="text-xs text-muted-foreground">Total Questions</p>
                                                <p class="font-semibold text-sm text-foreground">{{
                                                    $cert['stats']['total_exam_q'] }}</p>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center gap-4 p-4 rounded-xl border bg-slate-50/60 hover:shadow-sm transition-shadow">
                                            <div
                                                class="w-10 h-10 rounded-lg bg-white border flex items-center justify-center flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-clock w-5 h-5 text-slate-500">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <polyline points="12 6 12 12 16 14"></polyline>
                                                </svg></div>
                                            <div>
                                                <p class="text-xs text-muted-foreground">Exam Duration</p>
                                                <p class="font-semibold text-sm text-foreground">{{
                                                    $cert['stats']['duration'] }}</p>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center gap-4 p-4 rounded-xl border bg-slate-50/60 hover:shadow-sm transition-shadow">
                                            <div
                                                class="w-10 h-10 rounded-lg bg-white border flex items-center justify-center flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-award w-5 h-5 text-slate-500">
                                                    <path
                                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                    </path>
                                                    <circle cx="12" cy="8" r="6"></circle>
                                                </svg></div>
                                            <div>
                                                <p class="text-xs text-muted-foreground">Passing Score</p>
                                                <p class="font-semibold text-sm text-foreground">{{
                                                    $cert['stats']['passing_score'] }}</p>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center gap-4 p-4 rounded-xl border bg-slate-50/60 hover:shadow-sm transition-shadow">
                                            <div
                                                class="w-10 h-10 rounded-lg bg-white border flex items-center justify-center flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-building w-5 h-5 text-slate-500">
                                                    <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                                                    <path d="M9 22v-4h6v4"></path>
                                                </svg></div>
                                            <div>
                                                <p class="text-xs text-muted-foreground">Exam Provider</p>
                                                <p class="font-semibold text-sm text-foreground">{{
                                                    $cert['stats']['provider'] }}</p>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center gap-4 p-4 rounded-xl border bg-slate-50/60 hover:shadow-sm transition-shadow">
                                            <div
                                                class="w-10 h-10 rounded-lg bg-white border flex items-center justify-center flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-chart-no-axes-column w-5 h-5 text-slate-500">
                                                    <line x1="18" x2="18" y1="20" y2="10"></line>
                                                    <line x1="12" x2="12" y1="20" y2="4"></line>
                                                    <line x1="6" x2="6" y1="20" y2="14"></line>
                                                </svg></div>
                                            <div>
                                                <p class="text-xs text-muted-foreground">Difficulty Level</p>
                                                <p class="font-semibold text-sm text-foreground">{{
                                                    $cert['stats']['difficulty'] }}</p>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center gap-4 p-4 rounded-xl border bg-slate-50/60 hover:shadow-sm transition-shadow">
                                            <div
                                                class="w-10 h-10 rounded-lg bg-white border flex items-center justify-center flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-triangle-alert w-5 h-5 text-slate-500">
                                                    <path
                                                        d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
                                                    </path>
                                                </svg></div>
                                            <div>
                                                <p class="text-xs text-muted-foreground">Failure Rate</p>
                                                <p class="font-semibold text-sm text-foreground">{{
                                                    $cert['stats']['failure_rate'] }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <h3 class="font-heading font-bold text-base mb-3">Exam Categories</h3>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($cert['categories'] as $category)
                                            <span
                                                class="px-3 py-1.5 rounded-full text-xs font-semibold text-white bg-gradient-to-r {{ $cert['colors']['gradient'] }}">{{
                                                $category }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-card border rounded-2xl shadow-sm p-6">
                                    <h3 class="font-heading font-bold text-lg mb-5">Quick Stats</h3>
                                    <div class="space-y-4">
                                        <div class="flex justify-between items-start pb-4 border-b">
                                            <div>
                                                <p class="text-sm text-muted-foreground">Average Salary</p>
                                                <p class="text-xs text-muted-foreground">Range: {{
                                                    $cert['stats']['salary_range'] }}</p>
                                            </div>
                                            <span class="font-bold text-sm {{ $cert['colors']['badge_text'] }}">{{
                                                $cert['stats']['salary_avg'] }}</span>
                                        </div>
                                        <div class="flex justify-between items-center pb-4 border-b">
                                            <p class="text-sm text-muted-foreground">Job Growth</p><span
                                                class="font-bold text-sm">{{ $cert['stats']['job_growth'] }}</span>
                                        </div>
                                        <div class="flex justify-between items-center pb-4 border-b">
                                            <p class="text-sm text-muted-foreground">Study Duration</p><span
                                                class="font-bold text-sm">{{ $cert['stats']['study_duration'] }}</span>
                                        </div>
                                        <div class="flex justify-between items-center pb-4 border-b">
                                            <p class="text-sm text-muted-foreground">Our Question Bank</p><span
                                                class="font-bold text-sm">{{ $cert['stats']['bank_size'] }}</span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm text-muted-foreground">Free Questions</p><span
                                                class="font-bold text-sm text-amber-600">{{ $cert['stats']['free_q']
                                                }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="py-16 bg-muted/30">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="text-center mb-10">
                                <h2 class="font-heading text-3xl font-bold">Topics Covered</h2>
                                <p class="text-muted-foreground mt-2">Master every domain tested on the {{
                                    $cert['title_abbr'] }} exam</p>
                            </div>
                            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-4xl mx-auto">
                                @foreach($cert['topics'] as $topic)
                                <div
                                    class="p-4 rounded-xl border {{ $cert['colors']['border_light'] }} {{ $cert['colors']['bg_light'] }} flex items-center gap-3 hover:shadow-md transition-shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big w-5 h-5 {{ $cert['colors']['badge_text'] }} flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span class="font-medium text-sm">{{ $topic }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>

                    <section class="py-16 bg-muted/30">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="grid lg:grid-cols-2 gap-10 items-center">
                                <div>
                                    <h2 class="font-heading text-3xl font-bold mb-6">What You'll Learn</h2>
                                    <div class="space-y-4">
                                        @foreach($cert['learn_points'] as $index => $point)
                                        <div class="flex items-start gap-3">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-gradient-to-br {{ $cert['colors']['gradient'] }} flex items-center justify-center flex-shrink-0 mt-0.5">
                                                <span class="text-white font-bold text-xs">{{ $index + 1 }}</span>
                                            </div>
                                            <p class="text-muted-foreground">{{ $point }}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    @foreach($cert['deep_dives'] as $dive)
                                    <div class="bg-card rounded-xl border p-5 hover:shadow-md transition-shadow">
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 font-semibold text-foreground mb-2 text-xs">
                                            {{ $dive['tag'] }}</div>
                                        <h4 class="font-semibold text-sm mb-1">{{ $dive['title'] }}</h4>
                                        <p class="text-xs text-muted-foreground line-clamp-2">{{ $dive['desc'] }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="py-16 bg-gradient-to-r {{ $cert['colors']['gradient'] }}">
                        <div class="max-w-3xl mx-auto px-4 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-sparkles w-8 h-8 text-white/80 mx-auto mb-4">
                                <path
                                    d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                </path>
                            </svg>
                            <h2 class="font-heading text-3xl font-bold text-white mb-4">Start Your {{
                                $cert['title_abbr'] }} Prep Today</h2>
                            <p class="text-white/80 mb-8">Get unlimited access to {{ $cert['stats']['questions'] }}
                                practice questions, study notes, flashcards, and video lessons.</p>
                            <div class="flex flex-wrap justify-center gap-4">
                                <a
                                    href="{{ route('questions.index', ['schoolSlug' => $cert['school_slug'], 'examSlug' => $cert['id']]) }}">
                                    <button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors h-10 rounded-md px-8 bg-white text-foreground hover:bg-white/90 shadow-xl">Start
                                        Free Practice →</button>
                                </a>
                                <a href="/pricing">
                                    <button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors border bg-transparent shadow-sm hover:text-accent-foreground h-10 rounded-md px-8 border-white/40 text-white hover:bg-white/10">View
                                        Pricing</button>
                                </a>
                            </div>
                        </div>
                    </section>

                    <section class="py-16 bg-background">
                        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="text-center mb-10">
                                <h2 class="font-heading text-3xl font-bold">{{ $cert['title_abbr'] }} Prep FAQ</h2>
                            </div>
                            <div class="faq-accordion-group">
                                <div class="faq-item">
                                    <button class="faq-trigger" onclick="window.toggleFaq(this)">How many questions are
                                        in the {{ $cert['title_abbr'] }} question bank?<svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="faq-chevron">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg></button>
                                    <div class="faq-panel">
                                        <div class="faq-content">We have a comprehensive bank of {{
                                            $cert['stats']['questions'] }} questions directly mirroring the real exam.
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <button class="faq-trigger" onclick="window.toggleFaq(this)">Is the {{
                                        $cert['title_abbr'] }} course enough to pass the exam?<svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="faq-chevron">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg></button>
                                    <div class="faq-panel">
                                        <div class="faq-content">Yes! Our platform provides everything you need,
                                            including detailed rationales, study notes, and flashcards.</div>
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
                                        <div class="faq-content">Absolutely. Every question includes a thorough
                                            rationale explaining why the correct answer is right and why the distractors
                                            are wrong.</div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <button class="faq-trigger" onclick="window.toggleFaq(this)">Can I access the course
                                        on my phone?<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
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

                    @include('partials.related-certs', ['current' => $cert['id']])

                </div>
            </main>

            @include('partials.footer')

            <div class="fixed bottom-4 right-4 z-50 max-w-xs">
                <div
                    class="bg-gradient-to-br {{ $cert['colors']['gradient'] }} rounded-2xl p-5 shadow-2xl text-white relative">
                    <button class="absolute top-2 right-2 p-1 rounded-full hover:bg-white/20 transition-colors"
                        onclick="this.parentElement.style.display='none'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-x w-4 h-4">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                    <div class="flex items-center gap-2 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-sparkles w-5 h-5 text-yellow-300">
                            <path
                                d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                            </path>
                        </svg>
                        <span class="font-heading font-bold text-sm">Free Practice Quiz!</span>
                    </div>
                    <p class="text-sm text-white/90 mb-3">Try {{ $cert['stats']['free_q'] }} and see how you score.</p>
                    <a
                        href="{{ route('questions.index', ['schoolSlug' => $cert['school_slug'], 'examSlug' => $cert['id']]) }}">
                        <button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap transition-colors h-8 rounded-md px-3 text-xs w-full bg-white {{ $cert['colors']['badge_text'] }} hover:bg-white/90 font-semibold shadow-md">Start
                            Free Quiz →</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/welcome.js') }}"></script>
</body>

</html>