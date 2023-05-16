<footer>
    <!--footer TOP-->
    <div class="bg-footer">
        <div class="container">
            <div class="footer-top-left">
                <div class="my-footer-links-container">

                    @foreach($links as $singleLink)
                    <ul>
                        <li class="footer-title">{{$singleLink['title']}}</li>
                        @foreach($singleLink['linkSingoli'] as $link)
                        <li class="footer-link">{{$link}}</li>
                        @endforeach
                    </ul>
                    @endforeach
                </div>
                <span>tutti i diritti sono miei copyright etc</span>

            </div>
            <div class="footer-img-container">
                <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="bglogo">
            </div>
        </div>
    </div>
    <!--footer BOT-->
    <div class="contacts-bg">

        <div class="my-footer-container">
            <button> Sign up now! </button>
            <div class="contacts">
                <span>Follow Us</span>
                <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="logo">
                <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="logo">
                <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="logo">
                <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="logo">
                <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="logo">
                
                
            </div>
        </div>

    </div>

</footer>