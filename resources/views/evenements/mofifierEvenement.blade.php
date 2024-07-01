<!DOCTYPE html>
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
</body>
</html>