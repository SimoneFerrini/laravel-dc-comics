@extends('layouts/main-layout')

@section('content')
<main>
    <!--main top black-->
    <div class="main-bg-top">
        <div class="container">
            <span class="current-series">current series</span>
           
            <div class="main-cards-container">
                @foreach($comics as $singleComic)
                <div class="my-card">
                    <div class="card-img-container">
                        <img src="{{$singleComic['thumb']}}" alt="comicImage">
                    </div>
                    <span>{{$singleComic['title']}}</span>
                </div>
                @endforeach
            </div>

            <div>
                <button class="load-more-btn">load more</button>
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