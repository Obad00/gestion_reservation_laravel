<x-association-layout>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        
    </style>
    <div class="container mx-auto gap-2 px-4">
        <h1 class="text-3xl mb-11 font-bold ">Dashboard</h1>
        <div class="block flex-row">

            <div class="bg-no-repeat flex justify-between  bg-[#3C2A4D] border border-red-300 rounded-2xl w-full mr-2 p-6"
                style="background-image: url(https://previews.dropbox.com/p/thumb/AAvyFru8elv-S19NMGkQcztLLpDd6Y6VVVMqKhwISfNEpqV59iR5sJaPD4VTrz8ExV7WU9ryYPIUW8Gk2JmEm03OLBE2zAeQ3i7sjFx80O-7skVlsmlm0qRT0n7z9t07jU_E9KafA9l4rz68MsaZPazbDKBdcvEEEQPPc3TmZDsIhes1U-Z0YsH0uc2RSqEb0b83A1GNRo86e-8TbEoNqyX0gxBG-14Tawn0sZWLo5Iv96X-x10kVauME-Mc9HGS5G4h_26P2oHhiZ3SEgj6jW0KlEnsh2H_yTego0grbhdcN1Yjd_rLpyHUt5XhXHJwoqyJ_ylwvZD9-dRLgi_fM_7j/p.png?fv_content=true&size_mode=5); background-position: 90% center;">
                <div class="block pt-7 px-20">
                    <p class="text-xl text-white">Evenements Passes </p>
                    <div class="block px-10 ">=
                        <p class="text-3xl text-white">{{ $reservations->count() }}</p>
                        <span class=" text-xl text-orange-600 inline-block rounded-full   py-1">incrits</span>
                    </div>
                </div>
                <div class="m-6">
                    <div class="flex flex-wrap px-12">
                        <div class="w-full px-9 sm:w-1/2 xl:w-1/2 ">
                            <div class="flex items-center px-5 py-6 shadow-sm rounded-3xl w-full pr-24  bg-slate-100">
                                <div class="p-3 rounded-full bg-orange-500 bg-opacity-75">
                                    <svg class="h-8 w-8 text-white" viewBox="0 0 28 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svgfull
                                <path
                                    d="M18.2
                                        9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373
                                        9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2
                                        6.64043 18.2 9.08889Z" fill="currentColor"></path>
                                        <path
                                            d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>

                                <div class="mx-5">
                                    <div class="text-gray-500">Resevation en cours</div>

                                    <h4 class="text-2xl font-semibold text-gray-700">{{ $countReservationsEncour }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-9 sm:w-1/2  xl:w-1/2">
                            <div class="flex items-center px-5 py-6 shadow-sm rounded-3xl bg-slate-100">
                                <div class="p-3 rounded-full bg-orange-700 bg-opacity-75">
                                    <svg class="h-8 w-8 text-white" viewBox="0 0 28 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>

                                <div class="mx-5">
                                    <div class="text-gray-500">Evenements </div>

                                    <h4 class="text-2xl font-semibold text-gray-700">{{ $countReservationsEncour }}</h4>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class=" mt-10 gap-6 gap-x-32  flex">
            <div class="x gap-9">



                <div class="flex justify-between mb-9">
                    <h1 class="text-3xl font-bold ">Evenement: {{ $dernierEvenement->nom }}</h1>

                </div>


                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-green-700 px-4 py-3 rounded mb-6">
                        {{ session('error') }}
                    </div>
                @endif
                <table class="min-w-full divide-y gap-7 w- p-48 divide-gray-200 overflow-x-auto">
                    <thead class="bg-gray-50">
                        <tr>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nom
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Telephone
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y my-7  divide-gray-200">

                        @foreach ($reservationsDernierEvenement as $reservation)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class=" pt-2 flex-shrink-0 h-10 w-10">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 15H11V11H15V9H11V5H9V9H5V11H9V15ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20ZM10 18C12.2333 18 14.125 17.225 15.675 15.675C17.225 14.125 18 12.2333 18 10C18 7.76667 17.225 5.875 15.675 4.325C14.125 2.775 12.2333 2 10 2C7.76667 2 5.875 2.775 4.325 4.325C2.775 5.875 2 7.76667 2 10C2 12.2333 2.775 14.125 4.325 15.675C5.875 17.225 7.76667 18 10 18Z"
                                                    fill="#E06F1F" />
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $reservation->user->prenom }}
                                                {{ $reservation->user->nom }}
                                            </div>

                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($reservation->user->etat == true)
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Acceptee
                                        </span>
                                    @else
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Bloquee
                                        </span>
                                    @endif
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $reservation->user->telephone }} </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $reservation->user->email }} </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $reservation->user->created_at }} </td>
                                <td class="px-6 gap-3 pt-6 whitespace-nowrap flex  text-sm font-medium">
                                    {{-- <a href="{{ route('utilisateurs.show', $utilisateur->id) }}"
                                class="text-indigo-600 hover:text-indigo-900"><svg width="22" height="15"
                                    viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 12C12.25 12 13.3125 11.5625 14.1875 10.6875C15.0625 9.8125 15.5 8.75 15.5 7.5C15.5 6.25 15.0625 5.1875 14.1875 4.3125C13.3125 3.4375 12.25 3 11 3C9.75 3 8.6875 3.4375 7.8125 4.3125C6.9375 5.1875 6.5 6.25 6.5 7.5C6.5 8.75 6.9375 9.8125 7.8125 10.6875C8.6875 11.5625 9.75 12 11 12ZM11 10.2C10.25 10.2 9.6125 9.9375 9.0875 9.4125C8.5625 8.8875 8.3 8.25 8.3 7.5C8.3 6.75 8.5625 6.1125 9.0875 5.5875C9.6125 5.0625 10.25 4.8 11 4.8C11.75 4.8 12.3875 5.0625 12.9125 5.5875C13.4375 6.1125 13.7 6.75 13.7 7.5C13.7 8.25 13.4375 8.8875 12.9125 9.4125C12.3875 9.9375 11.75 10.2 11 10.2ZM11 15C8.56667 15 6.35 14.3208 4.35 12.9625C2.35 11.6042 0.9 9.78333 0 7.5C0.9 5.21667 2.35 3.39583 4.35 2.0375C6.35 0.679167 8.56667 0 11 0C13.4333 0 15.65 0.679167 17.65 2.0375C19.65 3.39583 21.1 5.21667 22 7.5C21.1 9.78333 19.65 11.6042 17.65 12.9625C15.65 14.3208 13.4333 15 11 15ZM11 13C12.8833 13 14.6125 12.5042 16.1875 11.5125C17.7625 10.5208 18.9667 9.18333 19.8 7.5C18.9667 5.81667 17.7625 4.47917 16.1875 3.4875C14.6125 2.49583 12.8833 2 11 2C9.11667 2 7.3875 2.49583 5.8125 3.4875C4.2375 4.47917 3.03333 5.81667 2.2 7.5C3.03333 9.18333 4.2375 10.5208 5.8125 11.5125C7.3875 12.5042 9.11667 13 11 13Z"
                                        fill="#3C2A4D" />
                                </svg>
                            </a> --}}
                                    <a href="#" class="ml-2 text-red-600 hover:text-red-900"
                                        onclick="openModal('modelConfirm')">
                                        <svg width="18" height="18"
                                            viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.304 2.84436L15.156 5.69636M5 5.00036H2C1.73478 5.00036 1.48043 5.10572 1.29289 5.29325C1.10536 5.48079 1 5.73514 1 6.00036V16.0004C1 16.2656 1.10536 16.5199 1.29289 16.7075C1.48043 16.895 1.73478 17.0004 2 17.0004H13C13.2652 17.0004 13.5196 16.895 13.7071 16.7075C13.8946 16.5199 14 16.2656 14 16.0004V11.5004M16.409 1.59036C16.5964 1.77767 16.745 2.00005 16.8464 2.24481C16.9478 2.48958 17 2.75192 17 3.01686C17 3.2818 16.9478 3.54414 16.8464 3.78891C16.745 4.03367 16.5964 4.25605 16.409 4.44336L9.565 11.2874L6 12.0004L6.713 8.43536L13.557 1.59136C13.7442 1.4039 13.9664 1.25517 14.2111 1.1537C14.4558 1.05223 14.7181 1 14.983 1C15.2479 1 15.5102 1.05223 15.7549 1.1537C15.9996 1.25517 16.2218 1.4039 16.409 1.59136V1.59036Z"
                                                stroke="#E06F1F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            {{-- MODAL --}}
                            <div id="modelConfirm"
                                class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 ">
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
                                        <svg class="w-20 h-20 text-red-600 mx-auto" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <h3 class="text-xl font-normal text-gray-500 mt-5 mb-6">Êtes-vous sûr de
                                            vouloir debloquer cet utilisateur ?</h3>


                                        <form action="{{ route('admins.index') }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="etat" placeholder="nom role">
                                            <button
                                                class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2"
                                                type="submit"> Debloqué(e)</button>
                                        </form> <a href="#" onclick="closeModal('modelConfirm')"
                                            class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center"
                                            data-modal-toggle="delete-user-modal">
                                            Annuler
                                        </a>
                                    </div>


                                </div>
                            </div>
                        @endforeach







                        <!-- More rows... -->

                    </tbody>
                </table>



            </div>
            <div class=" bg-white px-4 rounded-lg w-full mt-16 -ml-14 evenements">
                <div class="max-w-xl ml-auto p-8">
                    <h1 class="text-xl font-bold mb-7 ">Mes evenements</h1>

                    <div class="flow-root">
                        <ul class="mb-8   ">

                            @foreach ($evenements as $evenement)
                                <li>
                                    <div class="relative   pb-8">
                                        <span class="absolute top-5 left-5 -ml-px h-11 my-5 w-0.5 bg-gray-200"
                                            aria-hidden="true"></span>
                                        <div class="relative flex items-start space-x-3">
                                            <div>
                                                <div class="relative px-1">
                                                    <div
                                                        class="h-8 w-8  rounded-full ring-8 ring-white text-green-400 flex items-center justify-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-bell-fill" viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="min-w-0 flex-1 py-0">
                                                <div class="text-md text-gray-500">
                                                    <div>
                                                        <a href="#"
                                                            class="font-medium text-gray-900 mr-2">{{ $evenement->nom }}</a>
                                                    </div>
                                                    <span
                                                        class="whitespace-nowrap text-sm">{{ $evenement->date_evenement }}</span>
                                                </div>
                                                <div class="mt-2 text-gray-700">
                                                    <!-- Additional content here -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            @foreach ($evenements as $evenement)
                            <li>
                                <div class="relative   pb-8">
                                    <span class="absolute top-5 left-5 -ml-px h-11 my-5 w-0.5 bg-gray-200"
                                        aria-hidden="true"></span>
                                    <div class="relative flex items-start space-x-3">
                                        <div>
                                            <div class="relative px-1">
                                                <div
                                                    class="h-8 w-8  rounded-full ring-8 ring-white text-green-400 flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-bell-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="min-w-0 flex-1 py-0">
                                            <div class="text-md text-gray-500">
                                                <div>
                                                    <a href="#"
                                                        class="font-medium text-gray-900 mr-2">{{ $evenement->nom }}</a>
                                                </div>
                                                <span
                                                    class="whitespace-nowrap text-sm">{{ $evenement->date_evenement }}</span>
                                            </div>
                                            <div class="mt-2 text-gray-700">
                                                <!-- Additional content here -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        @foreach ($evenements as $evenement)
                        <li>
                            <div class="relative   pb-8">
                                <span class="absolute top-5 left-5 -ml-px h-11 my-5 w-0.5 bg-gray-200"
                                    aria-hidden="true"></span>
                                <div class="relative flex items-start space-x-3">
                                    <div>
                                        <div class="relative px-1">
                                            <div
                                                class="h-8 w-8  rounded-full ring-8 ring-white text-green-400 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-bell-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="min-w-0 flex-1 py-0">
                                        <div class="text-md text-gray-500">
                                            <div>
                                                <a href="#"
                                                    class="font-medium text-gray-900 mr-2">{{ $evenement->nom }}</a>
                                            </div>
                                            <span
                                                class="whitespace-nowrap text-sm">{{ $evenement->date_evenement }}</span>
                                        </div>
                                        <div class="mt-2 text-gray-700">
                                            <!-- Additional content here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach



                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <script type="text/javascript">
            window.openModal = function(modalId) {
                document.getElementById(modalId).style.display = 'block'
                document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
            }

            window.closeModal = function(modalId) {
                document.getElementById(modalId).style.display = 'none'
                document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
            }

            // Close all modals when press ESC
            document.onkeydown = function(event) {
                event = event || window.event;
                if (event.keyCode === 27) {
                    document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
                    let modals = document.getElementsByClassName('modal');
                    Array.prototype.slice.call(modals).forEach(i => {
                        i.style.display = 'none'
                    })
                }
            };
        </script>
</x-association-layout>
