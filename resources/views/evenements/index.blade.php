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
        <a href="{{ route('association.evenements.create') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Permissions</a>

           <div class="flex  bg-gray-100">


            <a href="{{ route('association.evenements.create') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Permissions</a>

       <!-- Main Content -->
       <div class="flex-1 p-6">
           <h2 class="text-3xl font-semibold mb-6">Section</h2>
           <div class="grid grid-cols-3 gap-8">
               @foreach($evenements as $evenement)
               <div class="w-full p-2 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out">
                   <img class="w-full h-40 object-cover rounded-t-lg" alt="Card Image" src="https://via.placeholder.com/150">
                   <div class="p-4">
                       <h3 class="text-gray-600">SIMPLON</h3>
                       <div class="flex justify-between items-center">
                           <h2 class="text-xl font-semibold">{{ $evenement->nom }}</h2>
                           <p>14/12/2024</p>
                       </div>
                       <p class="text-gray-600 mt-2">{{ $evenement->description }}</p>
                       <div class="flex justify-between items-center mt-4">
                           <p>{{ $evenement->nombre_place }} places</p>
                       </div>
                       <a href="{{ route('association.evenements.destroy', $evenement->id) }}" class="btn-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                       </a>
                       <a href="{{route('association.evenements.update',  $evenement->id )}}" class="btn-icon">
                        <svg class="w-20 h-20 text-red-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                       </a>
                   </div>
               </div>
               @endforeach
           </div>
       </div>
   </div>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
</x-association-layout>
