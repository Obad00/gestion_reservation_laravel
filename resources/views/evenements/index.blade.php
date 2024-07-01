<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<div class="container justify-center ml-12 pl-6 mt-8">
    <h1 class="text-left">Événements à venir</h1>
    <br>
    <div class="grid  justify-center grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-10">
        @foreach($evenements as $evenement)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-sm">
                {{-- <img src="{{ $evenement->image_url }}" alt="{{ $evenement->nom }}" class="w-full h-64 object-cover"> --}}
                <img src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606" alt="Mountain" class="w-full h-64 object-cover">
                <div class="p-8">
                    <div class="flex justify-start items-center space-x-4 mb-2">
                        <div>
                            <span class="text-gray-600 block">{{ \Carbon\Carbon::parse($evenement->date)->format('d') }}</span>
                            <span class="text-gray-600">{{ \Carbon\Carbon::parse($evenement->date)->format('M') }}</span>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">
                                <a href="{{ route('evenements.detail', $evenement) }}">{{ $evenement->nom }}</a>
                            </h2>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                <a href="{{ route('evenements.detail', $evenement) }}">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                            </span>
                            <p class="text-gray-700 leading-tight mb-4">
                                {{ $evenement->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<x-footer/>
