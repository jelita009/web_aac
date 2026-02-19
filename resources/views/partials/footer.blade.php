<!DOCTYPE html>
<html>
<head>
    <title>AAC</title>
</head>
<body>
<footer class="bg-[#1a3a32] text-white pt-16 pb-8 mt-10">
    <div class="container mx-auto px-6 md:px-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <img src="{{ asset('images/logo.png') }}" class="h-12 bg-white rounded-full p-1" alt="Logo">
                    <span class="font-bold text-xl tracking-wider uppercase">AAC Aceh</span>
                </div>
                <p class="text-gray-400 leading-relaxed italic">
                    {{ app()->getLocale() == 'en'
                        ? 'Empowering the community through almsgiving and sustainable social action.'
                        : 'Memberdayakan masyarakat melalui sedekah dan aksi sosial berkelanjutan.' }}
                </p>
            </div>
            <div class="md:ml-12">
                <h4 class="text-lg font-bold mb-6 border-b-2 border-orange-500 inline-block">{{ app()->getLocale() == 'en' ? 'Navigation' : 'Navigasi' }}</h4>
                <ul class="space-y-4 text-gray-400">
                    <li><a href="{{ route('about', app()->getLocale()) }}" class="hover:text-orange-400 transition">{{ app()->getLocale() == 'en' ? 'About Us' : 'Tentang Kami' }}</a></li>
                    <li><a href="{{ route('program', app()->getLocale()) }}" class="hover:text-orange-400 transition">Program</a></li>
                    <li><a href="{{ route('galeri', app()->getLocale()) }}" class="hover:text-orange-400 transition">{{ app()->getLocale() == 'en' ? 'Gallery' : 'Galeri' }}</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-6 border-b-2 border-orange-500 inline-block">{{ app()->getLocale() == 'en' ? 'Contact Us' : 'Hubungi Kami' }}</h4>
                <div class="space-y-4 text-gray-400">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-phone text-orange-500"></i> +62 821 6901 8388
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-envelope text-orange-500"></i> acehalmsgivingcommunity@gmail.com
                    </div>
                    <div class="flex gap-4 mt-6 text-2xl">
                        <a href="#" class="hover:text-orange-500 transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-orange-500 transition"><i class="fab fa-facebook"></i></a>
                        <a href="https://wa.me/6282169018388" class="hover:text-orange-500 transition"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-700 pt-8 text-center text-gray-500 text-sm">
            <p>&copy; {{ date('Y') }} Aceh Almsgiving Community (AAC). All Rights Reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
