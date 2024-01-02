<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="{{asset('img/sociallink/logo.SVG')}}">


        <title>{{ config('app.name', 'Ticketche')}} >> @yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        
       
        <!-- Content style  -->
        @yield('style')

        <!-- Footer and header css -->
        <link rel="stylesheet" href="{{asset('css/header.css')}}">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
      
    </head>
    <body>

        <!-- Header -->
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
            </div>

            <div class="header-block2">
                <nav>
                    <ul>
                        <li><a href="/">Accueil</a></li>
                        <li><a href="/events">Événements</a></li>
                        <li><a href="#">CanalOlympia</a></li>
                        <li><a href="/about">À propos</a></li>

                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{route('dashboard')}}">Tableau de Bord</a></li>
                            @endauth
                        @endif

                    </ul>
                </nav>
                
                
                <a href="{{ route('create-event') }}"><button class="create-event-btn"> + Créer un événement</button></a> 

                    
            </div>      

        </header>
        <!-- end header -->

        @if (Route::has('login'))
            @auth
            <div class="main-container">
                <div class="side-bar">
                    <div class="icon-container">
                        <i class="fas fa-cogs"></i>
                        <i class="fas fa-bell"></i>
                        <i class="fas fa-chart-line"></i>
                        <i class="fas fa-file-alt"></i>
                    </div>
                </div>
            @endauth
        @endif
        
        @yield('dash')



        <!-- Footer -->
        <footer>
            <hr class="divider">
            <div class="footer-block1">
                <div class="left-section">
                    <p  class="text_harnix"><strong>HARNIX-EVENTS</strong></p>
                </div>
                <div class="center-section">
                    <nav>
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li><a href="">Événements</a></li>
                            <li><a href="">À propos</a></li>
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
            <div class="footer-block2">
                <p>2023 Harnix. All rights reserved.
                <span class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookies Settings</a>
                </span></p>
            </div>
        </footer>

        <!-- End Footer -->
       
        <!-- <script src="{{asset('js/modification-event-step1.js')}}"></script> -->

    </body>
</html>
