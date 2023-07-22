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
    <footer>
    <div class="group">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled d-flex justify-content-center align-items-center">
                        <li>
                            <div>
                                <img src="{{ vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="Digital-Comics">
                                <span>DIGITAL COMICS</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="{{ vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="Dc-Merchandise">
                                <span>DC MERCHANDISE</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="{{ vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="Subscription">
                                <span>SUBSCRIPTION</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img id="locator" src="{{ vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="Shop-Locator">
                                <span>COMIC SHOP LOCATOR</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="{{ vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="Power-Visa">
                                <span>DC POWER VISA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>