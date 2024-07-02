
{{-- <x-association-layout> 
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    {{-- <div id="modelConfirm" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 "> --}}

    {{-- <style>
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

    <form action="{{ url('create/Evenement/traitement') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="libelle" placeholder="nom"  >
            </div>
            @error('titre') 
            <div class="text-red-600">le champs est obligatoire</div>
            @enderror
            <div class="form-group col-md-6">
                <label for="localité">Localité</label>
                <input type="text" class="form-control" id="localité" name="localité" placeholder="localité"  >
            </div>
            @error('localité') 
            <div class="text-red-600">le champs est obligatoire</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Description"  ></textarea>
            @error('description') 
            <div class="text-red-600">le champs est obligatoire</div>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="date_evenement">Date d'evenement</label>
                <input type="date" class="form-control" id="date_evenement" name="date_evenement"  >
            </div>
            @error('date_debut') 
            <div class="text-red-600">le champs est obligatoire</div>
            @enderror
            <div class="form-group col-md-6">
                <label for="date_limite_inscription">Date de fin</label>
                <input type="date" class="form-control" id="date_limite_inscription" name="date_limite_inscription"  >
                @error('date_limite_inscription') 
                <div class="text-red-600">le champs est obligatoire</div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre_place">Nombre PLace</label>
                <input type="date" class="form-control" id="nombre_place" name="nombre_place"  >
                @error('date_debut_appel') 
                <div class="text-red-600">le champs est obligatoire</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" name="image"  >
                @error('date_fin_appel') 
                <div class="text-red-600">le champs est obligatoire</div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <button type="submit" class="btn-btn-submits ">Annuler</button>
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-submit ">Ajouter</button>
            </div>
        </div>

    </form>
    </div>
    </div> --}}

{{-- </x-association-layout>  --}} 
    
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
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
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

    <button id="openModalBtn" class="btn btn-primary">Ajouter</button>

    <div id="contactModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form action="{{ url('create/Evenement/traitement') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="libelle" placeholder="nom">
                    </div>
                    @error('titre') 
                    <div class="text-red-600">Le champ est obligatoire</div>
                    @enderror
                    <div class="form-group col-md-6">
                        <label for="localité">Localité</label>
                        <input type="text" class="form-control" id="localité" name="localité" placeholder="localité">
                    </div>
                    @error('localité') 
                    <div class="text-red-600">Le champ est obligatoire</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                    @error('description') 
                    <div class="text-red-600">Le champ est obligatoire</div>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date_evenement">Date d'événement</label>
                        <input type="date" class="form-control" id="date_evenement" name="date_evenement">
                    </div>
                    @error('date_debut') 
                    <div class="text-red-600">Le champ est obligatoire</div>
                    @enderror
                    <div class="form-group col-md-6">
                        <label for="date_limite_inscription">Date de fin</label>
                        <input type="date" class="form-control" id="date_limite_inscription" name="date_limite_inscription">
                        @error('date_limite_inscription') 
                        <div class="text-red-600">Le champ est obligatoire</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombre_place">Nombre de places</label>
                        <input type="number" class="form-control" id="nombre_place" name="nombre_place">
                        @error('nombre_place') 
                        <div class="text-red-600">Le champ est obligatoire</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Image</label>
                        <input type="text" class="form-control" id="image" name="image">
                        @error('image') 
                        <div class="text-red-600">Le champ est obligatoire</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <button type="button" class="btn-btn-submits" onclick="document.getElementById('contactModal').style.display='none'">Annuler</button>
                    </div>
                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-submit">Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Obtenir le modal
        var modal = document.getElementById("contactModal");
    
        // Obtenir le bouton qui ouvre le modal
        var btn = document.getElementById("openModalBtn");
    
        // Obtenir l'élément <span> qui ferme le modal
        var span = document.getElementsByClassName("close")[0];
    
        // Lorsque l'utilisateur clique sur le bouton, ouvrir le modal
        btn.onclick = function() {
            modal.style.display = "block";
        }
    
        // Lorsque l'utilisateur clique sur <span> (x), fermer le modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    
        // Lorsque l'utilisateur clique n'importe où en dehors du modal, fermer le modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


</x-association-layout>
