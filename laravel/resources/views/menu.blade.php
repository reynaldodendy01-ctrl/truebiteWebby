<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Katalog - TrueBite</title>
</head>
<body>

    <header>
        <h1>TRUEBITE.</h1>
        <nav>
            <a href="/">Home</a>  
            <a href="/menu">Menu</a>
            <a href="/faqs">FAQ</a>
        </nav>
    </header>

    <hr>

    <main>
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
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} TrueBite Protein Snack.</p>
    </footer>

</body>
</html>