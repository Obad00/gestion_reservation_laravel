<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\User;
use App\Models\Evenement;

use App\Models\Association;
use Illuminate\Http\Request;

use App\Models\Reservation;

use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;


use Illuminate\Support\Facades\Storage;

// use Illuminate\Http\Request;


class EvenementController extends Controller
{

    // public function printEvents()
    // {
    //     $reservations = Reservation::all(); // Récupérez vos données

    //     return view('associations.pdf', compact('reservations'));
    // }

    public function printEvents(Evenement $event)
    {

        // Récupérer les réservations pour cet événement spécifique
        $reservations = Reservation::where('evenement_id', $event->id)
        ->where('statut', 'acceptee')
        ->get();


        // Passer les données à la vue PDF
        return view('associations.pdf', [
            'event' => $event,
            'reservations' => $reservations,
        ]);
    }



//     public function voirNextEvent()
// {
//     // Récupérer l'événement le plus proche en fonction de la date
//     $evenement = Evenement::where('date_evenement', '>=', now())->orderBy('date_evenement', 'asc')->first();

public function tousevenements()
{
    $evenements = Evenement::all(); // Récupère tous les événements depuis la base de données

    return view('evenements.tousevents', compact('evenements'));
}

    public function accueil()
    {
        $evenement = Evenement::where('date_evenement', '<=', now())->orderBy('date_evenement', 'asc')->first();

        // if (!$evenement) {
        //     return view('events.no-events'); // Vue à afficher s'il n'y a pas d'événements
        // }
        $evenements = Evenement::all();
        return view('welcome', compact('evenements', 'evenement'));
    }

