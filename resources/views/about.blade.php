@extends('layouts.app')

@section('content')

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<div class="overflow-x-hidden font-sans text-gray-800 bg-white">

    <section class="relative py-24 bg-green-700 text-white text-center">
        <div class="container mx-auto px-6" data-aos="zoom-out">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Aceh Almsgiving Community (AAC)</h1>
            <p class="text-xl opacity-90 italic">{{ __('about.hero_title') }}</p>
        </div>
    </section>

    <section class="py-20 container mx-auto px-6">
        <div class="flex flex-wrap items-center mb-24">
            <div class="w-full lg:w-7/12" data-aos="fade-right">
                <div class="relative">
                    <span class="text-green-100 font-bold text-8xl absolute -top-12 -left-4 z-0 opacity-50">2019</span>
                    <h2 class="text-4xl font-extrabold mb-8 text-green-800 relative z-10">Sejarah</h2>
                </div>
                <div class="space-y-4 text-gray-700 leading-relaxed text-justify lg:pr-12">
                    <p>
                        <span class="font-bold text-green-700">AAC</span> lahir dari semangat kepedulian yang digagas pada tahun 2019 melalui gerakan <span class="italic font-medium">"Sedekah Ridho dan Berkah"</span>, sebuah inisiatif rutin setiap hari Jumat.
                    </p>
                    <div class="bg-green-50 p-5 border-l-4 border-green-600 rounded-r-lg shadow-sm my-6">
                        <p class="text-sm">Bantuan yang disalurkan meliputi semen pembangunan masjid, mesin pompa air balai pengajian, hingga paket beras bagi santri yatim dan dhuafa.</p>
                    </div>
                    <p>
                        Kepercayaan masyarakat mendorong gerakan ini bertransformasi menjadi wadah kolaboratif yang lebih terstruktur, inklusif, dan berorientasi pada keberlanjutan aksi kemanusiaan di Aceh.
                    </p>
                </div>
            </div>
            <div class="w-full lg:w-5/12 flex justify-center mt-12 lg:mt-0" data-aos="zoom-in">
                <div class="relative w-64 h-64 md:w-80 md:h-80 bg-white rounded-full shadow-2xl flex items-center justify-center p-8 border-4 border-green-50">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo AAC" class="max-w-full h-auto">
                </div>
            </div>
        </div>

        <div class="flex flex-wrap items-center flex-col-reverse lg:flex-row">
            <div class="w-full lg:w-5/12 flex justify-center lg:justify-start" data-aos="fade-up">
                <div class="grid grid-cols-2 gap-4 w-full max-w-sm">
                    <div class="p-6 bg-green-600 text-white rounded-2xl shadow text-center transition hover:scale-105">Kemanusiaan</div>
                    <div class="p-6 bg-green-500 text-white rounded-2xl shadow text-center transition hover:scale-105">Mitigasi</div>
                    <div class="p-6 bg-green-400 text-white rounded-2xl shadow text-center transition hover:scale-105">Ekonomi</div>
                    <div class="p-6 bg-green-700 text-white rounded-2xl shadow text-center transition hover:scale-105">Eco-Green</div>
                </div>
            </div>
            <div class="w-full lg:w-7/12 lg:pl-16 mb-10 lg:mb-0" data-aos="fade-left">
                <h2 class="text-3xl font-bold mb-6 text-green-800">Latar Belakang</h2>
                <p class="text-lg text-gray-700 leading-relaxed text-justify">
                    Lahir dari kepedulian terhadap persoalan kemiskinan dan risiko bencana di Aceh, AAC berkembang menjadi komunitas yang berfokus pada aksi kemanusiaan, pendidikan, dan pelestarian lingkungan berbasis konsep eco-green.
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-green-50">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white p-10 rounded-3xl shadow-xl border-b-8 border-green-600" data-aos="flip-left">
                    <h3 class="text-2xl font-bold mb-4 text-green-700 uppercase">Visi</h3>
                    <p class="text-gray-600 text-xl italic leading-relaxed">{{ __('about.visi') }}</p>
                </div>
                <div class="bg-white p-10 rounded-3xl shadow-xl border-b-8 border-green-600" data-aos="flip-right" data-aos-delay="200">
                    <h3 class="text-2xl font-bold mb-4 text-green-700 uppercase">Misi</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li>• Mengoptimalkan pengelolaan sedekah yang transparan.</li>
                        <li>• Melaksanakan program pemberdayaan berkelanjutan.</li>
                        <li>• Aktif dalam aksi cepat tanggap bencana.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-16" data-aos="fade-up">Nilai-Nilai Organisasi</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl shadow-lg">A</div>
                <h4 class="font-bold uppercase mb-2">Amanah</h4>
                <p class="text-sm text-gray-500">Transparansi dalam setiap penyaluran bantuan.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl shadow-lg">A</div>
                <h4 class="font-bold uppercase mb-2">Adaptif</h4>
                <p class="text-sm text-gray-500">Sigap merespon dinamika sosial dan bencana.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl shadow-lg">C</div>
                <h4 class="font-bold uppercase mb-2">Cepat</h4>
                <p class="text-sm text-gray-500">Aksi nyata yang responsif terhadap umat.</p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16" data-aos="fade-down">Struktur Organisasi</h2>
            

[Image of organization chart]

            <div class="flex flex-col items-center">
                <div class="bg-green-800 text-white p-6 rounded shadow-xl w-64 text-center mb-12 relative" data-aos="zoom-in">
                    <p class="text-xs opacity-75 uppercase">Ketua Umum</p>
                    <div class="absolute h-12 w-1 bg-green-300 -bottom-12 left-1/2 -translate-x-1/2"></div>
                </div>
                <div class="grid grid-cols-2 gap-12 md:gap-32 mb-12">
                    <div class="bg-white p-4 border-t-4 border-green-600 shadow rounded w-48 text-center" data-aos="fade-right">Sekretaris</div>
                    <div class="bg-white p-4 border-t-4 border-green-600 shadow rounded w-48 text-center" data-aos="fade-left">Bendahara</div>
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 w-full max-w-4xl" data-aos="fade-up">
                    <div class="bg-green-600 text-white p-3 rounded text-center text-sm shadow">Divisi Aksi Sosial</div>
                    <div class="bg-green-600 text-white p-3 rounded text-center text-sm shadow">Divisi Humas & Media</div>
                    <div class="bg-green-600 text-white p-3 rounded text-center text-sm shadow">Divisi Pemberdayaan</div>
                    <div class="bg-green-600 text-white p-3 rounded text-center text-sm shadow">Divisi Logistik</div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    AOS.init({ duration: 1000, once: true });
</script>

@endsection