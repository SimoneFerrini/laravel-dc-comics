@extends('layouts/main-layout')

@section('content')
<main>
    <!--main top black-->
    <div class="main-bg-top">
        <div class="container">
            <span class="current-series">current series</span>
           
            <div class="main-cards-container">
                @foreach($comics as $singleComic)
                <a href="{{route('comics.show', $singleComic->id)}}">
                    <div class="my-card">
                        <div class="card-img-container">
                            <img src="{{$singleComic['thumb']}}" alt="comicImage">
                        </div>
                        <span>{{$singleComic['title']}}</span>
                    </div>
                </a>
                @endforeach
            </div>

            <div>
               <a href="{{route('comics.create')}}">
                   <button class="load-more-btn">load more</button>
                </a>
            </div>

        </div>
    </div>
    <!-- main bot dogerblue-->
    <div class="main-bg-bot">
        <div class="container">
            @foreach ($mainLinks as $mainlink)
                <div class="img-text-container">
                    <div class="main-bot-img-container">
                        <img src="{{Vite::asset($mainlink['img'])}}" alt="img">
                    </div>
                    <span>{{$mainlink['text']}}</span>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection