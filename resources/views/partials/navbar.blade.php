<!DOCTYPE html>
<html>
<head>
    <title>AAC</title>
</head>
<body>
    <nav class="sticky top-0 z-50 bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">

            <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
            <span class="text-green-700 font-bold text-lg">Aceh Almsgiving
                <p>Community (AAC)</p></span>
        </div>

            <div class="space-x-10 hidden md:flex">
                <a href="{{ route('home', app()->getLocale()) }}" class="hover:text-green-600">{{ app()->getLocale() == 'en' ? 'Home' : 'Beranda' }}</a>
                <a href="{{ route('about', app()->getLocale()) }}" class="hover:text-green-600">{{ app()->getLocale() == 'en' ? 'About' : 'Tentang' }}</a>
                <a href="{{ route('program', app()->getLocale()) }}" class="hover:text-green-600">Program</a>
                <a href="{{ route('galeri', app()->getLocale()) }}" class="hover:text-green-600">{{ app()->getLocale() == 'en' ? 'Gallery' : 'Galeri' }}</a>
                <a href="{{ route('donate', app()->getLocale()) }}" class="hover:text-green-600">{{ app()->getLocale() == 'en' ? 'Donations' : 'Donasi' }}</a>
            </div>

            <div>
               @php
                    // Mengambil nama rute saat ini, misal 'about', 'galeri', dll.
                    $currentRouteName = Route::currentRouteName();
                    // Mengambil parameter rute saat ini (seperti ID atau slug jika ada)
                    $routeParameters = Route::current()->parameters();
                @endphp

                <a href="{{ route($currentRouteName, array_merge($routeParameters, ['locale' => 'id'])) }}"
                class="px-2 {{ app()->getLocale() == 'id' ? 'font-bold text-green-700' : '' }}">
                ID
                </a>
                |
                <a href="{{ route($currentRouteName, array_merge($routeParameters, ['locale' => 'en'])) }}"
                class="px-2 {{ app()->getLocale() == 'en' ? 'font-bold text-green-700' : '' }}">
                EN
                </a>
            </div>

        </div>
    </nav>
</body>
</html>
