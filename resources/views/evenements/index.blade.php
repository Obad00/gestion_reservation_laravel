
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

       <div class=" container bg-gray-100">
           <div class="flex  bg-gray-100">



       <!-- Main Content -->
       <div class="container mx-auto px-4 py-8">
        <div class=" justify-between flex">

            <h2 class="text-3xl font-semibold mb-6">Mes événements</h2>
            <a href="{{ route('association.evenements.create') }}" class="inline-block bg-orange hover:bg-orange text-white font-bold py-2 px-4 rounded mb-4">Ajouter</a>

        </div>

        @if ($evenements->isEmpty())
            <div class="flex justify-center items-center h-64">
                <p class="text-gray-600 text-lg">Vous n'avez aucun événement.</p>
            </div>
        @else
            <div class="grid grid-cols-3 gap-8">
                @foreach($evenements as $evenement)
                    <div class="w-full p-2 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out">
                        <img src="{{ asset('storage/evenements/' . $evenement->image) }}" alt="{{ $evenement->nom }}"
                        width="50" class="object-cover w-full h-56">                        <div class="p-4">
                            <h3 class="text-gray-600">{{ $evenement->association->nom }}</h3>
                            <div class="flex justify-between items-center">
                                <h2 class="text-xl font-semibold">{{ $evenement->nom }}</h2>
                                <p>{{ \Carbon\Carbon::parse($evenement->date_evenement)->format('d/m/Y') }}</p>
                            </div>
                            <p class="text-gray-600 mt-2">{{ $evenement->description }}</p>
                            <div class="flex justify-between items-center mt-4">
                                <p>{{ $evenement->nombre_place }} places</p>
                                <div class="flex justify-between items-center ">
                                    <a href="{{ route('association.evenements.edit', $evenement->id) }}" class="btn-icon text-green-300  px-4 rounded hover:bg-green-700">


                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                          </svg></a>
                                    <form action="{{ route('association.evenements.destroy', $evenement->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-icon text-red-300  px-4 rounded hover:text-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                                <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z"/>
                                              </svg>                                    </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
   </div>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
</x-association-layout>
