<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Reservation;
use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;

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
        $evenements = Evenement::all();
        return view('evenements.accueil', compact('evenements'));
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEvenementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Evenement $event)
    {
        //
        return view('events.show', [
            'event' => $event,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evenement $evenement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvenementRequest $request, Evenement $evenement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {
        //
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
