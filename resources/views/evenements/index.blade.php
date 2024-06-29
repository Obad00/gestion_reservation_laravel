{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise en page avec Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
  
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            background-color: #fff;
        }
        .card img {
            border-radius: 10px;
            max-width: 100%;
            height: auto;
        }
        .card-title {
            font-size: 1.5rem;
            color: #333;
            margin-top: 10px;
        }
        .card-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-top: 10px;
        }
        .icons img {
            width: 50px;
            margin: 0 10px;
            border-radius: 50%;
            border: 2px solid #ccc;
            transition: transform 0.3s ease;
        }
        .icons img:hover {
            transform: scale(1.1);
        }
        .location {
            font-style: italic;
            color: #777;
            margin-top: 12px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            @foreach($evenements as $evenement)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $evenement->image }}" alt="Image" class="img-fluid">
                    <h2 class="card-title mt-3">{{ $evenement->libelle }}</h2>
                    <h3 class="card-subtitle">{{ $evenement->description }}</h3>
                    <div class="icons mt-3">
                        <img src="icon1.png" alt="Icon 1">
                        <img src="icon2.png" alt="Icon 2">
                    </div>
                    <p class="location mt-3">Lieu: {{ $evenement->localite }}</p>
                </div>
            </div>
            <a href="/evenementSupprimer/{{ $evenement->id }}" class="btn-icon">
                <i class="fas fa-trash-alt"></i>
            </a>
            <a href="/evenementModifier/{{ $evenement->id }}" class="btn-icon">
                <i class="fas fa-edit"></i>
                
            </a>
            @endforeach
        </div>
    </div>
    

  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
</body>
</html> --}}


{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-100">


    <!-- Sidebar -->
    <div class="flex">
        <div class="w-64 bg-white shadow-md h-screen">
            <div class="p-4">
                <h1 class="text-2xl font-semibold mb-6">Dashboard</h1>
                <ul>
                    <li class="mb-4">
                        <a href="#" class="text-lg font-medium text-gray-800 hover:text-gray-600">Dashboard</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-lg font-medium text-gray-800 hover:text-gray-600">Association</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-lg font-medium text-gray-800 hover:text-gray-600">Événement</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-lg font-medium text-gray-800 hover:text-gray-600">Utilisateur</a>
                        <ul class="ml-4 mt-2">
                            <li class="mb-2">
                                <a href="#" class="text-md text-gray-700 hover:text-gray-500">Liste des utilisateurs</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-md text-gray-700 hover:text-gray-500">Utilisateurs bloqués</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-lg font-medium text-gray-800 hover:text-gray-600">Notification</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-lg font-medium text-gray-800 hover:text-gray-600">Paramètre</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h2 class="text-3xl font-semibold mb-6">Section</h2>
            <div class="grid grid-cols-3 gap-6">
                @foreach($evenements as $evenement)
                <div class="w-90 p-2 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out">
                    <img class="w-full h-40 object-cover rounded-t-lg" alt="Card Image" src="https://via.placeholder.com/150">
                    <div class="p-4">
                        <h3 class="text-gray-600">SIMPLON</h3>
                        <div class="flex justify-between items-center">
                            <h2 class="text-xl font-semibold">{{ $evenement->libelle }}</h2>
                            <p>14/12/2024</p>
                        </div>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis ante sit amet tellus ornare tincidunt.</p>
                        <div class="flex justify-between items-center mt-4">
                            <p>{{ $evenement->localite }}</p>
                        </div>
                    </div>
                    <a href="/evenementSupprimer/{{ $evenement->id }}" class="btn-icon">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                    <a href="/evenementModifier/{{ $evenement->id }}" class="btn-icon">
                        <i class="fas fa-edit"></i>
                        
                    </a>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
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
    <div class="flex">
        <div class="w-64 color=3C2A4D; shadow-md h-screen">
            <div class="p-4">
                <h1 class="text-2xl font-semibold mb-6">Dashboard</h1>
                <ul>
                    <li class="mb-4">
                        <a href="#" class="text-lg font-medium text-gray-800 hover:text-gray-600">Dashboard</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-lg font-medium text-gray-800 hover:text-gray-600">Association</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-lg font-medium text-gray-800 hover:text-gray-600">Événement</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-lg font-medium text-gray-800 hover:text-gray-600">Utilisateur</a>
                        <ul class="ml-4 mt-2">
                            <li class="mb-2">
                                <a href="#" class="text-md text-gray-700 hover:text-gray-500">Liste des utilisateurs</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-md text-gray-700 hover:text-gray-500">Utilisateurs bloqués</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-lg font-medium text-gray-800 hover:text-gray-600">Notification</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-lg font-medium text-gray-800 hover:text-gray-600">Paramètre</a>
                    </li>
                </ul>
            </div>
        </div>

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
                        <a href="/evenementSupprimer/{{ $evenement->id }}" class="btn-icon">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        <a href="/evenementModifier/{{ $evenement->id }}" class="btn-icon">
                            <i class="fas fa-edit"></i>
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
