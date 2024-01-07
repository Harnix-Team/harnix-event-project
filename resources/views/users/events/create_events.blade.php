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
                <div class="step_box "> <div  class="step_number" >3</div> <span class="step_name"> Prévisualisation</span></div>
                <div class="step_box "> <div  class="step_number" >4</div> <span class="step_name"> Publications</span></div>

                
             <!--   <button class="step_box step_box__active"> <div  class="step_number" >1</div> <span class="step_name">Informations de base</span> </button>
                <button class="step_box "> <div  class="step_number" >2</div> <span class="step_name"> Billets et offres</span></button>
                <button class="step_box "> <div  class="step_number" >1</div> <span class="step_name"> Prévisualisation</span></button>
                <button class="step_box "> <div  class="step_number" >1</div> <span class="step_name"> Publications</span></button> -->


            </aside>
      
            <section class="create_event">
    
                <form method="POST" action="{{ route('event.store') }}" class="create_event__form" enctype="multipart/form-data">
                @csrf
                    <div class="event_step step_one">

                        <div class="step_box">
                            <div class="create_event__informations left_informations">

                                <div class="event_info event_info_what">
                                    <h3>Personnel</h3>
                                    <p>Donnez les informations de base sur votre événement et décrivez-le de la façon la plus claire possible.</p>

                                    <div class="input_form">
                                        <label for="nom">Nom de l'événement <span>*</span> </label>
                                        <input type="text" name="event_name" id="nom" placeholder="" value="{{ old('event_name') }}" required>
                                        <br><br>
                                        @error('event_name')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>

                                    <div class="input_form">
                                        <label for="type">Type d'événement <span>*</span> </label>
                                        <select name="event_type" id="type" value="{{ old('event_type') }}" required>
                                            @foreach($eventCategories as $eventCategory)
                                                <option value="{{$eventCategory['id']}}">{{$eventCategory['name']}}</option>
                                                
                                            @endforeach
                                        </select>
                                        <br><br>
                                        @error('event_type')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>

                                    <div class="input_form description">
                                        <label for="description">Description de l'événement <span>*</span> </label>
                                        <textarea name="event_description" id="description" cols="30" required value="{{ old('event_description') }}" rows="10">{{ old('event_description') }}</textarea>
                                        <br><br>
                                        @error('event_description')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>
                                </div>

                                <div class="event_info event_info_supp">
                                    <h3>Informations supplémentaires</h3>
                                    <p>Rassurez-vous que votre événement soit bien vu par tous les utilisateurs du site avec ces détails clés !</p>
                                    <div class="input_form">
                                        <label for="nom">Nom de l'Agence/Promoteur <span>*</span> </label>
                                        <input type="text" name="agency" id="nom" placeholder="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}" required>
                                        <br><br>
                                        @error('agency')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>


                                    <div class="event_info__event_banner">
                                        <input type="file" hidden name="img_event" id="file" value="{{ old('img_event') }}" required>
                                        <label for="file">Choisir la bannière (affiche de l'événement)<img src="{{asset('img/content/upload.png')}}" alt=""></label>
                                    </div>
                                    @error('img_event')
                                        <span style="color: red;" class="error">{{ $message }}</span>
                                    @enderror
                                    
                                    <div class="input_form">
                                        <label for="tags">Ajoutez des tags, séparés par une virgule <span>*</span> </label>
                                        <input type="text" name="tags" id="tags" value="{{ old('tags') }}" placeholder="">
                                        <br><br>
                                        @error('tags')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>

                                </div>

                            </div>

                            <div class="create_event__informations right_informations">

                                <div class="event_info event_info__where">
                                    <h3>Où ?</h3>
                                    <p>Définissez l’emplacement exact de votre événement !</p>

                                    <div class="input_form">
                                        <label for="lieu">Nom du lieu de l’événement<span>*</span> </label>
                                        <input type="text" name="event_place" id="lieu" value="{{ old('event_place') }}" placeholder="">
                                        <br><br>
                                        @error('event_place')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>

                                    <div class="input_form">
                                        <label for="adresse">Adresse Lieu <span>*</span> </label>
                                        <input type="text" name="adresse" id="adresse" placeholder="" value="{{ old('adresse') }}">
                                        <br><br>
                                        @error('adresse')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>

                                </div>

                                <div class="event_info event_info__when">
                                    <h3>Quand ?</h3>
                                    <p>Donnez les heures, et les dates auxquelles se dérouleront votre événement.
                                        Vous pouvez ainsi ajouter toutes les dates dont vous aurez besoin pour votre événement avec le bouton plus bas !</p>

                                    <div class="input_form event_info__date">
                                        <label for="date">Ajoutez la date de début<span>*</span> </label>
                                        <input type="date" name="begin_date" id="date" placeholder="" value="{{ old('begin_date') }}">
                                        <br><br>
                                        @error('begin_date')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>

                                    <div class="input_form event_info__time">
                                        <label for="time">Heure de l'événement <span>*</span> </label>
                                        <input type="time" name="begin_time" id="time" value="{{ old('begin_time') }}" placeholder="Date de l'événement">
                                        <br><br>
                                        @error('begin_time')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>

                                    <div class="input_form event_info__date">
                                        <label for="date">Ajoutez la date de fin<span>*</span> </label>
                                        <input type="date" name="end_date" id="date" placeholder="" value="{{ old('end_date') }}">
                                        <br><br>
                                        @error('end_date')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>

                                    <div class="input_form event_info__time">
                                        <label for="time">Heure de fin <span>*</span> </label>
                                        <input type="time" name="end_time" id="time" placeholder="Date de l'événement" value="{{ old('end_time') }}">
                                        <br><br>
                                        @error('end_time')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
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
                                    <h3>Nouveau ticket</h3>
                                    <p>Cliquez sur l'option ajouter un ticket pour ajouter un nouveau ticket.</p>

                                    <div class="input_form">
                                        <label for="nom_ticket">Nom du ticket <span>*</span> </label>
                                        <select name="ticket_names" id="nom_ticket" class="nom_ticket"   required>
                                            @foreach($ticketCategories as $ticketCategory)
                                                <option value="{{$ticketCategory['name']}}">{{$ticketCategory['name']}}</option>

                                            @endforeach
                                        </select>
                                        <br><br>
                                        @error('ticket_names')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>

                                    <div class="input_form">
                                        <label for="prix">Prix du ticket <span>*</span> </label>
                                        <input type="number" name="prix" id="prix" class="prix_ticket"  placeholder="" required aria-label="Prix du ticket">
                                        <br><br>
                                        @error('ticket_prices')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>

                                    <div class="input_form description">
                                        <label for="description">Description du ticket <span>*</span> </label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="ticket_description"  required aria-label="Description du ticket">{{ old('description') }}</textarea>
                                        <br><br>
                                        @error('ticket_description')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>
                                </div>

                                <div class="event_info event_info_supp">
                                    <h3>Limites et nombre de tickets</h3>
                                    <p>Choisissez la limite de tickets à vendre</p>

                                    <div class="input_form">
                                        <label for="ticket_number">Nombre de ticket <span>*</span> </label>
                                        <input type="number" name="ticket_number" id="ticket_number" class="ticket_number"  required aria-label="Nombre de tickets à vendre">
                                        <br><br>
                                        @error('ticket_numbers')
                                            <span style="color: red;" class="error">{{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>
                                    <button type="button" class="adding_button adding_ticket__button" aria-label="Ajouter un ticket">
                                        <img src="{{asset('img/content/plus.png')}}" alt=""> Ajouter un ticket
                                    </button>
                                </div>

                            </div>

                            <div class="create_event__informations right_informations">

                                <div class="event_info event_info__ticket_model">
                                    <h3>Tous vos Tickets</h3>
                                    <p>Prévisualisez les tickets à vendre</p>

                                    <!-- <div class="ticket">
                                        <div class="ticket__price_and_type">
                                            <span class="ticket__type">Nom du ticket</span>
                                            <span class="ticket__price">(Prix) Fcfa</span>
                                        </div>

                                        <div class="ticket__number">Nombre</div>
                                    </div> -->

                                </div>

                            </div>
                        </div>

                        <div class="modification_profile__submit_modifications">
                            <button type="button" onclick="event.preventDefault(); this.closest('form').submit();">Créer</button>
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