<x-association-layout>

    <div class="container">
        <h1>Modifier Événement</h1>
        <form action="{{ route('association.evenements.update', ['id' => $evenement->id]) }}" method="POST" enctype="multipart/form-data">
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
             <!-- Image -->
             <div class="mb-4">
                <label for="nombre_place">Image:</label>

                <input id="image" class="block mt-1 w-full" type="file" name="image" accept="image/*" value="{{ old('image', $evenement->image) }}  />
            </div>

                <!-- Catégorie -->
    <div class="mt-4">
        <x-input-label for="categorie_id" :value="__('Catégorie')" />
        <select id="categorie_id" name="categorie_id" class="block mt-1 w-full" required>
            <option value="">Choisir une catégorie</option>
            @foreach($categories as $categorie)
                <option  value="{{ $categorie->id }}"{{ $evenement->categorie_id == $categorie->id ? 'selected' : '' }}>{{ $categorie->name }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('categorie_id')" class="mt-2" />
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

</x-association-layout>
