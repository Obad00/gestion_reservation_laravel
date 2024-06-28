<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif
        @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-green-700 px-4 py-3 rounded mb-6">
            {{session('error') }}
        </div>
         @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <a href="{{ route('permissions.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Permissions</a>
                  
                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf
                        <div class="mb-4 flex">
                            <input type="text" name="name" placeholder="Nom du rôle" class="border mr-3 border-gray-300 p-2 w-52">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ajouter</button>
                        </div>
                    </form>

                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="border-b-2 px-4 py-2 bg-gray-100">Nom du rôle</th>
                                <th class="border-b-2 px-4 py-2 bg-gray-100">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td class="border px-4 py-2">{{ $role->name }}</td>
                                    <td class="border px-4 py-2 flex items-center space-x-4">
                                        <a href="{{ route('roles.edit', ['role' => $role->id]) }}" class="text-blue-500 hover:text-blue-700">Modifier</a>
                                        <a href="{{ route('roles.permissions', ['role' => $role->id]) }}" class="text-blue-500 hover:text-blue-700">Assigner des permissions</a>
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
