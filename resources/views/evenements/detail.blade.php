<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<navbar>
    <div class="navbar">
        <div class="navbar-content">
            <div>
                <h1 class="navbar-title">OnyxEvents</h1>
            </div>
            <div class="navbar-links">
                <a href="#" class="navbar-link">Accueil</a>
                <a href="#" class="navbar-link">À propos</a>
                <a href="#" class="navbar-link">Événement</a>
                <a href="#" class="navbar-link">Contact</a>
            </div>
            <div>
                <button class="navbar-button">Connexion</button>
            </div>
        </div>
    </div>
</navbar>
<style>
    .navbar {
    width: 100%;
    padding: 1rem 0;
    border-bottom: 1px solid #3C2A4D;
    background-color: #3C2A4D;
}

.navbar-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 5rem;
    font-weight: 600;
    color: white;
}

.navbar-title {
    font-size: 1.5rem;
}

.navbar-links {
    display: flex;
    gap: 2rem;
}

.navbar-link {
    color: white;
    text-decoration: none;
    transition: color 0.3s;
}

.navbar-link:hover {
    color: #D1D5DB; /* Light gray */
}

.navbar-button {
    padding: 0.5rem 1.5rem;
    background-color: #3C2A4D;
    color: white;
    border: none;
    border-radius: 1.5rem;
    font-weight: 600;
    transition: background-color 0.3s;
}

.navbar-button:hover {
    background-color: #2C1F3B; /* Darker shade of #3C2A4D */
}

</style>
<br>
<div class="text-center">
    <h2 class="font-bold text-2xl md:text-4xl my-4">Chaque événement compte : changeons le monde ensemble.</h2>
    <div class="max-w-2xl md:max-w-4xl mx-auto dark:text-gray-300">
        <p>
            Mattis et aliquam fermentum sed sagittis eu elit mauris. Nisl eros vel neque vitae lorem molestie.
        </p>
    </div>
</div>

<h1>{{ $evenement->nom }}</h1>
<p>{{ $evenement->description }}</p>

<form method="POST" action="{{ route('reservations.store', $evenement) }}">
    @csrf
    <button type="submit">Je m'inscris à l'évènement</button>
</form>

<x-footer/>
