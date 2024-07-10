<!-- resources/views/events/reservations.blade.php -->

<x-association-layout>

    <div class="flex justify-between mb-9">
        <h1 class="text-3xl -mb-11 font-bold">Réservations pour {{ $event->nom }}</h1>

        <a href="{{ route('utilisateurs.liste.bloque') }}">
            <button class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2" type="submit">
                Liste des utilisateurs bloqués
            </button>
        </a>
    </div>

    <!-- Lien pour imprimer les événements -->
    <a href="#" onclick="window.open('{{ route('evenement.export', $event->id) }}')"  class="btn btn-primary">Imprimer les événements</a>


    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            {{ session('error') }}
        </div>
    @endif

    <table class="min-w-full divide-y p-8 divide-gray-200 overflow-x-auto">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nom
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Statut
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Téléphone
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y my-7 divide-gray-200">
            @foreach ($reservations as $reservation)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="pt-2 flex-shrink-0 h-10 w-10">
                                <!-- Icône ou avatar de l'utilisateur -->
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $reservation->user->prenom }} {{ $reservation->user->nom }}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if ($reservation->statut == 'acceptee')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $reservation->statut }}
                            </span>
                        @elseif ($reservation->statut == 'confirmee')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-cyan-500">
                                {{ $reservation->statut }}
                            </span>
                        @else
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                {{ $reservation->statut }}
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $reservation->user->telephone }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $reservation->user->email }}
                    </td>
                    <td>

                        @role('association')
                            
                        <div class="flex">
                            <form action="{{ route('reservations.accept', $reservation->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="etat" placeholder="nom role">
                                <button class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-2 py-1 text-center mr-2" type="submit">
                                    Accepter
                                </button>
                            </form>
                            <form action="{{ route('reservations.decline', $reservation->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="etat" placeholder="nom role">
                                <button class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-2 py-1 text-center mr-2" type="submit">
                                    Décliner
                                </button>
                            </form>
                        </div>
                        @role
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-association-layout>
