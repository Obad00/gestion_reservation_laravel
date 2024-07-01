<x-guest-layout>
        <div class="min-h-screen text-gray-900 flex justify-center">
            <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
                <div class="flex-1 bg-[#3C2A4D] text-center block lg:flex">
                    <!-- Section de l'image de l'événement -->
                    <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                        style="background-image: url('{{ asset('images/image_login.png') }}');">
                        <!-- Nom de l'événement -->
                        <div class="name">{{ $evenement->nom }}</div>
                    </div>
                </div>

                <!-- Formulaire d'inscription -->
                <div class="lg:w-1/2 xl:w-6/12 p-6 sm:p-12">
                    <div class="mt-12 flex flex-col items-center">
                        <!-- Formulaire avec méthode POST pour soumettre les données -->
                        <form method="POST" action="{{ route('register') }}" class="w-full flex-1 -mt-20">
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
