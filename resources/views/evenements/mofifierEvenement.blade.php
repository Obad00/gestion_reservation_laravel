{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Événement</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Modifier Événement</h1>
        <form action="{{ route('evenementmodifierTraitement', ['id' => $evenement->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $evenement->id }}">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $evenement->nom) }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" required>{{ old('description', $evenement->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="localite">Localité:</label>
                <input type="text" class="form-control" id="localite" name="localite" value="{{ old('localite', $evenement->localite) }}" required>
            </div>
            <div class="form-group">
                <label for="date_evenement">Date Événement:</label>
                <input type="date" class="form-control" id="date_evenement" name="date_evenement" value="{{ old('date_evenement', $evenement->date_evenement) }}" required>
            </div>
            <div class="form-group">
                <label for="date_limite_inscription">Date Limite Inscription:</label>
                <input type="date" class="form-control" id="date_limite_inscription" name="date_limite_inscription" value="{{ old('date_limite_inscription', $evenement->date_limite_inscription) }}" required>
            </div>
            <div class="form-group">
                <label for="nombre_place">Nombre de Places:</label>
                <input type="number" class="form-control" id="nombre_place" name="nombre_place" value="{{ old('nombre_place', $evenement->nombre_place) }}" required>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $evenement->image) }}" required>
            </div>
            {{-- 
            <div class="form-group">
                <label for="association_id">Association:</label>
                <select class="form-control" id="association_id" name="association_id" required>
                    @foreach($associations as $association)
                        <option value="{{ $association->id }}" {{ $evenement->association_id == $association->id ? 'selected' : '' }}>{{ $association->nom }}</option>
                    @endforeach
                </select>
            </div>  
            --}}
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
{{-- </body>
</html> --}} 


<x-association-layout> 
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        #contact-form {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            max-width: 600px;
            z-index: 1000;
            background-color: white;
            padding: 20px; 
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: 90vh;
            overflow: hidden;
        }

        #contact-form h2 {
            color: #333;
        }

        .btn-submit {
            background-color: #E06F1F;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            margin-top: 20px;
        }

        .btn-submit:hover {
            background-color:#E06F1F;
        }

        .form-control, .form-control-file, .form-control select {
            border-radius: 5px;
        }

        .btn-btn-submits {
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            margin-top: 20px;
            border-radius: 5px;
            border: #333;
        }
    </style>

    <div id="contact-form">
        <br>
        <form action="{{ route('evenementmodifierTraitement', ['id' => $evenement->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="libelle" placeholder="Nom" value="{{ $evenement->nom }}">
                </div>
                @error('titre') 
                <div class="text-red-600">Le champs est obligatoire</div>
                @enderror
                <div class="form-group col-md-6">
                    <label for="localité">Localité</label>
                    <input type="text" class="form-control" id="localité" name="localité" placeholder="Localité" value="{{ $evenement->localite }}">
                </div>
                @error('localité') 
                <div class="text-red-600">Le champs est obligatoire</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Description">{{ $evenement->description }}</textarea>
                @error('description') 
                <div class="text-red-600">Le champs est obligatoire</div>
                @enderror
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date_evenement">Date d'événement</label>
                    <input type="date" class="form-control" id="date_evenement" name="date_evenement" value="{{ $evenement->date_evenement }}">
                </div>
                @error('date_debut') 
                <div class="text-red-600">Le champs est obligatoire</div>
                @enderror
                <div class="form-group col-md-6">
                    <label for="date_limite_inscription">Date de fin</label>
                    <input type="date" class="form-control" id="date_limite_inscription" name="date_limite_inscription" value="{{ $evenement->date_limite_inscription }}">
                    @error('date_limite_inscription') 
                    <div class="text-red-600">Le champs est obligatoire</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre_place">Nombre de places</label>
                    <input type="number" class="form-control" id="nombre_place" name="nombre_place" value="{{ $evenement->nombre_place }}">
                    @error('nombre_place') 
                    <div class="text-red-600">Le champs est obligatoire</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{ $evenement->image }}">
                    @error('image') 
                    <div class="text-red-600">Le champs est obligatoire</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <button type="button" class="btn-btn-submits" onclick="window.history.back()">Annuler</button>
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-submit">Modifier</button>
                </div>
            </div>
        </form>
    </div>
</x-association-layout>
