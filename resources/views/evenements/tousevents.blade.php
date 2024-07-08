<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Événements</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .navbar {
            width: 100%;
            padding: 1rem 0;
            border-bottom: 1px solid #3C2A4D;
            background-color: #3C2A4D;
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 5rem;
            font-weight: 600;
            color: white;
        }

        .navbar-title {
            font-size: 1.5rem;
        }

        .navbar-links {
            display: flex;
            gap: 2rem;
        }

        .navbar-link {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .navbar-link:hover {
            color: #D1D5DB; /* Light gray */
        }

        .navbar-button {
            padding: 0.5rem 1.5rem;
            background-color: #3C2A4D;
            color: white;
            border: none;
            border-radius: 1.5rem;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .navbar-button:hover {
            background-color: #2C1F3B; /* Darker shade of #3C2A4D */
        }

        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        @media (max-width: 768px) {
            .navbar-content {
                flex-direction: column;
                align-items: flex-start;
                padding: 0 2rem;
            }

            .navbar-links {
                display: none;
                flex-direction: column;
                width: 100%;
            }

            .navbar-links.active {
                display: flex;
            }

            .burger-menu {
                display: block;
                cursor: pointer;
            }

            .burger-bar {
                width: 25px;
                height: 3px;
                background-color: white;
                margin: 4px 0;
                transition: 0.4s;
            }

            .grid {
                grid-template-columns: 1fr;
            }
        }

        @media (min-width: 769px) and (max-width: 1023px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
</head>
<body>
    <navbar>
        <div class="navbar">
            <div class="navbar-content">
                <div>
                    <h1 class="navbar-title">OnyxEvents</h1>
                </div>
                <div class="burger-menu" onclick="toggleMenu()">
                    <div class="burger-bar"></div>
                    <div class="burger-bar"></div>
                    <div class="burger-bar"></div>
                </div>
                <div class="navbar-links">
                    <a href="#" class="navbar-link">Accueil</a>
                    <a href="#" class="navbar-link">À propos</a>
                    <a href="#" class="navbar-link">Événement</a>
                    <a href="#" class="navbar-link">Contact</a>
                    @guest
                        <a href="/login" class="rounded-full bg-[#c9fd02] px-4 py-2 navbar-button font-bold transition hover:border-black hover:bg-white">Connexion</a>
                    @endguest
                    @auth
                    <form method="POST"  action="{{ route('logout') }}">
                        @csrf
                
                        <x-dropdown-link class=" text-white"  :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Deconnexion') }}
                        </x-dropdown-link>
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </navbar>

    <div class="container justify-center ml-12 pl-6 mt-8">
        <h1 class="text-left">Événements à venir</h1>
        <br>
        <div class="grid justify-center grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-10">
            @foreach($evenements as $evenement)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-sm">
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
    </div>

    <x-footer/>

    <script>
        function toggleMenu() {
            const navbarLinks = document.querySelector('.navbar-links');
            navbarLinks.classList.toggle('active');
        }
    </script>
</body>
</html>
