<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use App\Models\Association;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreAssociationRequest;
use App\Http\Requests\UpdateAssociationRequest;
use App\Http\Requests\RegisterAssociationRequest;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $associations = Association::withCount('evenements')->where('etat',true)->get();
        return view('admins.associations.index',compact('associations'));
    }

    // asssociations bloquees

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.association-register');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function register(RegisterAssociationRequest $request)
    {
        // Créer l'utilisateur
        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'password' => Hash::make($request->password),


        ])->assignRole('association');

        // Créer l'association associée à l'utilisateur
        $association = new Association([
            'nom' => $request->association_nom,
            'description' => $request->description,
            'logo' => $request->logo,
            'adresse' => $request->adresse,
            'contact' => $request->contact,
            'secteur' => $request->secteur,
            'ninea' => $request->ninea,
            'date_creation_association' => $request->date_creation_association,
            'etat' => $request->etat,
        ]);

        // Sauvegarder l'association liée à l'utilisateur
        $user->association()->save($association);

        // Connecter l'utilisateur
        Auth::login($user);

        // Rediriger vers la page d'accueil ou une autre page appropriée
        return redirect()->route('dashboard');
    }
    public function inscription(){
        return view('admins.associations.incription');
    }
    // public function dashboard(){
    //     return view('admins.associations.dashboard');
    // }
    public function dashboard()
{
    // Récupérer les derniers utilisateurs et associations
    $utilisateurs = User::latest()->take(5)->get();
    $associations = Association::latest()->take(5)->get();

    // Récupérer l'utilisateur connecté et son association
    $user = auth()->user();
    $association = $user->association;

    // Récupérer tous les événements de l'association
    $evenements = $association->evenements;

    // Récupérer toutes les réservations
    $reservations = Reservation::all();

    // Récupérer les événements passés et en cours
    $evenementsPasse = $evenements->where('date_evenement', '<=', now());
    $evenementsEncour = $evenements->where('date_evenement', '>=', now());

    // Compter les événements en cours et passés
    $countEvenementsEncour = $evenementsEncour->count();
    $countEvenementsPasse = $evenementsPasse->count();

    // Compter toutes les réservations
    $countReservations = $reservations->count();

    // Compter les réservations en cours (selon un statut, par exemple 'en cours')
    $countReservationsEncour = $reservations->where('date_evenement', '>=', now())->count();

    // Récupérer le dernier événement de l'association
    $dernierEvenement = $evenements->sortByDesc('date_evenement')->first();

    // Récupérer les réservations du dernier événement
    $reservationsDernierEvenement = $dernierEvenement ?
                                    Reservation::where('evenement_id', $dernierEvenement->id)->get() :
                                    collect();

    return view('associations.dashboard', compact(
        'associations',
        'evenements',
        'dernierEvenement',
        'reservations',
        'evenementsPasse',
        'reservationsDernierEvenement',
        'utilisateurs',
        'countEvenementsEncour',
        'countEvenementsPasse',
        'countReservations',
        'countReservationsEncour'
    ));
}




    public function listereservation(){
        $utilisateurs = User::latest()->take(5)->get();
        $reservations= Reservation::All();
        return view('associations.listereservation', compact('reservations','utilisateurs'));
    }

    public function store(StoreAssociationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Association $association)
    {
        //
    }

    public function show(Association $association)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssociationRequest $request, Association $association)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Association $association)
    {
        //
    }
}
