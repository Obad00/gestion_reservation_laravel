<x-guest-layout>
    <div class="min-h-screen text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="flex-1 bg-primary text-center block lg:flex">
                <!-- Section de l'image de l'événement -->
                <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                    style="background-image: url('{{ asset('images/image_login.png') }}');">
                    <!-- Nom de l'événement -->
                    <div class="name">{{ $evenement->nom }}</div>
                </div>
            </div>
  {{-- MODAL --}}
  <div class="grid justify-between">
    <div></div>
  <div id="modelConfirm"
  class="fixed   z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-2/4 px-4 ">
  <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">

      <div class="flex justify-end p-2">
          <button onclick="closeModal('modelConfirm')" type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
              </svg>
          </button>
      </div>

      <div class="p-6 pt-0 text-center">
          <svg class="w-20 h-20 text-red-600 mx-auto" fill="none" stroke="currentColor"
              viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <h3 class="text-xl font-normal text-gray-500 mt-5 mb-6">Êtes-vous sûr de vouloir debloquer cet utilisateur ?
              </h3>


          <form action="{{ route('utilisateurs.bloque', $evenement->id) }}" method="POST">
              @csrf
              @method('put')
              <input type="hidden" name="etat" placeholder="nom role">
              <button
                  class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2"
                  type="submit"> Bloqué(e)</button>
          </form> <a href="#" onclick="closeModal('modelConfirm')"
              class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center"
              data-modal-toggle="delete-user-modal">
              Annuler
          </a>
      </div>


  </div>
</div>
</div>
            <!-- Formulaire d'inscription -->
            <div class="lg:w-1/2 xl:w-6/12 p-6 sm:p-12">
                <div class="mt-12 flex flex-col items-center">
                    <!-- Formulaire avec méthode POST pour soumettre les données -->
                    <form method="POST" action="{{ route('register.store.admin') }}" class="w-full flex-1 -mt-20">
                        @csrf <!-- Protection CSRF -->

                        <!-- Champ Nom -->
                        <div>
                            <x-input-label for="nom" :value="__('Nom')" />
                            <x-text-input id="nom" class="block mb-3 px-20 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                        </div>

                        <!-- Champ Prénom -->
                        <div>
                            <x-input-label for="prenom" :value="__('Prénom')" />
                            <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                        </div>

                        <!-- Champ Téléphone -->
                        <div>
                            <x-input-label for="telephone" :value="__('Téléphone')" />
                            <x-text-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                        </div>

                        <!-- Champ Email -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Champ Mot de passe -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Mot de passe')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Champ Confirmation de mot de passe -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirmez le mot de passe')" />
                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <!-- Bouton de soumission -->
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Inscription') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-guest-layout>
