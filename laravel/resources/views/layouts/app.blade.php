<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TrueBite') - TrueBite</title>
</head>
<body>

<header>
    <h1>TRUEBITE.</h1>
    <nav>
        <a href="/">Home</a>
        <a href="/menu">Menu</a>
        <a href="/faqs">FAQ</a>
        <a href="/location">Lokasi</a>
    </nav>
</header>


<main>
    @yield('content')
</main>


<footer>
    <p>&copy; {{date('Y')}} TrueBite Protein Snack.</p>
</footer>

</body>
</html>