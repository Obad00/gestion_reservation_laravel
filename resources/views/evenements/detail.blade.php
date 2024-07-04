<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<navbar>
    <div class="navbar">
        <div class="navbar-content">
            <div>
                <h1 class="navbar-title">OnyxEvents</h1>
            </div>
            <div class="navbar-links">
                <a href="#" class="navbar-link">Accueil</a>
                <a href="#" class="navbar-link">À propos</a>
                <a href="#" class="navbar-link">Événement</a>
                <a href="#" class="navbar-link">Contact</a>
            </div>
            @guest
                <div>
                    <a href="/login" class="rounded-full bg-[#c9fd02] px-4 py-2 navbar-button font-bold transition hover:border-black hover:bg-white">Connexion</a>
                </div>
            @endguest
            @auth
                <div>
                    <a href="{{ route('dashboard') }}" class="navbar-link">{{ Auth::user()->prenom }}</a>
                </div>
            @endauth
        </div>
    </div>
</navbar>

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

.reserver {
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

</style>
<br>
<div class="text-center">
    <h2 class="font-bold text-2xl md:text-4xl my-4">Chaque événement compte : changeons le monde ensemble.</h2>
    <div class="max-w-2xl md:max-w-4xl mx-auto dark:text-gray-300">
        <p>
            Mattis et aliquam fermentum sed sagittis eu elit mauris. Nisl eros vel neque vitae lorem molestie.
        </p>
    </div>
</div>
{{-- style="background-color: #3C2A4D;"  --}}
<br>
<br>
<section class="p-8" style="position: relative; background-color: rgba(60, 42, 77, 0.7); /* couleur avec 70% d'opacité */">
    <!-- Container -->
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ $evenement->nom }}</h2>
        <p class="text-gray-700 mb-4">Organisé par {{ $evenement->association->nom }}</p>
        <div class="flex items-center mb-4">
            <svg class="w-6 h-6 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 12.414C12.633 11.633 12 10.133 12 8.5 12 6.015 14.015 4 16.5 4 19 4 21 6.015 21 8.5 21 10.133 19.367 11.633 18.586 12.414L17.657 13.343M5 20.5 5 18.4 5 16.5 5 16.5C5 15.5 5 14.5 6.4 13.6 7.8 12.7 9 12 10.4 12 12.5 12 14.5 12.5 16 13 17.5 13.5 19 14 20 14 20 14 20 13.2 20 12.8 20 11 20 8 20 6 20 4 20 4 20 4 20 4 20 4 20 4 20 4 20 4 20 4"></path>
            </svg>
            <p class="text-gray-700">À {{ $evenement->localite }}</p>
        </div>
        <div class="flex items-center mb-4">
            <svg class="w-6 h-6 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7.5C8 6.67157 8.67157 6 9.5 6H15.5C16.3284 6 17 6.67157 17 7.5V9.5C17 10.3284 16.3284 11 15.5 11H13.5C13.2239 11 13 11.2239 13 11.5V13.5C13 13.7761 13.2239 14 13.5 14H15.5C16.3284 14 17 14.6716 17 15.5V17.5C17 18.3284 16.3284 19 15.5 19H9.5C8.67157 19 8 18.3284 8 17.5V15.5C8 14.6716 8.67157 14 9.5 14H11.5C11.7761 14 12 13.7761 12 13.5V11.5C12 11.2239 11.7761 11 11.5 11H9.5C8.67157 11 8 10.3284 8 9.5V7.5Z"></path>
            </svg>
            <p class="text-gray-700"> Le {{ $evenement->date_evenement }}</p>
        </div>
    </div>
</div>

    
<div class="relative flex flex-col items-center mx-auto lg:flex-row-reverse lg:max-w-5xl lg:mt-12 xl:max-w-6xl">

    <div class="w-full h-64 lg:w-1/2 lg:h-auto">
    {{-- <img src="{{ $evenement->image }}" alt="{{ $evenement->nom }}" class="w-full h-64 object-cover"> --}}
        <img class="h-full w-full object-cover" src="https://picsum.photos/id/1018/2000" alt="Winding mountain road">
    </div>

    <div
        class="max-w-lg bg-white md:max-w-2xl md:z-10 md:shadow-lg md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-24 xl:ml-12">
        
        <div class="flex flex-col p-12 md:px-16">
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
            <h2 class="text-2xl font-medium uppercase text-black lg:text-4xl">{{ $evenement->nom }}</h2>
            <p class="mt-4">
                {{ $evenement->description }}
            </p>
            <div class="mt-8">
                <form method="POST" action="{{ route('reservations.store', $evenement) }}">
                    @csrf
                    <button type="submit" class="reserver">Je m'inscris à l'évènement</button>
                </form>
            </div>
        </div>
    </div>

</div>
</section>

<section class="py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-center text-2xl font-bold text-gray-900 mb-4">Autres événements de cette association</h3>
        <div class="grid justify-center grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-10">
            @foreach($evenements as $event)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-sm">
                    <img src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606" alt="{{ $event->nom }}" class="w-full h-64 object-cover">
                    <div class="p-8">
                        <div class="flex justify-start items-center space-x-4 mb-2">
                            <div>
                                <span class="text-gray-600 block">{{ \Carbon\Carbon::parse($event->date_evenement)->format('d') }}</span>
                                <span class="text-gray-600">{{ \Carbon\Carbon::parse($event->date_evenement)->format('M') }}</span>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800">
                                    <a href="{{ route('evenements.detail', $event) }}">{{ $event->nom }}</a>
                                </h2>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-tight mb-4">{{ $event->description }}</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                    <a href="{{ route('evenements.detail', $event) }}">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                </span>
                                <p class="text-gray-700">{{ $event->localite }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<x-footer/>
