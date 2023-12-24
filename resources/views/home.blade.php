@extends("layouts.base")

@section('style')
    <link rel="stylesheet" href="{{asset('css/accueil.css')}}">
@endsection

@section('title')
    Home
@endsection
@section('Content')

    <!-- Hero Section with slides images -->
    <div class="hero_section">
            <div class="texte_hero">
                <p>MUSIC FEST</p>
                <p>Le meilleur événement de l'année pour célébrer la musique urbaine !</p>
            </div>
            <div class="img_carousel">
                <img src="{{asset('img/content/musicfest.png')}}" alt="1" class="carousel-img">
                <img src="{{asset('img/content/electronicparty.png')}}" alt="2" class="carousel-img">
                <img src="{{asset('img/content/jazz.png')}}" alt="3" class="carousel-img">
                <i id="prevBtn" class="btndirections fa fa-chevron-left"></i>
                <i id="nextBtn" class="btndirections fa fa-chevron-right"></i>
                <div class="dots"></div>
            </div>
        </div>
    <!-- End Hero Section -->

    <!-- Event Section -->
        <div class="event">

            <img class="oneConf" src="{{asset('img/content/Confettiblue.svg')}}" alt="">
            <span class="new">Nouveau</span>
            <p class="txt1">Le meilleur du moment !</p>
            <p class="txt2">Découvrez les événements les plus attendus et les plus de cette période ! Soyez prêt !</p>

            <!-- Event Cards -->
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
                
            </div>
            <!-- End Event Cards -->

            <div class="decouverte">
                <button><a href="events.html">Découvrir plus ...</a> </button>
            </div>
            <img class="twoConf" src="{{asset('img/content/Confettiblue.svg')}}" alt="">
        </div>
    <!-- End Event Section -->

    <!-- Section chiffreAffaire -->
        <div class="chiffreAffaire">
            <div class="part1">
                <span class="new"> Augmentez votre chiffre d'affaire ! </span>
                <p class="text1"> Vous organisez des événements ? </p>
                <p class="text2"> Créez vos événements en un clic ! </p>
                <a class="createEvent" href="#"> Créez votre événement </a>
                <img class="oneConf" src="{{asset('img/content/Confettiblue.svg')}}" alt=""><br><br>
                <img class="oneConf" src="{{asset('img/content/Confetti.png')}}" alt="">
            </div>
            <div class="part2">
                <img src="{{asset('img/content/salary.png')}}" alt="">
                <div class="step">
                    <p> Économisez votre budget </p><br>
                    <span> Les tickets en ligne sont totalement illimités et sécurisés par de nombreux protocoles. Investissez moins dans le papier et faites plus de chiffre d’affaire ! </span><br>
                </div>
                <img src="{{asset('img/content/theft-insurance.png')}}" alt="">
                <div class="step">
                    <p> Évitez les fraudes des distributeurs ! </p><br>
                    <span> C’est toujours compliqué de faire confiance aux distributeurs lorsque vous leurs confiez des tickets (votre argent)  car, si vous êtes imprudents, on vous vole ! Découvrez comment mieux protéger votre argent !
                    </span><br>
                </div>
                <img src="{{asset('img/content/qr-code.png')}}" alt="">
                <div class="step">
                    <p> Vérification par scannage, c’est propre, c’est HI-TECH </p><br>
                    <span>Vos clients viennent avec leur tickets uniques sur leurs téléphones portables, vous scannez ! Et tcha, c’est fini, ils sont validés une fois pour toute ! <br> Plus besoin de se prendre la tête et déchirer des bouts de papier, pour balayer après !</span><br>
                </div>
            </div>
        </div>
    <!-- End Section chiffreAffaire -->

    <!-- Section Inscription - Connexion -->
        <div class="conInsc chiffreAffaire">
            <div class="part1">
                <img src="{{asset('img/content/Pattern.svg')}}" alt="">
                <p class="text1"> Connexion et Inscription </p>
                <p class="text2"> Inscrivez-vous à la plateforme pour plus de fonctionnalité ! <span>Boostez vos relations ! </span></p>
                <a class="ins" href="#"> Inscription </a>
                <p class="conn">J’ai déjà un compte, <a href="#">connexion ! </a></p>
            </div>
            <div class="part2">
                <img src="{{asset('img/content/young.png')}}" alt="">
            </div>
        </div>
    <!-- End Section -->

    <!-- Questions -->
        <div class="questions">
            <p> Attendez, J'ai une question ! </p>
            <p> Et bien, nous sommes sûr que ta réponse se retrouve ici ! </p>
            <a href="#"> Trouver ma réponse !</a>
        </div>
    <!-- End Questions -->

    <!-- Partenaires -->
    <div class="partenaires">
        <p> Nos partenaires</p>
        <div class="logosPartenaires">

            <img src="{{asset('img/partnaires/EKIP.png')}}"  alt="">
            <img src="{{asset('img/partnaires/Events.png')}}"  alt="">
            <img src="{{asset('img/partnaires/Fl-event.png')}}"  alt="">
            <img src="{{asset('img/partnaires/Thunder Event.png')}}"  alt="">
            <img src="{{asset('img/partnaires/Thunder Event.png')}}"  alt="">
            
            


        </div><br>
    </div>
    <!-- End Partenaires -->
    
@endsection

