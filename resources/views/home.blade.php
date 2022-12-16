@extends('layouts.app')

@section('content')
    <section>
        <h2>Home</h2>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <img src="{{ $movie->image }}" alt="">
                    <h3>{{ $movie->title }}</h3>
                </li>
            @endforeach
        </ul>
    </section>
@endsection