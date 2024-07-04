<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('category.update', $categorie->id ) }}" method="POST">
                        @csrf
                        @method('put')
                        <input type="text" name="name" placeholder="nom categorie" value="{{ $categorie->name }}">
                        <button type="submit"> Modifier</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
