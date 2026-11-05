<x-app-layout>
    <x-slot name="header">
        <div class="py-2 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">
            <div class="space-y-2">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-wider uppercase bg-rose-50 text-rose-700 border border-rose-200">
                    Executive HR & Governance
                </span>
                <h2 class="text-3xl font-black text-slate-900 tracking-tight">
                    Organization Health & Wearable Provisioning
                </h2>
            </div>
            <div class="flex items-center">
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full text-xs font-semibold bg-rose-50 text-rose-700 border border-rose-200 shadow-sm">
                    Logged in as: <strong class="text-slate-800">{{ Auth::user()->name }}</strong>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-slate-100/70 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

            <!-- 1. Top Organization Health Metric Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Total Staff -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                    <div class="flex items-center justify-between text-xs font-bold text-slate-400 uppercase tracking-wider pb-2">
                        <span>Monitored Staff</span>
                        <span class="text-base">👥</span>
                    </div>
                    <div class="my-2 flex items-baseline gap-2">
                        <span class="text-3xl font-black text-slate-800 tracking-tight">2</span>
                        <span class="text-xs font-bold text-slate-400 uppercase">Employees</span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">Active team members tracked</p>
                </div>

                <!-- High Risk Alerts -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                    <div class="flex items-center justify-between text-xs font-bold text-slate-400 uppercase tracking-wider pb-2">
                        <span>Burnout Risk Alerts</span>
                        <span class="text-base text-rose-500">🚨</span>
                    </div>
                    <div class="my-2 flex items-baseline gap-2">
                        <span class="text-3xl font-black text-rose-600 tracking-tight">1</span>
                        <span class="text-xs font-bold text-slate-400 uppercase">Case</span>
                    </div>
                    <p class="text-xs text-rose-600 font-semibold leading-relaxed">Requires management intervention</p>
                </div>

                <!-- Avg Overtime -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                    <div class="flex items-center justify-between text-xs font-bold text-slate-400 uppercase tracking-wider pb-2">
                        <span>Avg Overtime / Member</span>
                        <span class="text-base text-amber-500">⏱️</span>
                    </div>
                    <div class="my-2 flex items-baseline gap-2">
                        <span class="text-3xl font-black text-amber-600 tracking-tight">5.2</span>
                        <span class="text-xs font-bold text-slate-400 uppercase">Hours / Wk</span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">Weekly moving workload average</p>
                </div>

                <!-- Registered Watches (1:1 Ratio) -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                    <div class="flex items-center justify-between text-xs font-bold text-slate-400 uppercase tracking-wider pb-2">
                        <span>Paired Smartwatches</span>
                        <span class="text-base text-indigo-500">⌚</span>
                    </div>
                    <div class="my-2 flex items-baseline gap-2">
                        <span class="text-3xl font-black text-indigo-600 tracking-tight">1</span>
                        <span class="text-xs font-bold text-slate-400 uppercase">Active BLE</span>
                    </div>
                    <p class="text-xs text-emerald-600 font-semibold leading-relaxed">1 Device per User Policy</p>
                </div>

            </div>

            <!-- 2. Smartwatch API Provisioning Section (1 User = 1 Smartwatch) -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 space-y-6">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-slate-100 pb-6">
                    <div class="space-y-1">
                        <h3 class="text-lg font-extrabold text-slate-800">User Smartwatch BLE Sync Tokens</h3>
                        <p class="text-xs text-slate-500">Each employee is assigned exactly one dedicated hardware sync key for their Aolon GTR 3 desktop listener client.</p>
                    </div>
                    <span class="inline-flex items-center px-3.5 py-1 rounded-full text-xs font-bold bg-slate-100 text-slate-700">
                        1-to-1 Device Pairing Active
                    </span>
                </div>

                <div class="space-y-4">
                    <!-- Pairing Card 1: Amirul -->
                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 flex flex-col md:flex-row md:items-center md:justify-between gap-5">
                        <div class="space-y-1.5">
                            <div class="flex items-center gap-3 flex-wrap">
                                <h4 class="font-bold text-slate-900 text-sm">Amirul Hakimi</h4>
                                <span class="text-xs text-slate-500">(amirul.hakimi8522@gmail.com)</span>
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800 border border-emerald-200">
                                    ● Watch Paired (1/1)
                                </span>
                            </div>
                            <p class="text-xs text-slate-500">Hardware: Aolon GTR 3 &bull; Single Dedicated Listener</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-white px-4 py-2.5 rounded-xl border border-slate-200 shadow-sm">
                                <code class="text-xs font-mono text-slate-700 font-bold select-all">AMIRUL_BLE_GTR3_SYNC_9901</code>
                            </div>
                            <button type="button" onclick="navigator.clipboard.writeText('AMIRUL_BLE_GTR3_SYNC_9901'); alert('Copied Device Sync Key!')" class="py-2.5 px-5 bg-slate-800 hover:bg-slate-900 active:scale-[0.99] text-white text-xs font-bold rounded-xl transition shadow-sm">
                                Copy Key
                            </button>
                        </div>
                    </div>

                    <!-- Pairing Card 2: Hanis Mock -->
                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 flex flex-col md:flex-row md:items-center md:justify-between gap-5">
                        <div class="space-y-1.5">
                            <div class="flex items-center gap-3 flex-wrap">
                                <h4 class="font-bold text-slate-900 text-sm">Hanis Mock</h4>
                                <span class="text-xs text-slate-500">(hanis@test.com)</span>
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800 border border-amber-200">
                                    ○ Token Unlinked
                                </span>
                            </div>
                            <p class="text-xs text-slate-500">Hardware: Pending Smartwatch Provisioning</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <button type="button" class="py-2.5 px-5 bg-indigo-600 hover:bg-indigo-700 active:scale-[0.99] text-white text-xs font-bold rounded-xl transition shadow-sm shadow-indigo-600/20">
                                Generate Sync Key
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Global Risk Threshold Configuration (Issue 3.4) -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 space-y-8">
                <div class="flex items-center gap-4 border-b border-slate-100 pb-6">
                    <div class="w-12 h-12 rounded-2xl bg-rose-50 text-rose-600 flex items-center justify-center font-bold text-xl shadow-sm">
                        ⚙️
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-lg font-extrabold text-slate-800">Organization Burnout Risk Threshold Settings</h3>
                        <p class="text-xs text-slate-500">Configure global criteria that trigger Moderate and High fatigue tier warnings across the system.</p>
                    </div>
                </div>

                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Max Weekly Overtime (Hrs)</label>
                            <input type="number" value="8" class="w-full text-sm rounded-xl border border-slate-200 px-4 py-3 focus:border-rose-500 focus:ring-4 focus:ring-rose-500/10 bg-slate-50 transition">
                            <span class="text-[11px] text-slate-400 font-medium block">Flags alert if employee exceeds this weekly limit</span>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Minimum Healthy Sleep (Hrs)</label>
                            <input type="number" value="6" class="w-full text-sm rounded-xl border border-slate-200 px-4 py-3 focus:border-rose-500 focus:ring-4 focus:ring-rose-500/10 bg-slate-50 transition">
                            <span class="text-[11px] text-slate-400 font-medium block">Watch telemetry baseline recovery duration</span>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Resting Heart Rate Alert (BPM)</label>
                            <input type="number" value="95" class="w-full text-sm rounded-xl border border-slate-200 px-4 py-3 focus:border-rose-500 focus:ring-4 focus:ring-rose-500/10 bg-slate-50 transition">
                            <span class="text-[11px] text-slate-400 font-medium block">Elevated stress / fatigue threshold</span>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4">
                        <button type="button" class="py-3 px-8 bg-slate-800 hover:bg-slate-900 active:scale-[0.99] text-white text-xs font-bold rounded-xl shadow-md transition">
                            Save Global Thresholds
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>