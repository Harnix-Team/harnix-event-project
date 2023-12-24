
@extends("layouts.base")

@section('style')
    <link rel="stylesheet" href="{{asset('css/tout_style.css')}}">

@endsection

@section('title')
    Registrer
@endsection
@section('Content')

    <aside>
        <div class="login-container">
            <h1>Réinitialisation</h1>

            <!-- Register form -->
            <form method="POST" action="{{ route('password.store') }}">
            @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">


                <!-- Email Address -->
                <div class="input-group">
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" placeholder="email"  />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="input-group">
                    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Mot de passe">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                
                <!-- Confirm Password -->
                <div class="input-group">
                    <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer mot de passe">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Submit button -->
                <div class="input-group">
                    <button type="submit" ">Réinitialiser</button>
                </div>

               
            </form>

        
        </div>
    </aside>

@endsection


