@extends('layouts.app')

@section('title', 'Testimoni')

@section('content')

    {{-- HEADER / TITLE SECTION --}}
    <section class="py-12 sm:py-16 lg:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-caramel/25 text-cocoa text-xs font-bold tracking-wide mb-4">
                <span>💬 Ulasan &amp; Cerita Nyata</span>
            </div>
            <h1 class="font-heading text-4xl sm:text-6xl text-cocoa tracking-tight leading-tight">
                Kata Mereka
            </h1>
            <p class="text-cocoa/85 text-base sm:text-lg mt-4 leading-relaxed font-normal">
                Dengarkan langsung cerita para pegiat gym, atlet latihan beban, dan pemain padel yang mengandalkan TrueBite setiap harinya.
            </p>
        </div>

        {{-- TESTIMONIALS GRID (Bento Cards) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mt-12">
            @forelse($testimonials as $testimonial)
                <article class="bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-6 sm:p-8 flex flex-col justify-between hover:border-burnt/50 transition">
                    <div>
                        {{-- Rating Chip --}}
                        <div class="mb-4">
                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-bold bg-cocoa text-amber">
                                <span>★</span>
                                <span>Rating: {{ $testimonial->rating }}/5</span>
                            </span>
                        </div>

                        {{-- Review Text --}}
                        <p class="text-cocoa text-base leading-relaxed italic mb-6">
                            "{{ $testimonial->review }}"
                        </p>
                    </div>

                    {{-- Customer Info --}}
                    <div class="pt-4 border-t border-caramel/25">
                        <div class="font-heading text-lg text-cocoa font-bold">
                            {{ $testimonial->customer_name }}
                        </div>
                        @if($testimonial->role_or_club)
                            <div class="text-xs font-medium text-caramel mt-0.5">
                                {{ $testimonial->role_or_club }}
                            </div>
                        @endif
                    </div>
                </article>
            @empty
                <div class="col-span-full bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-12 text-center">
                    <h3 class="font-heading text-2xl text-cocoa">Belum ada testimoni</h3>
                    <p class="text-cocoa/80 text-sm mt-2">Ulasan dari komunitas akan segera ditampilkan di sini.</p>
                </div>
            @endforelse
        </div>
    </section>

    {{-- FEEDBACK / COMMUNITY BANNER --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 sm:pb-20">
        <div class="bg-cocoa text-cream rounded-3xl lg:rounded-4xl p-8 sm:p-12 border-2 border-caramel/40 flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div class="space-y-2">
                <span class="text-amber text-xs font-bold uppercase tracking-widest">Suara Komunitas</span>
                <h3 class="font-heading text-2xl sm:text-3xl text-cream tracking-tight">
                    Sudah merasakan manfaat TrueBite?
                </h3>
                <p class="text-cream/80 text-sm max-w-xl">
                    Bagikan pengalamanmu sehabis sesi latihan gym atau match padel langsung ke tim kami via WhatsApp.
                </p>
            </div>
            <div>
                <a href="{{ config('services.truebite.whatsapp', '#') }}?text={{ urlencode('Halo TrueBite, saya mau kirim testimoni setelah mencoba snack protein!') }}" target="_blank" rel="noopener noreferrer" class="btn-pill-primary px-8 py-4 text-sm font-bold inline-flex items-center whitespace-nowrap">
                    Kirim Ulasan via WhatsApp
                </a>
            </div>
        </div>
    </section>

@endsection