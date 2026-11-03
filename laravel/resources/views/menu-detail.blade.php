@extends('layouts.app')

@section('title', $product->name)

@section('content')

@php
    $shopeeMap = [
        'original' => 'https://shopee.co.id/TrueBite-Protein-Snack-Original-Dark-Chocolate-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.44418065230?extraParams=%7B%22display_model_id%22%3A266486702864%2C%22model_selection_logic%22%3A3%7D&image_ids=id-11134207-8224o-mg7ludkcy68ae2',
        'cheese'   => 'https://shopee.co.id/True-Bite-Protein-Snack-Cheese-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.44168065411?extraParams=%7B%22display_model_id%22%3A208693754210%2C%22model_selection_logic%22%3A3%7D&image_ids=id-11134207-8224o-mg7ludkcwrnu09',
        'almond'   => 'https://shopee.co.id/TrueBite-Protein-Snack-Almond-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.41667771939?extraParams=%7B%22display_model_id%22%3A296462919706%2C%22model_selection_logic%22%3A3%7D&image_ids=id-11134207-8224u-mg7ludjyfmz29d',
        'peanut'   => 'https://shopee.co.id/TrueBite-Protein-Snack-Peanut-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free--i.1624412100.28341263349?extraParams=%7B%22display_model_id%22%3A286485405240%2C%22model_selection_logic%22%3A3%7D&image_ids=id-11134207-8224q-mg7ludkcvd3ebc',
    ];

    $productSlug = strtolower($product->slug ?? $product->name);
    $variantKey = 'original';
    foreach (['cheese', 'almond', 'peanut', 'original'] as $key) {
        if (str_contains($productSlug, $key)) {
            $variantKey = $key;
            break;
        }
    }
    $shopeeUrl = $shopeeMap[$variantKey] ?? 'https://s.shopee.co.id/BV46KyWYa';

    $flavorNames = [
        'original' => 'rich dark chocolate flavor',
        'almond'   => 'premium almond flavor',
        'cheese'   => 'premium cheese flavor',
        'peanut'   => 'crunchy peanut flavor',
    ];
    $currentFlavor = $flavorNames[$variantKey] ?? 'delicious flavor';
