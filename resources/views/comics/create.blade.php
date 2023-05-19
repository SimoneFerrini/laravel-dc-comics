@extends('layouts/main-layout')
@section('content')
    
<main>

    <div class="container create-section">
    


        <form action="{{route('comics.store')}}" method="POST">
          @csrf
    
          <div class="mb-3">
            <label class="my-label" for="title">Titolo</label>
            <input class="@error('title') is-invalid @enderror" type="text" id="title" name="title" required value="{{old('title')}}">
            @error('title')
              <div class="invalid-feedback">
                Il titolo non è stato inserito correttamente - {{$message}}
              </div>
            @enderror

          </div>
    
          <div class="mb-3">
            <label class="my-label" for="description">Descrizione</label>
            <textarea class="@error('description') is-invalid @enderror" id="description" name="description" required>{{old('description')}}</textarea>
            @error('description')
              <div class="invalid-feedback">
                La descrizione non è stata inserita correttamente - {{$message}}
              </div>
            @enderror
          </div>
    
          <div class="mb-3">
            <label class="my-label" for="thumb">Thumb</label>
            <input class="@error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" required value="{{old('thumb')}}">
            @error('thumb')
              <div class="invalid-feedback">
                Il percorso dell'immagine non è stato inserito correttamente - {{$message}}
              </div>
            @enderror
          </div>
    
          <div class="mb-3">
            <label class="my-label" for="price">Prezzo:</label>
            <input class="@error('price') is-invalid @enderror" type="text" id="price" name="price" required value="{{old('price')}}">
            @error('price')
              <div class="invalid-feedback">
                Il prezzo non è stato inserito correttamente - {{$message}}
              </div>
            @enderror
          </div>
    
          <div class="mb-3">
            <label class="my-label" for="series">Serie</label>
            <input class="@error('series') is-invalid @enderror" type="text" id="series" name="series" required value="{{old('series')}}">
            @error('series')
              <div class="invalid-feedback">
                La serie non è stata inserita correttamente - {{$message}}
              </div>
            @enderror
          </div>
    
          <div class="mb-3">
            <label class="my-label" for="sale_date">Data uscita</label>
            <input class="@error('sale_date') is-invalid @enderror" type="text" id="sale_date" name="sale_date" required value="{{old('sale_date')}}">
            @error('sale_date')
              <div class="invalid-feedback">
                La data non è stata inserita correttamente - {{$message}}
              </div>
            @enderror
          </div>
    
          <div class="mb-3">
              <label class="my-label" for="type">Genere</label>
              <input class="@error('type') is-invalid @enderror" type="text" id="type" name="type" required value="{{old('type')}}">
              @error('type')
              <div class="invalid-feedback">
                Il tipo non è stato inserito correttamente - {{$message}}
              </div>
            @enderror
            </div>
    
          <button class="btn btn-primary my-btn" type="submit">Add</button>
        </form>
    
      </main>
    </div>
    
    
    @endsection