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
        <button class="btn btn-primary">Aggiorna</button>
    </a>

    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
        @csrf
        @method('DELETE');
            <button class="btn btn-danger" type="submit">Elimina</button>
    </form>
</div>
    
@endsection