    public function detail(Evenement $evenement)
    {
        // Récupère l'association liée à cet événement
        $association = $evenement->association;

        // Récupère les autres événements de la même association
        $evenements = $association->evenements()->where('id', '!=', $evenement->id)->get();

        // Retourne la vue avec les données nécessaires
        return view('evenements.detail', compact('evenement', 'evenements'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //
        $events = Evenement::all(); // Récupérer tous les événements depuis la base de données

    return view('events.index', [
        'events' => $events,
    ]);
    }




    public function affichageevenement(){
        $user = auth()->user();
        $association = $user->association;
        $categories= Categorie::all();

        if (!$association) {
            return redirect()->route('home')->withErrors('Vous devez être associé à une association pour voir vos événements.');
        }

        $evenements = $association->evenements;

        return view('associations.evenements.index', compact('evenements','categories'));
    }
    

    public function evenementPassee(){
        $user = auth()->user();
        $association = $user->association;
        $categories= Categorie::all();

        if (!$association) {
            return redirect()->route('home')->withErrors('Vous devez être associé à une association pour voir vos événements.');
        }
        $evenements = $association->evenements->where('date_evenement','<=', now());

        return view('associations.evenements.evenements_passee', compact('evenements','categories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories= Categorie::all();
        // $associations = auth()->user()->associations;
dd('test')   ; }



    /**
     * Store a newly created resource in storage.
     */




    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|string|max:50|min:4',
            'description' => 'required|string',
            'localite' => 'required|string|max:50|min:4',
            'date_evenement' => 'required|date|after:today',
            'date_limite_inscription' => 'required|date|after:today',
            'nombre_place' => 'required|integer|min:0',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categorie_id' => 'required|integer|exists:categories,id',
        ], [
            'date_evenement.after' => 'La date de l\'événement doit être supérieure à la date d\'aujourd\'hui.',
            'date_limite_inscription.after' => 'La date limite d\'inscription doit être supérieure à la date d\'aujourd\'hui.',
            'nombre_place.min' => 'Le nombre de places doit être un nombre positif.',
        ]);


        // Vérifier si l'utilisateur authentifié est associé à une association
        $user = auth()->user();
        $association = $user->association;

        if (!$association) {
            return redirect()->route('association.evenements.create')->withErrors('Vous devez être associé à une association pour créer un événement.');
        }


        if (!$association->etat ===true) {
            return redirect()->back()->with('error','Vous compte est bloquee !!!.');
        }


        // Gérer le téléchargement de l'image
        $image = null;
        if ($request->hasFile('image')) {
            // Stocker l'image dans le répertoire 'public/evenements'
            $chemin_image = $request->file('image')->store('public/evenements');
            // Vérifier si le chemin de l'image est bien généré
            if ($chemin_image) {
                // Récupérer le nom du fichier de l'image
                $image = basename($chemin_image);
            } else {
                return redirect()->back()->with('error', 'Erreur lors du téléchargement de l\'image.');
            }
        }

        // Créer le nouvel événement
        $evenement = new Evenement();
        $evenement->nom = $request->nom;
        $evenement->description = $request->description;
        $evenement->localite = $request->localite;
        $evenement->date_evenement = $request->date_evenement;
        $evenement->date_limite_inscription = $request->date_limite_inscription;
        $evenement->nombre_place = $request->nombre_place;
        $evenement->image = $image;
        $evenement->categorie_id = $request->categorie_id;
        $evenement->association_id = $association->id;

        // Enregistrer l'événement dans l'association
        $association->evenements()->save($evenement);

        return redirect()->route('association.evenements.index')->with('success', 'Événement créé avec succès.');
    }



    /**
     * Display the specified resource.
     */

    public function show(Evenement $evenement,$id)
    {
        $evenement=Evenement::find($id);
        return view('evenements/detailEvenement',compact('evenement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories= Categorie::all();

        $evenement = Evenement::find($id);
        return view('associations.evenements.mofifierEvenement', compact('evenement','categories'));
    }
    public function update(Request $request, $id)
{
     $request->validate([
            'nom' => 'required|string|max:50|min:4',
            'description' => 'required|string',
            'localite' => 'required|string|max:50|min:4',
            'date_evenement' => 'required|date|after:today',
            'date_limite_inscription' => 'required|date|after:today',
            'nombre_place' => '|integer|min:0',
            'image' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categorie_id' => 'required|integer|exists:categories,id',
        ], [
            'date_evenement.after' => 'La date de l\'événement doit être supérieure à la date d\'aujourd\'hui.',
            'date_limite_inscription.after' => 'La date limite d\'inscription doit être supérieure à la date d\'aujourd\'hui.',
            'nombre_place.min' => 'Le nombre de places doit être un nombre positif.',
        ]);

    // Vérifier si l'utilisateur authentifié est associé à une association
    $user = auth()->user();
    $association = $user->association;

    if (!$association) {
        return redirect()->route('association.evenements.index')->withErrors('Vous devez être associé à une association pour mettre à jour un événement.');
    }

    // Trouver l'événement à mettre à jour
    $evenement = $association->evenements()->findOrFail($id);

    // Gérer le téléchargement de la nouvelle image si présente
    if ($request->hasFile('image')) {
        // Supprimer l'ancienne image si elle existe
        if ($evenement->image) {
            Storage::delete('public/evenements/' . $evenement->image);
        }

        // Stocker la nouvelle image dans le répertoire 'public/evenements'
        $chemin_image = $request->file('image')->store('public/evenements');
        if ($chemin_image) {
            // Récupérer le nom du fichier de la nouvelle image
            $evenement->image = basename($chemin_image);
        } else {
            return redirect()->back()->with('error', 'Erreur lors du téléchargement de l\'image.');
        }
    }

    // Mettre à jour les autres champs de l'événement
    $evenement->nom = $request->nom;
    $evenement->description = $request->description;
    $evenement->localite = $request->localite;
    $evenement->date_evenement = $request->date_evenement;
    $evenement->date_limite_inscription = $request->date_limite_inscription;
    $evenement->nombre_place = $request->nombre_place;
    $evenement->categorie_id = $request->categorie_id;

    // Enregistrer les modifications
    $evenement->save();

    return redirect()->route('association.evenements.index')->with('success', 'Événement mis à jour avec succès.');
}


    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement,$id)
    {
        $evenement=Evenement::find($id);
        $evenement->delete();
        return back();
    }


    public function listeUserBloquee()
    {
        $utilisateurs = User::all()->where('etat',false);
        return view('evenements.reservation',compact('utilisateurs'));
    }




    public function showReservations(Evenement $event)
    {
    // Récupérer les réservations pour cet événement spécifique
    $reservations = Reservation::where('evenement_id', $event->id)->get();

    // Récupérer toutes les réservations
    // Passer les données à la vue
    return view('associations.reservations.reservations', [
        'event' => $event,
        'reservations' => $reservations,
    ]);
    }




}
