@extends("layouts.base")

@section('style')
    <link rel="stylesheet" href="{{asset('css/tout_style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> 

@endsection

@section('title')
    Registrer
@endsection
@section('Content')

    <aside>
        <div class="login-container">
            <h1>Inscription</h1>
            <p>Entrez vos informations, ou utilisez directement Google</p>

            <!-- Register form -->
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <!-- First Div to connexion -->
                <div id="first-form" >

                    <!-- name -->
                    <div class="input-group">
                        <input type="text" name="name" required autofocus placeholder="Nom complet" autocomplete="name">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>


                    <!-- Email Address -->
                    <div class="input-group">
                        <input type="email" name="email" placeholder="Adresse Mail" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="input-group">
                        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    
                    <!-- Confirm Password -->
                    <div class="input-group">
                        <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" >
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Next button -->
                    <div class="input-group">
                        <button type="button" onclick="showSecondForm()">Continuer</button>
                    </div>
                </div>

                <div id="second-form" style="display: none;">

                    <!-- Gender -->
                    <div class="input-group">
                        <select class="form-select" id="sexe" name="gender" required>
                            <option value="male">Homme</option>
                            <option value="female">Femme</option>
                            <option value="other">Autre</option>
                        </select>                    
                    </div>

                    <!-- Date de naissance  -->
                    <div class="input-group">
                        <input type="date" class="form-control" id="birthdate" name="birthdate" required max="{{ now()->subYears(18)->format('Y-m-d') }}">                    
                    </div>

                    <!-- Localisation -->
                    <div class="input-group">
                        <input type="locale_get_region" id="localisation" name="Localisation" placeholder="Localisation" required>
                    </div>

                    <!-- Numero de téléphone -->
                    <div class="input-group">
                        <input type="number" id="telephone" name="telephone" placeholder="telephone" required>
                    </div>
                    

                    <div class="input-group">
                        <button type="submit">S'inscrire</button>
                    </div>


                    <div class="input-group">
                        <button type="button" onclick="showFirstForm()">Revenir</button>
                    </div>
                </div>

            </form>

           
            <hr class="diviseur" ><br/>
            <div class="p-connexion"> <i class="fab fa-google"></i> Se connecter avec Google</div> <br/>
            <div class="p-connexion"> <i class="fab fa-facebook"></i> Se connecter avec Facebook</div>
            <br/>
           
            <div class="create-account">
                <p>J'ai déjà un compte - <a href="{{ route('login') }}">Connexion</a></p>
            </div>
        </div>
    </aside>

@endsection

<script src="{{asset('js/javas.js')}}"></script>



