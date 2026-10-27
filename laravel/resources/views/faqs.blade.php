<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Katalog - TrueBite</title>
</head>
<body>

    @extends('layouts.app')
    @section('title', 'FAQ')

    @section('content')
        <h2>faqqqq</h2>

        @foreach($faqs as $faq)
            <article>
                <h3>{{ $faq->question }}</h3>
                <p>{{ $faq->answer }}</p>
            </article>
            <hr>
        @endforeach
    @endsection

</body>
</html>