<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi - TrueBite</title>
</head>
<body>

    @extends('layouts.app')

    @section('title', 'Lokasi')

    @section('content')
        <h2>Where to Find Us</h2>

        @foreach($locations as $location)
            <article>
                <h3>{{ $location->name }}</h3>
                <p><strong>Tipe:</strong> {{ $location->type }}</p>
                <p>{{ $location->address }}</p>
                @if($location->google_maps_link)
                    <a href="{{ $location->google_maps_link }}" target="_blank">Lihat di Google Maps</a>
                @endif
            </article>
        @endforeach
    @endsection

</body>
</html>