@endphp

    <div class="bg-cocoa text-cream py-10 sm:py-14 lg:py-18 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="mb-8">
                <a href="/menu" class="inline-flex items-center gap-2 text-sm font-bold text-cream/80 hover:text-amber transition">
                    &larr; Back to All The Bites
                </a>
            </div>

            <article class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <div class="lg:col-span-6 space-y-6">
                    <div class="bg-caramel/25 border-2 border-caramel/40 rounded-3xl lg:rounded-4xl p-6 sm:p-8">
                        @if($product->image)
                            <div class="w-full aspect-square max-h-[480px] rounded-2xl overflow-hidden mb-6 shadow-sm border border-caramel/30">
                                <a href="{{ $shopeeUrl }}" target="_blank" rel="noopener noreferrer" class="block w-full h-full">
                                    <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-300" draggable="false">
                                </a>
                            </div>
                        @else
                            <a href="{{ $shopeeUrl }}" target="_blank" rel="noopener noreferrer">
                                <div class="w-full h-72 sm:h-96 rounded-2xl bg-cocoa flex flex-col items-center justify-center text-center p-6 mb-6 border border-caramel/40 hover:opacity-90 transition">
                                    <span class="font-heading text-3xl sm:text-4xl text-cream tracking-tight">{{ $product->name }}</span>
                                    <span class="text-xs sm:text-sm font-bold text-amber mt-2 tracking-widest uppercase">Crispy Brownies</span>
                                    <div class="mt-4">
                                        <span class="px-4 py-1.5 rounded-full bg-caramel/60 text-xs text-cream font-bold">
                                            {{ $product->protein_grams }}g Protein
                                        </span>
                                    </div>
                                </div>
                            </a>
                        @endif

                        <div class="bg-caramel/30 rounded-2xl p-5 border border-caramel/40 space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="font-heading text-base text-cream">Overview</span>
                                <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-cocoa text-amber">
                                    100% Real Protein
                                </span>
                            </div>
                            <p class="text-xs sm:text-sm text-cream/90 leading-relaxed font-normal">
                                {{ $product->description }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6 space-y-6">
                    <div class="bg-caramel/20 border-2 border-caramel/40 rounded-3xl lg:rounded-4xl p-6 sm:p-8 space-y-6">
                        
                        <div>
                            <h1 class="font-heading text-3xl sm:text-5xl text-cream tracking-tight leading-tight">
                                {{ $product->name }}
                            </h1>
                        </div>

                        <div>
                            <div class="inline-flex items-center px-4 py-2 rounded-full bg-cocoa border border-caramel/50 text-amber font-heading text-2xl sm:text-3xl font-extrabold tracking-tight">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </div>
                        </div>

                        <section class="space-y-3 pt-2">
                            <h3 class="text-xs font-bold uppercase tracking-widest text-cream/70">
                                Main Benefits
                            </h3>
                            <ul class="space-y-2.5 text-sm sm:text-base text-cream/90 font-normal">
                                <li class="flex items-start gap-2.5">
                                    <span class="w-2 h-2 rounded-full bg-amber shrink-0 mt-1.5"></span>
                                    <span><strong>{{ $product->protein_grams }}g Protein per pack</strong> to support energy and body recovery</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="w-2 h-2 rounded-full bg-amber shrink-0 mt-1.5"></span>
                                    <span><strong>{{ $variantKey === 'almond' ? 'Gluten-free' : 'Gluten-free & low sugar' }}</strong>, safe for a healthy lifestyle</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="w-2 h-2 rounded-full bg-amber shrink-0 mt-1.5"></span>
                                    <span>Enriched with nutrients from quality <em>Zophobas morio</em> powder</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="w-2 h-2 rounded-full bg-amber shrink-0 mt-1.5"></span>
                                    <span>Crispy brownie texture with a {{ $currentFlavor }}</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="w-2 h-2 rounded-full bg-amber shrink-0 mt-1.5"></span>
                                    <span><strong>Practical &amp; travel-friendly</strong>, easy to carry anywhere</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="w-2 h-2 rounded-full bg-amber shrink-0 mt-1.5"></span>
                                    <span><strong>Sustainable choice</strong>, good for both the body and the environment</span>
                                </li>
                            </ul>
                        </section>

                        <section class="space-y-3 pt-3">
                            <h3 class="text-xs font-bold uppercase tracking-widest text-cream/70">
                                Informasi Nutrisi (Nutrition Facts)
                            </h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-cocoa border-2 border-caramel/50 rounded-2xl p-4 sm:p-5 text-center">
                                    <div class="text-xs text-cream/75 font-medium uppercase tracking-wide">Protein</div>
                                    <div class="font-heading text-3xl sm:text-4xl text-amber font-extrabold mt-1">
                                        {{ $product->protein_grams }}<span class="text-lg font-normal text-amber/80 ml-0.5">g</span>
                                    </div>
                                    <div class="text-[11px] text-cream/60 mt-1 font-medium">Gram per sajian</div>
                                </div>

                                <div class="bg-cocoa border-2 border-caramel/50 rounded-2xl p-4 sm:p-5 text-center">
                                    <div class="text-xs text-cream/75 font-medium uppercase tracking-wide">Kalori</div>
                                    <div class="font-heading text-3xl sm:text-4xl text-amber font-extrabold mt-1">
                                        {{ $product->calories }}<span class="text-lg font-normal text-amber/80 ml-0.5">kcal</span>
                                    </div>
                                    <div class="text-[11px] text-cream/60 mt-1 font-medium">Energi terukur</div>
                                </div>
                            </div>
                        </section>

                        <div class="pt-4 border-t border-caramel/30 space-y-3">
                            <a href="{{ $shopeeUrl }}" target="_blank" rel="noopener noreferrer" class="w-full text-center btn-pill-primary py-4 text-base font-bold inline-flex items-center justify-center gap-2">
                                <span>Order Now</span>
                                <span>&rarr;</span>
                            </a>
                            <a href="{{ config('services.truebite.whatsapp') ?: 'https://wa.me/628113777353' }}?text=Halo%20TrueBite,%20saya%20mau%20tanya%20tentang%20{{ urlencode($product->name) }}" target="_blank" rel="noopener noreferrer" class="w-full text-center btn-pill-secondary py-3 text-sm font-bold inline-flex items-center justify-center gap-2 border-2 border-caramel/40">
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
