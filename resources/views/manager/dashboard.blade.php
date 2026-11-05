<x-app-layout>
    <x-slot name="header">
        <div class="py-2 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">
            <div class="space-y-2">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-wider uppercase bg-purple-50 text-purple-700 border border-purple-200">
                    Manager Supervisory Board
                </span>
                <h2 class="text-3xl font-black text-slate-900 tracking-tight">
                    Team Workload & Capacity Overview
                </h2>
            </div>
            <div class="flex items-center">
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full text-xs font-semibold bg-purple-50 text-purple-700 border border-purple-200 shadow-sm">
                    Supervising Portal &bull; Active Oversight
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-slate-100/70 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

            <!-- 1. Top Department Summary Metric Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Monitored Members -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                    <div class="flex items-center justify-between text-xs font-bold text-slate-400 uppercase tracking-wider pb-2">
                        <span>Monitored Staff</span>
                        <span class="text-base">👥</span>
                    </div>
                    <div class="my-2 flex items-baseline gap-2">
                        <span class="text-3xl font-black text-slate-800 tracking-tight">2</span>
                        <span class="text-xs font-bold text-slate-400 uppercase">Members</span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">Direct team members active</p>
                </div>

                <!-- High Risk Alert -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                    <div class="flex items-center justify-between text-xs font-bold text-slate-400 uppercase tracking-wider pb-2">
                        <span>Burnout Risk Alerts</span>
                        <span class="text-base text-rose-500">⚠️</span>
                    </div>
                    <div class="my-2 flex items-baseline gap-2">
                        <span class="text-3xl font-black text-rose-600 tracking-tight">1</span>
                        <span class="text-xs font-bold text-slate-400 uppercase">Attention Needed</span>
                    </div>
                    <p class="text-xs text-rose-600 font-semibold leading-relaxed">1 member in High Tier</p>
                </div>

                <!-- Overtime Average -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                    <div class="flex items-center justify-between text-xs font-bold text-slate-400 uppercase tracking-wider pb-2">
                        <span>Avg Team Overtime</span>
                        <span class="text-base text-amber-500">⏱️</span>
                    </div>
                    <div class="my-2 flex items-baseline gap-2">
                        <span class="text-3xl font-black text-amber-600 tracking-tight">+5.2</span>
                        <span class="text-xs font-bold text-slate-400 uppercase">Hours / Wk</span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">Elevated sprint workload</p>
                </div>

                <!-- Pending Blockers -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                    <div class="flex items-center justify-between text-xs font-bold text-slate-400 uppercase tracking-wider pb-2">
                        <span>Pending Blockers</span>
                        <span class="text-base text-indigo-500">🚨</span>
                    </div>
                    <div class="my-2 flex items-baseline gap-2">
                        <span class="text-3xl font-black text-slate-800 tracking-tight">1</span>
                        <span class="text-xs font-bold text-slate-400 uppercase">Open Ticket</span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">Requires manager review</p>
                </div>

            </div>

            <!-- 2. Team Capacity & Status Board Table -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="p-8 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div class="space-y-1">
                        <h3 class="text-lg font-extrabold text-slate-800">Active Team Members</h3>
                        <p class="text-xs text-slate-500">Live monitoring combining logged tasks and wearable physiological indicators.</p>
                    </div>
                    <span class="inline-flex items-center px-3.5 py-1 rounded-full text-xs font-bold bg-slate-100 text-slate-700">
                        Showing 2 Team Members
                    </span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-slate-600">
                        <thead class="bg-slate-50/70 text-xs uppercase font-bold text-slate-500 tracking-wider border-b border-slate-100">
                            <tr>
                                <th class="px-8 py-5">Team Member</th>
                                <th class="px-8 py-5">Weekly Overtime</th>
                                <th class="px-8 py-5">Smartwatch Avg HR</th>
                                <th class="px-8 py-5">Burnout Risk Tier</th>
                                <th class="px-8 py-5">Active Blockers</th>
                                <th class="px-8 py-5 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <!-- Row 1: Amirul -->
                            <tr class="hover:bg-slate-50/70 transition">
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-3.5">
                                        <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-700 font-bold flex items-center justify-center text-xs shadow-sm">
                                            AH
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-800 text-sm">Amirul Hakimi</p>
                                            <p class="text-xs text-slate-400">amirul.hakimi8522@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-5 font-bold text-slate-800">
                                    +1.5 hrs
                                </td>
                                <td class="px-8 py-5">
                                    <span class="inline-flex items-center gap-1.5 font-semibold text-slate-700">
                                        <span class="text-rose-500">❤️</span> 74 bpm
                                    </span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="inline-block px-3.5 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 border border-emerald-200">
                                        Low Risk
                                    </span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="text-slate-400 text-xs font-medium">0 Open</span>
                                </td>
                                <td class="px-8 py-5 text-right">
                                    <button class="px-4 py-2 bg-indigo-50 hover:bg-indigo-100 text-indigo-700 font-bold rounded-xl text-xs transition">
                                        Reassign Work
                                    </button>
                                </td>
                            </tr>

                            <!-- Row 2: Hanis Mock -->
                            <tr class="hover:bg-slate-50/70 transition">
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-3.5">
                                        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-700 font-bold flex items-center justify-center text-xs shadow-sm">
                                            HM
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-800 text-sm">Hanis Mock</p>
                                            <p class="text-xs text-slate-400">hanis@test.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-5 font-bold text-rose-600">
                                    +9.0 hrs ⚠️
                                </td>
                                <td class="px-8 py-5">
                                    <span class="inline-flex items-center gap-1.5 font-semibold text-slate-700">
                                        <span class="text-rose-500">❤️</span> 92 bpm
                                    </span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="inline-block px-3.5 py-1 rounded-full text-xs font-bold bg-rose-100 text-rose-800 border border-rose-200">
                                        High Risk (Fatigued)
                                    </span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="inline-block px-2.5 py-0.5 rounded-md bg-rose-50 text-rose-700 font-bold text-xs border border-rose-200">
                                        1 Urgent
                                    </span>
                                </td>
                                <td class="px-8 py-5 text-right">
                                    <button class="px-4 py-2 bg-rose-600 hover:bg-rose-700 text-white font-bold rounded-xl text-xs shadow-sm shadow-rose-600/20 transition">
                                        Relieve Tasks
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 3. Incoming Workload Blocker Tickets -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 space-y-6">
                <div class="flex items-center gap-4 border-b border-slate-100 pb-6">
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-xl shadow-sm">
                        🚨
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-lg font-extrabold text-slate-800">Incoming Workload Blocker Tickets</h3>
                        <p class="text-xs text-slate-500">Tickets submitted by team members requiring management resolution or workload reallocation.</p>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div class="space-y-1.5">
                            <div class="flex items-center gap-2.5 flex-wrap">
                                <span class="px-2.5 py-0.5 bg-amber-100 text-amber-800 text-[11px] font-bold rounded-md uppercase tracking-wider">
                                    Workload Overload
                                </span>
                                <h4 class="font-bold text-slate-900 text-sm">
                                    Excessive Overtime on Milestone 2 Database Scripting
                                </h4>
                            </div>
                            <p class="text-xs text-slate-500">
                                Submitted by <span class="font-semibold text-slate-700">Hanis Mock</span> &bull; 2 hours ago
                            </p>
                        </div>
                        <div class="flex items-center gap-3">
                            <button type="button" class="py-2.5 px-5 bg-emerald-600 hover:bg-emerald-700 active:scale-[0.99] text-white text-xs font-bold rounded-xl shadow-sm shadow-emerald-600/20 transition">
                                Mark Resolved
                            </button>
                            <button type="button" class="py-2.5 px-5 bg-slate-800 hover:bg-slate-900 active:scale-[0.99] text-white text-xs font-bold rounded-xl shadow-sm transition">
                                Reassign Task
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>