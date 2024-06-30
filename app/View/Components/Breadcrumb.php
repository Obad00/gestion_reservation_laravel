<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

// Déclaration de la classe Breadcrumb qui hérite de Component
class Breadcrumb extends Component
{
    // Déclaration de la propriété publique $breadcrumbs
    public $breadcrumbs;
    
    // Constructeur de la classe Breadcrumb
    public function __construct()
    {
        // Initialisation de la propriété $breadcrumbs en appelant la méthode generateBreadcrumbs
        $this->breadcrumbs = $this->generateBreadcrumbs();
    }

    // Méthode privée pour générer les breadcrumbs
    private function generateBreadcrumbs()
    {
        // Récupération du nom de la route actuelle
        $routeName = Route::currentRouteName();
        // Initialisation d'un tableau vide pour les breadcrumbs
        $breadcrumbs = [];

        // Découpage du nom de la route en parties
        $routeParts = explode('.', $routeName);

        // Initialisation du chemin
        $path = '';

        // Boucle sur chaque partie du nom de la route
        foreach ($routeParts as $part) {
            // Construction du chemin de la route
            $path .= ($path ? '.' : '') . $part;
            // Ajout d'un breadcrumb au tableau
            $breadcrumbs[] = [
                'name' => ucfirst($part), // Nom du breadcrumb
                'url' => url($path), // URL du breadcrumb
                'active' => $path === $routeName // Indique si le breadcrumb est actif
            ];
        }

        // Retourne le tableau des breadcrumbs générés
        return $breadcrumbs;
    }

    /**
     * Crée une nouvelle instance de composant.
     */
    /**
     * Obtient la vue / le contenu qui représente le composant.
     */
    public function render(): View|Closure|string
    {
        // Retourne la vue 'components.breadcrumb'
        return view('components.breadcrumb');
    }
}
