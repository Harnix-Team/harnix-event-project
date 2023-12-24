@extends("layouts.base")

@section('style')
    <link rel="stylesheet" href="{{asset('css/tout_style.css')}}">
@endsection

@section('title')
    Mot de passe oublié 
@endsection
@section('Content')

    <aside>
        
        <div class="login-container">
            <h1>Mot de passe oublié</h1>
             <p>Vous avez oublié votre mot de passe ? Entrez votre mail pour le réinitialiser</p>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

             <form method="POST" action="{{ route('password.email') }}">
             @csrf
                
                <!-- Email input -->
                <div class="input-group">

                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>
               
                <div class="input-group">
                    <button type="submit">Recevoir un email de reinitialisation</button>
                </div>
            </form>
            <hr class="diviseur" ><br/>
              
        </div>
    </aside>

@endsection

