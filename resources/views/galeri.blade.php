@extends('layouts.app')

@section('content')

<section class="py-20 bg-[#fffdf5]">
    <div class="container mx-auto px-6 md:px-16">

        {{-- Judul --}}
        <h2 class="text-4xl font-bold text-emerald-900 mb-14 text-center">
            {{ app()->getLocale() == 'en' ? 'Activity Gallery' : 'Galeri Kegiatan' }}
        </h2>

        {{-- Grid Galeri --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

            @forelse($activities as $activity)

                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group">

                    <div class="overflow-hidden">
                        <img 
                            src="{{ asset($activity->image) }}" 
                            class="w-full h-56 object-cover group-hover:scale-105 transition duration-300"
                            alt="Activity Image">
                    </div>

                    <div class="p-5 text-center">

                        <h3 class="font-semibold text-lg text-emerald-900 mb-2">
                            {{ app()->getLocale() == 'en' ? $activity->title_en : $activity->title_id }}
                        </h3>

                        @if(isset($activity->desc_id))
                        <p class="text-sm text-gray-600">
                            {{ app()->getLocale() == 'en' ? $activity->desc_en : $activity->desc_id }}
                        </p>
                        @endif

                    </div>

                </div>

            @empty

                <p class="text-center col-span-4 text-gray-500">
                    {{ app()->getLocale() == 'en' ? 'No activities available yet.' : 'Belum ada dokumentasi kegiatan.' }}
                </p>

            @endforelse

        </div>

    </div>
</section>

@endsection