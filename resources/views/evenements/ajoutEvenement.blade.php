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

<x-association-layout>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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
            background-color: #aaa;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            margin-top: 20px;
        }

        .btn-cancel:hover {
            background-color: #888;
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

    <button id="openModalBtn" class="btn btn-primary">Ajouter</button>

    <div id="contactModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form action="{{ url('create/Evenement/traitement') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="libelle" placeholder="nom" required>
                        @error('libelle') 
                        <div class="text-red-600">Le champ est obligatoire</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="localite">Localité</label>
                        <input type="text" class="form-control" id="localite" name="localite" placeholder="localite" required>
                        @error('localite') 
                        <div class="text-red-600">Le champ est obligatoire</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description" required></textarea>
                    @error('description') 
                    <div class="text-red-600">Le champ est obligatoire</div>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date_evenement">Date d'événement</label>
                        <input type="date" class="form-control" id="date_evenement" name="date_evenement" required>
                        @error('date_evenement') 
                        <div class="text-red-600">Le champ est obligatoire</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date_limite_inscription">Date limite d'inscription</label>
                        <input type="date" class="form-control" id="date_limite_inscription" name="date_limite_inscription" required>
                        @error('date_limite_inscription') 
                        <div class="text-red-600">Le champ est obligatoire</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombre_place">Nombre de places</label>
                        <input type="number" class="form-control" id="nombre_place" name="nombre_place" required>
                        @error('nombre_place') 
                        <div class="text-red-600">Le champ est obligatoire</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                        @error('image') 
                        <div class="text-red-600">Le champ est obligatoire</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <button type="button" class="btn-cancel" onclick="document.getElementById('contactModal').style.display='none'">Annuler</button>
                    </div>
                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-submit">Ajouter</button>
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
</x-association-layout>
