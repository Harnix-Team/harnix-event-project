@extends("layouts.app")

@section('style')
    
@endsection

@section('title')
    notifaction
@endsection
@section('content')

    <section class="module_notifications">
        <h1>Notifications</h1>

        <div class="notification_box">
            <img src="{{asset('img/content/party-popper.png')}}" alt="Party icon">
            <p>Nouveaux Chill, près de chez vous, consulter les détails !</p>
            <div class="notification_box__consult">
                <a href="">Consulter</a>
                <img src="{{asset('img/content/external-link.png')}}" alt="External link icon">
            </div>
        </div>
    </section> 


@endsection

