<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Katalog - TrueBite</title>
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Menu Katalog')
    @section('content')
        <h2>Katalog Snack Protein</h2>

        @foreach($products as $product)
            <article>
                <h3>{{ $product->name }}</h3>
                <p><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <p><strong>Nutrisi:</strong> {{ $product->protein_grams }}g Protein | {{ $product->calories }} kcal</p>
                <p>{{ $product->description }}</p>
                <a href="/menu/{{ $product->slug }}">Lihat Detail</a>
            </article>
            <hr>
        @endforeach
    @endsection

</body>
</html>