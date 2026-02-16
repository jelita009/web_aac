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
            <h4 class="text-emerald-900 font-extrabold text-3xl mb-2 border-b-2 border-emerald-900 inline-block">Tentang Kami</h4>
            <h4 class="text-3xl md:text-4xl font-extrabold text-emerald-900 mt-4 mb-2">
                Aceh Almsgiving Community (AAC)
            </h4>
            <p class="text-gray-600 font-medium mb-6 italic">Peduli Sosial dan Kemanusiaan Sejak 2019</p>
            
            <p class="text-gray-700 leading-relaxed mb-8">
                Membangun ketahanan dan kepedulian untuk membantu masyarakat yang membutuhkan di Aceh dan sekitarnya.
            </p>

            <div class="flex flex-wrap gap-4 mb-8">
                <div class="bg-emerald-50 px-4 py-2 rounded-lg flex items-center gap-2 border border-emerald-100 shadow-sm">
                    <span class="text-emerald-700 font-bold">☘️ Sedekah & Sosial</span>
                </div>
                <div class="bg-emerald-50 px-4 py-2 rounded-lg flex items-center gap-2 border border-emerald-100 shadow-sm">
                    <span class="text-emerald-700 font-bold">⚠️ Tanggap Bencana</span>
                </div>
                <div class="bg-emerald-50 px-4 py-2 rounded-lg flex items-center gap-2 border border-emerald-100 shadow-sm">
                    <span class="text-emerald-700 font-bold">📚 Pendidikan & Ekonomi</span>
                </div>
            </div>

            <a href="#" class="inline-flex items-center gap-2 bg-[#316b5a] hover:bg-[#255245] text-white px-6 py-3 rounded-lg font-semibold transition-all">
                Selengkapnya <span class="text-xl">›</span>
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

                        <a href="#" class="bg-orange-400 hover:bg-orange-500 text-white text-center py-2 px-4 rounded-xl font-bold transition-all mt-auto shadow-sm">
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

@endsection