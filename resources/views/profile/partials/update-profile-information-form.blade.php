<section class="modification_profile">

    <!-- resset personnal information -->
    <form  method="post" action="{{ route('profile.update') }}">
    @csrf
    @method('patch')
        <div>
            <div class="modification_profile__form_personnal">
                <h3>Personnel</h3>
                
                <!-- name -->
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
               

                <!-- Adress email -->
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />


                <!-- localisation -->
                <x-text-input id="adresse" name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->address)" required autofocus autocomplete="address" />
                <x-input-error class="mt-2" :messages="$errors->get('address')" />
               

                <!-- phone number -->
                <x-text-input id="tel" name="phoneNumber" type="text" class="mt-1 block w-full" :value="old('phoneNumber', $user->phoneNumber)" required autofocus autocomplete="phoneNumber" />
                <x-input-error class="mt-2" :messages="$errors->get('phoneNumber')" />


                <!-- Status-->
                <x-text-input id="text" name="status" type="text" class="mt-1 block w-full" :value="old('status', $user->status)" required autofocus autocomplete="status" />
                <x-input-error class="mt-2" :messages="$errors->get('status')" />

                <!-- Date-->
                <x-text-input id="date" name="birth_year" type="text" class="mt-1 block w-full" :value="old('birth_year',  substr(Auth::user()->birth_year,0,10))" required autofocus autocomplete="birth_year" />
                <x-input-error class="mt-2" :messages="$errors->get('birth_year')" />
               


            </div>
            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >Modification réussie !!</p>
            @endif
        <div class="modification_profile__submit_modifications">
            <button type="submit">Enregistrer les modifications</button>
        </div>

    </form>


</section>











