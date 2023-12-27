<section>

    <form method="post" action="{{ route('password.update') }}">
    @csrf
    @method('put')
        <div class="modification_profile__form_personnal">
            <h3> Changer de mot de passe</h3>
            
            <x-text-input id="update_password_current_password" name="current_password" type="password" placeholder="Ancien mot de passe" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />

       
            <x-text-input id="update_password_password" name="password" type="password" placeholder="Nouveau mot de passe"  autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />

        
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" placeholder="Confirmer nouveau mot de passe" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >Mot de passe modifié avec succès !!</p>
            @endif
        </div>
        <div class="flex items-center gap-4">
            <div class="modification_profile__submit_modifications">
                <button type="submit">Enregistrer les modifications</button>
            </div>
        </div>
    </form>
</section>
