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

                <div class="step_box step_box__active"> <div  class="step_number" >1</div> <span class="step_name">Informations de base</span> </div>
                <div class="step_box "> <div  class="step_number" >2</div> <span class="step_name"> Billets et offres</span></div>
                
                
             <!--   <button class="step_box step_box__active"> <div  class="step_number" >1</div> <span class="step_name">Informations de base</span> </button>
                <button class="step_box "> <div  class="step_number" >2</div> <span class="step_name"> Billets et offres</span></button>
                <button class="step_box "> <div  class="step_number" >1</div> <span class="step_name"> Prévisualisation</span></button>
                <button class="step_box "> <div  class="step_number" >1</div> <span class="step_name"> Publications</span></button> -->


            </aside>
      
            <section class="create_event">
    
                <form method="POST" action="{{ route('update') }}" class="create_event__form" enctype="multipart/form-data">
                @csrf
                @method('patch')
                    <div class="event_step step_one">

                        <div class="step_box">
                            <div class="create_event__informations left_informations">

                                <div class="event_info event_info_what">
                                    <h3>Personnel</h3>
                                    <p>Donnez les informations de base sur votre événement et décrivez-le de la façon la plus claire possible.</p>
                                    <input type="hidden" name="id" id="nom" placeholder="" value="{{$event->id}}" required>

                                    <div class="input_form">
                                        <label for="nom">Nom de l'événement <span>*</span> </label>
                                        <input type="text" name="event_name" id="nom" placeholder="" value="{{$event->name}}" required>
                                        <input type="hidden" name="event_type" id="type" required value="{{$event->category_id}}" required>

                                        @error('event_name')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input_form description">
                                        <label for="description">Description de l'événement <span>*</span> </label>
                                        <textarea name="event_description" id="description" cols="30" required value="{{$event->description}}"  rows="10">{{$event->description}}</textarea>
                                        @error('event_description')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="event_info event_info_supp">
                                    <h3>Informations supplémentaires</h3>
                                    <p>Rassurez-vous que votre événement soit bien vu par tous les utilisateurs du site avec ces détails clés !</p>
                                    <div class="input_form">
                                        <label for="nom">Nom de l'Agence/Promoteur <span>*</span> </label>
                                        <input type="text" name="agency" id="nom" placeholder="{{ Auth::user()->name }}" value="{{$event->agency}}" required>
                                        @error('agency')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <img  src="{{ asset($event['img']) }}" alt="">
                                    <div class="event_info__event_banner">
                                        <input type="hidden" name="img_event" id="file" value="{{$event->img}}" required>
                                        <input type="file" name="img_event" id="file" value="{{$event->img}}" required>
                                        @error('img_event')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input_form">
                                        <label for="tags">Modifier des tags, séparés par une virgule <span>*</span> </label>
                                        <input type="text" name="tags" id="tags" value="{{$event->tags}}" placeholder="">
                                        @error('tags')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                            </div>

                            <div class="create_event__informations right_informations">

                                <div class="event_info event_info__where">
                                    <h3>Où ?</h3>
                                    <div class="input_form">
                                        <label for="lieu">Nom du lieu de l’événement<span>*</span> </label>
                                        <input type="text" name="event_place" id="lieu" value="{{$event->place}}" placeholder="">
                                        @error('event_place')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    

                                </div>

                                <div class="event_info event_info__when">
                                    <h3>Quand ?</h3>
                

                                    <div class="input_form event_info__date">
                                        <label for="date">Modifier la date de début<span>*</span> </label>
                                        <input type="text" name="begin_date" id="date" placeholder="" value="{{$event->date_begin}}">
                                        @error('begin_date')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

                    

                                    <div class="input_form event_info__date">
                                        <label for="date">Modifier la date de fin<span>*</span> </label>
                                        <input type="text" name="end_date" id="date" placeholder="" value="{{$event->date_end}}">
                                        @error('end_date')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    

                                    <!-- <button type="button" ><img  src="{{asset('img/content/plus.png')}}" alt=""> Ajouter une date </button> -->

                                </div>

                            </div>
                        </div>

                        <div class="modification_profile__submit_modifications">
                            <button type="button">Continuer</button>
                        </div>

                    </div>

                    <div class="event_step step_two">

                        <div class="step_box">

                            <div class="create_event__informations left_informations">
                                <div class="event_info event_info_what">
                                    <h3>Vos Tickets</h3>
                                    @foreach($ticketsData as $pass)
                                        <p>{{$pass['name']}}</p>
                                        <div class="input_form">
                                            <label for="nom_ticket">{{$pass['name']}}<span>*</span> </label>
                                            <input type="text" name="ticket_names[]" value="{{$pass['name']}}">
                                            @error('ticket_names')
                                                <span style="color: red;" class="error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="input_form">
                                            <label for="prix">Prix du ticket <span>*</span> </label>
                                            <input type="number" name="ticket_prices[]" id="prix" class="prix_ticket" value="{{$pass['price']}}" placeholder="" required aria-label="Prix du ticket">
                                            @error('ticket_prices')
                                                <span style="color: red;" class="error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="input_form description">
                                            <label for="description">Description du ticket <span>*</span> </label>
                                            <textarea name="ticket_description[]" id="description" cols="30" rows="10" class="ticket_description"  required aria-label="Description du ticket">{{$pass['description']}}</textarea>
                                            @error('ticket_description')
                                                <span style="color: red;" class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
           
                                    

                                        <div class="input_form">
                                            <label for="ticket_number">Nombre de ticket <span>*</span> </label>
                                            <input type="number" name="ticket_numbers[]" id="ticket_number" class="ticket_number" value="{{$pass['totalNumber']}}"  required aria-label="Nombre de tickets à vendre">
                                            @error('ticket_numbers')
                                                <span style="color: red;" class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    @endforeach
                                </div>

                            </div>

                        </div>

                        <div class="modification_profile__submit_modifications">
                            <button type="button" onclick="event.preventDefault(); this.closest('form').submit();">Modifier</button>
                        </div>

                    </div>

                </form>
    
            </section>

        </div>



    </body>

    <script src="{{asset('js/config.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/eventCreationMain.js')}}"></script>
</html>