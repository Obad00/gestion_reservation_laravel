<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche Événement</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .banner {
            height: 50vh;
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
            position: absolute;
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
    background-color: #FF80FF; /* Button color */
    color: white;
    text-decoration: none;
    font-size: 1em;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    border: none;
    cursor: pointer;
}

.btn:hover {
    background-color: #CC66CC; /* Button hover color */
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
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <div class="flex flex-col justify-center items-center bg-gray-100 min-h-screen">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-lg w-full">
            <img src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606" alt="Mountain" class="w-full h-64 object-cover">
            <div class="p-6">
                <ul>
                    @foreach($evenements as $evenement)
                        <li>
                            <div class="flex justify-start items-center space-x-4 mb-2">
                                <span class="text-gray-600">{{ \Carbon\Carbon::parse($evenement->date)->format('M d') }}</span>
                                <h2 class="text-2xl font-bold text-gray-800">
                                    <a href="{{ route('evenements.detail', $evenement) }}">{{ $evenement->nom }}</a>
                                </h2>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </span>
                                    <p class="text-gray-700 leading-tight mb-4">
                                        {{ $evenement->description }}
                                    </p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    
</body>
</html>
