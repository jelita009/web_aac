<!DOCTYPE html>
<html>
<head>
    <title>AAC</title>
</head>
<body>
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">

            <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
            <span class="text-green-700 font-bold text-lg">Aceh Almsgiving
                <p>Community (AAC)</p></span>
        </div>

            <div class="space-x-10 hidden md:flex">
                <a href="#" class="hover:text-green-600">Beranda</a>
                <a href="#" class="hover:text-green-600">Tentang</a>
                <a href="#" class="hover:text-green-600">Program</a>
                <a href="#" class="hover:text-green-600">Galeri</a>
                <a href="{{ route('donate', app()->getLocale()) }}" class="hover:text-green-600">Donasi</a>
                <a href="#" class="hover:text-green-600">Kontak</a>
            </div>

            <div>
                <a href="/id" class="px-2">ID</a> |
                <a href="/en" class="px-2">EN</a>
            </div>

        </div>
    </nav>
</body>
</html>
