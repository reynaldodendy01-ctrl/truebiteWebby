@extends('layouts.app')

@section('title', $product->name)

@section('content')

    {{-- DETAIL VARIAN (Galeri Bento di atas Cocoa #2A0F07 Coklat Gelap) --}}
    <div class="bg-cocoa text-cream py-10 sm:py-14 lg:py-18 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Breadcrumb / Back Link --}}
            <div class="mb-8">
                <a href="/menu" class="inline-flex items-center gap-2 text-sm font-bold text-cream/80 hover:text-amber transition">
                    &larr; Kembali ke Katalog Menu
                </a>
            </div>

            <article class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                {{-- SISI KIRI: BENTO PRODUCT DISPLAY / PLACEHOLDER --}}
                <div class="lg:col-span-6 space-y-6">
                    <div class="bg-caramel/25 border-2 border-caramel/40 rounded-3xl lg:rounded-4xl p-6 sm:p-8">
                        {{-- Panel Foto atau Bento Placeholder Flat --}}
                        @if(isset($product->image) && $product->image)
                            <div class="w-full h-72 sm:h-96 rounded-2xl overflow-hidden bg-cream mb-6">
                                <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                            </div>
                        @else
                            {{-- Bento flat color placeholder tanpa gambar rusak --}}
                            <div class="w-full h-72 sm:h-96 rounded-2xl bg-cocoa flex flex-col items-center justify-center text-center p-6 mb-6 border border-caramel/40">
                                <span class="font-heading text-3xl sm:text-4xl text-cream tracking-tight">{{ $product->name }}</span>
                                <span class="text-xs sm:text-sm font-bold text-amber mt-2 tracking-widest uppercase">High Protein Bar</span>
                                <div class="mt-4">
                                    <span class="px-4 py-1.5 rounded-full bg-caramel/60 text-xs text-cream font-bold">
                                        TrueBite Nutrition
                                    </span>
                                </div>
                            </div>
                        @endif

                        {{-- Bento Feature Strip --}}
                        <div class="bg-caramel/30 rounded-2xl p-4 border border-caramel/40 flex items-center justify-between">
                            <div>
                                <span class="font-heading text-lg text-cream">Gigit. Isi ulang tenaga.</span>
                                <p class="text-xs text-cream/70 mt-0.5">Asupan energi bersih untuk gym dan padel.</p>
                            </div>
                            <span class="text-xs font-bold px-3 py-1 rounded-full bg-cocoa text-amber">
                                Real Protein
                            </span>
                        </div>
                    </div>
                </div>

                {{-- SISI KANAN: DETAIL, TABEL NUTRISI (ANGKA AMBER), TOMBOL BELI (BURNT ORANGE) --}}
                <div class="lg:col-span-6 space-y-6">
                    <div class="bg-caramel/20 border-2 border-caramel/40 rounded-3xl lg:rounded-4xl p-6 sm:p-8 space-y-6">
                        
                        {{-- Category Badge & Name --}}
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-gorilla text-white">
                                    Varian Resmi TrueBite
                                </span>
                            </div>
                            <h1 class="font-heading text-3xl sm:text-5xl text-cream tracking-tight leading-tight">
                                {{ $product->name }}
                            </h1>
                        </div>

                        {{-- Harga --}}
                        <div>
                            <div class="inline-flex items-center px-4 py-2 rounded-full bg-cocoa border border-caramel/50 text-amber font-heading text-2xl sm:text-3xl font-extrabold tracking-tight">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </div>
                        </div>

                        {{-- Deskripsi Produk --}}
                        <section class="space-y-2 pt-2">
                            <h3 class="text-xs font-bold uppercase tracking-widest text-cream/70">
                                Deskripsi Produk
                            </h3>
                            <p class="text-cream/90 text-sm sm:text-base leading-relaxed font-normal">
                                {{ $product->description }}
                            </p>
                        </section>

                        {{-- Tabel Nutrisi (Nutrition Facts) dengan Angka Amber di atas Coklat Gelap --}}
                        <section class="space-y-3 pt-3">
                            <h3 class="text-xs font-bold uppercase tracking-widest text-cream/70">
                                Informasi Nutrisi (Nutrition Facts)
                            </h3>
                            <div class="grid grid-cols-2 gap-4">
                                {{-- Card Protein --}}
                                <div class="bg-cocoa border-2 border-caramel/50 rounded-2xl p-4 sm:p-5 text-center">
                                    <div class="text-xs text-cream/75 font-medium uppercase tracking-wide">Protein</div>
                                    <div class="font-heading text-3xl sm:text-4xl text-amber font-extrabold mt-1">
                                        {{ $product->protein_grams }}<span class="text-lg font-normal text-amber/80 ml-0.5">g</span>
                                    </div>
                                    <div class="text-[11px] text-cream/60 mt-1 font-medium">Gram per sajian</div>
                                </div>

                                {{-- Card Kalori --}}
                                <div class="bg-cocoa border-2 border-caramel/50 rounded-2xl p-4 sm:p-5 text-center">
                                    <div class="text-xs text-cream/75 font-medium uppercase tracking-wide">Kalori</div>
                                    <div class="font-heading text-3xl sm:text-4xl text-amber font-extrabold mt-1">
                                        {{ $product->calories }}<span class="text-lg font-normal text-amber/80 ml-0.5">kcal</span>
                                    </div>
                                    <div class="text-[11px] text-cream/60 mt-1 font-medium">Energi terukur</div>
                                </div>
                            </div>
                        </section>

                        {{-- Tombol Beli Langsung via WhatsApp dari Config (Burnt Orange, Pertahankan Persis) --}}
                        <div class="pt-4 border-t border-caramel/30 space-y-2">
                            <!-- Link Beli Langsung via WhatsApp dari Config -->
                            <a href="{{ config('services.truebite.whatsapp', '#') }}?text=Halo%20TrueBite,%20saya%20mau%20pesan%20{{ urlencode($product->name) }}" target="_blank" rel="noopener noreferrer" class="w-full text-center btn-pill-primary py-4 text-base font-bold block">
                                Pesan via WhatsApp
                            </a>
                            <p class="text-center text-xs text-cream/60 pt-1">
                                Pembelian langsung terhubung ke admin WhatsApp resmi TrueBite.
                            </p>
                        </div>

                    </div>
                </div>

            </article>
        </div>
    </div>

@endsection