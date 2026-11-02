<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TrueBite') - TrueBite Protein Snack</title>
    <meta name="description" content="TrueBite - A more mindful choice. Snack berprotein tinggi yang memadukan kelezatan rasa dan nutrisi untuk hari-hari aktifmu.">

    <!-- Google Fonts: Poppins (700, 800), Montserrat (500, 600, 700), Roboto (400, 500) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;1,600&family=Poppins:ital,wght@0,600;0,700;0,800;1,700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gorilla: '#DE5A17',
                        primary: '#DE5A17',
                        cocoa: '#4C1D10',
                        'burnt-orange': '#DE5A17',
                        burnt: '#DE5A17',
                        amber: '#FE9E32',
                        cyan: '#01CAFF',
                        red: '#E02E2E',
                        cream: '#FBE8C8',
                        caramel: '#7A3B1F',
                    },
                    fontFamily: {
                        poppins: ['"Poppins"', 'sans-serif'],
                        montserrat: ['"Montserrat"', 'sans-serif'],
                        roboto: ['"Roboto"', 'sans-serif'],
                        heading: ['"Poppins"', 'sans-serif'],
                        subheading: ['"Montserrat"', 'sans-serif'],
                        sans: ['"Roboto"', 'sans-serif'],
                        bricolage: ['"Poppins"', 'sans-serif'],
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
        /* Base typography & color rules from TrueBite Brand Guidelines */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #FBE8C8;
            color: #4C1D10;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4, .font-heading {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            letter-spacing: -0.025em;
        }

        .font-subheading {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }

        /* Pill button utilities */
        .btn-pill-primary {
            background-color: #DE5A17;
            color: #FFFFFF;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
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
            color: #4C1D10;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
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
                        The Bites
                    </a>
                    {{-- TODO: Di routes/web.php rutenya adalah /location. Jika di masa mendatang disesuaikan menjadi /locations, sesuaikan link berikut. --}}
                    <a href="/location" class="px-3.5 py-2 rounded-full transition {{ (request()->is('location*') || request()->is('locations*')) ? 'text-amber font-bold bg-caramel/30' : 'text-cream/90 hover:text-amber hover:bg-caramel/20' }}">
                        Lokasi
                    </a>

                    <a href="/faqs" class="px-3.5 py-2 rounded-full transition {{ request()->is('faqs*') ? 'text-amber font-bold bg-caramel/30' : 'text-cream/90 hover:text-amber hover:bg-caramel/20' }}">
                        FAQ
                    </a>
                </nav>

                <!-- Action CTA (WhatsApp Contact Us Link) -->
                <div class="hidden sm:flex items-center">
                    <a href="{{ config('services.truebite.whatsapp', '#') }}?text={{ urlencode('Halo TrueBite, saya mau tanya/pesan snack protein!') }}" target="_blank" rel="noopener noreferrer" class="btn-pill-primary px-5 py-2.5 text-sm inline-flex items-center gap-2">
                        <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                        </svg>
                        <span>Contact Us</span>
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
                The Bites
            </a>
            <a href="/location" class="block px-4 py-3 rounded-2xl text-base font-bold transition {{ (request()->is('location*') || request()->is('locations*')) ? 'bg-gorilla text-white' : 'text-cream hover:bg-caramel/30' }}">
                Lokasi
            </a>

            <a href="/faqs" class="block px-4 py-3 rounded-2xl text-base font-bold transition {{ request()->is('faqs*') ? 'bg-gorilla text-white' : 'text-cream hover:bg-caramel/30' }}">
                FAQ
            </a>
            <div class="pt-2">
                <a href="{{ config('services.truebite.whatsapp', '#') }}?text={{ urlencode('Halo TrueBite, saya mau tanya/pesan snack protein!') }}" target="_blank" rel="noopener noreferrer" class="w-full text-center inline-flex items-center justify-center gap-2 btn-pill-primary py-3 text-sm">
                    <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                    <span>Contact Us</span>
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
                        <em>A more mindful choice</em> that brings together the pleasure of a delicious snack and the goodness of protein. Made for movement and your active, everyday moments.
                    </p>
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-caramel/40 text-xs font-semibold text-amber">
                        <span>A more mindful choice</span>
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
                            <a href="/menu" class="text-cream/80 hover:text-amber transition">The Bites</a>
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
                    <h4 class="font-heading text-lg text-cream tracking-wide">Kontak Kami</h4>
                    <p class="text-cream/80 text-sm">
                        Siap melengkapi kebutuhan nutrisi harianmu? Hubungi kami untuk info produk dan pemesanan langsung.
                    </p>
                    <div>
                        <a href="{{ config('services.truebite.whatsapp', '#') }}?text={{ urlencode('Halo TrueBite, saya mau pesan snack protein!') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 btn-pill-primary px-5 py-2.5 text-xs font-bold">
                            <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                            </svg>
                            <span>Contact Us</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright Bar -->
            <div class="mt-12 pt-8 border-t border-caramel/30 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-cream/70">
                <p>&copy; {{ date('Y') }} TrueBite Protein Snack.</p>
                <p class="text-cream/50">Fun &middot; Premium &middot; Active &middot; Mindful</p>
            </div>
        </div>
    </footer>

</body>
</html>