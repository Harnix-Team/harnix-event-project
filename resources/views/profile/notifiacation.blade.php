@extends("layouts.app")

@section('style')
    
@endsection

@section('title')
    notifaction
@endsection
@section('content')

    <section class="module_notifications">
        <h1>Notifications</h1>
        @foreach($notifys as $notify)
            <div class="notification_box">
                <img src="{{asset('img/content/party-popper.png')}}" alt="Party icon">
                <p>{{$notify->content}}</p>
                <div class="notification_box__consult">
                    <a href="{{$notify->referTo}}">Consulter</a>
                    <img src="{{asset('img/content/external-link.png')}}" alt="External link icon">
                </div>
            </div> <br>
        @endforeach
    </section> 


@endsection

