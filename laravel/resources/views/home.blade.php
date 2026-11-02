@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- SECTION 1: HERO (Gorilla Orange #E8461E Blok Besar) --}}
    <section class="bg-gorilla text-white relative overflow-hidden py-14 sm:py-20 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                {{-- Left Column: Headline & Action Buttons --}}
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-cocoa text-cream text-xs sm:text-sm font-bold tracking-wide">
                        <span>⚡ Untuk Komunitas Gym &amp; Padel</span>
                    </div>

                    <h1 class="font-heading text-4xl sm:text-6xl lg:text-7xl font-extrabold text-white tracking-tight leading-[1.06]">
                        Snack protein yang bikin lanjut main.
                    </h1>

                    <p class="text-white/95 text-base sm:text-lg max-w-xl font-normal leading-relaxed">
                        Camilan tinggi protein tanpa drama untuk kamu yang aktif di gym dan padel court. Energi bersih, rasa premium, siap tempur kapan saja.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="/menu" class="btn-pill-secondary px-8 py-4 text-base font-bold shadow-none inline-flex items-center gap-2">
                            Lihat Menu
                        </a>
                        <a href="{{ config('services.truebite.whatsapp', '#') }}?text={{ urlencode('Halo TrueBite, saya mau pesan via WhatsApp!') }}" target="_blank" rel="noopener noreferrer" class="btn-pill-primary px-8 py-4 text-base font-bold inline-flex items-center gap-2 border-2 border-white/20">
                            Pesan via WhatsApp
                        </a>
                    </div>
                </div>

                {{-- Right Column: Bento Hero Feature Card --}}
                <div class="lg:col-span-5">
                    <div class="bg-cocoa text-cream p-7 sm:p-9 rounded-3xl lg:rounded-4xl border-2 border-caramel/40 space-y-5">
                        <div class="flex items-center justify-between">
                            <span class="text-amber text-xs font-bold uppercase tracking-widest">TRUEBITE NUTRITION</span>
                            <span class="px-3 py-1 rounded-full bg-caramel/50 text-[11px] font-bold text-cream">Flat &amp; Clean</span>
                        </div>

                        <h2 class="font-heading text-2xl sm:text-3xl text-cream tracking-tight leading-snug">
                            Gigit. Isi ulang tenaga.
                        </h2>

                        {{-- Bento flat graphic placeholder --}}
                        <div class="w-full h-44 rounded-2xl bg-caramel/40 border border-caramel/50 flex flex-col items-center justify-center text-center p-4">
                            <span class="font-heading text-3xl tracking-tight text-cream">TrueBite</span>
                            <span class="text-xs font-bold text-amber mt-1 tracking-wider uppercase">Fuel Your Match</span>
                            <span class="mt-3 px-3.5 py-1 rounded-full bg-cocoa text-[11px] text-cream/90 font-bold">
                                100% Real Protein &bull; No Added Drama
                            </span>
                        </div>

                        <div class="grid grid-cols-2 gap-3 pt-1">
                            <div class="bg-caramel/30 rounded-2xl p-3 text-center border border-caramel/30">
                                <div class="text-xs text-cream/80 font-medium">Protein Tinggi</div>
                                <div class="font-heading text-amber text-lg mt-0.5">Optimal</div>
                            </div>
                            <div class="bg-caramel/30 rounded-2xl p-3 text-center border border-caramel/30">
                                <div class="text-xs text-cream/80 font-medium">Kalori Terukur</div>
                                <div class="font-heading text-cream text-lg mt-0.5">Praktis</div>
                            </div>
                        </div>
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
                <span class="text-xs font-bold uppercase tracking-widest text-caramel">Koleksi Pilihan</span>
                <h2 class="font-heading text-3xl sm:text-5xl text-cocoa tracking-tight mt-1">Varian Favorit</h2>
                <p class="text-cocoa/80 text-sm sm:text-base max-w-lg mt-2">
                    Pilihan andalan komunitas gym dan pemain padel untuk pemulihan tenaga maksimal.
                </p>
            </div>
            <div>
                <a href="/menu" class="hidden sm:inline-flex items-center gap-2 btn-pill-secondary px-6 py-2.5 text-sm border-2 border-caramel/40">
                    Lihat Semua Menu &rarr;
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
            @foreach($products as $product)
                <article class="bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-6 flex flex-col justify-between hover:border-burnt/50 transition">
                    <div>
                        {{-- Panel gambar atau placeholder bento --}}
                        @if(isset($product->image) && $product->image)
                            <div class="w-full h-48 rounded-2xl overflow-hidden bg-cream mb-5">
                                <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                            </div>
                        @else
                            {{-- Bento flat color placeholder tanpa foto rusak --}}
                            <div class="w-full h-48 rounded-2xl bg-cocoa flex flex-col items-center justify-center text-center p-4 mb-5 border border-caramel/30">
                                <span class="font-heading text-xl text-cream tracking-tight">{{ $product->name }}</span>
                                <span class="text-xs font-bold text-amber mt-1 tracking-wider uppercase">Protein Snack</span>
                                <span class="mt-3 px-3 py-1 rounded-full bg-caramel/60 text-[11px] text-cream font-bold">TrueBite Original</span>
                            </div>
                        @endif

                        <h3 class="font-heading text-2xl text-cocoa tracking-tight mb-2">
                            {{ $product->name }}
                        </h3>

                        {{-- Chip Nutrisi & Kalori --}}
                        <div class="flex flex-wrap items-center gap-2 mb-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-gorilla text-white">
                                {{ $product->protein_grams }}g Protein
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-caramel/30 text-cocoa">
                                {{ $product->calories }} kcal
                            </span>
                        </div>

                        <div class="text-xl font-heading text-burnt mb-6">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </div>
                    </div>

                    <a href="/menu/{{ $product->slug }}" class="w-full text-center btn-pill-primary py-3 text-sm">
                        Lihat Detail
                    </a>
                </article>
            @endforeach
        </div>

        <div class="mt-8 text-center sm:hidden">
            <a href="/menu" class="w-full inline-flex justify-center btn-pill-secondary px-6 py-3 text-sm border-2 border-caramel/40">
                Lihat Semua Menu &rarr;
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
                Siap tingkatkan performa latihanmu?
            </h2>
            <p class="text-white/95 text-base sm:text-lg max-w-xl mx-auto">
                Pesan varian TrueBite favoritmu sekarang langsung via WhatsApp dan rasakan bedanya di lapangan.
            </p>
            <div class="pt-2">
                <a href="{{ config('services.truebite.whatsapp', '#') }}?text={{ urlencode('Halo TrueBite, saya mau pesan snack protein sekarang!') }}" target="_blank" rel="noopener noreferrer" class="btn-pill-primary px-8 py-4 text-base font-bold inline-flex items-center gap-2 shadow-none border-2 border-white/20">
                    Pesan via WhatsApp Sekarang
                </a>
            </div>
        </div>
    </section>

@endsection