<x-admin-layout>
    <div class="container mx-auto gap-2 px-4">
        {{-- <h1 class="text-3xl mb-11 font-bold ">{{$evenement->association->nom}}</h1> --}}
        <div class="block flex-row">
            <h1 class="text-3xl font-bold">{{ $association->nom }}</h1>
            <p class="mt-4">{{ $association->description }}</p>
    
           
            <div class=" py-1">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-blac mb-8">Les evenements de <span>{{ $association->nom }}</span></h2>
                    @if($evenements->isEmpty())
                    <p>No events found for this association.</p>
                @else
        
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                        @foreach($evenements as $evenement)
                        <div class="bg-white rounded-lg shadow-lg p-8">
                            <div class="relative overflow-hidden">
                                <img class="object-cover w-full h-full" src="https://simplon.sn/wp-content/uploads/2024/01/IMG_6720-scaled.jpg" alt="Product">
                                {{-- <img class="object-cover w-full h-full" src="{{$evenement->image}}" alt="{{$evenement->nom}}"> --}}
                                <div class="absolute inset-0 bg-black opacity-40"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-gray-900 font-bold text-lg">{{$evenement->nom}}</span>
                                <button class=" text-gray-600 py-2 px-4 rounded-full font-bold ">{{$evenement->created_at}}</button>
                            </div>
                            <p class="text-gray-500 text-sm mt-2">{{$evenement->description}}</p>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-gray-900 font-bold text-lg">{{$evenement->nombre_place}}</span>
                            </div>
                        </div>
                        @endforeach
                      
                 
                        
                    </div>
                    @endif
                </div>
            </div>
          </div>





</x-admin-layout>
