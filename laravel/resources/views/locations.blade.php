@extends('layouts.app')

@section('title', 'Lokasi')

@section('content')

    {{-- HEADER / TITLE SECTION --}}
    <section class="py-12 sm:py-16 lg:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-caramel/25 text-cocoa text-xs font-bold tracking-wide mb-4">
                <span>📍 Titik Partner Resmi</span>
            </div>
            <h1 class="font-heading text-4xl sm:text-6xl text-cocoa tracking-tight leading-tight">
                Where to Find Us
            </h1>
            <p class="text-cocoa/85 text-base sm:text-lg mt-4 leading-relaxed font-normal">
                Temukan snack protein TrueBite langsung di etalase partner gym, fitness center, dan arena padel court pilihan di kotamu.
            </p>
        </div>

        {{-- LOCATIONS GRID (Bento Cards) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mt-12">
            @forelse($locations as $location)
                <article class="bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-6 sm:p-7 flex flex-col justify-between hover:border-burnt/50 transition">
                    <div>
                        {{-- Type Chip --}}
                        <div class="flex items-center justify-between gap-2 mb-3">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-cocoa text-amber">
                                {{ $location->type }}
                            </span>
                            <span class="text-[11px] font-bold text-caramel">Partner Terverifikasi</span>
                        </div>

                        <h2 class="font-heading text-2xl text-cocoa tracking-tight mb-2">
                            {{ $location->name }}
                        </h2>

                        <p class="text-cocoa/80 text-sm leading-relaxed mb-6">
                            {{ $location->address }}
                        </p>
                    </div>

                    {{-- Google Maps Link --}}
                    @if($location->google_maps_link)
                        <div class="pt-4 border-t border-caramel/25">
                            <a href="{{ $location->google_maps_link }}" target="_blank" rel="noopener noreferrer" class="btn-pill-primary w-full text-center py-3 text-xs font-bold inline-flex items-center justify-center gap-1.5">
                                <span>Buka di Google Maps</span>
                                <span>&rarr;</span>
                            </a>
                        </div>
                    @endif
                </article>
            @empty
                <div class="col-span-full bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-12 text-center">
                    <h3 class="font-heading text-2xl text-cocoa">Belum ada lokasi partner</h3>
                    <p class="text-cocoa/80 text-sm mt-2">Daftar lokasi gym dan padel court akan segera diperbarui.</p>
                </div>
            @endforelse
        </div>
    </section>

    {{-- PARTNER INVITATION BANNER --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 sm:pb-20">
        <div class="bg-cocoa text-cream rounded-3xl lg:rounded-4xl p-8 sm:p-12 border-2 border-caramel/40 flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div class="space-y-2">
                <span class="text-amber text-xs font-bold uppercase tracking-widest">Kolaborasi Venue</span>
                <h3 class="font-heading text-2xl sm:text-3xl text-cream tracking-tight">
                    Punya arena gym atau padel court?
                </h3>
                <p class="text-cream/80 text-sm max-w-xl">
                    Jadilah partner resmi TrueBite dan sediakan snack protein terbaik untuk komunitas dan member venue kamu.
                </p>
            </div>
            <div>
                <a href="{{ config('services.truebite.whatsapp', '#') }}?text={{ urlencode('Halo TrueBite, saya pemilik/pengelola venue olahraga dan ingin bermitra!') }}" target="_blank" rel="noopener noreferrer" class="btn-pill-primary px-8 py-4 text-sm font-bold inline-flex items-center whitespace-nowrap">
                    Gabung Jadi Partner
                </a>
            </div>
        </div>
    </section>

@endsection