@extends('layouts.app')

@section('content')

<section class="relative text-white bg-cover bg-center bg-no-repeat min-h-[500px] flex items-center"
         style="background-image: url('{{ asset('images/fotobg1.png') }}');">

    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative container mx-auto px-6 py-32 z-10">
        <h1 class="text-5xl font-bold mb-6">
            {{ __('home.hero_title') }}
        </h1>

        <p class="mb-8 text-lg">
            {{ __('home.caption') }}
        </p>

        <a href="#" class="bg-orange-500 hover:bg-orange-600 px-8 py-3 rounded-full font-bold transition duration-300">
            {{ __('home.donate') }}
        </a>
    </div>
</section>

<section class="py-20 bg-[#fffdf5]">
    <div class="container mx-auto px-6 md:px-16 flex flex-col md:flex-row items-center gap-12">

        <div class="w-full md:w-1/2">
            <h4 class="text-emerald-900 font-extrabold text-3xl mb-2 border-b-2 border-emerald-900 inline-block">
                {{ app()->getLocale() == 'en' ? 'About Us' : 'Tentang Kami' }}
            </h4>
            <h4 class="text-3xl md:text-4xl font-extrabold text-emerald-900 mt-4 mb-2">
                Aceh Almsgiving Community (AAC)
            </h4>
            <p class="text-gray-600 font-medium mb-6 italic">{{ __('home.since') }}</p>

            <p class="text-gray-700 leading-relaxed mb-8">
                {{ __('home.text') }}
            </p>

            <div class="flex flex-wrap gap-4 mb-8">
                <div class="bg-emerald-50 px-4 py-2 rounded-lg flex items-center gap-2 border border-emerald-100 shadow-sm">
                    <span class="text-emerald-700 font-bold">☘️ {{ app()->getLocale() == 'en' ? 'Charity & Social' : 'Sedekah & Sosial' }}</span>
                </div>
                <div class="bg-emerald-50 px-4 py-2 rounded-lg flex items-center gap-2 border border-emerald-100 shadow-sm">
                    <span class="text-emerald-700 font-bold">⚠️ {{ app()->getLocale() == 'en' ? 'Disaster Response' : 'Tanggap Bencana' }}</span>
                </div>
                <div class="bg-emerald-50 px-4 py-2 rounded-lg flex items-center gap-2 border border-emerald-100 shadow-sm">
                    <span class="text-emerald-700 font-bold">📚 {{ app()->getLocale() == 'en' ? 'Education & Economy' : 'Pendidikan & Ekonomi' }}</span>
                </div>
            </div>

            <a href="{{ route('about', app()->getLocale()) }}" class="inline-flex items-center gap-2 bg-[#316b5a] hover:bg-[#255245] text-white px-6 py-3 rounded-lg font-semibold transition-all">
                {{ app()->getLocale() == 'en' ? 'Read More' : 'Selengkapnya' }} <span class="text-xl">›</span>
            </a>
        </div>

        <div class="w-full md:w-1/2 relative">
            <div class="rounded-3xl overflow-hidden shadow-2xl rotate-1 group">
                <img src="{{ asset('images/foto2.png') }}" alt="Kegiatan AAC" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-r from-[#fffdf5] via-transparent to-transparent md:block hidden"></div>
            </div>
        </div>

    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-6 md:px-16">
        <h2 class="text-3xl font-bold text-emerald-900 mb-10 border-b-4 border-orange-400 inline-block">
            {{ app()->getLocale() == 'en' ? 'Featured Programs' : 'Program Unggulan' }}
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @if(isset($programs) && $programs->count() > 0)
                @foreach($programs as $program)
                <div class="bg-[#fffdf5] rounded-3xl overflow-hidden shadow-sm border border-gray-100 flex flex-col h-full hover:shadow-md transition-shadow">
                    <img src="{{ asset($program->image) }}" class="w-full h-48 object-cover" alt="Image">

                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-emerald-900 mb-3">
                            {{ app()->getLocale() == 'en' ? $program->title_en : $program->title_id }}
                        </h3>

                        <p class="text-gray-600 text-sm mb-6 flex-grow leading-relaxed">
                            @php
                                $description = app()->getLocale() == 'en' ? $program->desc_en : $program->desc_id;
                            @endphp
                            {{ Str::limit($description, 100) }}
                        </p>

                        <a href="{{ route('program', app()->getLocale()) }}" class="bg-orange-400 hover:bg-orange-500 text-white text-center py-2 px-4 rounded-xl font-bold transition-all mt-auto shadow-sm">
                            {{ app()->getLocale() == 'en' ? 'View Program ›' : 'Lihat Program ›' }}
                        </a>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-span-full text-center py-10">
                    <p class="text-gray-500 italic">
                        {{ app()->getLocale() == 'en' ? 'No programs added yet.' : 'Belum ada program yang ditambahkan.' }}
                    </p>
                </div>
            @endif
        </div>
    </div>
</section>

<section class="py-20 bg-[#fffdf5]">
    <div class="container mx-auto px-6 md:px-16">
        <h2 class="text-3xl font-bold text-emerald-900 mb-10 border-b-4 border-emerald-900 inline-block">
            {{ app()->getLocale() == 'en' ? 'Activity Documentation' : 'Dokumentasi Kegiatan' }}
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @isset($activities)
                @foreach($activities as $activity)
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all">
                    <img src="{{ asset('program/' . $activity->image) }}" class="w-full h-48 object-cover" alt="Gallery">
                    <div class="p-4 text-center">
                        <h3 class="font-bold text-emerald-900">
                            {{ app()->getLocale() == 'en' ? $activity->title_en : $activity->title_id }}
                        </h3>
                    </div>
                </div>
                @endforeach
            @endisset
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('galeri', app()->getLocale()) }}" class="inline-flex items-center gap-2 bg-[#316b5a] hover:bg-[#255245] text-white px-8 py-3 rounded-full font-semibold transition-all shadow-lg">
                {{ app()->getLocale() == 'en' ? 'View Gallery' : 'Lihat Galeri' }} <span class="text-xl">›</span>
            </a>
        </div>
    </div>
</section>

<section class="py-12 bg-white">
    <div class="container mx-auto px-6 md:px-16">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
            <div class="w-full lg:w-1/2">
                <h2 class="text-3xl font-bold text-[#1a3a32] mb-4 border-b-2 border-gray-100 inline-block pb-2">{{ app()->getLocale() == 'en' ? 'Lets Donate'  : 'Mari Berdonasi' }}</h2>
                <p class="text-xl font-bold text-[#1a3a32] mb-4">
                    BSI. <span class="font-normal text-gray-600">{{ app()->getLocale() == 'en' ? 'Account' : 'Rekening' }},</span> 4835423860 <span class="font-normal text-gray-600">a.n. Ismaniar</span>
                </p>
                <a href="{{ route('donate', app()->getLocale()) }}" class="inline-block bg-[#ff6b00] hover:bg-orange-700 text-white font-bold px-10 py-3 rounded-full shadow-lg transition-all transform hover:scale-105">
                    {{ app()->getLocale() == 'en' ? 'Donate Now' : 'Donasi Sekarang' }} <span class="ml-2">›</span>
                </a>
            </div>

            <div class="w-full lg:w-1/2 bg-white border border-gray-100 shadow-2xl rounded-3xl p-8 flex justify-around items-center">
                <div class="flex flex-col items-center gap-2 cursor-pointer group">
                    <div class="bg-[#f0f9f4] p-4 rounded-2xl group-hover:bg-[#dcfce7] transition-all">
                        <svg class="w-10 h-10 text-[#2d5a4c]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                    </div>
                    <span class="text-xs font-bold text-[#1a3a32]">{{ app()->getLocale() == 'en' ? 'Bank Transfer' : 'Transfer Bank' }}</span>
                </div>
                <div class="h-16 w-[1px] bg-gray-100"></div>
                <div class="flex flex-col items-center gap-2 cursor-pointer group">
                    <div class="bg-[#f0f9f4] p-4 rounded-2xl group-hover:bg-[#dcfce7] transition-all">
                        <svg class="w-10 h-10 text-[#2d5a4c]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
                    </div>
                    <span class="text-xs font-bold text-[#1a3a32]">QR Code</span>
                </div>
                <div class="h-16 w-[1px] bg-gray-100"></div>
                <div class="flex flex-col items-center gap-2 cursor-pointer group">
                    <div class="bg-[#f0f9f4] p-4 rounded-2xl group-hover:bg-[#dcfce7] transition-all">
                        <svg class="w-10 h-10 text-[#2d5a4c]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <span class="text-xs font-bold text-[#1a3a32]">{{ app()->getLocale() == 'en' ? 'Donation Confirmation' : 'Konfirmasi Donasi' }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-gradient-to-r from-[#1a3a32] to-[#2d5a4c] py-6 text-white">
    <div class="container mx-auto px-6 md:px-16 flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
        <div class="flex flex-col md:flex-row gap-4 md:gap-8">
            <div class="flex items-center gap-2">
                <i class="fas fa-phone"></i> +62 821 6901 8383
            </div>
            <div class="flex items-center gap-2">
                <i class="fas fa-envelope"></i> acehalmsgivingcommunity@gmail.com
            </div>
        </div>
        <div class="flex gap-4 text-xl">
            <a href="#" class="hover:text-orange-400 transition-all"><i class="fab fa-facebook"></i></a>
            <a href="#" class="hover:text-orange-400 transition-all"><i class="fab fa-instagram"></i></a>
            <a href="#" class="hover:text-orange-400 transition-all"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</footer>

@endsection
