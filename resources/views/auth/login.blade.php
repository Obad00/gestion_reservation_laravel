<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- source:https://codepen.io/owaiswiz/pen/jOPvEPB -->
    <div class="min-h-screen  text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">

            <div class="flex-1 bg-primary text-center  block lg:flex">

                <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                    style="background-image: url('{{ asset('images/image_login.png') }}');">

                </div>


            </div>

            <div class="lg:w-1/2 xl:w-6/12 p-6 sm:p-12 justify-center item-center">
                <div class="center mx-52  py-12  item-center  justify-center">

                    <h2 class="item-center text-3xl justify-center">Connexion</h2>

                </div>

                <div class="mt-12 flex flex-col items-center">


                    <form method="POST" action="{{ route('login') }}" class="w-full flex-1 -mt-20">
                        @csrf

                        <!-- Name -->


                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                    name="remember">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-center mt-4">


                            <x-primary-button class=" w-full p-12 mb-6 bg-orange text-center">
                                <span class="pl-52">

                                    {{ __('Connexion') }}

                                </span>
                            </x-primary-button>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 text-center pl-52 my-12 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublier?') }}
                        </a>
                    @endif
                </div>

                </form>
            </div>
        </div>

    </div>
    </div>

</x-guest-layout>
