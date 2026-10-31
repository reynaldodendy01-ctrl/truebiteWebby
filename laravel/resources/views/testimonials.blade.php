<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi - TrueBite</title>
</head>

<body>

    @extends('layouts.app')

    @section('title', 'Testimoni')

    @section('content')
        <h2>Kata Mereka</h2>

        @foreach($testimonials as $testimonial)
            <article>
                <p>"{{ $testimonial->review }}"</p>
                <p><strong>{{ $testimonial->customer_name }}</strong>
                    @if($testimonial->role_or_club) - {{ $testimonial->role_or_club }} @endif
                </p>
                <p>Rating: {{ $testimonial->rating }}/5</p>
            </article>
        @endforeach
    @endsection

</body>

</html>