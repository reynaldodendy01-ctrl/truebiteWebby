@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- SECTION 1: HERO (Brand Orange #DE5A17 Blok Besar) --}}
    <section class="bg-gorilla text-white relative overflow-hidden py-10 sm:py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 lg:gap-6 items-center">
                
                {{-- Left Column: Headline & Action Buttons --}}
                <div class="lg:col-span-6 space-y-6">
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
                <div class="lg:col-span-6 flex items-stretch justify-center overflow-visible">
                    <div class="relative w-full flex items-center justify-center" style="margin-top:-3rem; margin-bottom:-3rem;">
                        {{-- Ambient warm glow --}}
                        <div class="absolute inset-0 rounded-full blur-3xl -z-10" style="background:radial-gradient(ellipse at center,rgba(254,158,50,0.35) 0%,transparent 60%); transform:scale(1.2);"></div>
                        <a href="https://s.shopee.co.id/BV46KyWYa" target="_blank" rel="noopener noreferrer" class="block w-full cursor-pointer">
                            <img src="{{ asset('images/packaging-hero.png') }}" 
                                 alt="TrueBite Crispy Brownies - Almond & Cheese" 
                                 class="w-full h-auto object-contain hover:scale-105 transition-transform duration-300"
                                 style="filter: drop-shadow(0 32px 72px rgba(76,29,16,0.40)); max-width:none;"
                                 draggable="false">
                        </a>
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

            $shopeeMap = [
                'original' => 'https://shopee.co.id/TrueBite-Protein-Snack-Original-Dark-Chocolate-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.44418065230',
                'almond'   => 'https://shopee.co.id/TrueBite-Protein-Snack-Almond-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.41667771939',
                'cheese'   => 'https://shopee.co.id/True-Bite-Protein-Snack-Cheese-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.44168065411',
                'peanut'   => 'https://shopee.co.id/TrueBite-Protein-Snack-Peanut-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free--i.1624412100.28341263349',
            ];

            // Prioritaskan dari Database (jika HomeController hanya take 3, ambil 4 produk dari DB)
            try {
                $dbProducts = \App\Models\Product::take(4)->get();
                $fourProducts = ($dbProducts->count() >= 4) ? $dbProducts : ((isset($products) && count($products) === 4) ? $products : $canonicalProducts);
            } catch (\Throwable $e) {
                $fourProducts = (isset($products) && count($products) === 4) ? $products : $canonicalProducts;
            }
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($fourProducts as $product)
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
                    // Baca harga langsung dari database jika ada, fallback ke default jika kosong
                    $priceVal = !empty($product->price) ? $product->price : ($prices[$variantKey] ?? 42000);
                    $proteinVal = !empty($product->protein_grams) ? $product->protein_grams : 10;

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
                <article class="bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-6 flex flex-col justify-between hover:border-burnt/50 transition">
                    <div>
                        {{-- Panel Foto E-Commerce Full Image (Tidak Terpotong) --}}
                        @if($foundImage)
                            <div class="w-full aspect-square rounded-2xl overflow-hidden bg-[#FAF0DC] mb-5 shadow-sm flex items-center justify-center p-2 border border-caramel/20">
                                <a href="{{ $productShopeeUrl }}" target="_blank" rel="noopener noreferrer" class="block w-full h-full flex items-center justify-center">
                                    <img src="{{ asset('images/products/' . $foundImage) }}" alt="{{ $product->name }}" class="w-full h-full object-contain object-center hover:scale-105 transition-transform duration-300" draggable="false">
                                </a>
                            </div>
                        @else
                            {{-- Bento flat color placeholder tanpa foto rusak --}}
                            <a href="{{ $productShopeeUrl }}" target="_blank" rel="noopener noreferrer">
                                <div class="w-full h-52 rounded-2xl bg-cocoa flex flex-col items-center justify-center text-center p-4 mb-5 border border-caramel/30 hover:opacity-90 transition">
                                    <span class="font-heading text-xl text-cream tracking-tight">{{ $product->name }}</span>
                                    <span class="text-xs font-bold text-amber mt-1 tracking-wider uppercase">Crispy Brownies</span>
                                    <span class="mt-3 px-3 py-1 rounded-full bg-caramel/60 text-[11px] text-cream font-bold">10g Protein</span>
                                </div>
                            </a>
                        @endif

                        <h3 class="font-heading text-xl text-cocoa tracking-tight mb-2">
                            {{ $product->name }}
                        </h3>

                        {{-- Chip Nutrisi & Kalori --}}
                        <div class="flex flex-wrap items-center gap-2 mb-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-gorilla text-white">
                                10g Protein
                            </span>
                            @if(isset($product->calories) && $product->calories)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-caramel/30 text-cocoa">
                                    {{ $product->calories }} kcal
                                </span>
                            @endif
                        </div>

                        <div class="text-xl font-heading text-burnt mb-6">
                            Rp {{ number_format($priceVal, 0, ',', '.') }}
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
                    <h2 class="font-heading text-3xl sm:text-5xl text-cream tracking-tight mt-1">Good Bites, Around the Corner.</h2>
                    <p class="text-cream/80 text-sm sm:text-base max-w-lg mt-2">
                        Your favourite bites, closer than you think. Find TrueBite at selected gyms, padel clubs, and lifestyle spots around you.
                    </p>
                </div>
                {{-- TODO: Di routes/web.php rutenya adalah /location. --}}
                <div>
                    <a href="/location" class="hidden sm:inline-flex items-center gap-2 btn-pill-secondary px-6 py-2.5 text-sm">
                        Explore All Spots &rarr;
                    </a>
                </div>
            </div>

            @php
                $defaultLocations = [
                    (object)[
                        'name' => 'Verde Padel Club',
                        'type' => 'Padel Court',
                        'address' => 'Jl. Kemang Raya No. 12, Bangka, Mampang Prapatan, Jakarta Selatan',
                        'google_maps_link' => 'https://maps.google.com/?q=Verde+Padel+Club',
                    ],
                    (object)[
                        'name' => 'Powerhouse Fitness & Gym',
                        'type' => 'Gym & Fitness',
                        'address' => 'Jl. Senopati No. 45, Selong, Kebayoran Baru, Jakarta Selatan',
                        'google_maps_link' => 'https://maps.google.com/?q=Powerhouse+Gym',
                    ],
                    (object)[
                        'name' => 'The Movement Studio',
                        'type' => 'Pilates & Wellness',
                        'address' => 'Jl. Dharmawangsa VI No. 8, Pulo, Kebayoran Baru, Jakarta Selatan',
                        'google_maps_link' => 'https://maps.google.com/?q=The+Movement+Studio',
                    ],
                ];
                // Prioritaskan langsung dari database ($locations dari HomeController) jika ada data
                $displayLocations = (isset($locations) && count($locations) > 0) ? $locations : $defaultLocations;
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($displayLocations as $location)
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
                    Explore All Spots &rarr;
                </a>
            </div>
        </div>
    </section>



    {{-- SECTION 6: FAQ (Pertanyaan Umum) --}}
    @php
        $defaultFaqs = [
            (object)[
                'question' => 'What is TrueBite?',
                'answer' => 'TrueBite is a healthier snack brand that brings together delicious taste and the goodness of protein. We create bites for people who want to enjoy their everyday snacks while making more mindful choices.'
            ],
            (object)[
                'question' => 'What makes TrueBite different?',
                'answer' => 'We believe you shouldn\'t have to choose between enjoying your food and making a more mindful choice. TrueBite combines a satisfying taste, enjoyable texture, and protein in one delicious bite.'
            ],
            (object)[
                'question' => 'Who is TrueBite made for?',
                'answer' => 'TrueBite is made for anyone who loves good food and wants a snack that fits into their active, busy lifestyle but still healthier. Whether you\'re heading to the gym, working, studying, or simply taking a break, there\'s always room for a good bite.'
            ],
        ];
        // Prioritaskan langsung dari database tabel faqs jika ada data
        $displayFaqs = (isset($faqs) && count($faqs) > 0) ? $faqs : $defaultFaqs;
    @endphp
    <section class="py-12 sm:py-16 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-caramel">Frequently Asked Questions</span>
            <h2 class="font-heading text-3xl sm:text-4xl text-cocoa tracking-tight mt-1">Curious About True Bite?</h2>
            <p class="text-cocoa/80 text-sm sm:text-base max-w-xl mx-auto mt-2">
                We've got you covered. From what's inside every bite to where you can find us, here are a few things you might want to know.
            </p>
        </div>

        <div class="space-y-4">
            @foreach(collect($displayFaqs)->take(3) as $faq)
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
                See All Questions &rarr;
            </a>
        </div>
    </section>

    {{-- SECTION 7: CALL TO ACTION BANNER (Bento Banner) --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 sm:pb-20">
        <div class="bg-gorilla text-white rounded-3xl lg:rounded-4xl p-8 sm:p-12 lg:p-16 text-center space-y-6">
            <h2 class="font-heading text-3xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-tight max-w-2xl mx-auto">
                Your Next Favourite Bite Awaits.
            </h2>
            <p class="text-white/95 text-base sm:text-lg max-w-xl mx-auto font-normal">
                A little indulgence, a little more goodness. Make room for a snack that brings together irresistible taste and the goodness of protein.
            </p>
            <div class="pt-2">
                <a href="https://s.shopee.co.id/BV46KyWYa" target="_blank" rel="noopener noreferrer" class="btn-pill-primary px-8 py-4 text-base font-bold inline-flex items-center gap-2 shadow-none border-2 border-white/20">
                    <span>Get Your TrueBite</span>
                </a>
            </div>
        </div>
    </section>

@endsection