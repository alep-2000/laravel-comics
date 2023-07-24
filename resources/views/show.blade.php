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
                            <div class="g-col-3 mx-5"> <span class="color">U.S Price:</span> <span class="text-light"> {{ $comic['price'] }}</span></div>
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
        <section></section>
    </section>
@endsection