@extends('layouts.app')

@section('content')
    <section class="bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="current">
                        <img src=" {{ $comic['thumb'] }} " alt="">
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection