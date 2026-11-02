@extends('layouts.app')

@section('title', 'The Bites')

@section('content')

    {{-- HEADER / TITLE SECTION --}}
    <section class="py-12 sm:py-16 lg:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <h1 class="font-heading text-4xl sm:text-6xl text-cocoa tracking-tight leading-tight">
                Your Daily Cravings
            </h1>
            <p class="text-cocoa/85 text-base sm:text-lg mt-4 leading-relaxed font-normal">
                Discover our crispy brownies, where irresistible taste meets the goodness of protein.
            </p>
        </div>

        {{-- PRODUCT GRID --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 mt-12">
            @forelse($products as $product)
                <article class="bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-6 sm:p-7 flex flex-col justify-between hover:border-burnt/50 transition">
                    <div>
                        {{-- Panel Foto atau Bento Placeholder Flat --}}
                        @if(isset($product->image) && $product->image && file_exists(public_path('images/products/' . $product->image)))
                            <div class="w-full h-52 rounded-2xl overflow-hidden bg-cream mb-5 flex items-center justify-center p-2">
                                <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-contain">
                            </div>
                        @else
                            {{-- Bento flat color placeholder tanpa gambar rusak --}}
                            <div class="w-full h-52 rounded-2xl bg-cocoa flex flex-col items-center justify-center text-center p-5 mb-5 border border-caramel/30">
                                <span class="font-heading text-2xl text-cream tracking-tight">{{ $product->name }}</span>
                                <span class="text-xs font-bold text-amber mt-1 tracking-wider uppercase">Crispy Brownies</span>
                                <div class="mt-3">
                                    <span class="px-3.5 py-1 rounded-full bg-caramel/60 text-[11px] text-cream font-bold">
                                        10g Protein
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
                            @if(isset($product->calories) && $product->calories)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-caramel/30 text-cocoa">
                                    {{ $product->calories }} kcal
                                </span>
                            @endif
                        </div>

                        {{-- Deskripsi Produk --}}
                        <p class="text-cocoa/80 text-sm leading-relaxed mb-6">
                            {{ $product->description }}
                        </p>
                    </div>

                    {{-- Tombol Pill More Details --}}
                    <div>
                        <a href="/menu/{{ $product->slug }}" class="w-full text-center btn-pill-primary py-3 text-sm block">
                            More Details
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-12 text-center">
                    <h3 class="font-heading text-2xl text-cocoa">Belum ada produk</h3>
                    <p class="text-cocoa/80 text-sm mt-2">Daftar snack protein The Bites akan segera diperbarui.</p>
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
                <a href="{{ config('services.truebite.whatsapp') ?: 'https://wa.me/628113777353' }}?text={{ urlencode('Halo TrueBite, saya tertarik memesan snack protein untuk komunitas/gym!') }}" target="_blank" rel="noopener noreferrer" class="btn-pill-primary px-8 py-4 text-sm font-bold inline-flex items-center gap-2 whitespace-nowrap">
                    <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                    <span>Contact Us</span>
                </a>
            </div>
        </div>
    </section>

@endsection