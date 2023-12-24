<section class="space-y-6">

    <div class="modification_profile__submit_modifications">
        <button style="background-color: red; " type="submit">Supprimer mon compte</button>
    </div>


    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Etes vous sûr de vouloir supprimé votre compte ? Cela supprimé toutes vos informations et les événements associés !!
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
               Entrez vos donnez de connexion pour supprimez votre compte !!!
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    Annuler 
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    Supprimer le compte 
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
