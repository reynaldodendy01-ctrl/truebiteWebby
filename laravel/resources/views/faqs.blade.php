@extends('layouts.app')

@section('title', 'FAQ')

@section('content')

    {{-- HEADER / TITLE SECTION --}}
    <section class="py-12 sm:py-16 lg:py-20 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-caramel/25 text-cocoa text-xs font-bold tracking-wide mb-4">
                <span>❓ Pusat Bantuan TrueBite</span>
            </div>
            <h1 class="font-heading text-4xl sm:text-6xl text-cocoa tracking-tight leading-tight">
                Pertanyaan Umum
            </h1>
            <p class="text-cocoa/85 text-base sm:text-lg mt-4 leading-relaxed font-normal">
                Jawaban seputar nutrisi, bahan baku, ketersediaan di venue olahraga, hingga cara pemesanan snack protein TrueBite.
            </p>
        </div>

        {{-- FAQ LIST (Bento Cards di atas Latar Krem) --}}
        <div class="mt-12 space-y-5">
            @forelse($faqs as $faq)
                <article class="bg-[#F8E2BE] border-2 border-caramel/30 rounded-2xl sm:rounded-3xl p-6 sm:p-8 hover:border-burnt/50 transition">
                    <h2 class="font-heading text-xl sm:text-2xl text-cocoa tracking-tight mb-3 flex items-start gap-3">
                        <span class="text-gorilla font-extrabold text-2xl leading-none select-none">Q.</span>
                        <span>{{ $faq->question }}</span>
                    </h2>
                    <div class="pl-0 sm:pl-8 text-cocoa/85 text-base leading-relaxed font-normal">
                        <p>{{ $faq->answer }}</p>
                    </div>
                </article>
            @empty
                <div class="bg-[#F8E2BE] border-2 border-caramel/30 rounded-3xl p-12 text-center">
                    <h3 class="font-heading text-2xl text-cocoa">Belum ada pertanyaan</h3>
                    <p class="text-cocoa/80 text-sm mt-2">Daftar FAQ akan segera diperbarui.</p>
                </div>
            @endforelse
        </div>
    </section>

    {{-- WHATSAPP ASSISTANCE BANNER --}}
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 sm:pb-20">
        <div class="bg-cocoa text-cream rounded-3xl lg:rounded-4xl p-8 sm:p-12 border-2 border-caramel/40 flex flex-col md:flex-row md:items-center justify-between gap-6 text-left">
            <div class="space-y-2">
                <span class="text-amber text-xs font-bold uppercase tracking-widest">Bantuan Langsung</span>
                <h3 class="font-heading text-2xl sm:text-3xl text-cream tracking-tight">
                    Punya pertanyaan yang belum terjawab?
                </h3>
                <p class="text-cream/80 text-sm max-w-lg">
                    Hubungi tim kami via WhatsApp. Kami siap membantu konsultasi asupan protein dan informasi produk.
                </p>
            </div>
            <div>
                <a href="{{ config('services.truebite.whatsapp', '#') }}?text={{ urlencode('Halo TrueBite, saya mau tanya seputar produk snack protein!') }}" target="_blank" rel="noopener noreferrer" class="btn-pill-primary px-8 py-4 text-sm font-bold inline-flex items-center whitespace-nowrap">
                    Tanya via WhatsApp
                </a>
            </div>
        </div>
    </section>

@endsection