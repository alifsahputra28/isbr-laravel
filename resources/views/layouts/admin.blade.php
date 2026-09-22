<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Batam City Run 2026 race management">
    <title>@yield('title', 'Dashboard') — Batam City Run</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="min-h-screen overflow-x-hidden bg-canvas">
    <x-sidebar />
    <div class="min-h-screen lg:ms-[260px]">
        <x-topbar />
        <main class="px-4 py-6 sm:px-6 sm:py-8 lg:px-8">
            <div class="mx-auto max-w-[1440px]">@yield('content')</div>
        </main>
    </div>
    @stack('scripts')
</body>
</html>
