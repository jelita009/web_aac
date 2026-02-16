<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AAC</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="font-sans antialiased bg-gray-100">

    <div class="min-h-screen">

        {{-- NAVBAR --}}
        @include('partials.navbar')

        {{-- Content --}}
        <main class="p-6">
            @yield('content')
        </main>

    </div>

</body>
</html>