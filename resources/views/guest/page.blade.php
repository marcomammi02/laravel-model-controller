<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <ul>
            @foreach ($movies as $movie)
            <li>
                <div class="card">
                    <h1>{{ $movie->title }}</h1>
                    <p>Original title: {{ $movie->original_title }}</p>
                    <p>Nationality: {{ ucfirst($movie->nationality) }}</p>
                    <p>Date: {{ $movie->date }}</p>
                    <p>Vote: {{ $movie->vote }}</p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
