@extends("layouts.base")

@section('style')
    <link rel="stylesheet" href="{{asset('css/accueil.css')}}">
@endsection

@section('title')
    Home
@endsection
@section('Content')

    <?php $jsEventData  = json_encode($events);?>
    <!-- Hero Section with slides images -->
    <div class="hero_section">
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
            <div  id="searchResults" class="events">

                
            </div>
            <!-- End Event Cards -->

            <div class="decouverte">
                <button><a href="/events">Découvrir plus ...</a> </button>
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
                <a class="createEvent" href="{{ route('create-event') }}"> Créez votre événement </a>
                <img class="oneConf" src="{{asset('img/content/Confettiblue.svg')}}" alt=""><br><br>
                <img class="oneConf" src="{{asset('img/content/Confetti.png')}}" alt="">

                <p class="text1"> Boostez votre Evenement</p>

                <p class="text2"> Touchez +5000 personnes dans +5 pays à travers l'Afrique !!</p>

                <a class="createEvent" href="{{ route('nos-offres') }}">Boostez maintenant </a>
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
                <a class="ins" href="{{ route('register') }}"> Inscription </a>
                <p class="conn">J’ai déjà un compte, <a href="{{ route('login') }}">connexion ! </a></p>
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
            <img src="{{asset('img/partnaires/EKIP.png')}}"  alt="">
            <img src="{{asset('img/partnaires/Fl-event.png')}}"  alt="">
            <img src="{{asset('img/partnaires/Thunder Event.png')}}"  alt="">
           
            
        </div><br>
    </div>
    <!-- End Partenaires -->


    <script>
            // Intégrer les données JSON dans le script JS
        const jsEventData = <?php echo $jsEventData; ?>;
        
        const searchInput = document.getElementById('searchInput');
        const searchResults = document.getElementById('searchResults');

        // Afficher tous les événements par défaut
        jsEventData.forEach(event => {
            const div = createEventCard(event);
            searchResults.appendChild(div);
        });

        searchInput.addEventListener('input', function() {
            const query = searchInput.value.toLowerCase();
            searchResults.innerHTML = '';

            if (query.trim() !== '') {
                // Filtrer les résultats en fonction de la saisie de l'utilisateur
                const filteredResults = jsEventData.filter(event => {
                    const searchableFields = ['name', 'place', 'tags', 'agency'];
                    return searchableFields.some(field => event[field].toLowerCase().includes(query));
                });

                // Afficher les résultats filtrés
                filteredResults.forEach(event => {
                    const div = createEventCard(event);
                    searchResults.appendChild(div);
                });
            } else {
                // Si la recherche est vide, afficher tous les événements par défaut
                jsEventData.forEach(event => {
                    const div = createEventCard(event);
                    searchResults.appendChild(div);
                });
            }
        });

        function createEventCard(event) {
            const div = document.createElement('div');
            div.classList.add('cardEvent');

            const img = document.createElement('img');
            img.src = event.img;
            img.alt = event.name;

            const infos = document.createElement('div');
            infos.classList.add('infos');

            const h3 = document.createElement('h3');
            h3.textContent = event.name;

            const day = document.createElement('p');
            day.classList.add('day');
            day.textContent = ` ${event.date_begin} `; // Utiliser la date comme texte

            const place = document.createElement('p');
            place.classList.add('place');
            place.textContent = event.place;

            const link = document.createElement('a');
            link.href = '#';
            link.textContent = 'En savoir plus ...';
            
            const nextBtn = document.createElement('i');
            nextBtn.id = 'nextBtn';
            nextBtn.classList.add('btndirections', 'fa', 'fa-chevron-right');

            const button = document.createElement('div');
            button.classList.add('button');

            const acheterBtn = document.createElement('button');
            acheterBtn.classList.add('achat');
            acheterBtn.textContent = 'Acheter un ticket';

            infos.appendChild(h3);
            infos.appendChild(day);
            infos.appendChild(place);
            link.appendChild(nextBtn);
            infos.appendChild(link);

            button.appendChild(acheterBtn);

            div.appendChild(img);
            div.appendChild(infos);
            div.appendChild(button);

            return div;
        }
    </script>
@endsection

