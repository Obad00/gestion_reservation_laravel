<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
<x-association-layout>
    <style>
        .btn-icon {
            margin-top: 10px;
            display: inline-block;
            font-size: 1.5rem;
            color: #4A5568;
            transition: color 0.3s;
        }

        .btn-icon:hover {
            color: #2D3748;
        }
    </style>
    </head>

    <body class="bg-gray-100">


        <!-- Sidebar -->
        <style>
            .active {
                background-color: #574F7D;
                /* Couleur de fond pour l'élément actif */
                color: #ffffff;
                margin: 8px
                    /* Couleur de texte pour l'élément actif */
            }

            .active>span {
                /* Couleur de fond pour l'élément actif */
                color: #ffffff;
                /* Couleur de texte pour l'élément actif */
            }
        </style>

        <body class="font-sans container antialiased">
            @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif
            @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-green-700 px-4 py-3 rounded mb-6">
                {{session('error') }}
            </div>
             @endif
            <div class=" container bg-gray-100">
                <div class="flex  bg-gray-100">



                    <!-- Main Content -->
                    <div class="container mx-auto px-4 py-8">
                        <div class=" justify-between flex">

                            <h2 class="text-3xl font-semibold mb-6">Mes événements passe</h2>
                            <a href="#" id="openModalBtn"
                                class="inline-block bg-orange hover:bg-orange text-white font-bold py-2 px-4 rounded mb-4">Ajouter</a>

                        </div>


                            <div class="grid grid-cols-3 gap-8">
                                @foreach ($evenements as $evenement)
                                    <div
                                        class="w-full p-2 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out">
                                        <a href="{{ route('events.reservations', $evenement->id) }}">

                                            <img src="{{ asset('storage/evenements/' .$evenement->image) }}"
                                                alt="{{ $evenement->nom }}" width="50"
                                                class="object-cover w-full h-56">
                                            <div class="p-4">
                                                <h3 class="text-gray-600">{{ $evenement->association->nom }}</h3>
                                                <div class="flex justify-between items-center">

                                                    <h2 class="text-xl font-semibold">{{ $evenement->nom }}</h2>

                                                    <p>{{ \Carbon\Carbon::parse($evenement->date_evenement)->format('d/m/Y') }}
                                                    </p>
                                                </div>
                                                <p class="text-gray-600 mt-2">{{ $evenement->description }}</p>
                                        </a>
                                        <div class="flex justify-between items-center mt-4">
                                            <p>{{ $evenement->nombre_place }} places</p>
                                            <div class="flex justify-between items-center ">

                                                {{-- Modifier --}}
                                               <div>
                                                <a href="{{ route('association.evenements.edit', $evenement->id) }}"
                                                    class="btn-icon px-4 rounded ">


                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.304 2.84436L15.156 5.69636M5 5.00036H2C1.73478 5.00036 1.48043 5.10572 1.29289 5.29325C1.10536 5.48079 1 5.73514 1 6.00036V16.0004C1 16.2656 1.10536 16.5199 1.29289 16.7075C1.48043 16.895 1.73478 17.0004 2 17.0004H13C13.2652 17.0004 13.5196 16.895 13.7071 16.7075C13.8946 16.5199 14 16.2656 14 16.0004V11.5004M16.409 1.59036C16.5964 1.77767 16.745 2.00005 16.8464 2.24481C16.9478 2.48958 17 2.75192 17 3.01686C17 3.2818 16.9478 3.54414 16.8464 3.78891C16.745 4.03367 16.5964 4.25605 16.409 4.44336L9.565 11.2874L6 12.0004L6.713 8.43536L13.557 1.59136C13.7442 1.4039 13.9664 1.25517 14.2111 1.1537C14.4558 1.05223 14.7181 1 14.983 1C15.2479 1 15.5102 1.05223 15.7549 1.1537C15.9996 1.25517 16.2218 1.4039 16.409 1.59136V1.59036Z"
                                                            stroke="#E06F1F" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                               </div>

                                                {{-- Supprimer --}}

                                                <div>
                                                    <form
                                                    action="{{ route('association.evenements.destroy', $evenement->id) }}"
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn-icon text-red-300  px-4 rounded hover:text-red-700">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-archive-fill" viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z" />
                                                        </svg> </button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        @include('evenements.ajoutEvenement')


            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>

        </html>
</x-association-layout>
