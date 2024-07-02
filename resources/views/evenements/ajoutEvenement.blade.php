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
                background-color: #ce0033;
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
                background-color: #ce0033;
            }
    
            .form-control, .form-control-file, .form-control select {
                border-radius: 10px;
            }
        </style>
<form action="{{ url('create/Evenement/traitement') }}" method="POST" enctype="multipart/form-data">
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
{{-- </form> --}} 
{{-- <x-association-layout>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Formulaire CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .form-label {
            font-weight: bold;
        }

        .mb-3 {
            margin-bottom: 1.5rem;
        }

        .w-100 {
            width: 100%;
        }

        button {
            padding: 10px;
        }

        button[type="reset"] {
            background-color: #dc3545;
            color: #ffffff;
            border: none;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
        }

        button[type="reset"]:hover,
        button[type="submit"]:hover {
            opacity: 0.8;
        }

        button[type="reset"]:focus,
        button[type="submit"]:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        input[type="file"] {
            padding: 3px;
        }

        textarea {
            resize: vertical;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <form action="{{ url('create/Evenement/traitement') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Row 1: Nom et Localité -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="col-md-6">
                    <label for="localite" class="form-label">Localité</label>
                    <input type="text" class="form-control" id="localite" name="localite" required>
                </div>
            </div>

            <!-- Row 2: Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <!-- Row 3: Date Événement et Date Limite d'Inscription -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="date_evenement" class="form-label">Date Événement</label>
                    <input type="date" class="form-control" id="date_evenement" name="date_evenement" required>
                </div>
                <div class="col-md-6">
                    <label for="date_limite_inscription" class="form-label">Date Limite d'Inscription</label>
                    <input type="date" class="form-control" id="date_limite_inscription" name="date_limite_inscription" required>
                </div>
            </div>

            <!-- Row 4: Nombre de Places et Image -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nombre_places" class="form-label">Nombre de Places</label>
                    <input type="number" class="form-control" id="nombre_place" name="nombre_place" required>
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" name="image" accept="image/*">
                </div>
            </div>

            <!-- Row 5: Boutons Annuler et Ajouter -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <button type="reset" class="btn btn-secondary w-100">Annuler</button>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary w-100">Ajouter</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</x-association-layout> --}}
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
   {{-- <div class="form-row">
        <div class="form-group col-md-6">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image"  >
            @error('image') 
            <div class="text-red-600">le champs est obligatoire</div>
            @enderror
        </div>
        {{-- <div class="form-group">
            <label for="etat">Statut</label>
            <select class="form-control" id="etat" name="etat"  >
                <option value="ouvert">Ouvert</option>
                <option value="fermer">Fermer</option>
            </select>
            @error('etat') 
            <div class="text-red-600">le champs est obligatoire</div>
            @enderror
        </div> --}}
   {{-- </div> --}}
</form>
</div>

</x-association-layout> 
{{-- <!-- Inclure Bootstrap CSS dans le <head> de votre document -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <x-association-layout>
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
                background-color: #ce0033;
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
                background-color: #ce0033;
            }
    
            .form-control, .form-control-file, .form-control select {
                border-radius: 10px;
            }
        </style>
    
        <div id="contact-form">
           <br>
           <form action="{{ url('create/Evenement/traitement') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="libelle" placeholder="Titre"  >
                </div>
                @error('titre') 
                <div class="text-red-600">le champs est obligatoire</div>
                @enderror
                <div class="form-group col-md-6">
                    <label for="localité">Nombre place</label>
                    <input type="number" class="form-control" id="nombre_place" name="nombre_place" placeholder="Nombre de places"  >
                </div>
                @error('nombre_place') 
                <div class="text-red-600">le champs est obligatoire</div>
                @enderror
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date_debut">Date de debut</label>
                    <input type="date" class="form-control" id="date_debut" name="date_debut"  >
                </div>
                @error('date_debut') 
                <div class="text-red-600">le champs est obligatoire</div>
                @enderror
                <div class="form-group col-md-6">
                    <label for="date_fin">Date de fin</label>
                    <input type="date" class="form-control" id="date_fin" name="date_fin"  >
                    @error('date_fin') 
                    <div class="text-red-600">le champs est obligatoire</div>
                    @enderror
                </div>
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
                    <label for="date_fin_appel">Date fermeture</label>
                    <input type="date" class="form-control" id="date_fin_appel" name="date_fin_appel"  >
                    @error('date_debut_appel') 
                    <div class="text-red-600">le champs est obligatoire</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="date_debut_appel">Date ouverture</label>
                    <input type="date" class="form-control" id="date_debut_appel" name="date_debut_appel"  >
                    @error('date_fin_appel') 
                    <div class="text-red-600">le champs est obligatoire</div>
                    @enderror
                </div>
            </div>
           <div class="form-row">
            <div class="form-group col-md-6">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image"  >
                @error('image') 
                <div class="text-red-600">le champs est obligatoire</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="etat">Statut</label>
                <select class="form-control" id="etat" name="etat"  >
                    <option value="ouvert">Ouvert</option>
                    <option value="fermer">Fermer</option>
                </select>
                @error('etat') 
                <div class="text-red-600">le champs est obligatoire</div>
                @enderror
            </div>
           </div>
            <button type="submit" class="btn btn-submit ">Ajouter</button>
        </form>
        </div>
    
       
    
     
        
    </x-association-layout>
     --}}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       