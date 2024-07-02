<x-guest-layout>

    <!-- source:https://codepen.io/owaiswiz/pen/jOPvEPB -->
<div class="min-h-screen  text-gray-900 flex justify-center">
    <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">

        <div class="flex-1 bg-primary text-center  block lg:flex">

            <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                style="background-image: url('{{ asset('images/image_login.png') }}');">

            </div>


        </div>

        <div class="lg:w-1/2 xl:w-6/12 p-6 sm:p-12">

            <div class="mt-12 flex flex-col items-center">
                <form method="POST"  action="{{ route('register') }}" class="w-full flex-1 -mt-20">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="nom" :value="__('Nom')" />
                        <x-text-input id="nom" class="block mb-3  w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                    </div>

                     <!-- Prenom -->
                     <div>
                        <x-input-label for="prenom" :value="__('Prenom')" />
                        <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                    </div>

                     <!-- Telephone -->
                     <div>
                        <x-input-label for="telephone" :value="__('Telephone')" />
                        <x-text-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-center mt-4">


                        <x-primary-button class=" w-full p-12 mb-6 bg-orange text-center">
                            <span class="pl-52">

                                {{ __('Inscription') }}

                            </span>
                        </x-primary-button>


                    </div>
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 text-center pl-52 my-12 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('si vous avez un compte se connecter') }}
                    </a>
                @endif
                </form>
            </div>
        </div>

    </div>
</div>

</x-guest-layout>
