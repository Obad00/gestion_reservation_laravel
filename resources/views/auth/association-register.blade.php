<form method="POST" action="{{ route('association-register.store') }}">
    @csrf

    <!-- Champs pour l'utilisateur -->
    <div>
        <label for="nom">Nom</label>
        <input id="nom" type="text" name="nom" value="{{ old('nom') }}" required>
    </div>

    <div>
        <label for="prenom">Prénom</label>
        <input id="prenom" type="text" name="prenom" value="{{ old('prenom') }}" required>
    </div>

    <div>
        <label for="telephone">Téléphone</label>
        <input id="telephone" type="text" name="telephone" value="{{ old('telephone') }}" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Confirmez le mot de passe</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <!-- Champs pour l'association -->
    <div>
        <label for="association_nom">Nom de l'association</label>
        <input id="association_nom" type="text" name="association_nom" value="{{ old('association_nom') }}" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" required>{{ old('description') }}</textarea>
    </div>

    <div>
        <label for="logo">Logo (URL)</label>
        <input id="logo" type="text" name="logo" value="{{ old('logo') }}" required>
    </div>

    <div>
        <label for="adresse">Adresse</label>
        <input id="adresse" type="text" name="adresse" value="{{ old('adresse') }}" required>
    </div>

    <div>
        <label for="contact">Contact</label>
        <input id="contact" type="number" name="contact" value="{{ old('contact') }}" required>
    </div>

    <div>
        <label for="secteur">Secteur</label>
        <input id="secteur" type="text" name="secteur" value="{{ old('secteur') }}" required>
    </div>

    <div>
        <label for="ninea">NINEA</label>
        <input id="ninea" type="text" name="ninea" value="{{ old('ninea') }}" required>
    </div>

    <div>
        <label for="date_creation_association">Date de création</label>
        <input id="date_creation_association" type="date" name="date_creation_association" value="{{ old('date_creation_association') }}" required>
    </div>

    <div>
        <label for="etat">État</label>
        <input id="etat" type="checkbox" name="etat" value="1" {{ old('etat') ? 'checked' : '' }} required>
    </div>

    <button type="submit">S'inscrire</button>
</form>
