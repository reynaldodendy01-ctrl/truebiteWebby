@extends('layouts.app')

@section('title', 'Menu Katalog')

@section('content')

    {{-- HEADER / TITLE SECTION --}}
    <section class="py-12 sm:py-16 lg:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-caramel/25 text-cocoa text-xs font-bold tracking-wide mb-4">
                <span>⚡ Katalog Lengkap TrueBite</span>
            </div>
            <h1 class="font-heading text-4xl sm:text-6xl text-cocoa tracking-tight leading-tight">
                Katalog Snack Protein
            </h1>
            <p class="text-cocoa/85 text-base sm:text-lg mt-4 leading-relaxed font-normal">
                Kaya protein berkualitas tinggi dengan takaran kalori pas untuk asupan sebelum atau sesudah bertanding di gym dan padel court.
            </p>
        </div>

        {{-- PRODUCT GRID --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mt-12">
            @forelse($products as $product)
                <article class="bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-6 sm:p-7 flex flex-col justify-between hover:border-burnt/50 transition">
                    <div>
                        {{-- Panel Foto atau Bento Placeholder Flat --}}
                        @if(isset($product->image) && $product->image)
                            <div class="w-full h-52 rounded-2xl overflow-hidden bg-cream mb-5">
                                <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                            </div>
                        @else
                            {{-- Bento flat color placeholder tanpa gambar rusak --}}
                            <div class="w-full h-52 rounded-2xl bg-cocoa flex flex-col items-center justify-center text-center p-5 mb-5 border border-caramel/30">
                                <span class="font-heading text-2xl text-cream tracking-tight">{{ $product->name }}</span>
                                <span class="text-xs font-bold text-amber mt-1 tracking-wider uppercase">High Protein Bar</span>
                                <div class="mt-3">
                                    <span class="px-3.5 py-1 rounded-full bg-caramel/60 text-[11px] text-cream font-bold">
                                        TrueBite Fuel
                                    </span>
                                </div>
                            </div>
                        @endif

                        <h2 class="font-heading text-2xl text-cocoa tracking-tight mb-3">
                            {{ $product->name }}
                        </h2>

                        {{-- Chips Harga, Protein, dan Kalori (Sesuai Aturan Moodboard) --}}
                        <div class="flex flex-wrap items-center gap-2 mb-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-cocoa text-amber">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-gorilla text-white">
                                {{ $product->protein_grams }}g Protein
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-caramel/30 text-cocoa">
                                {{ $product->calories }} kcal
                            </span>
                        </div>

                        {{-- Deskripsi Produk --}}
                        <p class="text-cocoa/80 text-sm leading-relaxed mb-6">
                            {{ $product->description }}
                        </p>
                    </div>

                    {{-- Tombol Pill Lihat Detail --}}
                    <div>
                        <a href="/menu/{{ $product->slug }}" class="w-full text-center btn-pill-primary py-3 text-sm block">
                            Lihat Detail
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-12 text-center">
                    <h3 class="font-heading text-2xl text-cocoa">Belum ada produk</h3>
                    <p class="text-cocoa/80 text-sm mt-2">Daftar menu snack protein akan segera diperbarui.</p>
                </div>
            @endforelse
        </div>
    </section>

    {{-- BOTTOM BANNER INFO / WHATSAPP ORDER --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 sm:pb-20">
        <div class="bg-cocoa text-cream rounded-3xl lg:rounded-4xl p-8 sm:p-12 border-2 border-caramel/40 flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div class="space-y-2">
                <span class="text-amber text-xs font-bold uppercase tracking-widest">Pemesanan Komunitas &amp; Event</span>
                <h3 class="font-heading text-2xl sm:text-3xl text-cream tracking-tight">
                    Butuh stok untuk gym, turnamen, atau klub padel kamu?
                </h3>
                <p class="text-cream/80 text-sm max-w-xl">
                    Hubungi tim TrueBite langsung via WhatsApp untuk paket bundling dan penawaran komunitas.
                </p>
            </div>
            <div>
                <a href="{{ config('services.truebite.whatsapp', '#') }}?text={{ urlencode('Halo TrueBite, saya tertarik memesan snack protein untuk komunitas/gym!') }}" target="_blank" rel="noopener noreferrer" class="btn-pill-primary px-8 py-4 text-sm font-bold inline-flex items-center whitespace-nowrap">
                    Hubungi WhatsApp
                </a>
            </div>
        </div>
    </section>

@endsection