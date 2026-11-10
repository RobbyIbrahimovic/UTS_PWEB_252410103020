<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Prompt Engineering Events') | UTS PWEB</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: #05070f;
            background-image: 
                radial-gradient(circle at 50% 0%, rgba(99, 102, 241, 0.25), transparent 45%),
                radial-gradient(circle at 80% 30%, rgba(34, 211, 238, 0.12), transparent 40%),
                linear-gradient(rgba(30, 41, 59, 0.35) 1px, transparent 1px),
                linear-gradient(90deg, rgba(30, 41, 59, 0.35) 1px, transparent 1px);
            background-size: 100% 100%, 100% 100%, 32px 32px, 32px 32px;
        }
    </style>
</head>
<body class="text-slate-100 min-h-screen flex flex-col antialiased selection:bg-cyan-500 selection:text-slate-900">

    @include('components.navbar')

    <main class="flex-grow py-8 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
