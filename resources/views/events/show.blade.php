<!-- resources/views/events/show.blade.php -->

<h1>Détails de l'événement {{ $event->name }}</h1>

<p>Date : {{ $event->date }}</p>
<p>Heure : {{ $event->time }}</p>
<!-- Autres détails de l'événement à afficher -->

<a href="{{ route('events.reservations', $event) }}">Voir les réservations</a>
