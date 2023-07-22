<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel DC Comics</title>
    
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <div class="jumbotron">
        <div>
            <strong>CURRENT SERIES</strong>
        </div>
    </div>
    <main class="bg-dark">
       <div class="container">
            <div class="row">
                @foreach($comics as $comic)
                <div class="col-2 mt-5">
                    <div class="card border-0">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['thumb'] }}">
                    </div>
                    <div class="card-body">
                        <p class="text-light text-uppercase">{{ $comic['series'] }}</p>
                    </div>
                </div>
                @endforeach
                <div class="justify">
                    <button class="button"><strong>LOAD MORE</strong></button>
                </div>
            </div>
       </div>
    </main>

</body>

</html>