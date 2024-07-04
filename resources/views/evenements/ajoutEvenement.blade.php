{{-- <form action="{{ url('create/Evenement/traitement') }}" method="POST" enctype="multipart/form-data">
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
        <input type="text" id="image" name="image" required>
    </div> --}}
    {{-- <div>
        <label for="association_id">Association:</label>
        <select id="association_id" name="association_id" required>
            @foreach($associations as $association)
                <option value="{{ $association->id }}">{{ $association->nom }}</option>
            @endforeach
        </select>
    </div>  --}}
    {{-- <div>
        <button type="submit">Submit</button>
    </div>
</form> --}}

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
        padding-top: 60px;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 90%;
        max-width: 600px;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
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
        background-color: #D65F1F;
    }

    .form-control, .form-control-file, .form-control select {
        border-radius: 5px;
    }

    .btn-cancel {
        background-color: #aaaaaa02;
        color: rgb(0, 0, 0);
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
        margin-top: 20px;
    }

    .btn-cancel:hover {
        background-color: #beb8b8;
    }

    @media (max-width: 768px) {
        .form-row {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            width: 100%;
        }
    }
</style>


<div id="contactModal" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
    <div class="relative top-40 p-6 mx-auto shadow-xl rounded-md bg-white rounded-lg shadow-lg p-6 w-full max-w-lg">
        <span class="close text-right text-2xl font-bold cursor-pointer" onclick="document.getElementById('contactModal').style.display='none'">&times;</span>
        <form action="{{ route('association.evenements.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="form-group">
                    <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" id="nom" name="nom" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="nom" required>
                    @error('nom')
                        <div class="text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="localite" class="block text-sm font-medium text-gray-700">Localité</label>
                    <input type="text" id="localite" name="localite" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="localite" required>
                    @error('localite')
                        <div class="text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group mt-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" class="mt-1 block w-full h-20 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Description" required></textarea>
                @error('description')
                    <div class="text-red-600 mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 mt-4">
                <div class="form-group">
                    <label for="date_evenement" class="block text-sm font-medium text-gray-700">Date d'événement</label>
                    <input type="date" id="date_evenement" name="date_evenement" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    @error('date_evenement')
                        <div class="text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="date_limite_inscription" class="block text-sm font-medium text-gray-700">Date limite d'inscription</label>
                    <input type="date" id="date_limite_inscription" name="date_limite_inscription" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    @error('date_limite_inscription')
                        <div class="text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 mt-4">
                <div class="form-group">
                    <label for="nombre_place" class="block text-sm font-medium text-gray-700">Nombre de places</label>
                    <input type="number" id="nombre_place" name="nombre_place" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    @error('nombre_place')
                        <div class="text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" id="image" name="image" accept="image/*" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('image')
                        <div class="text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="categorie_id" class="block text-sm font-medium text-gray-700">Catégorie</label>
                <select id="categorie_id" name="categorie_id" class="block mt-1 w-full" required>
                    <option value="">Choisir une catégorie</option>
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                    @endforeach
                </select>
                @error('categorie_id')
                    <div class="text-red-600 mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-row w-full gap-4 flex justify-between mt-4">
                <div class="w-full">
                    <button type="button" class="btn-cancel bg-white" onclick="document.getElementById('contactModal').style.display='none'">Annuler</button>
                </div>
                <div class="w-full">
                    <button type="submit" class="btn btn-submit">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    var modal = document.getElementById("contactModal");
    var btn = document.getElementById("openModalBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
