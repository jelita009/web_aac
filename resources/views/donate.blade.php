@extends('layouts.app')

@section('content')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<section class="relative py-24 bg-emerald-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="{{ asset('images/fotobg1.png') }}" class="w-full h-full object-cover" alt="Background">
    </div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4" data-aos="fade-down">
            {{ app()->getLocale() == 'en' ? 'Contact & Donation' : 'Kontak & Informasi Donasi' }}
        </h1>
        <p class="text-lg opacity-90 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            {{ app()->getLocale() == 'en'
                ? 'Your contribution helps us build a better Aceh. Reach out to us for more information.'
                : 'Kontribusi Anda membantu kami membangun Aceh yang lebih baik. Hubungi kami untuk informasi lebih lanjut.' }}
        </p>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 md:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-gray-100" data-aos="fade-right">
                <h2 class="text-2xl font-bold text-emerald-900 mb-8 flex items-center gap-3">
                    <span class="bg-orange-100 p-2 rounded-lg">💳</span>
                    {{ app()->getLocale() == 'en' ? 'Payment Method' : 'Metode Pembayaran' }}
                </h2>

                <div id="bank-card" class="bg-gradient-to-br from-emerald-800 to-emerald-900 rounded-2xl p-8 text-white mb-8 relative overflow-hidden shadow-2xl transition-transform duration-500 ease-out cursor-pointer">
                    <div class="absolute top-0 right-0 p-4 opacity-20">
                        <i class="fas fa-university text-6xl"></i>
                    </div>
                    <p class="text-emerald-300 text-sm font-bold uppercase tracking-widest mb-4">Bank Syariah Indonesia (BSI)</p>
                    <div class="flex items-center justify-between mb-6">
                        <h3 id="account-number" class="text-2xl md:text-3xl font-mono font-bold tracking-tighter">4835423960</h3>
                        <button onclick="copyAccountNumber()" class="bg-white/20 hover:bg-white/40 p-2 rounded-lg transition-all" title="Salin Nomor">
                            <i class="far fa-copy"></i>
                        </button>
                    </div>
                    <div>
                        <p class="text-xs text-emerald-300 uppercase">Atas Nama / Account Holder</p>
                        <p class="text-xl font-bold">ISMANIAR</p>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-orange-50 rounded-xl border border-orange-100 italic text-sm text-gray-700">
                        <span>📍</span>
                        <p>{{ __('donet.payment') }}</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-6" data-aos="fade-left">
                <h2 class="text-2xl font-bold text-emerald-900 mb-2 flex items-center gap-3">
                    <span class="bg-emerald-100 p-2 rounded-lg">📞</span>
                    {{ app()->getLocale() == 'en' ? 'Official Contact' : 'Kontak Resmi' }}
                </h2>

                <a href="https://wa.me/6282169018388" target="_blank" class="flex items-center p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:border-green-400 transition-all group">
                    <div class="bg-green-100 p-4 rounded-xl group-hover:bg-green-600 group-hover:text-white transition-colors text-green-600">
                        <i class="fab fa-whatsapp text-2xl"></i>
                    </div>
                    <div class="ml-6">
                        <p class="text-xs text-gray-400 uppercase font-bold">WhatsApp</p>
                        <p class="text-lg font-bold text-emerald-900">+62 821 6901 8388</p>
                    </div>
                </a>

                <a href="mailto:acehalmsgivingcommunity@gmail.com" class="flex items-center p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:border-blue-400 transition-all group">
                    <div class="bg-blue-100 p-4 rounded-xl group-hover:bg-blue-600 group-hover:text-white transition-colors text-blue-600">
                        <i class="far fa-envelope text-2xl"></i>
                    </div>
                    <div class="ml-6">
                        <p class="text-xs text-gray-400 uppercase font-bold">Email</p>
                        <p class="text-lg font-bold text-emerald-900">acehalmsgivingcommunity@gmail.com</p>
                    </div>
                </a>

                <a href="" class="flex items-center p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:border-gray-400 transition-all group">
                    <div class="bg-gray-100 p-4 rounded-xl group-hover:bg-gray-600 group-hover:text-white transition-colors text-gray-600">
                        <i class="fas fa-map-marker-alt text-2xl"></i>
                    </div>
                    <div class="ml-6">
                        <p class="text-xs text-gray-400 uppercase font-bold">Wilayah Kerja</p>
                        <p class="text-lg font-bold text-emerald-900">Aceh, Indonesia</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-6 md:px-16">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-emerald-900 border-b-4 border-orange-400 inline-block pb-2">
                {{ app()->getLocale() == 'en' ? 'Partners & Donors' : 'Mitra & Donatur' }}
            </h2>
        </div>

        <div class="bg-emerald-50 rounded-3xl p-8 md:p-12 shadow-sm border border-emerald-100" data-aos="zoom-in">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="lg:w-1/2">
                    <p class="text-gray-700 leading-relaxed text-lg mb-6">{{ __('donet.partner') }}</p>
                    <div class="space-y-4">
                        <h4 class="font-bold text-emerald-900 uppercase tracking-wider text-sm">{{ app()->getLocale() == 'en' ? 'Collaborations Track Record' : 'Rekam Jejak Kolaborasi' }}:</h4>
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-gray-600">
                            <li class="flex items-center gap-2"><span class="text-orange-500 font-bold">✓</span> Majelis Alimat Indonesia</li>
                            <li class="flex items-center gap-2"><span class="text-orange-500 font-bold">✓</span> Aliansi Komunitas Aceh</li>
                            <li class="flex items-center gap-2"><span class="text-orange-500 font-bold">✓</span> Yusnimar Gallery</li>
                            <li class="flex items-center gap-2"><span class="text-orange-500 font-bold">✓</span> NGO Lokal & Internasional</li>
                        </ul>
                    </div>
                </div>

                <div class="lg:w-1/2 grid grid-cols-2 gap-4">
                    <div class="bg-white p-6 rounded-2xl shadow-sm text-center border border-emerald-100 hover:scale-105 transition-transform">
                        <p class="text-emerald-800 font-bold">Lembaga Nasional</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm text-center border border-emerald-100 hover:scale-105 transition-transform">
                        <p class="text-emerald-800 font-bold">NGO Internasional</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm text-center border border-emerald-100 hover:scale-105 transition-transform">
                        <p class="text-emerald-800 font-bold">Institusi Pendidikan</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm text-center border border-emerald-100 hover:scale-105 transition-transform">
                        <p class="text-emerald-800 font-bold">Mitra Pembangunan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <div class="bg-emerald-900 text-white p-10 rounded-3xl shadow-2xl overflow-hidden relative" data-aos="zoom-in">
            <div class="relative z-10">
                <h3 class="text-2xl font-bold mb-4">{{ app()->getLocale() == 'en' ? 'Have Made a Donation' : 'Sudah Melakukan Donasi' }}?</h3>
                <p class="opacity-80 mb-8 max-w-xl mx-auto">{{ __('donet.konfirmasi') }}</p>
                <a href="https://wa.me/6282169018388?text=Halo%20AAC,%20saya%20ingin%20konfirmasi%20donasi"
                   class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-10 rounded-full transition-all transform hover:scale-110 shadow-lg">
                    {{ app()->getLocale() == 'en' ? 'Confirmation via Whatsapp' : 'Konfirmasi via Whatsapp' }}
                </a>
            </div>
            <div class="absolute -top-20 -right-20 w-64 h-64 bg-white/10 rounded-full"></div>
            <div class="absolute -bottom-20 -left-20 w-48 h-48 bg-orange-500/20 rounded-full"></div>
        </div>
    </div>
</section>

<script>
    // Inisialisasi AOS
    AOS.init({ duration: 1000, once: true });

    // Fungsi Salin Rekening
    function copyAccountNumber() {
        const accountNumber = document.getElementById('account-number').innerText;
        navigator.clipboard.writeText(accountNumber).then(() => {
            alert('Nomor rekening BSI berhasil disalin!');
        });
    }

    // Efek 3D Card Rekening
    const card = document.getElementById('bank-card');
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateX = (y - centerY) / 10;
        const rotateY = (centerX - x) / 10;

        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg)`;
    });
</script>

<style>
    /* Haluskan transisi kartu */
    #bank-card {
        transition: transform 0.1s ease-out, box-shadow 0.3s ease;
    }
    #bank-card:hover {
        box-shadow: 0 25px 50px -12px rgba(6, 78, 59, 0.5);
    }
</style>
@endsection
