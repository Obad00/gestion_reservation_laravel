<!-- resources/views/events/index.blade.php -->

<h1>Liste des événements</h1>

<ul>
    @foreach ($events as $event)
        <li>
            <a href="{{ route('events.show', $event) }}">
                {{ $event->nom }}
            </a>
        </li>
    @endforeach
</ul>
