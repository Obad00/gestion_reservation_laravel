<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/create/Evenement/traitement" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" required>
        </div>
        <div>
            <label for="localite">Localité</label>
            <input type="text" id="localite" name="localite" required>
        </div>
        <div>
            <label for="date_evenement">Date de l'événement</label>
            <input type="date" id="date_evenement" name="date_evenement" required>
        </div>
        <div>
            <label for="date_limite_inscription">Date limite d'inscription</label>
            <input type="date" id="date_limite_inscription" name="date_limite_inscription" required>
        </div>
        <div>
            <label for="nombre_place">Nombre de places</label>
            <input type="number" id="nombre_place" name="nombre_place" required>
        </div>
        {{-- <div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image" required>
        </div> --}}
        {{-- <div>
            <label for="association_id">Association</label>
            <select id="association_id" name="association_id" required>
                @foreach($associations as $association)
                    <option value="{{ $association->id }}">{{ $association->name }}</option>
                @endforeach
            </select>
        </div> --}}
        <button type="submit">Créer</button>
    </form>
    
</body>
</html>