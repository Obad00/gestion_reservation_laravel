<!-- resources/views/components/category-breadcrumb.blade.php -->

@props(['category', 'breadcrumbs'])

<div>
    <!-- Début de la navigation du fil d'Ariane -->
    <nav class="flex mb-5" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2">
            <li class="inline-flex items-center">
                <!-- Lien vers la page principale avec des classes pour le style -->
                <a href="{{ route('evenements.index') }}" class="text-gray-700 hover:text-gray-900 inline-flex items-center">
                    <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    <!-- Texte du lien -->
                    Tous
                </a>
            </li>
    
            <!-- Affichage de la catégorie actuelle -->
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <!-- Texte de l'élément du fil d'Ariane, sans lien car c'est la page actuelle -->
                    <span class="text-gray-400 ml-1 md:ml-2 text-sm font-medium" aria-current="page">{{ $category->nom }}</span>
                </div>
            </li>
    
            <!-- Boucle pour chaque élément du fil d'Ariane pour les catégories parentes -->
            @foreach($breadcrumbs as $breadcrumb)
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <!-- Lien vers la page correspondante du breadcrumb -->
                        <a href="{{ $breadcrumb['url'] }}" class="text-gray-700 hover:text-gray-900 ml-1 md:ml-2 text-sm font-medium">{{ $breadcrumb['name'] }}</a>
                    </div>
                </li>
            @endforeach
        </ol>
    </nav>
</div>