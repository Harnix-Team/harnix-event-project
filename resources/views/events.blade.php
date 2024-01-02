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

            @foreach($events as $event)
                <div class="cardEvent">
                    <img  src="{{ asset($event['img']) }}" alt="{{$event['name']}}">
                    <div class="infos">
                        <h3> {{$event['name']}} </h3>
                        <p class="day"> {{$event['date_begin']}} </p>
                        <p class="place"> {{$event['place']}} </p>
                        <a href="#">En savoir plus ... 
                            <i id="nextBtn" class="btndirections fa fa-chevron-right"></i>
                        </a>
                    </div>
                    
                    <div class="button">
                        <button class="achat">Acheter un ticket</button>
                    </div>
                </div>
            @endforeach
           
            
        </div>
        <img class="twoConf" src="{{asset('img/content/Confettiblue.svg')}}" alt="">
        <br><br><br>
    </div>
    <!-- End Event -->

@endsection

