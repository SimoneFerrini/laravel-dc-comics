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

    <!-- Button trigger modal -->
    <div>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Elimina
        </button>
    </div>
        
  <!-- Modal -->
 

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">!!! LEGGI ATTENTAMENTE !!!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                Procedendo con l'eliminazione, si perderenno in modo definitivo tutti i dati relativi a questo elemento.<br>
                Sei sicuro di voler procedere?
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger" type="submit">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 
  
    
</div>
    
@endsection