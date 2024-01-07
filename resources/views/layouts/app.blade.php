<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="{{asset('img/sociallink/logo.SVG')}}">


        <title>{{ config('app.name', 'Ticketche')}} >> @yield('title')</title>
        
       
        <!-- Content style  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="stylesheet" href="{{asset('css/reset.css')}}">


        <!-- Footer and header css -->
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('css/profil.css')}}">


      
    </head>
    <body>
        <header>
            <div class="header-block1">
                <h1><a href="/">HARNIX-EVENTS</a></h1>
                <div class="search-bar">
                    <i class="fa fa-search"></i> 
                    <input type="text" placeholder="Rechercher un événement">
                    <button>Rechercher</button>
                </div>
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                        
                            <a href="{{ url('/profil') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><img src="{{asset('img/content/icons8-avatar-96.png')}}" alt="Profil image" class="profil_presentation__profile"></a>
                            <!-- <button class="connexion-button"></button> -->
                        @else
                            <a href="{{ route('login') }}"><button class="connexion-button">Connexion</button></a> 

                            @if (Route::has('register'))
                                <!-- <a href="{{ route('register') }}"><button class="connexion-button">Inscription</button></a>  -->
                            @endif
                        @endauth
                    </div>
                @endif
            </div><br><br>
            <nav class="secondary_navbar">
                @if( Route::currentRouteName() == 'profil')
                    <div class="return_link">
                        <img src="{{asset('img/content/left_arrow.svg')}}" alt="return button">
                        <a href="/">Retour</a>
                    </div>
        
                    <div class="breadcrumb">
                        <a href="/profil" class="step active">Profil</a>
                    </div>
                @elseif( Route::currentRouteName() == 'profile')
                    <div class="return_link">
                        <img src="{{asset('img/content/left_arrow.svg')}}" alt="return button">
                        <a href="/profil">Retour</a>
                    </div>
        
                    <div class="breadcrumb">
                        <a href="{{route('profile.edit')}}" class="step active">Edition de profil</a>
                    </div>
                @else

                    <div class="return_link">
                        <img src="{{asset('img/content/left_arrow.svg')}}" alt="return button">
                        <a href="/profil">Retour</a>
                    </div>
        
                    <div class="breadcrumb">
                        <a href="{{ route('notifiacation') }}" class="step active">Notifications</a>
                    </div>
                @endif
                
            </nav>
        </header> <br><br><br> <br>
        <div class="grid">
            <section class="profil_presentation">
                <img src="{{asset('img/content/icons8-avatar-96.png')}}" alt="Profil image" class="profil_presentation__profile">
                <img src="{{asset('img/content/banner.png')}}" alt="Profil banner" class="profil_presentation__banner">
        
                <div class="profil_presentation__informations">
                    <div class="job">
                        <h2 class="name">{{ Auth::user()->name }}</h2>
                        <p class="work"><b>{{Auth::user()->status}} </b> <br>{{ Auth::user()->email }} </p>

                    </div>

                    @if( Route::currentRouteName() == 'profil')
                        <a href="{{route('profile.edit')}}">
                            <button>
                                <span>Compléter le profil</span>
                                <img src="{{asset('img/content/cil_pencil.svg')}}" alt="pen icon">
                            </button>
                        </a>
                    @else
                        @if(Auth::user()->email_verified_at != false)
                        <!-- {{var_dump(Auth::user()->email_verified_at)}} -->
                            <a href="{{route('dashboard')}}">
                                <button>
                                    <span>Tableau de Bord</span>
                                   
                                </button>
                            </a>
                            
                        @else

                            <!-- form to confirm account -->
                            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                                <button type="submit">Confirmer mon compte</button>
                                <br> <br> <br>
                                <p class="work">Votre compte n'est pas confirmé.</p>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                        Vous avez réçu un nouveau lien de confirmation !!
                                    </p>
                                @endif
                            </form>
                            
                        @endif
                    @endif
                </div>
            </section>
        
            <aside>
                <h3>À propos</h3>
        
                <div class="aside__informations">
        
                    <div class="data">
                        <img src="{{asset('img/content/sex.png')}}" alt="Logo sex">
                        <span>{{Auth::user()->gender}}</span>
                    </div> 
                    <div class="data">
                        <img src="{{asset('img/content/date.png')}}" alt="Logo date">
                        <span>{{ substr(Auth::user()->birth_year,0,10) }}</span>
                    </div>
                    <div class="data">
                        <img src="{{asset('img/content/location.png')}}" alt="Logo localisation">
                        <span>{{Auth::user()->address}}</span>
                    </div>
                    
                    <div class="data">
                        <img src="{{asset('img/content/telephone.png')}}" alt="Logo phone">
                        <span>{{Auth::user()->phoneNumber}}</span>
                    </div>
        
                </div>
        
                <a style="text-decoration: none;" href="{{ route('notifiacation') }}"  >
                    <div class="aside__notifications">
                        Notifications

                        <div class="aside__notifications__number">+1</div>
                    </div>
                </a>

                <div class="aside__notifications">
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                        <a style="text-decoration: none;" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" >Déconnexion</a>
                    </form>
                </div>
                <br>
                <br>
            </aside>
        
           

            <main>
                @yield('content')
            </main>
        </div>



        <!-- Footer -->
        <footer>
            <div class="footer-block1">
                <div class="left-section">
                    <p class="text_harnix">HARNIX - EVENTS</p>
                </div>
                <div class="center-section">
                    <nav>
                        <ul>
                            <li><a href="/">Accueil</a></li>
                            <li><a href="/events">Événements</a></li>
                            <li><a href="/about">À propos</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="right-section">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
            <hr class="divider">
            <div class="footer-block2"><br>
                <p>2023 Harnix. All rights reserved.
                <span class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookies Settings</a>
                </span></p>
            </div><br>
        </footer>

        <!-- End Footer -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="{{asset('js/carousel.js')}}"></script>
    </body>
</html>


