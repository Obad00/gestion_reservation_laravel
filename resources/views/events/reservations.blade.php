<!-- resources/views/events/reservations.blade.php -->

<h1>Réservations pour {{ $event->nom }}</h1>

<ul>
    @foreach ($reservations as $reservation)
        <li>{{ $reservation->user->nom }} - {{ $reservation->created_at }}</li>
        <li>Statut: {{ $reservation->statut }}</li>
        <li>
            {{-- @if ($reservation->statut === 'en attente') --}}
                <form method="POST" action="{{ route('reservations.accept', $reservation) }}">
                    @csrf
                    <button type="submit">Accepter</button>
                </form>

                <form method="POST" action="{{ route('reservations.decline', $reservation) }}">
                    @csrf
                    <button type="submit">Décliner</button>
                </form>
            {{-- @endif --}}
        </li>
    @endforeach
</ul>
