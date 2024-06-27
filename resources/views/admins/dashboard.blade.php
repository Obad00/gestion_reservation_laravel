<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <a href="{{ route('roles.index') }}">Roles</a>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($associations as $association )
                        <td>     {{ $association->nom }}</td>
                        <td>     {{ $association->user->nom }}</td>
                    @endforeach();

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
