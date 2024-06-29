<x-admin-layout>
    <div class="container mx-auto gap-2 px-4">
        <h1 class="text-3xl mb-11 font-bold ">Dashboard</h1>
        <div class="block flex-row">

            <div class="bg-no-repeat flex justify-between  bg-[#3C2A4D] border border-red-300 rounded-2xl w-full mr-2 p-6"
                style="background-image: url(https://previews.dropbox.com/p/thumb/AAvyFru8elv-S19NMGkQcztLLpDd6Y6VVVMqKhwISfNEpqV59iR5sJaPD4VTrz8ExV7WU9ryYPIUW8Gk2JmEm03OLBE2zAeQ3i7sjFx80O-7skVlsmlm0qRT0n7z9t07jU_E9KafA9l4rz68MsaZPazbDKBdcvEEEQPPc3TmZDsIhes1U-Z0YsH0uc2RSqEb0b83A1GNRo86e-8TbEoNqyX0gxBG-14Tawn0sZWLo5Iv96X-x10kVauME-Mc9HGS5G4h_26P2oHhiZ3SEgj6jW0KlEnsh2H_yTego0grbhdcN1Yjd_rLpyHUt5XhXHJwoqyJ_ylwvZD9-dRLgi_fM_7j/p.png?fv_content=true&size_mode=5); background-position: 90% center;">
                <div class="block pt-7 px-20">
                    <p class="text-xl text-white">Evenements </p>
                    <div class="block px-10 ">
                        <p class="text-3xl text-white">{{ $evenements->count() }}</p>
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
                                    <div class="text-gray-500">Associations</div>

                                    <h4 class="text-2xl font-semibold text-gray-700">{{ $associations->count() }}</h4>
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
                                    <div class="text-gray-500">Utilisateurs</div>

                                    <h4 class="text-2xl font-semibold text-gray-700">{{ $utilisateurs->count() }}</h4>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="flex flex-row">
            @php
            $headers = ['Nom', 'Adresse', 'Téléphone', 'Nombre d\'événements', 'Actions'];
            $columns = ['nom', 'adresse', 'contact', 'evenements_count'];
            $actions = [
                [
                    'url' => function ($item) {
                        return route('associations.edit', $item->id);
                    },
                    'class' => 'text-indigo-600 hover:text-indigo-900',
                    'icon' =>
                        '<svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 12C12.25 12 13.3125 11.5625 14.1875 10.6875C15.0625 9.8125 15.5 8.75 15.5 7.5C15.5 6.25 15.0625 5.1875 14.1875 4.3125C13.3125 3.4375 12.25 3 11 3C9.75 3 8.6875 3.4375 7.8125 4.3125C6.9375 5.1875 6.5 6.25 6.5 7.5C6.5 8.75 6.9375 9.8125 7.8125 10.6875C8.6875 11.5625 9.75 12 11 12ZM11 10.2C10.25 10.2 9.6125 9.9375 9.0875 9.4125C8.5625 8.8875 8.3 8.25 8.3 7.5C8.3 6.75 8.5625 6.1125 9.0875 5.5875C9.6125 5.0625 10.25 4.8 11 4.8C11.75 4.8 12.3875 5.0625 12.9125 5.5875C13.4375 6.1125 13.7 6.75 13.7 7.5C13.7 8.25 13.4375 8.8875 12.9125 9.4125C12.3875 9.9375 11.75 10.2 11 10.2ZM11 15C8.56667 15 6.35 14.3208 4.35 12.9625C2.35 11.6042 0.9 9.78333 0 7.5C0.9 5.21667 2.35 3.39583 4.35 2.0375C6.35 0.679167 8.56667 0 11 0C13.4333 0 15.65 0.679167 17.65 2.0375C19.65 3.39583 21.1 5.21667 22 7.5C21.1 9.78333 19.65 11.6042 17.65 12.9625C15.65 14.3208 13.4333 15 11 15ZM11 13C12.8833 13 14.6125 12.5042 16.1875 11.5125C17.7625 10.5208 18.9667 9.18333 19.8 7.5C18.9667 5.81667 17.7625 4.47917 16.1875 3.4875C14.6125 2.49583 12.8833 2 11 2C9.11667 2 7.3875 2.49583 5.8125 3.4875C4.2375 4.47917 3.03333 5.81667 2.2 7.5C3.03333 9.18333 4.2375 10.5208 5.8125 11.5125C7.3875 12.5042 9.11667 13 11 13Z" fill="#3C2A4D"/></svg>',
                ],
                [
                    'url' => function ($item) {
                        return route('associations.destroy', $item->id);
                    },
                    'class' => 'ml-2 text-red-600 hover:text-red-900',
                    'icon' =>
                        '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.304 2.84436L15.156 5.69636M5 5.00036H2C1.73478 5.00036 1.48043 5.10572 1.29289 5.29325C1.10536 5.48079 1 5.73514 1 6.00036V16.0004C1 16.2656 1.10536 16.5199 1.29289 16.7075C1.48043 16.895 1.73478 17.0004 2 17.0004H13C13.2652 17.0004 13.5196 16.895 13.7071 16.7075C13.8946 16.5199 14 16.2656 14 16.0004V11.5004M16.409 1.59036C16.5964 1.77767 16.745 2.00005 16.8464 2.24481C16.9478 2.48958 17 2.75192 17 3.01686C17 3.2818 16.9478 3.54414 16.8464 3.78891C16.745 4.03367 16.5964 4.25605 16.409 4.44336L9.565 11.2874L6 12.0004L6.713 8.43536L13.557 1.59136C13.7442 1.4039 13.9664 1.25517 14.2111 1.1537C14.4558 1.05223 14.7181 1 14.983 1C15.2479 1 15.5102 1.05223 15.7549 1.1537C15.9996 1.25517 16.2218 1.4039 16.409 1.59136V1.59036Z" stroke="#E06F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                ],
            ];
        @endphp

        <div class=" mx-auto gap-2  px-4">
            <h1 class="text-3xl pt-6 -mb-11 font-bold ">Liste des Associations</h1>
            <x-dynamic-table :headers="$headers" :donnee="$associations" :columns="$columns" :actions="$actions" />
        </div>          
                    

              <div class=" mx-auto gap-2  px-4 rounded-xl w-5/12 ml-2 p-6 ">
                @php
                $headers = ['Nom',  'Status',''];
                $columns = ['nom', 'etat'];
                $actions = [
            
                [
                'url' => function($item) { return route('associations.edit', $item->id); },
                'class' => 'text-indigo-600 hover:text-indigo-900',
                'icon' => ''
            ],
              ];      
            @endphp
                <h1 class=" text-3xl -mb-40 text-indigo-900">Utilisateurs</strong></h1>
                <x-dynamic-table :headers="$headers" :donnee="$utilisateurs" :columns="$columns" :actions="$actions" />
            </div>
            </div>

            <div class=" py-1">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-blac mb-8">Nos evenements</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                        @foreach($evenements as $evenement)
                        <div class="bg-white rounded-lg shadow-lg p-8">
                            <div class="relative overflow-hidden">
                                <img class="object-cover w-full h-full" src="https://simplon.sn/wp-content/uploads/2024/01/IMG_6720-scaled.jpg" alt="Product">
                                {{-- <img class="object-cover w-full h-full" src="{{$evenement->image}}" alt="{{$evenement->nom}}"> --}}
                                <div class="absolute inset-0 bg-black opacity-40"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 ">{{$evenement->association->nom}}</h3>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-gray-900 font-bold text-lg">{{$evenement->nom}}</span>
                                <button class=" text-gray-600 py-2 px-4 rounded-full font-bold ">{{$evenement->created_at}}</button>
                            </div>
                            <p class="text-gray-500 text-sm mt-2">{{$evenement->description}}</p>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-gray-900 font-bold text-lg">{{$evenement->nombre_place}}</span>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
            
                </div>
            </div>
          </div>





</x-admin-layout>
