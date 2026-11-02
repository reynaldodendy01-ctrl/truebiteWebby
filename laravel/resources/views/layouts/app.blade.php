<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TrueBite') - TrueBite Protein Snack</title>
    <meta name="description" content="TrueBite - Snack protein tanpa drama untuk komunitas gym dan padel. Bold, atletis, dan berenergi.">

    <!-- Google Fonts: Bricolage Grotesque (800) & DM Sans (400, 700) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,700;12..96,800&family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,700;1,9..40,400;1,9..40,700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gorilla: '#E8461E',
                        cocoa: '#2A0F07',
                        'burnt-orange': '#C73A12',
                        burnt: '#C73A12',
                        amber: '#FF8C3A',
                        cream: '#FBE8C8',
                        caramel: '#7A3B1F',
                    },
                    fontFamily: {
                        bricolage: ['"Bricolage Grotesque"', 'Arial Black', 'sans-serif'],
                        sans: ['"DM Sans"', 'sans-serif'],
                    },
                    borderRadius: {
                        '2xl': '1rem',
                        '3xl': '1.5rem',
                        '4xl': '2rem',
                        '5xl': '2.5rem',
                    }
                }
            }
        }
    </script>

    <style>
        /* Base typography & color rules from TrueBite Moodboard */
        body {
            font-family: 'DM Sans', sans-serif;
            background-color: #FBE8C8;
            color: #2A0F07;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4, .font-heading {
            font-family: 'Bricolage Grotesque', 'Arial Black', sans-serif;
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        /* Pill button utilities */
        .btn-pill-primary {
            background-color: #C73A12;
            color: #FFFFFF;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
            border-radius: 9999px;
            transition: transform 0.15s ease, opacity 0.15s ease;
        }
        .btn-pill-primary:hover {
            opacity: 0.92;
        }
        .btn-pill-primary:active {
            transform: scale(0.97);
        }

        .btn-pill-secondary {
            background-color: #FBE8C8;
            color: #2A0F07;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
            border-radius: 9999px;
            transition: transform 0.15s ease, background-color 0.15s ease;
        }
        .btn-pill-secondary:hover {
            background-color: #f7ddb2;
        }
        .btn-pill-secondary:active {
            transform: scale(0.97);
        }

        /* Bento cards styling: flat, rounded-3xl / rounded-4xl, no heavy shadows */
        .bento-card {
            border-radius: 1.5rem;
        }
        @media (min-width: 768px) {
            .bento-card {
                border-radius: 2rem;
            }
        }
    </style>
</head>
<body class="bg-cream text-cocoa min-h-screen flex flex-col selection:bg-gorilla selection:text-white">

    <!-- Header / Navbar -->
    <header class="sticky top-0 z-50 bg-cocoa text-cream border-b border-caramel/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Brand / Logo -->
                <a href="/" class="flex items-center gap-2 group">
                    <span class="font-heading text-2xl sm:text-3xl tracking-tight text-cream group-hover:text-amber transition">TrueBite</span>
                    <span class="w-2.5 h-2.5 rounded-full bg-gorilla inline-block"></span>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center space-x-1 lg:space-x-2 font-medium text-sm">
                    <a href="/" class="px-3.5 py-2 rounded-full transition {{ request()->is('/') ? 'text-amber font-bold bg-caramel/30' : 'text-cream/90 hover:text-amber hover:bg-caramel/20' }}">
                        Home
                    </a>
                    <a href="/menu" class="px-3.5 py-2 rounded-full transition {{ request()->is('menu*') ? 'text-amber font-bold bg-caramel/30' : 'text-cream/90 hover:text-amber hover:bg-caramel/20' }}">
                        Menu
                    </a>
                    {{-- TODO: Di routes/web.php rutenya adalah /location. Jika di masa mendatang disesuaikan menjadi /locations, sesuaikan link berikut. --}}
                    <a href="/location" class="px-3.5 py-2 rounded-full transition {{ (request()->is('location*') || request()->is('locations*')) ? 'text-amber font-bold bg-caramel/30' : 'text-cream/90 hover:text-amber hover:bg-caramel/20' }}">
                        Lokasi
                    </a>

                    <a href="/faqs" class="px-3.5 py-2 rounded-full transition {{ request()->is('faqs*') ? 'text-amber font-bold bg-caramel/30' : 'text-cream/90 hover:text-amber hover:bg-caramel/20' }}">
                        FAQ
                    </a>
                </nav>

                <!-- Action CTA (WhatsApp Order Link) -->
                <div class="hidden sm:flex items-center">
                    <a href="{{ config('services.truebite.whatsapp', '#') }}?text={{ urlencode('Halo TrueBite, saya mau tanya/pesan snack protein!') }}" target="_blank" rel="noopener noreferrer" class="btn-pill-primary px-5 py-2.5 text-sm inline-flex items-center gap-2">
                        <span>Pesan via WhatsApp</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center md:hidden">
                    <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="p-2 rounded-xl text-cream hover:text-amber hover:bg-caramel/30 focus:outline-none" aria-label="Buka menu navigasi">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-cocoa border-t border-caramel/40 px-4 pt-3 pb-6 space-y-2">
            <a href="/" class="block px-4 py-3 rounded-2xl text-base font-bold transition {{ request()->is('/') ? 'bg-gorilla text-white' : 'text-cream hover:bg-caramel/30' }}">
                Home
            </a>
            <a href="/menu" class="block px-4 py-3 rounded-2xl text-base font-bold transition {{ request()->is('menu*') ? 'bg-gorilla text-white' : 'text-cream hover:bg-caramel/30' }}">
                Menu
            </a>
            <a href="/location" class="block px-4 py-3 rounded-2xl text-base font-bold transition {{ (request()->is('location*') || request()->is('locations*')) ? 'bg-gorilla text-white' : 'text-cream hover:bg-caramel/30' }}">
                Lokasi
            </a>

            <a href="/faqs" class="block px-4 py-3 rounded-2xl text-base font-bold transition {{ request()->is('faqs*') ? 'bg-gorilla text-white' : 'text-cream hover:bg-caramel/30' }}">
                FAQ
            </a>
            <div class="pt-2">
                <a href="{{ config('services.truebite.whatsapp', '#') }}?text={{ urlencode('Halo TrueBite, saya mau tanya/pesan snack protein!') }}" target="_blank" rel="noopener noreferrer" class="w-full text-center block btn-pill-primary py-3 text-sm">
                    Pesan via WhatsApp
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-cocoa text-cream border-t border-caramel/40 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <!-- Brand Column -->
                <div class="md:col-span-6 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="font-heading text-3xl tracking-tight text-cream">TrueBite</span>
                        <span class="w-2.5 h-2.5 rounded-full bg-gorilla inline-block"></span>
                    </div>
                    <p class="text-cream/80 text-sm max-w-sm leading-relaxed">
                        Snack protein tanpa drama untuk komunitas gym dan padel. Dibuat dengan formula atletis, bahan berkualitas, dan rasa yang bikin lanjut main.
                    </p>
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-caramel/40 text-xs font-bold text-amber">
                        <span>⚡ Energi oranye, fondasi coklat</span>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="md:col-span-3 space-y-3">
                    <h4 class="font-heading text-lg text-cream tracking-wide">Navigasi</h4>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a href="/" class="text-cream/80 hover:text-amber transition">Home</a>
                        </li>
                        <li>
                            <a href="/menu" class="text-cream/80 hover:text-amber transition">Menu Katalog</a>
                        </li>
                        <li>
                            <a href="/location" class="text-cream/80 hover:text-amber transition">Titik Lokasi</a>
                        </li>

                        <li>
                            <a href="/faqs" class="text-cream/80 hover:text-amber transition">Pertanyaan Umum (FAQ)</a>
                        </li>
                    </ul>
                </div>

                <!-- Order / Community -->
                <div class="md:col-span-3 space-y-3">
                    <h4 class="font-heading text-lg text-cream tracking-wide">Pemesanan</h4>
                    <p class="text-cream/80 text-sm">
                        Siap upgrade nutrisi harian kamu? Hubungi tim kami via WhatsApp untuk order langsung.
                    </p>
                    <div>
                        <a href="{{ config('services.truebite.whatsapp', '#') }}?text={{ urlencode('Halo TrueBite, saya mau pesan snack protein!') }}" target="_blank" rel="noopener noreferrer" class="inline-flex btn-pill-primary px-5 py-2.5 text-xs font-bold">
                            Hubungi WhatsApp
                        </a>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright Bar -->
            <div class="mt-12 pt-8 border-t border-caramel/30 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-cream/70">
                <p>&copy; {{ date('Y') }} TrueBite Protein Snack.</p>
                <p class="text-cream/50">Bold &middot; Atletis &middot; Hangat &middot; Flat &amp; Rounded</p>
            </div>
        </div>
    </footer>

</body>
</html>