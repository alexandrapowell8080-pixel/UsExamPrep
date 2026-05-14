<x-study-notes>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @section('title', $school->name)
    @section('description', $school->name . ' outline')
    @section('keywords', $school->name)
    @section('canonical', config('app.url') . '/study-notes/' . $school->slug)
    <meta name="robots" content="noindex, nofollow">

    <div class="min-h-screen bg-brand-hero sm:py-16 py-5 px-4">
        <div class="max-w-7xl mx-auto">

            {{-- Header --}}
            <div class="text-center sm:mb-16 mb-6">
                <div
                    class="inline-flex items-center gap-2 bg-white border border-teal-100 text-teal-700 px-4 py-1.5 rounded-full text-sm font-bold mb-6 shadow-sm">
                    <span class="flex h-2 w-2 rounded-full bg-teal-500 animate-pulse"></span>
                    Certified Nursing Assistant Program
                </div>

                <h1 class="sm:text-4xl text-2xl md:text-6xl font-black text-[#1e293b] tracking-tight leading-none mb-6">
                    MASTER <span class="text-brand-gradient">STUDY GUIDE</span>
                </h1>

                <p class="sm:text-lg text-slate-500 max-w-2xl mx-auto leading-relaxed">
                    A comprehensive clinical roadmap designed to take you from foundational healthcare knowledge to
                    professional certification.
                </p>
            </div>

            {{-- Grid Sections --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 sm:px-5 ">
                @foreach ($sections as $index => $section)
                    <div
                        class="group bg-white sm:rounded-3xl rounded-xl shadow-sm border border-slate-200/60 overflow-hidden hover:shadow-xl hover:shadow-teal-500/5 transition-all duration-300 flex flex-col">

                        <div class="sm:p-8 p-4 flex-grow">
                            {{-- Section Icon & Badge --}}
                            <div class="flex justify-between items-start mb-6">
                                <div
                                    class="sm:w-14 sm:h-14 w-10 h-10 flex items-center justify-center rounded-2xl bg-teal-50 text-teal-600 group-hover:bg-brand-primary  transition-colors duration-300 shadow-inner">
                                    <i class="fa-solid fa-book-open text-xl"></i>
                                </div>
                                <span
                                    class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 bg-slate-50 px-3 py-1 rounded-lg">
                                    Section {{ sprintf('%02d', $index + 1) }}
                                </span>
                            </div>

                            <h2
                                class="text-xl font-extrabold text-slate-800 mb-4 group-hover:text-teal-700 transition-colors">
                                {{ $section->name }}
                            </h2>

                            <ul class="space-y-3">
                                @foreach ($section->topics as $topic)
                                    <li>
                                        <a href="{{ route('study-notes.content', ['school' => request('school'), 'section' => $section->slug, 'topic' => $topic->slug]) }}"
                                            class="flex items-center group/link">
                                            <div
                                                class="mr-3 w-1.5 h-1.5 rounded-full bg-slate-200 group-hover/link:bg-teal-500 group-hover/link:scale-125 transition-all">
                                            </div>
                                            <span
                                                class="text-slate-600 group-hover/link:text-teal-700 text-sm font-semibold transition-colors">
                                                {{ $topic->name }}
                                            </span>
                                            <i
                                                class="fa-solid fa-chevron-right ml-auto text-[10px] opacity-0 group-hover/link:opacity-100 -translate-x-2 group-hover/link:translate-x-0 transition-all text-teal-500"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- <div
                            class="px-8 py-4 bg-slate-50/50 border-t border-slate-100 flex justify-between items-center">
                            <span class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Core
                                Skill</span>
                            <a href="#"
                                class="text-teal-600 text-xs font-black hover:text-teal-800 transition-colors tracking-tight">
                                EXPLORE TOPICS →
                            </a>
                        </div> --}}
                    </div>
                @endforeach
            </div>

            {{-- Footer Banner --}}
            <div class="mt-20 bg-brand-banner rounded-[2.5rem] p-1 shadow-2xl shadow-blue-500/20">
                <div class="bg-slate-900/10 backdrop-blur-2xl rounded-[2.4rem] p-8 md:p-12 text-white">
                    <div class="flex flex-col lg:flex-row items-center justify-between gap-10">

                        <div class="text-center lg:text-left">
                            <h3 class="text-3xl md:text-4xl font-black mb-4 tracking-tight">
                                Ready for your Exam?
                            </h3>
                            <p class="text-blue-50/80 max-w-xl text-lg font-medium leading-relaxed">
                                Review these core modules as many times as needed. Our goal is to ensure you feel 100%
                                confident on test day.
                            </p>
                        </div>

                        <div class="flex items-center gap-6">
                            <div
                                class="bg-white/10 backdrop-blur-xl border border-white/20 px-8 py-6 rounded-[2rem] text-center min-w-[140px]">
                                <p class="text-4xl font-black mb-1">9</p>
                                <p class="text-xs font-bold uppercase tracking-widest text-blue-100">Modules</p>
                            </div>

                            <div
                                class="bg-white/10 backdrop-blur-xl border border-white/20 px-8 py-6 rounded-[2rem] text-center min-w-[140px]">
                                <p class="text-4xl font-black mb-1">50+</p>
                                <p class="text-xs font-bold uppercase tracking-widest text-blue-100">Lessons</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-study-notes>
