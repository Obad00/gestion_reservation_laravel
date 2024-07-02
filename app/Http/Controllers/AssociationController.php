<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Http\Requests\StoreAssociationRequest;
use App\Http\Requests\UpdateAssociationRequest;
use App\Models\User;
use App\Http\Requests\RegisterAssociationRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

}
