<x-admin-layout>
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
                    <a href="{{ route('roles.index') }}" class="inline-block bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mb-4">Roles</a>

                    <div class="p-6 text-gray-900">
                        <form action="{{ route('permissions.store') }}" method="POST">
                            @csrf
                            <div class="mb-4 flex">
                                <input type="text" name="name" placeholder="Nom de la permission" class="border mr-3 border-gray-300 p-2 w-52">
                                <button type="submit" class="bg-orange hover:bg-orange text-white font-bold py-2 px-4 rounded">Ajouter</button>
                            </div>
                        </form>
                    </div>

                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="border-b-2 py-2 bg-gray-100">N*</th>
                                <th class="border-b-2 py-2 bg-gray-100">Nom de la permission</th>
                                <th class="border-b-2 py-2 bg-gray-100">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=" ">
                            @foreach ($permissions as $index => $permission)
                                <tr>
                                    <td class="border px-4 py-2">{{ $index +1 }}</td>
                                    <td class="border px-4 py-2">{{ $permission->name }}</td>
                                    <td class="border px-4 py-2 flex items-center space-x-4">
                                        <a href="{{ route('permissions.edit', ['permission' => $permission->id]) }}" class="text-blue-500 hover:text-blue-700">Modifier</a>
                                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" class="inline-block">
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
</x-admin-layout>


