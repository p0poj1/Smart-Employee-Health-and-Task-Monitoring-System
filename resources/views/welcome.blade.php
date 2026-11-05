<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEHTMS — Smart Employee Health & Task Monitoring System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased min-h-screen flex flex-col justify-between">
    <header class="p-6 max-w-7xl mx-auto w-full flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <span class="text-2xl font-black tracking-tight text-indigo-600">SEHTMS</span>
        </div>
        <nav class="space-x-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-700 hover:text-indigo-600">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-700 hover:text-indigo-600">Log In</a>
                <a href="{{ route('register') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Get Started</a>
            @endauth
        </nav>
    </header>

    <main class="max-w-4xl mx-auto px-6 text-center my-auto">
        <span class="inline-block px-3 py-1 bg-indigo-100 text-indigo-700 text-xs font-semibold rounded-full mb-4">
            Workshop II Project
        </span>
        <h1 class="text-4xl sm:text-6xl font-extrabold text-gray-900 tracking-tight leading-tight mb-6">
            Smart Employee Health & Task Monitoring System
        </h1>
        <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
            Integrating wearable physiological biometrics via BLE with workload strain analytics to proactively detect fatigue and balance team capacity.
        </p>
        <div class="flex justify-center gap-4">
            <a href="{{ route('login') }}" class="px-6 py-3 bg-indigo-600 text-white font-medium rounded-lg shadow-md hover:bg-indigo-700 transition">
                Sign In to Portal
            </a>
            <a href="{{ route('register') }}" class="px-6 py-3 bg-white text-gray-700 font-medium rounded-lg border border-gray-300 hover:bg-gray-50 transition">
                Register New User
            </a>
        </div>
    </main>

    <footer class="p-6 text-center text-sm text-gray-400">
        FTMK Workshop II &copy; 2026 SEHTMS Team
    </footer>
</body>
</html>