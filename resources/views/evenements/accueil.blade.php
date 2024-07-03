<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Événements</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>

        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

                .banner {
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left;
            background-image: linear-gradient(to bottom, rgba(87, 79, 125, 0.7), rgba(87, 79, 125, 0.7)), url("https://i.ibb.co/dkHwWBG/pexels-ihsan-aditya-1056251.jpg");
            background-size: cover;
            background-position: center;
            color: white;
            padding-bottom: 100px;
            padding-top: 40px;
            position: relative;
        }

        .search-container {
            position: relative;
            margin-top: -80px;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .search-section {
            top: -50px;
            background-color: #3C2A4D;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 900px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1;
        }

        .search-form {
            background-color: #3C2A4D;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-group {
            margin-right: 15px;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 5px;
            font-weight: bold;
            color: white;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #3C2A4D;
            color: white;
        }

        .form-group input::placeholder {
            color: #ddd;
        }

        .btn {
            padding: 10px 20px;
            background-color: #E06F1F;
            color: white;
            text-decoration: none;
            font-size: 1em;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-en-savoir-plus {
            display: inline-block;
            margin-bottom: 30px;;
            padding: 10px 20px;
            background-color: #ffffff; /* Fond blanc */
            color: #3C2A4D; /* Couleur du texte */
            text-decoration: none;
            border: 2px solid #3C2A4D; /* Bordure de couleur 3C2A4D */
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease; /* Transition pour une animation fluide */
        }

        .btn-en-savoir-plus:hover {
            background-color: #3C2A4D; /* Fond de couleur 3C2A4D au survol */
            color: #ffffff; /* Texte blanc au survol */
        }

    </style>

</head>
<body>
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
        <header class="banner">
            <section class="relative bg-gradient-to-r from-violet-50 to-orange-50">
                <!-- Container -->
                <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-24 lg:py-32">
                    <!-- Component -->
                    <div class="grid grid-cols-1 items-center gap-8 sm:gap-20 lg:grid-cols-2">
                        <!-- Image Div (left side on large screens) -->
                        <div>
                            <img src="https://images.unsplash.com/photo-1696258686454-60082b2c33e2?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="mx-auto inline-block h-full w-full max-w-[640px] rounded-2xl object-cover">
                        </div>
                        <!-- Heading Content (right side on large screens) -->
                        <div class="max-w-[720px]">
                            <h1 class="mb-3 pb-4 text-4xl font-bold text-green-700 md:text-6xl">{{ $evenement->nom }}</h1>
                            <p class="mb-6 max-w-[528px] text-xl md:mb-10">{{ $evenement->description }}</p>
                            <div class="flex items-center">
                                <a href="#" class="mr-5 inline-block rounded-full bg-[#c9fd02] px-6 py-4 text-center font-bold text-black transition hover:border-black hover:bg-white md:mr-6 lg:mr-8">Obtenir une réservation</a>
                                <a href="{{ route('evenements.detail', $evenement->id) }}" class="flex max-w-full flex-row rounded-full border border-solid border-[#636262] px-6 py-4 font-bold">
                                    <p class="">En savoir plus</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>


    <div class="search-container">
        <section class="search-section">
            <form action="/search" method="GET" class="search-form">
                <div class="form-group">
                    <label for="event-name">Nom de l'événement:</label>
                    <input type="text" id="event-name" name="event-name" placeholder="Nom de l'événement">
                </div>
                <div class="form-group">
                    <label for="location">Lieu:</label>
                    <input type="text" id="location" name="location" placeholder="Lieu">
                </div>
                <div class="form-group">
                    <label for="time">Heure:</label>
                    <input type="time" id="time" name="time">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Rechercher</button>
                </div>
            </form>
        </section>
    </div>

    <div class="container justify-center ml-12 pl-6 mt-8">
        <h1 class="text-left">Événements à venir</h1>
        <br>
        <div class="grid  justify-center grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-10">
            @foreach($evenements as $evenement)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-sm">
                    {{-- <img src="{{ $evenement->image_url }}" alt="{{ $evenement->nom }}" class="w-full h-64 object-cover"> --}}
                    <img src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606" alt="Mountain" class="w-full h-64 object-cover">
                    <div class="p-8">
                        <div class="flex justify-start items-center space-x-4 mb-2">
                            <div>
                                <span class="text-gray-600 block">{{ \Carbon\Carbon::parse($evenement->date)->format('d') }}</span>
                                <span class="text-gray-600">{{ \Carbon\Carbon::parse($evenement->date)->format('M') }}</span>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800">
                                    <a href="{{ route('evenements.detail', $evenement) }}">{{ $evenement->nom }}</a>
                                </h2>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                    <a href="{{ route('evenements.detail', $evenement) }}">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                </span>
                                <p class="text-gray-700 leading-tight mb-4">
                                    {{ $evenement->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center mt-8">
            <a href="{{ route('evenements.index') }}" class="btn-en-savoir-plus">En savoir plus</a>
        </div>
    </div>

    <section class="section-bg">
        <div class="container1">
            <div class="image-content">
                <img src="https://via.placeholder.com/500" alt="Illustration">
            </div>
            <div class="text-content">
                <h2>Créez votre propre événement</h2>
                <p>Organisez des événements incroyables avec notre plateforme. Rejoignez-nous pour créer des moments inoubliables.</p>
                <a href="{{ route('evenements.a') }}" class="btn-create-event">Créer un événement</a>
            </div>
        </div>
    </section>

    <div class="max-w-3xl mx-auto px-5 mt-28">
        <div class="flex flex-col justify-center">

            <div class="text-center">

                <h2 class="font-semibold text-3xl">Rejoindre ces marques</h2>

                <p class="max-w-md mx-auto mt-2 text-gray-500">
                    Nous avons eu le plaisir de travailler avec des marques qui ont marqué l'industrie.
                    En voici quelques-unes.
                </p>

            </div>

            <div class="container mx-auto mt-4">
                <div class="flex flex-wrap justify-center">
                    <img src="path/to/sponsor1.png" alt="Sponsor 1" class="sponsor-logo">
                    <img src="path/to/sponsor2.png" alt="Sponsor 2" class="sponsor-logo">
                    <img src="path/to/sponsor3.png" alt="Sponsor 3" class="sponsor-logo">
                    <img src="path/to/sponsor4.png" alt="Sponsor 4" class="sponsor-logo">
                    <img src="path/to/sponsor5.png" alt="Sponsor 5" class="sponsor-logo">
                    <img src="path/to/sponsor6.png" alt="Sponsor 6" class="sponsor-logo">
                    <img src="path/to/sponsor7.png" alt="Sponsor 7" class="sponsor-logo">
                    <img src="path/to/sponsor8.png" alt="Sponsor 8" class="sponsor-logo">
                    <img src="path/to/sponsor9.png" alt="Sponsor 9" class="sponsor-logo">
                    <img src="path/to/sponsor10.png" alt="Sponsor 10" class="sponsor-logo">
                    <!-- Add more logos as needed -->
                </div>
            </div>
        </div>

    </div>

   <x-footer/>




</body>
</html>