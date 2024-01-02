@extends("layouts.guest")

@section('style')
    <link rel="stylesheet" href="{{asset('css/modification-event-step1.css')}}">
@endsection

@section('title')
   Tableau de Bord
@endsection

@section('dash')

    @if( Route::currentRouteName() == 'dashboard')
            <div class="session-a-droite">
                
                <div class="round-container">
                    <a  style="color: orange;"  href="/dashboard" class="round-container-step">
                        <i class="fas fa-chart-bar"></i> En Cours
                    </a>
                    <a href="{{route('dashbord.passevent')}}"  class="round-container-step">
                        <i class="fas fa-chart-line"></i> Terminés
                    </a>
                    
                    <br/><br/>
                </div>
                
                <div class="second-container">
                    <br/>
                    
                    <div class="class-g-event">
                        <div class="class-event">
                            @if(count($currentEvents) == 0)
                                <br><br><br><br><br><br><br><br><br><br><br><br>
                                <h2 style="color: red; text-align:center;">Vous n'avez aucun événement en cours. Cliquez sur le bouton suivant pour en créer !!!</h2>
                                <br><br><br><br><br><br><br><br><br><br><br><br>
                            @else
                                @foreach($currentEvents as $currentEvent)
                                    <div class="class-sous-event">
                                        <img class="img-sous-event" src="{{ asset($currentEvent['img']) }}" alt="">
                                        <div class="bas-img-event">
                                            <h2>{{$currentEvent['name']}}</h2>
                                            <p> {{$currentEvent['description']}}</p>
                                            <div class="class-info">
                                                <div class="class-sous-info">
                                                    <p><strong>Date</strong></p>
                                                    <p>{{$currentEvent['date_begin']}}</p>
                                                </div>
                                                <div class="class-sous-info">
                                                    <p><strong>Lieu</strong></p>
                                                    <p>{{$currentEvent['place']}}</p>
                                                </div>
                                                <div class="">
                                                    <p><strong>Tickets Vendues</strong></p>
                                                    <p>400/500</p>
                                                </div>
                                            </div>
                                        
                                        </div>
                                        <div class="gerer-event-btn-div">

                                            <a class="gerer-event-btn" href="{{ route('event.delete', ['id' => $currentEvent['id']]) }}">supprimer</a>
                                            <a class="gerer-event-btn" href="{{ route('event.edit', ['id' => $currentEvent['id']]) }}">Editer</a>
                                            <button class="gerer-event-btn"> Gerer l'événement</button>

                                        </div>
                                    </div> 
                                @endforeach  
                            @endif
                        </div> 
                        
                    </div>
                    <button class="retourBtn">Retour</button>
                    <button class="suivantBtn">Suivant</button>
                    <p id="paginationInfo"></p>
                </div>
            </div>
        </div>
    @else
            <div class="session-a-droite">
            
                <div class="round-container">
                    <a  href="{{route('dashboard')}}" class="round-container-step">
                        <i class="fas fa-chart-bar"></i> En Cours
                    </a>
                    <a style="color: orange;" href="{{route('dashbord.passevent')}}"  class="round-container-step">
                        <i class="fas fa-chart-line"></i> Terminés
                    </a>
                    
                    <br/><br/>
                </div>
                
                <div class="second-container">
                    <br/>
                    
                    <div class="class-g-event">
                        <div class="class-event">
                        @if(count($passEvents) == 0)
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                            <h2 style="color: red; text-align:center;">Vous n'avez aucun événement déjà passé. Cliquez sur le bouton suivant pour en créer !!!</h2>
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                        @else
                            @foreach($passEvents as $passEvent)
                                <div class="class-sous-event">
                                    <img class="img-sous-event" src="{{ asset($passEvent['img']) }}" alt="">
                                    <div class="bas-img-event">
                                        <h2>{{$passEvent['name']}}</h2>
                                        <p> {{$passEvent['description']}}</p>
                                        <div class="class-info">
                                            <div class="class-sous-info">
                                                <p><strong>Date</strong></p>
                                                <p>{{$passEvent['date_begin']}}</p>
                                            </div>
                                            <div class="class-sous-info">
                                                <p><strong>Lieu</strong></p>
                                                <p>{{$passEvent['place']}}</p>
                                            </div>
                                            <div class="">
                                                <p><strong>Tickets Vendues</strong></p>
                                                <p>400/500</p>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="gerer-event-btn-div">
                                        <a class="gerer-event-btn" href="{{ route('event.delete', ['id' => $passEvent['id']]) }}">supprimer</a>
                                        <a class="gerer-event-btn" href="{{ route('event.edit', ['id' => $passEvent['id']]) }}">Editer</a>
                                        <button class="gerer-event-btn"> Gerer l'événement</button>
                                    </div>
                                </div>
                            @endforeach  

                        @endif
                        </div> 
                    
                    </div>
                    <button class="retourBtn">Retour</button>
                    <button class="suivantBtn">Suivant</button>
                    <p id="paginationInfo"></p>
                </div>
            </div>
        </div>

    @endif
    <script src="{{asset('js/modification-event-step1.js')}}"></script>

@endsection