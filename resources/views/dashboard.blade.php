<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

<script>
    setInterval(async () => {
        try {
            const res = await fetch('/api/biometrics/latest');
            if (!res.ok) return;
            const data = await res.json();
            if (!data) return;

            const bpmEl = document.getElementById('live-bpm');
            const spo2El = document.getElementById('live-spo2');
            const stressEl = document.getElementById('live-stress');
            const sleepEl = document.getElementById('live-sleep');

            if (bpmEl) bpmEl.innerText = data.heart_rate_bpm + ' BPM';
            if (spo2El) spo2El.innerText = (data.spo2 ?? 98) + '%';
            if (stressEl) stressEl.innerText = data.stress_level ?? 30;
            if (sleepEl) sleepEl.innerText = (data.sleep_minutes / 60).toFixed(1) + ' hrs';
        } catch (err) {
            console.error('Live sync error:', err);
        }
    }, 3000);
</script>
</x-app-layout>
