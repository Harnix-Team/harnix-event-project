@extends("layouts.base")

@section('style')
    <link rel="stylesheet" href="{{asset('css/tout_style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> 
@endsection

@section('title')
    Connexion
@endsection
@section('Content')

    <aside>
        
        <div class="login-container">
            <h1>Connexion</h1>
             <p>Entrez vos informations, ou utilisez directement  google</p>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

             <!-- Login form -->
             <form method="POST" action="{{ route('login') }}">
             @csrf
             
                <!-- Email Address -->
                <div class="input-group">
                    <input id="email" type="email" name="email" required autofocus placeholder="Email" autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>


                <!-- Password -->
                <div class="input-group">
                    <input id="password"  type="password" name="password" required placeholder="Mot de passe" autocomplete="current-password" >
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                 <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Se souvenir de moi !!</span>
                    </label>
                </div>

                <div class="input-group">
                    <button type="submit">Connexion</button>
                </div>
                
            </form>

            <hr class="diviseur" ><br/>
                <div class="p-connexion"> <i class="fab fa-google"></i> Se connecter avec Google</div> <br/>
                <div class="p-connexion"> </i><i class="fab fa-facebook"></i> Se connecter avec Facebook</div>
           <br/>

           <!-- Forgot Password -->
           @if (Route::has('password.request'))
                <div class="forgot-password">
                    <a href="{{ route('password.request') }}">Vous avez oublié votre mot de passe  ?</a>
                </div>
            @endif
            

            <!-- Create account -->
            <div class="create-account">
                <p>Je n'ai pas de compte ? <a href="{{ route('register') }}">Inscription</a></p>
            </div>
        </div>
    </aside>


@endsection


