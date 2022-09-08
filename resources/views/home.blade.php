@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <ul>
        @foreach ($movies as $movie)
            <li>
                {{ $movie->title }}
            </li>
        @endforeach
    </ul>
@endsection