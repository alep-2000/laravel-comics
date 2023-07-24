@extends('layouts.app')

@section('content')
<div class="jumbotron">
</div>
<section class="bg-primary py-4 pos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="current">
                    <img class="pb-3" src=" {{ $comic['thumb'] }} " alt="">
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container">
            <div class="row ma-left">
                <div class="col-6 space">
                    <h1 class="bold text-uppercase">{{ $comic['title'] }}</h1>
                    <div class="d-flex">
                        <div class="grid text-center d-flex justify-content-between back-green border border-black pe-5 py-2">
                            <div class="g-col-3 mx-4"> <span class="color">U.S Price:</span> <span class="text-light"> {{ $comic['price'] }}</span></div>
                            <div class="g-col-3 color ms-5">AVAILABLE</div>
                        </div>
                        <div class="g-col-3 back-green border border-black py-2 px-5">
                            <div class="dropdown">
                                <button class="btn p-0 dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Check Availability
                                </button>
                            </div>
                        </div>
                    </div>
                    <p class="mt-4">{{ $comic['description'] }}</p>
                </div>
                <div class="col-6 space">
                    <p class="center"><strong>ADVERTISEMENT</strong></p>
                    <img src="{{ Vite::asset('resources/img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <section class="back-grey pb-5 border-top">
            <div class="container">
                <div class="row ma-left mb5">
                    <div class="col-6 mb-5">
                        <h4 class="bold bor-bot py-3">Talent</h4>
                        <div class="bor-bot pb-3">
                            Art by:
                        </div>
                        <div class="bor-bot py-3">
                            Written by
                        </div>
                    </div>
                    <div class="col-6">
                        <h4 class="bold bor-bot py-3">Specs</h4>
                        <div class="bor-bot pb-1 me-5">
                            Series: <span class="mx-5 text-uppercase text-primary"> {{ $comic['series'] }} </span>
                        </div>
                        <div class="bor-bot py-1 d-flex">
                            U.S Price: 
                            <span class="mx-5">
                                 {{ $comic['price'] }} 
                            </span>
                        </div>
                        <div class="bor-bot py-1">
                            On Sale Date: <span class="mx-3"> {{ $comic['sale_date'] }} </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection