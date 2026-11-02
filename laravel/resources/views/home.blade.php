@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- SECTION 1: HERO (Brand Orange #DE5A17 Blok Besar) --}}
    <section class="bg-gorilla text-white relative overflow-hidden py-14 sm:py-20 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                {{-- Left Column: Headline & Action Buttons --}}
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-cocoa text-cream text-xs sm:text-sm font-semibold tracking-wide">
                        <span>Made for Movement</span>
                    </div>

                    <h1 class="font-heading text-4xl sm:text-6xl lg:text-7xl font-bold text-white tracking-tight leading-[1.06]">
                        Bites Into Pure Power
                    </h1>

                    <p class="text-white/95 text-base sm:text-lg max-w-xl font-normal leading-relaxed">
                        <em>A more mindful choice</em> that brings together the pleasure of a delicious snack and the goodness of protein. Made for your active, busy days, it's a little indulgence that offers more &mdash; without compromising on taste.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="/menu" class="btn-pill-secondary px-8 py-4 text-base font-bold shadow-none inline-flex items-center gap-2">
                            Explore The Bites
                        </a>
                        <a href="https://s.shopee.co.id/BV46KyWYa" target="_blank" rel="noopener noreferrer" class="btn-pill-primary px-8 py-4 text-base font-bold inline-flex items-center gap-2 border-2 border-white/20">
                            <span>Get Your Bite</span>
                        </a>
                    </div>
                </div>

                {{-- Right Column: Packaging Photo TrueBite --}}
                <div class="lg:col-span-5 flex items-center justify-center">
                    <div class="relative w-full max-w-lg mx-auto flex flex-col items-center justify-center p-2">
                        {{-- Ambient subtle warm glow behind packaging --}}
                        <div class="absolute inset-0 bg-amber/20 rounded-full blur-3xl -z-10 transform scale-90"></div>
                        <img src="{{ asset('images/packaging-transparent.png') }}" 
                             alt="TrueBite Crispy Brownies Packaging" 
                             class="w-full max-w-sm sm:max-w-md h-auto object-contain drop-shadow-2xl hover:scale-105 transition-transform duration-300">
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- SECTION 2: STRIP STATISTIK (Hanya jika variabel $statistics ada) --}}
    @isset($statistics)
        <section class="bg-cocoa text-cream py-8 border-y border-caramel/40">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                    @foreach ($statistics as $stat)
                        <div class="space-y-1">
                            <div class="font-heading text-3xl sm:text-4xl text-amber">
                                {{ $stat->value }}
                            </div>
                            <div class="text-xs sm:text-sm text-cream/80 font-medium">
                                {{ $stat->label }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endisset

    {{-- SECTION 3: VARIAN FAVORIT (Cream #FBE8C8 base) --}}
    <section class="py-16 sm:py-20 lg:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
            <div>
                <h2 class="font-heading text-3xl sm:text-5xl text-cocoa tracking-tight">Meet Your New Favourite Bites.</h2>
                <p class="text-cocoa/80 text-sm sm:text-base max-w-xl mt-2">
                    Made for your everyday cravings, active moments, and everything in between.
                </p>
            </div>
            <div>
                <a href="/menu" class="hidden sm:inline-flex items-center gap-2 btn-pill-secondary px-6 py-2.5 text-sm border-2 border-caramel/40">
                    Explore All The Bites &rarr;
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
                <article class="bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-6 flex flex-col justify-between hover:border-burnt/50 transition">
                    <div>
                        {{-- Panel gambar atau placeholder bento --}}
                        @if(isset($product->image) && $product->image && file_exists(public_path('images/products/' . $product->image)))
                            <div class="w-full h-48 rounded-2xl overflow-hidden bg-cream mb-5 flex items-center justify-center p-2">
                                <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-contain">
                            </div>
                        @else
                            {{-- Bento flat color placeholder tanpa foto rusak --}}
                            <div class="w-full h-48 rounded-2xl bg-cocoa flex flex-col items-center justify-center text-center p-4 mb-5 border border-caramel/30">
                                <span class="font-heading text-xl text-cream tracking-tight">{{ $product->name }}</span>
                                <span class="text-xs font-bold text-amber mt-1 tracking-wider uppercase">Crispy Brownies</span>
                                <span class="mt-3 px-3 py-1 rounded-full bg-caramel/60 text-[11px] text-cream font-bold">10g Protein</span>
                            </div>
                        @endif

                        <h3 class="font-heading text-xl text-cocoa tracking-tight mb-2">
                            {{ $product->name }}
                        </h3>

                        {{-- Chip Nutrisi & Kalori --}}
                        <div class="flex flex-wrap items-center gap-2 mb-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-gorilla text-white">
                                {{ $product->protein_grams }}g Protein
                            </span>
                            @if(isset($product->calories) && $product->calories)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-caramel/30 text-cocoa">
                                    {{ $product->calories }} kcal
                                </span>
                            @endif
                        </div>

                        <div class="text-xl font-heading text-burnt mb-6">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </div>
                    </div>

                    <a href="/menu/{{ $product->slug }}" class="w-full text-center btn-pill-primary py-3 text-sm">
                        More Details
                    </a>
                </article>
            @endforeach
        </div>

        <div class="mt-8 text-center sm:hidden">
            <a href="/menu" class="w-full inline-flex justify-center btn-pill-secondary px-6 py-3 text-sm border-2 border-caramel/40">
                Explore All The Bites &rarr;
            </a>
        </div>
    </section>

    {{-- SECTION 4: WHERE TO FIND US (Cocoa #2A0F07 Dark Section) --}}
    <section class="bg-cocoa text-cream py-16 sm:py-20 lg:py-24 border-y border-caramel/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-amber">Jangkauan Komunitas</span>
                    <h2 class="font-heading text-3xl sm:text-5xl text-cream tracking-tight mt-1">Where to Find Us</h2>
                    <p class="text-cream/80 text-sm sm:text-base max-w-lg mt-2">
                        Tersedia langsung di partner gym dan arena padel favoritmu.
                    </p>
                </div>
                {{-- TODO: Di routes/web.php rutenya adalah /location. --}}
                <div>
                    <a href="/location" class="hidden sm:inline-flex items-center gap-2 btn-pill-secondary px-6 py-2.5 text-sm">
                        Lihat Semua Lokasi &rarr;
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($locations as $location)
                    <article class="bg-caramel/25 border-2 border-caramel/40 rounded-3xl p-6 flex flex-col justify-between">
                        <div>
                            <div class="mb-3">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-amber/20 text-amber">
                                    {{ $location->type }}
                                </span>
                            </div>
                            <h3 class="font-heading text-xl text-cream mb-2">{{ $location->name }}</h3>
                            <p class="text-cream/80 text-sm leading-relaxed">{{ $location->address }}</p>
                        </div>

                        @if(isset($location->google_maps_link) && $location->google_maps_link)
                            <div class="mt-5 pt-4 border-t border-caramel/30">
                                <a href="{{ $location->google_maps_link }}" target="_blank" rel="noopener noreferrer" class="text-amber hover:text-white text-xs font-bold inline-flex items-center gap-1 transition">
                                    Lihat di Google Maps &rarr;
                                </a>
                            </div>
                        @endif
                    </article>
                @endforeach
            </div>

            <div class="mt-8 text-center sm:hidden">
                <a href="/location" class="w-full inline-flex justify-center btn-pill-secondary px-6 py-3 text-sm">
                    Lihat Semua Lokasi &rarr;
                </a>
            </div>
        </div>
    </section>



    {{-- SECTION 6: FAQ (Pertanyaan Umum) --}}
    <section class="py-12 sm:py-16 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-caramel">Tanya Jawab</span>
            <h2 class="font-heading text-3xl sm:text-4xl text-cocoa tracking-tight mt-1">FAQ</h2>
        </div>

        <div class="space-y-4">
            @foreach($faqs->take(3) as $faq)
                <article class="bg-[#F8E2BE] border-2 border-caramel/30 rounded-2xl sm:rounded-3xl p-6">
                    <h3 class="font-heading text-lg sm:text-xl text-cocoa mb-2">
                        {{ $faq->question }}
                    </h3>
                    <p class="text-cocoa/85 text-sm sm:text-base leading-relaxed">
                        {{ $faq->answer }}
                    </p>
                </article>
            @endforeach
        </div>

        <div class="mt-8 text-center">
            <a href="/faqs" class="inline-flex items-center gap-2 btn-pill-secondary px-8 py-3.5 text-sm font-bold border-2 border-caramel/40">
                Lihat Semua FAQ &rarr;
            </a>
        </div>
    </section>

    {{-- SECTION 7: CALL TO ACTION BANNER (Bento Banner) --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 sm:pb-20">
        <div class="bg-gorilla text-white rounded-3xl lg:rounded-4xl p-8 sm:p-12 lg:p-16 text-center space-y-6">
            <h2 class="font-heading text-3xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-tight max-w-2xl mx-auto">
                A More Mindful Choice
            </h2>
            <p class="text-white/95 text-base sm:text-lg max-w-xl mx-auto font-normal">
                Snack lezat berprotein tinggi yang siap menemani setiap momen aktif dan dinamis harimu.
            </p>
            <div class="pt-2">
                <a href="{{ config('services.truebite.whatsapp') ?: 'https://wa.me/628113777353' }}?text={{ urlencode('Halo TrueBite, saya mau pesan snack protein sekarang!') }}" target="_blank" rel="noopener noreferrer" class="btn-pill-primary px-8 py-4 text-base font-bold inline-flex items-center gap-2 shadow-none border-2 border-white/20">
                    <svg class="w-5 h-5 fill-current shrink-0" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                    <span>Contact Us</span>
                </a>
            </div>
        </div>
    </section>

@endsection