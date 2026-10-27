{{-- resources/views/partials/footer.blade.php --}}

@once
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endonce

@php
    $topFeatures = [
        ['icon' => 'fa-store', 'title' => 'Find a Store', 'subtitle' => 'Store Location'],
        ['icon' => 'fa-hourglass-half', 'title' => 'Time', 'subtitle' => 'Between 12 pm - 12 am'],
        ['icon' => 'fa-truck', 'title' => 'Free Delivery', 'subtitle' => 'Take your order free'],
        ['icon' => 'fa-phone', 'title' => 'Store Number', 'subtitle' => '+ 385 154 -1736'],
    ];

    $quickLinks = ['Long long ...', 'Sale', 'Shop', 'Blog'];
    $helpLinks = ['Size Guide', 'Order Status', 'Shipping', 'FAQ'];
    $companyLinks = ['Press And Media', 'Contact Us', 'Careers'];
    $aboutLinks = ['Our Story', 'Meet the Team', 'Our Values'];

    $bottomLinks = [
        'Google Ad Price Policy', 'Privacy Policy', 'Terms & Conditions', 
        'Coupon Policy', 'Accessibility', 'Tax', 'Site Map'
    ];
@endphp

<style>
    .bg-custom-green {
        background-color: #22b14c !important;
    }
    .dashed-ring {
        position: absolute;
        top: -20px;
        right: -20px;
        width: 300px;
        height: 300px;
        border: 4px dashed rgba(255, 255, 255, 0.7);
        border-radius: 50%;
        pointer-events: none;
    }
</style>

<footer class="bg-custom-green text-white relative overflow-hidden font-sans w-full">
    <!-- Garis Dekorasi Melengkung -->
    <div class="dashed-ring hidden lg:block"></div>

    <div class="max-w-7xl mx-auto px-6 py-8 relative z-10">
        
        <!-- Top Info Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 pb-6 border-b border-white/20 text-sm">
            @foreach ($topFeatures as $feature)
                <div class="flex items-center space-x-3">
                    <i class="fas {{ $feature['icon'] }} text-xl min-w-[24px] text-center"></i>
                    <div>
                        <h4 class="font-bold leading-tight">{{ $feature['title'] }}</h4>
                        <p class="text-xs text-green-100 opacity-90">{{ $feature['subtitle'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 py-10 items-center">
            
            <!-- Brand & Social -->
            <div class="lg:col-span-4 space-y-4">
                <h2 class="text-4xl font-extrabold tracking-wider">LOQO</h2>
                <p class="text-xs text-green-100 max-w-xs leading-relaxed">
                    We are a German restaurant serving authentic Germany snacks.
                </p>
                <div>
                    <h5 class="text-xs font-bold mb-2">Follow Us</h5>
                    <div class="flex space-x-3 text-lg">
                        <a href="#" class="hover:opacity-80"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:opacity-80"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:opacity-80"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="lg:col-span-5 grid grid-cols-2 sm:grid-cols-4 gap-4 text-xs">
                <div>
                    <h4 class="font-bold mb-3 text-sm">Quick Link</h4>
                    <ul class="space-y-2 opacity-90">
                        @foreach ($quickLinks as $link)
                            <li><a href="#" class="hover:underline">{{ $link }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-3 text-sm">Help</h4>
                    <ul class="space-y-2 opacity-90">
                        @foreach ($helpLinks as $link)
                            <li><a href="#" class="hover:underline">{{ $link }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-3 text-sm">Company</h4>
                    <ul class="space-y-2 opacity-90">
                        @foreach ($companyLinks as $link)
                            <li><a href="#" class="hover:underline">{{ $link }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-3 text-sm">About Us</h4>
                    <ul class="space-y-2 opacity-90">
                        @foreach ($aboutLinks as $link)
                            <li><a href="#" class="hover:underline">{{ $link }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Image Container -->
            <div class="lg:col-span-3 flex justify-center lg:justify-end">
                <div class="w-44 h-44 rounded-full overflow-hidden border-4 border-white shadow-md">
                    <img 
                        src="https://images.unsplash.com/photo-1566478989037-eec170784d0b?auto=format&fit=crop&w=400&q=80" 
                        alt="German Snacks" 
                        class="w-full h-full object-cover"
                    >
                </div>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="pt-6 border-t border-white/20 text-center text-xs space-y-3 opacity-90">
            <p>&copy; {{ date('Y') }} Green Minnow Kitchen. All Right Resolved</p>
            <div class="flex flex-wrap justify-center gap-4 text-[11px]">
                @foreach ($bottomLinks as $link)
                    <a href="#" class="hover:underline">{{ $link }}</a>
                @endforeach
            </div>
        </div>

    </div>
</footer>