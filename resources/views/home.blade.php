@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="container-lg h-100 pt-5">
        <div class="row h-100 g-2 ">
            @foreach ($movies as $movie)
                @include('includes.movie_card', ['movie' => $movie])
            @endforeach
        </div>
    </div>
@endsection