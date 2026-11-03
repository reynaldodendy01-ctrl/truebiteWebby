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

        @php
            $canonicalProducts = [
                (object)[
                    'id' => 1,
                    'name' => 'TrueBite Crispy Brownies - Original',
                    'slug' => 'truebite-crispy-brownies-original',
                    'price' => 42000,
                    'protein_grams' => 10,
                    'calories' => 180,
                    'image' => 'crispy-brownies-original.jpg',
                    'description' => 'A healthy, high-protein snack combining a rich dark chocolate flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
                ],
                (object)[
                    'id' => 2,
                    'name' => 'TrueBite Crispy Brownies - Almond',
                    'slug' => 'truebite-crispy-brownies-almond',
                    'price' => 44000,
                    'protein_grams' => 10,
                    'calories' => 190,
                    'image' => 'crispy-brownies-almond.jpg',
                    'description' => 'A healthy, high-protein snack combining a rich almond flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free, and sweetened with natural stevia for a smarter snacking choice.',
                ],
                (object)[
                    'id' => 3,
                    'name' => 'TrueBite Crispy Brownies - Cheese',
                    'slug' => 'truebite-crispy-brownies-cheese',
                    'price' => 43000,
                    'protein_grams' => 10,
                    'calories' => 190,
                    'image' => 'crispy-brownies-cheese.jpg',
                    'description' => 'A healthy, high-protein snack combining a rich cheese flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
                ],
                (object)[
                    'id' => 4,
                    'name' => 'TrueBite Crispy Brownies - Peanut',
                    'slug' => 'truebite-crispy-brownies-peanut',
                    'price' => 43000,
                    'protein_grams' => 10,
                    'calories' => 190,
                    'image' => 'crispy-brownies-peanut.jpg',
                    'description' => 'A healthy, high-protein snack combining a rich peanut flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
                ],
            ];

            // Prioritaskan data produk dari DB jika ada
            $fourProducts = (isset($products) && count($products) > 0) ? $products : $canonicalProducts;

            $shopeeMap = [
                'original' => 'https://shopee.co.id/TrueBite-Protein-Snack-Original-Dark-Chocolate-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.44418065230',
                'almond'   => 'https://shopee.co.id/TrueBite-Protein-Snack-Almond-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.41667771939',
                'cheese'   => 'https://shopee.co.id/True-Bite-Protein-Snack-Cheese-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.44168065411',
                'peanut'   => 'https://shopee.co.id/TrueBite-Protein-Snack-Peanut-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free--i.1624412100.28341263349',
            ];
        @endphp

        {{-- PRODUCT GRID --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 mt-12">
            @forelse($fourProducts as $product)
                @php
                    $slugLower = strtolower($product->slug ?? $product->name ?? '');
                    $variantKey = 'original';
                    foreach (['cheese', 'almond', 'peanut', 'original'] as $k) {
                        if (str_contains($slugLower, $k)) {
                            $variantKey = $k;
                            break;
                        }
                    }

                    $variantTitles = [
                        'original' => 'TrueBite Crispy Brownies - Original',
                        'almond'   => 'TrueBite Crispy Brownies - Almond',
                        'cheese'   => 'TrueBite Crispy Brownies - Cheese',
                        'peanut'   => 'TrueBite Crispy Brownies - Peanut',
                    ];
                    $productTitle = !empty($product->name) ? $product->name : ($variantTitles[$variantKey] ?? 'TrueBite Crispy Brownies');

                    $prices = [
                        'original' => 42000,
                        'almond'   => 44000,
                        'peanut'   => 43000,
                        'cheese'   => 43000,
                    ];
                    // Prioritaskan harga dari database jika sudah diisi
                    $priceVal = !empty($product->price) ? $product->price : ($prices[$variantKey] ?? 42000);
                    $proteinVal = !empty($product->protein_grams) ? $product->protein_grams : 10;

                    $descriptions = [
                        'original' => 'A healthy, high-protein snack combining a rich dark chocolate flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
                        'almond'   => 'A healthy, high-protein snack combining a rich almond flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free, and sweetened with natural stevia for a smarter snacking choice.',
                        'cheese'   => 'A healthy, high-protein snack combining a rich cheese flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
                        'peanut'   => 'A healthy, high-protein snack combining a rich peanut flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
                    ];
                    // Prioritaskan deskripsi dari database jika ada
                    $productDesc = !empty($product->description) ? $product->description : ($descriptions[$variantKey] ?? '');

                    // E-Commerce product photo
                    $foundImage = null;
                    if (isset($product->image) && $product->image && file_exists(public_path('images/products/' . $product->image))) {
                        $foundImage = $product->image;
                    } elseif (file_exists(public_path('images/products/crispy-brownies-' . $variantKey . '.jpg'))) {
                        $foundImage = 'crispy-brownies-' . $variantKey . '.jpg';
                    } elseif (file_exists(public_path('images/products/crispy-brownies-' . $variantKey . '.png'))) {
                        $foundImage = 'crispy-brownies-' . $variantKey . '.png';
                    }
                    // Prioritaskan product_link dari DB, fallback ke shopeeMap
                    $productShopeeUrl = (!empty($product->product_link))
                        ? $product->product_link
                        : ($shopeeMap[$variantKey] ?? 'https://s.shopee.co.id/BV46KyWYa');
                @endphp
                <article class="bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-6 sm:p-7 flex flex-col justify-between hover:border-burnt/50 transition">
                    <div>
                        {{-- Panel Foto E-Commerce Full Image (Tidak Terpotong) --}}
                        @if($foundImage)
                            <div class="w-full aspect-square rounded-2xl overflow-hidden bg-[#FAF0DC] mb-5 shadow-sm flex items-center justify-center p-2 border border-caramel/20">
                                <a href="{{ $productShopeeUrl }}" target="_blank" rel="noopener noreferrer" class="block w-full h-full flex items-center justify-center">
                                    <img src="{{ asset('images/products/' . $foundImage) }}" alt="{{ $product->name }}" class="w-full h-full object-contain object-center hover:scale-105 transition-transform duration-300" draggable="false">
                                </a>
                            </div>
                        @else
                            {{-- Bento flat color placeholder tanpa gambar rusak --}}
                            <a href="{{ $productShopeeUrl }}" target="_blank" rel="noopener noreferrer">
                                <div class="w-full h-56 rounded-2xl bg-cocoa flex flex-col items-center justify-center text-center p-5 mb-5 border border-caramel/30 hover:opacity-90 transition">
                                    <span class="font-heading text-2xl text-cream tracking-tight">{{ $product->name }}</span>
                                    <span class="text-xs font-bold text-amber mt-1 tracking-wider uppercase">Crispy Brownies</span>
                                    <div class="mt-3">
                                        <span class="px-3.5 py-1 rounded-full bg-caramel/60 text-[11px] text-cream font-bold">
                                            10g Protein
                                        </span>
                                    </div>
                                </div>
                            </a>
                        @endif

                        <h2 class="font-heading text-2xl text-cocoa tracking-tight mb-3">
                            {{ $product->name }}
                        </h2>

                        {{-- Chips Harga, Protein, dan Kalori (Sesuai Aturan Moodboard) --}}
                        <div class="flex flex-wrap items-center gap-2 mb-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-cocoa text-amber">
                                Rp {{ number_format($priceVal, 0, ',', '.') }}
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-gorilla text-white">
                                10g Protein
                            </span>
                            @if(isset($product->calories) && $product->calories)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-caramel/30 text-cocoa">
                                    {{ $product->calories }} kcal
                                </span>
                            @endif
                        </div>

                        {{-- Penjelasan Singkat Produk --}}
                        <p class="text-cocoa/80 text-sm leading-relaxed mb-6 font-normal">
                            {{ $productDesc }}
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