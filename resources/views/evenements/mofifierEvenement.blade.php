<x-association-layout>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}

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
            background-color: #E06F1F;
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

        .form-control,
        .form-control-file,
        .form-control select {
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

        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold mb-4">Modifier Événement</h1>
            <form action="{{ route('association.evenements.update', ['id' => $evenement->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div class="form-group">
                        <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                        <input type="text" id="nom" name="nom" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Nom" value="{{ $evenement->nom }}">
                        @error('nom')
                            <div class="text-red-600 mt-2">Le champ est obligatoire</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="localite" class="block text-sm font-medium text-gray-700">Localité</label>
                        <input type="text" id="localite" name="localite" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Localité" value="{{ $evenement->localite }}">
                        @error('localite')
                            <div class="text-red-600 mt-2">Le champ est obligatoire</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" class="mt-1 block w-full h-20 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Description">{{ $evenement->description }}</textarea>
                    @error('description')
                        <div class="text-red-600 mt-2">Le champ est obligatoire</div>
                    @enderror
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 mt-4">
                    <div class="form-group">
                        <label for="date_evenement" class="block text-sm font-medium text-gray-700">Date d'événement</label>
                        <input type="date" id="date_evenement" name="date_evenement" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $evenement->date_evenement }}">
                        @error('date_evenement')
                            <div class="text-red-600 mt-2">Le champ est obligatoire</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="date_limite_inscription" class="block text-sm font-medium text-gray-700">Date limite d'inscription</label>
                        <input type="date" id="date_limite_inscription" name="date_limite_inscription" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $evenement->date_limite_inscription }}">
                        @error('date_limite_inscription')
                            <div class="text-red-600 mt-2">Le champ est obligatoire</div>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 mt-4">
                    <div class="form-group">
                        <label for="nombre_place" class="block text-sm font-medium text-gray-700">Nombre de places</label>
                        <input type="number" id="nombre_place" name="nombre_place" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $evenement->nombre_place }}">
                        @error('nombre_place')
                            <div class="text-red-600 mt-2">Le champ est obligatoire</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" id="image" name="image" accept="image/*" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $evenement->image }}">
                        @error('image')
                            <div class="text-red-600 mt-2">Le champ est obligatoire</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-4">
                    <label for="categorie_id" class="block text-sm font-medium text-gray-700">Catégorie</label>
                    <select id="categorie_id" name="categorie_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value="">Choisir une catégorie</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}"{{ $evenement->categorie_id == $categorie->id ? 'selected' : '' }}>
                                {{ $categorie->name }}</option>
                        @endforeach
                    </select>
                    @error('categorie_id')
                        <div class="text-red-600 mt-2">Le champ est obligatoire</div>
                    @enderror
                </div>
                <div class="form-row w-full gap-4 flex justify-between mt-4">
                    <div class="w-full">
                        <button type="button" class="btn-cancel bg-white" onclick="document.getElementById('contactModal').style.display='none'">Annuler</button>
                    </div>
                    <div class="w-full">
                        <button type="submit" class="btn btn-submit">Modifier</button>
                    </div>
                </div>
            </form>
        </div>


    </div>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>

</x-association-layout>
