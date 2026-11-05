<x-app-layout>
    <x-slot name="header">
        <div class="py-2 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">
            <div class="space-y-2">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-wider uppercase bg-indigo-50 text-indigo-700 border border-indigo-200">
                    Employee Portal
                </span>
                <h2 class="text-3xl font-black text-slate-900 tracking-tight">
                    Welcome back, {{ Auth::user()->name }} 👋
                </h2>
            </div>
            <div class="flex items-center">
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200 shadow-sm">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    Smartwatch Status: Simulated Active
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-slate-100/70 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

            <!-- 1. Top Metric Overview Cards (Spaced 4-Grid) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Burnout Tier -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                    <div class="flex items-center justify-between text-xs font-bold text-slate-400 uppercase tracking-wider pb-2">
                        <span>Burnout Risk Tier</span>
                        <span class="text-base">🛡️</span>
                    </div>
                    <div class="my-3">
                        <span class="inline-block px-3.5 py-1.5 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 border border-emerald-200">
                            Low Risk (Tier 1)
                        </span>
                        <p class="text-xs text-slate-500 mt-3 font-medium leading-relaxed">Workload & physiological balance optimal.</p>
                    </div>
                    <div class="w-full bg-slate-100 rounded-full h-2 overflow-hidden mt-2">
                        <div class="bg-emerald-500 h-2 rounded-full" style="width: 25%"></div>
                    </div>
                </div>

                <!-- Resting Heart Rate -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                    <div class="flex items-center justify-between text-xs font-bold text-slate-400 uppercase tracking-wider pb-2">
                        <span>Resting Heart Rate</span>
                        <span class="text-base text-rose-500">❤️</span>
                    </div>
                    <div class="my-2 flex items-baseline gap-2">
                        <span class="text-3xl font-black text-slate-800 tracking-tight">72</span>
                        <span class="text-xs font-bold text-slate-400 uppercase">BPM</span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">Normal baseline range (60–85 BPM)</p>
                </div>

                <!-- Sleep Duration -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                    <div class="flex items-center justify-between text-xs font-bold text-slate-400 uppercase tracking-wider pb-2">
                        <span>Sleep Recovery</span>
                        <span class="text-base text-indigo-500">🌙</span>
                    </div>
                    <div class="my-2 flex items-baseline gap-2">
                        <span class="text-3xl font-black text-slate-800 tracking-tight">7.2</span>
                        <span class="text-xs font-bold text-slate-400 uppercase">Hours</span>
                    </div>
                    <p class="text-xs text-emerald-600 font-semibold leading-relaxed">Target met (≥ 7.0 hrs)</p>
                </div>

                <!-- Weekly Overtime -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                    <div class="flex items-center justify-between text-xs font-bold text-slate-400 uppercase tracking-wider pb-2">
                        <span>Weekly Overtime</span>
                        <span class="text-base text-amber-500">⏱️</span>
                    </div>
                    <div class="my-2 flex items-baseline gap-2">
                        <span class="text-3xl font-black text-amber-600 tracking-tight">+2.5</span>
                        <span class="text-xs font-bold text-slate-400 uppercase">Hours</span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">Safe threshold quota (&lt; 8 hrs)</p>
                </div>

            </div>

            <!-- 2. Main Interactive Row (2 Columns: Generous Gaps) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">

                <!-- Task Logging Form -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-4 border-b border-slate-100 pb-6 mb-8">
                            <div class="w-12 h-12 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold text-xl shadow-sm">
                                📋
                            </div>
                            <div class="space-y-1">
                                <h3 class="text-lg font-extrabold text-slate-800">Log Daily Task & Workload</h3>
                                <p class="text-xs text-slate-500">Record specific tasks and project hours dedicated today.</p>
                            </div>
                        </div>

                        <form class="space-y-6">
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Task Title</label>
                                <input type="text" placeholder="e.g., Code Review & Database Migration" 
                                    class="w-full text-sm rounded-xl border border-slate-200 px-4 py-3 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 bg-slate-50 transition">
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Standard Hours</label>
                                    <input type="number" step="0.5" value="4.0" 
                                        class="w-full text-sm rounded-xl border border-slate-200 px-4 py-3 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 bg-slate-50 transition">
                                </div>
                                <div class="space-y-2">
                                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Overtime (Hours)</label>
                                    <input type="number" step="0.5" value="1.5" 
                                        class="w-full text-sm rounded-xl border border-slate-200 px-4 py-3 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 bg-slate-50 transition">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Work Date</label>
                                <input type="date" value="{{ date('Y-m-d') }}" 
                                    class="w-full text-sm rounded-xl border border-slate-200 px-4 py-3 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 bg-slate-50 transition">
                            </div>
                        </form>
                    </div>

                    <div class="pt-8">
                        <button type="button" class="w-full py-3.5 px-4 bg-indigo-600 hover:bg-indigo-700 active:scale-[0.99] text-white font-bold text-sm rounded-xl shadow-md shadow-indigo-600/20 transition">
                            Submit Workload Record
                        </button>
                    </div>
                </div>

                <!-- Daily Wellbeing Form -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-4 border-b border-slate-100 pb-6 mb-8">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-xl shadow-sm">
                                🧘
                            </div>
                            <div class="space-y-1">
                                <h3 class="text-lg font-extrabold text-slate-800">Daily Subjective Wellbeing Check-In</h3>
                                <p class="text-xs text-slate-500">Rate your subjective state on a 1 (Low) to 5 (High) scale.</p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <!-- Mood Slider -->
                            <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100 space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-xs font-bold text-slate-700 uppercase tracking-wider">Mood Level</span>
                                    <span class="text-xs font-extrabold text-indigo-700 bg-indigo-100 px-3 py-1 rounded-lg" id="moodBadge">4 / 5 😊</span>
                                </div>
                                <input type="range" min="1" max="5" value="4" 
                                    class="w-full h-2.5 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-indigo-600" 
                                    oninput="document.getElementById('moodBadge').innerText = this.value + ' / 5 😊'">
                                <div class="flex justify-between text-[11px] text-slate-400 font-semibold px-0.5">
                                    <span>1 (Very Low)</span>
                                    <span>3 (Neutral)</span>
                                    <span>5 (Great)</span>
                                </div>
                            </div>

                            <!-- Energy Slider -->
                            <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100 space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-xs font-bold text-slate-700 uppercase tracking-wider">Energy & Vitality</span>
                                    <span class="text-xs font-extrabold text-emerald-700 bg-emerald-100 px-3 py-1 rounded-lg" id="energyBadge">4 / 5 ⚡</span>
                                </div>
                                <input type="range" min="1" max="5" value="4" 
                                    class="w-full h-2.5 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-emerald-600" 
                                    oninput="document.getElementById('energyBadge').innerText = this.value + ' / 5 ⚡'">
                                <div class="flex justify-between text-[11px] text-slate-400 font-semibold px-0.5">
                                    <span>1 (Drained)</span>
                                    <span>3 (Moderate)</span>
                                    <span>5 (Energized)</span>
                                </div>
                            </div>

                            <!-- Stress Slider -->
                            <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100 space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-xs font-bold text-slate-700 uppercase tracking-wider">Workplace Stress Level</span>
                                    <span class="text-xs font-extrabold text-rose-700 bg-rose-100 px-3 py-1 rounded-lg" id="stressBadge">2 / 5 🛡️</span>
                                </div>
                                <input type="range" min="1" max="5" value="2" 
                                    class="w-full h-2.5 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-rose-600" 
                                    oninput="document.getElementById('stressBadge').innerText = this.value + ' / 5 🛡️'">
                                <div class="flex justify-between text-[11px] text-slate-400 font-semibold px-0.5">
                                    <span>1 (Relaxed)</span>
                                    <span>3 (Manageable)</span>
                                    <span>5 (Overwhelmed)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-8">
                        <button type="button" class="w-full py-3.5 px-4 bg-emerald-600 hover:bg-emerald-700 active:scale-[0.99] text-white font-bold text-sm rounded-xl shadow-md shadow-emerald-600/20 transition">
                            Confirm Daily Wellbeing Check-In
                        </button>
                    </div>
                </div>

            </div>

            <!-- 3. Bottom Row: Blocker & Issue Ticket Form (Issue 2.4) -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 space-y-8">
                <div class="flex items-center gap-4 border-b border-slate-100 pb-6">
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-xl shadow-sm">
                        🚨
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-lg font-extrabold text-slate-800">Report Project Blocker or Workload Strain</h3>
                        <p class="text-xs text-slate-500">Flags overload or blockers directly to your manager for task redistribution.</p>
                    </div>
                </div>

                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="md:col-span-2 space-y-2">
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Issue Subject / Blocker Summary</label>
                            <input type="text" placeholder="e.g., Blocked on third-party API credentials / Overloaded with multiple sprints" 
                                class="w-full text-sm rounded-xl border border-slate-200 px-4 py-3 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 bg-slate-50 transition">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Category</label>
                            <select class="w-full text-sm rounded-xl border border-slate-200 px-4 py-3 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 bg-slate-50 transition">
                                <option>Workload Fatigue / Capacity</option>
                                <option>Technical Blocker</option>
                                <option>Hardware / Smartwatch Connectivity</option>
                                <option>Environment & Tooling</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4">
                        <button type="button" class="py-3 px-8 bg-slate-800 hover:bg-slate-900 active:scale-[0.99] text-white text-xs font-bold rounded-xl shadow-md transition">
                            Submit Blocker Ticket
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>