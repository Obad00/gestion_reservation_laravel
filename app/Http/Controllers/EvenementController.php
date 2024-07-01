<?php

namespace App\Http\Controllers;

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

    return view('evenements.index', compact('evenements'));
}

    public function accueil()
    {
        $evenement = Evenement::where('date_evenement', '>=', now())->orderBy('date_evenement', 'asc')->first();

        if (!$evenement) {
            return view('events.no-events'); // Vue à afficher s'il n'y a pas d'événements
        }
        $evenements = Evenement::all();
        return view('evenements.accueil', compact('evenements', 'evenement'));
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


        $associations = auth()->user()->associations;
        return view('evenements.ajoutEvenement', compact('associations'));
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'nom' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'localite' => 'required|string',
        //     'date_evenement' => 'required|date',
        //     'date_limite_inscription' => 'required|date|before:date_evenement',
        //     'nombre_place' => 'required|integer',
        //     'image' => 'required|string',
        //     'association_id' => 'required|exists:associations,id',
        // ]);
        $evenement = new Evenement();
        $evenement->nom = $request->nom;
        $evenement->description = $request->description;
        $evenement->localite = $request->localite;
        $evenement->date_evenement = $request->date_evenement;
        $evenement->date_limite_inscription = $request->date_limite_inscription;
        $evenement->nombre_place = $request->nombre_place;
        $evenement->image = $request->image;
        $evenement->association_id = $request->association_id;
        $evenement->save();

        // Vérifier si l'utilisateur authentifié est le propriétaire de l'association
        $association = auth()->user()->association()->findOrFail($request->association_id);

        $association->evenements()->create($request->all());

        return redirect()->route('evenements.index')->with('success', 'Événement créé avec succès.');
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
        $evenement = Evenement::find($id);
        return view('evenements.mofifierEvenement', compact('evenement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $evenement = Evenement::find($id);
        $evenement->nom = $request->nom;
        $evenement->description = $request->description;
        $evenement->localite = $request->localite;
        $evenement->date_evenement = $request->date_evenement;
        $evenement->date_limite_inscription = $request->date_limite_inscription;
        $evenement->nombre_place = $request->nombre_place;
        $evenement->image = $request->image;
        $evenement->association_id = $request->association_id;
        $evenement->update();

        $association = auth()->user()->associations()->findOrFail($request->association_id);

        $association->evenements()->create($request->all());
        return redirect('index/Evenement');
    }

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
