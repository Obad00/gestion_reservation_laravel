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
    public function listeBloquee()
    {
        $associations = Association::withCount('evenements')->where('etat',false)->get();
        return view('admins.associations.bloquee',compact('associations'));
    }

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
    public function store(StoreAssociationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Association $association)
    {
        
        // Use the relationship to get the events associated with the specific association
        $evenements = $association->evenements;
        
        // Return the view with the association and its related events
        return view('admins.associations.show', compact('association', 'evenements'));
    }

    // bloquee un association 
    public function bloquee_un_associatiation(Association $association){
    $association->update([
        'etat' => false,
    ]);
    return redirect()->back()->with('success','association est '.$association->nom.' bloquee');
    }


    public function debloquee_un_associatiation(Association $association){
        $association->update([
            'etat' => true,
        ]);
        return redirect()->back()->with('success','association est '.$association->nom.' debloquee');
        }
    

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Association $association)
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

    public function register(RegisterAssociationRequest $request)
    {
        // Créer l'utilisateur
        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
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
        return redirect()->route('home');
    }
    public function inscription(){
        return view('admins.associations.incription');
    }
    // public function dashboard(){
    //     return view('admins.associations.dashboard');
    // }
    public function dashboard(){
    $utilisateurs = User::latest()->take(5)->get();
    $associations= Association::latest()->take(5)->get();
    $evenements= Evenement::latest()->take(3)->get();
    $reservations= Reservation::All();
 
    return view('associations.dashboard', compact('associations','evenements','reservations','utilisateurs'));
    }
}
