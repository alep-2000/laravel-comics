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
        </div>
        <section class="dc-back">
            <div class="container">
                <div class="row">
                    <div class="col-12 pos-rel">
                        <div class="d-flex flex-start">
                            <div class="d-flex mt-3">
                                <div>
                                    <ul class="list-unstyled text-secondary">
                                        <li class="text-light mb-3"><strong>DC COMICS</strong></li>
                                        <li>Characters</li>
                                        <li>Comics</li>
                                        <li>Movies</li>
                                        <li>TV</li>
                                        <li>Games</li>
                                        <li>Videos</li>
                                        <li>News</li>
                                    </ul>
                                    <ul class="mt-3 list-unstyled text-secondary">
                                        <li class="my-3 text-light"><strong>SHOP</strong></li>
                                        <li>Shop DC</li>
                                        <li>Shop DC Collectibles</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-unstyled text-secondary mx-5">
                                        <li class="text-light mb-3"><strong>DC</strong></li>
                                        <li>Terms of Use</li>
                                        <li>Privacy Policy(New)</li>
                                        <li>Ad Choices</li>
                                        <li>Advertising</li>
                                        <li>Jobs</li>
                                        <li>Subscriptions</li>
                                        <li>Talent Workshops</li>
                                        <li>CPSC Certificates</li>
                                        <li>Ratings</li>
                                        <li>Shop Help</li>
                                        <li>Contact Us</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-unstyled text-secondary">
                                        <li class="text-light mb-3"><strong>SITES</strong></li>
                                        <li>DC</li>
                                        <li>MAD Magazine</li>
                                        <li>DC Kids</li>
                                        <li>DC Universe</li>
                                        <li>DC Power Visa</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <p class="text-secondary">All Site Content TM © 2020 DC Entertaiment, unless otherwise <span class="text-primary">noted here</span>. All rights reserved. <br> <span class="text-primary">Cookies Settings</span></p>
                                </div>
                            </div>
                        </div>
                            <div class="d-flex flex-end bg-comics">
                                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo-BG">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>