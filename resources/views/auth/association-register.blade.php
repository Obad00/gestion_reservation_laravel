
<form method="POST" action="{{ route('association-register.store') }}">
    @csrf

<x-guest-layout>
    <div class="min-h-screen text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="flex-1 text-center block lg:flex" style="background-color: #3C2A4D;">
                <!-- Section de l'image de l'événement -->
                <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat" style="background-image: url('{{ asset('images/image1.png') }}');">
                    <!-- Nom de l'événement -->
                    {{-- <div class="name">{{ $evenement->nom }}</div> --}}
                </div>
            </div>
            {{-- <header class="banner">
        <div class="banner-content">
            <h1>Bienvenue sur OnyxEvents</h1>
            <p>Vivez une expérience inoubliable avec nos événements exceptionnels.</p>
        </div>
    </header> --}}


        {{-- <div>
            <img src="{{ $evenement->image }}" alt="Image de l'événement">
        </div> --}}
        {{-- <div class="banner-content">
            <h1>{{ $evenement->nom }}</h1>
            <p>{{ $evenement->description }}</p>
            <div class="but">
                <div>
                    <a href="#" class="btn">En savoir plus</a>
                </div>
                <div class="flex justify-center mt-8">
                    <a href="{{ route('evenements.detail', $evenement->id) }}" class="btn">En savoir plus</a>            </div>
                </div>
            </div>
        </div> --}}

            <!-- Formulaire d'inscription -->
            <div class="lg:w-1/2 xl:w-6/12 p-6 sm:p-12">
                <div class="mt-12 flex flex-col items-center">
                    <!-- Timeline -->
                    <div class="w-full flex justify-around mb-8">
                        <div id="timeline-step-1" class="timeline-step active">
                            <div class="timeline-circle">1</div>
                            <div class="timeline-label">Informations personnelles</div>
                        </div>
                        <div id="timeline-step-2" class="timeline-step">
                            <div class="timeline-circle">2</div>
                            <div class="timeline-label">Informations de l'association</div>
                        </div>
                    </div>

                    <!-- Formulaire avec méthode POST pour soumettre les données -->
                    <form method="POST" action="{{ route('association-register') }}" class="w-full flex-1">
                        @csrf <!-- Protection CSRF -->

                        <!-- Étape 1: Champs pour l'utilisateur -->
                        <div id="step-1">
                            <h2 class="text-2xl mb-6">Informations personnelles</h2>

                            <div>
                                <x-input-label for="nom" :value="__('Nom')" />
                                <x-text-input id="nom" class="block mb-3 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="prenom" :value="__('Prénom')" />
                                <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="telephone" :value="__('Téléphone')" />
                                <x-text-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Mot de passe')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirmez le mot de passe')" />
                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <button type="button" style="background-color: #E06F1F;" class="mt-6  text-white py-2 px-4 rounded" onclick="nextStep(1, 2)">Suivant</button>
                        </div>

                        <!-- Étape 2: Champs pour l'association -->
                        <div id="step-2" style="display: none;">
                            <h2 class="text-2xl mb-6">Informations de l'association</h2>

                            <div>
                                <x-input-label for="association_nom" :value="__('Nom de l\'association')" />
                                <x-text-input id="association_nom" class="block mt-1 w-full" type="text" name="association_nom" :value="old('association_nom')" required />
                                <x-input-error :messages="$errors->get('association_nom')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Description')" />
                                <textarea id="description" name="description" class="block mt-1 w-full rounded-md border-gray-300" required>{{ old('description') }}</textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="logo" :value="__('Logo (URL)')" />
                                <x-text-input id="logo" class="block mt-1 w-full" type="text" name="logo" :value="old('logo')" required />
                                <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="adresse" :value="__('Adresse')" />
                                <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required />
                                <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="contact" :value="__('Contact')" />
                                <x-text-input id="contact" class="block mt-1 w-full" type="number" name="contact" :value="old('contact')" required />
                                <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="secteur" :value="__('Secteur')" />
                                <x-text-input id="secteur" class="block mt-1 w-full" type="text" name="secteur" :value="old('secteur')" required />
                                <x-input-error :messages="$errors->get('secteur')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="ninea" :value="__('NINEA')" />
                                <x-text-input id="ninea" class="block mt-1 w-full" type="text" name="ninea" :value="old('ninea')" required />
                                <x-input-error :messages="$errors->get('ninea')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="date_creation_association" :value="__('Date de création')" />
                                <x-text-input id="date_creation_association" class="block mt-1 w-full" type="date" name="date_creation_association" :value="old('date_creation_association')" required />
                                <x-input-error :messages="$errors->get('date_creation_association')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="etat" :value="__('État')" />
                                <input id="etat" class="block mt-1" type="checkbox" name="etat" value="1" {{ old('etat') ? 'checked' : '' }} required>
                                <x-input-error :messages="$errors->get('etat')" class="mt-2" />
                            </div>

                            <button type="button" style="background-color: #3C2A4D;" class="mt-6  text-white py-2 px-4 rounded mr-2" onclick="nextStep(2, 1)">Précédent</button>
                            <button type="submit" style="background-color: #E06F1F;" class="mt-6 text-white py-2 px-4 rounded">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .timeline-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100px;
        }

        .timeline-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
        }

        .timeline-label {
            margin-top: 8px;
            font-size: 14px;
            text-align: center;
        }

        .timeline-step.active .timeline-circle {
            background-color: #E06F1F; /* Blue */
            color: white;
        }
    </style>

    <script>
        function nextStep(currentStep, nextStep) {
            document.getElementById(`step-${currentStep}`).style.display = 'none';
            document.getElementById(`step-${nextStep}`).style.display = 'block';

            document.getElementById(`timeline-step-${currentStep}`).classList.remove('active');
            document.getElementById(`timeline-step-${nextStep}`).classList.add('active');
        }
    </script>
</x-guest-layout>
