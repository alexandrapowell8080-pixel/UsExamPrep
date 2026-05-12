<x-study-notes>
    @section('title', $topic->name)
    @section('description', $topic->name . ' study notes')
    @section('keywords', $school->name . ',' . $section->name . ',' . $topic->name)
    @section('canonical', config('app.url') . '/study-notes/' . $school->slug . '/' . $section->slug . '/' .
        $topic->slug)

        <div class="min-h-screen   px-2 md:px-8 comic-neue-regular flex sm:flex-row flex-col-reverse">
            

            <div id="sidebar-accordion"
                class="flex flex-col sm:w-64 h-screen bg-gray-50 border-r border-gray-200 overflow-y-auto">

                <nav class="flex flex-col py-4 px-3 space-y-1">
                    <p class="font-bold text-2xl">Context</p>
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
                                @foreach ($section->topics as $topic)
                                    <a href="{{ route('study-notes.content', ['school' => request('school'), 'section' => $section->slug, 'topic' => $topic->slug]) }}"
                                        class="block px-4 py-2 text-sm font-medium rounded-md transition-colors
   {{ request()->routeIs('study-notes.content') && request()->segment(4) === $topic->slug
       ? 'text-indigo-600 bg-indigo-50'
       : 'text-gray-600 hover:text-indigo-600 hover:bg-indigo-50' }}">
                                        {{ $topic->name }}
                                    </a>
                                @endforeach
                            </nav>
                        </details>
                    @endforeach
                </nav>
            </div>


            <div class="sm:w-10/12 w-screen  mx-auto pt-5 max-h-screen overflow-scroll hide-scrollbar">

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
                    <span class="text-xs font-black tracking-widest text-slate-400 uppercase">Module 01: Healthcare
                        Foundations</span>
                </nav>

                {{-- Hero Header --}}
                <header
                    class="bg-white rounded-t-[2rem] p-8 md:p-12 shadow-sm border border-slate-200/60 mb-5 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-teal-50 rounded-bl-full opacity-50"></div>
                    <div class="relative z-10">
                        <h1 class="text-3xl md:text-5xl font-black text-slate-900 leading-tight mb-4">
                            The Role and Responsibilities of the <span class="text-brand-gradient">CNA</span>
                        </h1>
                        <p class="text-lg text-slate-500 max-w-3xl font-medium text-center">
                            Exploring the critical scope of practice, ethical boundaries, and the essential nature of the
                            Nursing Assistant within the interdisciplinary healthcare team.
                        </p>
                    </div>
                </header>

                {{-- Main Content Body --}}
                <article class="bg-white rounded-b-[2rem] shadow-sm border border-slate-200/60 overflow-hidden">
                    <div class="p-5 md:p-8 prose-custom">

                        <h3>1. Defining the Nursing Assistant Role</h3>
                        <p>
                            The Certified Nursing Assistant (CNA) serves as the "eyes and ears" of the nursing team. Because
                            CNAs spend more direct time with patients or residents than any other healthcare provider, they
                            are often the first to notice subtle changes in a patient's physical or mental condition. The
                            role is fundamentally built on providing Activities of Daily Living (ADLs) and basic nursing
                            care under the direct supervision of a Licensed Practical Nurse (LPN) or Registered Nurse (RN).
                        </p>

                        <h3>2. Core Responsibilities & ADLs</h3>
                        <p>The primary focus of the CNA is the maintenance of patient dignity and the provision of essential
                            care. This includes:</p>
                        <ul class="pl-6">
                            <li><strong>Personal Hygiene:</strong> Assisting with bathing (bed baths, showers), oral care,
                                shaving, and hair care.</li>
                            <li><strong>Nutrition & Hydration:</strong> Setting up meal trays, assisting with feeding, and
                                documenting intake/output (I&O).</li>
                            <li><strong>Mobility:</strong> Turning and repositioning bedridden patients to prevent pressure
                                ulcers, assisting with ambulation, and transfers using gait belts.</li>
                            <li><strong>Vital Signs:</strong> Measuring and recording temperature, pulse, respiration, and
                                blood pressure.</li>
                        </ul>

                        <div class="my-10 overflow-hidden rounded-2xl border border-slate-200">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-slate-900 text-white text-sm uppercase tracking-widest">
                                        <th class="p-4">Care Category</th>
                                        <th class="p-4">Typical CNA Tasks</th>
                                        <th class="p-4">Prohibited Tasks (Outside Scope)</th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm text-slate-600 font-medium">
                                    <tr class="border-b border-slate-100">
                                        <td class="p-4 bg-slate-50 font-bold text-slate-800">Medication</td>
                                        <td class="p-4">Reporting pain levels, checking for rashes.</td>
                                        <td class="p-4 text-red-500">Administering meds (pills, IVs, or topicals).</td>
                                    </tr>
                                    <tr class="border-b border-slate-100">
                                        <td class="p-4 bg-slate-50 font-bold text-slate-800">Diagnostics</td>
                                        <td class="p-4">Collecting non-sterile specimens (urine, stool).</td>
                                        <td class="p-4 text-red-500">Inserting catheters or drawing blood.</td>
                                    </tr>
                                    <tr class="border-b border-slate-100">
                                        <td class="p-4 bg-slate-50 font-bold text-slate-800">Planning</td>
                                        <td class="p-4">Providing input on resident preferences.</td>
                                        <td class="p-4 text-red-500">Creating or modifying a formal Care Plan.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3>3. The Interdisciplinary Team Dynamics</h3>
                        <p>
                            A CNA does not work in a vacuum. They are a vital gear in the interdisciplinary team (IDT).
                            Communication is the backbone of this structure. When a CNA notices a resident has a decreased
                            appetite or seems more confused than usual, that information must be relayed immediately to the
                            charge nurse.
                        </p>
                        <p>
                            The team typically consists of the Physician, RN, LPN, CNA, Physical Therapist (PT),
                            Occupational Therapist (OT), Social Worker, and Dietitian. The CNA’s contribution is unique
                            because it is grounded in the "whole person" observation. While a doctor sees a patient for 10
                            minutes, the CNA sees them for 8 hours.
                        </p>

                        <h3>4. Ethics and Patient Rights</h3>
                        <p>
                            Professionalism in nursing requires strict adherence to ethical principles. The CNA must
                            navigate complex social environments while maintaining boundaries.
                        </p>
                        <ul class="pl-6">
                            <li><strong>Confidentiality (HIPAA):</strong> Protecting patient information is not just
                                ethical; it is the law. Never discuss residents in public areas or with unauthorized family
                                members.</li>
                            <li><strong>Privacy:</strong> Always knock before entering a room and use privacy curtains
                                during procedures.</li>
                            <li><strong>Autonomy:</strong> Residents have the right to make choices, such as what to wear or
                                whether to refuse a bath.</li>
                            <li><strong>Abuse Reporting:</strong> It is the legal obligation of a CNA to report any
                                suspected physical, verbal, or financial abuse immediately.</li>
                        </ul>

                        <h3>5. The Five Rights of Delegation</h3>
                        <p>
                            As a CNA, you will receive "delegated" tasks from nurses. It is your responsibility to ensure
                            you are capable of the task. If a task is outside your training, you must politely refuse and
                            explain why.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-5 gap-4 my-8">
                            <div class="bg-teal-50 p-4 rounded-xl text-center border border-teal-100">
                                <span class="block font-black text-teal-700">1</span>
                                <span class="text-xs font-bold uppercase text-teal-900">Right Task</span>
                            </div>
                            <div class="bg-blue-50 p-4 rounded-xl text-center border border-blue-100">
                                <span class="block font-black text-blue-700">2</span>
                                <span class="text-xs font-bold uppercase text-blue-900">Right Circumstance</span>
                            </div>
                            <div class="bg-indigo-50 p-4 rounded-xl text-center border border-indigo-100">
                                <span class="block font-black text-indigo-700">3</span>
                                <span class="text-xs font-bold uppercase text-indigo-900">Right Person</span>
                            </div>
                            <div class="bg-purple-50 p-4 rounded-xl text-center border border-purple-100">
                                <span class="block font-black text-purple-700">4</span>
                                <span class="text-xs font-bold uppercase text-purple-900">Right Direction</span>
                            </div>
                            <div class="bg-slate-50 p-4 rounded-xl text-center border border-slate-100">
                                <span class="block font-black text-slate-700">5</span>
                                <span class="text-xs font-bold uppercase text-slate-900">Right Supervision</span>
                            </div>
                        </div>

                        <h3>6. Empathy and Psychological Support</h3>
                        <p>
                            Beyond the physical tasks, the CNA provides emotional labor. Many residents in long-term care
                            may feel lonely or afraid. A CNA who listens, offers a gentle touch, or acknowledges a
                            resident’s past accomplishments contributes significantly to the "Restorative Care" philosophy.
                            This means helping the resident maintain the highest possible level of physical and mental
                            function.
                        </p>
                    </div>

                    {{-- Completion State --}}
                    <div
                        class="px-8 py-6 bg-slate-50 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between gap-4">
                        {{-- <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-3">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        </div>
                        <span class="text-sm font-bold text-slate-700 tracking-tight">Lesson marked as read</span>
                    </div> --}}
                        <button
                            class="bg-brand-primary text-white px-8 py-3 rounded-xl font-bold hover:opacity-90 transition-all active:scale-95 shadow-lg shadow-blue-500/20">
                            NEXT LESSON: INTERPERSONAL SKILLS →
                        </button>
                    </div>
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
