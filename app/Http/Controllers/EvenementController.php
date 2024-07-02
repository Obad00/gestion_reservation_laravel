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
// use Illuminate\Http\Request;


class EvenementController extends Controller
{

//     public function voirNextEvent()
// {
//     // Récupérer l'événement le plus proche en fonction de la date
//     $evenement = Evenement::where('date_evenement', '>=', now())->orderBy('date_evenement', 'asc')->first();

//     if (!$evenement) {
//         return view('events.no-events'); // Vue à afficher s'il n'y a pas d'événements
//     }

//     return redirect()->route('home')->with('evenement', $evenement);
// }

public function tousevenements()
{
    $evenements = Evenement::all(); // Récupère tous les événements depuis la base de données

    return view('evenements.tousevents', compact('evenements'));
}

    public function accueil()
    {
        $evenement = Evenement::where('date_evenement', '>=', now())->orderBy('date_evenement', 'asc')->first();

        if (!$evenement) {
            return view('events.no-events'); // Vue à afficher s'il n'y a pas d'événements
        }
        $evenements = Evenement::all();
        return view('welcome', compact('evenements', 'evenement'));
    }

    public function detail(Evenement $evenement)
    {
        return view('evenements.detail', compact('evenement'));
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


    //     $evenements=Evenement::all();
    //     return view ('/evenements/index',compact('evenements'));
    //     //evenements.index
    // }
    public function affichageevenement(){
        $evenements=Evenement::all();
        return view ('/evenements/index',compact('evenements'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories= Categorie::all();
        $associations = auth()->user()->associations;
        return view('evenements.ajoutEvenement', compact('associations','categories'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'localite' => 'required|string|max:255',
            'date_evenement' => 'required|date',
            'date_limite_inscription' => 'required|date',
            'nombre_place' => 'required|integer',
            'image' => 'nullable|string',
        ]);

        // Vérifier si l'utilisateur authentifié est le propriétaire de l'association
        $user = auth()->user();
        $association = $user->association;

        if (!$association) {
            return redirect()->route('association.evenements.create')->withErrors('Vous devez être associé à une association pour créer un événement.');
        }

        $evenement = new Evenement();
        $evenement->nom = $request->nom;
        $evenement->description = $request->description;
        $evenement->localite = $request->localite;
        $evenement->date_evenement = $request->date_evenement;
        $evenement->date_limite_inscription = $request->date_limite_inscription;
        $evenement->nombre_place = $request->nombre_place;
        $evenement->image = $request->image;
        $evenement->categorie_id = $request->categorie_id;

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
        return view('evenements.mofifierEvenement', compact('evenement','categories'));
  }
  public function update(Request $request, $id)
{
    $user = auth()->user();
    $association = $user->association;

    if (!$association) {
        return redirect()->route('association.evenements.create')->withErrors('Vous devez être associé à une association pour créer un événement.');
    }

    // Validation des données
    $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'required|string',
        'localite' => 'required|string|max:255',
        'date_evenement' => 'required|date',
        'date_limite_inscription' => 'required|date',
        'nombre_place' => 'required|integer',
        'image' => 'nullable|string',
        'categorie_id' => 'required|exists:categories,id',
    ]);

    // Trouver l'événement à mettre à jour
    $evenement = Evenement::find($id);

    if (!$evenement) {
        return redirect()->route('association.evenements.index')->withErrors('Événement introuvable.');
    }

    // Vérifier si l'événement appartient à l'association de l'utilisateur
    if ($evenement->association_id != $association->id) {
        return redirect()->route('association.evenements.index')->withErrors('Vous n\'avez pas la permission de mettre à jour cet événement.');
    }

    // Mise à jour des données de l'événement
    $evenement->nom = $request->nom;
    $evenement->description = $request->description;
    $evenement->localite = $request->localite;
    $evenement->date_evenement = $request->date_evenement;
    $evenement->date_limite_inscription = $request->date_limite_inscription;
    $evenement->nombre_place = $request->nombre_place;
    $evenement->image = $request->image;
    $evenement->categorie_id = $request->categorie_id;
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

    // Passer les données à la vue
    return view('events.reservations', [
        'event' => $event,
        'reservations' => $reservations,
    ]);
}

}
