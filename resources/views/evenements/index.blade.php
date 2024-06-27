<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise en page avec Bootstrap</title>

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
            @endforeach
        </div>
    </div>
    

  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
</body>
</html>
