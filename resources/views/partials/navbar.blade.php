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
            <span class="text-green-700 font-bold text-lg leading-tight">
                Aceh Almsgiving
                <p class="text-sm font-normal">Community (AAC)</p>
            </span>
        </div>

        <div class="space-x-10 hidden md:flex">
            @php
                // Helper function untuk cek rute aktif
                $activeClass = 'text-green-600 font-bold border-b-2 border-green-600 pb-1';
                $defaultClass = 'hover:text-green-600 transition-colors';
            @endphp

            <a href="{{ route('home', app()->getLocale()) }}"
               class="{{ request()->routeIs('home') ? $activeClass : $defaultClass }}">
                {{ app()->getLocale() == 'en' ? 'Home' : 'Beranda' }}
            </a>

            <a href="{{ route('about', app()->getLocale()) }}"
               class="{{ request()->routeIs('about') ? $activeClass : $defaultClass }}">
                {{ app()->getLocale() == 'en' ? 'About' : 'Tentang' }}
            </a>

            <a href="{{ route('program', app()->getLocale()) }}"
               class="{{ request()->routeIs('program') ? $activeClass : $defaultClass }}">
                Program
            </a>

            <a href="{{ route('galeri', app()->getLocale()) }}"
               class="{{ request()->routeIs('galeri') ? $activeClass : $defaultClass }}">
                {{ app()->getLocale() == 'en' ? 'Gallery' : 'Galeri' }}
            </a>

            <a href="{{ route('donate', app()->getLocale()) }}"
               class="{{ request()->routeIs('donate') ? $activeClass : $defaultClass }}">
                {{ app()->getLocale() == 'en' ? 'Donations' : 'Donasi' }}
            </a>
        </div>

        <div class="flex items-center">
            <div class="flex items-center border-r md:border-none pr-4 md:pr-0">
                @php
                    $currentRouteName = Route::currentRouteName();
                    $routeParameters = Route::current()->parameters();
                @endphp

                <a href="{{ route($currentRouteName, array_merge($routeParameters, ['locale' => 'id'])) }}"
                   class="px-2 {{ app()->getLocale() == 'id' ? 'font-bold text-green-700' : '' }}">ID</a>
                <span class="text-gray-300">|</span>
                <a href="{{ route($currentRouteName, array_merge($routeParameters, ['locale' => 'en'])) }}"
                   class="px-2 {{ app()->getLocale() == 'en' ? 'font-bold text-green-700' : '' }}">EN</a>
            </div>

            <button id="menu-btn" class="ml-4 md:hidden text-green-700 focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
        <div class="flex flex-col space-y-4 px-6 py-4">
            <a href="{{ route('home', app()->getLocale()) }}"
               class="pb-2 border-b {{ request()->routeIs('home') ? 'text-green-600 font-bold' : '' }}">
                {{ app()->getLocale() == 'en' ? 'Home' : 'Beranda' }}
            </a>
            <a href="{{ route('about', app()->getLocale()) }}"
               class="pb-2 border-b {{ request()->routeIs('about') ? 'text-green-600 font-bold' : '' }}">
                {{ app()->getLocale() == 'en' ? 'About' : 'Tentang' }}
            </a>
            <a href="{{ route('program', app()->getLocale()) }}"
               class="pb-2 border-b {{ request()->routeIs('program') ? 'text-green-600 font-bold' : '' }}">
                Program
            </a>
            <a href="{{ route('galeri', app()->getLocale()) }}"
               class="pb-2 border-b {{ request()->routeIs('galeri') ? 'text-green-600 font-bold' : '' }}">
                {{ app()->getLocale() == 'en' ? 'Gallery' : 'Galeri' }}
            </a>
            <a href="{{ route('donate', app()->getLocale()) }}"
               class="pb-2 border-b {{ request()->routeIs('donate') ? 'text-green-600 font-bold' : '' }}">
                {{ app()->getLocale() == 'en' ? 'Donations' : 'Donasi' }}
            </a>
        </div>
    </div>
</nav>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
</body>
</html>
