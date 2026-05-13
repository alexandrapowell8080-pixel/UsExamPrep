<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta name="description" content="{{ $metaDescription }}">
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <script src="{{ asset('js/welcome.js') }}" defer></script>

</head>
<body class="bg-teal-50">
    @include('partials.nav-bar')

    <main class="flex-1">
        <div class="min-h-screen bg-teal-50">
            <div class="border-b bg-white/80 backdrop-blur-sm sticky top-16 z-40">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <a class="font-heading font-bold text-teal-700" href="/cert/{{ $exam->school->slug }}">{{ $exam->name }}</a>
                        </div>
                        <div class="inline-flex h-9 items-center justify-center rounded-lg p-1 bg-gray-100">
                            <a href="/study-notes/{{ $exam->school->slug }}" class="inline-flex items-center gap-1.5 px-3 py-1 text-xs rounded-md hover:bg-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 7v14"/><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"/></svg>
                                Study Notes
                            </a>
                            <button class="inline-flex items-center gap-1.5 px-3 py-1 text-xs rounded-md bg-white text-gray-900 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path d="M8 16h.01"/></svg>
                                Questions
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="grid lg:grid-cols-[220px_1fr_280px] gap-6">
                    <div class="hidden lg:block">
                        <div class="sticky top-36">
                            <div class="bg-white rounded-2xl border p-5 space-y-5">
                                <div>
                                    <h3 class="font-heading font-bold text-sm mb-2">Progress</h3>
                                    <div class="relative w-full overflow-hidden rounded-full bg-teal-100 h-2 mb-2">
                                        <div id="progressBar" class="h-full bg-teal-500 transition-all duration-300" style="width: 0%"></div>
                                    </div>
                                    <p class="text-xs text-gray-500"><span id="answeredCount">0</span> of {{ $totalQuestions }} answered</p>
                                </div>
                                <div class="space-y-3">
                                    <button class="flex w-full items-center justify-between rounded-md border border-gray-200 px-3 py-2 text-xs h-9 bg-gray-50">
                                        <span>All Topics</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
                                    </button>
                                    <button class="flex w-full items-center justify-between rounded-md border border-gray-200 px-3 py-2 text-xs h-9 bg-gray-50">
                                        <span>All Difficulties</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
                                    </button>
                                </div>
                                <div>
                                    <h3 class="font-heading font-bold text-sm mb-3">Questions</h3>
                                    <div class="grid grid-cols-5 gap-1.5" id="questionNav">
                                        @foreach($questions as $q)
                                            <button class="question-btn w-9 h-9 rounded-full text-xs font-semibold transition-all relative bg-gray-100 text-gray-600 hover:bg-gray-200" data-question="{{ $loop->index }}">
                                                {{ $loop->iteration }}
                                            </button>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="space-y-1.5 text-xs">
                                    <div class="flex items-center gap-2">
                                        <div class="w-3 h-3 rounded-full bg-teal-500"></div>
                                        <span>Current</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="w-3 h-3 rounded-full bg-green-100 border border-green-200"></div>
                                        <span>Correct</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="w-3 h-3 rounded-full bg-red-100 border border-red-200"></div>
                                        <span>Incorrect</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="w-3 h-3 rounded-full bg-gray-100"></div>
                                        <span>Unanswered</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="space-y-5" id="questionContainer">
                            @foreach($questions as $index => $question)
                            <div class="question-slide {{ $index === 0 ? 'active' : 'hidden' }}" data-index="{{ $index }}">
                                <div class="bg-white rounded-2xl border p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold bg-teal-100 text-teal-700">{{ $exam->school->name }}</div>
                                            <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 font-semibold text-gray-700 text-xs">{{ $question->question_type }}</div>
                                            <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 font-semibold text-gray-700 text-xs">Easy</div>
                                        </div>
                                        <span class="text-xs text-gray-500">Q{{ $question->id }}</span>
                                    </div>
                                    <p class="font-medium text-gray-900 leading-relaxed">{{ $question->question }}</p>
                                </div>

                               <div class="space-y-4">
    @foreach($question->choices as $choice)
        @php
            $letter = $choice['letter'];
            $isCorrect = $choice['is_correct'];
        @endphp
        <div class="bg-white border rounded-xl p-4 cursor-pointer transition-all text-sm hover:border-gray-400/30 hover:shadow-sm answer-option" 
             data-correct="{{ $isCorrect ? 'true' : 'false' }}" 
             data-question="{{ $loop->index }}">
            <div class="flex items-start gap-3">
                {{-- Letter badge with fixed visibility --}}
                <div style="width:28px;height:28px;border-radius:50%;background:#14b8a6;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <span style="color:#ffffff;font-size:12px;font-weight:700;line-height:1;">{{ $letter }}</span>
                </div>
                <div class="flex-1">
                    <span>{{ $letter }}. {{ $choice['text'] }}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>

                                <div class="flex items-center gap-3">
                                    <button class="inline-flex items-center justify-center gap-2 rounded-md text-sm font-medium h-9 px-4 py-2 flex-1 bg-gradient-to-r from-teal-400 to-teal-600 text-white shadow-lg disabled:opacity-50 check-answer-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
                                        Check Answer
                                    </button>
                                    <button class="inline-flex items-center justify-center gap-2 rounded-md text-sm font-medium h-9 px-4 py-2 border border-gray-200 hover:bg-gray-50 skip-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 4 15 12 5 20 5 4"/><line x1="19" x2="19" y1="5" y2="19"/></svg>
                                        Skip
                                    </button>
                                    <button class="inline-flex items-center justify-center rounded-md text-sm font-medium h-9 w-9 border border-gray-200 hover:bg-gray-50 flag-btn" title="Flag question">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"/></svg>
                                    </button>
                                </div>

                                <div class="rationale-section space-y-4 hidden">
                                    <div class="rounded-xl p-4 bg-red-50 border border-red-200 incorrect-message hidden">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-red-600"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
                                            <span class="font-heading font-bold text-red-700">Incorrect — but you're learning! 📚</span>
                                        </div>
                                    </div>
                                    <div class="rounded-xl p-4 bg-green-50 border border-green-200 correct-message hidden">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-green-600"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
                                            <span class="font-heading font-bold text-green-700">Correct! Well done! 🎉</span>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-xl border p-5">
                                        <h4 class="font-heading font-bold text-sm mb-2 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-amber-500"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/><path d="M9 18h6"/><path d="M10 22h4"/></svg>
                                            Detailed Rationale
                                        </h4>
                                        <p class="text-sm text-gray-600 leading-relaxed">{{ $question->rationale }}</p>
                                    </div>
                                    <div class="bg-amber-50 rounded-xl border border-amber-200 p-5">
                                        <h4 class="font-heading font-bold text-sm mb-2 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-amber-600"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                                            Students Also Get This Wrong
                                        </h4>
                                        <p class="text-sm text-amber-800 leading-relaxed">{{ $question->wrong_answer ?? 'Review this question carefully.' }}</p>
                                    </div>
                                    <div class="grid sm:grid-cols-2 gap-3">
                                        <div class="bg-white rounded-xl border p-4 flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-blue-600"><path d="M12 7v14"/><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"/></svg>
                                            </div>
                                            <div>
                                                <p class="text-xs text-gray-500">Related Notes</p>
                                                <p class="text-sm font-semibold">{{ $question->question_type }}</p>
                                            </div>
                                        </div>
                                        <div class="bg-white rounded-xl border p-4 flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-purple-600"><polygon points="6 3 20 12 6 21 6 3"/></svg>
                                            </div>
                                            <div>
                                                <p class="text-xs text-gray-500">Suggested Video</p>
                                                <p class="text-sm font-semibold">{{ $exam->name }} Review</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="inline-flex items-center justify-center gap-2 rounded-md text-sm font-medium h-9 px-4 py-2 flex-1 bg-gradient-to-r from-teal-400 to-teal-600 text-white shadow-lg next-question-btn hidden">
                                    Next Question
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                </button>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="hidden lg:block">
                        <div class="sticky top-36">
                            <div class="space-y-5">
                                <div class="rounded-2xl border p-5 bg-teal-50 border-teal-200">
                                    <div class="flex items-center gap-3 mb-4">
                                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-400 to-teal-600 flex items-center justify-center shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/></svg>
                                        </div>
                                        <div>
                                            <h3 class="font-heading font-bold">{{ $exam->name }}</h3>
                                            <p class="text-xs text-gray-600">{{ $exam->school->name }}</p>
                                        </div>
                                    </div>
                                    <a href="/cert/{{ $exam->school->slug }}">
                                        <button class="w-full text-xs rounded-md border border-gray-200 px-3 py-2 hover:bg-gray-50">View Full Course</button>
                                    </a>
                                </div>

                                <div class="bg-white rounded-2xl border p-5">
                                    <h3 class="font-heading font-bold text-sm mb-4 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-teal-500"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                                        Study Progress
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between text-xs mb-1">
                                                <span class="text-gray-500">Questions Answered</span>
                                                <span class="font-semibold"><span id="progressAnswered">0</span>/{{ $totalQuestions }}</span>
                                            </div>
                                            <div class="relative w-full overflow-hidden rounded-full bg-teal-100 h-2">
                                                <div id="progressBar2" class="h-full bg-teal-500 transition-all duration-300" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-xs mb-1">
                                                <span class="text-gray-500">Accuracy</span>
                                                <span class="font-semibold"><span id="accuracyPercent">0</span>%</span>
                                            </div>
                                            <div class="relative w-full overflow-hidden rounded-full bg-teal-100 h-2">
                                                <div id="accuracyBar" class="h-full bg-teal-500 transition-all duration-300" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="text-center p-3 rounded-xl bg-green-50 border border-green-200">
                                                <span class="text-lg font-bold text-green-600" id="correctCount">0</span>
                                                <p class="text-[10px] text-green-600">Correct</p>
                                            </div>
                                            <div class="text-center p-3 rounded-xl bg-red-50 border border-red-200">
                                                <span class="text-lg font-bold text-red-600" id="incorrectCount">0</span>
                                                <p class="text-[10px] text-red-600">Incorrect</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-gradient-to-br from-teal-500 to-blue-600 rounded-2xl p-5 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-yellow-300 mb-3"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/><path d="M20 3v4"/><path d="M22 5h-4"/><path d="M4 17v2"/><path d="M5 18H3"/></svg>
                                    <h3 class="font-heading font-bold text-sm mb-1">Upgrade for Full Access</h3>
                                    <p class="text-xs text-white/80 mb-4">Unlock unlimited questions, video lessons, and exam simulations.</p>
                                    <a href="/pricing">
                                        <button class="w-full text-xs rounded-md px-3 py-2 bg-white text-teal-600 hover:bg-white/90 font-semibold">View Plans →</button>
                                    </a>
                                </div>

                                <div class="bg-white rounded-2xl border p-5">
                                    <h3 class="font-heading font-bold text-sm mb-3 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-blue-500"><path d="M12 7v14"/><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"/></svg>
                                        Recommended Notes
                                    </h3>
                                    <div class="space-y-2">
                                        @forelse($recommendedNotes ?? [] as $note)
                                            <a href="{{ $note->url ?? '/notes/' . Str::slug($note->title) }}" class="block w-full text-left p-2.5 rounded-lg bg-gray-50 text-xs font-medium hover:bg-teal-50 hover:text-teal-700 flex items-center justify-between">
                                                <span>{{ $note->title }}</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
                                            </a>
                                        @empty
                                            <a href="/notes/patient-care" class="block w-full text-left p-2.5 rounded-lg bg-gray-50 text-xs font-medium hover:bg-teal-50 hover:text-teal-700 flex items-center justify-between">
                                                <span>Patient Care</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
                                            </a>
                                            <a href="/notes/infection-control" class="block w-full text-left p-2.5 rounded-lg bg-gray-50 text-xs font-medium hover:bg-teal-50 hover:text-teal-700 flex items-center justify-between">
                                                <span>Infection Control</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
                                            </a>
                                            <a href="/notes/safety" class="block w-full text-left p-2.5 rounded-lg bg-gray-50 text-xs font-medium hover:bg-teal-50 hover:text-teal-700 flex items-center justify-between">
                                                <span>Safety & Emergency</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
                                            </a>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>