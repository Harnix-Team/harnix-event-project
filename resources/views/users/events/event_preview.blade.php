<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/step_one.css')}}">
        <link rel="stylesheet" href="{{asset('css/reset.css')}}">

        <title>{{ config('app.name', 'Ticketche')}} >> Création Events</title>


</head>
<body>


        <header>
            <nav class="secondary_navbar">
                <div class="return_link">
                    <img  src="{{asset('img/content/left_arrow.svg')}}" alt="">

                    <a href="{{route('dashboard')}}">Retour</a>
                </div>
    
                <div class="breadcrumb">
                    <a href="#" class="step active">Infos de base</a>
                </div>
            </nav>
        </header>


        <div class="grid">

            <aside>

                <div class="step_box step_box__active"> <div  class="step_number" >3</div> <span class="step_name"> Prévisualisation</span></div>
                <div class="step_box "> <div  class="step_number" >4</div> <span class="step_name">Boostez votre Evenement</span></div>
             <!--   <button class="step_box step_box__active"> <div  class="step_number" >1</div> <span class="step_name">Informations de base</span> </button>
                <button class="step_box "> <div  class="step_number" >2</div> <span class="step_name"> Billets et offres</span></button>
                <button class="step_box "> <div  class="step_number" >1</div> <span class="step_name"> Prévisualisation</span></button>
                <button class="step_box "> <div  class="step_number" >1</div> <span class="step_name"> Publications</span></button> -->


            </aside>
      
            <section class="create_event">
    
                <div class="create_event__form">
                    
                    <div class=" event_step step_three">

                        <div class="step_box">

                            <div class=" create_event__informations left_informations">

                                <h1>{{$event['name']}}</h1>

                                <img  src="{{ asset($event['img']) }}" alt="">

                                <div class="agency_informations">


                                    <div class="agency_informations__informations">

                                        <div class="profile_img">
                                            <img  src="{{asset('img/content/icons8-compagnies-associées-50.png')}}" alt="image d'affiche">
                                        </div>
                                        <h4 class="agency_name">{{$event['agency']}}</h4>
                                        <div class="profile__informations">
                                            <img  src="{{asset('img/content/stars.png')}}" alt="image d'affiche">
                                            <p>Agence certifiée</p>
                                        </div>
                                        
                                    </div>

                                    <div class="onglets">
                                        <div class="onglets__details onglet_active"> Détails</div>
                                    </div>

                                    <p style="text-align: justify;">
                                        {{$event['description']}} <br>
                                       
                                    </p>
                                    <h3>Vos pouvez Booster votre événement enseulement un Click : </h3> <b> <strong>{{$event['tags']}}</strong> </b>
                                </div>
                                
                            </div>
        
                            <div class=" create_event__informations right_informations">

                                <div class=" event_info place_date_time_visualisation">
                                    <h3>Date et lieux</h3>
                                    <p>Heure et emplacement</p>
        
                                    <div class="place_visualisation">{{$event['place']}}</div>

                                    <div class="date_time_visualisation">
                                        <span class="date">Du {{$event['date_begin']}} </span>
                                        <span class="time_visualisation">Au {{$event['date_end']}}</span>
                                    </div>
        
                                </div>

                                
                                <div class=" event_info date_time_isualisation">
                                    <h3>Tickets ajoutés</h3>
                                    <p>Retrouvez ici tous les tickets que vous avez générez lors du processus de création de votre événement.</p>
        
                                    @foreach($ticketsData as $pass)
                                        <div class="ticket">

                                            <div class="ticket__price_and_type">
                                                <span class="ticket__type">{{$pass['name']}}</span>
                                                <span class="ticket__price">{{$pass['price']}} Fcfa</span>
                                            </div>

                                            <div class="ticket__number"> {{$pass['totalNumber']}} </div>
                                        </div>
                                    @endforeach
                                  
                                </div>
                                
                            </div>     
                        </div>

                        <div class="modification_profile__submit_modifications">
                            <button type="button" onclick="event.preventDefault(); this.closest('form').submit();">Continuer</button>
                        </div>

                    </div>

                    <div class=" event_step step_four">

                        <div class="event_info_final_phase">
                            <img  src="{{ asset($event['img']) }}" alt="">

                            
                            <div class="last_phase_acceptance">
                                <h2>Partagez sur vos réseaux sociaux !</h2>

                                <div class="share_options">
                                    <button id="shareButton">Partager</button> <br>
                                </div>
                                
                                <h2>Soucrivez à nos offres publicitaires et touchez +5000 personnes dans +5 pays de l'Afrique !!</h2>
                                <div class="share_options">
                                    <label for="harnix_conditions"><a href="http://">En savoir plus</a></label>
                                </div>

                            </div> 

                        </div>

                        <div class="modification_profile__submit_modifications">
                            <a class="gerer-event-btn" href="{{ route('event.edit', ['id' => $currentEvent['id']]) }}">Editer</a>

                            <button type="submit">Publier</button>
                        </div>

                    </div>

                </div>
    
            </section>

        </div>
        <?php
            $titre = $event['name'];
            $description = $event['description'];
            $url = "http://127.0.0.1:8000/events/{$event['id']}";

            // Créez un tableau associatif avec les données
            $donnees = [
                'title' => $titre,
                'text' => $description,
                'url' => $url,
            ];

            // Encodez le tableau en JSON de manière sécurisée
            $donneesJson = json_encode($donnees, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
            ?>
            <script>
                const shareButton = document.getElementById('shareButton');
                var donnees = <?php echo $donneesJson; ?>;

                if (navigator.share) {
                    shareButton.addEventListener('click', () => {
                        navigator.share(donnees)
                            .then(() => console.log('Partage réussi'))
                            .catch((error) => console.error('Erreur lors du partage', error));
                    });
                } else {
                    // Si l'API Web Share n'est pas prise en charge, vous pouvez fournir une alternative ici, par exemple, ouvrir une boîte de dialogue de partage personnalisée.
                    shareButton.addEventListener('click', () => {
                        alert('La fonction de partage n\'est pas prise en charge par votre navigateur.');
                    });
                }
            </script>

    </body>

    <script src="{{asset('js/config.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/eventCreationMain.js')}}"></script>
</html>