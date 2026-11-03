@extends('layouts.app')

@section('title', 'The Bites')

@section('content')

    <section class="py-12 sm:py-16 lg:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <h1 class="font-heading text-4xl sm:text-6xl text-cocoa tracking-tight leading-tight">
                Your Daily Cravings
            </h1>
            <p class="text-cocoa/85 text-base sm:text-lg mt-4 leading-relaxed font-normal">
                Discover our crispy brownies, where irresistible taste meets the goodness of protein.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 mt-12">
            @forelse($products as $product)
                @php
                    $slugLower = strtolower($product->slug ?? $product->name ?? '');
                    $variantKey = 'original';
                    foreach (['cheese', 'almond', 'peanut', 'original'] as $k) {
                        if (str_contains($slugLower, $k)) {
                            $variantKey = $k;
                            break;
                        }
                    }

                    $shopeeMap = [
                        'original' => 'https://shopee.co.id/TrueBite-Protein-Snack-Original-Dark-Chocolate-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.44418065230',
                        'almond'   => 'https://shopee.co.id/TrueBite-Protein-Snack-Almond-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.41667771939',
                        'cheese'   => 'https://shopee.co.id/True-Bite-Protein-Snack-Cheese-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.44168065411',
                        'peanut'   => 'https://shopee.co.id/TrueBite-Protein-Snack-Peanut-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free--i.1624412100.28341263349',
                    ];
                    $productShopeeUrl = $shopeeMap[$variantKey] ?? 'https://s.shopee.co.id/BV46KyWYa';
                @endphp
                <article class="bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-6 sm:p-7 flex flex-col justify-between hover:border-burnt/50 transition">
                    <div>
                        @if($product->image)
                            <div class="w-full aspect-square rounded-2xl overflow-hidden mb-5 shadow-sm border border-caramel/25">
                                <a href="{{ $productShopeeUrl }}" target="_blank" rel="noopener noreferrer" class="block w-full h-full">
                                    <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-300" draggable="false">
                                </a>
                            </div>
                        @else
                            <a href="{{ $productShopeeUrl }}" target="_blank" rel="noopener noreferrer">
                                <div class="w-full h-56 rounded-2xl bg-cocoa flex flex-col items-center justify-center text-center p-5 mb-5 border border-caramel/30 hover:opacity-90 transition">
                                    <span class="font-heading text-2xl text-cream tracking-tight">{{ $product->name }}</span>
                                    <span class="text-xs font-bold text-amber mt-1 tracking-wider uppercase">Crispy Brownies</span>
                                    <div class="mt-3">
                                        <span class="px-3.5 py-1 rounded-full bg-caramel/60 text-[11px] text-cream font-bold">
                                            {{ $product->protein_grams }}g Protein
                                        </span>
                                    </div>
                                </div>
                            </a>
                        @endif

                        <h2 class="font-heading text-2xl text-cocoa tracking-tight mb-3">
                            {{ $product->name }}
                        </h2>

                        <div class="flex flex-wrap items-center gap-2 mb-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-cocoa text-amber">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-gorilla text-white">
                                {{ $product->protein_grams }}g Protein
                            </span>
                            @if($product->calories)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-caramel/30 text-cocoa">
                                    {{ $product->calories }} kcal
                                </span>
                            @endif
                        </div>

                        <p class="text-cocoa/80 text-sm leading-relaxed mb-6 font-normal">
                            {{ $product->description }}
                        </p>
                    </div>

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

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 sm:pb-20">
        <div class="bg-cocoa text-cream rounded-3xl lg:rounded-4xl p-8 sm:p-12 border-2 border-caramel/40 flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div class="space-y-2">
                <span class="text-amber text-xs font-bold uppercase tracking-widest">Pemesanan Komunitas &amp; Event</span>
                <h3 class="font-heading text-2xl sm:text-3xl text-cream tracking-tight">
                    Your Next Favourite Bite Awaits.
                </h3>
                <p class="text-cream/80 text-sm max-w-xl">
                    A little indulgence, a little more goodness. Make room for a snack that brings together irresistible taste and the goodness of protein.
                </p>
            </div>
            <div>
                <a href="https://s.shopee.co.id/BV46KyWYa" target="_blank" rel="noopener noreferrer" class="btn-pill-primary px-8 py-4 text-sm font-bold inline-flex items-center gap-2 whitespace-nowrap">
                    <span>Get Your TrueBite</span>
                </a>
            </div>
        </div>
    </section>

@endsection
