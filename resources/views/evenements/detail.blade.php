<h1>{{ $evenement->nom }}</h1>
<p>{{ $evenement->description }}</p>

<form method="POST" action="{{ route('reservations.store', $evenement) }}">
    @csrf
    <button type="submit">Réserver</button>
</form>