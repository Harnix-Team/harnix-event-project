@extends("layouts.base")

@section('style')
    <link rel="stylesheet" href="{{asset('css/accueil.css')}}">
@endsection

@section('title')
    Evénements
@endsection
@section('Content')

   <!-- Event -->
    <div class="event">
        <img class="oneConf" src="{{asset('img/content/Confettiblue.svg')}}" alt="">
        <span class="new">Nouveau</span>
        <p class="txt1">Le meilleur du moment !</p>
        <p class="txt2">Découvrez les événements les plus attendus et les plus de cette période ! Soyez prêt !</p>
        <div class="events">
            <div class="cardEvent">
                <img src="{{asset('img/content/party4.jpeg')}}" alt="">
                <div class="infos">
                    <h3> MOUSE THE MOOD </h3>
                    <p class="day"> Samedi 24 Juin à 22 heures </p>
                    <p class="place"> CLUB DES ROIS, COTONOU </p>
                    <a href="#">En savoir plus ... 
                        <i id="nextBtn" class="btndirections fa fa-chevron-right"></i>
                    </a>
                </div>
                
                <div class="button">
                    <button class="achat">Acheter un ticket</button>
                </div>
            </div>

            <div class="cardEvent">
                <img src="{{asset('img/content/party2.jpeg')}}" alt="">
                <div class="infos">
                    <h3> MOUSE THE MOOD </h3>
                    <p class="day"> Samedi 24 Juin à 22 heures </p>
                    <p class="place"> CLUB DES ROIS, COTONOU </p>
                    <a href="#">En savoir plus ... 
                        <i id="nextBtn" class="btndirections fa fa-chevron-right"></i>
                    </a>
                </div>
                
                <div class="button">
                    <button class="achat">Acheter un ticket</button>
                </div>
            </div>

            <div class="cardEvent">
                <img src="{{asset('img/content/party3.jpeg')}}" alt="">
                <div class="infos">
                    <h3> MOUSE THE MOOD </h3>
                    <p class="day"> Samedi 24 Juin à 22 heures </p>
                    <p class="place"> CLUB DES ROIS, COTONOU </p>
                    <a href="#">En savoir plus ... 
                        <i id="nextBtn" class="btndirections fa fa-chevron-right"></i>
                    </a>
                </div>
                
                <div class="button">
                    <button class="achat">Acheter un ticket</button>
                </div>
            </div>

            <div class="cardEvent">
                <img src="{{asset('img/content/party4.jpeg')}}" alt="">
                <div class="infos">
                    <h3> MOUSE THE MOOD </h3>
                    <p class="day"> Samedi 24 Juin à 22 heures </p>
                    <p class="place"> CLUB DES ROIS, COTONOU </p>
                    <a href="#">En savoir plus ... 
                        <i id="nextBtn" class="btndirections fa fa-chevron-right"></i>
                    </a>
                </div>
                
                <div class="button">
                    <button class="achat">Acheter un ticket</button>
                </div>
            </div>

                        <div class="cardEvent">
                <img src="{{asset('img/content/party2.jpeg')}}" alt="">
                <div class="infos">
                    <h3> MOUSE THE MOOD </h3>
                    <p class="day"> Samedi 24 Juin à 22 heures </p>
                    <p class="place"> CLUB DES ROIS, COTONOU </p>
                    <a href="#">En savoir plus ... 
                        <i id="nextBtn" class="btndirections fa fa-chevron-right"></i>
                    </a>
                </div>
                
                <div class="button">
                    <button class="achat">Acheter un ticket</button>
                </div>
            </div>

            <div class="cardEvent">
                <img src="{{asset('img/content/party3.jpeg')}}" alt="">
                <div class="infos">
                    <h3> MOUSE THE MOOD </h3>
                    <p class="day"> Samedi 24 Juin à 22 heures </p>
                    <p class="place"> CLUB DES ROIS, COTONOU </p>
                    <a href="#">En savoir plus ... 
                        <i id="nextBtn" class="btndirections fa fa-chevron-right"></i>
                    </a>
                </div>
                
                <div class="button">
                    <button class="achat">Acheter un ticket</button>
                </div>
            </div>

            <div class="cardEvent">
                <img src="{{asset('img/content/party4.jpeg')}}" alt="">
                <div class="infos">
                    <h3> MOUSE THE MOOD </h3>
                    <p class="day"> Samedi 24 Juin à 22 heures </p>
                    <p class="place"> CLUB DES ROIS, COTONOU </p>
                    <a href="#">En savoir plus ... 
                        <i id="nextBtn" class="btndirections fa fa-chevron-right"></i>
                    </a>
                </div>
                
                <div class="button">
                    <button class="achat">Acheter un ticket</button>
                </div>
            </div>
            
        </div>
        <img class="twoConf" src="{{asset('img/content/Confettiblue.svg')}}" alt="">
        <br><br><br>
    </div>
    <!-- End Event -->

@endsection

