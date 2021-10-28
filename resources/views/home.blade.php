@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <div class="container-front">
        @foreach ($movies as $movie)
            <div class="container-movie">
                <div class="title">Title:</div>
                <span>{{ $movie['title'] }}</span>
                <div class="title">Original Title:</div> 
                <span>{{ $movie['original_title'] }}</span>
                <div class="title">Country:</div>
                <span>{{ $movie['nationality'] }}</span>
                <div class="title">Data:</div>
                <span>{{ $movie['date'] }}</span>
                <div class="title">Review:</div>
                <span>{{ $movie['vote'] }}</span>
            </div>
        @endforeach
    </div>
@endsection