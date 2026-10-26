<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - TrueBite</title>
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
        <p><a href="/menu">&larr; Kembali ke Katalog Menu</a></p>

        <article>
            <h2>{{ $product->name }}</h2>
            <p><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>

            <section>
                <h3>Deskripsi Produk</h3>
                <p>{{ $product->description }}</p>
            </section>

            <section>
                <h3>Informasi Nutrisi (Nutrition Facts)</h3>
                <ul>
                    <li><strong>Protein:</strong> {{ $product->protein_grams }} Gram</li>
                    <li><strong>Kalori:</strong> {{ $product->calories }} Kcal</li>
                </ul>
            </section>

            <br>
            
            <!-- Link Beli Langsung via WhatsApp dari Config -->
            <a href="{{ config('services.truebite.whatsapp', '#') }}?text=Halo%20TrueBite,%20saya%20mau%20pesan%20{{ urlencode($product->name) }}" target="_blank">
                <button type="button">Pesan via WhatsApp</button>
            </a>
        </article>
    </main>

    <hr>

    <footer>
        <p>&copy; {{ date('Y') }} TrueBite Protein Snack.</p>
    </footer>

</body>
</html>