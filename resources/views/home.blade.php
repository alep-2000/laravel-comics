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
    <header> 
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-end text-light">
                    <div class="px-5">
                        DC POWER™ VISA®
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle p-0 text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ADDITIONAL DC SITES
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-between">
                    <div class="my-2">
                        <div class="logo">
                            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <ul class="list-unstyled d-flex my-3">
                            <li>CHARACTERS</li>
                            <li>COMICS</li>
                            <li>MOVIES</li>
                            <li>TV</li>
                            <li>GAMES</li>
                            <li>COLLECTIBLES</li>
                            <li>VIDEOS</li>
                            <li>FANS</li>
                            <li class="align-middle">NEWS</li>
                            <li class="align-middle">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle p-0 text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        SHOP
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="my-3">
                            <p class="border-bottom border-primary"> <span class="size ms-5">Search</span>
                                <span><i class="fa-solid fa-magnifying-glass size"></i></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
       
    </main>

</body>

</html>