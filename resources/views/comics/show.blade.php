@extends('layouts/main-layout')

@section('content')

<div class="container-show">
    <h1>{{$comic->title}}</h1>
    <div class="img-container-big">
        <img src="{{$comic->thumb}}" alt="img">
    </div>
    <p>{{$comic->description}}</p>
    <div class="my-d-flex">
        <span>{{$comic->sale_date}}</span>
        <span>{{$comic->price}}</span>
    </div>
    <a href="{{route('comics.edit', $comic->id)}}">
        <button>Aggiorna</button>
    </a>
</div>
    
@endsection