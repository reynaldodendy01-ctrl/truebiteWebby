@extends('layouts.app')

@section('title', $product->name)

@section('content')

    {{-- DETAIL VARIAN (Galeri Bento di atas Cocoa #2A0F07 Coklat Gelap) --}}
    <div class="bg-cocoa text-cream py-10 sm:py-14 lg:py-18 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Breadcrumb / Back Link --}}
            <div class="mb-8">
                <a href="/menu" class="inline-flex items-center gap-2 text-sm font-bold text-cream/80 hover:text-amber transition">
                    &larr; Kembali ke The Bites
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
                                <span class="font-heading text-lg text-cream">The Crunch</span>
                                <p class="text-xs text-cream/70 mt-0.5">A more mindful choice untuk hari-hari aktifmu.</p>
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

                        {{-- Tombol Beli: Shopee & WhatsApp --}}
                        <div class="pt-4 border-t border-caramel/30 space-y-3">
                            <!-- Link Beli di Shopee -->
                            <a href="https://s.shopee.co.id/BV46KyWYa" target="_blank" rel="noopener noreferrer" class="w-full text-center btn-pill-primary py-4 text-base font-bold inline-flex items-center justify-center gap-2">
                                <span>Get Your Bite</span>
                            </a>
                            <!-- Link Tanya/Order via WhatsApp -->
                            <a href="{{ config('services.truebite.whatsapp', '#') }}?text=Halo%20TrueBite,%20saya%20mau%20pesan%20{{ urlencode($product->name) }}" target="_blank" rel="noopener noreferrer" class="w-full text-center btn-pill-secondary py-3 text-sm font-bold inline-flex items-center justify-center gap-2 border-2 border-caramel/40">
                                <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                </svg>
                                <span>Contact Us</span>
                            </a>
                        </div>

                    </div>
                </div>

            </article>
        </div>
    </div>

@endsection