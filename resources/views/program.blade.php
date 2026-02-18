@extends('layouts.app')

@section('content')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<section class="relative py-20 bg-emerald-900 text-white overflow-hidden">
     <div class="absolute inset-0 opacity-20">
        <img src="{{ asset('images/fotobg1.png') }}" class="w-full h-full object-cover" alt="Background">
    </div>
    <div class="container mx-auto px-6 text-center relative z-10" data-aos="fade-down">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
            {{ app()->getLocale() == 'en' ? 'Our Strategic Programs' : 'Program Strategis Kami' }}
        </h1>
        <p class="text-lg opacity-80 max-w-2xl mx-auto">
            {{ app()->getLocale() == 'en' 
                ? 'From humanitarian emergency response to sustainable community empowerment.' 
                : 'Dari respon darurat kemanusiaan hingga pemberdayaan masyarakat yang berkelanjutan.' }}
        </p>
    </div>
    <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-emerald-700 rounded-full blur-3xl opacity-20"></div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="p-8 bg-white rounded-2xl shadow-sm border-t-4 border-orange-400" data-aos="fade-up" data-aos-delay="100">
                <div class="text-3xl mb-4 text-orange-400"><i class="fas fa-hand-holding-heart"></i></div>
                <h3 class="font-bold text-xl mb-2">{{ app()->getLocale() == 'en' ? 'Social Aid' : 'Bantuan Sosial' }}</h3>
                <p class="text-gray-500 text-sm italic">Berfokus pada kebutuhan dasar pangan dan kesehatan masyarakat.</p>
            </div>
            <div class="p-8 bg-white rounded-2xl shadow-sm border-t-4 border-emerald-500" data-aos="fade-up" data-aos-delay="200">
                <div class="text-3xl mb-4 text-emerald-500"><i class="fas fa-university"></i></div>
                <h3 class="font-bold text-xl mb-2">{{ app()->getLocale() == 'en' ? 'Infrastructure' : 'Infrastruktur' }}</h3>
                <p class="text-gray-500 text-sm italic">Pembangunan fisik masjid, balai pengajian, dan fasilitas air bersih.</p>
            </div>
            <div class="p-8 bg-white rounded-2xl shadow-sm border-t-4 border-blue-500" data-aos="fade-up" data-aos-delay="300">
                <div class="text-3xl mb-4 text-blue-500"><i class="fas fa-seedling"></i></div>
                <h3 class="font-bold text-xl mb-2">{{ app()->getLocale() == 'en' ? 'Eco-Empowerment' : 'Pemberdayaan' }}</h3>
                <p class="text-gray-500 text-sm italic">Pengembangan ekonomi mandiri berbasis pelestarian alam.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-6 md:px-16">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-emerald-900 inline-block border-b-4 border-orange-400">
                {{ app()->getLocale() == 'en' ? 'Program Catalog' : 'Katalog Program' }}
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse($programs as $program)
                <div class="bg-[#fffdf5] rounded-3xl overflow-hidden shadow-sm border border-gray-100 flex flex-col h-full" data-aos="fade-up">
                    <img src="{{ asset($program->image) }}" class="w-full h-48 object-cover" alt="Image">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-emerald-900 mb-3">
                            {{ app()->getLocale() == 'en' ? $program->title_en : $program->title_id }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-6 flex-grow leading-relaxed text-justify">
                            @php $description = app()->getLocale() == 'en' ? $program->desc_en : $program->desc_id; @endphp
                            {{ Str::limit($description, 120) }}
                        </p>
                        </div>
                </div>
            @empty
                <div class="col-span-full text-center py-10">
                    <p class="text-gray-500 italic">{{ app()->getLocale() == 'en' ? 'No programs found.' : 'Data program belum tersedia.' }}</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<script>
    AOS.init({ duration: 800, once: true });
</script>
@endsection