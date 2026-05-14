<x-study-notes>
    @section('title', $topic->name)
    @section('description', $topic->name . ' study notes')
    @section('keywords', $school->name . ',' . $section->name . ',' . $topic->name)
    @section('canonical', config('app.url') . '/study-notes/' . $school->slug . '/' . $section->slug . '/' .
        $topic->slug)
        <meta name="robots" content="noindex, nofollow">

        <div class="min-h-screen   px-2 md:px-8 pb-4  flex sm:flex-row flex-col-reverse">


            <div id="sidebar-accordion"
                class="flex flex-col sm:w-[20%] h-screen bg-gray-50 border-r border-gray-200 overflow-y-auto">

                <nav class="flex flex-col py-4 px-3 space-y-1">
                    <p class="font-bold text-2xl">Context</p>
                    {{-- {{ $sections }} --}}
                    @foreach ($sections as $section)
                        <details class="group [&_summary::-webkit-details-marker]:hidden"
                            @if (request()->route('section')->name == $section->name) open @endif>
                            <summary
                                class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700 transition-all">
                                <span class="text-sm font-semibold uppercase tracking-wider">
                                    {{ $section->name }}
                                </span>
                                <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </summary>

                            <nav class="mt-1.5 ml-4 flex flex-col border-l border-gray-200">
                                @foreach ($section->topics as $nav_topic)
                                    <a href="{{ route('study-notes.content', ['school' => request('school'), 'section' => $section->slug, 'topic' => $nav_topic->slug]) }}"
                                        class="block px-4 py-2 text-sm font-medium rounded-md transition-colors
   {{ request()->routeIs('study-notes.content') && request()->segment(4) === $nav_topic->slug
       ? 'text-indigo-600 bg-indigo-50'
       : 'text-gray-900 hover:text-indigo-600 hover:bg-indigo-50' }}">
                                        {{ $nav_topic->name }}
                                    </a>
                                @endforeach
                            </nav>
                        </details>
                    @endforeach
                </nav>
            </div>


            <div class="sm:w-[80%] w-screen  mx-auto pt-5 max-h-screen overflow-scroll hide-scrollbar">

                {{-- Breadcrumb & Back --}}
                <nav class="mb-8 flex items-center justify-between">
                    <a href="{{ route('study-notes.outline', ['school' => request('school')]) }}"
                        class="flex items-center text-sm font-bold text-teal-600 hover:text-teal-700 transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="sm:block hidden">BACK TO CURRICULUM</span>
                    </a>
                    {{-- <span class="text-xs font-black tracking-widest text-slate-400 uppercase">Module 01: Healthcare
                    Foundations</span> --}}
                </nav>

                {{-- Hero Header --}}
                <header
                    class="bg-white rounded-t-[2rem] p-8 md:p-12 shadow-sm border border-slate-200/60 mb-5 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-teal-50 rounded-bl-full opacity-50"></div>
                    <div class="relative z-10">
                        <h1 class="text-3xl text-center md:text-5xl font-black text-slate-900 leading-tight mb-4">
                            {{ $topic->name }}
                        </h1>
                        {{-- <p class="text-lg text-slate-500 max-w-3xl font-medium text-center">
                            Exploring the critical scope of practice, ethical boundaries, and the essential nature of the
                            Nursing Assistant within the interdisciplinary healthcare team.
                        </p> --}}
                    </div>
                </header>

                <article
                    class="w-11/12 mx-auto prose max-w-none ai-content bg-white rounded-b-[2rem] pb-5 shadow-sm  overflow-hidden">
                    @if (filled($notes->content))
                        {!! Str::markdown($notes->content) !!}
                    @else
                        <div class="text-center py-10 text-gray-500">
                            <h3 class="text-lg font-semibold mb-2">No Notes Available</h3>
                            <p>Content for this section has not been added yet.</p>
                        </div>
                    @endif
                </article>

                {{-- Summary Sidebar/Bottom --}}
                {{-- <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-3xl border border-slate-200">
                    <h4 class="font-black text-slate-800 uppercase text-xs tracking-widest mb-4">Exam Highlight</h4>
                    <p class="text-sm text-slate-600 italic">
                        "The state exam frequently tests the 'Right to Refuse.' Remember: A resident can refuse any care. Your job is to stop, explain why the care is needed, and notify the nurse if they still refuse."
                    </p>
                </div>
                <div class="bg-teal-600 p-6 rounded-3xl text-white">
                    <h4 class="font-black uppercase text-xs tracking-widest mb-4 opacity-80">Quick Quiz Prep</h4>
                    <p class="text-sm font-medium">
                        Who is the most important member of the healthcare team? <br>
                        <strong>Answer: The Resident/Patient.</strong>
                    </p>
                </div>
            </div> --}}
            </div>
        </div>
        <style type="text/tailwindcss">
            /*.ai-content h2 {
                        font-size: 1.5rem;
                        font-weight: bold;
                        margin-top: 1.5rem;
                        margin-bottom: 0.5rem;
                    }

                    .ai-content h3 {
                        font-size: 1.25rem;
                        font-weight: bold;
                        margin-top: 1.25rem;
                        margin-bottom: 0.5rem;
                    }

                    .ai-content ul {
                        list-style-type: disc;
                        padding-left: 1.5rem;
                    }

                     Add more tags as needed */

            .ai-content {
                line-height: 1.6;
                color: #374151;
                /* gray-700 */
            }

            .ai-content h2 {
                font-size: 1.75rem;
                /* Slightly larger */
                font-weight: 700;
                color: #111827;
                /* gray-900 */
                margin-top: 2rem;
                margin-bottom: 0.75rem;
                border-bottom: 2px solid #f3f4f6;
                /* Subtle underline for separation */
                padding-bottom: 0.5rem;
            }

            .ai-content h3 {
                font-size: 1.4rem;
                font-weight: 600;
                color: #1f2937;
                /* gray-800 */
                margin-top: 1.5rem;
                margin-bottom: 0.5rem;
            }

            .ai-content ul,
            .ai-content ol {
                margin-bottom: 1.25rem;
                padding-left: 1.5rem;
            }

            .ai-content ul {
                list-style-type: disc;
            }

            .ai-content ol {
                list-style-type: decimal;
            }

            .ai-content li {
                margin-bottom: 0.25rem;
            }

            /* --- Enhanced Table Styling --- */

            /* 1. Responsiveness: Wrap tables in markdown if possible,
           otherwise this ensures they don't overflow */
            .ai-content table {
                width: 100%;
                border-collapse: collapse;
                margin: 1.5rem 0;
                font-size: 0.95rem;
                text-align: left;
                border-radius: 0.5rem;
                overflow: hidden;
                /* Clips corners of the border */
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
                border: 1px solid #e5e7eb;
            }

            /* Header Styling */
            .ai-content table thead {
                background-color: #f9fafb;
                border-bottom: 2px solid #e5e7eb;
            }

            .ai-content table th {
                padding: 0.75rem 1rem;
                font-weight: 600;
                text-transform: uppercase;
                font-size: 0.8rem;
                letter-spacing: 0.05em;
                color: #4b5563;
            }

            /* Body Styling */
            .ai-content table td {
                padding: 0.75rem 1rem;
                border-bottom: 1px solid #f3f4f6;
                vertical-align: top;
            }

            /* Zebra Striping for readability */
            .ai-content table tbody tr:nth-child(even) {
                background-color: #fcfcfd;
            }

            /* Hover effect */
            .ai-content table tbody tr:hover {
                background-color: #f3f4f6;
                transition: background-color 0.2s ease;
            }

            /* Handle Bold text inside tables */
            .ai-content table td strong {
                color: #111827;
            }
        </style>
        <script>
            // Get all details elements inside our sidebar
            const accordion = document.getElementById('sidebar-accordion');
            const details = accordion.querySelectorAll('details');

            details.forEach((targetDetail) => {
                targetDetail.addEventListener("click", () => {
                    // Close all details that are NOT the one we just clicked
                    details.forEach((detail) => {
                        if (detail !== targetDetail) {
                            detail.removeAttribute("open");
                        }
                    });
                });
            });
        </script>
    </x-study-notes>
