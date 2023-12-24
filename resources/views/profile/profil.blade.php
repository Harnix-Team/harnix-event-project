@extends("layouts.app")

@section('style')
    
@endsection

@section('title')
    Profil
@endsection
@section('content')

    <section class="module_category">

        <h1>Quelles sont mes catégories préférées ?</h1>

        <p>Cliquez sur une catégorie pour sauvegarder vos 
            préférences vers le bas. Si vous cliquez sur 
            la croix, vous êtes susceptibles de les retirer
            de la catégorie.
        </p>

        <div class="events_categories">

            <button class="category">conférences</button>
            <button class="category">musique</button>
            <button class="category">chill</button>
            <button class="category">soirée</button>
            <button class="category">dîner</button>
            <button class="category">festival</button>
            <button class="category">galas</button>
            <button class="category">concert</button>

        </div>

        <div class="choosed_category">
            <div class="badge">Catégories sauvegardées</div>

            <div class="choices">
                <button class="choosed">
                    <img src="{{asset('img/content/cross.png')}}" alt="">
                    concert
                </button>
            </div>
        </div>

    </section>

@endsection

