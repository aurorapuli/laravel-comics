@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <main>

        <div class="row-comics container py-5">

            @foreach ($comics as $comic)
                <div class="card-comics">
                    <div class="img">
                        <img src="{{ $comic['thumb'] }}">
                    </div>

                    <p>{{ $comic['title'] }}</p>

                </div>
            @endforeach

        </div>


    </main>
@endsection
