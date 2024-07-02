<x-association-layout>


<form action="{{ route('association.evenements.save') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="nom">nom:</label>
        <input type="text" id="nom" name="nom" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
    </div>
    <div>
        <label for="localite">Localite:</label>
        <input type="text" id="localite" name="localite" required>
    </div>
    <div>
        <label for="date_evenement">Date Evenement:</label>
        <input type="date" id="date_evenement" name="date_evenement" required>
    </div>
    <div>
        <label for="date_limite_inscription">Date Limite Inscription:</label>
        <input type="date" id="date_limite_inscription" name="date_limite_inscription" required>
    </div>
    <div>
        <label for="nombre_place">Nombre Place:</label>
        <input type="number" id="nombre_place" name="nombre_place" required>
    </div>
    <div>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" required>
    </div>
    <!-- Catégorie -->
    <div class="mt-4">
        <x-input-label for="categorie_id" :value="__('Catégorie')" />
        <select id="categorie_id" name="categorie_id" class="block mt-1 w-full" required>
            <option value="">Choisir une catégorie</option>
            @foreach($categories as $categorie)
                <option  value="{{ $categorie->id }}" class="text-black">{{ $categorie->name }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('categorie_id')" class="mt-2" />
    </div>
    {{-- <div>
        <label for="association_id">Association:</label>
        <select id="association_id" name="association_id" required>
            @foreach($associations as $association)
                <option value="{{ $association->id }}">{{ $association->nom }}</option>
            @endforeach
        </select>
    </div>  --}}
    <div>
        <button type="submit">Submit</button>
    </div>
</form>


</x-association-layout>

