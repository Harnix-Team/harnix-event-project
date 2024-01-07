@extends("layouts.base")

@section('style')
    <link rel="stylesheet" href="{{asset('css/accueil.css')}}">
@endsection

@section('title')
    Evénements
@endsection
@section('Content')

    <?php $jsEventData  = json_encode($events);?>
   <!-- Event -->
    <div class="event">
        <img class="oneConf" src="{{asset('img/content/Confettiblue.svg')}}" alt="">
        <span class="new">Nouveau événements</span>
        <!-- <span class="new">
            <select name="event_type" id="type" value="{{ old('event_type') }}" required>
                @foreach($eventCategories as $eventCategory)
                    <option value="{{$eventCategory['id']}}">{{$eventCategory['name']}}</option>
                    
                @endforeach
            </select>
        </span>  <br> -->
                                
        <p class="txt1">Le meilleur du moment !</p>
        <p class="txt2">Découvrez les événements les plus attendus et les plus de cette période ! Soyez prêt !</p>
        <div id="searchResults" class="events">

            <!-- @foreach($events as $event)
                <div class="cardEvent">
                    <img  src="{{ asset($event['img']) }}" alt="{{$event['name']}}">
                    <div class="infos">
                        <h3> {{$event['name']}} </h3>
                        <p class="day"> {{ \Carbon\Carbon::parse($event['date_begin'])->format('l d F \à H\h') }} </p>
                        <p class="place"> {{$event['place']}} </p>
                        <a href="#">En savoir plus ... 
                            <i id="nextBtn" class="btndirections fa fa-chevron-right"></i>
                        </a>
                    </div>
                    
                    <div class="button">
                        <button class="achat">Acheter un ticket</button>
                    </div>
                </div>
            @endforeach -->
           
            
        </div>
        <img class="twoConf" src="{{asset('img/content/Confettiblue.svg')}}" alt="">
        <br><br><br>
    </div>
    <!-- End Event -->


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

