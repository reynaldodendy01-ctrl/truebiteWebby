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
        <h2>faqqqq</h2>

        @foreach($faqs as $faq)
            <article>
                <h3>{{ $faq->question }}</h3>
                <p>{{ $faq->answer }}</p>
            </article>
            <hr>
        @endforeach
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} TrueBite Protein Snack.</p>
    </footer>

    </footer>

</body>
</html>