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

        h1 {
            font-family: ninuto;
            font-size: 40px;
            text-align: left; /* Assurez-vous que le texte est aligné à gauche */
        }

        .banner {
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left;
            background-image: linear-gradient(to bottom, rgba(87, 79, 125, 0.7), rgba(87, 79, 125, 0.7)), url("https://i.ibb.co/dkHwWBG/pexels-ihsan-aditya-1056251.jpg");
            background-size: cover;
            background-position: center;
            color: white;
            padding: 20px;
            position: relative;
        }

        .search-container {
            position: relative;
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

        .section-bg {
            background-color: #574F7D;
            color: white;
            margin-top: 4rem;
        }

        .container1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .container img {
            width: 100%;
            height: auto;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }

        .text-content {
            flex: 1;
            padding-left: 2rem;
        }

        .text-content h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .text-content p {
            margin-bottom: 1.5rem;
        }

        .btn-create-event {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #E06F1F;
            color: white;
            text-decoration: none;
            border-radius: 0.3rem;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-create-event:hover {
            background-color: #3C2A4D;
            color: white;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                text-align: center;
            }

            .text-content {
                padding-left: 0;
                margin-top: 2rem;
            }
        }

        .container2 {
                          max-width: 600px;
                          margin: 50px auto;
                          background-color: #ffffff;
                          padding: 20px;
                          border-radius: 8px;
                          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        }
                    
                        /* Styles pour le formulaire de recherche */
                        #search-bar {
                          background-color: #ffffff;
                          border-radius: 4px;
                          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                          padding: 10px;
                          display: flex;
                          align-items: center;
                        }
                    
                        #search-bar input[type="text"] {
                          flex: 1;
                          padding: 8px;
                          
                          border-radius: 4px;
                          outline: none;
                        }
                    
                        #search-bar button {
                          background-color: #E06F1F;
                          color: white;
                          padding: 8px 16px;
                          border: none;
                          border-radius: 4px;
                          cursor: pointer;
                          transition: background-color 0.3s;
                          outline: none;
                        }
                    
                        #search-bar button:hover {
                          background-color: #3C2A4D;
                        }


                        .container3 {
                      max-width: 1166px;
                      margin: 0 auto;
                      padding: 20px;
                    }
                
                    .content {
                      display: flex;
                      flex-direction: column;
                      justify-content: space-between;
                      padding: 0 18px;
                    }
                
                    .content h1 {
                      font-size: 2.5rem;
                      font-weight: bold;
                      margin-bottom: 0.5rem;
                      color: white; /* Couleur du titre */
                      font-family: ninuto;
                    }
                
                    .content p {
                      font-size: 15px;
                      line-height: 1.6;
                      margin-top: 1rem;
                      color: #ffffff;
                      font-family: sacramento;
                    }
                
                    .social-icons {
                      display: flex;
                      gap: 10px;
                      margin-top: 1rem;
                    }
                
                    .social-icons a {
                      display: inline-block;
                      transition: transform 0.3s ease;
                    }
                
                    .social-icons a:hover {
                      transform: scale(1.1);
                    }
                
                    .social-icons img {
                      width: 36px;
                      height: 36px;
                    }  
                    
                    .sponsor-logo {
                    margin: 10px;
                    flex: 1 1 100px;
                }
    </style>
</head>
<body>
    <header class="banner">
        <div class="banner-content">
            <h1>Bienvenue sur OnyxEvents</h1>
            <p>Vivez une expérience inoubliable avec nos événements exceptionnels.</p>
        </div>
    </header>

    {{-- <header class="banner">
        <div>
            <img src="{{ $evenement->image }}" alt="Image de l'événement">
        </div>
        <div class="banner-content">
            <h1>{{ $evenement->title }}</h1>
            <p>{{ $evenement->description }}</p>
            <a href="#" class="btn">En savoir plus</a>
        </div>
    </header> --}}
    

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

    <div class="container justify-center mx-auto px-4 mt-8">
        <h1 class="text-left">Événements à venir</h1>
        <br>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
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
                <a href="{{ route('evenements.create') }}" class="btn-create-event">Créer un événement</a>
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
    
    <footer>
        <div class="mt-8 pt-9" style="background-color: #3C2A4D;">
            <div class="mx-auto w-full max-w-[1166px] px-4 xl:px-0">
                <div class="flex flex-col justify-between sm:px-[18px] md:flex-row md:px-10">
                    <div class="container3">
                        <div class="content">
                            <div class="md:w-[316px]">
                                <h1>
                                    <span style="color: white;">OnyxEvents</span>
                                </h1>
                                <p class="mt-4">
                                    OnyxEvents est une plateforme de gestion d’évènement pour <br>
                                    les expériences en direct qui permet à chacun de créer, de partager,
                                    de trouver et d'assister à des événements qui alimentent
                                    leurs passions et enrichissent leur vie.
                                </p>
                                <div class="mt-4 social-icons">
                                    <a href="#" target="_blank">
                                        <img alt="facebook icon" loading="lazy"
                                            src="https://www.englishyaari.com/img/facebook.svg">
                                    </a>
                                    <a href="/" target="_blank">
                                        <img alt="linkedin icon" loading="lazy"
                                            src="https://www.englishyaari.com/img/linkdin.svg">
                                    </a>
                                    <a href="" target="_blank">
                                        <img alt="twitter icon" loading="lazy"
                                            src="https://www.englishyaari.com/img/twitter.svg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="md:w-[316px]" style="color: white; margin-top: 2rem;">
                        <p class="text-deutziawhite font-inter text-[18px] font-medium leading-normal">Plan Events</p>
                        <ul>
                            <li>Créer et mettre en place</li>
                            <li>RSVP en ligne</li>
                            <li>Événements en ligne</li>
                        </ul>
                    </div>
    
                    <div class="mt-6 flex w-full flex-col justify-between text-white sm:flex-row md:mt-0 md:max-w-[341px]">
                        <div class="" style="margin-top: 2rem;">
                            <p class="text-deutziawhite font-inter text-[18px] font-medium leading-normal">OnyxEvents</p>
                            <ul>
                                <li>A propos de nous</li>
                                <li>Presse</li>
                                <li>Contact</li>
                                <li>Centre d'aide</li>
                                <li>Comment ça marche</li>
                                <li>Protection de la vie privée</li>
                                <li>Conditions d'utilisation</li>
                            </ul>
                        </div>
                        <div class="mt-6 flex flex-col gap-4 sm:mt-0" style="margin-top: 2rem;">
                            <p class="text-deutziawhite font-inter text-[18px] font-medium">Restez dans la boucle</p>
                            <p>Rejoignez notre liste de diffusion pour rester au courant
                                de nos dernières nouveautés en matière d'événements et de concerts.</p>
                            <div class="container2">
                                <div id="search-bar">
                                    <input type="text" placeholder="Saisissez votre adresse électronique."
                                        class="w-full rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent">
                                    <button type="submit">S'inscrire maintenant</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-[30px] text-white" />
                <div class="flex items-center justify-center pb-8 pt-[9px] md:py-8">
                    <p class="text-[10px] font-normal text-white md:text-[12px]">
                        Copyright © 2024 Onyx Events
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
      
</body>
</html>
