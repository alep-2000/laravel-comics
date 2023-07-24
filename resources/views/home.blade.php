@extends('layouts.app')

@section('content')
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
@endsection
