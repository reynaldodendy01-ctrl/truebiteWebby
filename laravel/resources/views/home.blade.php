<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi - TrueBite</title>
</head>

<body>

    @extends('layouts.app')

    @section('title', 'Home')

    @section('content')
        <section>
            <h2>Protein Snack yang Beneran Enak</h2>
            <p>Camilan tinggi protein untuk kamu yang aktif di gym dan padel court.</p>
            <a href="/menu"><button type="button">Lihat Menu</button></a>
        </section>

        <section>
            <h2>Varian Favorit</h2>
            @foreach($products as $product)
                <article>
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->protein_grams }}g Protein | {{ $product->calories }} kcal</p>
                    <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    <a href="/menu/{{ $product->slug }}">Lihat Detail</a>
                </article>
            @endforeach
        </section>

        <section>
            <h2>Where to Find Us</h2>
            @foreach($locations as $location)
                <article>
                    <h3>{{ $location->name }}</h3>
                    <p>{{ $location->type }} - {{ $location->address }}</p>
                </article>
            @endforeach
            <a href="/locations">Lihat semua lokasi</a>
        </section>
        <section>
            <h2>Testimoni</h2>
            @foreach($testimonials as $testimonial)
                <article>
                    <p>"{{ $testimonial->review }}"</p>
                    <p><strong>{{ $testimonial->customer_name }}</strong> - {{ $testimonial->role_or_club }}</p>
                </article>
            @endforeach
        </section>
        <section>
            <h2>FAQ</h2>
            @foreach($faqs as $faq)
                <article>
                    <h3>{{ $faq->question }}</h3>
                    <p>{{ $faq->answer }}</p>
                </article>
            @endforeach
        </section>
    @endsection

</body>

</html>