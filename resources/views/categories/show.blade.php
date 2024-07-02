<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <a href="{{ route('roles.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Roles</a>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="border-b-2 px-4 py-2 bg-gray-100">Nom du rôle</th>
                                <th class="border-b-2 px-4 py-2 bg-gray-100">Permissions</th>
                                <th class="border-b-2 px-4 py-2 bg-gray-100">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td class="border px-4 py-2">{{ $role->name }}</td>
                                    <td class="border px-4 py-2">
                                        <ul>
                                            @foreach ($role->permissions as $permission)
                                                <li>{{ $permission->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{-- <a href="{{ route('roles.assign-permissions', ['role' => $role->id]) }}"
                                            class="text-blue-500 hover:text-blue-700">Modifier les permissions</a> --}}
                                    </td>
                                </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
